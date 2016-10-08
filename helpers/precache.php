<?
error_reporting(E_ERROR);
require_once (__DIR__ . '/../lib/config.php');
require_once (__DIR__ . '/../lib/silex/vendor/autoload.php');
require_once (__DIR__ . '/../lib/goDB/autoload.php');
require_once (__DIR__ . '/../lib/mimemail.class.php');
require_once (__DIR__ . '/../lib/functions.php');
require_once (__DIR__ . '/../lib/securimage/securimage.php');
require_once (__DIR__ . '/../lib/classes/core.php');
require_once (__DIR__ . '/../lib/classes/stat.php');
require_once (__DIR__ . '/../lib/classes/cache.php');
require_once (__DIR__ . '/../lib/classes/objects.php');

/**
 *
 * конфиг бутстрап
 *
 */


error_reporting(E_ERROR);
\go\DB\autoloadRegister();
$db = go\DB\DB::create($config ['db'], 'mysql');
$db->query('SET NAMES utf8');
$app = new Silex\Application();
$app->config = $config;
$app->db = $db;
$usleep_time = 300;
$timestart = time();
$domain=$config['domain'];

/**
 *
 * off disabled logos
 *
 */

echo "turning on/off company logos...\r\n";
$logos = glob("it_sites/008.ru/content/ilogos/10060/*.*");
$tot=count($logos);
foreach($logos as $logo)
{
	echo sprintf("\r%.2f%%", ($i++/$tot)*100.0);
	if(!is_file($logo))
		continue;
	preg_match("#10060/\w+?(\d+)\.#si", $logo, $m);
	if(empty($m[1]))
		continue;
	$cID = $m[1];
	$company = Objects::GetCompanyById($cID, true, true);
	if($company['published']!='yes' || $company['razm_type'] == 9
		|| $company['razm_type'] == 10
		|| $company['razm_type'] == 6
		|| $company['razm_type'] == 1)
	{
		$info = pathinfo($logo);
		$fn = $info['basename'];
		echo "\r\noff $cID [$fn]\r\n";
		if(!rename($logo, "it_sites/008.ru/content/ilogos/10060/off/$fn"))
			echo "\r\nfail to move $logo\r\n";
	}
}
echo "\r\n".count($logos)." logos processed\r\n";


/**
 *
 * precache catalog/subcatalog
 *
 */

$catalog = $db->query("SELECT cat,rID,caption,parent 
	FROM _it_RUBRICS WHERE parent = 1 ", null, 'assoc');
echo(count($catalog)." to update\r\n");

foreach($catalog as $cat)
{
	$url = "http://$domain/catalog/$cat[cat]/?refresh=1&008=1";
	echo("fetch $cat[cat] [$url] ");
	$data = file_get_contents($url);
	echo(strlen($data)."\r\n");
	$subcats = $db->query("SELECT  cat,rID,caption,parent 
			FROM _it_RUBRICS 
			WHERE parent = ?i", array(
				$cat ['rID'] ), 'assoc');
	foreach($subcats as $s)
	{
		$url = "http://$domain/catalog/$cat[cat]/$s[cat]/?refresh=1&008";
		echo("fetch $cat[cat]/$s[cat] ");
		$data = file_get_contents($url);
		echo(strlen($data)."\r\n");
	}
}


/**
 *
 * precache discount/subcatalog
 *
 */

echo("done precache subcats catalog " . ((time() - $timestart)));
$timestart = time();
foreach($catalog as $idx => $cat)
{
	echo("fetch $cat[cat] discount ");
	$url = "http://$domain/discount/$cat[cat]/?refresh=1&008";
	$data = file_get_contents($url);
	echo(strlen($data)."\r\n");
	$subcats = $db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i", array(
		$cat ['rID'] ), 'assoc');
	foreach($subcats as $s)
	{
		echo("fetch $cat[cat]/$s[cat] discount ");
		$url = "http://$domain/discount/$cat[cat]/$s[cat]/?refresh=1&008";
		$data = file_get_contents($url);
		echo(strlen($data)."\r\n");
	}
}

echo("done precache subcats discount " . ((time() - $timestart)));

?>
