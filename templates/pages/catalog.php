<?php include "templates/subs/header.php";?>
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
            <tr>
                <td>
                    <table cellspacing="0" width="100%" border="0" cellpadding="0" style="margin-top:5px">
                        <tr>
							<td width="240" style="padding-right:50px;min-width: 260px;">
								<?php include "templates/subs/left-pane.php";?>
							</td>
                            <td width="100%">
                                <div class="main_content">


<div class="updown">
<div class="ricon ri-<?=$catalogname;?>"></div>

<h1><?=$cat_title;?></h1>
<?php if ($description): ?>
       <div class="r-description">В разделе найдете: <em><strong><?=$description;?></strong></em>
		</div>
<?php endif;?>
    <h2 id="h1-rubric"><a href="/catalog/<?=$catalogname;?>/" title=""><?=$catalog[0]['caption'];?></a>&nbsp;<span class="count_items">(<?=$catalog[0]['objects_count'];?>)</span></h2>

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

		<?php

$cnt = count($subcats) / 3;
$i = 0;
?>
		<div style='float:left;width:30%'>
		<?php foreach ($subcats as $subcat): ?>
		<?php

if ($i++ >= $cnt)
{
    $i = 0;
    ?>
			</div>
			<div style='float:left;width:30%'>
			<?php

}
?>
			<div > <a href='/catalog/<?=$catalogname;?>/<?=$subcat['cat'];?>/'><?=$subcat['caption'];?></a> <span class="count_items"> (<?=$subcat['objects_count'];?>)</span>,</div>
		<?php endforeach;?>
		</div>
    </div>
</div>

<div class=clear></div>



<?php

if (!empty($advert['adv3_1']['url']))
{
    ?>
	<?php if (strstr($advert['adv3_1']['src'], ".swf")): ?>
	<br/><br/>
	<div style='text-align:center' class="b-color" id="adv3_1">
	<object type="application/x-shockwave-flash" width="468" height="60"
      data="<?=$advert['adv3_1']['src'];?>" >
      <param name="flashvars" value="link1=http://<?=$_SERVER['HTTP_HOST'];?>/count/adv3_1/?<?=$advert['adv3_1']['url'];?>">
      <param name="allowscriptaccess" value="always">
      <param name="quality" value="high">
   </object>
	</div>
   <?php else: ?>
	 <div class="b-color" style="" id="adv3_1">
		<a target="_blank" href='/count/adv3_1/?<?=$advert['adv3_1']['url'];?>'><img width="468" height="60" border="0" src='<?=$advert['adv3_1']['src'];?>'></a>
	</div>
	<?php endif;?>
	<?php

}
else if(!isAdminIp())
{
	?>
	<!-- Яндекс.Директ -->
<div id="yandex_ad4"></div>
<script type="text/javascript">
(function(w, d, n, s, t) {
    w[n] = w[n] || [];
    w[n].push(function() {
        Ya.Direct.insertInto(154593, "yandex_ad4", {
            ad_format: "direct",
            font_size: 1,
            type: "horizontal",
            limit: 1,
            title_font_size: 3,
            links_underline: true,
            site_bg_color: "FFFFFF",
            header_bg_color: "FEEAC7",
            title_color: "0000CC",
            url_color: "006600",
            text_color: "000000",
            hover_color: "0066FF",
            sitelinks_color: "0000CC",
            favicon: true,
            no_sitelinks: false
        });
    });
    t = d.getElementsByTagName("script")[0];
    s = d.createElement("script");
    s.src = "//an.yandex.ru/system/context.js";
    s.type = "text/javascript";
    s.async = true;
    t.parentNode.insertBefore(s, t);
})(window, document, "yandex_context_callbacks");
</script>
	<?
}
else if(isAdminIp())
{
	?>
	<div style='border:1px solid red;width:100px;display:inline'>
	<img width=800 height=100 src=/assets/images/bannbg.jpg>
	</div>

	<?
}
?>

<hr>


<div style='clear:both'></div>
<?php include "templates/subs/pagination_common.php";?>
<?php

$i = 0; //($curpage)*$app->config['objects_per_page'];
?>
<?php foreach ($firms as $idx => $firm): ?>
<?php

