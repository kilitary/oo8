<?
/////////////////////////////////////////////
/// Evodesign Internet Promotion Company ///
/// 008.ru Engine (c) 2015.             ///
/// Chief mail:   info@evodesign.ru    ///
/// Support mail: support@evodesign.ru///
////////////////////////////////////////
//xdebug_disable();
assert_options(ASSERT_ACTIVE,   true);
// ïîäêëþ÷åì êîíôèã
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/config.php';

// ïîäêëþ÷àåì îñòàëüíûå 3rd óòèëèòû/ôóíêöèè
require_once $_SERVER['DOCUMENT_ROOT'].'/lib/silex/vendor/autoload.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/phpmorphy/src/common.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/goDB/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/mimemail.class.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/securimage/securimage.php');

// ïîäêëþ÷àåì íàøè êëàññû
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/core.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/stat.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/news.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/cache.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/objects.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/advert.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/lib/classes/discount.php');

// ñîçäàåì ãëàâíûé Silex àïï
$app = new Silex\Application();
// çàäàäèì îáùèé êîíôèã
$app->config = $config;

\go\DB\autoloadRegister();
		
// ïîäêëþ÷ååìñÿ ê áàçå
$app->db = go\DB\DB::create($config['db'], 'mysql');
$app->db->setDebug('goDBDebug');

$data=file_get_contents("http://dic.academic.ru/dic.nsf/ruwiki/348603");
preg_match_all("#<li>(.*?)</li>#smi", $data, $m, PREG_SET_ORDER);
foreach($m as $s)
{
	$street = trim(strip_tags($s[1]));
	$app->db->query("INSERT IGNORE INTO evo_streets
		SET street = ?",array($street));
	echo "$street<br/>";
}

?>