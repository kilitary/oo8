<?php include "templates/subs/header.php";?>

<?php

	$prevname = '';
?>
<div style="float:right;padding-left: 25px;width: 265px;">
	<div id="yashare" class="noprint" style="text-align:left;margin:2px 0px 20px 0px"><span class="b-share"><a class="b-share__handle" id="ya-share-0.051368717569857836-1434018429415" data-hdirection="" data-vdirection=""><span class="b-share__text"><img alt="" class="b-share-icon" src="//yastatic.net/share/static/b-share.png">Поделиться</span></a><a rel="nofollow" target="_blank" title="ВКонтакте" class="b-share__handle b-share__link b-share-btn__vkontakte" href="https://share.yandex.net/go.xml?service=vkontakte&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="vkontakte"><span class="b-share-icon b-share-icon_vkontakte"></span></a><a rel="nofollow" target="_blank" title="LiveJournal" class="b-share__handle b-share__link b-share-btn__lj" href="https://share.yandex.net/go.xml?service=lj&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="lj"><span class="b-share-icon b-share-icon_lj"></span></a><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Одноклассники" class="b-share__handle b-share__link b-share-btn__odnoklassniki" href="https://share.yandex.net/go.xml?service=odnoklassniki&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="odnoklassniki"><span class="b-share-icon b-share-icon_odnoklassniki"></span></a><a rel="nofollow" target="_blank" title="Мой Мир" class="b-share__handle b-share__link b-share-btn__moimir" href="https://share.yandex.net/go.xml?service=moimir&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="moimir"><span class="b-share-icon b-share-icon_moimir"></span></a><a rel="nofollow" target="_blank" title="Мой Круг" class="b-share__handle b-share__link b-share-btn__moikrug" href="https://share.yandex.net/go.xml?service=moikrug&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="moikrug"><span class="b-share-icon b-share-icon_moikrug"></span></a><a rel="nofollow" target="_blank" title="Яндекс.Закладки" class="b-share__handle b-share__link b-share-btn__yazakladki" href="https://share.yandex.net/go.xml?service=yazakladki&amp;url=http%3A%2F%2Fwww.008.ru%2Fcompany%2F4254%2F&amp;title=Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%82%D0%BE%D1%81%D0%B0%D0%BB%D0%BE%D0%BD%20Aurore%20Auto%20%7C%20%D0%90%D0%B2%D1%80%D0%BE%D1%80%D0%B0%20%D0%90%D0%B2%D1%82%D0%BE.%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%9F%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3%2C%20%D0%A4%D1%80%D1%83%D0%BD%D0%B7%D0%B5%D0%BD%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A1%D0%B0%D0%BB%D0%BE%D0%B2%D0%B0%20%D1%83%D0%BB%2C%2056&amp;description=%D0%9E%D1%84%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B4%D0%B8%D0%BB%D0%B5%D1%80%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%9F%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B0%20%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D0%B8%D0%BB%D0%B5%D0%B9%20Nissan%20(%D0%9D%D0%B8%D1%81%D1%81%D0%B0%D0%BD).%20%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD...&amp;image=http%3A%2F%2Fwww.008.ru%2Fcontent%2Flogos%2Fi4254.gif" data-service="yazakladki"><span class="b-share-icon b-share-icon_yazakladki"></span></a></span></div>
