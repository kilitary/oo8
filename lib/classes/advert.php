<?
class Advert
{
	public static function getBanners468()
	{
		global $app;

		//$cached=Cache::get("banners/468");
		if (!$cached)
		{
			$data = $app->db->query("SELECT _it_ADS.url,_it_ADS.srcurl FROM _it_ADS
				LEFT JOIN _it_ADS_PUBLISH USING(aID)
				WHERE width = ?i
				ORDER BY rand()
				LIMIT 8", array("468"), 'assoc');
			//Cache::set("banners/468", $data);
		}
		else
		{
			$data = &$cached;
		}
		return $data;
	}

	public static function getBanner($path)
	{
		global $app;

		$banner = $app->db->query("SELECT * FROM _it_ADS
			LEFT JOIN _it_FIRMS ON _it_FIRMS.cID = _it_ADS.cID
			LEFT JOIN _it_ADS_PUBLISH ON _it_ADS_PUBLISH.aID = _it_ADS.aID
			LEFT JOIN _it_ADS_PERIOD ON _it_ADS_PERIOD.aID = _it_ADS.aID
			WHERE _it_ADS_PUBLISH.catalog = ? AND _it_ADS.enable = 1
			GROUP BY _it_ADS.aID
			ORDER BY block DESC", array($path), 'row');
		//print_r($banner);die;

		return $banners;
	}

	public static function getAdvertData($page, $subcats = null, $company_id = null)
	{
		global $app, $pics100x60, $banners468, $pics240x400;

		if (empty($pics100x60))
		{
			$pics100x60 = glob($_SERVER['DOCUMENT_ROOT'] . "/it_sites/008.ru/content/ilogos/10060/r*.gif");
		}

		if (empty($banners468))
		{
			$banners468 = Advert::getBanners468();
		}

		if (empty($pics100x60))
		{
			$pics100x60 = glob($_SERVER['DOCUMENT_ROOT'] . "/it_sites/008.ru/content/ilogos/240400/*");
		}

		$done_pics = array();

		foreach ($app->config['advs'] as $adv)
		{
			$has = false;
			if (strstr($adv, "adv1_"))
			{
				if (!$has)
				{
					$banner = $app->db->query("SELECT _it_ADS.url AS url,_it_ADS.srcurl AS srcurl
						FROM _it_ADS
						LEFT JOIN _it_ADS_PERIOD ON _it_ADS.aID=_it_ADS_PERIOD.aID
						LEFT JOIN _it_ADS_PUBLISH ON _it_ADS.aID=_it_ADS_PUBLISH.aID
						WHERE _it_ADS_PUBLISH.catalog = ? AND _it_ADS_PUBLISH.block = ?
						ORDER BY RAND()",
						array($page, $adv), 'row');

					if (!empty($banner['url']))
					{
						//mlog(print_r($banner,1));
						//	mlog("$adv: page $page, banner $banner[aID] url:$banner[url] srcurl:$banner[srcurl] hits:$_SESSION[hits]");
						$adverts[$adv]['url'] = $banner['url'];
						$adverts[$adv]['src'] = $banner['srcurl'];
						$has                  = true;
					}
				}
				if (!$has)
				{
					$pic = $pics100x60[mt_rand(0, count($pics100x60) - 1)];
					//	mlog("$adv random $pic");
					if (in_array($pic, $done_pics))
					{
						continue;
					}

					$done_pics[] = $pic;
					preg_match("#r(\w+)\.(\w+)#smi", $pic, $m);
					$adverts[$adv]['url'] = "/company/$m[1]/";
					$adverts[$adv]['src'] = '/content/ilogos/10060/r' . $m[1] . "." . $m[2];
				}
			}
			else if (strstr($adv, "adv2_"))
			{
				if ($subcats)
				{
					foreach ($subcats as $s)
					{
						$spage  = "/catalog/$s[parent_cat]/*";
						$banner = $app->db->query("SELECT    _it_ADS.url,_it_ADS.srcurl FROM _it_ADS
							LEFT JOIN _it_ADS_PUBLISH USING(aID)
							WHERE width = ?i AND _it_ADS_PUBLISH.`catalog` = ? AND _it_ADS_PUBLISH.enable = 1
							AND _it_ADS_PUBLISH.block = ?
							ORDER BY rand() LIMIT 1", array(468, $spage, $adv), 'row');
						$done_pics[]          = $banner['url'];
						$adverts[$adv]['url'] = $banner['url'];
						$adverts[$adv]['src'] = $banner['srcurl'];
						if ($banner)
						{
							break;
						}

					}
				}
				else
				{
					//mlog("$adv page=$page");
					$banner = $app->db->query("SELECT    _it_ADS.url,_it_ADS.srcurl FROM _it_ADS
						LEFT JOIN _it_ADS_PUBLISH USING(aID)
						WHERE width = ?i AND _it_ADS_PUBLISH.`catalog` = ? AND _it_ADS_PUBLISH.enable = 1
						AND _it_ADS_PUBLISH.block = ?
						ORDER BY rand() LIMIT 1", array(468, $page, $adv), 'row');
					$done_pics[]          = $banner['url'];
					$adverts[$adv]['url'] = $banner['url'];
					$adverts[$adv]['src'] = $banner['srcurl'];
				}
			}
			else if (strstr($adv, "adv3_"))
			{
				$banner = $app->db->query("SELECT    _it_ADS.aID,_it_ADS.url,_it_ADS.srcurl FROM _it_ADS
					LEFT JOIN _it_ADS_PUBLISH USING(aID)
					WHERE width = ?i AND _it_ADS_PUBLISH.`catalog` = '?e' AND _it_ADS_PUBLISH.enable = 1
					AND _it_ADS_PUBLISH.block = ?
					ORDER BY rand() LIMIT 1", array(468, $page, $adv), 'row');
				$done_pics[]          = $banner['url'];
				$adverts[$adv]['url'] = $banner['url'];
				$adverts[$adv]['src'] = $banner['srcurl'];
			}
			else if (strstr($adv, "adv4_1"))
			{
				$banner = $app->db->query("SELECT _it_ADS.url,_it_ADS.srcurl FROM _it_ADS
					LEFT JOIN _it_ADS_PUBLISH USING(aID)
					WHERE width = ?i AND _it_ADS_PUBLISH.`catalog` = '?e'
					AND _it_ADS_PUBLISH.block = ?
					ORDER BY rand() 
					LIMIT 1", array(468, $page, $adv), 'row');
				$done_pics[]          = $banner['url'];
				$adverts[$adv]['url'] = $banner['url'];
				$adverts[$adv]['src'] = $banner['srcurl'];
				//mlog
			}
			else if (strstr($adv, "adv4_2"))
			{

				preg_match("#company/(\d+)#si", $page, $m);
				//$company_id = intval($m[1]);
				//	mlog("4_2 check $page cmpid=".$company_id);
				//$adv = null;
				$banner = $app->db->query("SELECT    _it_ADS.url,_it_ADS.srcurl FROM _it_ADS
					LEFT JOIN _it_ADS_PUBLISH USING(aID)
					WHERE _it_ADS.cID = ?i
					AND _it_ADS_PUBLISH.block = ?
					ORDER BY rand() 
					LIMIT 1", array($company_id, $adv), 'row');
				//if(in_array($banner['url'],$done_pics))
				//continue;
				$done_pics[]          = $banner['url'];
				$adverts[$adv]['url'] = $banner['url'];
				$adverts[$adv]['src'] = $banner['srcurl'];
				//	mlog("4_2 $banner[url]");
			}
		}
		return $adverts;
	}
}