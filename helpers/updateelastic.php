<?
xdebug_disable();
error_reporting(E_ERROR);
require_once "/home/new.008.ru/html" . '/lib/config.php';
// подключаем остальные 3rd утилиты/функции
require_once "/home/new.008.ru/html" . '/lib/silex/vendor/autoload.php';
require_once ("/home/new.008.ru/html" . '/lib/phpmorphy/src/common.php');
require_once ("/home/new.008.ru/html" . '/lib/goDB/autoload.php');
require_once ("/home/new.008.ru/html" . '/lib/mimemail.class.php');
require_once ("/home/new.008.ru/html" . '/lib/ImageResize.php');
require_once ("/home/new.008.ru/html" . '/lib/functions.php');
require_once ("/home/new.008.ru/html" . '/lib/securimage/securimage.php');
// подключаем наши классы
require_once ("/home/new.008.ru/html" . '/lib/classes/core.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/stat.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/news.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/cache.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/objects.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/advert.php');
require_once ("/home/new.008.ru/html" . '/lib/classes/discount.php');
use Symfony\Component\HttpFoundation\Response;
Core::init_system();
require 'lib/elasticsearch/vendor/autoload.php';
date_default_timezone_set('Europe/Moscow');
$client = new Elasticsearch\Client(array(
	'hosts' => array(
		'localhost:19200'
	)
));
if($argv[1] == 'reset')
{
	$deleteParams['index'] = 'base';
	$eindex = $client->indices()->exists($deleteParams);
	if($eindex)
	{
		echo "\rdeleting..."; 
		$client->indices()->delete($deleteParams);
		echo "ok\r\n";
	}
	echo "\rcreating....";
	$params = array();
	$params['index'] = 'base';
	//$params['type'] = 'info';
	$params['body']['settings']['number_of_shards'] = 1;
	$params['body']['settings']['number_of_replicas'] = 0;
	$params['body']['settings']['analysis']['analyzer']['ru_analyzer'] = array(
		"type" => "custom",
		"tokenizer" => "standard",
		"filter" => array(
			'lowercase',
			'my_stopwords',
			//'ru_stemming',
			'russian_morphology',
			'english_morphology'
		)
	);
	$params['body']['settings']['analysis']['filter']['my_stopwords'] = array(
		"type" => "stop",
		"stopwords" => array(
			'а,без,более,бы,был,была,были,было,быть,в,вам,вас,весь,во,вот,все,всего,всех,вы,где,да,даже,для,до,его,ее,если,есть,еще,же,за,здесь,и,из,или,им,их,к,как,ко,когда,кто,ли,либо,мне,может,мы,на,надо,наш,не,него,нее,нет,ни,них,но,ну,о,об,однако,он,она,они,оно,от,очень,по,под,при,с,со,так,также,такой,там,те,тем,то,того,тоже,той,только,том,ты,у,уже,хотя,чего,чей,чем,что,чтобы,чье,чья,эта,эти,это,я,a,an,and,are,as,at,be,but,by,for,if,in,into,is,it,no,not,of,on,or,such,that,the,their,then,there,these,they,this,to,was,will,with'
		)
	);
	//$params['body']['settings']['analysis']['filter']['ru_stemming']['type']="snowball";
	//$params['body']['settings']['analysis']['filter']['ru_stemming']['language']="Russian";
	$params['body']['settings']['analysis']['char_filter']['my_mapping']['type']='mapping';
	$params['body']['settings']['analysis']['char_filter']['my_mapping']['mappings']=array("ё=>е");
	$params['body']['settings']['analysis']['analyzer']['custom_with_char_filter']['tokenizer']='standard';
	$params['body']['settings']['analysis']['analyzer']['custom_with_char_filter']['char_filter']=array('my_mapping');

	//$params['body']['mappings']['info']['_all']['enabled'] = true;
	//$params['body']['mappings']['info']['_all']['store'] = "yes";
	$params['body']['mappings']['info']['properties']['cID']['type'] = 'integer';
	$params['body']['mappings']['info']['properties']['pos']['type'] = 'integer';
	$params['body']['mappings']['info']['properties']['firm_html']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['firm_html']['store'] = 'yes';
	$params['body']['mappings']['info']['properties']['firm_html']['enabled'] = true;
	$params['body']['mappings']['info']['properties']['firm_html']['analyzer'] = 'ru_analyzer';
	$params['body']['mappings']['info']['properties']['firm_html']['term_vector'] = 'with_positions_offsets';
	$params['body']['mappings']['info']['properties']['firm_html']['store'] = 'yes';
	$params['body']['mappings']['info']['properties']['shortname']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['shortname']['analyzer'] = 'ru_analyzer';
	//$params['body']['mappings']['info']['properties']['shortname']['index'] = 'not_analyzed';
	$params['body']['mappings']['info']['properties']['shortname']['fields']['sort']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['shortname']['fields']['sort']['index'] = 'not_analyzed';
	//$params['body']['mappings']['info']['properties']['shortname']['analyzer'] = 'ru_analyzer';
	$params['body']['mappings']['info']['properties']['fullname']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['fullname']['analyzer'] = 'ru_analyzer';
	$params['body']['mappings']['info']['properties']['co_names']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['co_names']['analyzer'] = 'ru_analyzer';
	$params['body']['mappings']['info']['properties']['co_rubrics']['type'] = 'string';
	$params['body']['mappings']['info']['properties']['co_rubrics']['analyzer'] = 'ru_analyzer';
	
	$ret = $client->indices()->create($params);
	unset($params);
	echo " ok\r\n";
}
if($argv[1] == 'full' || $argv[1] == 'reset')
	$and = "";