<ul class="listitems">
    <li style="border-bottom:2px solid #ffa816;margin-bottom:5px" <?=($companyShowType == 'company' ? 'class=sel' : '');?>>
        <div><a href="/company/<?=$company_right['cID'];?>/"><?=$company_right['shortname'];?></a> (компания)</div>
    </li>
    <li <?=($companyShowType == 'contacts' ? 'class=sel' : '');?>>
        <div><a href="/company/<?=$company_right['cID'];?>/contacts/">Контакты</a></div>
    </li>

	<?php if ($company_right['conews']): ?>
		<li <?=($companyShowType == 'conews' ? 'class=sel' : '');?>>
			<div><a href="/company/<?=$company_right['cID'];?>/conews/">Новости компании</a></div>
		</li>

	<?php endif;?>

	<?php if ($company_right['articles']): ?>
		<li <?=($companyShowType == 'articles' ? 'class=sel' : '');?>>
			<div><a href="/company/<?=$company_right['cID'];?>/articles/">Статьи</a></div>
		</li>
	<?php endif;?>

	<?php if ($company_right['vacancy']): ?>
		<li <?=($companyShowType == 'vacancy' ? 'class=sel' : '');?>>
			<div><a href="/company/<?=$company_right['cID'];?>/vacancy/">Вакансии</a></div>
		</li>
	<?php endif;?>

	 <?php if ($company_right['discount']): ?>
		<li <?=($companyShowType == 'discount' ? 'class=sel' : '');?>>
			<div><a href="/company/<?=$company_right['cID'];?>/discount/">Акции и скидки</a></div>
		</li>
	 <?php endif;?>

	 <?php if ($company_right['pricelist']): ?>
		<li class=""><div><a href="/company/<?=$company_right['cID'];?>/getpricelist/">Скачать прайс лист</a></div></li>
	 <?php endif;?>

    <li style="list-style:none;padding:5px 0 5px 0;border-bottom:2px solid #ffa816;margin-bottom:5px"></li>
    <li class="feedback_click">
        <div><a href="#feedback" onclick="$('#feedback').toggle();">Сообщить об ошибке</a></div>
    </li>
    <li class="">
        <div><a href="javascript:Print.toPrintLayout();window.print();">Распечатать</a></div>
    </li>
	<?php

		//    print_r($advert);die;
	;?>
    <li style="list-style:none;">
		<?php if ($advert['adv4_2']['url']): ?>
		<div class="adv4" style="" id="adv4_2">
			<?php if ($advert['adv4_2']['src'] && !strstr($advert['adv4_2']['src'], '.swf')): ?>
			<a target="_blank" href='/count/adv4_1/?<?=$advert['adv4_2']['url'];?>'>
			<img border="0" src='<?=$advert['adv4_2']['src'];?>'>
			</a>
			<?php else: ?>
			 <object width="100%" height="100%" id="_7287822664" name="_7287822664"
			 	data="<?=$advert['adv4_2']['src'];?>" type="application/x-shockwave-flash">
			 	<param name="allowfullscreen" value="true">
			 	<param name="allowscriptaccess" value="always">
			 	<param name="quality" value="high">
			 	<param name="flashvars" value="link1=http://www.008.ru/count/adv4_2/?<?=$advert['adv4_2']['url'];?>">
			 </object>
			 <?php endif;?>
		</div>
		<?php endif;?>
	</li>
	<li style="list-style:none;padding:5px 0 5px 0;border-bottom:2px solid #ffa816;margin-bottom:5px">

	</li>

	<?php

		//print_r($company_right);
	;?>

	<?php if (count($company_right['offices']) >= 1): ?>

		<li style="list-style:none;">Адреса и филиалы компании:</li>
		<!--<li class="group">
			<div><a href="/company/<?=$company_right['cID'];?>/"><?=$company_right['shortname'];?></a></div>
		</li>-->
		<?php if ($company_right['addr']['street']): ?>
			 <li class="<?=$company_id == $company_right['cID'] ? 'sel' : '';?>">
				<div><a title="Ситроен Центр Лиговский, Камчатская ул, 3, литера А (пересечение ул. Камчатской и Расстанной)" href="/company/<?=$company_right['cID'];?>/">
				<?=Core::join_strings(preg_replace("#(\s+\(.*\))#s", "", $company_right['addr']['city']) . ", " . $company_right['addr']['street'] . ", " . $company_right['addr']['dom'], ",");?></a>
				</div>
			</li>
		<?php endif;?>

	<?php

		//mlog("districts ".count($company_right['district_offices']));
		//mlog("uniq distr ".count($company_right['uniqueDistricts']));
		//mlog($company_right['cID']." ".print_r($company_right['uniqueDistricts'],1));
	;?>
<?php if (count($company_right['uniqueDistricts']) >= 2 || count($company_right['offices']) < 10): ?>

			<?php foreach ($company_right['offices'] as $office): ?>
<?php if ($prevname != $office['shortname']): ?>
<?php

	$prevname = $office['shortname'];

