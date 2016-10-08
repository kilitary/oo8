
		  

<?
$n=1;
foreach($catalog as $idx => $cat)
{
	if(++$n==2)
	{
		$n=0;
		echo "<div style='clear:both;'></div>";
	}
	echo "<div class='ritem'><div class='ricon ri-$cat[cat]'></div><h2><a href='/catalog/$cat[cat]/'>$cat[caption]</a> </h2>";
	$i=0;
	foreach($cat['sub'] as $subcat)
	{
		if($i++>=7)
		{
			echo "<a href='/catalog/$cat[cat]/'>...</a>";
			break;
		}
		echo "<a href='/catalog/$cat[cat]/$subcat[cat]/'><span>$subcat[caption]</span></a>, ";
	}
	echo "</div>";
}
?>