<?
class elasticsearch
{
	/**
	 *
	 * connect ES
	 *
	 */
	
	static public function ElasticsearchConnect()
	{
		global $elastic_client;

		if(!$elastic_client)
		{
			$params = array();
			$params['hosts'] = array (
				'127.0.0.1:19200',
			);
			$elastic_client = new Elasticsearch\Client($params);
		}
	}

	/**
	 *
	 * delete company from ES
	 *
	 */
	

	static function deleteCompany($cID)
	{
		global $app,$elastic_client;

		self::ElasticsearchConnect();
		$deleteParams['id'] = intval($cID);
		$deleteParams['index'] = 'base';
		$deleteParams['type'] = 'info';

		try
		{
			$elastic_client->delete($deleteParams);
			mlog("deleted $cID from elastic");
		}
		catch(Exception $e)
		{
			mlog("deleteCompany:exception ".$e->getMessage());
		}
	}

	/**
	 *
	 * get companys with discounts from rubric
	 *
	 */
	
	static function getDiscountCompanys($rID, $from=0, $size=10000)
	{
		global $app,$elastic_client;

		self::ElasticsearchConnect();

		$searchParams['index'] = 'base';
		$searchParams['type']  = 'info';
		$searchParams['from']  = $from;
		$searchParams['size']  = $size;
		$searchParams['fields'] = array('cID');
		$searchParams['body']['query']['bool']['must_not'][]=array(
			'match' => array("info.published" => "no"));

		$searchParams['body']['query']['bool']['must'][0]['term']['info.rIDS'] = intval($rID);
		$searchParams['body']['query']['bool']['must'][1]['range']['info.num_discount']['from'] = 1;
		$searchParams['body']['query']['bool']['must'][1]['range']['info.num_discount']['to'] = 999;
		$searchParams['body']['sort'][0]['razm_prio']['order'] = 'desc';
		$searchParams['body']['sort'][] = array('sort'=>array('order'=> 'asc'));

		try
		{
			$queryResponse = $elastic_client->search($searchParams);
		}

		catch(Exception $e)
		{
			mlog("getDiscountCompanys exception ".$e->getMessage());
		}
		mlog("Elasticsearch::getDiscountCompanys($rID): ".$queryResponse['hits']['total'].
			" recs [from: $from size: $size] \r\n");
		$result = array();
		foreach($queryResponse['hits']['hits'] as &$c)
		{
			$res = intval($c['fields']['cID'][0]);
			$c=Objects::GetCompanyById($c['fields']['cID'][0],true,true);
			$c['fullname'] = core::translate($c['fullname']);
			$result[]=$res;
		}
		return $result;
	} 

	/**
	 *
	 * get companys with discount count
	 *
	 */
	
	static function getDiscountCompanysCount($rID)
	{
		global $app,$elastic_client;

		self::ElasticsearchConnect();

		$searchParams['index'] = 'base';
		$searchParams['type']  = 'info';
		$searchParams['from']  = 0;
		$searchParams['size']  = 9999999;
		$searchParams['fields'] = array('cID');
		$searchParams['body']['query']['bool']['must_not'][]=array(
			'match' => array("info.published" => "no"));

		$searchParams['body']['query']['bool']['must'][0]['term']['info.rIDS'] = intval($rID);
		$searchParams['body']['query']['bool']['must'][1]['range']['info.num_discount']['from'] = 1;
		$searchParams['body']['query']['bool']['must'][1]['range']['info.num_discount']['to'] = 999;
	//$searchParams['body']['sort'][0]['razm_prio']['order'] = 'desc';

		try
		{
			$queryResponse = $elastic_client->search($searchParams);
		}
		catch(Exception $e)
		{
			mlog("getDiscountCompanysCount exception ".$e->getMessage());
		}

		return intval($queryResponse['hits']['total']);
	}

	/**
	 *
	 * get companys in rubric
	 *
	 */
	