?>
				<li class="group">
					  <div>
					<a title="Свадьба. Обручальные кольца, Типанова ул, 21, литера А (ТРК Питер, 1 этаж)" href="/company/<?=$office['cID'];?>/"><?=$office['shortname'];?></a>
					</div>
				 </li>
			<?php endif;?>

			<?php if (!empty($office['addr']['name_menu'])): ?>
						<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
							<div><a title="" href="/company/<?=$office['cID'];?>/"><?=$office['addr']['name_menu'];?></a>
							</div>
						</li>
			<?php else: ?>
<?php if ($office['addr']['street']): ?>
					<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
						<div><a title="<?=preg_replace("#(\(\w+\))#s", "", $office['addr']['city']);?>, <?=$office['addr']['street'];?>, <?=$office['addr']['dom'];?>" href="/company/<?=$office['cID'];?>/"><?=Core::join_strings(preg_replace("#(\s+\(.*\))#si", "", $office['addr']['city']) . ", " . $office['addr']['street'] . ", " . $office['addr']['dom'], ',');?></a>
						</div>
					</li>
				<?php endif;?>
<?php endif;?>

			<?php endforeach;?>
<?php else: ?>
<?php //print_r($company_right['offices'])

;?>

			<?php foreach ($company_right['district_offices'] as $district => $offices): ?>
<?php foreach ($offices as $office): ?>
<?php if ($prevname != $district): ?>
<?php

	$prevname = $district;

?>
<?php if ($district != 'global'): ?>
						<li class="group"><div><i><?=$district;?> р-н.</i></div></li>
						<?php else: ?>
<?php

	$district_offices = $offices;
	break;
?>
						<li class="group"><div><i>Другие города и регионы</i></div></li>
						<?php endif;?>
<?php endif;?>

					<?php if (!empty($office['addr']['name_menu'])): ?>
						<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
							<div><a title="" href="/company/<?=$office['cID'];?>/"><?=$office['addr']['name_menu'];?></a>
							</div>
						</li>
					<?php else: ?>
<?php if ($office['addr']['street']): ?>
						<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
							<div><a title="<?=preg_replace("#(\(\w+\))#s", "", $office['addr']['city']);?>, <?=$office['addr']['street'];?>, <?=$office['addr']['dom'];?>" href="/company/<?=$office['cID'];?>/"><?=Core::join_strings(preg_replace("#(\s+\(.*\))#si", "", $office['addr']['city']) . ", " . $office['addr']['street'] . ", " . $office['addr']['dom'], ',');?></a>
							</div>
						</li>
					<?php endif;?>
<?php endif;?>
<?php endforeach;?>
<?php endforeach;?>

			<?php if ($district_offices): ?>
				<li class="group"><div><i>Другие города и регионы</i></div></li>
				<?php foreach ($district_offices as $office): ?>

					<?php if ($office['addr']['street']): ?>
						<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
							<div><a title="<?=preg_replace("#(\(\w+\))#s", "", $office['addr']['city']);?>, <?=$office['addr']['street'];?>, <?=$office['addr']['dom'];?>" href="/company/<?=$office['cID'];?>/"><?=Core::join_strings(preg_replace("#(\s+\(.*\))#si", "", $office['addr']['city']) . ", " . $office['addr']['street'] . ", " . $office['addr']['dom'], ',');?></a>
							</div>
						</li>
					<?php endif;?>
