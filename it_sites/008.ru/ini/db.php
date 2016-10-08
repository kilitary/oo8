<?php

if($_ENV["COMPUTERNAME"]=="AGA") {
  $db_info["main"]  = array("host"=>"localhost","name"=>"tks_main","user"=>"root","pass"=>"");
  $db_info["spr"]   = array("host"=>"localhost","name"=>"tks_spr","user"=>"root","pass"=>"");
  $db_info["stat"]  = array("host"=>"localhost","name"=>"tks_stat","user"=>"root","pass"=>""); 
  $db_info["cache"]  = array("host"=>"localhost","name"=>"tks_cache","user"=>"root","pass"=>""); 
} else {
  
//  if($_SERVER["HTTP_HOST"]=="demo.008.ru") {
//    $db_info["main"]  = array("host"=>"localhost","name"=>"tks_demo","user"=>"tks_tks","pass"=>"zSmyGzPfAll");
  //} else
   $db_info["main"]  = array("host"=>"localhost","name"=>"tks_main","user"=>"tks_tks","pass"=>"zSmyGzPfAll");
  
  $db_info["spr"]   = array("host"=>"localhost","name"=>"tks_spr","user"=>"tks_spr","pass"=>"LjGNqCVe");
  $db_info["stat"]  = array("host"=>"localhost","name"=>"tks_stat","user"=>"tks_tks","pass"=>"zSmyGzPfAll");
  $db_info["cache"]  = array("host"=>"localhost","name"=>"tks_cache","user"=>"tks_tks","pass"=>"zSmyGzPfAll");
}

$db2 = new DbMySql();
$dbspr = new DbMySql();
$dbstat = new DbMySql();
$dbcache = new DbMySql();

//connect
$db->connect($db_info["main"]["host"],$db_info["main"]["user"],$db_info["main"]["pass"],$db_info["main"]["name"]);
$db2->connect($db_info["main"]["host"],$db_info["main"]["user"],$db_info["main"]["pass"],$db_info["main"]["name"]);
$dbt->connect($db_info["main"]["host"],$db_info["main"]["user"],$db_info["main"]["pass"],$db_info["main"]["name"]);
//$dbspr->connect($db_info["spr"]["host"],$db_info["spr"]["user"],$db_info["spr"]["pass"],$db_info["spr"]["name"],true); //new link!!!
$dbstat->connect($db_info["stat"]["host"],$db_info["stat"]["user"],$db_info["stat"]["pass"],$db_info["stat"]["name"],true); //new link!!!
$dbcache->connect($db_info["cache"]["host"],$db_info["cache"]["user"],$db_info["cache"]["pass"],$db_info["cache"]["name"],true); //new link!!!
?>
