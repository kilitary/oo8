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

<div class="updown">
<div class="ricon ri-<?=$catalogname?>"></div>
    <h2 id="h1-rubric"><a href="/discount/<?=$catalogname?>/" title=""><?=$catalog['caption']?></a>&nbsp;<span class="count_items"><?=$catalog['discount_count']?></span></h2>
	
	<div id="nav-rubcrics" class="hidden drop-list" style="display: none;">
		<ul style="width:33%;float:left;">
			<li class="sel"><a href="/discount/auto/"><span class="flet">А</span>вто, мото</a></li>
			<li><a href="/discount/finances/"><span class="flet">Б</span>анки, финансы, страхование</a></li>
			<li><a href="/discount/security/">Безопасность</a></li>
			<li><a href="/discount/housetech/">Бытовая техника</a></li>
			<li><a href="/discount/services/">Бытовые услуги</a></li>
			<li><a href="/discount/cottage/"><span class="flet">В</span>се для дачи и сада</a></li>
			<li><a href="/discount/housing/">Все для дома</a></li>
			<li><a href="/discount/indistrict/">Выбор по району</a></li>
			<li><a href="/discount/state/"><span class="flet">Г</span>осударственные органы</a></li>
			<li><a href="/discount/children/"><span class="flet">Д</span>ети</a></li>
			<li><a href="/discount/pets/"><span class="flet">Ж</span>ивотные</a></li>
			<li><a href="/discount/communication/"><span class="flet">И</span>нтернет-услуги, связь</a></li>
			<li><a href="/discount/books/"><span class="flet">К</span>ниги, канцтовары</a></li>
			<li><a href="/discount/close/">Компании закрылись</a></li>
			<li><a href="/discount/computers/">Компьютеры, оргтехника</a></li>
			<li><a href="/discount/health/">Красота, здоровье</a></li>
			<li><a href="/discount/shops/"><span class="flet">М</span>агазины</a></li>
		</ul>
		<ul style="width:33%;float:left;">
			<li><a href="/discount/furniture/">Мебель</a></li>
			<li><a href="/discount/medicine/">Медицина</a></li>
			<li><a href="/discount/music/">Музыкальные инструменты</a></li>
			<li><a href="/discount/realestate/"><span class="flet">Н</span>едвижимость</a></li>
			<li><a href="/discount/equipment/"><span class="flet">О</span>борудование</a></li>
			<li><a href="/discount/education/">Обучение</a></li>
			<li><a href="/discount/society/">Общество, политика, религия</a></li>
			<li><a href="/discount/clothing/">Одежда, обувь, принадлежности</a></li>
			<li><a href="/discount/hunting/">Охота, рыболовство</a></li>
			<li><a href="/discount/transportations/"><span class="flet">П</span>еревозки, логистика, склады</a></li>
			<li><a href="/discount/salvaging/">Переработка, утилизация и приём вторсырья</a></li>
			<li><a href="/discount/polygraphics/">Полиграфия, печати</a></li>
			<li><a href="/discount/food/">Продукты, напитки, табак</a></li>
		</ul>
		<ul style="width:33%;float:left;">
			<li><a href="/discount/job/"><span class="flet">Р</span>абота</a></li>
			<li><a href="/discount/rest/">Развлечения, отдых, досуг</a></li>
			<li><a href="/discount/miscellanea/">Разное</a></li>
			<li><a href="/discount/advertising/">Реклама</a></li>
			<li><a href="/discount/restaurants/">Рестораны, бары</a></li>
			<li><a href="/discount/media/"><span class="flet">С</span>МИ</a></li>
			<li><a href="/discount/sports/">Спорт</a></li>
			<li><a href="/discount/renovation/">Строительно-ремонтные работы</a></li>
			<li><a href="/discount/building/">Стройтовары, стройматериалы</a></li>
			<li><a href="/discount/materials/">Сырье</a></li>
			<li><a href="/discount/sewing/"><span class="flet">Т</span>кани, все для шитья</a></li>
			<li><a href="/discount/travels/">Туризм, путешествия</a></li>
			<li><a href="/discount/cleaning/"><span class="flet">Х</span>озтовары, бытовая химия</a></li>
			<li><a href="/discount/flowers/"><span class="flet">Ц</span>веты, растения, семена</a></li>
			<li><a href="/discount/researches/"><span class="flet">Э</span>кспертиза и исследования</a></li>
			<li><a href="/discount/emergency/">Экстренная помощь</a></li>
			<li><a href="/discount/electronics/">Электроника, фото, оптика</a></li>
			<li><a href="/discount/jewels/"><span class="flet">Ю</span>велирные изделия, часы, подарки</a></li>
			<li><a href="/discount/legal/">Юридические услуги</a></li>
		</ul>
	</div>
    
    <div class="sh">
       <div class="r-description">В разделе найдете: <em><strong><?=$catdescription?></strong></em>
		</div>
		<?
		$cnt = count($subcats)/3;
		$i=0;
		?>
		<div style='float:left;width:30%'>
		<?foreach($subcats as $subcat):?>
		<?
		if($i++>=$cnt)
		{
			$i=0;
			?>
			</div>
			<div style='float:left;width:30%'>
			<?
		}
		?>
			
			<div > <a href='/discount/<?=$catalogname?>/<?=$subcat['cat']?>/'><?=$subcat['caption']?></a><span class="count_items">(<?=$subcat['discount_count']?>),</span> </div>
			
		<?endforeach?>
		</div>
    </div>
