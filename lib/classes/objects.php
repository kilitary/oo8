<?
require_once("/home/new.008.ru/html/lib/ImageResize.php");

class Objects
{
	public static function DeleteCompany($company_id, $filials = false)
	{
		global $app;
		
		mlog("DeleteCompany $cid");
		if ($filials)
		{
			$cids = $app->db->query("SELECT cID FROM _it_FIRMS 
				WHERE cID = ?i OR parent = ?i OR pID = ?i", array(
					$company_id,
					$company_id,
					$company_id
					), 'col');
			foreach ($cids as $cid)
			{
				mlog("delete $cid");
				elasticsearch::deleteCompany($cid);
				$app->db->query("DELETE FROM _it_FIRMS WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_FIRMS_ATTRIBS WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES_METRO WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_ADS WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_FIRMS_INPUT WHERE cID = ?", array(
					$cid
					));
				$app->db->query("DELETE FROM _it_STUFF WHERE linkID = ?", array(
					$cid
					));
			}
		}
		else
		{
			elasticsearch::deleteCompany($company_id);
			
			$app->db->query("DELETE FROM _it_FIRMS WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_FIRMS_ATTRIBS WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES_METRO WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_ADS WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_FIRMS_INPUT WHERE cID = ?", array(
				$company_id
				));
			$app->db->query("DELETE FROM _it_STUFF WHERE linkID = ?", array(
				$company_id
				));
		}
	}
	public static function GetCompanyNews($company_id)
	{
		global $app;
		$news = $app->db->query(
			"SELECT  caption,body,linkID as cID,sID FROM _it_STUFF
			LEFT JOIN _it_STUFF_LANG USING(sID)
			WHERE linkID = ?i AND stuff_type='conews'", array(
				$company_id
				), 'assoc');
		
		return $news;
	}
	public static function getRandomCompanys($cnt)
	{
		global $app;
		
		$pics100x60 = glob($_SERVER['DOCUMENT_ROOT'] . "/it_sites/008.ru/content/ilogos/10060/*");
		
		while ($cnt --)
		{
			$pic = $pics100x60[mt_rand(0, count($pics100x60) - 1)];
			
			preg_match("#r(\w+)\.(\w+)#smi", $pic, $m);
			$company = Objects::GetCompanyById($m[1]);
			$company['src'] = "/content/ilogos/10060/r$m[1].$m[2]";
			$companys_random[] = $company;
		}
		return $companys_random;
	}
	public static function getCatalogSubcatsById($id)
	{
		global $app;
		
		// $cached = Cache::get("catalog/$id"."/subcats");
		if (! $cached)
		{
			$data = $app->db->query(
				"SELECT  discount_count,objects_count,cat,caption,rID,parent FROM _it_RUBRICS 
				WHERE parent = ?i AND objects_count > 0
				ORDER BY caption", array(
					$id
					), 'assoc');
			Cache::set("catalog/$id" . "/subcats", $data);
			return $data;
		}
		return $cached;
	}
	public static function getCatalogByCode($code)
	{
		global $app;
		
		$cached = Cache::get("catalog/" . $code);
		if (! $cached)
		{
			$data = $app->db->query(
				"SELECT  discount_count,objects_count,description, cat,caption,rID,parent
				FROM _it_RUBRICS WHERE parent = 1 AND cat = ?", array(
					$code
					), 'assoc');
			Cache::set("catalog/" . $code, $data);
			mlog("getCatalogByCode($code) = " . count($data));
			return $data;
		}
		return $cached;
	}
	public static function GetCompanyById($company_id, $fromdb = false, 
		$all = false, $opts = array())
	{
		global $app;
		
		assert($company_id > 0);
		
		$key = "profile/company_" . sprintf("%07d", $company_id);
		
		if (!$cached || $fromdb)
		{
			$ms = microtime(true);
			$company = $app->db->query(
				"SELECT ownrsID,office_type,ownership_type,firm_type,license,actual_date,slogan,
				discount008,name_aliases,pID, discount_html,info as cinfo,correct_contacts, 
				contracttime, oID, uID, metadesc, metakeys, 
				_it_SPR_OFFICE_TYPES.caption AS office_caption,ordernum,published,  
				rsID,parent,shortname,title,razm_type,co_names,co_rubrics,work_time,firm_html,
				co_phones,search,fullname,_it_FIRMS.cID AS cID,_it_FIRMS.info, _it_FIRMS.info as cinfo, dateon, dateoff, _it_SPR_FIRM_RAZM.caption AS razm_caption,
				_it_SPR_OWNERSHIP_TYPES.caption as ownership_title,modifydate  , view_setup
				FROM _it_FIRMS
				LEFT JOIN _it_FIRMS_INPUT USING(cID)
				LEFT JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID=_it_FIRMS.razm_type 
				LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type 
				LEFT JOIN _it_SPR_OWNERSHIP_TYPES ON _it_SPR_OWNERSHIP_TYPES.ID = _it_FIRMS.ownership_type 
				WHERE _it_FIRMS.cID = ?i", array(
					$company_id
					), 'row');
			

			$company['addr'] = $app->db->query(
				"SELECT SQL_CACHE info,region,area,city,district,street,dom,korp,lit,
				transport, `index`, lat, lng,name_menu 
				FROM _it_FIRMS_ADDRESSES 
				WHERE cID=?i", array(
					$company_id
					), 'row');
			
			$company['addr']['region'] = preg_replace("#(\s+\(г\))#smi", "", 
				$company['addr']['region']);
			
			$attribs = $app->db->query(
				"SELECT SQL_CACHE info,type,value,pos, faID 
				FROM _it_FIRMS_ATTRIBS 
				WHERE cID = ?i
				ORDER BY pos DESC
				", array(
					$company_id
					), 'assoc');
			foreach ($attribs as $attr)
			{
				$company['attribs'][$attr['type']][] = array(
					'value' => $attr['value'], 
					'info' => $attr['info'],
					'type' => $attr['type']
					);
			}
			$company['attr_all'] = $attribs;
			// print_r($company);
			
			$cats = $app->db->query("SELECT rubrics FROM _it_RUBRICS_SETS 
				WHERE rsID = ?i", array(
					$company['rsID']
					), 'el');
			
			$rids = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS 
				WHERE rsID = ?", array(
					$company['rsID']
					), 'col');
			
			foreach ($rids as $rid)
			{
				$subcat = $app->db->query(
					"SELECT SQL_CACHE discount_count,objects_count,parent,cat,caption 
					FROM _it_RUBRICS WHERE rID = ?", array(
						$rid
						), "row");
				$code = $subcat['cat'];
				$ssubcat = $subcat['caption'];
				$parent_cat = $app->db->query("SELECT cat FROM _it_RUBRICS WHERE rID = ?", 
					array(
						$subcat['parent']
						), "el");
				$subcat = array(
					'name' => $ssubcat,
					'code' => $code,
					'parent_cat' => $parent_cat
					);
				if ($code && $parent_cat && $rid != 0)
					$company['subcats'][] = $subcat;
			}

			

			$dir = "it_sites/008.ru/content/coimgs/" . $company_id . "/or/*.*";
		//$ms = microtime(true);
			$files = glob($dir);

		// l = 604 x 400
		// s = 100 x 66
		// t = 270 x 178

			$pics = array();
			foreach ($files as $file)
			{

				$pic = pathinfo($file);
				if($pic['basename'] == "Thumbs.db")
				{
					unlink($file);
					continue;
				}
				if (is_file("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_t.jpg"))
				{
				// mlog("pic $pic[filename]");
					$pics[] = $pic['filename'];
				}
				else if(!strstr($file, ".bmp"))
				{
					mlog("creating thumb $file [$pic[filename]]");

					try 
					{
						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(270, 178);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_t.jpg");

						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(100, 66);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_s.jpg");

						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(604, 400);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_l.jpg");

						$pics[] = $pic['filename'];
					}
					catch(Exception $e)
					{
						mlog("exception: ".$e->getMessage());
					}

				}
			}
			$company['pics'] = $pics;
		
			//$ms = microtime(true)-$ms;
			//mlog(count($pics)." pics took $ms");
			
			$company['offices'] = array();
			//if ($all)
				//$published = '';
			//else
			$published = "AND _it_FIRMS.published = 'yes'";
		//	mlog("pub=".$published);
			$company['addr'] = $app->db->query(
				"SELECT SQL_CACHE info, name_menu,region,area,city,district,street,dom,korp,lit,
				transport, `index`, lat, lng 
				FROM _it_FIRMS_ADDRESSES 
				WHERE cID=?i", array(
					$company_id
					), 'row');
			//print_r($company['addr']);
			$offices = $app->db->query(
				"SELECT SQL_CACHE _it_FIRMS.pos,_it_FIRMS.office_type,_it_SPR_OFFICE_TYPES.caption as office_caption,
				shortname,fullname,cID,published, work_time
				FROM _it_FIRMS 
				LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type 
				WHERE (pID = ?i AND cID != pID)  $published
				ORDER BY _it_FIRMS.shortname DESC, _it_FIRMS.office_type ASC", array(
					$company_id
					), 'assoc');
			foreach ($offices as $office)
			{
				$uniqueDistricts[$office['shortname']] = 1;
				$adv_company = $office;

				$adv_company['metros'] = $app->db->query(
				"SELECT SQL_CACHE metro,line,dist,_it_SPR_METRO.class 
				FROM _it_FIRMS_ADDRESSES_METRO
				LEFT JOIN _it_SPR_METRO ON _it_SPR_METRO.caption = _it_FIRMS_ADDRESSES_METRO.metro 
				WHERE cID = ?i", array(
					$office['cID']
					), 'assoc');

				$adv_company['addr'] = $app->db->query(
					"SELECT SQL_CACHE info, name_menu,region,area,city,district,street,dom,korp,lit,
					transport, `index`, lat, lng 
					FROM _it_FIRMS_ADDRESSES 
					WHERE cID=?i", array(
						$office['cID']
						), 'row');
				
				$attribs = $app->db->query(
					"SELECT SQL_CACHE  info,type,value 
					FROM _it_FIRMS_ATTRIBS 
					WHERE cID=?i
					ORDER BY pos DESC
					", array(
						$office['cID']
						), 'assoc');
				foreach ($attribs as $attr)
				{
					$adv_company['attribs'][$attr['type']][] = array(
						'value' => $attr['value'],
						'info' => $attr['info']
						);
				}
				
				$adv_company['cID'] = $office['cID'];
				
				$adv_company['addr']['region'] = preg_replace("#(\s+\(г\))#smi", "", 
					$adv_company['addr']['region']);
				$company['offices'][] = $adv_company;
				
				if ($adv_company['addr']['district'])
					$company['district_offices'][$adv_company['addr']['district']][] = $adv_company;
				else
					$company['district_offices']['global'][] = $adv_company;
			}
			$company['uniqueDistricts'] = $uniqueDistricts;
			
			$company['metros'] = $app->db->query(
				"SELECT SQL_CACHE metro,line,dist,_it_SPR_METRO.class 
				FROM _it_FIRMS_ADDRESSES_METRO
				LEFT JOIN _it_SPR_METRO ON _it_SPR_METRO.caption = _it_FIRMS_ADDRESSES_METRO.metro 
				WHERE cID = ?i", array(
					$company_id
					), 'assoc');
			
			if(!$opts['old_stuff'])
				$and = "AND _it_STUFF.published='yes' ";
			if(!$opts['allstuff'])
				$periodcheck="AND (
					(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
						DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
			OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
			OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))";

			if($all)
			{
				$stuffs = $app->db->query(
					"SELECT SQL_CACHE _it_STUFF_PERIOD.dateon,_it_STUFF_PERIOD.dateoff,stuff_type,caption,
					notice,body,sID,linkID as cID
					FROM _it_STUFF
					LEFT JOIN _it_STUFF_LANG USING (sID)
					LEFT JOIN _it_STUFF_PERIOD USING (sID)
					WHERE  linkID = ?i $and 
					$periodcheck
				ORDER BY sID DESC
				", array(
					$company_id
					), 'assoc');
				$company['conews'] = array();
				$company['discount'] = array();
				$company['info'] = array();
				$company['vacancy'] = array();
				$company['articles'] = array();
				foreach ($stuffs as $stuff)
				{
					$company[$stuff['stuff_type']][] = $stuff;
					$company['stuff'][$stuff['stuff_type']][] = $stuff;
				}
			}
			$company['parentcID'] = $company['parent'];
			if ($company['pID'] && $company['pID'] != $company_id && $company['pID'] > 1)
			{
				$company['parent'] = $app->db->query(
					"SELECT  SQL_CACHE ownrsID, rsID, cID,pID,parent 
					FROM _it_FIRMS 
					WHERE cID = ?i", array(
						$company['pID']
						), 'row');
			}
			
			if (is_file("it_sites/008.ru/content/logos/i$company_id.jpg"))
			{
				$logo = "/content/logos/i$company_id.jpg";
			}
			else if (is_file("it_sites/008.ru/content/logos/i$company_id.gif"))
			{
				$logo = "/content/logos/i$company_id.gif";
			}
			else
			{
				$logo = "";
			}
			$company['logo'] = $logo;
			
			$prices = @glob($_SERVER['DOCUMENT_ROOT'] . 
				"/it_sites/008.ru/content/company/$company_id/getpricelist/*");
			$price = $prices[0];
			if ($price)
			{
				$price = pathinfo($_SERVER['DOCUMENT_ROOT'] . '/' . $price);
				$price = $price['basename'];
				$company['pricelist'] = $price;
			}
			
			$company['from_cache'] = false;
			$company['cache_ret'] = $ret;
			$ms = microtime(true)-$ms;
			//mlog("company took $ms");
		}
		else
		{
			$company = $cached;
			$company['from_cache'] = true;
		}
		
		return $company;
	}

	public static function GetCompanyInfoById($company_id, $opts = array())
	{
		global $app;
		 
		assert($company_id > 0);

		//mlog(print_r($opts,1));
		
		$ms = microtime(true);
		if($opts['common'])
		{
			//mlog("common");
			$company = $app->db->query(
				"SELECT ownrsID,office_type,ownership_type,firm_type,license,actual_date,slogan,
				discount008,name_aliases,pID, discount_html,info as cinfo,correct_contacts, 
				contracttime, oID, uID, metadesc, 
				_it_SPR_OFFICE_TYPES.caption AS office_caption,ordernum,published,  
				rsID,parent,shortname,title,razm_type,co_names,co_rubrics,work_time,firm_html,
				co_phones,search,fullname,_it_FIRMS.cID AS cID,_it_FIRMS.info, _it_FIRMS.info as cinfo, dateon, dateoff, _it_SPR_FIRM_RAZM.caption AS razm_caption,
				_it_SPR_OWNERSHIP_TYPES.caption as ownership_title,modifydate  , view_setup
				FROM _it_FIRMS
				LEFT JOIN _it_FIRMS_INPUT USING(cID)
				LEFT JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID=_it_FIRMS.razm_type 
				LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type 
				LEFT JOIN _it_SPR_OWNERSHIP_TYPES ON _it_SPR_OWNERSHIP_TYPES.ID = _it_FIRMS.ownership_type 
				WHERE _it_FIRMS.cID = ?i", array(
					$company_id
					), 'row');
		}

		if($opts['addr'])
		{
			//mlog("addr");
			$company['addr'] = $app->db->query(
				"SELECT info,region,area,city,district,street,dom,korp,lit,
				transport, `index`, lat, lng,name_menu 
				FROM _it_FIRMS_ADDRESSES 
				WHERE cID=?i", array(
					$company_id
					), 'row');
			
			$company['addr']['region'] = preg_replace("#(\s+\(г\))#smi", "", 
				$company['addr']['region']);

			$company['metros'] = $app->db->query(
			"SELECT metro,line,dist,_it_SPR_METRO.class 
			FROM _it_FIRMS_ADDRESSES_METRO
			LEFT JOIN _it_SPR_METRO ON _it_SPR_METRO.caption = _it_FIRMS_ADDRESSES_METRO.metro 
			WHERE cID = ?i", array(
				$company_id
				), 'assoc');
		}

		if($opts['attribs'])
		{
		//	mlog("attribs");
			$attribs = $app->db->query(
				"SELECT info,type,value,pos, faID 
				FROM _it_FIRMS_ATTRIBS 
				WHERE cID = ?i
				ORDER BY pos DESC
				", array(
					$company_id
					), 'assoc');
			foreach ($attribs as $attr)
			{
				$company['attribs'][$attr['type']][] = array(
					'value' => $attr['value'], 
					'info' => $attr['info'],
					'type' => $attr['type']
					);
			}
			$company['attr_all'] = $attribs;
		}
		// print_r($company);
		
		if($opts['cats'])
		{
			//mlog("cats");
			$cats = $app->db->query("SELECT rubrics FROM _it_RUBRICS_SETS 
				WHERE rsID = ?i", array(
					$company['rsID']
					), 'el');
			
			$rids = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS 
				WHERE rsID = ?", array(
					$company['rsID']
					), 'col');
			
			foreach ($rids as $rid)
			{
				$subcat = $app->db->query(
					"SELECT discount_count,objects_count,parent,cat,caption 
					FROM _it_RUBRICS WHERE rID = ?", array(
						$rid
						), "row");
				$code = $subcat['cat'];
				$ssubcat = $subcat['caption'];
				$parent_cat = $app->db->query("SELECT cat FROM _it_RUBRICS WHERE rID = ?", 
					array(
						$subcat['parent']
						), "el");
				$subcat = array(
					'name' => $ssubcat,
					'code' => $code,
					'parent_cat' => $parent_cat
					);
				if ($code && $parent_cat && $rid != 0)
					$company['subcats'][] = $subcat;
			}
		}
		
		if($opts['pics'])
		{
			//mlog("pics");
			$dir = "it_sites/008.ru/content/coimgs/" . $company_id . "/or/*.*";
		//$ms = microtime(true);
			$files = glob($dir);

		// l = 604 x 400
		// s = 100 x 66
		// t = 270 x 178

			$pics = array();
			foreach ($files as $file)
			{
				$pic = pathinfo($file);
				if (is_file("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_t.jpg"))
				{
				// mlog("pic $pic[filename]");
					$pics[] = $pic['filename'];
				}
				else if(!strstr($file, ".bmp"))
				{
					mlog("creating thumb $file [$pic[filename]]");

					try 
					{
						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(270, 178);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_t.jpg");

						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(100, 66);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_s.jpg");

						$image = new \Eventviva\ImageResize("$file");
						$image->resizeToBestFit(604, 400);
						$image->save("it_sites/008.ru/content/coimgs/$company_id/$pic[filename]_l.jpg");

						$pics[] = $pic['filename'];
					}
					catch(Exception $e)
					{
						mlog("exception: ".$e->getMessage());
					}

				}
			}
			$company['pics'] = $pics;

			if (is_file("it_sites/008.ru/content/logos/i$company_id.jpg"))
			{
				$logo = "/content/logos/i$company_id.jpg";
			}
			else if (is_file("it_sites/008.ru/content/logos/i$company_id.gif"))
			{
				$logo = "/content/logos/i$company_id.gif";
			}
			else
			{
				$logo = "";
			}
			$company['logo'] = $logo;
		}
	
		//$ms = microtime(true)-$ms;
		//mlog(count($pics)." pics took $ms");
		
		if($opts['offices'])
		{
			//mlog("offices");
			$company['offices'] = array();
			if ($all)
				$published = '';
			else
				$published = "AND _it_FIRMS.published = 'yes'";
			
			$offices = $app->db->query(
				"SELECT _it_FIRMS.pos,_it_FIRMS.office_type,_it_SPR_OFFICE_TYPES.caption as office_caption,
				shortname,fullname,cID,published
				FROM _it_FIRMS 
				LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type 
				WHERE (pID = ?i AND cID != pID)  $published
				ORDER BY _it_FIRMS.shortname DESC, _it_FIRMS.office_type ASC", array(
					$company_id
					), 'assoc');
			foreach ($offices as $office)
			{
				$uniqueDistricts[$office['shortname']] = 1;
				$adv_company = $office;
				$adv_company['addr'] = $app->db->query(
					"SELECT info, name_menu,region,area,city,district,street,dom,korp,lit,
					transport, `index`, lat, lng 
					FROM _it_FIRMS_ADDRESSES 
					WHERE cID=?i", array(
						$office['cID']
						), 'row');
				
				$attribs = $app->db->query(
					"SELECT  info,type,value 
					FROM _it_FIRMS_ATTRIBS 
					WHERE cID=?i
					ORDER BY pos DESC
					", array(
						$office['cID']
						), 'assoc');
				foreach ($attribs as $attr)
				{
					$adv_company['attribs'][$attr['type']][] = array(
						'value' => $attr['value'],
						'info' => $attr['info']
						);
				}
				
				$adv_company['cID'] = $office['cID'];
				
				$adv_company['addr']['region'] = preg_replace("#(\s+\(г\))#smi", "", 
					$adv_company['addr']['region']);
				$company['offices'][] = $adv_company;
				
				if ($adv_company['addr']['district'])
					$company['district_offices'][$adv_company['addr']['district']][] = $adv_company;
				else
					$company['district_offices']['global'][] = $adv_company;
			}
			$company['uniqueDistricts'] = $uniqueDistricts;
		}
		
		

		if($opts['stuff'])
		{
		//	mlog("stuff");
			if(!$opts['old_stuff'])
				$and = "AND _it_STUFF.published='yes' ";
			if(!$opts['allstuff'])
				$periodcheck="AND (
					(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
						DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
			OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
			OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))";

			$stuffs = $app->db->query(
				"SELECT _it_STUFF_PERIOD.dateon,_it_STUFF_PERIOD.dateoff,stuff_type,caption,
				notice,body,sID,linkID as cID
				FROM _it_STUFF
				LEFT JOIN _it_STUFF_LANG USING (sID)
				LEFT JOIN _it_STUFF_PERIOD USING (sID)
				WHERE  linkID = ?i $and 
				$periodcheck
			ORDER BY sID DESC
			", array(
				$company_id
				), 'assoc');
			$company['conews'] = array();
			$company['discount'] = array();
			$company['info'] = array(); 
			$company['vacancy'] = array();
			$company['articles'] = array();
			foreach ($stuffs as $stuff)
			{
				$company[$stuff['stuff_type']][] = $stuff;
				$company['stuff'][$stuff['stuff_type']][] = $stuff;
			}
		}
		$company['parentcID'] = $company['parent'];
		if ($company['pID'] && $company['pID'] != $company_id && $company['pID'] > 1)
		{
			$company['parent'] = $app->db->query(
				"SELECT  ownrsID, rsID, cID,pID,parent 
				FROM _it_FIRMS 
				WHERE cID = ?i", array(
					$company['pID']
					), 'row');
		}
		
		if($opts['price'])
		{
			//mlog("price");
			$prices = @glob($_SERVER['DOCUMENT_ROOT'] . 
				"/it_sites/008.ru/content/company/$company_id/getpricelist/*");
			$price = $prices[0];
			if ($price)
			{
				$price = pathinfo($_SERVER['DOCUMENT_ROOT'] . '/' . $price);
				$price = $price['basename'];
				$company['pricelist'] = $price;
			}
			
			$company['from_cache'] = false;
			$company['cache_ret'] = $ret;
		}
		$ms = microtime(true)-$ms;
		//mlog("company took $ms");
	
		
		return $company;
	}

	public static function GetOffices($cID, $all = false)
	{
		global $app;
		
		if ($all == true)
			$published = '';
		else
			$published = "AND _it_FIRMS.published = 'yes'";
		
		$offices = $app->db->query(
			"SELECT _it_FIRMS.pos,_it_FIRMS.office_type,_it_SPR_OFFICE_TYPES.caption as 	office_caption,
			shortname,fullname,cID,published FROM _it_FIRMS 
			LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type 
			WHERE (pID = ?i)  $published AND cID != pID 
			ORDER BY _it_FIRMS.shortname DESC, _it_FIRMS.office_type ASC", array(
				$cID
				), 'assoc');
		foreach ($offices as $o)
		{
			if (! $o['office_type'])
				$type = 1;
			else
				$type = 0;
			
			$o['addr'] = $app->db->query(
				"SELECT info,region,area,city,district,street,dom,korp,lit,
				transport, `index`, lat, lng,name_menu 
				FROM _it_FIRMS_ADDRESSES 
				WHERE cID=?i", array(
					$o['cID']
					), 'row');
			
			$o['addr']['region'] = preg_replace("#(\s+\(г\))#smi", "", $o['addr']['region']);
			
			$noffices[$o['shortname']][$type][] = $o;
		}
		
		return $noffices;
	}
	public static function getAdminInfo($cID)
	{
		global $app;
		
		$company = self::GetCompanyById($cID);
		if($company['pID'] != $cID)
		{
			$parent = self::GetCompanyById($company['pID']);
			$razm_type = $parent['razm_type'];
			$manager = $parent['oID'];
			$vvoder = $parent['uID'];
		}
		else
		{
			$manager = $company['oID'];
			$razm_type = $company['razm_type'];
			$vvoder = $company['uID'];
		}
		$tarif = $app->db->query("SELECT caption FROM _it_SPR_FIRM_RAZM WHERE ID = ?", 
			array(
				$razm_type
				), 'el');
		$correct = $company['modifydate'];
		$dogovor = $company['dateon'] . " - " . $company['dateoff'];
		$manager = $app->db->query("SELECT name FROM _it_SYS_USERS WHERE ID = ?", array(
			$manager
			), 'el');
		$vvod = $app->db->query("SELECT name FROM _it_SYS_USERS WHERE ID = ?", array(
			$vvoder
			), 'el');
		return compact('tarif', 'manager', 'vvod', 'correct', 'dogovor');
	}
	public static function getCatByCaption($subcat)
	{
		global $app;
		$key = sprintf("cat/" . "%08u" . "/bycaption", crc32("$subcat"));
		$cached = Cache::get($key);
		if (! $cached)
		{
			$cat = $app->db->query("SELECT  cat FROM _it_RUBRICS 
				WHERE caption = ? 
				LIMIT 1", array(
					$subcat
					), 'el');
			Cache::set($key, $cat);
		}
		else
		{
			$cat = $cached;
		}
		return $cat;
	}
}