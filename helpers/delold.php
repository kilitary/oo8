<?
declare(ticks=1);
// подключем конфиг
require_once(__DIR__.'/../lib/config.php');

// подключаем остальные 3rd утилиты/функции
require_once __DIR__.'/../lib/silex/vendor/autoload.php';
require_once(__DIR__.'/../lib/goDB/autoload.php');
require_once(__DIR__.'/../lib/mimemail.class.php');
require_once(__DIR__.'/../lib/functions.php');
require_once(__DIR__.'/../lib/securimage/securimage.php');

// подключаем наши классы
require_once(__DIR__.'/../lib/classes/core.php');
require_once(__DIR__.'/../lib/classes/stat.php');
require_once(__DIR__.'/../lib/classes/cache.php');
require_once(__DIR__.'/../lib/classes/objects.php');

// отладка
error_reporting($config['error_reporting']);

\go\DB\autoloadRegister();
$db = go\DB\DB::create($config['db'], 'mysql');
$db->query('SET NAMES utf8');
$app = new Silex\Application();
// режим отладки (см dev.log)

/* pcntl_signal_dispatch();
pcntl_signal(SIGHUP, function($signo){
   echo "1\n";
   sleep(2);
   echo "2\n";
 });


 */

$app->config = $config;

$app->db = $db;

$pics = glob("it_sites/008.ru/content/ilogos/10060/*.*");
foreach($pics as $pic)
{
	$name = pathinfo($pic);
	$name = $name['basename'];
	preg_match("#(\d+)\.(.*?)#si", $name, $m);
	echo $name." $m[1] ";
	$cid = $m[1];
	$company = Objects::GetCompanyById($cid);
	//print_r($company);
	if(empty($company['razm_type']) || $company['razm_type'] == 9 || $company['razm_type'] == 1)
	{
		unlink($pic);
		echo "REMOVED\r\n";
	}
	echo "$company[razm_type]\r\n";
}
?>