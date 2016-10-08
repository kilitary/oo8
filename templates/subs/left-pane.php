<?php if ($adminInfo && $_SESSION['user']): ?>
		<div id=adminInfo style='width:240px;background-color:#F0B1BA'>
			<a href='javascript:void(0);' onclick="$('#contentadmin').toggle('drop');">свернуть/развернуть</a>
			<div id=contentadmin style='display:none'>
				Тариф: <?=$adminInfo['tarif'];?><br/>
				Коррект: <?=date('d.m.Y', strtotime($adminInfo['correct']));?><br/>
				<?php

$dss = explode(' - ', $adminInfo['dogovor']);
$ds = date('d.m.Y', strtotime($dss[0]));
$ds1 = date('d.m.Y', strtotime($dss[1]));
?>
				Договор: <?="$ds - $ds1";?><br/>
				Менеджер: <?=($adminInfo['manager'] ? $adminInfo['manager'] : '-');?><br/>
				Ввод: <?=($adminInfo['vvod'] ? $adminInfo['vvod'] : '-');?><br/>
				<a href='https://<?=$_SERVER['HTTP_HOST'];?>/system/firms/edit/<?=$company['cID'];?>/'>Редактирование</a>
			</div>
		</div>
		<?php endif;?>
<?php if ($lefttype == 'company'): ?>
<div id="co-info">

	<div class="co_contacts">
		<h2 class="agievent"><?=$company['shortname'];?></h2>
		<hr>


		<?php /*<h2 class="agievent">«<?=$company['shortname']?>»</h2>*/;?>



		<?php if ($company['addr']['street']): ?>
			Адрес: <strong><?=Core::join_strings($company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['area'] . ", " .
    str_replace("(г)", "", $company['addr']['city']) . ", " . $company['addr']['street'] . ", " . $company['addr']['dom'] . ", " . $company['addr']['lit'], ",");?> </strong>
			<?php if ($company['addr']['info']): ?>
				(<?=$company['addr']['info'];?>)
			<?php endif;?>
		<?php endif;?>

		<hr>
		<?php

$company_addr['addr'] = $company['addr'];
if (empty($company['attr_all']))
{
    $metros = $company['metros'];
    $addrcompany = $company;
    $right = $company_right;

    $company = $company_right;

    $company['metros'] = $metros;
}
else
{
    $addrcompany = $company['addr'];

}

?>
		<?php foreach ($company['attr_all'] as $idx => $attr): ?>

			<?php if ($attr['type'] == 9): ?>
				<br/>
				<span class="group"><?=$attr['value'];?></span>
			<?php elseif ($attr['type'] == 4): ?>
				<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/email2.png" alt="e-mail" border="">
					<span class="contact">
						<a href="mailto:<?=$attr['value'];?>" onmouseover="this.href='mailto:<?=$attr['value'];?>'"><?=$attr['value'];?></a>
					</span>
					<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
					<?php endif;?>
				</div>
			<?php elseif ($attr['type'] == 1): ?>

				<div class="item lib_icons16">
				<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">
				<span class="contact"><?=Core::normalize_tel($attr['value']);?></span></div>
				<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
				<?php endif;?>
			<?php elseif ($attr['type'] == 2): ?>
				<div class="item lib_icons16">Тел./факс:<span class="contact">+7 <?=strstr($attr['value'],
    ")") ? "" : "(812)";?> <?=$attr['value'];?></span></div>
				<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
				<?php endif;?>
			<?php elseif ($attr['type'] == 3): ?>
				<div class="item lib_icons16">Факс:<span class="contact">+7 <?=strstr($attr['value'],
    ")") ? "" : "(812)";?> <?=$attr['value'];?></span></div>
				<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
				<?php endif;?>
			<?php elseif ($attr['type'] == 7): ?>
				<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/icq.png" alt="icq" border=""><span class="contact"><?=$attr['value'];?></span></div>
				<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
				<?php endif;?>
			<?php elseif ($attr['type'] == 10): ?>
			<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/skype.png" alt="skype" border=""><span class="contact"><a href="skype:<?=$attr['value'];?>?call"><?=$attr['value'];?></a></span></div>
				<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
				<?php endif;?>
			<?php endif;?>

		<?php endforeach;?>

		<br/>
		<?php if ($company['attribs'][5]): ?>
			<?php foreach ($company['attribs'][5] as $attr): ?>
				<div>Сайт:<strong>
					<a target="_blank" href="/count/other/?<?=$attr['value'];?>"><?=str_replace("http://", "", $attr['value']);?></a></strong></div>
			<?php endforeach;?>
		<?php endif;?>

	<!--	<div>

		<?php if ($company['attribs'][1]): ?>
			<?php foreach ($company['attribs'][1] as $attr): ?>
				<div class="item lib_icons16">
					<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">
						<span class="contact"><?=Core::normalize_tel($attr['value']);?>
					<?php if ($attr['info']): ?>
						(<?=$attr['info'];?>)
					<?php endif;?>
					</span>
				</div>
			<?php endforeach;?>
		<?php endif;?>

		<?php foreach ($company['attr_all'] as $idx => $attr): ?>
			<?php if ($attr['type'] == 9): ?>
				<span class="group"><?=$attr['value'];?></span>

			<?php elseif ($attr['type'] == 2): ?>
				<div class="item lib_icons16">тел./факс:<span class="contact">+7 (812)<?=$attr['value'];?></span></div>
			<?php elseif ($attr['type'] == 3): ?>
				<div class="item lib_icons16">тел./факс:<span class="contact">+7 (812)<?=$attr['value'];?></span></div>

			<?php endif;?>
		<?php endforeach;?>

		<?php if ($company['attribs'][4]): ?>
			<?php foreach ($company['attribs'][4] as $attr): ?>
				<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/email2.png" alt="e-mail" border=""><span class="contact"><a href="mailto:<?=$attr['value'];?>" onmouseover="this.href='mailto:<?=$attr['value'];?>'"><?=$attr['value'];?></a></span>
						<?php if ($attr['info']): ?>
							(<?=$attr['info'];?>)
						<?php endif;?>
				</div>
			<?php endforeach;?>
		<?php endif;?>

		</div>-->


		<?php if ($company['work_time']): ?>
		<div style="padding:5px;margin:5px 0">
			<h2>График работы:</h2><?=nl2br($company['work_time']);?>
		</div>
		<?php endif;?>

		<?php if ($company['addr']['transport']): ?>
		<div style="background:#ffa816;padding:5px">
		<h2>Как добраться:</h2>
		<?=nl2br($company['addr']['transport']);?>
		</div>
		<?php endif;?>

		<?php if ($company['metros']): ?>
		<div style="padding:5px;">
			 <h2>Ближайшее метро:</h2>
			 <?php foreach ($company['metros'] as $m): ?>
			 <?php

