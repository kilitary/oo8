<?
//==================================================================================
$app->get("/stat/", function() use ($app)
{
	mlog('get stat');
	$lefttype = 'stat';
	return parseTemplate("pages/stat.php", compact('temp','lefttype'));
});
//==================================================================================
$app->match("/stat/ajax/{cmd}/", function($cmd) use ($app)
{
	switch($cmd)
	{
		case 'suggestcompany':
		$keys = $app->db->query("SELECT * FROM _it_FIRMS
			WHERE fullname LIKE '%$_GET[key]%'
			LIMIT 15",null,"assoc");
		if(count($keys))
		{
			$data.= "<ul>";
			foreach($keys as $key)
			{
				$data.= "<li><a href=\"javascript:$('#company').val('$key[cID]');$('#formstat').submit();\"> $key[fullname]</a></li>";
			}
			$data.= "</ul>";
		}
		else
		{
			$data="<span style='color:red'>нет вхождений</span>";
		}
		break;
		
		case 'suggestkeyword':
		$keys = $app->db->query("SELECT DISTINCT(what) FROM _it_SEARCH_LOG
			WHERE what LIKE '%$_GET[key]%'
			LIMIT 15",null,"assoc");
		if(count($keys))
		{
			$data.= "<ul>";
			foreach($keys as $key)
			{
				$data.= "<li><a href=\"javascript:$('#keyword').val('$key[what]');$('#result-search').hide();\"> $key[what]</a></li>";
			}
			$data.= "</ul>";
		}
		else
		{
			$data="<span style='color:red'>нет вхождений</span>";
		}
		break;
	}
	return $data;
});
//==================================================================================
$app->match("/stat/company/detail/{company_id}/", function($company_id) use ($app)
{
	if(empty($_GET['fromdate']))
	{
		$fromdate = getdate();
		$fromdate = "$fromdate[year]-$fromdate[mon]-1";
		$todate = getdate();
		$todate = "$todate[year]-$todate[mon]-28";
	}
	else
	{
		$fromdate=$_GET['fromdate'];
		$todate=$_GET['todate'];
	}
	$company = Objects::GetCompanyById($company_id);
	mlog("stat detail company $company_id");
	$from=strtotime($fromdate);
	$to=strtotime($todate);
	$addwhere = " AND (added >= FROM_UNIXTIME($from) AND added <= FROM_UNIXTIME($to))";
	mlog("$addwhere / $fromdate / $todate");
	
	$rIDs = $app->db->query("SELECT * FROM _it_LINK_RUBRICS_2_SETS  
		LEFT JOIN _it_RUBRICS ON _it_RUBRICS.rID = _it_LINK_RUBRICS_2_SETS.rID
		WHERE rsID = ? 
		ORDER BY _it_RUBRICS.caption
		", 
		array($company['rsID']), 'col');
	
	foreach($rIDs as $rID)
	{
		$cat = $app->db->query("SELECT * 
			FROM _it_RUBRICS WHERE rID = ?", array($rID), 'row');
		$visits = $app->db->query("SELECT COUNT(*) as el 
			FROM evo_rubrics_stat WHERE rID = ?", 
			array($rID), 'el');
		$subs = $app->db->query("SELECT rID 
			FROM _it_RUBRICS WHERE parent = ? ORDER BY caption", array($rID),'col');
		
		foreach($subs as $idx => &$s)
		{
			if(!in_array($s, $rIDs))
			{
				unset($subs[$idx]);
				continue;
			}
			
			$s = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID = ?", array($s), 'row');
			$s['name'] = $s['caption'];
			$s['visits'] = $app->db->query("SELECT COUNT(*) as el 
				FROM evo_rubrics_stat 
				WHERE rID = ?", 
				array($sub['rID']), 'el');
		}
		$catinfo = array('name'=>$cat['caption'], 'visits'=>$visits, 'sub' => $subs);
		$cats[]= $catinfo;
	}
	$num = $app->db->query("SELECT COUNT(*) as el FROM evo_company_stat 
		WHERE cID = ? $addwhere", array($_GET['cID']), 'el');
	foreach($app->config['advs'] as $a)
	{
		$name = $a;
		$count = $app->db->query("SELECT COUNT(*) as cnt FROM evo_ads_stat
			WHERE (block = ? AND url = ?) $addwhere",array($a, "/company/$company_id/"), 'el');
		$advstat[] = array('name'=>$name,'count'=>$count);
	}
	
	$other = $app->db->query("SELECT COUNT(*) as cnt FROM evo_ads_stat
		WHERE (block = ? AND url = ?)  $addwhere", array('other',
			$company['attribs'][5][0]['value']), 'el');
	$advstat[] = array('name'=>'other','count'=>$other);
	
	$cvlink = $app->db->query("SELECT COUNT(*) as cnt FROM evo_ads_stat
		WHERE (block = ? AND url = ?) $addwhere", array('cvlink',
			$company['attribs'][5][0]['value']), 'el');
	$advstat[] = array('name'=>'cvlink','count'=>$cvlink);
	
	$links = $app->db->query("SELECT * FROM evo_ads_stat
		WHERE (url = ? OR url = ?)  $addwhere",array("/company/$company_id/", 
			$company['attribs'][5][0]['value']), 'assoc');
	if($_GET['type'] == 'bymonth')
	{
		$months = $app->db->query("SELECT MONTH(added) AS date,count(*) AS visits
			FROM evo_company_stat
			WHERE cID=?i AND EXTRACT(MONTH FROM added) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP())
			GROUP BY MONTH(added) ",array($company_id), 'assoc');
	}
	else if($_GET['type'] == 'byday')
	{
		$days = $app->db->query("SELECT DATE(added) AS date,count(*) AS visits
			FROM evo_company_stat
			WHERE cID=?i AND EXTRACT(MONTH FROM added) = EXTRACT(MONTH FROM CURRENT_TIMESTAMP())
			GROUP BY DAYOFMONTH(added) ",array($company_id), 'assoc');
	}
	
	$lefttype = 'stat';
	return parseTemplate("/pages/stat_company_detail.php", compact('cats', 'num','company',
		'lefttype','fromdate','todate','advstat','links','months','days'));
});
//==================================================================================
$app->match("/stat/company/", function() use ($app)
{
	if(empty($_GET['fromdate']))
	{
		$fromdate = getdate();
		$fromdate = "$fromdate[year]-$fromdate[mon]-1";
		$todate = getdate();
		$todate = "$todate[year]-$todate[mon]-28";
	}
	else
	{
		$fromdate=$_GET['fromdate'];
		$todate=$_GET['todate'];
	}
	
	if(isset($_GET['cID']))
	{
		$company = Objects::GetCompanyById($_GET['cID']);
		mlog("stat company $_GET[cID]");
		
		
		$from=strtotime($fromdate);
		$to=strtotime($todate);
		
		$addwhere = " AND (added >= FROM_UNIXTIME($from) AND added <= FROM_UNIXTIME($to))";
		mlog("$addwhere / $fromdate / $todate");
		$num = $app->db->query("SELECT COUNT(*) as el FROM evo_company_stat 
			WHERE cID = ? $addwhere", array($_GET['cID']), 'el');
		mlog("$num");
	}
	
	$lefttype = 'stat';
	return parseTemplate("/pages/stat_company.php", compact('num','company','lefttype',
		'fromdate','todate'));
});
//==================================================================================
$app->match("/stat/keywords/", function() use ($app)
{
	if(empty($_GET['fromdate']))
	{
		$fromdate = getdate();
		$fromdate = "$fromdate[year]-$fromdate[mon]-1";
		$todate = getdate();
		$todate = "$todate[year]-$todate[mon]-28";
	}
	else
	{
		$fromdate=$_GET['fromdate'];
		$todate=$_GET['todate'];
	}
	
	$from=strtotime($fromdate);
	$to=strtotime($todate);
	
	$addwhere = " AND (added >= FROM_UNIXTIME($from) AND added <= FROM_UNIXTIME($to))";
	if(!empty($_GET['keyword']))
	{
		$addwhere .= " AND what LIKE '%$_GET[keyword]%'";
	}
	if(empty($_GET['type']) || $_GET['type'] == 1)
	{
		$keywords = $app->db->query("SELECT COUNT(*) as count, what as text, results 
			FROM _it_SEARCH_LOG 
			WHERE results > 0 $addwhere
			GROUP BY what 
			ORDER BY COUNT(*) DESC", null, "assoc");
	}
	else if($_GET['type'] == 2)
	{
		mlog("type2");
		$keywords = $app->db->query("SELECT COUNT(*) as count, what as text, results 
			FROM _it_SEARCH_LOG 
			WHERE (results = 0 OR results IS NULL) $addwhere
			GROUP BY what 
			ORDER BY COUNT(*) DESC", null, "assoc");
	}
	
	$lefttype = 'stat';
	return parseTemplate("pages/stat_keywords.php", compact('lefttype','keywords','fromdate','todate'));
});
//==================================================================================
$app->match("/stat/rubrics/", function() use ($app)
{
	if(empty($_GET['fromdate']))
	{
		$fromdate = getdate();
		$fromdate = "$fromdate[year]-$fromdate[mon]-1";
		$todate = getdate();
		$todate = "$todate[year]-$todate[mon]-28";
	}
	else
	{
		$fromdate=$_GET['fromdate'];
		$todate=$_GET['todate'];
	}
	
	$from = strtotime($fromdate);
	$to = strtotime($todate);
	$addwhere = " AND (added >= FROM_UNIXTIME($from) AND added <= FROM_UNIXTIME($to))";
	
	$cats = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = 1 ORDER BY caption ASC",null,'assoc');
	foreach($cats as &$cat)
	{
		$cat['visits'] = $app->db->query("SELECT COUNT(*) FROM evo_rubrics_stat
			WHERE rID = ? $addwhere",array($cat['rID']),'el');
		$cat['unique'] = $app->db->query("SELECT COUNT(*) FROM evo_rubrics_stat
			WHERE rID = ? $addwhere
			GROUP BY ip",array($cat['rID']),'el');
		$glototal+=$cat['visits'];
		$cat['subcats'] = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption ASC",array($cat['rID']),'assoc');
		$total = 0;
		$has = false;
		foreach($cat['subcats'] as &$subcat)
		{
			if(!empty($_GET['keyword']) && !mb_stristr($subcat['caption'], $_GET['keyword']))
			{
				$subcat=null;
				continue;
			}
			$subcat['visits'] = $app->db->query("SELECT COUNT(*) FROM evo_rubrics_stat
				WHERE rID = ? $addwhere",array($subcat['rID']),'el');
			$subcat['unique'] = $app->db->query("SELECT COUNT(*) FROM evo_rubrics_stat
				WHERE rID = ? $addwhere
				GROUP BY ip",array($subcat['rID']),'el');
			$total+=$subcat['visits'];
			$has = true;
			$glototal+=$subcat['visits'];
		}
		
		$cat['total'] = $total;
		if(!$has)
			$cat = null;
	}
	
	$lefttype = 'stat';
	return parseTemplate("pages/stat_rubrics.php", compact('lefttype','cats','glototal',
		'fromdate','todate'));
});
?>