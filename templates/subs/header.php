<!doctype html>
<html lang="ru">

<head>
   <title><?=$title;?></title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="<?=$keywords;?>" />
   <meta name="description" content="<?=$description;?>" />
   <meta name="author" content="Evodesign Internet Promotion Company (http://www.evodesign.ru/) (c) 2015" />
   <meta name="owner" content="http://www.008.ru/" />
   <meta name="robots" content="index,all" />
   <meta name="revisit-after" content="1 days" />

   <link rel="icon" href="/favicon.ico" type="image/x-icon" />
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
   <link href="/assets/css/main.css?v=<?=Core::get_file_ver("assets/css/main.css");?>" type="text/css" rel="stylesheet" />
   <link href="/it_sites/008.ru/templates/css/highslide.css" rel="stylesheet" type="text/css" />
   <link href="/it_sites/008.ru/templates/css/scrollable-hor.css" type="text/css" rel="stylesheet" />
   <link href="/it_sites/008.ru/templates/css/scrollable-navig.css" type="text/css" rel="stylesheet" />
   <link rel="stylesheet" href="/assets/css/pickmeup.min.css" type="text/css" />



   <script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
</head>

<body>
   <div class="zoom <?=$_SERVER['REQUEST_URI'] == '/' ? 'home' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/catalog/') ? 'catalog' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/discount/') ? 'discount' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/phonecodes/') ? 'phonecodes' : '';?>">
      <div id="top_tels" class="noprint">
         <b>Звоните!</b> Санкт-Петербург &mdash; тел. <span>008</span> | Другие регионы &mdash; <span>(812) 702-4846</span>
      </div>
      <div id="top_icons" class="noprint">
         <ul>
            <li>
               <a name="top"></a>
            </li>
            <li>
               <a href="/"><img src="/itlib/boolets/home_gr1.gif" alt="Главная страница" width="11" height="11" border="0" /></a>
            </li>
            <li>
               <a id="print_version" style="print:block;" href="javascript:Print.toPrintLayout();" target="_self"><img src="/itlib/boolets/print.gif" alt="Версия для печати" width="11" height="11" border="0" /></a>
            </li>
            <li>
               <a href="/feedback/"><img src="/itlib/boolets/mailto.gif" alt="Отправить письмо" width="10" height="7" border="0" style="margin-top:3px" /></a>
            </li>
            <li class="end">
               <span class="date"><?php echo mb_convert_case(strftime('%A, %e %B %Y'), MB_CASE_TITLE, "UTF-8"); ?></span>
            </li>
         </ul>
      </div>
      <div class="clear"></div>
      <div style="height:80px;overflow:hidden">
         <div id="logo" class="noprint">
            <a href="/"><img src="/images/<?=$_SERVER['REQUEST_URI'] == '/' ? '/' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/catalog/') ? 'catalog/' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/discount/') ? 'discount/' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/phonecodes/') ? 'phonecodes/' : '';?>logo.png" alt="Справочная информация по фирмам, товарам, услугам Санкт-Петербурга" name="logo" border="0" /></a>
         </div>
         <div class="ilogos ilogos_top noprint">
            <div class="adv1 fll" style="" id="adv1_1">
               <a href='/count/adv1_1/?<?=$advert['adv1_1']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_1']['src'];?>'></a>
            </div>
            
            <?if($advert['adv2_1']['src']):?>
            <?php if (strstr($advert['adv2_1']['src'], ".swf")): ?>
				<div style='text-align:center;float:left'>
				<object type="application/x-shockwave-flash"  width="468" height="60"
			      data="<?=$advert['adv2_1']['src'];?>" >
			      <param name="flashvars" value="link1=http://<?=$_SERVER['HTTP_HOST'];?>/count/adv2_1/?<?=$advert['adv2_1']['url'];?>">
			      <param name="allowscriptaccess" value="always">
			      <param name="quality" value="high">
			   </object>
				</div>
			   <?php else: ?>
				 <div class="adv2 fll" style="" id="adv2_1">
               <a target="_blank" href='/count/adv2_1/?<?=$advert['adv2_1']['url'];?>'><img width="468" height="60" border="0" src='<?=$advert['adv2_1']['src'];?>'></a>
            </div>
				<?php endif;?>
            <?else:?>
            <?if(isAdminIp()):?>
            <div style='text-align:center;float:left'>
            <div style='border:1px solid red;width:100px;display:inline'>
            <img width=400 height=55 src=/assets/images/bannbg.jpg>
            </div>
            </div>
            <?else:?>
            <div style='text-align:center;float:left'>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:468px;height:60px"
                 data-ad-client="ca-pub-4970407537973355"
                 data-ad-slot="3843568022"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <?endif?>
            <?endif?>

            <div class="adv1 fll" style="" id="adv1_2">
               <a href='/count/adv1_2/?<?=$advert['adv1_2']['url'];?>'><img width="100" height="60" border="0" src='<?=$advert['adv1_2']['src'];?>'></a>
            </div>
            <div class="clear"></div>
         </div>
		<div id="logodesc" class="noprint"><a href="/">Справочная служба успешного бизнеса</a></div>
		<div id="logobp" class="b-color noprint">
			<div>
				<div class="bp"><a href="/">БИЗНЕС-ПОРТАЛ</a></div>
			</div>
		</div>


      </div>
	  <?php /*<div id="logodesc-more" class="noprint"><b>Круглосуточно</b> тел. <span class="span-phone">008</span> - из Санкт-Петербурга<br />из других регионов <span class="span-phone">(812) 702-4846</span></div>*/;?>

      <div class="noprint">
         <table border="0" cellpadding="0" cellspacing="0" id="catalogs">
            <tr>
               <td class="item <?=$_SERVER['REQUEST_URI'] == '/' ? 'sel' : '';?> home"><a href="/">Главная</a></td>
               <td class="item <?=strstr($_SERVER['REQUEST_URI'], '/catalog/') ? 'sel' : '';?> catalog"><a href="/catalog/">Каталог</a></td>
               <td class="item <?=strstr($_SERVER['REQUEST_URI'], '/discount/') ? 'sel' : '';?> discount"><a href="/discount/">Акции и скидки</a></td>
               <td class="item <?=strstr($_SERVER['REQUEST_URI'], '/phonecodes/') ? 'sel' : '';?> phonecodes"><a href="/phonecodes/">Телефонные коды</a></td>
               <td class="item  addnew"><a href="/feedback/request/">Добавить компанию</a></td>
               <td class="m1_long">&nbsp;</td>
            </tr>
         </table>
      </div>
      <div id="itsearch" class="noprint"><img style="position:absolute;" src="/images<?=strstr($_SERVER['REQUEST_URI'], '/catalog/') ? '/catalog' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/discount/') ? '/discount' : '';?><?=strstr($_SERVER['REQUEST_URI'], '/phonecodes/') ? '/phonecodes' : '';?>/search_left.jpg"
         alt="" width="192" height="193" border="0" />
         <div id="dropugol">
            <div class="iright">
               <div id="head_box">
                  <div id="searchform">
                     <form id="fsearch" name="form1" method="get" action="/search/">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                              <td>
                                 <input name="what" type="text" class="what" id="what" value='<?=empty($key) ? "Что искать? Введите" : trim(urldecode($key));?>' autocomplete="off" />
                                 <div class="comment"><span class="example">Например:</span><span class="sample">мебель из массива</span>,
                                    <span class="sample">доставка суши</span>, <span class="sample">автомобиль в кредит</span>,
                                    <span class="sample">вагонка</span></div>
                              </td>
                              <td width="60">
                                 <input id="gosearch" name="submit" type="submit" class="search" disabled value="Найти" />
                              </td>
                           </tr>
                        </table>

                        <?php if ($inrubric): ?>
                           <div style="float:left">
                              <label>
                                 <input name="inrubric" id='inrubric' type="checkbox" value="yes">Искать в рубрике</label>
                           </div>
                           <?php endif;?>
                     </form>
                     <div id="breadcrumb">
                        <div>
                           <b>Навигатор:</b> <a title="Круглосуточная телефонная справочная служба 008" href="/">008.ru</a>
                           <?php foreach ($bread as $b): ?>
                              /
                              <a href='<?=$b[' link '];?>'>
                                 <?=$b['name'];?>
                              </a>
                              <?php endforeach;?>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <div class="noprint">
         <div class="div_menu">

            <ul id="topmenu">
               <li class="l"><a href="/info/101/">О компании</a></li>
               <li class="l"><a href="/info/102/">Тарифы 008</a></li>
               <li class="l"><a href="/adv/">Реклама на портале</a></li>
               <li class="l"><a href="/info/iprice/">Пакеты услуг</a></li>
               <li class="l"><a href="/contacts/">Контакты</a></li>

               <li class="r"><a href="/info/103/">Пользователям - легко</a></li>
               <li class="r"><a href="/info/104/">Компаниям - выгодно</a></li>
            </ul>
         </div>
      </div>
      <div>

      </div>
      <a name="top"></a>
