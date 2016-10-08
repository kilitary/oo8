	<div class='clear'></div>
	<div class='clear'></div>
	<?php if ($random_companys): ?>
		<br/>
		<br/>
		<div class="coinfo" style="width:100%; margin:0 auto">

			 <h2><a title="Все компании" href="/catalog/">Компании</a></h2>
			 <!--noindex--><i class="comment sm">(несколько случайным образом выбранных)</i>
			 <!--/noindex-->

		</div>
		<br/>
		<?php foreach ($random_companys as $company): ?>
		 <div style="width:49%;height:90px;float:left;padding:5px 5px 0 0;font-size:11px;overflow:hidden;/*border:1px solid #7c91a7*/">
			 <a href="/company/<?=$company['cID'];?>/"><img align="left" style="padding:0 10px 10px 0" alt="<?=$company['cinfo'];?>" height="60" width="100" src="<?=$company['src'];?>">«<b><?=$company['shortname'];?></b>»</a>
			 <p><i><?=mb_substr($company['cinfo'], 0, 128) . "...";?></i></p>
			 </div>
		<?php endforeach;?>
		</div>
	<?php endif;?>
	<div class="clear"></div>
	</div>
	</td>

	</tr>
	</table>

	<br />
	<div class="noprint">
		 <hr />

		<div class="ilogos ilogos_bottom">
			  <div class="adv1 fll" style="" id="adv1_3">
			  <a href='/count/adv1_3/?<?=$advert['adv1_3']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_3']['src'];?>'></a></a>
				</div>
			  <div class="adv1 fll" style="" id="adv1_4">
			  <a href='/count/adv1_4/?<?=$advert['adv1_4']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_4']['src'];?>'></a></a>
				</div>
			 <div class="adv2 fll">
				 <!-- <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					adv468x60x1style
				  <ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-6870373552676285" data-ad-slot="7838404459">{google}</ins>
				  <script>
						(adsbygoogle = window.adsbygoogle || []).push({});
				  </script>
				  -->
				<?if($advert['adv2_2']['src']):?>
				<?php if (strstr($advert['adv2_2']['src'], ".swf")): ?>
				<div style='text-align:center;float:left'>
				<object type="application/x-shockwave-flash"  width="468" height="60"
			      data="<?=$advert['adv2_2']['src'];?>" >
			      <param name="flashvars" value="link1=http://<?=$_SERVER['HTTP_HOST'];?>/count/adv2_2/?<?=$advert['adv2_2']['url'];?>">
			      <param name="allowscriptaccess" value="always">
			      <param name="quality" value="high">
			   </object>
				</div>
			   <?php else: ?>
				 <div class="adv2 fll" style="" id="adv2_2">
               <a target="_blank" href='/count/adv2_2/?<?=$advert['adv2_2']['url'];?>'><img width="468" height="60" border="0" src='<?=$advert['adv2_2']['src'];?>'></a>
            </div>
				<?php endif;?>
				<?else:?>
				<?if(isAdminIp()):?>
				<div style='border:1px solid red;width:100px;display:inline'>
				<img width=400 height=55 src=/assets/images/bannbg.jpg>
				</div>
				<?else:?>
				<div style='text-align:center;float:left'>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:inline-block;width:468px;height:60px"
				     data-ad-client="ca-pub-4970407537973355"
				     data-ad-slot="2925238029"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				</div>
				<?endif?>
				<?endif?>

			 </div>
				<div class="adv1 fll" style="" id="adv1_5">
			  <a href='/count/adv1_5/?<?=$advert['adv1_5']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_5']['src'];?>'></a></a>
				</div>
				<div class="adv1 fll" style="" id="adv1_6">
			  <a href='/count/adv1_6/?<?=$advert['adv1_6']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_6']['src'];?>'></a></a>
				</div>
			 <div class="clear"></div>
		</div>

		 <hr />

		 <div class="noprint" style="margin:15px 0 10px 250px;">
			  <a href="#top"><img border="0" src="/itlib/boolets/top.gif" alt="наверх страницы" />&nbsp;наверх страницы</a>
			  <a href="javascript:history.back()"><img border="0" src="/itlib/boolets/red_arrow_icon.gif" alt="назад" />&nbsp;Назад</a>
		 </div>
		 <div class="corner b-color">
			  <div>&nbsp;</div>
		 </div>
		 <div id="nav-bottom" class="noprint">
			  <dl>
					<dt>О портале:</dt>
					<dd><a href="/info/104/">Компаниям - выгодно</a></dd>
					<dd><a href="/info/103/">Пользователям - легко</a></dd>
					<dd><a href="/info/100/">Правила использования информационного ресурса</a></dd>
			  </dl>
			  <dl>
					<dt>Справочная информация:</dt>
					<dd><a href="/catalog/">Товары и услуги</a></dd>
					<dd><a href="/discount/">Акции и скидки</a></dd>

					<dd><a title="международные телефонные коды городов и стран" href="/phonecodes/">Телефонные коды городов</a></dd>
			  </dl>
			  <dl>
					<dt>Клиентам:</dt>
					<dd><a href="/info/99/">Правила размещения на сайте</a></dd>
					<dd><a href="/adv/">Размещение рекламы</a></dd>
					<dd><a href="/info/iprice/">Стоимость пакетов услуг</a></dd>
					<dd><a href="/feedback/">Обратная связь</a></dd>
					<dd>Что ищут на портале</dd>
			  </dl>
		 </div>
	</div>

	<hr />
	<p><a href="http://www.008.ru/">008.ru - Телефонная справочная служба Санкт-Петербурга 008 - Информация о фирмах товарах и услугах, круглосуточно и бесплатно</a></p>
	<div> Обо всех замеченных ошибках просьба сообщать на info@008.ru
		 <br /> Copyright &copy; 1993 - 2015 008.ru. Все права защищены.</div>
	<br />



   <div class="by" style='float:right'>
            <a href="http://www.evodesign.ru" target="_blank">Разработка</a> - Эводизайн          </div>

	<?php if ($_SESSION['user']): ?>
	<div class=clear style='text-align:right'>
	[<a href='/system/'>system</a>]
	[<a href='?XDEBUG_PROFILE'>profile</a>] (<a href='?XCACHE_DUMP=1'>cache hits/misses</a>:(<a onclick='$.get("/admin/ajax/resetcache/");' omouseover='$(this).css(\"cursor\":\"pointer\");'>clear</a>) <?=intval($app->info['cache_hits']);?>/<?=intval($app->info['cache_misses']);?> dbtime: <?=sprintf("%.4f", $app->system['totalDBtime']);?> <a href='?SHOW_SQL=1'>numq:<?=$app->system['db_querys'];?></a> ]
	[<a href='?CLEAR_CACHE=1'>disable cache</a>] <a href='/memcached/'>memcached</a> <a href='/xcache/'>xcache</a> <a href='/webgrind/'>webgrind</a>
	<a href='/dminer.php'>adminer</a>
	</div>
	<?php endif;?>

	<?php if ($js): ?>
		<script type="text/javascript">
		<?=$js;?>
		</script>
	<?php endif;?>

	<script type="text/javascript" src="/assets/js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery/jquery.cross-slide.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/js/jquery.cookie.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/highslide-full.packed.js" type='text/javascript'></script>
	<script type="text/javascript" src="/assets/js/jquery.pickmeup.min.js"></script>
	<script type="text/javascript" src="/assets/js/share.js" charset="utf-8"></script>
	<script type="text/javascript" src="/assets/js/core.js?v=<?=Core::get_file_ver("assets/js/core.js");?>"></script>

	<script type="text/javascript">new Ya.share({'element':'yashare','image':'http://www.008.ru/content/logos/i4254.gif','description':'Официальный дилер Nissan (Ниссан). Продажа автомобилей Nissan (Ниссан). Ремон...','elementStyle': {'type': 'link','linkIcon': true,'border': false, 'quickServices': ['vkontakte','lj','yaru','facebook','twitter','odnoklassniki','moimir','moikrug','yazakladki','greader']},'popupStyle': {'copyPasteField': false}});
	</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33909789 = new Ya.Metrika({
                    id:33909789,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33909789" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t17.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
	<!-- gen: <?=sprintf("%.2f", (microtime_float() - $GLOBALS['StartTime']));?> db: <?=$app->system['db_querys'];?> -->
	</body>
</html>