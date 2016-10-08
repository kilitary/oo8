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
    <h2 id="h1-rubric"><a href="/catalog/<?=$catalogname?>/" title=""><?=$catalog['caption']?></a>&nbsp;<span class="count_items">(<?=$catalog['objects_count']?>)</span></h2>
    
	<div id="nav-rubcrics" class="hidden drop-list" style="display: none;">
		<ul style="width:33%;float:left;">
			<li class="sel"><a href="/catalog/auto/"><span class="flet">А</span>вто, мото</a></li>
			<li><a href="/catalog/finances/"><span class="flet">Б</span>анки, финансы, страхование</a></li>
			<li><a href="/catalog/security/">Безопасность</a></li>
			<li><a href="/catalog/housetech/">Бытовая техника</a></li>
			<li><a href="/catalog/services/">Бытовые услуги</a></li>
			<li><a href="/catalog/cottage/"><span class="flet">В</span>се для дачи и сада</a></li>
			<li><a href="/catalog/housing/">Все для дома</a></li>
			<li><a href="/catalog/indistrict/">Выбор по району</a></li>
			<li><a href="/catalog/state/"><span class="flet">Г</span>осударственные органы</a></li>
			<li><a href="/catalog/children/"><span class="flet">Д</span>ети</a></li>
			<li><a href="/catalog/pets/"><span class="flet">Ж</span>ивотные</a></li>
			<li><a href="/catalog/communication/"><span class="flet">И</span>нтернет-услуги, связь</a></li>
			<li><a href="/catalog/books/"><span class="flet">К</span>ниги, канцтовары</a></li>
			<li><a href="/catalog/close/">Компании закрылись</a></li>
			<li><a href="/catalog/computers/">Компьютеры, оргтехника</a></li>
			<li><a href="/catalog/health/">Красота, здоровье</a></li>
			<li><a href="/catalog/shops/"><span class="flet">М</span>агазины</a></li>
		</ul>
		<ul style="width:33%;float:left;">
			<li><a href="/catalog/furniture/">Мебель</a></li>
			<li><a href="/catalog/medicine/">Медицина</a></li>
			<li><a href="/catalog/music/">Музыкальные инструменты</a></li>
			<li><a href="/catalog/realestate/"><span class="flet">Н</span>едвижимость</a></li>
			<li><a href="/catalog/equipment/"><span class="flet">О</span>борудование</a></li>
			<li><a href="/catalog/education/">Обучение</a></li>
			<li><a href="/catalog/society/">Общество, политика, религия</a></li>
			<li><a href="/catalog/clothing/">Одежда, обувь, принадлежности</a></li>
			<li><a href="/catalog/hunting/">Охота, рыболовство</a></li>
			<li><a href="/catalog/transportations/"><span class="flet">П</span>еревозки, логистика, склады</a></li>
			<li><a href="/catalog/salvaging/">Переработка, утилизация и приём вторсырья</a></li>
			<li><a href="/catalog/polygraphics/">Полиграфия, печати</a></li>
			<li><a href="/catalog/food/">Продукты, напитки, табак</a></li>
		</ul>
		<ul style="width:33%;float:left;">
			<li><a href="/catalog/job/"><span class="flet">Р</span>абота</a></li>
			<li><a href="/catalog/rest/">Развлечения, отдых, досуг</a></li>
			<li><a href="/catalog/miscellanea/">Разное</a></li>
			<li><a href="/catalog/advertising/">Реклама</a></li>
			<li><a href="/catalog/restaurants/">Рестораны, бары</a></li>
			<li><a href="/catalog/media/"><span class="flet">С</span>МИ</a></li>
			<li><a href="/catalog/sports/">Спорт</a></li>
			<li><a href="/catalog/renovation/">Строительно-ремонтные работы</a></li>
			<li><a href="/catalog/building/">Стройтовары, стройматериалы</a></li>
			<li><a href="/catalog/materials/">Сырье</a></li>
			<li><a href="/catalog/sewing/"><span class="flet">Т</span>кани, все для шитья</a></li>
			<li><a href="/catalog/travels/">Туризм, путешествия</a></li>
			<li><a href="/catalog/cleaning/"><span class="flet">Х</span>озтовары, бытовая химия</a></li>
			<li><a href="/catalog/flowers/"><span class="flet">Ц</span>веты, растения, семена</a></li>
			<li><a href="/catalog/researches/"><span class="flet">Э</span>кспертиза и исследования</a></li>
			<li><a href="/catalog/emergency/">Экстренная помощь</a></li>
			<li><a href="/catalog/electronics/">Электроника, фото, оптика</a></li>
			<li><a href="/catalog/jewels/"><span class="flet">Ю</span>велирные изделия, часы, подарки</a></li>
			<li><a href="/catalog/legal/">Юридические услуги</a></li>
		</ul>
	</div>
	
    <div class="sh">
	
	<div class="r-description">В разделе найдете: <em><strong><?=$description?></strong></em>
		</div>
       
		<?
		$cnt = count($subcats)/3;
		$i=0;
		?>
		<div style='float:left;width:30%'>
		<?foreach($subcats as $ssubcat):?>
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
			<div class="<?=($subcat == $ssubcat['cat'] ? 'selected':'')?>"> <a href='/catalog/<?=$catalogname?>/<?=$ssubcat['cat']?>/'><?=$ssubcat['caption']?></a><span class="count_items"> (<?=$ssubcat['objects_count']?>)</span>,</div>
		<?endforeach?>
		</div>
    </div>
