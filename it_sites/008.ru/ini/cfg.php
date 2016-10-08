<?php

//   ini_set('magic_quotes_gpc',0);
//   ini_set('magic_quotes_runtime',0);
//   ini_set('magic_quotes_sybase',0);

//  default values

define('MAIL_FROM_SITE','info@008.ru');   
define('MAIL_FROM_SITE_TO','nina@008.ru');
define('SITE_NAME_SHORT','008.ru');


define('PARSE_REFERENCE_BOOK','0');   

//define('GOOGLE_MAPS_API_KEY','key');   


$site["name_short"] = SITE_NAME_SHORT;
$site["description"] = "Информационная система Санкт-Петербурга 008 - бесплатно и круглосуточно информация о компаниях и их продукции, реклама на сайте и по телефону 008"; //$itsite;
$site["url"] = "http://".$_SERVER["HTTP_HOST"];
$site["site_domain"] = $itsite;


//Search Option

define('SEARCH_HIGHLIGHT_SEARCHTEXT','0');   
$search_tables["_it_CATEGORY"]["fields"] = array("caption","title","long_description");
$search_tables["_it_CATEGORY"]["default_cat"] = "main";  


/*


$search_tables["_it_DATABASE"]["fields"] = array("caption","short_description","long_description");
$search_tables["_it_DATABASE"]["default_cat"] = "database";

$search_tables["_it_PRODUCTS"]["fields"] = array("caption","pr_type");
$search_tables["_it_PRODUCTS"]["default_cat"] = "catalog";

$search_tables["_it_PRICE"]["fields"] = array("caption","long_description");
$search_tables["_it_PRICE"]["default_cat"] = "price";


//$search_tables["_it_OBJ_SITENEWS"]["fields"] = array("caption","short_description","long_description");
//$search_tables["_it_OBJ_SITENEWS"]["default_cat"] = "news";
*/



//define('SITE_NAME_SHORT','Разработка сайтов, WEB-design - iT24.RU');   
define('SITE_DEFAULT_SKIN','it24');   //vitu2
define('TABLE_PREFIX','it24_'); 

define('PRICE_TABLE','price_default');
define('USE_CACHE',"no");   //включает кэширование страниц сайта, если страница есть в кэше, не лезем в базу, берем из кэша!


define('CACHE_TIME',"86400"); //время хранения кэша в секнудах с момента создания (86400 = 1 сутки)



//local config -----------------------------------------------------------------------------
if($_ENV["COMPUTERNAME"]=="AGA") {
//ERRORS   
   define('_K_SHOW_ERRORS','yes');
   define('_K_DIE_ON_ERROR','yes');

if (!isset($old_error_reporting)) {
//    error_reporting(E_PARSE);
    error_reporting(E_ALL ^ E_NOTICE);   
    @ini_set('display_errors', '1');
}
//DEBUG
   define('_K_DEBUG','no'); 
   define('_SKIN_DEBUG','no');   
   define('_IT_MYSQL_DEBUG','no');
   define('_K_MYSQL_Q_SHOW','no');
   define('_K_MYSQL_Q_TIME','no');

   define('_K_TEMPLATE_DEBUG','no');
} else {
//remote config -----------------------------------------------------------------------------

//ERRORS   
   define('_K_SHOW_ERRORS','no');
   define('_K_DIE_ON_ERROR','yes');

if (!isset($old_error_reporting)) {
    error_reporting(E_PARSE);
//    error_reporting(E_ALL ^ E_NOTICE);   
    @ini_set('display_errors', '0');
}
//DEBUG
   define('_K_DEBUG','no'); 
   define('_SKIN_DEBUG','no');   
   define('_K_MYSQL_DEBUG','no');
   define('_K_MYSQL_Q_SHOW','no');
   define('_K_MYSQL_Q_TIME','no');

   define('_K_TEMPLATE_DEBUG','no');
}


//STATISTICS
   define("STATISTIC_ON","no");
   define("_SITE_ID",$_SERVER["HTTP_HOST"]);

//AutoRIZE
   define('_HOME_CAT','home');
   define('_ACCESS_ERROR','site_map');
   
  

?>