</div>
<div class=clear></div>

<h1><?=$catsecond['caption']?></h1>


<?if($npages>1):?>


<?include("templates/subs/pagination_common.php");?>
<?endif?>


<h1><?=$cat_title?></h1>
<hr>
<!--{adv_0}-->
<div style='clear:both'></div>

<?
$i=$curpage*$app->config['objects_per_page'];
?>	

<?foreach($firms as $idx=> $firm):?>
<?

if(empty($firm['cID']))
	continue;
//print_r($firm['conews']);

?>
<div class=sresi>
	<div class="co">

		<?if($firm['logo'] && $firm['razm_type'] != 1 && $firm['razm_type'] != 9):?>
			<a href="/company/<?=$firm['cID']?>/"><img class="co_logo" align="right" style="margin:10px" border="0" src="<?=$firm['logo']?>" alt="<?=$firm['shortname']?>"></a> 
		<?endif?>
		
		
		<h2><span class="cn1"><?=++$i?></span> <a title="Автосалон Aurore Auto" href="/company/<?=$firm['cID']?>/"><?=$firm['shortname']?>
		
		
		<?if(!empty($firm['co_names'])):?>
		 • 
		<?endif?>
		<?=str_replace("|", " • ", $firm['co_names'])?>
		
		</a></h2>
		
		<div class="copages">
		
			<a href="/company/<?=$firm['cID']?>/contacts/">Контакты</a>
		
			<?if($firm['articles']):?>
			<a href="/company/<?=$firm['cID']?>/articles/">Статьи</a>
			<?endif?>
			
			<?if($firm['conews']):?>
			<a href="/company/<?=$firm['cID']?>/conews/">Новости</a>
			<?endif?>
			
			<?if($firm['discount']):?>
			<a href="/company/<?=$firm['cID']?>/discount/">Акции и скидки</a>
			<?endif?>
			
			
			<?if($firm['vacancy']):?>
			<a href="/company/<?=$firm['cID']?>/vacancy/">Вакансии</a>
			<?endif?>
			
			<?if($firm['pricelist']):?>
			<a href="/company/<?=$firm['cID']?>/getpricelist/">Скачать прайс лист</a>
			<?endif?>
			<?
			//	 print_r($firm);
			?>
			<?if($firm['website'] && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)):?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['website']?>">Сайт компании</a>
			<?endif?>
			
			<?if($firm['attribs'][5]&& ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)):?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['attribs'][5][0]['value']?>">Сайт компании</a>
			<?endif?>
			
		</div>

		<strong><?=$firm['fullname']?></strong> - <?=$firm['cinfo']?>
		
		<?if($firm['discount008']):?>
		<div class="corner c-discount"?>
			<div class="discount008">
				<img align="left" width="93" title="<?=$firm['discount008']?>" alt="дисконтная карта - <?=$firm['discount008']?>" height="61" border="0" src="/content/discount/card<?=$firm['cID']?>.png">
				<h4 style="margin-top:0px">Действующие скидки:</h4><em style="color:red; font-weight:bold"><?=$firm['discount008']?></em>
			</div>
		</div>
		<?endif?>
		
		<?if($firm['razm_type'] == 4):?>
		<div class="photos_line">
			<?
			$npic=0;
			?>
			<?foreach($firm['pics'] as $pic):?>
			<?
			if($npic++>=6)
				break;
			?>
			<a href="/company/<?=$firm['cID']?>/">
				<img class=flimg height=50 src="/it_sites/008.ru/content/coimgs/<?=$firm['cID']?>/<?=$pic?>_t.jpg">
			</a>
			<?endforeach?>
		</div>
		<?endif?>

		
		
		
		
		<div class="costuffs">
			<ul>
			<?foreach($firm['discount'] as $disc):?>
			<li><a href='/company/<?=$firm['cID']?>/discount/#<?=$disc['sID']?>'><?=$disc['caption']?></a></li>
			<?endforeach?>
			</ul>
		</div>
		

	</div>
</div>

<?endforeach?>


<?include("templates/subs/pagination_common.php");?>


<h1><?=$cat_title?></h1>
<hr>
<!--{adv_0}-->
<div style='clear:both'></div>

<?
$i=$curpage*$app->config['objects_per_page'];
?>	

<?include("templates/subs/footer.php");?>
