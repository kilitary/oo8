<?include("templates/subs/header.php");?>

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
            <tr>
                <td>
                    <table cellspacing="0" width="100%" border="0" cellpadding="0" style="margin-top:5px">
                        <tr>
							<td width="240" style="padding-right:50px;min-width: 260px;">
								<?include("templates/subs/left-pane.php");?>
							</td>
                            <td width="100%">
                                <div class="main_content">

<div class="ritem2">
    <div class="ricon ri-"></div>
    <h1><a href="/discount/" title="Каталог акциий, скидкок, спрецпредложений и распродаж">Акции и скидки</a></h1>
    <div class="r-description">В разделе найдете:
        <em><strong>ВЫГОДНЫЕ предложения от продавцов товаров и услуг, сезонные и праздничные АКЦИИ, СКИДКИ, информацию о РАСПРОДАЖАХ.
Легко можно сэкономить средства, если Вы обратитесь к компаниям, у которых есть знак - дисконтная карта «Дисконт-008».  Такие компании с радостью предложат вам скидку. Достаточно просто при обращении к ним сослаться на то, что вы получили информацию на 008.ru или в Службе «008»
</strong></em></div>
</div>

<?
//print_r($_SESSION);

$n=1;
foreach($catalog as $idx => $cat)
{
	if(++$n==2)
	{
		$n=0;
		echo "<div style='clear:both;'></div>";
	}
	$i=0;
	echo "<div class='ritem'><div class='ricon ri-$cat[cat]'></div><h2><a href='/discount/$cat[cat]/'>$cat[caption]</a>  <span class='count_items'>($cat[discount_count])</span></h2>";
	foreach($cat['sub'] as $subcat)
	{
		echo "<a href='/discount/$cat[cat]/$subcat[cat]/'><span>$subcat[caption]</span></a>, ";
		if($i++>=7)
		{
			echo "<a href='/discount/$cat[cat]/'>...</a>";
			break;
		}
	}
	echo "</div>";
}

?>
<?include("templates/subs/footer.php");?>
