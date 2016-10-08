<?
// ///////////////////////////////////////////
// / Evodesign Internet Promotion Company ///
// / 008.ru Engine (c) 2015. ///
// / Chief mail: info@evodesign.ru ///
// / Support mail: support@evodesign.ru///
// //////////////////////////////////////

xdebug_disable();
assert_options(ASSERT_ACTIVE, true);
// подключем конфиг
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/config.php';
// подключаем остальные 3rd утилиты/функции
require_once ($_SERVER['DOCUMENT_ROOT'].'/lib/elasticsearch/vendor/autoload.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/silex/vendor/autoload.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/phpmorphy/src/common.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/goDB/autoload.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/mammail.class.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/securimage/securimage.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/core.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/elasticsearch.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/stat.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/news.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/cache.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/objects.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/advert.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/lib/classes/discount.php');
use Symfony\Component\HttpFoundation\Response;

if($_SERVER['REQUEST_SCHEME']=='https')
{
	header("Location: http://$_SERVER[REQUEST_URI]");
	die();
}

Core::init_system();
Core::mut();
Core::check_auth();
// ==================================================================================
// описываем роуты, начнем с корня
$app->match('/', function () use($app)
{
	// запишем посетителя в лог
	mlog("$_SERVER[REQUEST_METHOD] admin");
	
	$online = $app->db->query("SELECT COUNT(*) FROM evo_online", null, 'el');
	$humans_online = $app->db->query("SELECT COUNT(*) FROM evo_online WHERE is_human = 1", null, 'el');
	$company_num = $app->db->query("SELECT COUNT(*) FROM _it_FIRMS WHERE published='yes'", null, 'el');
	
	$discount_num = $app->db->query("SELECT COUNT(*) FROM _it_STUFF
		LEFT JOIN _it_STUFF_PERIOD USING(sID)
		WHERE stuff_type='discount' AND _it_STUFF.published = 'yes' AND (
						(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND
							DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))", null, 'el');
	$cards = $app->db->query("SELECT COUNT(*) FROM _it_FIRMS WHERE length(discount008) > 2", null, 'el');
	$discount_num += $cards;
	$conews_num = $app->db->query("SELECT COUNT(*) FROM _it_STUFF
		LEFT JOIN _it_STUFF_PERIOD USING(sID)
		WHERE stuff_type='conews' AND _it_STUFF.published = 'yes' AND (
						(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND
							DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
					OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))", null, 'el');
	
	$visits = stat::get('visits');
	$errors = $app->db->query("SELECT COUNT(*) FROM evo_errors", null, 'el');
	
	$zendopcache = opcache_get_status(true);
	$zendopcache = $zendopcache['opcache_statistics'];
	
	//$apc_cache_info = apc_cache_info();
	// $apc_cache_info =
	
	return parseTemplate("admin/index.php", compact('online', 'humans_online', 'company_num', 'discount_num', 'conews_num', 
		'visits', 'errors', 'zendopcache', 'apc_cache_info'));
});
//
$app->get('/stats/spr/', function () use($app)
{
	
	$tarifs = $app->db->query("SELECT * FROM _it_SPR_FIRM_RAZM", null, 'assoc');
	foreach ($tarifs as &$t)
	{
		$t['count'] = $app->db->query("SELECT COUNT(*) FROM _it_FIRMS
				WHERE razm_type = ?i", array(
			$t['ID']
		), 'el');
	}
	
	return parseTemplate("admin/spr.php", compact('tarifs'));
});
//
$app->get('/firms/', function () use($app)
{
	
	return parseTemplate("admin/firms.php", array());
});
//
$app->match('/logout/', function () use($app)
{
	unset($_SESSION['user']);
	return $app->redirect("/system/");
});
//
$app->get('/banners/', function () use($app)
{
	$banners = $app->db->query("SELECT * FROM
		_it_ADS
		LEFT JOIN _it_FIRMS ON _it_FIRMS.cID = _it_ADS.cID
		LEFT JOIN _it_ADS_PUBLISH ON _it_ADS_PUBLISH.aID = _it_ADS.aID
		GROUP BY _it_ADS_PUBLISH.aID
		ORDER BY _it_ADS_PUBLISH.block DESC", null, 'assoc');
	// print_r($banners);
	return parseTemplate("admin/banners.php", compact('banners'));
});
//
$app->get('/search/', function () use($app)
{
	
	return parseTemplate("admin/search.php", compact('banners'));
});
//
$app->get('/attribs/', function () use($app)
{
	$attribs = $app->db->query("SELECT * FROM _it_ATTRIB_TYPES", null, 'assoc');
	return parseTemplate("admin/attribs.php", compact('attribs'));
});
//
$app->match('/pages/edit/{pID}/', function ($pID) use($app)
{
	if (isset($_POST['meta_title']))
	{
		if (empty($_POST['url_title']))
			$url_title = rus2translit(str_replace(" ", "_", $_POST['meta_title']));
		else
			$url_title = $_POST['url_title'];
		
		$app->db->query("UPDATE _it_PAGES
			SET content = ?, meta_title = ?, url_title = ?, meta_keywords=?,meta_description=?
			WHERE pID = ?", array(
			$_POST['content'],
			$_POST['meta_title'],
			$url_title,
			$_POST['meta_keywords'],
			$_POST['meta_description'],
			$pID
		));
		$gmsg = "OK: информация обновлена (" . date("H:i:s") . ")";
		if (empty($_POST['meta_keywords']) || empty($_POST['meta_description']))
			$gmsg .= " (<strong>Вы не заполнили СЕО заголовки!</strong>)";
	}
	$page = $app->db->query("SELECT * FROM _it_PAGES WHERE pID=?", array(
		$pID
	), 'row');
	return parseTemplate("admin/pages_edit.php", compact('page', 'gmsg'));
});
//
$app->get('/debug/', function () use($app)
{
	//unset($_SESSION['lastcIDvisited']);

	return parseTemplate("admin/debug.php", array());
});
//
$app->get('/pages/', function () use($app)
{
	return parseTemplate("admin/pages.php", array());
});
//
$app->match('/stuffeditor/new/{stuff_type}/', function ($stuff_type) use($app)
{
	// $stuff_id = $app->db->query("INSERT INTO _it_STUFF
	// 	SET linkID = ?, stuff_type = ?, published = 'yes'", array(
	// 	$_GET['cID'],
	// 	$stuff_type
	// ), 'id');
	// mlog("new $stuff_type $stuff_id");
	// $app->db->query("INSERT INTO _it_STUFF_LANG
	// 	SET sID = ?", array(
	// 	$stuff_id
	// ));
	// $app->db->query("INSERT INTO _it_STUFF_PERIOD
	// 	SET sID = ?, dateon = ?, dateoff = ?", array(
	// 	$stuff_id,
	// 	date('d.m.Y'),
	// 	date('d.m.Y')
	// ));
	$stuff_id = 0;
	return $app->redirect("/system/stuffeditor/$stuff_id/$stuff_type/");
});
//
$app->match('/stuffeditor/{stuff_id}/{stuff_type}/', function ($stuff_id, $stuff_type) use($app)
{
	if($stuff_id)
	{
		$stuff = $app->db->query("SELECT * FROM _it_STUFF
			LEFT JOIN _it_STUFF_PERIOD  USING(sID)
			LEFT JOIN _it_STUFF_LANG  USING(sID)
			WHERE _it_STUFF.sID = ?", array(
				$stuff_id
				), 'row');
		mlog("edit stuff $stuff_id of $stuff[linkID]");
	}
	else 
	{
		//$stuff_id = intval($app->db->query("SELECT MAX(sID) FROM _it_STUFF",null,'el'))+1;
		$stuff_id = 0;
		$stuff['stuff_type'] = $stuff_type;
	}

	mlog("stuff editing [ $stuff_id ]");

	$stuff['sID'] = $stuff_id;
	$company = Objects::GetCompanyById($stuff['linkID']);
	return parseTemplate("admin/stuffeditor.php", compact('stuff', 'company'));
});
$app->match('/firms/edit/{company_id}/', 	function ($company_id) use($app)
{
	//$msg = urldecode($_GET['msg']);
	if (isset($_POST['shortname']))
	{
		mlog("update company $company_id");
		if (isset($_GET['cID']))
		{
			$parent = Objects::GetCompanyById($_GET['cID'], true, true, 
				array('allstuff'=>true));
		}
		else
		{
			$company = Objects::GetCompanyById($company_id, true, true, 
				array('allstuff'=>true));
			$parent = Objects::GetCompanyById($company['parent']['cID'], true, true, 
				array('allstuff'=>true));
		}
		$temp1 = Objects::GetCompanyById($company_id, true, true, 
			array('allstuff'=>true));
		mlog("$_POST[published] $temp1[view_setup] $temp1[published]");
		if($_POST['published'] != 'on' && $temp1['view_setup'] == 1)
		{
			mlog("full hide");
			$app->db->query("UPDATE _it_FIRMS 
				SET published = 'no' 
				WHERE cID = ?i OR pID = ?i OR parent = ?i",
				array(
					$company_id,
					$company_id,
					$company_id));
			$app->db->query("UPDATE _it_ADS
				SET published='no' WHERE cID = ?",array($company_id));
		}
		else 	if($_POST['published']=='on' && $temp1['view_setup']==1
			&& $temp1['published']=='no')
		{
			mlog("full show");
			$app->db->query("UPDATE _it_FIRMS 
				SET published = 'yes'
				WHERE cID = ? OR pID = ? OR parent = ?",
				array(
					$company_id,
					$company_id,
					$company_id));
		}
		if ($_POST['office_type'] == 0)
			unset($_POST['office_type']);
		$co_names = str_replace(",", " | ", $_POST['co_names']);
		$app->db->query("UPDATE _it_FIRMS 
			SET office_type = ?i, firm_type = ?i,
			ownership_type = ?i,
			shortname = ?, fullname = ?, name_aliases = ?, 
			firm_html =?, discount008 = ?, work_time = ?, razm_type = ?,
			trade_type = ?, info = ?, published = ?, license = ?, 
			slogan = ?, co_names = ?, co_phones = ?,
			discount008 = ?, pos = 1000, correct_contacts = ?,
			title = ? , oID = ?i, uID = ?i, ordernum = ?, actual_date = ?, 
			contracttime = ? , published = ?, view_setup = ?i,
			dateon = ?, dateoff = ?, updated = ?, metadesc = ?, metakeys = ?
			WHERE cID = ?i", 	array(
				$_POST['office_type'],
				$_POST['firm_type'],
				$_POST['ownership_type'],
				$_POST['shortname'],
				$_POST['fullname'],
				$_POST['name_aliases'],
				$_POST['firm_html'],
				$_POST['discount008'],
				$_POST['work_time'],
				$_POST['razm_type'],
				$_POST['trade_type'],
				$_POST['inputarea'],
				"yes",
				$_POST['license'],
				$_POST['slogan'],
				$co_names,
				$_POST['co_phones'],
				$_POST['discount008'],
				$_POST['correct_contacts'],
				$_POST['title'],
				$_POST['oID'],
				$_POST['uID'],
				$_POST['ordernum'],
				date('Y-m-d', strtotime($_POST['actual_date'])),
				$_POST['contracttime'],
				($_POST['published'] ? 'yes' : 'no'),
				($_POST['view_setup'] == 'on' ? 1 : 0),
				date('Y-m-d', strtotime($_POST['dateon'])),
				date('Y-m-d', strtotime($_POST['dateoff'])),
				1,
				$_POST['metadesc'],
				$_POST['metakeys'],
				$company_id	)
			);
	$app->db->query("UPDATE _it_FIRMS_ADDRESSES
		SET 
		region = ?, 
		area = ?, 
		city = ?, 
		district = ?,
		street = ?, 
		dom = ?, 
		korp = ?, 
		lit = ?, 
		kv = ?, 
		info = ?,
		orient = ?, 
		transport = ?, 
		`index` = ?, 
		lat = ?, 
		lng = ?,
		name_menu = ?
		WHERE cID = ?", 
		array(
			$_POST['region'],
			$_POST['area'],
			$_POST['city'],
			$_POST['district'],
			$_POST['street'],
			$_POST['dom'],
			$_POST['korp'],
			$_POST['lit'],
			$_POST['kv'],
			$_POST['comment'],
			$_POST['orient'],
			$_POST['transport'],
			$_POST['index'],
			$_POST['lat'],
			$_POST['lng'],
			$_POST['name_menu'],
			$company_id
			));
	mlog("$_POST[owncats]");
	$company = Objects::GetCompanyById($company_id, true, true, 
			array('allstuff'=>true));
	$app->db->query("UPDATE _it_FIRMS SET updated = 1 WHERE pID = ?i
		OR parent = ?i",array($company_id,$company_id));
	$ownrsID = 0;
	if ($_POST['owncats'] == 'on')
	{
		$ownrsID = $company['ownrsID'];
		if (empty($ownrsID))
		{
			$ownrsID = $app->db->query("SELECT MAX(rsID)+1 FROM _it_FIRMS", null, 'el');
			$app->db->query("UPDATE _it_FIRMS
				SET ownrsID = ?
				WHERE cID = ?", array(
					$ownrsID,
					$company_id
					));
			mlog("created ownrsID $ownrsID for $company_id");
		} 
		mlog("using own ownrsID $ownrsID");
		$app->db->query("UPDATE _it_FIRMS SET rsID = ? WHERE cID = ?", array(
			$ownrsID,
			$company_id
			));
	}
	if ($ownrsID)
		$rsID = $ownrsID;
	else
		$rsID = $company['rsID'];
	$app->db->query("DELETE FROM _it_LINK_RUBRICS_2_SETS WHERE rsID = ?", array(
		$rsID
		)); 
	if (empty($rsID))
	{
		$maxrsID = $app->db->query("SELECT MAX(rsID) FROM _it_LINK_RUBRICS_2_SETS", null, 'el');
		$rsID = $maxrsID + 1;
		
		$app->db->query("UPDATE _it_FIRMS SET rsID = ? WHERE cID = ?", array(
			$rsID,
			$company_id
			));
	}
	mlog("rsID=$rsID");
	foreach ($_POST['cat'] as $rID)
	{
		$app->db->query("INSERT INTO _it_LINK_RUBRICS_2_SETS SET rsID = ?, rID = ?", array(
			$rsID,
			$rID
			));
		$cat = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID = ?i", array(
			$rID
			), 'row');
		$p = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID = ?i AND parent != 0",
			array($cat['parent']), 'row');
		if($p)
		{
			$co_rubrics .= "$p[caption]: $cat[caption]. ";
		}
		mlog("rubric $cat[cat] $rID [".rus2translit($cat['caption'])."] rsid:$rsID parent: $p[rID] [".rus2translit($p['caption'])."]");
	}
	if($co_rubrics)
	{
		$app->db->query("UPDATE _it_FIRMS SET co_rubrics = ? WHERE cID = ?i",
			array($co_rubrics, $company_id));
		mlog("upd rubrics $company_id: ".rus2translit($co_rubrics));
	}
	//$company = Objects::GetCompanyById($company_id, true, true);
	$faxcid=$company['parent']['cID'] == $company_id ? $company_id : 
		(is_array($company['parent']) ? $company['parent']['cID'] : $company['parent']);
	mlog("faxcid = $faxcid");
	$app->db->query("DELETE FROM _it_FIRMS_INPUT WHERE cID = ?", 
		array($faxcid ));
	$app->db->query("INSERT INTO _it_FIRMS_INPUT
		SET faxrek = ?,
		cID = ?", array(
			$_POST['input'],
			$faxcid
			));
	$attribs = $app->db->query("SELECT  info,type,value,pos,faID
		FROM _it_FIRMS_ATTRIBS
		WHERE cID=?i
		ORDER BY faID DESC
		", array(
			$office['cID']
			), 'assoc');
	foreach ($attribs as $attr)
	{
		$company['attribs'][$attr['type']][] = array(
			'value' => $attr['value'],
			'info' => $attr['info']
			);
	}
	$company['attr_all'] = $attribs;
	$app->db->query("DELETE FROM _it_FIRMS_ATTRIBS WHERE cID = ?i", array(
		$company_id
		));
	foreach ($_POST['attrib_type'] as $idx => $at)
	{
		$type = $at;
		$info = $_POST['info'][$idx];
		$value = $_POST['value'][$idx];
		$pos = $_POST['pos'][$idx];
		
		//mlog("attrib #$idx info=$info type=$at value=$value pos=$pos");
		
		if (($info == " " && $value == " ") || $type == 'del')
		{
			//mlog("skip #$idx value=$value");
			continue;
		}
		
		if ($info == " ")
			$info = null;
		if ($value == " ")
			$value = null;
		
		$info = trim($info);
		$value = trim($value);
		$minpos = $app->db->query("SELECT MIN(pos) FROM _it_FIRMS_ATTRIBS
			WHERE cID = ?", array(
				$company_id
				), 'el');
		if ($minpos <= 1)
			$minpos = 99;
		mlog("attrib #$idx cid=$company_id minpos=$minpos type=[$type] value=[$value]	info=[$info]");
		$app->db->query("INSERT INTO _it_FIRMS_ATTRIBS
			SET cID = ?i, type = ?, value = ?, info = ?, pos=?", array(
				$company_id,
				$type,
				$value,
				$info,
				$minpos - 1
				));
	}
	if ($_POST['metro'])
	{
		$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES_METRO
			WHERE cID = ?", array(
				$company_id
				));
		
		foreach ($_POST['metro'] as $metro)
		{
			$m = explode("|", $metro);
			if ($m[2] == "км")
				$dist = 1000 * $m[1];
			else
				$dist = $m[1];
			
			$app->db->query("INSERT INTO _it_FIRMS_ADDRESSES_METRO
				SET cID = ?, metro = ?, dist = ?", array(
					$company_id,
					$m[0],
					$dist
					));
		}
	}
	$gmsg = "обновлено";
	if(!$_POST['office_type'])
		elasticsearch::updateCompany($company_id);
	cache::clear();
	}
	$districts = $app->db->query("SELECT * FROM _it_SPR_DISTRICT ORDER BY caption", null, 'assoc');
	$company = Objects::GetCompanyById($company_id, true, true, 
			array('allstuff'=>true));
	$parent = Objects::GetCompanyById($company['parent']['cID'], true, true, 
			array('allstuff'=>true));
	$parentcompany = Objects::GetCompanyById($company['parent']['cID'], true, true, 
			array('allstuff'=>true));
	$offices = Objects::GetOffices($company['cID'], true);
	if (empty($offices))
	{
		$offices = Objects::GetOffices($parent['cID'], true);
		
	}
	if (! $company['rsID'] && $parent['rsID'])
	{
		$rsID = $parent['rsID'];
		$company['rsID'] = $rsID;
	}
	if ($company['parent'] != $company['cID'])
	{
		$parent = Objects::GetCompanyById($company['parent']['cID'], true, true, 
			array('allstuff'=>true));
		
		$parent['offices'][] = $parent;
		
	} else
	{
		$parent = $company;
		$parent['offices'][] = $company;
		
	}
	
	$selcompany = $company;
	if (intval($company['parent']['pID']) && $company['parent']['pID'] != $company_id)
	{
		//mlog("input from ".$company['parent']);
		//mlog(print_r($company['parent'],1));
		$company['input'] = $app->db->query("SELECT faxrek FROM _it_FIRMS_INPUT WHERE cID = ?", array(
			is_array($company['parent']) ? $company['parent']['parent'] : $company['parent']
			), 'el');
		$parent = $company['parent']['pID'];
		$rsID = $company['rsID'];
		
		$company['offices'][] = $selcompany; 
	} else
	{
		//mlog("input2 from ".$company['parent']['cID']);
		$company['input'] = $app->db->query("SELECT faxrek FROM _it_FIRMS_INPUT WHERE cID = ?", array(
			$company['parent']['cID']
			), 'el');
		$company['offices'][] = $selcompany;
	}
	$tarifs = $app->db->query("SELECT * FROM _it_SPR_FIRM_RAZM", null, "assoc");
	foreach ($tarifs as $idx => $t)
	{
		$ntarifs[$t['ID']] = $t;
	}
	$tarifs = &$ntarifs;
	$banners = $app->db->query("SELECT *,_it_ADS_PERIOD.dateon, _it_ADS_PERIOD.dateoff 
		FROM _it_ADS
		LEFT JOIN _it_FIRMS ON _it_FIRMS.cID = _it_ADS.cID
		LEFT JOIN _it_ADS_PUBLISH ON _it_ADS_PUBLISH.aID = _it_ADS.aID
		LEFT JOIN _it_ADS_PERIOD ON _it_ADS_PERIOD.aID = _it_ADS.aID
		WHERE _it_FIRMS.cID = ?i
		GROUP BY _it_ADS.aID
		ORDER BY _it_ADS_PUBLISH.block DESC", array(
			$company_id
			), "assoc");
	$cats = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = 1 ORDER BY caption", null, 'assoc');
	$primary_office = Objects::GetCompanyById($company['pID'], true, true, 
			array('allstuff'=>true));
	$office_types = $app->db->query("SELECT * FROM _it_SPR_OFFICE_TYPES", null, 'assoc');
	$ownership_types = $app->db->query("SELECT * FROM _it_SPR_OWNERSHIP_TYPES", null, 'assoc');
	$razm_types = $app->db->query("SELECT * FROM _it_SPR_FIRM_RAZM", null, 'assoc');
	$attrib_types = $app->db->query("SELECT * FROM _it_ATTRIB_TYPES", null, 'assoc');
	$company_cats = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS WHERE rsID = ?", array(
		$company['rsID']
		), 'col');
	$cats = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = 1 ORDER BY caption", null, 'assoc');
	foreach ($cats as $cat)
	{
		$cat['subs'] = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ? ORDER BY caption", array(
			$cat['rID']
			), 'assoc');
		foreach ($cat['subs'] as $sub)
		{
			if (in_array($sub['rID'], $company_cats))
			{
				$cat['hassub'] = true;
			}
		}
		$ncats[] = $cat;
	}
	$rubrics = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS WHERE rsID = ?", array(
		$company['rsID']
		), 'col');
	$selcompany['co_names'] = str_replace(" | ", ",", $selcompany['co_names']);
	if(empty($selcompany['dateon']))
		$selcompany['dateon'] = date('d.m.Y');
	if(empty($selcompany['dateoff']))
		$selcompany['dateoff'] = date('d.m.Y');
	if(empty($selcompany['actual_date']))
		$selcompany['actual_date'] = date('d.m.Y');
	$js = "cID = " . intval($company_id) . ";";
	$devviewcompany = $app->db->query("SELECT * FROM _it_FIRMS WHERE cID = ?i", array(
		$company_id
		), 'row');
	unset($devviewcompany['firm_html']);
	unset($devviewcompany['info']);
	unset($devviewcompany['search']);
	$users = $app->db->query("SELECT * FROM _it_SYS_USERS", null, 'assoc'); 

	if($selcompany['cID'] && 
		$_SESSION['lastcIDvisited'][count($_SESSION['lastcIDvisited'])-1]['cID']!=$selcompany['cID'])
	{
		$_SESSION['lastcIDvisited'][] = array('name'=>$selcompany['fullname'], 'cID'=>$selcompany['cID'],
			'company'=>$selcompany,'time'=>time(),'state'=>$gmsg);
		if(count($_SESSION['lastcIDvisited'])>=50)
			array_shift($_SESSION['lastcIDvisited']);
	}

	return parseTemplate("admin/firms_edit.php", compact('offices', 'tarifs', 'company', 'selcompany', 'company_id', 'parentcompany', 'devviewcompany', 'banners', 'cats', 'office_types', 'districts', 'primary_office', 'ownership_types', 'razm_types', 'ncats', 'attrib_types', 'rubrics', 'gmsg', 'rmsg', 'msg', 'parent', 'js', 'users'));
});
//
$app->get("/delete/{cid}/", function ($cid) use($app)
{
	$company = Objects::GetCompanyById($cid, true);
	if ($company['parent']['cID'])
		$ret = "/system/firms/edit/" . $company['parent']['cID'] . "/";
	else
		$ret = "/system/";

	if($company['cID'])
	{
		$_SESSION['lastcIDvisited'][] = array('name'=>$company['fullname'], 'cID'=>$company['cID'],
			'company'=>$company,'time'=>time(),'state'=>'удалено');
		if(count($_SESSION['lastcIDvisited'])>=50)
			array_shift($_SESSION['lastcIDvisited']);
	}

	Objects::DeleteCompany($cid, true);
	elasticsearch::deleteCompany($cid);
	mlog("deleted company $cid");
  // $ret.="ok";
	$ret="/system/firms/";
	return $app->redirect($ret);
});
//
$app->match("/firms/new/", function () use($app)
{
	if (isset($_POST['shortname']))
	{
		if (isset($_GET['cID']))
			$parent = Objects::GetCompanyById($_GET['cID']);
		
		if ($_POST['office_type'] == 0)
			unset($_POST['office_type']);
		
		if (empty($_POST['fullname']))
			$_POST['fullname'] = $parent['fullname'];
		
		$cID = $app->db->query("INSERT INTO _it_FIRMS
			SET office_type = ?, firm_type = ?, ownership_type = ?,
			shortname = ?, fullname = ?, name_aliases = ?, firm_html =?,
			discount008 = ?, work_time = ?, razm_type = ?, trade_type = ?,
			info = ?, published = ?, license = ?, slogan = ?, co_names = ?, co_phones = ?,
			discount_html = ?, pos = 1000, correct_contacts = ?, rsID = ?,
			oID = ?, uID = ?", array(
				$_POST['office_type'],
				$_POST['firm_type'],
				$_POST['ownership_type'],
				$_POST['shortname'],
				$_POST['fullname'],
				$_POST['name_aliases'],
				$_POST['firm_html'],
				$_POST['discount008'],
				$_POST['work_time'],
				$_POST['razm_type'],
				$_POST['trade_type'],
				$_POST['info'],
				'yes',
				$_POST['license'],
				$_POST['slogan'],
				$_POST['co_names'],
				$_POST['co_phones'],
				$_POST['discount_html'],
				$_POST['correct_contacts'],
				$parent['rsID'],
				$_SESSION['user']['ID'],
				$_SESSION['user']['ID']
				), 'id');
		mlog("new company $cID");

		$ID = $app->db->query("INSERT INTO _it_FIRMS_ADDRESSES
			SET cID = ?, region = ?, area = ?, city = ?, district = ?,
			street = ?, dom = ?, korp = ?, lit = ?, kv = ?, info = ?,
			orient = ?, transport = ?, `index` = ?, lat = ?, lng = ?,
			name_menu = ?", array(
				$cID,
				$_POST['region'],
				$_POST['area'],
				$_POST['city'],
				$_POST['district'],
				$_POST['street'],
				$_POST['dom'],
				$_POST['korp'],
				$_POST['lit'],
				$_POST['kv'],
				$_POST['info'],
				$_POST['orient'],
				$_POST['transport'],
				$_POST['index'],
				$_POST['lat'],
				$_POST['lng'],
				$_POST['name_menu']
				), 'id');
		
		mlog("addr $ID");
		if (! empty($_GET['cID']))
		{
			mlog("filial");
			$parent = (strlen($_GET['cID']) ? $_GET['cID'] : $cID);
			$cparent = Objects::GetCompanyById($parent);
			mlog("cparent $parent info $cparent[cinfo] firm_html $cparent[firm_html]");
			$app->db->query("UPDATE _it_FIRMS SET pID = ?, parent = ?
				WHERE cID = ?", array(
					$_GET['cID'],
					$parent,
					$cID
					));
			
			if ($_POST['copyparent'])
			{
				mlog("copy contact");
				$contacts = $app->db->query("SELECT * FROM _it_FIRMS_ATTRIBS
					WHERE cID = ?", array(
						$_GET['cID']
						), 'assoc');
				foreach ($contacts as $c)
				{
					mlog("*$c[type] $c[value] $c[info] $c[pos]");
					$app->db->query("INSERT INTO _it_FIRMS_ATTRIBS
						SET type = ?, cID = ?, value = ?, info = ?, pos = ?", array(
							$c['type'],
							$cID,
							$c['value'],
							$c['info'],
							$c['pos']
							));
				}
				$app->db->query("UPDATE _it_FIRMS
					SET info = ?, firm_html = ?, work_time = ?, rsID = ?
					WHERE cID = ?", array(
						$cparent['cinfo'],
						$cparent['firm_html'],
						$cparent['work_time'],
						$cparent['rsID'],
						$cID
						));
				
				// $app->db->query("UPDATE _it_FIRMS
				// SET rsID = ?
				// WHERE cID = ?", array($parent['rsID'], $cID));
			}
		} 
		else
		{
			mlog("firm");
			$parent = (strlen($_POST['parent']) ? $_POST['parent'] : $cID);
			$app->db->query("UPDATE _it_FIRMS SET pID = ?, parent = ?
				WHERE cID = ?", array(
					$cID,
					$parent,
					$cID
					));
		}

		$company = Objects::GetCompanyById($cID);
		if($company['cID'])
		{
			$_SESSION['lastcIDvisited'][] = array('name'=>$company['fullname'], 'cID'=>$company['cID'],
				'company'=>$company,'time'=>time(),'state'=>'создано');
			if(count($_SESSION['lastcIDvisited'])>=50)
				array_shift($_SESSION['lastcIDvisited']);
		}
		
		
		$app->db->query("INSERT INTO _it_FIRMS_INPUT
			SET faxrek = ?, cID = ?", array(
				$_POST['input'],
				$company_id
				));
		if(empty($_GET['cID']))
			elasticsearch::AddCompany($cID);
		return $app->redirect("/system/firms/edit/$cID/");
	}
	
	$districts = $app->db->query("SELECT * FROM _it_SPR_DISTRICT ORDER BY caption", null, 'assoc');
	
	$office_types = $app->db->query("SELECT * FROM _it_SPR_OFFICE_TYPES");
	$ownership_types = $app->db->query("SELECT * FROM _it_SPR_OWNERSHIP_TYPES");
	$razm_types = $app->db->query("SELECT * FROM _it_SPR_FIRM_RAZM");
	$attrib_types = $app->db->query("SELECT * FROM _it_ATTRIB_TYPES");
	
	if (isset($_GET['cID']))
	{
		$company = Objects::GetCompanyById($_GET['cID']);
	}
	$cats = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = 1", null, 'assoc');
	foreach ($cats as $cat)
	{
		$cat['subs'] = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?", array(
			$cat['rID']
			), 'assoc');
		$ncats[] = $cat;
	}
	
	return parseTemplate("admin/firms_new.php", compact('office_types', 'ownership_types', 'razm_types', 'company', 'rmsg', 'gmsg', 'ncats', 'attrib_types', 'districts'));
});
//
$app->match("/ajax/{cmd}/", function ($cmd) use($app)
{
	global $app;
	
	switch ($cmd)
	{
		case 'useowncat':
		mlog("tgl cat $_GET[cID]");
		$company = Objects::GetCompanyByID($_GET['cID']);
		$parent = $app->db->query("SELECT * FROM _it_FIRMS WHERE cID = ?", array(
			$company['pID']
			), 'row');
		$app->db->query("UPDATE _it_FIRMS SET rsID = ? WHERE cID = ?", array(
			$parent['rsID'],
			$_GET['cID']
			));
		break;
		case 'delstuff':
		$app->db->query("DELETE FROM _it_STUFF_PERIOD WHERE sID = ?", array(
			$_GET['sID']
			));
		$app->db->query("DELETE FROM _it_STUFF_LANG WHERE sID = ?", array(
			$_GET['sID']
			));
		$app->db->query("DELETE FROM _it_STUFF WHERE sID = ?", array(
			$_GET['sID']
			));
		exit();
		break;
		case 'getconfig':
		$lastpos = $app->db->query("SELECT MIN(pos) as min FROM _it_FIRMS_ATTRIBS
			WHERE cID = ?", array(
				$_GET['cID']
				), 'el');
		$config['lastpos'] = intval($lastpos) ? intval($lastpos) : 99;
		$config['metros'] = $app->db->query("SELECT caption 
			FROM _it_SPR_METRO ORDER BY caption", null, 'col');
		$config['district'] = $app->db->query("SELECT caption 
			FROM _it_SPR_DISTRICT ORDER BY caption", null, 'col');
		
		echo json_encode($config);
		exit();
		break;
		
		case 'removecontact':
		$app->db->query("DELETE FROM _it_FIRMS_ATTRIBS
			WHERE faID = ?", array(
				$_GET['faID']
				));
		break;
		
		case 'suggestdistrict':
		$sug = $app->db->query("SELECT caption FROM _it_SPR_DISTRICT WHERE caption LIKE '%$_GET[search]%'", null, 'col');
		echo "<ul>";
		foreach ($sug as $s)
		{
			echo "<li><a href=\"javascript:$('#district').val('$s')\"> $s</a> </li>";
		}
		echo "</ul>";
		exit();
		break;
		case 'suggestway':
			// mlog("suggest $_POST[search]");
		$sug = $app->db->query("SELECT * FROM evo_streets
			WHERE street LIKE '%$_GET[search]%'
			LIMIT 15", null, 'assoc');
		echo "<ul>";
		foreach ($sug as $s)
		{
			echo "<li><a href=\"javascript:$('#street').val('$s[street]')\"> $s[street]</a> </li>";
		}
		echo "</ul>";
		exit();
		break;
		
		case 'savestuff':
		mlog("sID=$_POST[sID] caption=$_POST[caption] cID=$_POST[cID] $_POST[sdateon]/$_POST[sdateoff]");
		//mlog("fullpost: ".print_r($_POST,1));
		//if(!empty($_POST['notice']) && !empty($_POST['body']))
		{
			if(!empty($_POST['sID']))
			{
				$app->db->query("UPDATE _it_STUFF SET linkID = ? WHERE sID = ?", array(
					$_POST['cID'],
					$_POST['sID']
				));
				$app->db->query("UPDATE _it_STUFF_LANG
					SET caption = ?, notice = ?, body = ?
					WHERE sID = ?", array(
						$_POST['caption'],
						$_POST['notice'],
						$_POST['body'],
						$_POST['sID']
					));
				$sID = $_POST['sID'];
			}
			else 
			{
				$sID = $app->db->query("INSERT INTO _it_STUFF SET linkID = ?,stuff_type = ?,
				                       published='yes' ", array(
				                       	$_POST['cID'],
				                       	$_POST['stype']
				                       	), 'id');
				mlog("new sID=$sID");
				$app->db->query("INSERT INTO _it_STUFF_LANG
					SET caption = ?, notice = ?, body = ?,
					sID = ?", array(
						$_POST['caption'],
						$_POST['notice'],
						$_POST['body'],
						$sID
					));
			}

			//if ($_POST['sdateon'] && $_POST['sdateoff'] && 
			//	$_POST['sdateon'] != '1970-01-01' 
			//	&& $_POST['sdateoff'] != "1970-01-01")
			//{
				$exist = $app->db->query("SELECT sID FROM _it_STUFF_PERIOD
					WHERE sID=?i",array(intval($sID)),'el');
				if($exist)
				{
					mlog("dates update of $sID");
					$app->db->query("UPDATE _it_STUFF_PERIOD
					SET dateon = ?, dateoff = ?
					WHERE sID = ?", array(
						$_POST['sdateon'] ? date('Y-m-d', strtotime($_POST['sdateon'])) : NULL,
						$_POST['sdateoff'] ? date('Y-m-d', strtotime($_POST['sdateoff'])) : NULL,
						$sID
					));
				}
				else 
				{
					mlog("dates created for $sID");
					$app->db->query("INSERT INTO _it_STUFF_PERIOD
						SET dateon = ?, dateoff = ?, sID = ?", array(
							$_POST['sdateon'] ? date('Y-m-d', strtotime($_POST['sdateon'])) : NULL,
							$_POST['sdateoff'] ? date('Y-m-d', strtotime($_POST['sdateoff'])) : NULL,
							$sID
						));
				}
			//}
			// else 
			// {
			// 	mlog("empty notice/body");
			// }
		}
		break;
		case 'suggest':
		if(intval($_GET['search'])>0)
			$orcid = " OR (cID >= ".intval($_GET['search'])." AND cID <= ".intval($_GET['search']).")";
		$sug = $app->db->query("SELECT DISTINCT(fullname),cID,_it_SPR_OFFICE_TYPES.caption as ccaption FROM _it_FIRMS
			LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID = _it_FIRMS.office_type
			WHERE (fullname LIKE '%$_GET[search]%' OR shortname LIKE '%$_GET[search]%' $orcid)
			AND pID = cID
			LIMIT 30", null, 'assoc');
		echo "<ul>";
		foreach ($sug as $s)
		{
			echo "<li>$s[cID] <a href=\"/system/firms/edit/$s[cID]/\"> $s[fullname]</a> " . 
			($s['ccaption'] ? "[" . $s['ccaption'] . "]" : "") . "</li>";
		}
		echo "</ul>";
		exit();
		break;
		
		case 'addrubric':
		$code = $app->db->query("SELECT rID FROM _it_RUBRICS WHERE cat = ?", array(
			$_GET['cat']
			), 'el');
		if ($code)
		{
			mlog("fail creat rubric/code");
			return 0;
		}
		$id = $app->db->query("INSERT INTO _it_RUBRICS
			SET cat = ?, caption = ?, description = ?, published='no',pos=5, parent = ?", array(
				$_GET['cat'],
				'название рубрики',
				'',
				$_GET['parent']
				), 'id');
		break;
		
		case 'delrubric':
		$app->db->query("DELETE FROM _it_RUBRICS WHERE rID = ?", array(
			$_GET['rID']
			));
		$app->db->query("DELETE FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?", array(
			$_GET['rID']
			));
		break;
		
		case 'addpage':
		$id = $app->db->query("INSERT INTO _it_PAGES SET content=?, meta_title = ?, url_title = ?", array(
			'',
			$_GET['title'],
			rus2translit(mb_strtolower(str_replace(" ", "_", $_GET['title'])))
			), 'id');
		break;
		
		case 'delpage':
		$app->db->query("DELETE FROM _it_PAGES WHERE pID = ?", array(
			$_GET['pID']
			));
		break;
		
		default:
		break;
	}
	return intval(trim($id));
});
//
$app->match('/rubrics/edit/{rID}/', function ($rID) use($app)
{
	
	if (isset($_POST['rID']) && ! empty($_POST['cat']))
	{
		$code = $_POST['cat'];
		$r = $app->db->query("SELECT * FROM _it_RUBRICS 
			WHERE cat = ? AND parent = 1", array(
			$_POST['cat']
			), 'row');
		if ($r && $_POST['rID'] != $r['rID'])
		{
			$en = substr(str_replace(" ", "", 
				rus2translit($_POST['caption'])), 0, 16);
			$en2 = $_POST['cat'] . mt_rand(1, 99);
			$rmsg = "Ошибка: Код '$code' уже существует (<a href='/system/rubrics/edit/$r[rID]'>$r[rID]: $r[caption]</a>) Варианты: <a href='#' onclick='$(\"#cat\").val(\"$en\");$(\"#rubric\").submit();'>$en</a>, <a href='#' onclick='$(\"#cat\").val(\"$en2\");$(\"#rubric\").submit();'>$en2</a>";
		} 
		else
		{
			$app->db->query("UPDATE _it_RUBRICS
				SET cat = ?, caption = ?, description = ?, 
				published = ?, pos = ?i, keywords = ?
				WHERE rID=?i", array(
					trim($_POST['cat']),
					trim($_POST['caption']),
					trim($_POST['desc']),
					$_POST['published'] ? 'yes' : 'no',
					intval($_POST['pos']),
					trim($_POST['keywords']),
					$rID
					));
			$gmsg = "OK: информация обновлена (" . date("H:i:s") . ")";
		}
	}
	$rubric = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID=?", array(
		$rID
		), 'row');
	
	return parseTemplate("admin/rubrics_edit.php", compact('rubric', 'rmsg', 'gmsg', 'code'));
});
//
$app->get('/rubrics/', function () use($app)
{
	$rubrics = $app->db->query("SELECT * 
		FROM _it_RUBRICS 
		WHERE parent = 1
		ORDER BY caption ", null, 'assoc');
	foreach ($rubrics as $r)
	{
		$subs = $app->db->query("SELECT * 
			FROM _it_RUBRICS 
			WHERE parent = ?i
			ORDER BY caption ", array(
			$r['rID']
		), 'assoc');
		$nrubrics[] = array(
			'objects_count' => $r['objects_count'],
			'rID' => $r['rID'],
			'subs' => $subs,
			'cat' => $r['cat'],
			'caption' => $r['caption'],
			'discount_count' => $r['discount_count']
		);
	}
	$rubrics = &$nrubrics;
	// print_r($rubrics);
	return parseTemplate("admin/rubrics.php", compact('rubrics'));
});
//
$app->match('/ads/new/', function () use($app)
{
	mlog("new banner request");
	$tmp_name = $_FILES["logo"]["tmp_name"];
	if (empty($tmp_name))
	{
		mlog("empty ban file or cats");
	} 
	else
	{
		
		$name = $_FILES["logo"]["name"];
		$srcurl = "/content/ilogos/46860/$name";
		move_uploaded_file($tmp_name, $_SERVER['DOCUMENT_ROOT'] . "/it_sites/008.ru$srcurl");
		mlog("tmpname=$tmp_name name=$name srcurl=$srcurl");
		
		$aID = $app->db->query("INSERT INTO _it_ADS
			SET cID=?i,url=?,caption=?,width=?,height=?,srcurl=?,enable=1,published='yes'", array(
			$_POST['cID'],
			$_POST['url'],
			$_POST['caption'],
			468,
			100,
			$srcurl
		), 'id');
		mlog("new aid $aID for company $_POST[cID]");
		if(empty($_POST['cats']))
		{
			$app->db->query("INSERT INTO _it_ADS_PUBLISH
				SET aID=?i,block=?,enable=1", array(
					$aID,
					$_POST['adv']
					));
		}
		foreach ($_POST['cats'] as $c)
		{
			if($c==0)
			{
				$catalog = "/";
			}
			else
			{
				$catname = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID=?i", 
					array($c), 'row');
				if($catname['parent']!=1)
				{
					$parent = $app->db->query("SELECT * FROM _it_RUBRICS WHERE rID = ?i",
						array($catname['parent']),'row');
					$catalog = "/catalog/$parent[cat]/$catname[cat]/*";
				}
				else
				{
					$catalog = "/catalog/$catname[cat]/*";
				}
			}

			$app->db->query("INSERT INTO _it_ADS_PUBLISH
				SET aID=?i,catalog=?,block=?,enable=1", array(
					$aID,
					$catalog,
					$_POST['adv']
					));
		}
		
		$timestamp_on = strtotime($_POST['dateon_new']);
		mlog("ton = $timestamp_on from $_POST[dateon_new]");
		$timestamp_on = date("Y-m-d", $timestamp_on);
		$timestamp_off = strtotime($_POST['dateoff_new']);
		$timestamp_off = date("Y-m-d", $timestamp_off);
		
		$app->db->query("INSERT INTO _it_ADS_PERIOD
			SET aID=?i,dateon=?,dateoff=?", array(
			$aID,
			$timestamp_on,
			$timestamp_off
		));
	}
	
	return $app->redirect($_SERVER['HTTP_REFERER']);
});
//
$app->match('/ads/update/{aID}/', function ($aID) use($app)
{
	$app->db->query("UPDATE _it_ADS_PERIOD
		SET dateon = ?, dateoff = ?
		WHERE aID=?i", array(
		$_POST['dateon'],
		$_POST['dateoff'],
		$aID
	));
	
	return $app->redirect($_SERVER['HTTP_REFERER']);
});
//
$app->match('/ads/delete/{aID}/', function ($aID) use($app)
{
	$app->db->query("DELETE FROM _it_ADS WHERE aID=?", array(
		$aID
	));
	$app->db->query("DELETE FROM _it_ADS_PERIOD WHERE aID=?", array(
		$aID
	));
	$app->db->query("DELETE FROM _it_ADS_PUBLISH WHERE aID=?", array(
		$aID
	));
	
	return $app->redirect($_SERVER['HTTP_REFERER']);
});
$app->get("/ajax/deletemetro/{cid}/", function($cid) use($app)
{
	mlog("delete metro for $cid");
	$app->db->query("DELETE FROM _it_FIRMS_ADDRESSES_METRO WHERE cID = ?", array($cid));
	return '';
});
//
$app->get('/ajax/firms/search/{key}/p/{pagenum}/', function ($key, $pagenum) use($app)
{
	
	$key = urldecode($key);
	$key = str_replace("+", " ", $key);
	
//	mlog("firm key $key");
	$out = "<table width='100%'><tr><th>x</th><th style='text-align:right;width:32px'>тип</th><th>название</th><th width='42px'>cID</th><th>pID</th><th width='42px'>родитель</th><th width='42px'>тариф</th><th></th><th nowrap></th></tr>";
	
	$firms = $app->db->query("SELECT  _it_SPR_OFFICE_TYPES.caption,cID,parent,office_type,pID,
		razm_type,fullname,shortname,	_it_SPR_FIRM_RAZM.caption as razm_caption
		FROM _it_FIRMS
		LEFT JOIN _it_SPR_OFFICE_TYPES ON _it_SPR_OFFICE_TYPES.ID=_it_FIRMS.office_type
		LEFT JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID=_it_FIRMS.razm_type
		WHERE shortname LIKE '%?e%' OR fullname LIKE '%?e%'
		ORDER BY parent ASC, fullname DESC", array(
			$key,
			$key
			), 'assoc');
	
	$pagenum --;
	$allfirmscnt = count($firms);
	$firms = array_slice($firms, $pagenum * 200, 200);
	foreach ($firms as $cID => $firm)
	{
		if ($firm['parent'] == $firm['cID'])
			$parent = '';
		else
			$parent = $firm['parent'];
		
		if (empty($firm['caption']))
			$firm['caption'] = '[К]';
		
		if ($curnum ++ % 2 == 0)
			$odd = 'odd';
		else
			$odd = '';
		
		$out .= "<tr class='firmrow $odd'>
		<td nowrap>
		<input type=checkbox name=firm[] value=$firm[cID]>
		</td>
		<td nowrap style='text-align:right'>
		<i>$firm[caption]</i>
		</td>
		<td style='$namestyle'><a href='/system/firms/edit/$firm[cID]/' title='перейти к редактированию \"$firm[fullname]\"'>$firm[shortname]</a> (<span style='font-size:12px'>$firm[fullname]</span>)</td>
		<td nowrap>
		<i>$firm[cID]</i>
		</td>
		<td nowrap>
		<i>$firm[pID]</i>
		</td>
		<td nowrap>
		<i><a href='/system/firms/edit/$firm[parent]/' title='перейти к редактированию родителя'>$parent</a></i>
		</td>
		<td nowrap>
		$firm[razm_caption]
		</td>
		<td nowrap><a href='/system/firms/edit/$firm[cID]/' title='перейти к редактированию \"$firm[fullname]\"'>ред</a></td>
		<td nowrap ><a href='javascript:window.open(\"http://008.evodesign.ru/company/$firm[cID]/\");void(0);'  title='смотреть на сайте'>на сайте</a></td>
		<td nowrap ><a href='' title='включить/выключить отображение на сайте'>выкл</a></td>
		</tr>";
	}
	if (($pagenum + 1) * 200 < $allfirmscnt)
		$addmore = "<center><a href='javascript:curpage++;load_firms();' style='font-size:30px'>еще...</a></center>";
	else
		$addmore = '';
	
	$out .= "</table>
	$addmore";
	return $out;
});



$app->run();
?>