$nfirms++;
//echo $nfirms;
if ($nfirms == 6 && empty($advert['adv3_2']['url']))
{
	if(isAdminIp())
	{
		?>
			<div style='border:1px solid red;width:100px;display:inline'>
	<img width=800 height=100 src=/assets/images/bannbg.jpg>
	</div>
		<?
	}
	else
	{
    ?>
	<!-- Яндекс.Директ -->
<div id="yandex_ad2"></div>
<script type="text/javascript">
(function(w, d, n, s, t) {
    w[n] = w[n] || [];
    w[n].push(function() {
        Ya.Direct.insertInto(154593, "yandex_ad2", {
            ad_format: "direct",
            font_size: 1,
            type: "horizontal",
            limit: 1,
            title_font_size: 3,
            links_underline: true,
            site_bg_color: "FFFFFF",
            header_bg_color: "FEEAC7",
            title_color: "0000CC",
            url_color: "006600",
            text_color: "000000",
            hover_color: "0066FF",
            sitelinks_color: "0000CC",
            favicon: true,
            no_sitelinks: false
        });
    });
    t = d.getElementsByTagName("script")[0];
    s = d.createElement("script");
    s.src = "//an.yandex.ru/system/context.js";
    s.type = "text/javascript";
    s.async = true;
    t.parentNode.insertBefore(s, t);
})(window, document, "yandex_context_callbacks");
</script>
	<?php
	}
}

if ($nfirms >= 6 && !empty($advert['adv3_2']['url']))
{
    ?>

	<?php if (strstr($advert['adv3_2']['src'], ".swf")): ?>
	<br/><br/>
	<div style='text-align:center' class="b-color" id="adv3_2">
	<object type="application/x-shockwave-flash" width="468" height="60"
      data="<?=$advert['adv3_2']['src'];?>" >
      <param name="flashvars" value="link1=http://<?=$_SERVER['HTTP_HOST'];?>/count/adv3_2/?<?=$advert['adv3_2']['url'];?>">
      <param name="allowscriptaccess" value="always">
      <param name="quality" value="high">
   </object>
	</div>
   <?php else: ?>
	 <div class="b-color" style="" id="adv3_2">
		<a target="_blank" href='/count/adv3_2/?<?=$advert['adv3_2']['url'];?>'><img width="468" height="60" border="0" src='<?=$advert['adv3_2']['src'];?>'></a>
	</div>
	<?php endif;?>



	<?php

    $nfirms = 0;
}

; //print_r($firm)

?>

<div class=sresi>
	<div class="co">

		<?php if ($firm['logo'] && $firm['razm_type'] != 1 && $firm['razm_type'] != 9): ?>
			<a href="/company/<?=$firm['cID'];?>/"><img class="co_logo" align="right" style="margin:10px" border="0" src="<?=$firm['logo'];?>" alt="<?=$firm['shortname'];?>"></a>
		<?php endif;?>

		<h2><span class="cn1"><?=++$i;?></span> <a title="<?=$firm['fullname'];?>" href="/company/<?=$firm['cID'];?>/"><?=$firm['shortname'];?>

		<?php if (!empty($firm['co_names'])): ?>
		 •
		<?php endif;?>
		<?=str_replace("|", " • ", $firm['co_names']);?>


		</a>
		</h2>
		<div class="copages">
			<a href="/company/<?=$firm['cID'];?>/contacts/">Контакты</a>

			<?php if ($firm['articles']): ?>
			<a href="/company/<?=$firm['cID'];?>/articles/">Статьи</a>
			<?php endif;?>

			<?php if ($firm['conews']): ?>
			<a href="/company/<?=$firm['cID'];?>/conews/">Новости компании</a>
			<?php endif;?>

			<?php if ($firm['discount']): ?>
			<a href="/company/<?=$firm['cID'];?>/discount/">Акции и скидки</a>
			<?php endif;?>


			<?php if ($firm['vacancy']): ?>
			<a href="/company/<?=$firm['cID'];?>/vacancy/">Вакансии</a>
			<?php endif;?>

			<?php if ($firm['pricelist']): ?>
			<a href="/company/<?=$firm['cID'];?>/getpricelist/">Скачать прайс лист</a>
			<?php endif;?>

			<?php if ($firm['attribs'][5] && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)): ?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['attribs'][5][0]['value'];?>">Сайт компании</a>
			<?php endif;?>

			<?php if ($firm['website'] && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4)): ?>
			<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$firm['website'];?>">Сайт компании</a>
			<?php endif;?>

		</div>

		<strong><?=$firm['fullname'];?></strong> - <?=$firm['cinfo'];?>

		<?php if ($firm['razm_type'] == 4): ?>
		<div class="photos_line">
			<?php

$npic = 0;
?>
			<?php foreach ($firm['pics'] as $pic): ?>
			<?php

