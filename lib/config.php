<?
// общее
if(!empty($_SERVER['HTTP_HOST']))
  $config['domain'] = $_SERVER['HTTP_HOST'];
else 
  $config['domain']="new.008.ru";
$config['enable_app_debug'] = false; // выводит в dev.log инфу роутов
$config['enable_db_debug'] = false; // выводит все запросы сверху страницы
$config['enable_html_debug'] = false; // выводит в html
$config['objects_per_page'] = 10; // компаний на странице
$config['error_reporting'] = E_ALL^E_NOTICE^E_WARNING;
$config['log_file']='.dev.log';
$config['cookie_name']="008RU";
$config['date_timezone'] = 'Europe/Moscow';
$config['locale']='ru_RU.UTF-8';
$config['enable_db_slow_log'] = true;
$config['db_slow_log_duration'] = 0.8;
$config['bot_sign_cookie'] = "e2f54a8c";
$config['page_count_visible'] = 15;
$config['vars_saver_per'] = 1115; // q for saving stat::*
$config['online_cleanup_per'] = 3;//  online cleanup iter
$config['online_check_time']=120; // secs
$config['dev_mode'] = true;
$config['site_disabled'] = false; //
$config['compact_page'] = false;
$config['feedback_email'] = "Administrator@008.ru";//"sergey.efimov@evodesign.ru"
//$config['feedback_email'] = "sergey.efimov@evodesign.ru";
$config['search_max_body_size'] = 500;
// кеш (общее)
$config['enable_cache'] = true; // use memcached/file caching
$config['enable_cache_compression'] = false; // use gzcompress/gzuncompress
$config['cache_gz_compression_level'] = 1; // 1-9
// memcached
$config['memcached_enable']=true; // enable_cache должен быть true
$config['memcached_host']="localhost";
$config['memcached_port']=11211;
$config['memcached_debug'] = false; // выводит все get/set запросы в dev.log
// cache times
$config['cache_time_catalog'] = 0; // secs для содержимых каталога
$config['cache_time_company'] = 0; // secs для информации компаний
$config['cache_time_search'] = 0; // secs для поисковых запросов

// adv
$config['advs'] = array('adv1_1','adv1_2','adv1_3','adv1_4',
  'adv1_5','adv1_6', 'adv2_1','adv2_2','adv2_3',
  'adv3_1','adv3_2','adv4_1','adv4_2');
// дб
$config['db'] = array(
  'host'     => 'localhost',
  'username' => '008',
  'password' => 'oo8oo8',
  'dbname'   => 'oo8_main',
  '_lazy'    => true,
  'charset'  => 'utf8',
  '_debug'   => $config['enable_db_debug'], 
  '_prefix'  => 'evo_',
  );
  ?> 