<?php endforeach;?>
<?php endif;?>
<?php endif;?>

	<?php endif;?>


	<?php if ($company['razm_type'] == 1 || $company['razm_type'] == 9|| $company_right['razm_type'] == 9
	|| $company_right['razm_type'] == 1): ?>

	<?if(isAdminIp()):?>
			<div style='border:1px solid red;width:100px;display:inline'>
	<img width=200 height=800 src=/assets/images/bannbg.jpg>
	</div>
	<?else:?>
	<div id="yandex_ad3"></div>
		<script type="text/javascript">
			(function(w, d, n, s, t) {
				w[n] = w[n] || [];
				w[n].push(function() {
					Ya.Direct.insertInto(154593, "yandex_ad3", {
						ad_format: "direct",
						font_size: 1,
						type: "vertical",
						border_type: "block",
						limit: 3,
						title_font_size: 3,
						border_radius: true,
						links_underline: true,
						site_bg_color: "FFFFFF",
						header_bg_color: "FEEAC7",
						border_color: "FBE5C0",
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
		
	<?endif?>
		
		<?php endif;?>

</ul>
</div>

<div class="main_content" style="margin-right: 290px;">
          <div id="co-card">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody>
		<tr valign=top>



			<td>
				<h1><?=$company['fullname'];?></h1>
			</td>
			<td></td>
			<td nowrap>
				<!--noindex-->
				<div style="text-align:right; margin: 10px 0px 0px 15px" class="noprint">
					<a style="print:block;" href="javascript:Print.toPrintLayout();" target="_self">
					<img src="/itlib/boolets/print.gif" alt="Версия для печати" width="11" height="11" border="0" style="margin:0 5px -2px 0">Версия для печати</a>
				</div>
				<!--/noindex-->
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php

				//    print_r($company);
			;?>
<?php if ($company['slogan'])
	{
    ?>
					<div style="padding:5px 0 10px;text-align:right;color:#949494"><em><strong><?=$company['slogan'];?></strong></em></div>
				<?php }
				?>
				<div style="padding:10px 0 10px 2px;">
					<?php if ($company['razm_type'] != 9 && $company['razm_type'] != 1 && $company_right['razm_type'] != 1 && $company_right['logo']): ?>
					<a href="/company/<?=$company_right['cID'];?>/" title="<?=$company_right['shortname'];?>">
						<img class="co_logo" align="left" border="0" src="<?=$company_right['logo'];?>" alt="<?=$company_right['shortname'];?>">
					</a>
					<?php endif;?>

					<?php if ($company['razm_type'] == 9): ?>
						<div style='padding:10px 0 10px 2px;color:red; font-weight:bold'>
							<strong> <?=$company['shortname'];?></strong> - <?=$company_info;?>
						</div>
					<?php else: ?>
						<div class="shortDescription" style="<?=$company_right['logo'] ? '' : 'margin-left: 0px;';?>"><strong> <?=$company['shortname'];?></strong> - <?=$company_info;?></div>
					<?php endif;?>
<?php if ($company['license'])
	{
    ?>
						<div><br /><?=$company['license'];?></div>
					<?php }
					?>
				</div>


			</td>
		</tr>
		<tr>
			<td>

			</td>
		</tr>
		<tr>
	</tbody>
</table>
<?php

	//print_r($company);
;?>
<?php if (strlen($company['discount008'])): ?>
<div class="corner c-discount"?>
	<div class="discount008">
		<img align="left" width="93" title="<?=$company['discount008'];?>" alt="дисконтная карта - <?=$company['discount008'];?>" height="61" border="0" src="/content/discount/card<?=$company['cID'];?>.png">
		<h4 style="margin-top:0px">Действующие скидки:</h4><em style="color:red; font-weight:bold"><?=$company['discount008'];?></em>
	</div>
</div>
<?php endif;?>

<?php if (($company['razm_type'] == 5 || $company['razm_type'] == 4 || $company['razm_type'] == 3)
    && count(@$company['pics'])): ?>
<div class="blockGallery">
	<a class="prev browse left"></a>
	<div  id="scrollable_gallery" class="scrollable" style=''>
		<div class="items thumbs">
			<?php foreach ($company['pics'] as $pic): ?>

			<div class=si>

				<a href='/content/coimgs/<?=$company['cID'];?>/<?=$pic . "_l.jpg";?>' onclick="return hs.expand(this)">
					<img height='100' class=highslide  src='/content/coimgs/<?=$company['cID'];?>/<?=$pic . "_t.jpg";?>' >
				</a>
			</div>

				<!--</a>-->
			<?php endforeach;?>
		</div>
	</div>
	<a class="next browse right"></a>

</div>
<?php endif;?>


<?php

;?>
<div id="co-main">


<?php include "templates/subs/left-pane.php";?>
<div id="co-prod">

	<?php

		//print_r($company['addr']);
		if (strlen($company_addr['addr']['street']))
		{
		    $fulladdr = Core::join_strings($company_addr['addr']['region'] . ", " . $company_addr['addr']['city'] . ", " . $company_addr['addr']['street'] . ", " .
		        $company_addr['addr']['dom'] . ", " . $company_addr['addr']['korp'], ",");
		    $fulladdr = str_replace("\"", "", $fulladdr);
		}
		else
		{
		    $fulladdr = "";
		}
		$company['shortname'] = str_replace("\"", "", $company['shortname']);
	?>

	<?php if ($companyShowType == 'company'): ?>

	<?php if (strlen($fulladdr)): ?>
<!--	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlR2Qf8reUVKCr95CgKvEIKJGYi-gTC9I&sensor=false"></script>-->
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAlR2Qf8reUVKCr95CgKvEIKJGYi-gTC9I" type="text/javascript"></script>

		<div id=mapdiv style='display:none'>
		<h2 class="noprint">Схема проезда -  как доехать до <?=$company['shortname'];?></h2>
		<div id="map" style="width: 100%; height: 250px; margin: 0px 0px 20px; border: 1px solid rgb(124, 145, 167); display: block; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223); box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 6px 1px;">
		</div>
		</div>
		<script type='text/javascript'>
		$(function()
		{
			 console.log("fulladdr=",'<?=$fulladdr;?>');
			 var map2 = new GMap2(document.getElementById("map"));
			console.log("place gmap ",map2);
			//map2.setCenter(new GLatLng(59.90239,30.28062), 15);
			//var myLatlng2 = new GLatLng(59.90235,30.27380);
			//var marker2 = new GMarker(myLatlng2);
			//map2.addOverlay(marker2);
			 geocoder = new GClientGeocoder();
             geocoder.getLatLng(
              '<?=$fulladdr;?>',
              function(point) {
                if (!point) {
                  console.log('<?=$fulladdr;?>' + " not found");
                  //$('#map').remove();
                  //$('h2.noprint').remove();
                } else {
                	console.log("found "+point);
                	$('#mapdiv').show();
                  map2.setCenter(point, 14);
                  map2.addOverlay(new GMarker(point));//, markerOptions));
                  }
                }
              );
			/*var geocoder;
			var map;
			geocoder = new google.maps.Geocoder();
			 geocoder.geocode( { 'address': "<?=$fulladdr;?>"}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK)
				{

				 console.log("coord: "+results[0].geometry.location);

					var mapOptions = {
					  center: results[0].geometry.location,
					  zoom: 12,
					  mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("map"),
					 mapOptions);

				var myLatlng = results[0].geometry.location;
				var marker = new google.maps.Marker({
						position: myLatlng,
						title:"<?=$company['shortname'];?>"
					});

				marker.setMap(map);

				} else {
				  console.log('Geocode was not successful for the following reason: ' + status);

				}
			});*/

			});
		</script>
		<?php endif;?>





		<h2>Справочная информация</h2>
		<?php if ($company['firm_html']): ?>
		<?=$company['firm_html'];?>
<?php else: ?>
		<?=$company_right['firm_html'];?>
<?php endif;?>


	<?php elseif ($companyShowType == 'articles'): ?>
	<div class="costuffs">
				<h2>Статьи</h2>
				<ol>
				<?php foreach ($company['articles'] as $news): ?>
					<li><a href='#<?=$news['sID'];?>'><?=$news['caption'];?></a></li>
				<?php endforeach;?>
				</ol>

				<?php foreach ($company['articles'] as $news): ?>
				<div class="evenodd" style="background-color: rgb(242, 246, 250);">
					<div class="dtitle"><h3><a name="<?=$news['sID'];?>"><?=$news['caption'];?></a></h3></div>
					<p><i><?=$news['notice'];?></i></p>
					<div><?=$news['body'];?></div>
				</div>
				<?php endforeach;?>
			</div>


	<?php elseif ($companyShowType == 'conews'): ?>
	<div class="costuffs">

			<h2>Новости компании</h2>
			<ol>
			<?php foreach ($company['conews'] as $news): ?>
				<li><a href='#<?=$news['sID'];?>'><?=$news['caption'];?></a></li>
			<?php endforeach;?>
			</ol>

			<?php foreach ($company['conews'] as $news): ?>
			<div class="evenodd" style="background-color: rgb(242, 246, 250);">
				<div class="dtitle"><h3><a name="<?=$news['sID'];?>"><?=$news['caption'];?></a></h3></div>
				<p><i><?=$news['notice'];?></i></p>
				<div><?=$news['body'];?></div>
			</div>
			<?php endforeach;?>
		</div>



	<?php elseif ($companyShowType == 'contacts'): ?>

 <h2>Контакты</h2>
		<div>
			<div style="margin:10px 0 10px 0"><b><?=$company['shortname'];?></b></div>
			<ul>
				<li>
					<div class="evenodd" style="padding: 5px; background-color: rgb(242, 246, 250);">
					<?php

						//    print_r($company);
					;?>
						<em><?=$company['shortname'];?></em>: <?=Core::join_strings($company['addr']['region'] . ", " . $company['addr']['district'] . ", " . $company['addr']['street'] . ", " . $company['addr']['dom'], ",");?>
<?php if ($company['addr']['info']): ?>
						 (<?=$company['addr']['info'];?>)
						 <?php endif;?>
						<div>


							<?php foreach ($company['attr_all'] as $idx => $attr): ?>

							<?php if ($attr['type'] == 9): ?>
								<br/>
								<span class="group"><?=$attr['value'];?></span>
							<?php elseif ($attr['type'] == 4 && !empty($attr['value'])): ?>
								<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/email2.png" alt="e-mail" border="">
									<span class="contact">
										<a href="mailto:<?=$attr['value'];?>" onmouseover="this.href='mailto:<?=$attr['value'];?>'"><?=$attr['value'];?></a>
									</span>
									<?php if ($attr['info']): ?>
										(<?=$attr['info'];?>)
									<?php endif;?>
								</div>
							<?php elseif ($attr['type'] == 1 && !empty($attr['value'])): ?>

								<div class="item lib_icons16">
								<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border="">
								<span class="contact"><?=Core::normalize_tel($attr['value']);?></span></div>
								<?php if ($attr['info']): ?>
										(<?=$attr['info'];?>)
									<?php endif;?>
<?php elseif ($attr['type'] == 2 && !empty($attr['value'])): ?>
								<div class="item lib_icons16">тел./факс:<span class="contact">+7 <?=strstr($attr['value'],
    ")") ? "" : "(812)";?> <?=$attr['value'];?></span></div>
								<?php if ($attr['info']): ?>
										(<?=$attr['info'];?>)
									<?php endif;?>
<?php elseif ($attr['type'] == 3 && !empty($attr['value'])): ?>
								<div class="item lib_icons16">факс:<span class="contact">+7 <?=strstr($attr['value'],
    ")") ? "" : "(812)";?>  <?=$attr['value'];?></span></div>
								<?php if ($attr['info']): ?>
										(<?=$attr['info'];?>)
									<?php endif;?>
<?php endif;?>

						<?php endforeach;?>

						<?php foreach ($company_right['district_offices'] as $district => $offices): ?>
<?php foreach ($offices as $office): ?>
<?php

	//print_r($office);
;?>
						<div class="evenodd" style="padding: 5px; background-color: rgb(242, 246, 250);">
							<em><?=$office['fullname'];?></em>: <?=$office['addr']['region'];?>, <?=$office['addr']['district'];?> район, <?=$office['addr']['street'];?>, <?=$office['addr']['dom'];?> <?=$office['addr']['info'];?>
							<div><div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border=""><span class="contact">+7 (812) <?=$office['attribs'][1][0]['value'];?></span></div></div><br><i>Часы работы</i>:<br><?=$office['work_time'];?><br><i>Ближайшее метро</i>:<br>
							<?php foreach ($office['metros'] as $metro): ?>
							<div class="metroline"><span class="metro <?=$metro['class'];?>"></span><span title="<?=$metro['metro'];?>, <?=$metro['line'];?>"><?=$metro['metro'];?> (<?=($metro['dist'] / 1000.0);?>км)</span>
							</div>
							<?php endforeach;?>

							<?php if ($prevname != $district): ?>
<?php

	$prevname = $district;

?>
<?php if ($district != 'global'): ?>
								<li class="group"><div><i><?=$district;?> р-н.</i></div></li>
								<?php else: ?>
<?php

	$district_offices = $offices;
	break;
?>
								<li class="group"><div><i>Другие города и регионы</i></div></li>
								<?php endif;?>
<?php endif;?>

						<?php if (!empty($office['addr']['name_menu'])): ?>
							<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
								<div><a title="" href="/company/<?=$office['cID'];?>/"><?=$office['addr']['name_menu'];?></a>
								</div>
							</li>
						<?php else: ?>
<?php if ($office['addr']['street']): ?>
							<li class="<?=$company_id == $office['cID'] ? 'sel' : '';?>">
								<div><a title="<?=preg_replace("#(\(\w+\))#s", "", $office['addr']['city']);?>, <?=$office['addr']['street'];?>, <?=$office['addr']['dom'];?>" href="/company/<?=$office['cID'];?>/"><?=Core::join_strings(preg_replace("#(\s+\(.*\))#si", "", $office['addr']['city']) . ", " . $office['addr']['street'] . ", " . $office['addr']['dom'], ',');?></a>
								</div>
							</li>
						<?php endif;?>
<?php endif;?>
						</div>
						<?php endforeach;?>
<?php endforeach;?>


							<!--<div class="item lib_icons16">факс:<span class="contact">+7 (812) 329-1913</span></div>
							<?php if ($company['attribs'][4][0]['value']): ?>
							<div class="item lib_icons16"><img style="margin:5px 0 -2px 0;" src="/itlib/contacts/email2.png" alt="e-mail" border=""><span class="contact"><a href="#" onmouseover="this.href='mailto:<?=$company['attribs'][4][0]['value'];?>'"><?=$company['attribs'][4][0]['value'];?></a></span>
							</div>
							<?php endif;?>-->
						</div>
						<?php if ($company['work_time']): ?>
						<br><i>Часы работы</i>:
						<br><?=nl2br($company['work_time']);?>
<?php endif;?>

					   <?php if ($company['metros']): ?>
						<div style="padding:5px;">
							 Ближайшее метро:
							 <?php foreach ($company['metros'] as $m): ?>
							 <div class="metroline"><span class="metro <?=$m['class'];?>"></span><span title="метро <?=$m['metro'];?>, <?=$m['line'];?>"><?=$m['metro'];?> (<?=sprintf("%.1f", ($m['dist'] / 1000.0));?>км) <?=$m['class'];?></span></div>
							 <?php endforeach;?>
						</div>
						<?php endif;?>
<?php if ($company['attribs'][5][0]['value']): ?>
						<div>сайт:<strong><a target="_blank" href="/count/?<?=$company['attribs'][5][0]['value'];?>"><?=$company['attribs'][5][0]['value'];?></a></strong></div>
						<?php endif;?>
					</div>
				</li>
			</ul>
		</div>

	<?php elseif ($companyShowType == 'discount'): ?>

	<div class="costuffs">
	<h2><a title="Все акции и скидки" href="/discount/">Акции и скидки</a></h2>
		<ol>
			<?php foreach ($company['discount'] as $disc): ?>
			<li><a href='#<?=$disc['sID'];?>'><?=$disc['caption'];?></a></li>
			<?php endforeach;?>
		</ol>
		<?php foreach ($company['discount'] as $disc): ?>
		<div class="evenodd" style="background-color: rgb(242, 246, 250);">
			<div class="dtitle"><h3><a name="<?=$disc['sID'];?>"><?=$disc['caption'];?></a></h3></div>
			<p><i><?=$disc['notice'];?></i></p>
			<div><?=$disc['body'];?></div>
		</div>
		<?php endforeach;?>
	</div>
	<?php elseif ($companyShowType == 'vacancy'): ?>
	<div class="costuffs">
	<h2>Вакансии</h2>
			<ol>
			<?php foreach ($company['vacancy'] as $news): ?>
				<li><a href='#<?=$news['sID'];?>'><?=$news['caption'];?></a></li>
			<?php endforeach;?>
			</ol>

			<?php foreach ($company['vacancy'] as $news): ?>
			<div class='dtitle'><h3><a name=<?=$news['sID'];?>><?=$news['caption'];?></a></h3></div>
			<?=$news['body'];?>
<?php endforeach;?>
		</div>
	<?php endif;?>
<?php include "templates/subs/error_submit.php";?>


</div>
<?php /*<div id="co-map"></div>*/;?>
</div>
</div><!-- end co card-->
          </div>

<?php include "templates/subs/footer.php";?>