if ($npic++ >= 6)
{
    break;
}

?>
			<a href="/company/<?=$firm['cID'];?>/"><img class=flimg height=50 src="/content/coimgs/<?=$firm['cID'];?>/<?=$pic;?>_t.jpg"></a>
			<?php endforeach;?>

		</div>
		<?php endif;?>

		<?php if ($firm['discount008']): ?>
		<div class="corner c-discount"?>
			<div class="discount008">
				<img align="left" width="93" title="<?=$firm['discount008'];?>" alt="дисконтная карта - <?=$firm['discount008'];?>" height="61" border="0" src="/content/discount/card<?=$firm['cID'];?>.png">
				<h4 style="margin-top:0px">Действующие скидки:</h4><em style="color:red; font-weight:bold"><?=$firm['discount008'];?></em>
			</div>
		</div>
		<?php endif;?>



		<div>

			<?php if (!empty($firm['addr']['street'])): ?>
			Адрес: <strong> <?=Core::join_strings($firm['addr']['region'] . ", " . $firm['addr']['area'] . " , " . preg_replace("#(\(.*\))#smi", "", $firm['addr']['city']) . ", " . $firm['addr']['district'] . ", " . $firm['addr']['street'] . ", " . $firm['addr']['dom'], ",");?></strong>
				<?php if (!empty($firm['addr']['info'])): ?>
				(<?=$firm['addr']['info'];?>)
				<?php endif;?>
			<?php endif;?>

			<ul class="co_addr">


				<?php if (!empty($firm['addr']['region'])): ?>
				<li>
					<?php if (($firm['razm_type'] == 4 || $firm['razm_type'] == 3) && !empty($firm['attribs'][1][0]['value'])): ?>
						<?php if (!empty($firm['attribs'][1]) && !empty($firm['addr']['street'])): ?>
						<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">
							 <?=Core::normalize_tel($firm['attribs'][1][0]['value']);?>&nbsp;
						<?php endif;?>
					<?php endif;?>

					<?php if (!empty($firm['addr']['street'])): ?>
						<a style="padding-right:30px" href="/company/<?=$firm['cID'];?>/">
							<?=Core::join_strings($firm['addr']['region'] . ", " . $firm['addr']['district'] . " район, " . $firm['addr']['city'] . " , " . $firm['addr']['street'] . ", " . $firm['addr']['dom'], ",");?>
						</a>
					<?php endif;?>
				</li>
				<?php endif;?>

				<?php

// limit addr

//$firm['offices'][] = $firm;
if ($firm['razm_type'] != 3 && $firm['razm_type'] != 4 && $firm['razm_type'] != 5 && $firm['razm_type'] != 1)
{
    $firm['offices'] = array();
}
//$firm['offices'] = array_splice($firm['offices'], 0, 1);
else
{
        $firm['offices'] = array_splice($firm['offices'], 0, 10);
    }
    ; //if(!empty($firm['addr']['street']) && !empty($firm['attribs'][1][0]['value'])); //    $firm['offices'] = array();
    ?>
													<?php foreach ($firm['offices'] as $office): ?>


														<?php if ((!empty($office['attribs'][1][0]['value']) && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4) && !empty($office['addr']['district'])) || (!empty($office['attribs'][1][0]['value']) && !empty($office['addr']['district']))): ?>
														<li>

															<?php if (!empty($office['attribs'][1][0]['value']) && ($firm['razm_type'] == 3 || $firm['razm_type'] == 4) && !empty($office['addr']['district'])): ?>
															<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">  <?=Core::normalize_tel($office['attribs'][1][0]['value']);?>&nbsp;
															<?php endif;?>

						<?php if (!empty($office['attribs'][1][0]['value']) && !empty($office['addr']['district'])): ?>
						<a style="padding-right:30px" href="/company/<?=$office['cID'];?>/">
						<?=Core::join_strings($office['addr']['region'] . ", " . $office['addr']['district'] . " район, " . $office['addr']['city'] . ", " . $office['addr']['street'] . ", " . $office['addr']['dom'], ",");?>
						</a>
						<?php endif;?>

					</li>
					<?php endif;?>



				<?php endforeach;?>


			</ul>
		</div>


	</div>
</div>

<?php endforeach;?>

<?php include "templates/subs/pagination_common.php";?>

<div class='clear'>

</div>
<div id="more_rubrics"><a href="/catalog/">Весь каталог</a>, <a href="/discount/">Все скидки</a></div>
<?php include "templates/subs/footer.php";?>
