<?
mysql_connect('localhost','008','oo8oo8');
mysql_select_db('oo8_main');

$metros = file("metros.txt");
foreach($metros as $m)
{
	if($m{0} == ';')
		continue;
	preg_match("#(.*?)\s*?(\w{2})#Usi", $m, $mm);
	echo "$mm[1] - $mm[2]<br/>";
	$metro = trim($mm[1]);
	mysql_query("UPDATE _it_SPR_METRO SET class = '$mm[2]'
		WHERE caption = '$metro'");
}
?>