else
	$and = "AND updated = 1 ";

$data = $app->db->query("SELECT cID,published,shortname,rsID,pos,razm_type, fullname,info,
	co_names,pID,parent
	FROM _it_FIRMS
	WHERE office_type IS NULL 
	AND cID=pID AND cID=parent 
	$and", null, 'assoc');
if(!count($data))
	die("normal exit\r\n");
mlog("updating elasticsearch db ...".count($data) . " recs\r\n");

$sort_chars = "0123456789abcdefghjklmnopqrstuvwxyzабвгдеёжзиклмнопрстуфхцчшщъыьэюя";

foreach($data as &$d)
{
	$d = Objects::GetCompanyById($d['cID'], true, true);
	$params['body']['query']['match']['cID'] = intval($d['cID']);
	$ret = $client->search($params);
	$ndel = 0;
	foreach($ret['hits']['hits'] as &$hit)
	{
		$ndel++;
		$deleteParams['id'] = $hit['_id'];
		$deleteParams['index'] = 'base';
		$deleteParams['type'] = 'info';
		try 
		{
			$client->delete($deleteParams);
		}
		catch(Exception $e)
		{
			mlog("delete exception ".$e->getMessage()."\r\n");
		}
	}
	if($ndel>1)
		mlog("company $d[cID] del $ndel recs\r\n");
	$app->db->query("UPDATE _it_FIRMS SET updated = 0 WHERE cID = ?i",array($d['cID']));
	if($d['published'] != 'yes')
	{
		mlog("hidden #$d[cID]\r\n");
	}
	
	echo "[" . intval($i++) . "/" . count($data) . " cID:$d[cID] $deleteParams[id]]\r";
	$text = trim(strip_tags($d['firm_html']));
	$text .= trim(strip_tags($d['info']));
	$text .= trim(strip_tags($d['cinfo']));
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
	if($enc != 'UTF-8' && $enc != 'ASCII')
	{
		echo "\nskip $d[cID] $enc [$text]\r\n";
		continue;
	}
	$utftext = $text;
	$rubrics = array();
	$rids = $app->db->query("SELECT rID FROM _it_LINK_RUBRICS_2_SETS
		WHERE rsID=?i",array($d['rsID']), 'col');
	foreach($rids as &$rid)
	{
		$rid = intval($rid);
		// $rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
		//                           WHERE rID = ?i",array($rid),'el');
	}
	if(count($rids))
	{
		$urids = $app->db->query("SELECT parent FROM _it_RUBRICS 
			WHERE rID IN(?li) AND parent != 1",
			array($rids),'col');
		foreach($urids as &$urid)
		{
			$urid = intval($urid);
			// $rubric = $app->db->query("SELECT caption FROM _it_RUBRICS 
			//                           WHERE rID = ?i",array($urid),'el');
		}
		$rids = array_merge($rids, $urids);
	}
	$rids = array_unique ($rids, SORT_NUMERIC );
	
	$razm_prio = $app->db->query("SELECT prioritet 
	FROM _it_SPR_FIRM_RAZM
	WHERE ID = ?i", 
	array($d['razm_type']), 'el');

	$num_discount = $app->db->query("SELECT COUNT(*) AS cnt 
		FROM _it_STUFF 
		LEFT JOIN _it_STUFF_PERIOD USING(sID)
		LEFT JOIN _it_STUFF_LANG USING(sID)
		WHERE linkID=?i AND stuff_type = 'discount' AND _it_STUFF.published='yes' 
		AND (
			(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
				DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))",
	array($d['cID']), 'el');

	$discount_card = mb_strlen($d['discount008']) > 0 ?
		1 : 0;
	$num_discount += $discount_card;

	$num_conews = $app->db->query("SELECT COUNT(*) AS cnt 
		FROM _it_STUFF 
		LEFT JOIN _it_STUFF_PERIOD USING(sID)
		LEFT JOIN _it_STUFF_LANG USING(sID)
		WHERE linkID=?i AND stuff_type = 'conews' AND _it_STUFF.published='yes' 
		AND (
			(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
				DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))",
	array($d['cID']), 'el');

	$num_vacancy = $app->db->query("SELECT COUNT(*) AS cnt 
		FROM _it_STUFF 
		LEFT JOIN _it_STUFF_PERIOD USING(sID)
		LEFT JOIN _it_STUFF_LANG USING(sID)
		WHERE linkID=?i AND stuff_type = 'vacancy' AND _it_STUFF.published='yes' 
		AND (
			(_it_STUFF_PERIOD.dateoff IS NULL AND  _it_STUFF_PERIOD.dateon IS NOT NULL AND 
				DATE_ADD(_it_STUFF_PERIOD.dateon,INTERVAL 1 MONTH) >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NOT NULL AND _it_STUFF_PERIOD.dateoff >= CURRENT_DATE())
	OR (_it_STUFF_PERIOD.dateoff IS NULL AND _it_STUFF_PERIOD.dateon IS NULL))",
	array($d['cID']), 'el');

	$d['shortname'] = str_replace(array("Ё","ё"), array("Е","е"), $d['shortname']);
	$d['fullname'] = str_replace(array("Ё","ё"), array("Е","е"), $d['fullname']);
	$d['co_names'] = str_replace(array("Ё","ё"), array("Е","е"), $d['co_names']);
	$fch = $d['shortname'];
	$sortIDX = mb_stripos($sort_chars, mb_substr($fch,0,1));
	//echo("\r\nidx3 $d[fullname] '$fch' => $sortIDX\r\n");
	try
	{
		$body = array(
			'info'=> array('sort' => $d['shortname']),
		//	'sortIDX' => intval($sortIDX),
			'cID' => intval($d['cID']),
			'pID' => intval($d['pID']), 
			'parent' => intval($d['parent']),
			'logo' => $d['logo'],
			'rsID' => intval($d['rsID']),
			'rIDS' => count($rids)>=1 ? array_values($rids) : array(),
			'shortname' => $d['shortname'],
			'fullname' => $d['fullname'],
			'co_names' => $d['co_names'],
			'co_rubrics' => $d['co_rubrics'], 
			'firm_html' => $utftext,
			'metro' => $d['metros'], 
			'attribs' => $d['attr_all'],
			'addr' => $d['addr']['city'] . ", ".
			$d['addr']['district']." ".
			$d['addr']['street']." ".
			$d['addr']['dom'],
			'stuff' => $d['stuff'],
			'razm_type' => intval($d['razm_type']),
			'razm_prio' => floatval($razm_prio),
			'num_discount' => intval($num_discount),
			'num_conews' => intval($num_conews),
			'num_vacancy' => intval($num_vacancy),
			'published' => $d['published'],
			'version' => 1,
			'hits' => 0 
		);

		$ret = $client->index(
			array(
				'index' => 'base',
				'type' => 'info',
				'id' => intval($d['cID']),
				'body' => $body
			));
	}
	catch (Exception $e)
	{
		mlog("\r\nexception ".$e->getMessage()."\r\n");
		die;
	}
	$updated++;

}
echo "\r\ndone: $updated updated\r\n";
mlog("updating elasticsearch db completed.");
?>