if ($m['dist'] <= 1000)
{
    $path = sprintf("%d", intval(($m['dist']))) . "м";
}
else
{
    $path = sprintf("%.1f", ($m['dist'] / 1000.0)) . "км";
}

?>
			 <div class="metroline"><span class="metro <?=$m['class'];?>"></span><span title="метро <?=$m['metro'];?>, <?=$m['line'];?>"><?=$m['metro'];?> (<?=$path;?>)</span></div>
			 <?php endforeach;?>
		</div>
		<?php endif;?>


	</div>




		<?php if ($company['subcats']): ?>
		<br/>
		<div>Компания «<b><?=$company['shortname'];?></b>» представлена в разделах каталога:
			<br>
			<ul>
			<?php foreach ($company['subcats'] as $subcat): ?>
				<?php if ($subcat['parent_cat'] != 'catalog'): ?>
				<li><a href="/catalog/<?=$subcat['parent_cat'];?>/<?=$subcat['code'];?>/"><?=$subcat['name'];?></a></li>
				<?php else: ?>
				<li><a href="/catalog/<?=$subcat['code'];?>/"><?=$subcat['name'];?></a></li>
				<?php endif;?>
			<?php endforeach;?>

			</ul>
		</div>
		<?php endif;?>



</div>
<?php elseif ($lefttype == 'catalog'): ?>
<div id=co-info>

	<div class="adv4 fll" style="" id="adv4_1">

		<?php if (strstr($advert['adv4_1']['src'], 'swf')): ?>
			<object width="100%" height="100%"  data="<?=$advert['adv4_1']['src'];?>"
					type="application/x-shockwave-flash">
				<param name="allowfullscreen" value="true">
				<param name="allowscriptaccess" value="always">
				<param name="quality" value="high">
				<param name="flashvars" value="link1=http://www.008.ru/count/adv4_1/?<?=$advert['adv4_1']['url'];?>">
			 </object>
		<?php else: ?>
			 <a target="_blank" href='/count/adv4_1/?<?=$advert['adv4_1']['url'];?>'>
				<?php if ($advert['adv4_1']['src'] && !strstr($advert['adv4_1']['src'], '.swf')): ?>
				<img border="0" src='<?=$advert['adv4_1']['src'];?>' width=240 height=400>
				<?php endif;?>

			 </a>
		 <?php endif;?>


<? if(!isAdminIp()):?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Гугл левый в каталоге -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4970407537973355"
     data-ad-slot="2645500028"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?else:?>
<div style='border:1px solid red;width:100px;display:inline'>
	<img width=200 height=500 src=/assets/images/bannbg.jpg>
	</div>