	static function getCatalogCompanys($rID, $from=0, $size=10, $opts)
	{
		global $app,$elastic_client;
		self::ElasticsearchConnect();

		$searchParams['index'] = 'base';
		$searchParams['type']  = 'info';
		$searchParams['from']  = $from;
		$searchParams['size']  = $size;
		if($opts['info']!=true)
			$searchParams['fields'] = array('cID');
		$searchParams['body']['query']['bool']['must_not'][]=array(
			'match' => array("info.published" => "no"));

		$searchParams['body']['query']['bool']['must'][] = array(
			array('term' => array("info.rIDS" => intval($rID)))
		);
		$searchParams['body']['sort'][0]['razm_prio']['order'] = 'desc';
		//$searchParams['body']['sort'][] = array('fullname'=>array('order'=> 'asc'));
		//$searchParams['body']['sort'][] = array('sortIDX'=>array('order'=> 'asc'));
		$searchParams['body']['sort'][] = array('sort'=>array('order'=> 'asc'));
		//mlog(print_r($searchParams['body']['sort'],1));
		try
		{
			$queryResponse = $elastic_client->search($searchParams);
		}
		catch(Exception $e)
		{
			mlog("getCatalogCompanys exception ".$e->getMessage());
		}

	//mlog("took: ".$queryResponse['took']."ms");

		//mlog("Elasticsearch::getCatalogCompanys($rID): ".$queryResponse['hits']['total'].
		//	" recs [from: $from size: $size] \r\n");
		if($opts['info']==true)
			return $queryResponse['hits']['hits'];

		$result = array();

		foreach($queryResponse['hits']['hits'] as &$c)
		{
			$result[] = intval($c['fields']['cID'][0]);
		}
		return $result;
	}

	/**
	 *
	 * get companys in rubric count
	 *
	 */
	
	static function getCatalogCompanysCount($rID)
	{
		global $app,$elastic_client;

		self::ElasticsearchConnect();

		$searchParams['index'] = 'base';
		$searchParams['type']  = 'info';
		$searchParams['from']  = 0;
		$searchParams['size']  = 0;
		$searchParams['fields'] = array('cID');
		$searchParams['body']['query']['bool']['must_not'][]=array(
			'match' => array("info.published" => "no"));

		$searchParams['body']['query']['bool']['must'][] = array(
			array('term' => array("info.rIDS" => intval($rID)))
		);
		try
		{
			$queryResponse = $elastic_client->search($searchParams);
		}
		catch(Exception $e)
		{
			mlog("getCatalogCompanysCount exception ".$e->getMessage());
		}

		return intval($queryResponse['hits']['total']);
	}

	/**
	 *
	 * add company to ES
	 *
	 */
	