</div>
<div class=clear></div>


<h1><?=$cat_title?></h1>

<?
if(!empty($advert['adv3_1']['url']))
{
	?>
	<?if(strstr($advert['adv3_1']['src'],".swf")):?>
	<div style='text-align:center'>
	<object type="application/x-shockwave-flash"  width="468" height="60"  
      data="<?=$advert['adv3_1']['src']?>" >
      <param name="link1" value="<?=$advert['adv3_1']['url']?>" />
   </object>
	</div>
   <?else:?>
	 <div class="b-color" style="" id="adv3_1">
		<a target="_blank" href='/count/adv3_1/?<?=$advert['adv3_1']['url']?>'><img width="468" height="60" border="0" src='<?=$advert['adv3_1']['src']?>'></a>
	</div>
	<?endif?>
	<?
}
?>



<?include("templates/subs/pagination_common.php");?>

<div style='clear:both'></div>

<?
$i=0;//($curpage)*$app->config['objects_per_page'];

?>	
<?foreach($firms as $idx=> $firm):?>
<?

$nfirms++;
if($nfirms>=6&&!empty($advert['adv3_2']['url']))
{
	?>
	<?if(strstr($advert['adv3_2']['src'],".swf")):?>
	<br/><br/>
	<div style='text-align:center'>
	<object type="application/x-shockwave-flash" width="468" height="60" 
      data="<?=$advert['adv3_2']['src']?>" >
      <param name="flashvars" value="link1=http://<?=$_SERVER['HTTP_HOST']?>/count/adv3_2/?<?=$advert['adv3_2']['url']?>">
      <param name="quality" value="high">
      <param name="allowscriptaccess" value="always">
   </object>
	</div>
   <?else:?>
	 <div class="b-color" style="" id="adv3_2">
		<a target="_blank" href='/count/adv3_2/?<?=$advert['adv3_2']['url']?>'><img width="468" height="60" border="0" src='<?=$advert['adv3_2']['src']?>'></a>
	</div>
	<?endif?>
	<?
	$nfirms=0;
} 
//print_r($firm)

