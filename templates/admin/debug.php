<?include("header.php")?>
<div style='clear:both'>
<pre>

<?
print_r(memory_get_usage (true));

$data = elasticsearch::getCatalogCompanys(2, 0, 100, array('info'=>true));
foreach($data as $rec)
{
	echo $rec['_source']['shortname']." ".$rec['_source']['razm_prio']."<br/>";
}
print_r($data);

//print_r(opcache_get_configuration());
//print_r(opcache_get_status(true));
?>




</pre>
<?include("footer.php")?>