	public static function AddCompany($cID)
	{
		global $app;
		global $elastic_client;
		mlog("el:addcompany($cID)");
		$d = Objects::GetCompanyById($cID);
		$text = trim(strip_tags($d['firm_html']));
		$text .= trim(strip_tags($d['info']));
		$text .= trim(strip_tags($d['search']));
		if(mb_detect_encoding($text, 'UTF-8', true) === false)
		{
			$text = utf8_encode($text);
			echo "\n$d[cID] converted\r\n";
		}
		$enc = mb_detect_encoding($text, "auto");
		if($enc == 'ASCII')
			$text = utf8_encode($text);
		$enc = mb_detect_encoding($text, "auto");
		$utftext = $text;
		$rubrics = array();
		$rids = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS
			WHERE rsID=?i",array($d['rsID']), 'col');
		foreach($rids as &$rid)
		{
			$rid = intval($rid);
			$rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
				WHERE rID = ?i",array($rid),'el');
			if(!in_array($rubric,$rubrics))
				$rubrics[]=$rubric;
		}
		if(count($rids))
		{
			$urids = $app->db->query("SELECT parent FROM _it_RUBRICS WHERE rID IN(?li) AND parent != 1",
				array($rids),'col');
			foreach($urids as &$urid)
			{
				$urid = intval($urid);
				$rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
					WHERE rID = ?i",array($urid),'el');
				if(!in_array($rubric,$rubrics))
					$rubrics[]=$rubric;
			}
			$rids = array_merge($rids, $urids);
		}
		$rids = array_unique ($rids, SORT_NUMERIC );
		$razm_prio = $app->db->query("SELECT prioritet FROM _it_SPR_FIRM_RAZM
			WHERE ID = ?i", array($d['razm_type']), 'el');
		$num_discount = $app->db->query("SELECT COUNT(*) AS cnt 
			FROM _it_STUFF 
			LEFT JOIN _it_STUFF_PERIOD USING(sID)
			LEFT JOIN _it_STUFF_LANG USING(sID)
			WHERE linkID=?i AND stuff_type = 'discount'
			AND (
				(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
					DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
		OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
		OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))",
		array($d['cID']), 'el');
		try
		{
			self::ElasticsearchConnect();
			$ret = $elastic_client->index(
				array(
					'index' => 'base',
					'type' => 'info',
					'id' => intval($d['cID']),
					'body' => array(
						'cID' => intval($d['cID']),
						'pID' => intval($d['pID']),
						'parent' => intval($d['parent']),
						'rsID' => intval($d['rsID']),
						'rIDS' => count($rids)>=1 ? array_values($rids) : array(),
						'shortname' => $d['shortname'],
						'fullname' => $d['fullname'],
						'co_names' => $d['co_names'],
						'published' => $d['published'],
						'logo' => $d['logo'],
						'stuff' => $d['stuff'],
						'metro' => $d['metro'],
						'attribs'=>$d['attr_all'],
						'addr' => $d['addr']['city'] . ", ".$d['addr']['district']." ".
						$d['addr']['street']." ".$d['addr']['dom'],
						'co_rubrics' => $d['co_rubrics'],
						'firm_html' => $utftext,
						'razm_type' => intval($d['razm_type']),
						'razm_prio' => floatval($razm_prio),
						'num_discount' => intval($num_discount),
						'version' => 1,
						'hits' => 0 
					)
				));
		}
		catch (Exception $e)
		{
			mlog("\r\nAddCompany($cID): exception ".$e->getMessage()."\r\n");
		}
		mlog("add ret: ".print_r($ret,1));
		return $ret['_id'];
	}

	/**
	 *
	 * update company data in ES
	 *
	 */
	
	public static function updateCompany($cID)
	{
		global $app;
		global $elastic_client;
		mlog("elastic update compny $cID");
		self::ElasticsearchConnect();
		$d = Objects::GetCompanyById($cID, true, true);
		$app->db->query("UPDATE _it_FIRMS SET updated = 0 WHERE cID = ?i",array($d['cID']));
		if($d['published'] != 'yes')
		{
			mlog("hidden #$d[cID]\r\n");
		}
		$text = trim(strip_tags($d['firm_html']));
		if(empty($text))
			$text = trim(strip_tags($d['info']));
		if(empty($text))
			$text = trim(strip_tags($d['search']));
		if(mb_detect_encoding($text, 'UTF-8', true) === false)
		{
			$text = utf8_encode($text);
			mlog("\n$d[cID] converted\r\n");
		}
		$enc = mb_detect_encoding($text, "auto");
		if($enc == 'ASCII')
			$text = utf8_encode($text);
		$enc = mb_detect_encoding($text, "auto");
		if($enc != 'UTF-8' && $enc != 'ASCII')
		{
			mlog("\nskip $d[cID] $enc [$text]\r\n");
		}
		$utftext = $text;
		$rids = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS
			WHERE rsID=?i",array($d['rsID']), 'col');
		foreach($rids as &$rid)
		{
			$rid = intval($rid);
			$rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
				WHERE rID = ?i",array($rid),'el');
			if(!in_array($rubric,$rubrics))
				$rubrics[]=$rubric;
		}
		if(count($rids))
		{
			$urids = $app->db->query("SELECT parent FROM _it_RUBRICS WHERE rID IN(?li) AND parent != 1",
				array($rids),'col');
			foreach($urids as &$urid)
			{
				$urid = intval($urid);
				$rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
					WHERE rID = ?i",array($urid),'el');
				if(!in_array($rubric,$rubrics))
					$rubrics[]=$rubric;
			}
			$rids = array_merge($rids, $urids);
		}
		$rids = array_unique ($rids, SORT_NUMERIC );
		$razm_prio = $app->db->query("SELECT prioritet FROM _it_SPR_FIRM_RAZM
			WHERE ID = ?i", array($d['razm_type']), 'el');
		$num_discount = $app->db->query("SELECT COUNT(*) AS cnt 
			FROM _it_STUFF 
			LEFT JOIN _it_STUFF_PERIOD USING(sID)
			LEFT JOIN _it_STUFF_LANG USING(sID)
			WHERE linkID=?i AND stuff_type = 'discount' AND _it_STUFF.published='yes'
			AND (
				(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
					DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE()) OR 
		(_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE()) OR 
		(_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))",
		array($d['cID']), 'el');
		try
		{
			mlog("$d[cID] - published[$d[published]]");

			$doc = array(
				'cID' => intval($d['cID']),
				'pID' => intval($d['pID']),
				'parent' => intval($d['parent']),
				'rsID' => intval($d['rsID']),
				'rIDS' => (count($rids)>=1 ? array_values($rids) : array()),
				'co_rubrics' => $d['co_rubrics'],
				'pos' => intval($d['pos']),
				'shortname' => $d['shortname'],
				'fullname' => $d['fullname'],
				'co_names' => $d['co_names'],
				'published' => $d['published'],
				'firm_html' => $utftext,
				'logo' => $d['logo'],
				'stuff' => $d['stuff'],
				'metro' => $d['metro'],
				'attribs'=>$d['attr_all'],
				'addr' => $d['addr']['city'] . ", ".
				$d['addr']['district']." ".
				$d['addr']['street']." ".
				$d['addr']['dom'],
				'razm_type' => intval($d['razm_type']),
				'razm_prio' => floatval($razm_prio),
				'company' => (!intval($d['office_type'])),
				'num_discount' => intval($num_discount),
				'updated_at' => intval(time()),
				'updated_by' => $_SESSION['user']['login'],
				'updated_ip' => $_SERVER['REMOTE_ADDR'],
				'updated_ua' => $_SERVER['HTTP_USER_AGENT'],
			);

			$elastic_client->update(array(
				'index' => 'base',
				'type' => 'info',
				'id' => intval($d['cID']),
				'body' => array(
					'doc' => $doc					
				)
			));
			if($ret['_id'])
				mlog("elastic newid=$ret[_id]\r\n");
			$params = 
			[
			'index' => 'base',
			'type' => 'info',
			'id' => intval($d['cID']),
			'body' => 
			[
			'script' => 'if (ctx._source.containsKey("version")) {ctx._source.version += 1;}'.
			'else {ctx._source.version=1;}',
			"upsert" => array("version" => 1)
			]
			];
			$ret = $elastic_client->update($params);
	}
	catch (Exception $e)
	{
		mlog("\r\nupdateCompany exception ".$e->getMessage()."\r\n");
		mlog("d[prant]=$d[parent] d[cID]=$d[cID]");
		if((is_array($d['parent']) ? $d['parent']['cID'] : $d['parent']) == $d['cID'])
			self::AddCompany($d['cID']);
	}

}

/**
 *
 * increasse company visit count
 *
 */


static function recordCompanyVisit($cID)
{
	global $elastic_client;

	self::ElasticsearchConnect();
	$params = [
	'index' => 'base',
	'type' => 'info',
	'id' => intval($cID), 
	'body' => [
	'script' => 'ctx._source.hits += 1;'.
	'ctx._source.lastvisit_human=new Date().toString();'.
	'ctx._source.lastvisit=Math.ceil(new Date().getTime()/1000)',
	]
	];
	try
	{
		$response = $elastic_client->update($params);
	}
	catch(Exception $e)
	{
		mlog("recordCompanyVisit exception ".$e->getMessage()."\r\n");
	}
	return;
}

/**
 *
 * search in discount companys
 *
 */

static function search_discount($key, $from=0, $size=10, $sort=false, $highlight=false)
{
	global $elastic_client;
	self::ElasticsearchConnect();

	$searchParams['index'] = 'base';
	$searchParams['type']  = 'info';
	$searchParams['from']  = $from;
	$searchParams['size']  = $size;
	$searchParams['fields'] = array('cID');
	if($highlight)
		$searchParams['fields'][] = 'firm_html';
	$searchParams['body']['query']['bool']['must'][0]['range']['info.num_discount']['from']=1;
	$searchParams['body']['query']['bool']['must'][0]['range']['info.num_discount']['to']=99999;

	$searchParams['body']['query']['bool']['must_not'][]=array(
		'match' => array("info.published" => "no"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'match_phrase' => array("_all" => "*$key*"));
	$keys = explode(" ", $key);
	foreach($keys as $k)
	{
		if(mb_strlen($k)<=3)
			continue;
		$searchParams['body']['query']['bool']['must'][]=array(
			'match' => array("_all" => $k));
		$searchParams['body']['query']['bool']['must'][]=array(
			'wildcard' => array("_all" => "*$k*"));
		$searchParams['body']['query']['bool']['should'][]=array(
			'fuzzy' => array("_all" => "$k"));
	}
		//if($sort)
			//$searchParams['body']['sort'][0]['razm_prio']['order'] = 'desc';
		//$searchParams['body']['sort'][] = array('sort'=>array('order'=> 'asc'));
	if($highlight)
	{
		$searchParams['body']['highlight']['pre_tags'] = array("<span class=bhl>");
		$searchParams['body']['highlight']['post_tags'] = array("</span>");
		$searchParams['body']['highlight']['fields']['_all']['number_of_fragments'] =	5;
	}
	$queryResponse = $elastic_client->search($searchParams);
	foreach($queryResponse['hits']['hits'] as $idx => &$c)	
	{
		$results[intval($c['fields']['cID'][0])] = $c['highlight']['_all'];
	}
		//$v=count($results);
	return $results;
}
/**
 *
 * search discount companys count
 *
 */

static function search_discount_count($key)
{
	global $elastic_client;
	self::ElasticsearchConnect();

	$searchParams['index'] = 'base';
	$searchParams['type']  = 'info';
	$searchParams['from']  = 0;
	$searchParams['size']  = 0;
	$searchParams['fields'] = array();
	$searchParams['body']['query']['bool']['must'][0]['range']['info.num_discount']['from']=1;
	$searchParams['body']['query']['bool']['must'][0]['range']['info.num_discount']['to']=99999;
	$searchParams['body']['query']['bool']['must_not'][]=array(
		'match' => array("info.published" => "no"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'match_phrase' => array("_all" => "$key"));
	$keys = explode(" ", $key);
	foreach($keys as $k)
	{
		if(mb_strlen($k)<=3)
			continue;
		$searchParams['body']['query']['bool']['must'][]=array(
			'match' => array("_all" => $k));
		$searchParams['body']['query']['bool']['must'][]=array(
			'wildcard' => array("_all" => "*$k*"));
		$searchParams['body']['query']['bool']['should'][]=array(
			'fuzzy' => array("_all" => "$k"));
	}
	$queryResponse = $elastic_client->search($searchParams);
	$v = intval($queryResponse['hits']['total']);
	return $v;
}

/**
 *
 * search in companys
 *
 */

static function search($key, $from=0, $size=101, $sort=false, $highlight=false)
{
	global $elastic_client;
	self::ElasticsearchConnect();

		//mlog("search sort=$sort");
	$searchParams['index'] = 'base';
	$searchParams['type']  = 'info';
	$searchParams['from']  = $from;
	$searchParams['size']  = $size;
	$searchParams['fields'] = array('cID');
	if($highlight)
		$searchParams['fields'][] = 'firm_html';
	$searchParams['body']['query']['bool']['must_not'][]=array(
		'match' => array("info.published" => "no"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'info.shortname',"query" => "$key"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'co_names',"query" => "$key"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'_all',"query" => "$key"));
	$keys = explode(" ", $key);
	foreach($keys as $k)
	{
		if(mb_strlen($k)<=3)
			continue;
		$searchParams['body']['query']['bool']['should'][]=array(
			'match' => array("_all" => $k));
		$searchParams['body']['query']['bool']['should'][]=array(
			'wildcard' => array("_all" => "*$k*"));
		$searchParams['body']['query']['bool']['should'][]=array(
			'fuzzy' => array("_all" => "$k"));
	}
		//if($sort)
			//$searchParams['body']['sort'][]['razm_prio']['order'] = 'desc';
		//$searchParams['body']['sort'][] = array('sortIDX'=>array('order'=> 'asc'));

	if($highlight)
	{
		$searchParams['body']['highlight']['pre_tags'] = array("<span class=bhl>");
		$searchParams['body']['highlight']['post_tags'] = array("</span>");
		$searchParams['body']['highlight']['fields']['_all']['number_of_fragments'] =	5;
	}
	$queryResponse = $elastic_client->search($searchParams);
	foreach($queryResponse['hits']['hits'] as $idx => &$c)	
	{
		$results[intval($c['fields']['cID'][0])] = $c['highlight']['_all'];
	}
	$v=count($results);
	return $results;
}
/**
 *
 * search in companys count
 *
 */

static function searchCount($key)
{
	global $elastic_client;
	self::ElasticsearchConnect();

	$searchParams['index'] = 'base';
	$searchParams['type']  = 'info';
	$searchParams['from']  = 0;
	$searchParams['size']  = 1110;
	$searchParams['fields'] = array();
	$searchParams['body']['query']['bool']['must_not'][]=array(
		'match' => array("info.published" => "no"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'info.shortname',"query" => "$key"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'co_names',"query" => "$key"));
	$searchParams['body']['query']['bool']['should'][]=array(
		'query_string' => array('default_field'=>'_all',"query" => "$key"));
	$keys = explode(" ", $key);
	foreach($keys as $k)
	{
		if(mb_strlen($k)<=3)
			continue;
		$searchParams['body']['query']['bool']['must'][]=array(
			'match' => array("_all" => $k));
		$searchParams['body']['query']['bool']['should'][]=array(
			'wildcard' => array("_all" => "*$k*"));
		$searchParams['body']['query']['bool']['should'][]=array(
			'fuzzy' => array("_all" => "$k"));
	}
	$queryResponse = $elastic_client->search($searchParams);
	$v = intval($queryResponse['hits']['total']);
	return $v;
}
/**
 *
 * mark all word forms with higlight 
 *
 */

static function replaceWordForms($word, $txt)
{
	global $morphy_client;
	if(!$morphy_client)
	{
		$opts = array(
			// storage type, follow types supported
			// PHPMORPHY_STORAGE_FILE - use file operations(fread, fseek) for dictionary access, this is very slow...
			// PHPMORPHY_STORAGE_SHM - load dictionary in shared memory(using shmop php extension), this is preferred mode
			// PHPMORPHY_STORAGE_MEM - load dict to memory each time when phpMorphy intialized, this useful when shmop ext. not activated. 
				//Speed same as for PHPMORPHY_STORAGE_SHM type
			'storage' => PHPMORPHY_STORAGE_SHM,
			// Extend graminfo for getAllFormsWithGramInfo method call
			'with_gramtab' => true,
			// Enable prediction by suffix
			'predict_by_suffix' => true, 
			// Enable prediction by prefix
			'predict_by_db' => true
		);
		$dir = __DIR__. '/../phpmorphy/dicts';
		$dict_bundle = new phpMorphy_FilesBundle($dir, 'ru_RU');
		try 
		{
			$morphy_client = new phpMorphy($dict_bundle, $opts);
		} 
		catch(phpMorphy_Exception $e) 
		{
			mlog('Error occured while creating phpMorphy instance: ' . $e->getMessage());
			return $txt;
		}
	}
	$word_one=mb_convert_case($word, MB_CASE_UPPER, "UTF-8");
	$base_form = $morphy_client->getAllForms($word_one);
	$base_form[]=$word;
	foreach($base_form as $bf)
	{
		$txt = preg_replace("#((?:\w*?|)$bf(?:\w*?|))#mui", 
			"<span class=bhl>$1</span>", $txt);
	}
	return $txt;
}
}
?>