<?endif?>

<? if(!isAdminIp()):?>
		 <!-- Яндекс.Директ -->
<div id="yandex_ad"></div>
<script type="text/javascript">
(function(w, d, n, s, t) {
    w[n] = w[n] || [];
    w[n].push(function() {
        Ya.Direct.insertInto(154593, "yandex_ad", {
            ad_format: "direct",
            font_size: 1,
            type: "vertical",
            limit: 4,
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
<?else:?>
<div style='border:1px solid red;width:100px;display:inline'>
	<img width=200 height=500 src=/assets/images/bannbg.jpg>
	</div>
<?endif?>

		<!-- <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
			 <param name="movie" value="<?=$advert['adv4_1']['src'];?>"/>
			 <param name="flashvars" value="link1=http://www.008.ru/count/adv4_1/?<?=$advert['adv4_1']['url'];?>">
		 </object>
		 -->



	</div>
</div>
<?php elseif ($lefttype == 'google'): ?>
	<!-- Яндекс.Директ -->

<? if(!isAdminIp()):?>
<div id="yandex_ad"></div>
<script type="text/javascript">
(function(w, d, n, s, t) {
    w[n] = w[n] || [];
    w[n].push(function() {
        Ya.Direct.insertInto(154593, "yandex_ad", {
            ad_format: "direct",
            font_size: 1,
            type: "vertical",
            limit: 4,
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
<?else:?>
<div style='border:1px solid red;width:100px;display:inline'>
	<img width=200 height=500 src=/assets/images/bannbg.jpg>
	</div>
<?endif?>
<?php elseif ($lefttype == 'stat'): ?>
<div style="margin-left:18px; margin-bottom:20px;">
    <ul class="listitems">
		<li><a href='/stat/rubrics/'>статистика рубрик</a></li>
		<li><a href='/stat/keywords/'>статистика поисковых запросов</a></li>
		<li><a href='/stat/company/'>статистика компаний</a></li>
	</ul>
</div>
<?php elseif ($lefttype == 'feedback'): ?>
<div style="margin-left:18px; margin-bottom:20px;">
    <ul class="listitems">
        <li class="<?=$_SERVER['REQUEST_URI'] == '/feedback/' ? 'sel' : '';?> ">
            <div><a href="/feedback/">Написать нам</a></div>
        </li>
        <li class="<?=$_SERVER['REQUEST_URI'] == '/feedback/request/' ? 'sel' : '';?>">
            <div><a href="/feedback/request/">Заявка на обслуживание</a></div>
        </li>
        <li class="<?=$_SERVER['REQUEST_URI'] == '/feedback/present/' ? 'sel' : '';?>">
            <div><a href="/feedback/present/">Заявка на пакет Деловой</a></div>
        </li>
        <li class="<?=$_SERVER['REQUEST_URI'] == '/feedback/present-elit/' ? 'sel' : '';?>">
            <div><a href="/feedback/present-elit/">Заявка на пакет Люкс</a></div>
        </li>
        <li class="<?=$_SERVER['REQUEST_URI'] == '/feedback/osen/' ? 'sel' : '';?>">
            <div><a href="/feedback/osen/">Заявка на пакет Эконом</a></div>
        </li>
    </ul>
</div>
<?php else: ?>
<?php if ($random_discounts): ?>
<div class="costuffs">
    <h2><a title="Все акции и скидки" href="/discount/">Акции и скидки</a></h2>
    <!--noindex--><i class="comment sm">выбраны случайным образом</i>
    <!--/noindex-->
    <ol>
		<?php foreach ($random_discounts as $d): ?>
		<li>
            <div><a href="/company/<?=$d['cID'];?>/">«<?=$d['shortname'];?>»</a> - <b><?=$d['caption'];?></b></div>
            <p><i><a href="/company/<?=$d['cID'];?>/discount/#<?=$d['sID'];?>"><?=$d['notice'];?></a></i></p>
        </li>
		<?php endforeach;?>

    </ol>
</div>
<?php endif;?>
<?php if ($random_conews): ?>
<div class="costuffs">
    <h2>Новости компаний</h2>
    <!--noindex--><i class="comment sm">выбраны случайным образом</i>
    <!--/noindex-->
    <ol>
		<?php foreach ($random_conews as $d): ?>
		<li>
            <div><a href="/company/<?=$d['cID'];?>/">«<?=$d['shortname'];?>»</a> - <b><?=$d['caption'];?></b></div>
            <p><i><a href="/company/<?=$d['cID'];?>/conews/#<?=$d['sID'];?>"><?=$d['notice'];?></a></i></p>
        </li>
		<?php endforeach;?>

    </ol>
</div>
<?php endif;?>
<?php endif;?>