?>
<div class=sresi>
	<div class="co">

		<?if($firm['logo'] && $firm['razm_type'] != 1 && $firm['razm_type'] != 9 ):?>
		<a href="/company/<?=$firm['cID']?>/"><img class="co_logo" align="right" style="margin:10px" border="0" src="<?=$firm['logo']?>" alt="<?=$firm['shortname']?>"></a>
		<?endif?>
		<h2><span class="cn1"><?=++$i?></span> <a title="Автосалон Aurore Auto" href="/company/<?=$firm['cID']?>/"><?=$firm['shortname']?>
		
		<?if(!empty($firm['co_names'])):?>
		 • 
		<?endif?>
		<?=str_replace("|", " • ", $firm['co_names'])?>
		
		</a>
		</h2>
		<div class="copages">
			<a href="/company/<?=$firm['cID']?>/contacts/">Контакты</a>
			
			<?if($firm['articles']):?>
			<a href="/company/<?=$firm['cID']?>/articles/">Статьи</a>
			<?endif?>
			
			<?if($firm['conews']):?>
			<a href="/company/<?=$firm['cID']?>/conews/">Новости компании</a>
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
			
			<?if($firm['attribs'][5]&& ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)):?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['attribs'][5][0]['value']?>">Сайт компании</a>
			<?endif?>
			
			<?if($firm['website'] && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)):?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['website']?>">Сайт компании</a>
			<?endif?>
			
		</div>

		<strong><?=$firm['fullname']?></strong> - <?=$firm['cinfo']?>
		
		<?if($firm['razm_type']==4 ):?>
		<div class="photos_line">
			<?
			$npic=0;
			?>
			<?foreach($firm['pics'] as $pic):?>
			<?
			if($npic++>=6)
				break;
			?>
			<a href="/company/<?=$firm['cID']?>/"><img class=flimg height=50 src="/content/coimgs/<?=$firm['cID']?>/<?=$pic?>_t.jpg"></a>
			<?endforeach?>
		</div>
		<?endif?>
		
		<?if($firm['discount008']):?>
		<div class="corner c-discount"?>
			<div class="discount008">
				<img align="left" width="93" title="<?=$firm['discount008']?>" alt="дисконтная карта - <?=$firm['discount008']?>" height="61" border="0" src="/content/discount/card<?=$firm['cID']?>.png">
				<h4 style="margin-top:0px">Действующие скидки:</h4><em style="color:red; font-weight:bold"><?=$firm['discount008']?></em>
			</div>
		</div>
		<?endif?>

		<div>
			
			<?if(!empty($firm['addr']['street'])):?>
			Адрес: <strong><?=$firm['addr']['region']?>, <?=$firm['addr']['district']?>, <?=$firm['addr']['street']?>, <?=$firm['addr']['dom']?></strong> 
			<?endif?>

		
			<ul class="co_addr">
				<?if( !empty($firm['addr']['street'])):?>
				<li>
				
					<?if( $firm['razm_type'] == 4 || $firm['razm_type'] == 3):?>
						<?if(!empty($firm['attribs'][1][0]['value']) && !empty($firm['addr']['street'])):?>
						<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">  
							 <?=Core::normalize_tel($firm['attribs'][1][0]['value'])?>&nbsp; 
						<?endif?>
					<?endif?>
					
					<?if(!empty($firm['addr']['street']) ):?>
						<a style="padding-right:30px" href="/company/<?=$firm['cID']?>/">
							<?=Core::join_strings($firm['addr']['region'].", ".$firm['addr']['district']." район, ".$firm['addr']['city']." , ".$firm['addr']['street'].", ".$firm['addr']['dom'], ",")?>
						</a>
					<?endif?>
				</li>
				<?endif?>
				
				<? 
				// limit addr
				
				//$firm['offices'][] = $firm;
				//mlog("$firm[razm_type]");
			//	mlog("$firm[cID] $firm[razm_type]");
				if($firm['razm_type'] != 3 && $firm['razm_type'] != 4 && $firm['razm_type'] != 5 && $firm['razm_type'] != 1)
					$firm['offices'] = array();//$firm['offices'] = array_splice($firm['offices'], 0, 1);
				else
					$firm['offices'] = array_splice($firm['offices'], 0, 10);
				//if(!empty($firm['addr']['street']) && !empty($firm['attribs'][1][0]['value']))
				//	$firm['offices'] = array();
				?>
				<?foreach($firm['offices'] as $office):?>
				
					<?if((!empty($office['attribs'][1][0]['value']) && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4) && !empty($office['addr']['district']))||(!empty($office['attribs'][1][0]['value']) && !empty($office['addr']['district']))):?>
					<li>
					
						<?if(!empty($office['attribs'][1][0]['value']) && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4) && !empty($office['addr']['district'])):?>
						<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">  <?=Core::normalize_tel($office['attribs'][1][0]['value'])?>&nbsp; 
						<?endif?>
						
						<?if(!empty($office['attribs'][1][0]['value']) && !empty($office['addr']['district'])):?>
						<a style="padding-right:30px" href="/company/<?=$office['cID']?>/">
						<?=Core::join_strings($office['addr']['region'].", ".$office['addr']['district']." район, ".$office['addr']['city'].", ".$office['addr']['street'].", ".$office['addr']['dom'], ",")?>
						</a>
						<?endif?>
					
					</li>
					<?endif?>
					
				
				
				<?endforeach?>
			</ul>
		</div>


	</div>
</div>

<?endforeach?>

<?include("templates/subs/pagination_common.php");?>

<div class='clear'>
</div>
<div id="more_rubrics"><a href="/catalog/">Весь каталог</a>, <a href="/discount/">Все скидки</a></div>
<?include("templates/subs/footer.php");?>
