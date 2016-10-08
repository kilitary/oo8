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
<div class="ritem_text">
	<div class="ricon ri-"></div>
	<h1><a href="/catalog/" title="Каталог компаний, магазинов и их товаров и услуг в Санкт-Петербурге">Каталог компаний, товаров и услуг Санкт-Петербурга</a></h1>
	<div class="r-description">В разделе найдете:
	<em><strong>Компании и магазины Петербурга с телефонами и другой справочной информацией.</strong>
	Используя представленный каталог фирм, выберите необходимый раздел для просмотра списка компаний, их магазинов и филиалов или воспользуйтесь поисковой формой для поиска организаций и предприятий, их товаров и услуг. Набрав, например: <a href="/catalog/what/%D1%88%D1%83%D0%B1%D1%8B+%D0%B8%D0%B7+%D0%BD%D0%BE%D1%80%D0%BA%D0%B8/">шубы из норки</a>, <a href="/catalog/what/%D0%BA%D1%83%D1%80%D0%BE%D1%80%D1%82%D1%8B+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8/">курорты России</a>, <a href="/catalog/what/%D1%82%D1%80%D0%B5%D0%BD%D0%B0%D0%B6%D0%B5%D1%80%D1%8B/">тренажеры</a><!--noindex--> (клик по ссыле равносилен вводу фразы и нажатию кнопки "найти")<!--/noindex-->. Также обратите внимание на <a href="/discount/">каталог скидок и проводимых акций 2015г</a>.</em>	
	</div>
</div>

 


<?
$n=1;
foreach($catalog as $idx => $cat)
{
	if(++$n==2)
	{
		$n=0;
		echo "<div style='clear:both;'></div>";
	}
	echo "<div class='ritem'><div class='ricon ri-$cat[cat]'></div><h2><a href='/catalog/$cat[cat]/'>$cat[caption]</a> <span class='count_items'>($cat[objects_count])</span></h2>";
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

<?include("templates/subs/footer.php");?>
