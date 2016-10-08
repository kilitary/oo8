<?

$img_places["adv3_1"]["items"] = array();
$img_places["adv3_2"]["items"] = array();

$img_places["adv2_1"]["items"] = array();
$img_places["adv2_2"]["items"] = array();



global $alow_ip;
if(!in_array($_SERVER["REMOTE_ADDR"],$alow_ip) || $_SERVER["REMOTE_ADDR"]=="188.134.1.193") {
	$img_places["adv4_1"]['default'][] ='google.adsense.yandex.direct.240x400'; //google.adsense.240x400
	$img_places["adv4_2"]['default'][] ='yandex.direct.240x400';//''; //yandex.direct.240x400
	$img_places["adv3_2"]['default'][] ='yandex.direct.3.2'; //google.adsense.468x60
	$img_places["adv3_1"]['default'][] ='google.adsense.468x60'; //google.adsense.468x60 yandex.direct.3.1
	//$img_places["adv3_1"]['default'][] ='google.adsense.468x60';
	
	$img_places["adv2_1"]['default'][] ='google.adsense.468x60x2';
	$img_places["adv2_2"]['default'][] ='google.adsense.468x60x2';
	
} else {
$img_places["adv4_1"]['default'] = array();
$img_places["adv4_1"]['default'][] = '008x240x400-skidka40.swf';//'008_240x400x1-elit.jpg'; //'008_240x400x2-20let.gif';

$img_places["adv4_2"]['default'] = array();
$img_places["adv4_2"]['default'][] ='008x240x400-skidka40.swf';// '008_240x400x1-elit.jpg'; //'008_240x400x2-20let.gif'; //008x240x400-leto50.swf
}

// google 240 x 400 + yandex 240 x 400 -------------------------------------------------------------
$img_name = "google.adsense.yandex.direct.240x400";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adv240x400 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:240px;height:400px"
     data-ad-client="ca-pub-6870373552676285"
     data-ad-slot="4600593259"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- Яндекс.Директ -->
<div style="margin:30px 0 0 -10px; width:250px; position:relative;">
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 131076;
yandex_site_bg_color = 'FFFFFF'; //фон сайта, замените цвет переменной если сайт имеет темный фон
yandex_ad_format = 'direct';
yandex_font_size = 1.1; //Размер шрифта в блоке. По желанию можно увеличить или уменьшить
yandex_direct_type = 'posterVertical'; //Вид блока под статьей лучше выбрать плоский (flat) или горизонтальный (horizontal) | posterVertical
yandex_direct_limit = 4; //Количество объявлений в блоке.
yandex_direct_title_font_size = 2; //Размер шрифта заголовков объявлений. Может принимать значение 1, 2 или 3
yandex_direct_title_color = 'CC0000'; //Цвет заголовка объявлений
yandex_direct_url_color = '000000'; //Цвет домена рекламодателя
yandex_direct_text_color = '000000'; //Цвет текста объявлений
yandex_direct_hover_color = 'FF0000'; //Цвет заголовка объявлений при наведении курсора
yandex_direct_favicon = true; //включаем отображения фавиконов объявлений
yandex_no_sitelinks = true; //отключаем быстрые ссылки
document.write('<sc'+'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc'+'ript>');
//]]>
</script>
</div>
HTML;


// google 240 x 400 ---------------------------------------------------------------------------------
$img_name = "google.adsense.240x400";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adv240x400 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:240px;height:400px"
     data-ad-client="ca-pub-6870373552676285"
     data-ad-slot="4600593259"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
HTML;
// google 468 x 60 ----------------------------------------------------------------------------------
$img_name = "google.adsense.468x60";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div style="margin:10px auto; width:468px">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adv468x60x1style -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-6870373552676285"
     data-ad-slot="7838404459"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
HTML;
// /google 469 x 60 ---------------------------------------------------------------------------------

// google 468 x 60 x2  ------------------------------------------------------------------------------
$img_name = "google.adsense.468x60x2";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div class="adv2 fll">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adv468x60x1style -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-6870373552676285"
     data-ad-slot="7838404459"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
HTML;
// /google 469 x 60 ---------------------------------------------------------------------------------

// google 728 x 90 ----------------------------------------------------------------------------------
$img_name = "google.adsense.728x90";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div style="margin:10px auto; width:728px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- adv5x728x90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6870373552676285"
     data-ad-slot="6066156853"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
HTML;

// Яндекс.Директ 240x400 -----------------------------------------------------------------------------------
$img_name = "yandex.direct.240x400";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div style="width:260px; margin-left:-10px;">
<!-- Яндекс.Директ -->
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 131076;
yandex_site_bg_color = 'FFFFFF'; //фон сайта, замените цвет переменной если сайт имеет темный фон
yandex_ad_format = 'direct';
yandex_font_size = 1.1; //Размер шрифта в блоке. По желанию можно увеличить или уменьшить
yandex_direct_type = 'posterVertical'; //Вид блока под статьей лучше выбрать плоский (flat) или горизонтальный (horizontal)
yandex_direct_limit = 4; //Количество объявлений в блоке.
yandex_direct_title_font_size = 2; //Размер шрифта заголовков объявлений. Может принимать значение 1, 2 или 3
yandex_direct_title_color = 'CC0000'; //Цвет заголовка объявлений
yandex_direct_url_color = '000000'; //Цвет домена рекламодателя
yandex_direct_text_color = '000000'; //Цвет текста объявлений
yandex_direct_hover_color = 'FF0000'; //Цвет заголовка объявлений при наведении курсора
yandex_direct_favicon = true; //включаем отображения фавиконов объявлений
yandex_no_sitelinks = true; //отключаем быстрые ссылки
document.write('<sc'+'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc'+'ript>');
//]]>
</script>
</div>
HTML;
// Яндекс.Директ 3.1 -----------------------------------------------------------------------------------
$img_name = "yandex.direct.3.1";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div style="width:100%; margin-left:-10px;">
<!-- Яндекс.Директ -->
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 131076;
yandex_site_bg_color = 'FFFFFF'; //фон сайта, замените цвет переменной если сайт имеет темный фон
yandex_ad_format = 'direct';
yandex_font_size = 1.1; //Размер шрифта в блоке. По желанию можно увеличить или уменьшить
yandex_direct_type = 'horizontal'; //Вид блока под статьей лучше выбрать плоский (flat) или горизонтальный (horizontal)
yandex_direct_limit = 2; //Количество объявлений в блоке.
yandex_direct_title_font_size = 3; //Размер шрифта заголовков объявлений. Может принимать значение 1, 2 или 3
yandex_direct_title_color = '4f95cf'; //Цвет заголовка объявлений
yandex_direct_url_color = '000000'; //Цвет домена рекламодателя
yandex_direct_text_color = '000000'; //Цвет текста объявлений
yandex_direct_hover_color = 'FF0000'; //Цвет заголовка объявлений при наведении курсора
yandex_direct_favicon = true; //включаем отображения фавиконов объявлений
yandex_no_sitelinks = false; //отключаем быстрые ссылки
document.write('<sc'+'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc'+'ript>');
//]]>
</script>
</div>
HTML;
// Яндекс.Директ 3.2 -----------------------------------------------------------------------------------
$img_name = "yandex.direct.3.2";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML
<div class="sresi" style="width:100%; margin-left:-10px;">
<!-- Яндекс.Директ -->
<script type="text/javascript">
//<![CDATA[
yandex_partner_id = 131076;
yandex_site_bg_color = 'FFFFFF'; //фон сайта, замените цвет переменной если сайт имеет темный фон
yandex_ad_format = 'direct';
yandex_font_size = 1.1; //Размер шрифта в блоке. По желанию можно увеличить или уменьшить
yandex_direct_type = 'horizontal'; //Вид блока под статьей лучше выбрать плоский (flat) или горизонтальный (horizontal)
yandex_direct_limit = 1; //Количество объявлений в блоке.
yandex_direct_title_font_size = 3; //Размер шрифта заголовков объявлений. Может принимать значение 1, 2 или 3
yandex_direct_title_color = '4f95cf'; //Цвет заголовка объявлений
yandex_direct_url_color = '000000'; //Цвет домена рекламодателя
yandex_direct_text_color = '000000'; //Цвет текста объявлений
yandex_direct_hover_color = 'FF0000'; //Цвет заголовка объявлений при наведении курсора
yandex_direct_favicon = true; //включаем отображения фавиконов объявлений
yandex_no_sitelinks = false; //отключаем быстрые ссылки
document.write('<sc'+'ript type="text/javascript" src="http://an.yandex.ru/system/context.js"></sc'+'ript>');
//]]>
</script>
</div>
HTML;


/*
// -------------------------------------------------------------------------------------------------
//it adv2_1 --
$img_name = ""; //имя файла баннера
$img_places["adv2_1"]["items"][] = $img_name; //определям что баннер типа 2.1 указав adv2_1, возможные значения  adv1|adv2_1|adv2_2|adv3_1|adv3_2|adv4_1|adv4_2
$imgadv[$img_name]["url"] = "http://"; // ссылка перехода с баннера
$imgadv[$img_name]["type"] = "swf"; // swf|html|js|тип не указан -пустое значение
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = ""; //alt описание баннера
$imgadv[$img_name]["style"] = "background:#3d962e;"; //css атрибуты для контейнера баннера
$imgadv[$img_name]["dateon"] = '01.03.2011';
$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name; 
$img_places["adv2_1"]["urls"]["/catalog/*"][] = $img_name; // адреса для размещения баннеров, с указанием мета и рубрики
$img_places["adv2_1"]["urls"]["/discount/*"][] = $img_name;
*/


/*
//it Триколор --
$img_name = "r1938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1938/";
$imgadv[$img_name]["alt"] = "Триколор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Триколор --
$img_name = "r1938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1938/";
$imgadv[$img_name]["alt"] = "Триколор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Триколор --
$img_name = "r1938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1938/";
$imgadv[$img_name]["alt"] = "Триколор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Свадар 19.11.2015--
$img_name = "r8808.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8808/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский психотерапевтический центр Свадар";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/addictions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ИНКЛИНИК 19.11.2015--
$img_name = "r29273.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29273/";
$imgadv[$img_name]["alt"] = "ИНКЛИНИК клиника современной медицины";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/alternative/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Студия Беляевой  19.11.2015--
$img_name = "r29262.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29262/";
$imgadv[$img_name]["alt"] = "Студия эстетической стоматологии и косметологии Беляевой Ирины";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Новогодний подарок 11.11.2015 --
$img_name = "newyeargift-240х400.gif";
$imgadv[$img_name]["url"] = "http://expogift.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/jewels/*"][] = $img_name;
// 11.11.2015 13.11.2015---
$img_name = "newyeargift-468x60.gif";
$imgadv[$img_name]["url"] = "http://expogift.ru/";
$imgadv[$img_name]["alt"] = "Новогодний подарок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/rest/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/jewels/"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Теплопит 11.11.2015 --
$img_name = "r29268.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29268/";
$imgadv[$img_name]["alt"] = "Теплопит Кварцевые обогреватели";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/systems/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус 09.11.2015--
$img_name = "r29261.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29261/";
$imgadv[$img_name]["alt"] = "Нотариус Сафари Виктория Витальевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус 09.11.2015--
$img_name = "r29259.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29259/";
$imgadv[$img_name]["alt"] = "Нотариус Тарантова Ольга Николаевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус 09.11.2015--
$img_name = "r29260.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29260/";
$imgadv[$img_name]["alt"] = "Нотариус Шарапова Надежда Васильевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эрарта 09.11.2015--
$img_name = "r15467.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/15467/";
$imgadv[$img_name]["alt"] = "Музей и галереи современного искусства Эрарта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/museums/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Поликлиника 03.11.2015 --
$img_name = "r4352.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4352/";
$imgadv[$img_name]["alt"] = "АНО Поликлиника Петербургского метрополитена";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/polyclinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Парус 03.11.2015--
$img_name = "r29243.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29243/";
$imgadv[$img_name]["alt"] = "Парус Химчистка и прачечная";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it БалтРеаМед 30,10,2015--
$img_name = "r29257.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29257/";
$imgadv[$img_name]["alt"] = "Балтийские реабилитационные технологии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/rehabilitation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Апексмед 30,10,2015--
$img_name = "r29255.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29255/";
$imgadv[$img_name]["alt"] = "Апексмед Многопрофильная клиника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр Курёхина 30,10,2015--
$img_name = "r29251.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29251/";
$imgadv[$img_name]["alt"] = "Центр современного искусства им. Сергея Курёхина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Глиссада 30,10,2015--
$img_name = "r29252.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29252/";
$imgadv[$img_name]["alt"] = "Агентство по продаже билетов Глиссада";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tickets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мед-Аудио 30,10,2015--
$img_name = "r28681.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28681/";
$imgadv[$img_name]["alt"] = "Центр слухопротезирования Мед-Аудио";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Astrum 30,10,2015--
$img_name = "r29250.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29250/";
$imgadv[$img_name]["alt"] = "Astrum";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/cosmetics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Юнирум 30,10,2015--
$img_name = "r190.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/190/";
$imgadv[$img_name]["alt"] = "Выставка-магазин детской мебели Юнирум";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/children/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магазин квартир 22.09.2015 19.11.2015--
/*$img_name = "magazinkvartir-468x60.gif";
$imgadv[$img_name]["url"] = "http://exposfera.spb.ru/magazin_kvartir/";
$imgadv[$img_name]["alt"] = "Магазин доступных квартир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/realestate/"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;

//it Магазин квартир 26,10,2015 19.11.2015--
$img_name = "magazinkvartir-240x400-29107.gif";
$imgadv[$img_name]["url"] = "http://exposfera.spb.ru/magazin_kvartir/";
$imgadv[$img_name]["type"] = "gif";
$imgadv[$img_name]["alt"] = "Магазин квартир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/realestate/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Северный текстиль 21.10.2015--
$img_name = "r22000.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22000/";
$imgadv[$img_name]["alt"] = "Северный текстиль";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sewing/fabrics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it университет 21.10.2015--
$img_name = "r6441.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6441/";
$imgadv[$img_name]["alt"] = "Петербургский государственный университет путей сообщения Императора Александра I";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/universities/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ДЭМИ 16.10.2015--
$img_name = "r29238.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29238/";
$imgadv[$img_name]["alt"] = "Детская мебель ДЭМИ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЛЮВС 16.10.2015--
$img_name = "r29235.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29235/";
$imgadv[$img_name]["alt"] = "ЛЮВС";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/polygraphic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Захарова 03.10.2015 --
$img_name = "r29207.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29207/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ательета 03.10.2015 --
$img_name = "r29200.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29200/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Рассошко 03.10.2015 --
$img_name = "r29198.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29198/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Победа Сервис 30.09.2015 --
$img_name = "r562.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/562/";
$imgadv[$img_name]["alt"] = "Победа Сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housetech/717/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Здоровый образ жизни 30.09.2015, 03.11.2015 --
/*$img_name = "zozh-240x400-29178.gif";
$imgadv[$img_name]["url"] = "http://www.zozh-expo.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/health/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it РИДО 30.09.2015 --
$img_name = "rido240x400-29195.gif";
$imgadv[$img_name]["url"] = "http://trends.lenexpo.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/advertising/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/advertising/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Тело человека 28.09.2015 --
$img_name = "r29146.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29146/";
$imgadv[$img_name]["alt"] = "Тело человека";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Полякова 28.09.2015 --
$img_name = "r29186.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29186/";
$imgadv[$img_name]["alt"] = "Нотариус Полякова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Пальто Елена 28.09.2015 --
$img_name = "r29191.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29191/";
$imgadv[$img_name]["alt"] = "Пальто Елена";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/clothes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ветеринарный центр Тосно 28.09.2015 --
$img_name = "r29190.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29190/";
$imgadv[$img_name]["alt"] = "Ветеринарный центр Тосно";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Aesthetic 22.09.2015 09.11.2015--
/*$img_name = "aestetic_468х60.gif";
$imgadv[$img_name]["url"] = "http://www.aestheticmed.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "Aesthetic";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/health/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Здоровый образ жизни 22.09.2015 03.11.2015--
/*$img_name = "zozh-468x60-29178.gif";
$imgadv[$img_name]["url"] = "http://www.zozh-expo.ru/";
$imgadv[$img_name]["alt"] = "Здоровый образ жизни";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/health/"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Послание к человеку 18.09.2015 --
/*$img_name = "poslanie-468x60-29136.gif";
$imgadv[$img_name]["url"] = "http://message2man.com/";
$imgadv[$img_name]["alt"] = "Послание к человеку";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ленкай 18.09.2015 --
$img_name = "r29185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29185/";
$imgadv[$img_name]["alt"] = "Спортивный клуб айкидо и дзюдо Ленкай";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/activities/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Выставка 18.09.2015 --
$img_name = "r29107.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29107/";
$imgadv[$img_name]["alt"] = "Выставка Магазин доступных квартир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Лаваш 18.09.2015 --
$img_name = "r29184.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29184/";
$imgadv[$img_name]["alt"] = "Кафе Лаваш";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус 18.09.2015 --
$img_name = "r7188.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7188/";
$imgadv[$img_name]["alt"] = "Нотариус Выщепан Татьяна Борисовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/estate/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мир здоровья 18.09.2015 --
$img_name = "r3476.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3476/";
$imgadv[$img_name]["alt"] = "Медицинский центр Мир здоровья";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Фирма Олимп и Ко 18.09.2015 19.11.2015 --
/*$img_name = "r3745.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3745/";
$imgadv[$img_name]["alt"] = "Фирма Олимп и Ко";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/floorings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it WebDush 18.09.2015 --
$img_name = "r21856.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21856/";
$imgadv[$img_name]["alt"] = "Интернет-магазин сантехники WebDush";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/sanitary/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ИНТЕРТОРГ 18.09.2015 --
$img_name = "r15622.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/15622/";
$imgadv[$img_name]["alt"] = "ИНТЕРТОРГ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/glass/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it GOLDPHONE 15.09.2015 --
$img_name = "r29181.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29181/";
$imgadv[$img_name]["alt"] = "GOLDPHONE Сервисный центр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/electronics/repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Евразия 15.09.2015 --
$img_name = "r29171.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29171/";
$imgadv[$img_name]["alt"] = "Культурно-выставочный центр Евразия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Гарант СПб 15.09.2015 --
$img_name = "r29175.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29175/";
$imgadv[$img_name]["alt"] = "Гарант СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/equipment/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Groom Dog Зоосалон 15.09.2015 --
$img_name = "r29176.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29176/";
$imgadv[$img_name]["alt"] = "Groom Dog Зоосалон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/grooming/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Элвет 15.09.2015 --
$img_name = "r4061.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4061/";
$imgadv[$img_name]["alt"] = "Сеть ветклиник и зоомагазинов Элвет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Белек 15.09.2015 --
$img_name = "r29179.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29179/";
$imgadv[$img_name]["alt"] = "Меховой салон-ателье Белек";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Капелла 15.09.2015 --
$img_name = "r29170.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29170/";
$imgadv[$img_name]["alt"] = "Капелла Таврическая";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/concerts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ИнтерПолисКолледж 15.09.2015 --
$img_name = "r27434.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27434/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский полицейский колледж ИнтерПолисКолледж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/colleges/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Оптик-Лайт 10.09.2015 --
$img_name = "r29167.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29167/";
$imgadv[$img_name]["alt"] = "Оптик-Лайт - магазин-салон и интернет-магазин товаров и услуг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/glasses/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицина Петербурга 10.09.2015--
$img_name = "r244.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/244/";
$imgadv[$img_name]["alt"] = "Медицина Петербурга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Праздник мечты 10.09.2015--
$img_name = "r29154.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29154/";
$imgadv[$img_name]["alt"] = "Праздник мечты - Торты на заказ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/food/pastry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it БасКомплект 10.09.2015 --
$img_name = "r29172.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29172/";
$imgadv[$img_name]["alt"] = "БасКомплект Фабрика переоборудования микроавтобусов и минивэнов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Выставка Строим дом 15.09.2015, 21,10,2015 --
/*$img_name = "stroimdom468x60.gif";
$imgadv[$img_name]["url"] = "http://exposfera.spb.ru/building_a_house/";
$imgadv[$img_name]["alt"] = "Выставка Строим дом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/furniture/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housing/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Праздник мечты 08.09.2015 --
$img_name = "r29156.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29156/";
$imgadv[$img_name]["alt"] = "Агентство по организации и проведению праздников Праздник мечты";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Праздник мечты 08.09.2015 --
$img_name = "r29155.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29155/";
$imgadv[$img_name]["alt"] = "Праздник мечты - Организация детских праздников";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Керама Марацци 08.09.2015 --
$img_name = "kerama240x400-4316.gif";
$imgadv[$img_name]["url"] = "http://spb.kerama-marazzi.com/ru/";
$imgadv[$img_name]["type"] = "gif";
$imgadv[$img_name]["alt"] = "Керама Марацци";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/4316/*"][] = $img_name;

//$img_name = "kerama468x60-4316.gif"; 
/*$img_name = "keramamaracci-semp-468x60-4316.gif";
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.kerama-marazzi.com/ru/";
$imgadv[$img_name]["alt"] = "Керама Марацци";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дентал Экспо 08.09.2015, 03.11.2015 --
/*$img_name = "dentalexpo-468x60-29166.gif";
$imgadv[$img_name]["url"] = "http://www.dentalexpo-spb.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "Дентал Экспо";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фармация 08.09.2015 21.10.2015--
/*$img_name = "pharmacy-468x60-29145.gif";
$imgadv[$img_name]["url"] = "http://www.pharmaexpo.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "Фармация";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it HealthMedical 08.09.2015 21.10.2015--
/*$img_name = "healthmedical-468x60.gif";
$imgadv[$img_name]["url"] = "http://www.healthtourism-expo.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "HealthMedical";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ДельфинТех 08.09.2015 --
$img_name = "r29159.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29159/";
$imgadv[$img_name]["alt"] = "ДельфинТех";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/electrical/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Aesthetic 08.09.2015, 21.10.2015 --
/*$img_name = "aestetic_468х60.gif";
$imgadv[$img_name]["url"] = "http://www.aestheticmed.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "Aesthetic";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дефектоскопия/NDT St. Petersburg 08.09.2015 --
/*$img_name = "defectoskopiya468x60-29045.gif";
$imgadv[$img_name]["url"] = "http://www.ndt-defectoscopy.ru/?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/equipment/"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it DIVA DANCE --
$img_name = "r29137.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29137/";
$imgadv[$img_name]["alt"] = "Танцевальная студия DIVA DANCE";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/dance/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Северпромснаб --
$img_name = "r9787.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9787/";
$imgadv[$img_name]["alt"] = "Северпромснаб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/machinery-rent/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СМ-Клиника --
$img_name = "r3838.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3838/";
$imgadv[$img_name]["alt"] = "СМ-Клиника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/748/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дом мебели Нарвский --
/*
$img_name = "nevberega240x400-beauty-health.gif";
$imgadv[$img_name]["url"] = "http://tickets.nevberega.ru/ticketreq?ref=377";
$imgadv[$img_name]["type"] = "gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/health/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/rest/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ателье --
$img_name = "r26668.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26668/";
$imgadv[$img_name]["alt"] = "Ателье в Кудрово";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Выставка Строим дом 26,10,2015--
/*$img_name = "stroimdom240x400-29053.gif";
$imgadv[$img_name]["url"] = "http://exposfera.spb.ru/building_a_house/";
$imgadv[$img_name]["type"] = "gif";
$imgadv[$img_name]["alt"] = "Выставка Строим дом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/29053/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ветсовет --
$img_name = "r29088.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29088/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника Ветсовет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Муринское кладбище --
$img_name = "r3695.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3695/";
$imgadv[$img_name]["alt"] = "Муринское кладбище";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Каравелла --
$img_name = "r29089.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29089/";
$imgadv[$img_name]["alt"] = "Каравелла";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/media/tv/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r8360.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8360/";
$imgadv[$img_name]["alt"] = "Нотариус Ульянова Елена Сергеевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ленплитка --
$img_name = "r29106.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29106/";
$imgadv[$img_name]["alt"] = "Ленплитка";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/tile/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мохнатая лапа --
$img_name = "r29083.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29083/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника Мохнатая лапа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Зоомир --
$img_name = "r29048.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29048/";
$imgadv[$img_name]["alt"] = "Ветеринарный центр Зоомир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/pharmacy/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Строим дом --
$img_name = "r29053.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29053/";
$imgadv[$img_name]["alt"] = "Выставка Строим дом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Манеж --
$img_name = "r29061.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29061/";
$imgadv[$img_name]["alt"] = "Малый зал ЦВЗ Манеж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Здоровый век --
$img_name = "r29049.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29049/";
$imgadv[$img_name]["alt"] = "Медицинский центр Здоровый век";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/702/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it РегСоюз --
$img_name = "r29064.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29064/";
$imgadv[$img_name]["alt"] = "Юридическая компания РегСоюз";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/organizations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр регистрации бизнеса --
$img_name = "r29066.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29066/";
$imgadv[$img_name]["alt"] = "Центр регистрации бизнеса";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/organizations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дом мебели Нарвский --
$img_name = "tabouret240x400-27967.swf";
$imgadv[$img_name]["url"] = "http://www.letabouret.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Версо --
$img_name = "r29063.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29063/";
$imgadv[$img_name]["alt"] = "Бюро путешествий Версо";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/tickets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Василеостровская клиника --
$img_name = "r29059.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29059/";
$imgadv[$img_name]["alt"] = "Василеостровская клиника репродукции и генетики";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/742/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r29062.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29062/";
$imgadv[$img_name]["alt"] = "Нотариус Леонова Валентина Иосифовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Лилия --
$img_name = "r29079.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29079/";
$imgadv[$img_name]["alt"] = "Прачечная Лилия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Блеск --
$img_name = "r4440.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4440/";
$imgadv[$img_name]["alt"] = "Химчистка Блеск";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инарис --
$img_name = "r4383.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4383/";
$imgadv[$img_name]["alt"] = "Инарис-сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housetech/716/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it юридическое агентство --
$img_name = "r29065.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29065/";
$imgadv[$img_name]["alt"] = "Первое юридическое агентство";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/organizations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it служба вскрытия дверей и замков --
$img_name = "r29058.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29058/";
$imgadv[$img_name]["alt"] = "Экстренная служба вскрытия дверей и замков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/emergency/opening-doors/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Песчаный грот --
$img_name = "r3027.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3027/";
$imgadv[$img_name]["alt"] = "Сауны и бани Песчаный грот";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Уника --
$img_name = "r29054.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29054/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Уника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эйлур --
$img_name = "r29056.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29056/";
$imgadv[$img_name]["alt"] = "Клуб любителей кошек Эйлур";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/sale/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Алюмик --
$img_name = "r29055.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29055/";
$imgadv[$img_name]["alt"] = "Интернет-магазин алюминиевых интерьерных конструкций Алюмик";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/custom/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Группа Компаний АрТранс --
$img_name = "r29042.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29042/";
$imgadv[$img_name]["alt"] = "Группа Компаний АрТранс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Школьная страна --
/*$img_name = "schoolcountry-468x60.gif";
$imgadv[$img_name]["url"] = "http://school.expoforum.ru/?utm_source=008&utm_medium=banner&utm_content=468%D1%8560&utm_campaign=school15";
$imgadv[$img_name]["alt"] = "Школьная страна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Design decor 15.09.2015 --
/*$img_name = "designdecor468x60.gif";
$imgadv[$img_name]["url"] = "http://www.designdecor-expo.ru/ru-RU?utm_source=008&utm_medium=media&utm_campaign=barter";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/furniture/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housing/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it All Travel Stars --
$img_name = "r29043.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29043/";
$imgadv[$img_name]["alt"] = "ТрикоТуроператор All Travel Starsлор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Турагентство --
$img_name = "r29047.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29047/";
$imgadv[$img_name]["alt"] = "Турагентство на 5 линии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эвакуатор --
$img_name = "r29044.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29044/";
$imgadv[$img_name]["alt"] = "Авто Эвакуатор 24";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/emergency/evacuation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Пафос --
$img_name = "r3004.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3004/";
$imgadv[$img_name]["alt"] = "Туристический операторский центр Пафос";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автовыбор --
$img_name = "r29015.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29015/";
$imgadv[$img_name]["alt"] = "Автовыбор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/dismantling/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Друг --
$img_name = "r29038.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29038/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника Друг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ВикингСтройИнвест --
$img_name = "r29023.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29023/";
$imgadv[$img_name]["alt"] = "ВикингСтройИнвест";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вела --
$img_name = "r2891.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2891/";
$imgadv[$img_name]["alt"] = "Клиника Вела";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/742/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Рубикон --
$img_name = "r29019.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29019/";
$imgadv[$img_name]["alt"] = "Рубикон Памятники";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/miscellanea/749/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it А-Аренда Авто --
$img_name = "arenda-avto240x400-11849.gif";
$imgadv[$img_name]["url"] = "http://www.a-arenda-spb.ru/ ";
$imgadv[$img_name]["alt"] = "Компания А-Аренда Авто СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/11849/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр гомеопатии --
$img_name = "r4050.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4050/";
$imgadv[$img_name]["alt"] = "Центр гомеопатии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/alternative/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Альфатон --
$img_name = "r29000.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29000/";
$imgadv[$img_name]["alt"] = "Альфатон Санкт-Петербург";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ABC сервис --
$img_name = "r13505.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13505/";
$imgadv[$img_name]["alt"] = "ABC сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housetech/716/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Антиквариат --
$img_name = "r28990.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28990/";
$imgadv[$img_name]["alt"] = "Антиквариат, живопись, сувениры, подарки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/antique/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дом культуры Суздальский --
$img_name = "r28985.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28985/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургское государственное бюджетное учреждение Дом культуры Суздальский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/750/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it MedSwiss --
$img_name = "r28980.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28980/";
$imgadv[$img_name]["alt"] = "Многопрофильный медицинский центр MedSwiss";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вояж --
$img_name = "r2658.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2658/";
$imgadv[$img_name]["alt"] = "Канализационная аварийная служба Вояж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/emergency/cleaning/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Старина --
$img_name = "r28976.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28976/";
$imgadv[$img_name]["alt"] = "Комиссионный магазин Старина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/commission/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------

//it Stony Island Hotel --
$img_name = "r26640.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26640/";
$imgadv[$img_name]["alt"] = "Сеть отелей Stony Island Hotel";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТехноЭнерго --
$img_name = "r29014.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/29014/";
$imgadv[$img_name]["alt"] = "ТехноЭнерго";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/electro/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it 5 займов --
$img_name = "5-zaimov-468x60.jpg";
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://5zaimov.ru/tutzaim/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/finances/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Rulove.ru --
$img_name = "r28972.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28972/";
$imgadv[$img_name]["alt"] = "Сервис поиска людей, мест и событий Rulove.ru";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/introductions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АСЦ Точно в срок --
$img_name = "r28959.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28959/";
$imgadv[$img_name]["alt"] = "АСЦ Точно в срок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housetech/717/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Новый век --
$img_name = "r28962.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28962/";
$imgadv[$img_name]["alt"] = "Сеть пансионатов для пожилых людей Новый век";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Medical Clinic --
$img_name = "r28960.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28960/";
$imgadv[$img_name]["alt"] = "Medical Clinic";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/741/*"][] = $img_name;

$img_name = "medicalclinic240x400-28960.gif";
$imgadv[$img_name]["url"] = "http://www.mclinica.ru/ ";
$imgadv[$img_name]["alt"] = "Medical Clinic";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/28960/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Газа --
$img_name = "r27453.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27453/";
$imgadv[$img_name]["alt"] = "Дворец культуры и техники имени И.И. Газа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/concerts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания LPG Group --
$img_name = "r26690.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26690/";
$imgadv[$img_name]["alt"] = "Компания LPG Group";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/gas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сеть магазинов Антенный супермаркет --
$img_name = "r3803.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3803/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Антенный супермаркет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/communication/tv-aerials/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Клиника Medilife --
$img_name = "r28913.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28913/";
$imgadv[$img_name]["alt"] = "Клиника Medilife";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r18156.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18156/";
$imgadv[$img_name]["alt"] = "Нотариус Кузнецова Татьяна Анатольевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it БУтик --
$img_name = "r28948.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28948/";
$imgadv[$img_name]["alt"] = "БУтик БЫТОВОЙ ТЕХНИКИ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/salvaging/recycling/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r24347.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24347/";
$imgadv[$img_name]["alt"] = "Нотариус Муравлева Маргарита Васильевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Своя усадьба 19.11.2015--
/*$img_name = "r28947.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28947/";
$imgadv[$img_name]["alt"] = "Ландшафтное бюро Своя усадьба";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/land/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Все цветы.ru --
$img_name = "r28922.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28922/";
$imgadv[$img_name]["alt"] = "Все цветы.ru";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/flowers/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Санаторий --
$img_name = "r4213.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4213/";
$imgadv[$img_name]["alt"] = "Санаторий Черная речка";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/resorts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мой зубной --
$img_name = "r28926.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28926/";
$imgadv[$img_name]["alt"] = "Стоматологические центры Мой зубной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стар-Д --
$img_name = "r28921.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28921/";
$imgadv[$img_name]["alt"] = "Станция технического обслуживания Стар-Д";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ФаберДент --
$img_name = "r28920.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28920/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника ФаберДент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сакура --
$img_name = "sakura240x400-13180-heading.gif";
$imgadv[$img_name]["url"] = "http://www.4588888.ru/";
$imgadv[$img_name]["alt"] = "Сакура Доставка суши";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Климат Авто --
$img_name = "r8898.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8898/";
$imgadv[$img_name]["alt"] = "Сервисный центр Климат Авто";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СПб ГБОУ СПО --
$img_name = "r2289.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2289/";
$imgadv[$img_name]["alt"] = "СПб ГБОУ СПО Санкт-Петербургский техникум библиотечных и информационных технологий";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/colleges/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ателье Авангард --
$img_name = "r17320.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17320/";
$imgadv[$img_name]["alt"] = "Ателье Авангард";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Клиника Громовой 26,10,2015--
$img_name = "r28361.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28361/";
$imgadv[$img_name]["alt"] = "Клиника Громовой - Центр интегральной медицины";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/alternative/*"][] = $img_name;
//it Проксимед --
$img_name = "r28244.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28244/";
$imgadv[$img_name]["alt"] = "Клиника Проксимед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АСК-АВТО --
$img_name = "r28912.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28912/";
$imgadv[$img_name]["alt"] = "АСК-АВТО";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
//it MOLLI --
$img_name = "r8902.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8902/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника доктора Кара Савелия Петровича MOLLI";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ветико --
$img_name = "r24331.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24331/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника Ветико";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Помидор --
$img_name = "pomidor240х400-28879.gif";
$imgadv[$img_name]["url"] = "http://pomidorprint.ru/";
$imgadv[$img_name]["alt"] = "Рекламная типография Помидор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/28879/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЭДС --
$img_name = "r28881.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28881/";
$imgadv[$img_name]["alt"] = "ЭДС - Электродвижущая Сила";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/machinery-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ринтек 30,10,2015--
/*$img_name = "r28889.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28889/";
$imgadv[$img_name]["alt"] = "Ортопедическая студия Ринтек";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/orthopedic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it СПб технологии --
$img_name = "r28890.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28890/";
$imgadv[$img_name]["alt"] = "СПб технологии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/street/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инвасервис --
$img_name = "r28891.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28891/";
$imgadv[$img_name]["alt"] = "Стоматология и зуботехническая лаборатория Инвасервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r2998.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2998/";
$imgadv[$img_name]["alt"] = "Нотариальная контора";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/advice/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ремедент --
$img_name = "r20191.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20191/";
$imgadv[$img_name]["alt"] = "Медицинский центр Ремедент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r8800.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8800/";
$imgadv[$img_name]["alt"] = "Нотариус Попейко Маргарита Ивановна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Чаша сокровищ --
$img_name = "r20021.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20021/";
$imgadv[$img_name]["alt"] = "Салон-магазин изделий из натурального камня Чаша сокровищ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/bijouterie/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ремонт швейных машин --
$img_name = "r24027.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24027/";
$imgadv[$img_name]["alt"] = "Ремонт швейных машин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Русский Мастер --
$img_name = "r8809.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8809/";
$imgadv[$img_name]["alt"] = "Русский Мастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Помидор --
$img_name = "r28879.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28879/";
$imgadv[$img_name]["alt"] = "Рекламная типография Помидор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/polygraphics/polygraphics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Резидент --
$img_name = "r2732.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2732/";
$imgadv[$img_name]["alt"] = "Группа компаний Резидент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Система Забота --
$img_name = "r28357.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28357/";
$imgadv[$img_name]["alt"] = "Система Забота";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/staff/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АЛАН-ВЕТ --
$img_name = "r28868.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28868/";
$imgadv[$img_name]["alt"] = "АЛАН-ВЕТ Скорая ветеринарная помощь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Исаакиевский собор --
$img_name = "r4333.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4333/";
$imgadv[$img_name]["alt"] = "Государственное учреждение культуры Государственный музей-памятник Исаакиевский собор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/museums/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Триколор --
$img_name = "r1938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1938/";
$imgadv[$img_name]["alt"] = "Триколор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Sidose --
$img_name = "r28877.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28877/";
$imgadv[$img_name]["alt"] = "Sidose";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/polygraphic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мингалеев --
$img_name = "r11719.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11719/";
$imgadv[$img_name]["alt"] = "Грузоперевозки ИП Мингалеев";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/city/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЛОКД --
$img_name = "r4221.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4221/";
$imgadv[$img_name]["alt"] = "Государственное учреждение здравоохранения Ленинградский областной кардиологический диспансер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dispensaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Золото Петроград --
$img_name = "r28867.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28867/";
$imgadv[$img_name]["alt"] = "Золото Петроград";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/pawn-shops/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ампир-Декор --
$img_name = "r2675.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2675/";
$imgadv[$img_name]["alt"] = "Торговый дом Ампир-Декор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Термофит --
$img_name = "r3171.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3171/";
$imgadv[$img_name]["alt"] = "Термофит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/electrics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стеклоцентр --
$img_name = "r9429.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9429/";
$imgadv[$img_name]["alt"] = "Стеклоцентр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/glass/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Столетие --
$img_name = "r28865.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28865/";
$imgadv[$img_name]["alt"] = "Пансионат для пожилых Столетие";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Красносельский --
$img_name = "r28840.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28840/";
$imgadv[$img_name]["alt"] = "Красносельский медицинский центр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r17319.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17319/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Медведева Сергея Анатольевича";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/estate/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мой карнавал --
$img_name = "r28848.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28848/";
$imgadv[$img_name]["alt"] = "Мой карнавал";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/representations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Аэлита --
$img_name = "r12661.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12661/";
$imgadv[$img_name]["alt"] = "Стоматологический центр Аэлита";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бон тур --
$img_name = "r28863.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28863/";
$imgadv[$img_name]["alt"] = "Бон тур Туристическое агентство";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/bus/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бодрая ветеринарная помощь --
$img_name = "r2485.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2485/";
$imgadv[$img_name]["alt"] = "Бодрая ветеринарная помощь на дому";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мультикреп --
$img_name = "r2884.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2884/";
$imgadv[$img_name]["alt"] = "Мультикреп";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/705/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Патриот --
$img_name = "r2874.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2874/";
$imgadv[$img_name]["alt"] = "Патриот";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/trade/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Лаборатория слуха --
$img_name = "r2850.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2850/";
$imgadv[$img_name]["alt"] = "Лаборатория слуха";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/medicine/hearing-aids/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it C`est La Vie --
$img_name = "r28764.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28764/";
$imgadv[$img_name]["alt"] = "C`est La Vie Сеть частных пансионатов европейского уровня для пожилых людей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ржевка --
$img_name = "r28847.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28847/";
$imgadv[$img_name]["alt"] = "Центр социального обслуживания Ржевка";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Grishko --
$img_name = "r12785.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12785/";
$imgadv[$img_name]["alt"] = "Компания Grishko";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/representations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Антикс --
$img_name = "r3452.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3452/";
$imgadv[$img_name]["alt"] = "Антикварный салон Антикс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/antique/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r4248.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4248/";
$imgadv[$img_name]["alt"] = "Нотариус Данилова Татьяна Васильевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Забота --
$img_name = "r28843.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28843/";
$imgadv[$img_name]["alt"] = "Забота Сеть пансионатов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Забота --
$img_name = "r28842.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28842/";
$imgadv[$img_name]["alt"] = "Пансионат для пожилых людей Забота";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Доктор --
$img_name = "r28849.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28849/";
$imgadv[$img_name]["alt"] = "Многопрофильная клиника Доктор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it FLORTY --
$img_name = "r13767.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13767/";
$imgadv[$img_name]["alt"] = "Сказочная студия FLORTY";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Glontty --
/*$img_name = "r28826.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28826/";
$imgadv[$img_name]["alt"] = "Glontty family";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/clothes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Панорама --
$img_name = "r179.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/179/";
$imgadv[$img_name]["alt"] = "Окна Панорама";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/windows/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Zinger --
$img_name = "r23915.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23915/";
$imgadv[$img_name]["alt"] = "Сеть магазинов компании Zinger";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/haberdashery/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магазин --
$img_name = "r2803.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2803/";
$imgadv[$img_name]["alt"] = "Магазин Школьная книга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/books/books/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Актомед --
$img_name = "r28802.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28802/";
$imgadv[$img_name]["alt"] = "Многопрофильная клиника Актомед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/alternative/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СТС-Ремонт --
$img_name = "r2185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2185/";
$imgadv[$img_name]["alt"] = "СТС-Ремонт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/trade/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Александрова дача --
$img_name = "r28801.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28801/";
$imgadv[$img_name]["alt"] = "Царскосельский конно-спортивный клуб Александрова дача";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/clubs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Фитоцентр --
$img_name = "r12586.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12586/";
$imgadv[$img_name]["alt"] = "Фитоцентр Травник Гордеев М.В.";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/stores/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Монополь --
$img_name = "r2779.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2779/";
$imgadv[$img_name]["alt"] = "Монополь-wine market&bar";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/food/alcohol/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Синергия --
$img_name = "r28804.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28804/";
$imgadv[$img_name]["alt"] = "Ломбарды Синергия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/pawn-shops/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r28796.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28796/";
$imgadv[$img_name]["alt"] = "Нотариус Цуцкова Светлана Васильевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it НСА --
$img_name = "r2746.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2746/";
$imgadv[$img_name]["alt"] = "Корпорация НСА";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ателье Дубовой 16.10.2015--
/*$img_name = "r8407.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8407/";
$imgadv[$img_name]["alt"] = "Ателье Дубовой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стома --
$img_name = "r4358.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4358/";
$imgadv[$img_name]["alt"] = "Медицинская стоматологическая фирма Стома";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r28740.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28740/";
$imgadv[$img_name]["alt"] = "Нотариус Козырицкая Нина Игоревна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it 24 АЛКО --
$img_name = "r28739.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28739/";
$imgadv[$img_name]["alt"] = "24 АЛКО Элитный алкоголь из Duty Free";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/alcohol/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эксимер --
$img_name = "r3643.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3643/";
$imgadv[$img_name]["alt"] = "Офтальмологическая клиника Эксимер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/glasses/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Радиомастер --
$img_name = "r2750.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2750/";
$imgadv[$img_name]["alt"] = "Радиомастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/electronics/repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автоклимат --
$img_name = "r9403.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9403/";
$imgadv[$img_name]["alt"] = "Автоклимат";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Туристический Сервис --
$img_name = "r2742.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2742/";
$imgadv[$img_name]["alt"] = "Индивидуальный Туристический Сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магазин --
$img_name = "r2806.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2806/";
$imgadv[$img_name]["alt"] = "Магазин Мир тканей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sewing/fabrics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Монро --
$img_name = "r21316.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21316/";
$imgadv[$img_name]["alt"] = "Центр косметологии Монро";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it MOTORS-USA --
$img_name = "r28728.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28728/";
$imgadv[$img_name]["alt"] = "MOTORS-USA";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r16741.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16741/";
$imgadv[$img_name]["alt"] = "Нотариус Торопова Елена Викторовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АНОДПО --
$img_name = "r3583.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3583/";
$imgadv[$img_name]["alt"] = "АНОДПО Технологии спасения";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/security/fire/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Северформ --
$img_name = "r2792.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2792/";
$imgadv[$img_name]["alt"] = "Магазин-склад Северформ - сантехника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/sanitary/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r1249.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1249/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Оболенцевой Татьяны Ивановны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Арт Корк Дизайн --
$img_name = "r3631.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3631/";
$imgadv[$img_name]["alt"] = "Арт Корк Дизайн";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/floorings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Кузя --
$img_name = "r17073.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17073/";
$imgadv[$img_name]["alt"] = "Магазин игрушек Кузя";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/toys/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Миг --
$img_name = "r2822.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2822/";
$imgadv[$img_name]["alt"] = "Часовой дом Миг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/clocks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r27297.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27297/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Никольской Ольги Владимировны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r16936.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16936/";
$imgadv[$img_name]["alt"] = "Нотариус Петрова Анна Владимировна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it УТС --
$img_name = "r13772.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13772/";
$imgadv[$img_name]["alt"] = "Удобная транспортная служба";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/russia/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Самба Суши --
$img_name = "r3856.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3856/";
$imgadv[$img_name]["alt"] = "Ресторан Самба Суши";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Духовное наследие --
$img_name = "r27350.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27350/";
$imgadv[$img_name]["alt"] = "Выставочное объединение Духовное наследие";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Европейская химчистка Apetta --
/*$img_name = "apetta.gif";
$imgadv[$img_name]["url"] = "/company/4320/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/services/*"][] = $img_name;
*/

$img_name = "r4320.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4320/";
$imgadv[$img_name]["alt"] = "Европейская химчистка Apetta";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автомото --
$img_name = "r3621.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3621/";
$imgadv[$img_name]["alt"] = "Автомото";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/towaway/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтинвестбанк --
$img_name = "r5459.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/5459/";
$imgadv[$img_name]["alt"] = "Балтинвестбанк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/finances/banks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it InterService --
/*$img_name = "r28716.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28716/";
$imgadv[$img_name]["alt"] = "Компьютерный сервис InterService";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Игла --
$img_name = "r2701.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2701/";
$imgadv[$img_name]["alt"] = "Игла";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sewing/needlework/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Александринский театр --
$img_name = "r22685.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22685/";
$imgadv[$img_name]["alt"] = "Российский государственный академический театр драмы им. А.С. Пушкина Александринский театр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/theaters/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Братан --
$img_name = "r1389.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1389/";
$imgadv[$img_name]["alt"] = "Братан";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/boats/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Старая книга --
$img_name = "r2721.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2721/";
$imgadv[$img_name]["alt"] = "Сеть антикварно-букинистических магазинов Старая книга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/books/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Табак Сити --
$img_name = "r28701.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28701/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Табак Сити";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/tobacco/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Люкс-мастер --
/*$img_name = "r2655.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2655/";
$imgadv[$img_name]["alt"] = "Сервисный центр Люкс-мастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/repair/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Частная женская консультация --
$img_name = "r22329.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22329/";
$imgadv[$img_name]["alt"] = "Частная женская консультация при Роддоме на Фурштатской";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/female-consultation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Адвокатская консультация --
$img_name = "r11189.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11189/";
$imgadv[$img_name]["alt"] = "Адвокатская консультация №17 Санкт-Петербургской городской коллегии адвокатов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мойдодыр-Тихвин --
$img_name = "r2623.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2623/";
$imgadv[$img_name]["alt"] = "Мойдодыр-Тихвин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r28695.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28695/";
$imgadv[$img_name]["alt"] = "Нотариальная контора";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сервис-Плюс --
$img_name = "r16367.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16367/";
$imgadv[$img_name]["alt"] = "Сервисный центр Сервис-Плюс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Лиговский --
$img_name = "r27290.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27290/";
$imgadv[$img_name]["alt"] = "Физкультурно-оздоровительный комплекс Лиговский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/pools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r16209.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16209/";
$imgadv[$img_name]["alt"] = "Нотариус Горбунова Светлана Ивановна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Клуб крысоводства --
$img_name = "r3206.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3206/";
$imgadv[$img_name]["alt"] = "Региональная общественная организация Клуб декоративного крысоводства";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/hotel/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Петроградский антиквар --
$img_name = "r28696.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28696/";
$imgadv[$img_name]["alt"] = "Магазин Петроградский антиквар";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/antique/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Комильфо-бутик --
$img_name = "r8883.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8883/";
$imgadv[$img_name]["alt"] = "Комиссионный магазин брендовой одежды Комильфо-бутик";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/commission/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r22431.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22431/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Катрич Светланы Николаевны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МедЭкспресс --
$img_name = "r28343.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28343/";
$imgadv[$img_name]["alt"] = "Реабилитационный центр МедЭкспресс +";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/rehabilitation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Развитие --
/*$img_name = "r26754.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26754/";
$imgadv[$img_name]["alt"] = "Строительно-транспортная компания Развитие";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/land/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Свадьба --
$img_name = "r27554.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27554/";
$imgadv[$img_name]["alt"] = "Сеть ювелирных салонов Свадьба. Обручальные кольца";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/jewels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бумага --
$img_name = "r3479.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3479/";
$imgadv[$img_name]["alt"] = "Бумага Северо-Запад";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/paper/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр-Мебель --
$img_name = "r2487.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2487/";
$imgadv[$img_name]["alt"] = "Центр-Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицинский центр Литейный --
$img_name = "r28114.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28114/";
$imgadv[$img_name]["alt"] = "Медицинский центр Литейный";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/board/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора --
$img_name = "r3692.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3692/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Савельевой Дианы Юрьевны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус 19.11.2015--
/*$img_name = "r16173.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16173/";
$imgadv[$img_name]["alt"] = "Нотариус Говорова Светлана Геннадьевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Трикотажница --
$img_name = "r8868.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8868/";
$imgadv[$img_name]["alt"] = "Трикотажница на Народной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СлухМастер --
$img_name = "r28642.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28642/";
$imgadv[$img_name]["alt"] = "СлухМастер - центр слуховых аппаратов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Питер --
$img_name = "r4297.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4297/";
$imgadv[$img_name]["alt"] = "Торгово-развлекательный комплекс Питер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/shopping/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Королевство свадеб 11.11.2015--
$img_name = "r23197.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23197/";
$imgadv[$img_name]["alt"] = "Свадебная выставка Королевство свадеб 2015";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/rest/exhibitions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медтехника Европы --
$img_name = "r8927.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8927/";
$imgadv[$img_name]["alt"] = "Торговый Дом Медтехника Европы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Секонд-хенд --
$img_name = "r16789.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16789/";
$imgadv[$img_name]["alt"] = "Сеть супермаркетов одежды Секонд-хенд Во!Ва!";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/clothes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дом ковров --
$img_name = "r2429.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2429/";
$imgadv[$img_name]["alt"] = "Фирменный магазин Дом ковров";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/carpets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Модный ребенок --
$img_name = "r28664.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28664/";
$imgadv[$img_name]["alt"] = "Модный ребенок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/clothing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СпортПрайм --
$img_name = "r3227.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3227/";
$imgadv[$img_name]["alt"] = "Сеть магазинов спортивного питания СпортПрайм";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/nutrition/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АльбероВиа --
$img_name = "r22924.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22924/";
$imgadv[$img_name]["alt"] = "АльбероВиа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/staircases/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Чистота с легкостью --
$img_name = "r22202.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22202/";
$imgadv[$img_name]["alt"] = "Чистота с легкостью";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/order/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Computest --
/*
$img_name = "r28673.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28673/";
$imgadv[$img_name]["alt"] = "Компьютерный сервис Computest";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Клиника --
$img_name = "r28671.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28671/";
$imgadv[$img_name]["alt"] = "Клиника по борьбе с лишним весом №1";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/weight-control/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Рыжий пес --
$img_name = "r28636.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28636/";
$imgadv[$img_name]["alt"] = "Ветклиника Рыжий пес";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Веллтекс-СПб --
$img_name = "r3541.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3541/";
$imgadv[$img_name]["alt"] = "Веллтекс-СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/sewing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Радость дарить --
$img_name = "r28648.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28648/";
$imgadv[$img_name]["alt"] = "Радость дарить - интернет-магазин подарков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/gifts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Уют Дверь --
$img_name = "r22866.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22866/";
$imgadv[$img_name]["alt"] = "Компания Уют Дверь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/doors/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it КлинЭксперт --
$img_name = "r27139.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27139/";
$imgadv[$img_name]["alt"] = "Химчистка Прачечная КлинЭксперт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Арт-Букет --
$img_name = "r1503.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1503/";
$imgadv[$img_name]["alt"] = "Мастерская флористики Арт-Букет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/flowers/bouquets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вендина --
$img_name = "r27221.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27221/";
$imgadv[$img_name]["alt"] = "Вендина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Круиз --
$img_name = "r24754.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24754/";
$imgadv[$img_name]["alt"] = "Мебельный центр Круиз";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Пчеловодство --
$img_name = "r16509.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16509/";
$imgadv[$img_name]["alt"] = "Пчеловодство на Литейном";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/food/stores/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ювелирный мир --
$img_name = "r28617.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28617/";
$imgadv[$img_name]["alt"] = "Ювелирный мир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/jewels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Триколор --
$img_name = "r1938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1938/";
$imgadv[$img_name]["alt"] = "Триколор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/office/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ФГБУ --
$img_name = "r25561.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25561/";
$imgadv[$img_name]["alt"] = "ФГБУ Санкт-Пететербургский научно-исследовательский институт уха, горла, носа и речи Минздрава РФ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hospitals/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it банк --
$img_name = "r5559.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/5559/";
$imgadv[$img_name]["alt"] = "Московский Нефтехимический банк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/banks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it JJglass --
$img_name = "r26400.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26400/";
$imgadv[$img_name]["alt"] = "Компания JJglass";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Kristina & Milan --
$img_name = "r26786.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26786/";
$imgadv[$img_name]["alt"] = "Сеть обувных магазинов Kristina & Milan";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Восстания 6 --
$img_name = "r23581.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23581/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Восстания 6";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сенная --
$img_name = "r16656.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16656/";
$imgadv[$img_name]["alt"] = "Торговый комплекс Сенная";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/shopping/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АртЛандия --
$img_name = "r11752.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11752/";
$imgadv[$img_name]["alt"] = "Багетная мастерская АртЛандия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/designing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МРТ --
$img_name = "r28650.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28650/";
$imgadv[$img_name]["alt"] = "Сеть центров МРТ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r16343.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16343/";
$imgadv[$img_name]["alt"] = "Нотариус Кийко Олег Михайлович";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МЕТРОПОЛЬ 19.11.2015--
/*$img_name = "r21855.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21855/";
$imgadv[$img_name]["alt"] = "Агентство недвижимости МЕТРОПОЛЬ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/realestate/agencies/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ателье --
$img_name = "r22505.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22505/";
$imgadv[$img_name]["alt"] = "Ателье по пошиву и ремонту одежды";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Радиодетали --
$img_name = "r28641.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28641/";
$imgadv[$img_name]["alt"] = "Радиодетали";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/communication/telephones/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сааб-Мастер --
$img_name = "r6922.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6922/";
$imgadv[$img_name]["alt"] = "Сааб-Мастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------

//it Зелёный Корм 13,11,2015--
/*$img_name = "r11318.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11318/";
$imgadv[$img_name]["alt"] = "Зелёный Корм";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/pets/products/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ниагара --
$img_name = "r10662.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10662/";
$imgadv[$img_name]["alt"] = "Мебельная компания Ниагара";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Avia-spb--
/*$img_name = "avia468x60x4-9408.gif";
$imgadv[$img_name]["url"] = "http://www.avia-spb.ru/";
//$imgadv[$img_name]["style"] = "background:#515BE8;";//#4b7cc7
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/

$img_name = "r9408.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9408/";
$imgadv[$img_name]["alt"] = "Avia-spb";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tickets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Петроэлектросбыт --
$img_name = "r4026.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4026/";
$imgadv[$img_name]["alt"] = "Петроэлектросбыт - центры приема платежей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/payment-items/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стройбаза --
$img_name = "r22205.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22205/";
$imgadv[$img_name]["alt"] = "Стройбаза ТД АВН-Строй";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Альпари 19.11.2015--
/*$img_name = "r1799.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1799/";
$imgadv[$img_name]["alt"] = "Сеть ателье Альпари-кожа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Айсберг --
$img_name = "r4342.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4342/";
$imgadv[$img_name]["alt"] = "Стоматология Айсберг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/paediatricians/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТеплоПлит --
$img_name = "r16289.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16289/";
$imgadv[$img_name]["alt"] = "ТеплоПлит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/systems/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Лантра --
$img_name = "r17211.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17211/";
$imgadv[$img_name]["alt"] = "Бюро переводов Агентство Лантра";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/miscellanea/translations/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Пунтукас-Пушкин 09.11.2015--
/*$img_name = "r3921.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3921/";
$imgadv[$img_name]["alt"] = "Компания Пунтукас-Пушкин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/disabled/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Элайнс --
$img_name = "r28597.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28597/";
$imgadv[$img_name]["alt"] = "Компания Элайнс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r16193.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16193/";
$imgadv[$img_name]["alt"] = "Нотариус Пискарёва Ирина Владимировна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бутик Лютес --
$img_name = "r28606.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28606/";
$imgadv[$img_name]["alt"] = "Бутик Лютес";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/tableware/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дом быта --
$img_name = "r4288.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4288/";
$imgadv[$img_name]["alt"] = "Дом быта На Литейном";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/electronics/repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автозапчасти --
$img_name = "r4217.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4217/";
$imgadv[$img_name]["alt"] = "Автозапчасти Автосервис круглосуточно - Z 24";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/parts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Авторазборка --
$img_name = "r12908.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12908/";
$imgadv[$img_name]["alt"] = "Авторазборка на Фучика, 23";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/dismantling/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Галерная гавань 30,10,2015--
/*$img_name = "r10675.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10675/";
$imgadv[$img_name]["alt"] = "Яхт-клуб Галерная гавань";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sports/boats/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Меховые салоны --
$img_name = "r6946.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6946/";
$imgadv[$img_name]["alt"] = "Меховые салоны Анны Волошко";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/hats/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Всевсад 11.11.2015--
/*$img_name = "r10924.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10924/";
$imgadv[$img_name]["alt"] = "Садовые центры Всевсад";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/land/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it БлокСтрой 09.11.2015--
/*$img_name = "r28601.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28601/";
$imgadv[$img_name]["alt"] = "Компания БлокСтрой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/tile/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Радуга Сада --
$img_name = "r25127.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25127/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Радуга Сада";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/flowers/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Антел 09.11.2015--
/*$img_name = "r28600.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28600/";
$imgadv[$img_name]["alt"] = "Медицинский центр Антел";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Цветы Голландии --
$img_name = "r4356.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4356/";
$imgadv[$img_name]["alt"] = "Торговая сеть Цветы Голландии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/cottage/plants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Грс №1 --
$img_name = "r4276.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4276/";
$imgadv[$img_name]["alt"] = "Городская ремонтная служба №1";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/renovation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Кастл 09.11.2015--
/*$img_name = "r26763.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26763/";
$imgadv[$img_name]["alt"] = "Туристическая компания Кастл";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ВИККО --
$img_name = "r26878.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26878/";
$imgadv[$img_name]["alt"] = "ВИККО";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/brick/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Антенны Всё о ТВ --
$img_name = "r6999.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6999/";
$imgadv[$img_name]["alt"] = "Антенны Всё о ТВ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/antenna/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it институт гриппа --
$img_name = "r11451.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11451/";
$imgadv[$img_name]["alt"] = "ФГБУ Научно-исследовательский институт гриппа Министерства здравоохранения РФ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/polyclinic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Царство интерьера --
$img_name = "r1299.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1299/";
$imgadv[$img_name]["alt"] = "Царство интерьера";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/doors/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Еврошина --
$img_name = "r2418.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2418/";
$imgadv[$img_name]["alt"] = "Автоцентр Еврошина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/tyres/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Детская Больница Марии Магдалины 09.11.2015--
/*$img_name = "r11322.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11322/";
$imgadv[$img_name]["alt"] = "Детская Городская Больница №2 Святой Марии Магдалины";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/paediatricians/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it фонд недвижимости --
$img_name = "r20993.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20993/";
$imgadv[$img_name]["alt"] = "Русский фонд недвижимости СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/realestate/agencies/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Финогенова --
$img_name = "r16128.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16128/";
$imgadv[$img_name]["alt"] = "Нотариус Финогенова Алла Владимировна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ABC-Петербург --
/*$img_name = "r609.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/609/";
$imgadv[$img_name]["alt"] = "Мебельная фабрика ABC-Петербург";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебель Стрит --
$img_name = "r2207.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2207/";
$imgadv[$img_name]["alt"] = "Магазин плетеной мебели Мебель Стрит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/wattled/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дзенс --
$img_name = "r4278.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4278/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Дзенс Натальи Анатольевны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтийский Торговый Дом 21,10,2015--
/*$img_name = "r26757.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26757/";
$imgadv[$img_name]["alt"] = "Балтийский Торговый Дом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Северное Сияние --
$img_name = "r12950.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12950/";
$imgadv[$img_name]["alt"] = "Северное Сияние";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Shop Couture --
$img_name = "r26592.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26592/";
$imgadv[$img_name]["alt"] = "Интернет-магазин модной одежды Shop Couture";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/clothes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Revzon 21.10.2015--
/*$img_name = "r2650.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2650/";
$imgadv[$img_name]["alt"] = "Ателье-салон меха-кожа Revzon";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sewing/furs/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Skorfur --
/*$img_name = "r422.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/422/";
$imgadv[$img_name]["alt"] = "Компания Skorfur";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/sewing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебельная мастерская --
$img_name = "r28586.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28586/";
$imgadv[$img_name]["alt"] = "Мебельная мастерская Владимира Романова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/servicing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ритуальное агентство --
$img_name = "r4017.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4017/";
$imgadv[$img_name]["alt"] = "Ритуальное агентство Ритуальная компания силовых структур";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стом-Гарант --
$img_name = "r26694.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26694/";
$imgadv[$img_name]["alt"] = "Стоматологический центр Стом-Гарант";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Салон красоты Милагро --
$img_name = "r28577.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28577/";
$imgadv[$img_name]["alt"] = "Салон красоты Милагро";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АС Такси --
$img_name = "r2619.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2619/";
$imgadv[$img_name]["alt"] = "АС Такси";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/taxi/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр слуха 21,10,2015--
/*$img_name = "r26709.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26709/";
$imgadv[$img_name]["alt"] = "Центр слуха";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сказка в Дранишниках 12.10.2015--
/*$img_name = "r3165.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3165/";
$imgadv[$img_name]["alt"] = "Загородный банно-гостиничный комплекс Сказка в Дранишниках";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/country-clubs/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it La Bottega 30,10,2015--
/*$img_name = "r28458.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28458/";
$imgadv[$img_name]["alt"] = "Салон тканей La Bottega dei Tessuti";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sewing/fabrics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Вита --
$img_name = "r106.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/106/";
$imgadv[$img_name]["alt"] = "Клиника С.П. Семенова Вита";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/addictions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Алена Ботева 21,10,2015--
/*$img_name = "r28576.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28576/";
$imgadv[$img_name]["alt"] = "Алена Ботева - студия маникюра и педикюра";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/707/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мастер-Класс --
$img_name = "r28464.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28464/";
$imgadv[$img_name]["alt"] = "Ремонтно-строительная компания Мастер-Класс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Переезд --
$img_name = "r26677.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26677/";
$imgadv[$img_name]["alt"] = "Транспортная компания Переезд-Питер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/relocation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АС Электроника-сервис --
$img_name = "r7745.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7745/";
$imgadv[$img_name]["alt"] = "АС Электроника-сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/electronics/repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Живой звук --
$img_name = "r11185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11185/";
$imgadv[$img_name]["alt"] = "Музыкальный магазин Живой звук";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/music/instruments/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Гармоника --
$img_name = "garmonika240x400-27957.gif";
$imgadv[$img_name]["url"] = "http://www.garmonika-lbm.ru/ ";
$imgadv[$img_name]["alt"] = "Гармоника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/27957/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МегаТорг --
$img_name = "r20999.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20999/";
$imgadv[$img_name]["alt"] = "Центр оптовой торговли МегаТорг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/textiles/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Потеряшка --
$img_name = "r4192.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4192/";
$imgadv[$img_name]["alt"] = "Центр помощи бездомным животным Потеряшка";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/shelter/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Джулия --
$img_name = "r21335.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21335/";
$imgadv[$img_name]["alt"] = "Свадебный салон Джулия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/wedding/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Детский дисконт центр Бэбиком 13.10.2015, 16.10.2015--
$img_name = "r19357.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19357/";
$imgadv[$img_name]["alt"] = "Детский дисконт центр Бэбиком";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/commission/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ресторан BrothersPizza 12.10.2015--
/*$img_name = "r28533.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28533/";
$imgadv[$img_name]["alt"] = "Ресторан BrothersPizza";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Свободное Рождение 12.10.2015--
/*$img_name = "r28534.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28534/";
$imgadv[$img_name]["alt"] = "Свободное Рождение";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/courses/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it МедЭкс 21,10,2015--
$img_name = "r24288.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24288/";
$imgadv[$img_name]["alt"] = "Медицинский центр МедЭкс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/board/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Благомед --
$img_name = "r3994.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3994/";
$imgadv[$img_name]["alt"] = "Центр защиты здоровья Благомед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Санаория --
/*$img_name = "r28527.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28527/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Санаория";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Боулинг Парк --
/*$img_name = "r21294.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21294/";
$imgadv[$img_name]["alt"] = "Сеть развлекательных комплексов Боулинг Парк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/bowling/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Крупской --
$img_name = "r9970.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9970/";
$imgadv[$img_name]["alt"] = "Книжная ярмарка в ДК им. Крупской";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/books/books/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Верижица --
/*
$img_name = "r20470.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20470/";
$imgadv[$img_name]["alt"] = "Коттеджный комплекс Верижица";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Экоплат --
$img_name = "r3954.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3954/";
$imgadv[$img_name]["alt"] = "Экоплат";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Айболит --
$img_name = "r4031.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4031/";
$imgadv[$img_name]["alt"] = "Айболит - ветеринарный доктор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Невская жемчужина --
$img_name = "r7926.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7926/";
$imgadv[$img_name]["alt"] = "Салон красоты Невская жемчужина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Маттиоли-Straza --
/*$img_name = "r3812.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3812/";
$imgadv[$img_name]["alt"] = "Магазин женских сумок Салон Маттиоли-Straza";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/haberdashery/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Вест-Ост --
$img_name = "r3294.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3294/";
$imgadv[$img_name]["alt"] = "Охранное предприятие Вест-Ост";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/security/alarm/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медкор --
$img_name = "r28509.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28509/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Медкор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it УЛЬТРАДЕНТ 30,10,2015--
$img_name = "r20936.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20936/";
$imgadv[$img_name]["alt"] = "Стоматология УЛЬТРАДЕНТ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Антикварный салон Частная коллекция --
/*$img_name = "r21343.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21343/";
$imgadv[$img_name]["alt"] = "Антикварный салон Частная коллекция";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/antique/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Актив Дженерэйшн --
/*$img_name = "r26664.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26664/";
$imgadv[$img_name]["alt"] = "Фармацевтическое и пищевое специализированное производство Актив Дженерэйшн";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sports/nutrition/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр бытовых услуг Питер --
$img_name = "r4063.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4063/";
$imgadv[$img_name]["alt"] = "Центр бытовых услуг Питер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автовеломото --
$img_name = "r3117.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3117/";
$imgadv[$img_name]["alt"] = "Автовеломото";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/sports/bicycles/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вэлна --
$img_name = "r3909.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3909/";
$imgadv[$img_name]["alt"] = "Вэлна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housetech/parts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Теплофизика --
$img_name = "r4166.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4166/";
$imgadv[$img_name]["alt"] = "Теплофизика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/labware/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r19455.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19455/";
$imgadv[$img_name]["alt"] = "Нотариус нотариального округа Санкт-Петербурга Решетникова Алина Валерьевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
///it Нотариус --
/*$img_name = "r25312.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25312/";
$imgadv[$img_name]["alt"] = "Нотариус Ашкалунина Ольга Ивановна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фея --
$img_name = "r4154.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4154/";
$imgadv[$img_name]["alt"] = "Салон красоты Фея";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АВАНТА 21.10.2015--
/*$img_name = "r10606.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10606/";
$imgadv[$img_name]["alt"] = "Торговый дом АВАНТА";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/trading/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Вита --
$img_name = "r3934.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3934/";
$imgadv[$img_name]["alt"] = "Валеологический центр Вита";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Nevaterm --
$img_name = "r20941.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20941/";
$imgadv[$img_name]["alt"] = "Фасадные термопанели Nevaterm";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СПб-Крона 18.09.2015 --
/*$img_name = "r2848.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2848/";
$imgadv[$img_name]["alt"] = "СПб-Крона";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/electrics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Автофаворит --
$img_name = "r28362.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28362/";
$imgadv[$img_name]["alt"] = "Пассажирские автоперевозки Автофаворит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/passenger/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Саргон --
$img_name = "r3552.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3552/";
$imgadv[$img_name]["alt"] = "Оздоровительный ВИП комплекс Саргон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it БУМ! --
/*$img_name = "r28461.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28461/";
$imgadv[$img_name]["alt"] = "Детский центр БУМ!";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/development/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Альт Папир --
/*$img_name = "r3723.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3723/";
$imgadv[$img_name]["alt"] = "Производственно-заготовительное предприятие Альт Папир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/salvaging/paper-reception/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it поликлиника №98 18.09.2015 --
/*$img_name = "r28490.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28490/";
$imgadv[$img_name]["alt"] = "Городская поликлиника №98 Приморского района";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/polyclinic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Норбеков --
$img_name = "r4386.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4386/";
$imgadv[$img_name]["alt"] = "Учебно-оздоровительные курсы по методике академика Норбекова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/trainings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Романов --
$img_name = "r3775.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3775/";
$imgadv[$img_name]["alt"] = "Индивидуальный предприниматель Романов Александр Сергеевич";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/disabled/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Политехническая школа --
$img_name = "r4387.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4387/";
$imgadv[$img_name]["alt"] = "НОУ Учебный центр Политехническая школа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/job-training/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сверчок 18.09.2015 --
/*$img_name = "r13397.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13397/";
$imgadv[$img_name]["alt"] = "Зоомагазины Сверчок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/zoo/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Mori Cinema --
$img_name = "r4376.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4376/";
$imgadv[$img_name]["alt"] = "Многозальный кинотеатр Mori Cinema";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/cinema/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ленремонт --
$img_name = "r3660.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3660/";
$imgadv[$img_name]["alt"] = "Городское ремонтное предприятие Ленремонт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/electronics/repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Зооцентр --
$img_name = "r3879.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3879/";
$imgadv[$img_name]["alt"] = "Зооцентр Нежный зверь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Панда --
$img_name = "r3974.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3974/";
$imgadv[$img_name]["alt"] = "Итальянская химчистка Панда";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автозапчасти --
$img_name = "r3897.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3897/";
$imgadv[$img_name]["alt"] = "Магазин Автозапчасти круглосуточно";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/autoparts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Альянс Пул 12.10.2015--
$img_name = "r26642.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26642/";
$imgadv[$img_name]["alt"] = "Альянс Пул";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/plumbing-valves/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Несиделки --
$img_name = "r28465.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28465/";
$imgadv[$img_name]["alt"] = "Служба сиделок и товары для инвалидов Несиделки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/disabled/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Гуров и К 12.10.2015--
/*$img_name = "r3549.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3549/";
$imgadv[$img_name]["alt"] = "Стекольно-зеркальное и мебельное производство Гуров и К";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/glass/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it НеваСервис --
/*$img_name = "i27673.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27673/";
$imgadv[$img_name]["alt"] = "НеваСервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Отель Павловск --
$img_name = "r14627.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14627/";
$imgadv[$img_name]["alt"] = "Гостиница дорожного Учебно-инженерного центра Hotel Pavlovsk";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r28213.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28213/";
$imgadv[$img_name]["alt"] = "Нотариус Гасанова Патимат Абакаровна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бехтерева --
$img_name = "r4095.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4095/";
$imgadv[$img_name]["alt"] = "ГУ СПб Научно-исследовательский психоневрологический институт им. В.М. Бехтерева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r20964.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20964/";
$imgadv[$img_name]["alt"] = "Нотариус Буркова Ольга Александровна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нива-Стандарт 4х4 --
$img_name = "r3876.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3876/";
$imgadv[$img_name]["alt"] = "Нива-Стандарт 4х4";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ski-clinic --
$img_name = "r28485.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28485/";
$imgadv[$img_name]["alt"] = "Магазин горных лыж и снаряжения Ski-clinic горнолыжникам";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/inventory/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
// it Cтекольный мир СПб --
/*$img_name = "steklomir468x60.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.steklomir.org/";
$imgadv[$img_name]["alt"] = "Cтекольный мир СПб";
$imgadv[$img_name]["style"] = "background:#184985;"; 
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЦВЕТОПТТОРГ 18.09.2015--
/*$img_name = "r3857.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3857/";
$imgadv[$img_name]["alt"] = "Сеть цветочных магазинов ЦВЕТОПТТОРГ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/flowers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Памятники Карелкамень --
$img_name = "r3948.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3948/";
$imgadv[$img_name]["alt"] = "Памятники Карелкамень";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Как дома --
$img_name = "r28481.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28481/";
$imgadv[$img_name]["alt"] = "Частный дом престарелых и людей с ограниченными способностями пансионат Как дома";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бекас --
$img_name = "r28478.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28478/";
$imgadv[$img_name]["alt"] = "Таксидермическая студия Бекас";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/hunting/huntinggoods/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r3701.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3701/";
$imgadv[$img_name]["alt"] = "Нотариус Иваницкая Мария Николаевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Аромастудия Светланы Кондораки Жерминаль --
/*$img_name = "r28340.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28340/";
$imgadv[$img_name]["alt"] = "Аромастудия Светланы Кондораки Жерминаль";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/spa/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ОДМ АРТ --
/*$img_name = "odmart240x400-26746.swf";
$imgadv[$img_name]["url"] = "http://www.nsw-spb.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/building/*"][] = $img_name;
*/
/*
$img_name = "r26746.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26746/";
$imgadv[$img_name]["alt"] = "Компания ОДМ-Арт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Эстет-Мод --
$img_name = "r14628.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14628/";
$imgadv[$img_name]["alt"] = "Салон причесок Эстет-Мод";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Резиновый выбор --
$img_name = "r2510.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2510/";
$imgadv[$img_name]["alt"] = "Резиновый выбор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cleaning/households/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ПетроАвтоСервис --
/*$img_name = "r288.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/288/";
$imgadv[$img_name]["alt"] = "ПетроАвтоСервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/parts/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Нотариус --
$img_name = "r20361.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20361/";
$imgadv[$img_name]["alt"] = "Нотариус Таволжанская Анна Владиславовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТК Автопрайд  --
$img_name = "r10533.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10533/";
$imgadv[$img_name]["alt"] = "ТК Автопрайд";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/passenger/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эсма  --
$img_name = "r842.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/842/";
$imgadv[$img_name]["alt"] = "Центр медицинской косметологии Эсма";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЛэндЛ Мебель  --
/*$img_name = "r4187.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4187/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/compartments/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лавка сантехника --
/*$img_name = "r4056.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4056/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/plumbing-valves/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центра незавимиой экспертизы и оценки Аспект (ЦНЭО) "Аспект" --
$img_name = "r4185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4185/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/researches/tests/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Давэр --
$img_name = "r4039.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4039/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/uniforms/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Давэр --
/*$img_name = "r26437.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26437/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Капитал --
$img_name = "r13595.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13595/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/cleaning/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Штат-сервис огнезащита --
/*$img_name = "r4215.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4215/";
$imgadv[$img_name]["alt"] = "Штат-сервис огнезащита";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/security/fire/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Грузовое такси Возничий --
$img_name = "r26404.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26404/";
$imgadv[$img_name]["alt"] = "Грузовое такси Возничий";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/city/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it центр магнитно-резонансной томографии --
$img_name = "r28436.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28436/";
$imgadv[$img_name]["alt"] = "Василеостровский центр магнитно-резонансной томографии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Военторг --
$img_name = "r3651.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3651/";
$imgadv[$img_name]["alt"] = "Военторг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/uniforms/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Флюгер --
$img_name = "r3434.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3434/";
$imgadv[$img_name]["alt"] = "Флюгер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/products/*"][] = $img_name;
/*
$img_name = "flugershop468x60x2-3434.gif";
$imgadv[$img_name]["url"] = "http://www.flugershop.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["style"] = "background:#faeee6;";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/pets/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/pets/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дента Л --
/*$img_name = "r28424.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28424/";
$imgadv[$img_name]["alt"] = "Медицинский центр Дента L (Дента Л)";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/plastics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Галант --
/*$img_name = "r28425.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28425/";
$imgadv[$img_name]["alt"] = "Магазины белья Галант";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/underwear/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фонд Центр --
$img_name = "r4093.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4093/";
$imgadv[$img_name]["alt"] = "Фонд Центр независимой потребительской экспертизы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/researches/tests/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Адвекон --
$img_name = "r9221.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9221/";
$imgadv[$img_name]["alt"] = "Юридический центр Адвекон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/advice/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ковроедов.нет --
$img_name = "r28441.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28441/";
$imgadv[$img_name]["alt"] = "Магазин ковров Ковроедов.нет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/carpets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сырицо Константин Эдуардович --
$img_name = "r26398.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26398/";
$imgadv[$img_name]["alt"] = "Нотариус Сырицо Константин Эдуардович";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Виго --
/*$img_name = "r25697.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25697/";
$imgadv[$img_name]["alt"] = "Компания Виго";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Бехтерев --
/*$img_name = "r20374.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20374/";
$imgadv[$img_name]["alt"] = "Медицинская ассоциация Центр Бехтерев";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/addictions/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Русский Мотор --
$img_name = "r9973.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9973/";
$imgadv[$img_name]["alt"] = "Магазины Мототовары Мотозапчасти - Русский Мотор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/moto/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Веселый Водовоз --
$img_name = "r3584.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3584/";
$imgadv[$img_name]["alt"] = "Веселый Водовоз";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/water/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Карекс-Центр --
/*$img_name = "r3582.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3582/";
$imgadv[$img_name]["alt"] = "Карекс-Центр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/washing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Магазин Серебро-Подарки --
$img_name = "r3534.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3534/";
$imgadv[$img_name]["alt"] = "Магазин Серебро-Подарки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/souvenirs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вдохновение --
$img_name = "r28435.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28435/";
$imgadv[$img_name]["alt"] = "Частный дом престарелых Вдохновение";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Зоогостиница Янино --
/*$img_name = "r28418.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28418/";
$imgadv[$img_name]["alt"] = "Зоогостиница Янино";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/hotel/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Нотариус Бицираева Любовь Геннадьевна --
$img_name = "r28059.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28059/";
$imgadv[$img_name]["alt"] = "Нотариус нотариального округа Бицираева Любовь Геннадьевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автоломбард-38 --
$img_name = "r26249.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26249/";
$imgadv[$img_name]["alt"] = "Финансовая компания Автоломбард-38";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/pawnshop/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтийские весы и системы --
$img_name = "r26187.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26187/";
$imgadv[$img_name]["alt"] = "Производственная компания Балтийские весы и системы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/measuring-tools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магия чистоты --
/*$img_name = "r28429.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28429/";
$imgadv[$img_name]["alt"] = "Химчистки Магия чистоты";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лодки Плюс --
$img_name = "r10428.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10428/";
$imgadv[$img_name]["alt"] = "Магазин Лодки Плюс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/boats/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АэроДрим --
$img_name = "r23841.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23841/";
$imgadv[$img_name]["alt"] = "АэроДрим";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/attractions/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сеть аптек Аптека Для бережливых --
$img_name = "r14436.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14436/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/pharmacies/*"][] = $img_name;


$img_name = "apteka_berez240x400-14436.swf";
$imgadv[$img_name]["url"] = "/company/14436/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "Сеть аптек Аптека Для бережливых";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/14436/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Питер-Парк --
/*$img_name = "r13587.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13587/";
$imgadv[$img_name]["alt"] = "Питер-Парк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/parking/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ральф Рингер --
$img_name = "r3349.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3349/";
$imgadv[$img_name]["alt"] = "Сеть салонов обуви Ральф Рингер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/shops/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус нотариального округа Шувалова Вера Павловна --
$img_name = "r28091.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28091/";
$imgadv[$img_name]["alt"] = "Нотариус нотариального округа Шувалова Вера Павловна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Служба доставки еды Румянцев --
/*$img_name = "r28324.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28324/";
$imgadv[$img_name]["alt"] = "Служба доставки еды Румянцев";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/foods-delivery/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Музейный комплекс Вселенная воды --
$img_name = "r4261.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4261/";
$imgadv[$img_name]["alt"] = "Музейный комплекс Вселенная воды";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/museums/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it FIT-Инструмент --
/*$img_name = "r28253.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28253/";
$imgadv[$img_name]["alt"] = "FIT-Инструмент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/building/electric-tools/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Тексэлен --
$img_name = "r4112.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4112/";
$imgadv[$img_name]["alt"] = "Трикотажная фирма Тексэлен";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Золотце моё --
$img_name = "r28134.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28134/";
$imgadv[$img_name]["alt"] = "Ювелирный магазин Золотце моё";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/jewelry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Наследие --
/*$img_name = "r28211.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28211/";
$imgadv[$img_name]["alt"] = "Наследие";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/donation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it МедЭстетикЦентр --
/*$img_name = "r2436.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2436/";
$imgadv[$img_name]["alt"] = "МедЭстетикЦентр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ИП Герасимов --
$img_name = "r25986.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25986/";
$imgadv[$img_name]["alt"] = "ИП Герасимов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Юрга Ольга Вячеславовна --
$img_name = "r20206.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20206/";
$imgadv[$img_name]["alt"] = "Нотариус Юрга Ольга Вячеславовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Альта-Росс --
$img_name = "r25398.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25398/";
$imgadv[$img_name]["alt"] = "Инженерно-строительная компания Альта-Росс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/networks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ломбард Омега --
$img_name = "r19752.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19752/";
$imgadv[$img_name]["alt"] = "Ломбард Омега";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/pawn-shops/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтийские химчистки и прачечные --
/*$img_name = "r28116.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28116/";
$imgadv[$img_name]["alt"] = "Балтийские химчистки и прачечные";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Памятники --
$img_name = "r1523.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1523/";
$imgadv[$img_name]["alt"] = "Памятники";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус Бухтоярова Светлана Алексеевна --
$img_name = "r2039.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2039/";
$imgadv[$img_name]["alt"] = "Нотариус Бухтоярова Светлана Алексеевна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СпецТехСервис --
$img_name = "r8046.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8046/";
$imgadv[$img_name]["alt"] = "СпецТехСервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/trucks-service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магазин Самоцветы --
/*$img_name = "r28133.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28133/";
$imgadv[$img_name]["alt"] = "Магазин Самоцветы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/bijouterie/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Новая Стоматология --
/*$img_name = "r28088.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28088/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Новая Стоматология";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Покровский Банк Стволовых Клеток --
$img_name = "r28115.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28115/";
$imgadv[$img_name]["alt"] = "Покровский Банк Стволовых Клеток";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бюро переводов Translation-online24 --
/*$img_name = "r28111.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28111/";
$imgadv[$img_name]["alt"] = "Бюро переводов Translation-online24";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/miscellanea/translations/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Бизнес-отель Карелия --
/*$img_name = "r3453.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3453/";
$imgadv[$img_name]["alt"] = "Бизнес-отель Карелия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Институтпсихологии им. Рауля Валленберга --
$img_name = "r2563.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2563/";
$imgadv[$img_name]["alt"] = "НОУ ВПО Институт специальной педагогики и психологии им. Рауля Валленберга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/universities/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Котёнок Гав --
/*$img_name = "r28108.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28108/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника Котёнок Гав";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Такелажно-Монтажная Фирма --
$img_name = "r9690.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9690/";
$imgadv[$img_name]["alt"] = "Такелажно-Монтажная Фирма";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/loading/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it 5 минут --
$img_name = "r2759.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2759/";
$imgadv[$img_name]["alt"] = "Автомоечный комплекс 5 минут";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/auto/wash/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ваш Юрист --
$img_name = "r24336.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24336/";
$imgadv[$img_name]["alt"] = "Ваш Юрист";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/citizens/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инема --
$img_name = "r19629.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19629/";
$imgadv[$img_name]["alt"] = "Гостиница Инема";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Энергосфера --
$img_name = "r24926.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24926/";
$imgadv[$img_name]["alt"] = "Группа компаний Энергосфера";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/electro/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Елизавета --
$img_name = "r24335.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24335/";
$imgadv[$img_name]["alt"] = "Ювелирная компания Елизавета";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/jewelry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЛЕЙМА --
$img_name = "r28082.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28082/";
$imgadv[$img_name]["alt"] = "ЛЕЙМА";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/plastics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Kwadrik --
/*$img_name = "r28081.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28081/";
$imgadv[$img_name]["alt"] = "Клуб активного отдыха Kwadrik";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/country-clubs/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Акцент --
$img_name = "r3833.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3833/";
$imgadv[$img_name]["alt"] = "Акцент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/metal/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Отель Анюта --
/*$img_name = "r13421.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13421/";
$imgadv[$img_name]["alt"] = "Отель Анюта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ритуальная компания --
/*$img_name = "r4179.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4179/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургская Ритуальная компания";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сеть обувных магазинов Шаг навстречу --
$img_name = "r13424.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13424/";
$imgadv[$img_name]["alt"] = "Сеть обувных магазинов Шаг навстречу";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Полезные Товары --
/*$img_name = "r9640.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9640/";
$imgadv[$img_name]["alt"] = "Красота. Здоровье. Долголетие. Полезные Товары";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/souvenirs/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мантия --
$img_name = "r4212.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4212/";
$imgadv[$img_name]["alt"] = "Сеть салонов Мантия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бруспрофи --
$img_name = "r28037.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/28037/";
$imgadv[$img_name]["alt"] = "Строительная компания Бруспрофи";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инвелс --
$img_name = "r3376.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3376/";
$imgadv[$img_name]["alt"] = "Инвелс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/electric-tools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Туристическая база Ладога --
$img_name = "r13096.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13096/";
$imgadv[$img_name]["alt"] = "Туристическая база Ладога";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/country-clubs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ленстройтрест №5 --
/*$img_name = "r3373.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3373/";
$imgadv[$img_name]["alt"] = "Ленстройтрест №5";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/brick/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лидия --
$img_name = "r3352.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3352/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Лидия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Надежда --
$img_name = "r3185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3185/";
$imgadv[$img_name]["alt"] = "Художественный салон Надежда";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/designing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Чито-Гврито --
$img_name = "r9214.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9214/";
$imgadv[$img_name]["alt"] = "Сеть кафе и ресторанов грузинской кухни Чито-Гврито";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/cafes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ресторан Porto Maltese --
$img_name = "r23271.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23271/";
$imgadv[$img_name]["alt"] = "Ресторан Porto Maltese";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СПб Колесо --
$img_name = "r20309.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20309/";
$imgadv[$img_name]["alt"] = "СПб Колесо";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/tyres/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
///it Интернет-магазин VeloHouse --
$img_name = "r24876.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24876/";
$imgadv[$img_name]["alt"] = "Интернет-магазин VeloHouse";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/bicycles/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Интерьерные салоны Le Tabouret --
$img_name = "r27967.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27967/";
$imgadv[$img_name]["alt"] = "Интерьерные салоны Le Tabouret";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/tree-file/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Английский паб Ring O’Bells --
/*
$img_name = "r23185.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23185/";
$imgadv[$img_name]["alt"] = "Английский паб Ring O’Bells";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/beer/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Пансионат для престарелых Гармоника --
$img_name = "r27957.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27957/";
$imgadv[$img_name]["alt"] = "Пансионат для престарелых Гармоника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
///it Компания Дельфин --
$img_name = "r13223.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13223/";
$imgadv[$img_name]["alt"] = "Компания Дельфин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/electrical/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Славянская усадьба --
$img_name = "r17375.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17375/";
$imgadv[$img_name]["alt"] = "Плодово-декоративный питомник Славянская усадьба";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cottage/plants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мир добрых вещей --
$img_name = "r19391.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19391/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Мир добрых вещей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housetech/home/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нева-Автоком  ---------------------------------------------------------------------------------
/*$img_name = "r3032.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3032/";
$imgadv[$img_name]["alt"] = "Нева-Автоком";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/exchange/*"][] = $img_name;
*/
/*
$img_name = "neva_avtokom468x60-3032.swf";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["url"] = "http://sedu.adhands.ru/click/?sid=2440&bnid=68240&apid=20941&product=7598";
$imgadv[$img_name]["alt"] = "Нева-Автоком";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/neva_avtokom468x60-3032.gif";
$imgadv[$img_name]["html_after"] = <<< HTML
<img src="http://sedu.adhands.ru/pixelcounter/?static=on&sid=2440&bnid=68240&apid=20941&product=7598" width="1" height="1" border="0" />
HTML;
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/auto/*"][] = $img_name;
*/

/*
$img_name = "neva_avtokom240x400-3032.swf";
$imgadv[$img_name]["url"] = "http://sedu.adhands.ru/click/?sid=2440&bnid=68239&apid=20940&product=7598";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["html_after"] = <<< HTML
<img src="http://sedu.adhands.ru/pixelcounter/?static=on&sid=2440&bnid=68239&apid=20940&product=7598" width="1" height="1" border="0" />
HTML;
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/neva_avtokom240x400-3032.gif";
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/3032/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------
//it АвтоМик --
$img_name = "r2453.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2453/";
$imgadv[$img_name]["alt"] = "АвтоМик";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/tuning/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Золотое Время --
$img_name = "r20641.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20641/";
$imgadv[$img_name]["alt"] = "Пансионат для пожилых людей Золотое Время";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Найман Сервис --
/*$img_name = "r23704.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23704/";
$imgadv[$img_name]["alt"] = "Найман Сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/service/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Юлии Станиславовны --
$img_name = "r3107.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3107/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Розовой Юлии Станиславовны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Маска --
/*$img_name = "r4277.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4277/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Маска";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/holidays/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЛеТа --
/*
$img_name = "r11497.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11497/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника ЛеТа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Градус --
$img_name = "r11319.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11319/";
$imgadv[$img_name]["alt"] = "Градус";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/machinery-rent/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сауна-клуб El Pirata --
$img_name = "r3137.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3137/";
$imgadv[$img_name]["alt"] = "Сауна-клуб El Pirata";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЕвроАэроБетон --
$img_name = "r27857.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27857/";
$imgadv[$img_name]["alt"] = "Завод ЕвроАэроБетон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/brick/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Таллинские бани --
$img_name = "r2902.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2902/";
$imgadv[$img_name]["alt"] = "Таллинские бани";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Большая разница --
/*$img_name = "r27827.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27827/";
$imgadv[$img_name]["alt"] = "Большая разница";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/servicing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Туроператор Фирма ФОРОС --
/*$img_name = "foros240x400-27275.jpg"; 
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://foros.spb.ru/";
$imgadv[$img_name]["alt"] = "Туроператор Фирма ФОРОС";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Артикул --
$img_name = "r3975.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3975/";
$imgadv[$img_name]["alt"] = "Сеть обувных магазинов Артикул";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Виктория --
$img_name = "r3053.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3053/";
$imgadv[$img_name]["alt"] = "Торговый центр Виктория";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Боди Тонус --
/*$img_name = "r3052.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3052/";
$imgadv[$img_name]["alt"] = "Женский клуб Боди Тонус";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/fitness/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it СОТЕР --
/*$img_name = "r12775.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12775/";
$imgadv[$img_name]["alt"] = "СОТЕР";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/tuning/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Агропитомник Татьяна 30,10,2015--
/*$img_name = "r3186.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3186/";
$imgadv[$img_name]["alt"] = "Агропитомник Татьяна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/flowers/seedlings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лето оптом --
$img_name = "r22913.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22913/";
$imgadv[$img_name]["alt"] = "Сеть оптово-розничных цветочных магазинов Лето оптом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/flowers/bouquets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эксклюзив --
$img_name = "r27789.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27789/";
$imgadv[$img_name]["alt"] = "Центр эксклюзивных размеров обуви Эксклюзив";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания iEstates --
/*$img_name = "r27786.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27786/";
$imgadv[$img_name]["alt"] = "Компания iEstates";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/realestate/abroad/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it  Холдинг Atlantis Bulgaria --
/*$img_name = "r27775.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27775/";
$imgadv[$img_name]["alt"] = "Холдинг Atlantis Bulgaria";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/realestate/abroad/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it  КРАТОН КЕРАМИКА --
$img_name = "r27774.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27774/";
$imgadv[$img_name]["alt"] = "кратон керамика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it  Варшавский портной - Ателье Стимул Стиль--
$img_name = "r27773.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27773/";
$imgadv[$img_name]["alt"] = "Салон-ателье Варшавский портной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Atribeaute --
$img_name = "r3124.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3124/";
$imgadv[$img_name]["alt"] = "Академия пластической хирургии, медицинской косметологии и эстетической стоматологии Atribeaute";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/plastics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Росмед Плюс --
$img_name = "r9526.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9526/";
$imgadv[$img_name]["alt"] = "Медицинский центр Росмед Плюс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Универмаг Спорт --
/*$img_name = "r3116.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3116/";
$imgadv[$img_name]["alt"] = "Универмаг Спорт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/sport/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Меридиан 30,10,2015--
$img_name = "r27735.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27735/";
$imgadv[$img_name]["alt"] = "Детский оздоровительный лагерь Меридиан";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/rest/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ситроен --
$img_name = "r7495.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7495/";
$imgadv[$img_name]["alt"] = "Ситроен";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/car/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ДёминиК --
$img_name = "r10167.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10167/";
$imgadv[$img_name]["alt"] = "ДёминиК";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/trucks-service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дизайн-студия Креатив --
/*$img_name = "r2765.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2765/";
$imgadv[$img_name]["alt"] = "Дизайн-студия Креатив";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/curtains/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лицей --
/*$img_name = "r27717.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27717/";
$imgadv[$img_name]["alt"] = "Негосударственное образовательное учреждение Лицей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/kindergarten/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Гранитная мастерская Памятники, ограды, фотоэмали --
$img_name = "r12763.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12763/";
$imgadv[$img_name]["alt"] = "Гранитная мастерская Памятники, ограды, фотоэмали";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/miscellanea/ritual/*"][] = $img_name;

/*
$img_name = "pamytniki468x60-12763.swf";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["url"] = "http://www.lazarev-granit.ru/";
$imgadv[$img_name]["style"] = "background:#EC9844;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/miscellanea/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
///it Мистер ПылеSOS --
/*$img_name = "r27727.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27727/";
$imgadv[$img_name]["alt"] = "Клининговая компания Мистер ПылеSOS";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Мика --
$img_name = "r3007.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3007/";
$imgadv[$img_name]["alt"] = "Мика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/flowers/seedlings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ФлореХеми --
/*$img_name = "r27719.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27719/";
$imgadv[$img_name]["alt"] = "ФлореХеми Северо-Запад";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/cleaning/abstergents/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Форсаж --
$img_name = "r27716.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27716/";
$imgadv[$img_name]["alt"] = "Автосервис СТО Форсаж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/service/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Interform Studio --
$img_name = "r27709.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27709/";
$imgadv[$img_name]["alt"] = "Мебельный салон Interform Studio";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Илиас --
$img_name = "r3077.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3077/";
$imgadv[$img_name]["alt"] = "Илиас";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/warehousing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Спецодежда --
$img_name = "r24.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24/";
$imgadv[$img_name]["alt"] = "Спецодежда";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/overalls/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it НАРКОМ.РУ --
/*$img_name = "r17384.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17384/";
$imgadv[$img_name]["alt"] = "Клиника НАРКОМ.РУ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/addictions/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кредитный Экспресс --
/*$img_name = "r27699.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27699/";
$imgadv[$img_name]["alt"] = "Финансовая компания Кредитный Экспресс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/credits/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Шаляпин --
$img_name = "r5823.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/5823/";
$imgadv[$img_name]["alt"] = "Караоке-клуб Шаляпин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/nightclubs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Секунда --
/*$img_name = "r23440.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23440/";
$imgadv[$img_name]["alt"] = "Часовой сервис Секунда";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/sharpening/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it СЕйЧас --
/*$img_name = "r27679.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27679/";
$imgadv[$img_name]["alt"] = "СЕйЧас";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/taxi/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Евросервис --
/*$img_name = "r27678.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27678/";
$imgadv[$img_name]["alt"] = "Транспортная компания Евросервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/passenger/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Радуга --
/*$img_name = "r21123.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21123/";
$imgadv[$img_name]["alt"] = "Федеральная сеть аптек Аптека Радуга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/pharmacies/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фрекен Бок --
$img_name = "r4074.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4074/";
$imgadv[$img_name]["alt"] = "Агентство Елены Тихоновой Фрекен Бок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/staff/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it центр Опека --
$img_name = "r8851.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8851/";
$imgadv[$img_name]["alt"] = "Социальный гериатрический центр Опека";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Адвокатская консультация №6 --
$img_name = "r2838.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2838/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургская городская коллегия адвокатов Адвокатская консультация №6";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/advocate/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Золото Якутии --
$img_name = "r7682.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7682/";
$imgadv[$img_name]["alt"] = "Золото Якутии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/jewelry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Белый квадрат --
/*$img_name = "r27668.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27668/";
$imgadv[$img_name]["alt"] = "Багетная мастерская Белый квадрат";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/designing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Доктор Нона --
/*$img_name = "r27667.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27667/";
$imgadv[$img_name]["alt"] = "Доктор Нона";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/perfumer/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it АС Моторс --
/*$img_name = "r27656.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27656/";
$imgadv[$img_name]["alt"] = "Автосервис АС Моторс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Геоид --
$img_name = "r27648.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27648/";
$imgadv[$img_name]["alt"] = "Строительная компания Геоид";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/earthworks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЮРС-Строй --
/*$img_name = "r27649.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27649/";
$imgadv[$img_name]["alt"] = "Строительная компания ЮРС-Строй";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Тепличный выбор --
/*$img_name = "r8959.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8959/";
$imgadv[$img_name]["alt"] = "Компания Тепличный выбор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/metal-constructions/*"][] = $img_name;

$img_name = "parniki-468x60-8959.gif";
$imgadv[$img_name]["url"] = "http://www.spbparniki.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["style"] = "background:#3d962e;";
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/cottage/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/cottage/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ServiceBox --
/*$img_name = "r27637.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27637/";
$imgadv[$img_name]["alt"] = "ServiceBox";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Космос Золото --
/*$img_name = "r20389.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20389/";
$imgadv[$img_name]["alt"] = "Ювелирная компания Космос Золото";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/jewels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ФинСтройКомплект --
/*$img_name = "r27636.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27636/";
$imgadv[$img_name]["alt"] = "ФинСтройКомплект";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Звукоизоляционные Эко Системы --
/*$img_name = "r25792.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25792/";
$imgadv[$img_name]["alt"] = "Звукоизоляционные Эко Системы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/protections/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Новый век --
/*$img_name = "r10234.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10234/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Новый век";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Компания Remi Group --
$img_name = "r27626.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27626/";
$imgadv[$img_name]["alt"] = "Компания Remi Group";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/office/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it НеоДекор --
$img_name = "r27571.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27571/";
$imgadv[$img_name]["alt"] = "НеоДекор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/restaurant/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инстрим --
$img_name = "r3081.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3081/";
$imgadv[$img_name]["alt"] = "Инстрим";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/hand-tools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Коллибри --
/*$img_name = "r3698.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3698/";
$imgadv[$img_name]["alt"] = "Коллибри";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/books/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Русь --
$img_name = "r17936.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17936/";
$imgadv[$img_name]["alt"] = "Пансион для пожилых людей Русь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/elderly/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сеть магазинов Marca --
$img_name = "r11702.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11702/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Marca";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/clothes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТРЕСТ --
$img_name = "r26746.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26746/";
$imgadv[$img_name]["alt"] = "ТРЕСТ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Транспортная компания Вираж --
$img_name = "r3221.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3221/";
$imgadv[$img_name]["alt"] = "Транспортная компания Вираж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/salvaging/export/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Фирма Севзапметалл --
$img_name = "r1688.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1688/";
$imgadv[$img_name]["alt"] = "Фирма Севзапметалл";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/metal/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариус нотариального округа СПб Никитина Нелли Эрнестовна --
/*$img_name = "r20307.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20307/";
$imgadv[$img_name]["alt"] = "Нотариус нотариального округа СПб Никитина Нелли Эрнестовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Санкт-Петербургская городская станция по борьбе с болезнями животных --
$img_name = "r2600.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2600/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургская городская станция по борьбе с болезнями животных";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/veterinarian-call/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Рентэк --
$img_name = "r2785.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2785/";
$imgadv[$img_name]["alt"] = "Рентэк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/banquets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Комиссионный на Пушкинской --
$img_name = "r27298.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27298/";
$imgadv[$img_name]["alt"] = "Комиссионный магазин на Пушкинской";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/commission/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Магазин Графит --
/*$img_name = "r27552.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27552/";
$imgadv[$img_name]["alt"] = "Магазин Графит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/art/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дворец Белосельских-Белозерских --
$img_name = "r2836.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2836/";
$imgadv[$img_name]["alt"] = "Дворец Белосельских-Белозерских";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТД ОниксМет --
$img_name = "r27548.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27548/";
$imgadv[$img_name]["alt"] = "ТД ОниксМет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/metal/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ветки --
/*$img_name = "r2862.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2862/";
$imgadv[$img_name]["alt"] = "Ветки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/electric-tools/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it СМТ --
/*$img_name = "r27546.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27546/";
$imgadv[$img_name]["alt"] = "Строительные Монтажные Технологии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
///it Садахар --
$img_name = "r27547.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27547/";
$imgadv[$img_name]["alt"] = "Садахар";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Реванш СПб 10.09.2015--
////$imgadv[$img_name]["url"] = "http://www.revansh-plus.ru/";//www.revanshspb.ru

$img_name = "r7658.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7658/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/metal/*"][] = $img_name;


$img_name = "revansh468x60.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.revansh-plus.ru/";
$imgadv[$img_name]["alt"] = "Реванш СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бармалеева --
$img_name = "r3401.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3401/";
$imgadv[$img_name]["alt"] = "Ювелирная мастерская Бармалеева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/sharpening/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ЮТТА --
/*$img_name = "r8965.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8965/";
$imgadv[$img_name]["alt"] = "ЮТТА - творец уюта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Инвалидные коляски --
/*$img_name = "r3850.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3850/";
$imgadv[$img_name]["alt"] = "Инвалидные коляски и технические средства реабилитации";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/disabled/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Приморский авторынок --
/*$img_name = "r11974.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11974/";
$imgadv[$img_name]["alt"] = "Приморский авторынок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/used-cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дом мебели Нарвский --
$img_name = "r26410.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26410/";
$imgadv[$img_name]["alt"] = "Дом мебели Нарвский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;

$img_name = "dom-mebeli-narvski240x400x1-26410.swf";
$imgadv[$img_name]["url"] = "http://www.savspb.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/26410/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it ОМС-СПб --
$img_name = "r4414.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4414/";
$imgadv[$img_name]["alt"] = "ОМС-СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/cleaning/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Lorena 26,10,2015--
$img_name = "r22259.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22259/";
$imgadv[$img_name]["alt"] = "Сеть магазинов текстиля для дома Lorena";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/textiles/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Outdoor – центр Трамонтана --
$img_name = "r27370.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27370/";
$imgadv[$img_name]["alt"] = "Outdoor – центр Трамонтана";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/hunting/equipment/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Терра-СВ --
$img_name = "r16210.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16210/";
$imgadv[$img_name]["alt"] = "Терра-СВ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cottage/beautification/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания АДВ --
/*$img_name = "r914.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/914/";
$imgadv[$img_name]["alt"] = "Компания АДВ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/metal-fabrication/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it РосПродТорг --
$img_name = "r2656.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2656/";
$imgadv[$img_name]["alt"] = "РосПродТорг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cleaning/hygienics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it НПО Ресурс --
$img_name = "r3816.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3816/";
$imgadv[$img_name]["alt"] = "НПО Ресурс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/warehousing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Бродвей-дизайн --
$img_name = "r2527.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2527/";
$imgadv[$img_name]["alt"] = "Студия красоты Бродвей-дизайн";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МебельПРОФИ --
/*$img_name = "r27351.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27351/";
$imgadv[$img_name]["alt"] = "Мастерская по ремонту мебели МебельПРОФИ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/servicing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Виолетта --
/*$img_name = "r3693.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3693/";
$imgadv[$img_name]["alt"] = "Меховой салон Виолетта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Содружество --
/*$img_name = "r11753.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11753/";
$imgadv[$img_name]["alt"] = "Компания Содружество";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ФитнесБар --
/*$img_name = "r7017.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7017/";
$imgadv[$img_name]["alt"] = "ФитнесБар";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/nutrition/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора Аверьянова --
$img_name = "r4321.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4321/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Аверьянова Андрея Сергеевича";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Инвестиции в золото --
$img_name = "r27333.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27333/";
$imgadv[$img_name]["alt"] = "Компания Инвестиции в золото";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/investments/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Неруд --
/*$img_name = "r27289.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27289/";
$imgadv[$img_name]["alt"] = "Управляющая компания Возрождение-Неруд";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/roadworks/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Поликлиника стоматологическая №21 --
$img_name = "r27326.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27326/";
$imgadv[$img_name]["alt"] = "Поликлиника городская стоматологическая №21";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Юрист Нарышкиных --
$img_name = "r27325.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27325/";
$imgadv[$img_name]["alt"] = "Юрист адвокатской коллегии Нарышкиных Беляева Светлана Викторовна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/advice/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мобильные энергосистемы --
$img_name = "r2417.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2417/";
$imgadv[$img_name]["alt"] = "Мобильные энергосистемы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/electrical/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Институт Психологии --
$img_name = "r4120.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4120/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский Государственный Институт Психологии и Социальной работы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/universities/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Keyhous --
$img_name = "r27312.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27312/";
$imgadv[$img_name]["alt"] = "Строительная компания Keyhous";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/structures/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Товары для животных --
$img_name = "r2489.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2489/";
$imgadv[$img_name]["alt"] = "Товары для животных";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/products/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автошкола Волна --
/*$img_name = "r2810.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2810/";
$imgadv[$img_name]["alt"] = "Автошкола Волна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/schools/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Цветочная Лавка FLOWER'S-shop --
$img_name = "r27302.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27302/";
$imgadv[$img_name]["alt"] = "Цветочная Лавка FLOWER'S-shop";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/flowers/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ограждение СПб --
$img_name = "r4032.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4032/";
$imgadv[$img_name]["alt"] = "Ограждение СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/metal/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Арт кафе Заводные яйца --
/*$img_name = "r24397.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24397/";
$imgadv[$img_name]["alt"] = "Арт кафе Заводные яйца";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/cafes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЕвроМир --
/*$img_name = "r27296.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27296/";
$imgadv[$img_name]["alt"] = "Мебельная фабрика ЕвроМир";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/parts/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Узор-Тур --
$img_name = "r27287.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27287/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Тоун --
$img_name = "r2853.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2853/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Предприятие Узор --
$img_name = "r27284.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27284/";
$imgadv[$img_name]["alt"] = "Предприятие Узор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sewing/fabrics/*"][] = $img_name;

$img_name = "uzor240x400-27284.swf";
$imgadv[$img_name]["url"] = "http://uzor.biz/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/huntworld240x400x1-13195.jpg";
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/27284/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Бель этаж --
$img_name = "beletage468x60-23189.jpg"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://beletagemebel.ru/";
$imgadv[$img_name]["alt"] = "Бель этаж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компания Мэйджик Сан --
/*$img_name = "r4191.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4191/";
$imgadv[$img_name]["alt"] = "Компания Мэйджик Сан";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/salons/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ситилаб --
$img_name = "r27276.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27276/";
$imgadv[$img_name]["alt"] = "Ситилаб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Туроператор Фирма Форос --
/*$img_name = "r27275.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27275/";
$imgadv[$img_name]["alt"] = "Туроператор Фирма Форос";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кафе-клуб Jasmin --
$img_name = "r16895.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16895/";
$imgadv[$img_name]["alt"] = "Кафе-клуб Jasmin";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/cafes/*"][] = $img_name;

// -------------------------------------------------------------------------------------------------
//it Ефимыч --
/*$img_name = "r27257.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27257/";
$imgadv[$img_name]["alt"] = "Торгово-строительная компания Ефимыч";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мариинский театр --
$img_name = "r4116.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4116/";
$imgadv[$img_name]["alt"] = "Государственный академический Мариинский театр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/theaters/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Татьяны Компанец --
$img_name = "r26767.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26767/";
$imgadv[$img_name]["alt"] = "Ателье-салон меха Татьяны Компанец";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sewing/furs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания Радуга Потолков --
/*$img_name = "r27244.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27244/";
$imgadv[$img_name]["alt"] = "Компания Радуга Потолков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/ceilings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it УЦ НЕРА --
/*$img_name = "nera468х60-2552.gif";
$imgadv[$img_name]["url"] = "http://www.nera.ru/";
$imgadv[$img_name]["alt"] = "УЦ НЕРА";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/health/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Парфюмеръ --
/*$img_name = "r11748.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11748/";
$imgadv[$img_name]["alt"] = "Салоны Парфюмеръ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/cosmetics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лечим мебель --
$img_name = "r12098.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12098/";
$imgadv[$img_name]["alt"] = "Мебельная мастерская Лечим мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/servicing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Дядя Сэм --
/*$img_name = "r25737.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25737/";
$imgadv[$img_name]["alt"] = "Магазин джинсовой одежды Дядя Сэм";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/jeans/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Узор --
$img_name = "r22009.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22009/";
$imgadv[$img_name]["alt"] = "Магазин тканей Узор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sewing/fabrics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Табачная лавка №1 --
/*$img_name = "r3105.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3105/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Табачная лавка №1";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/tobacco/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Красный ТД Ярс --
$img_name = "r23191.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23191/";
$imgadv[$img_name]["alt"] = "ТД Ярс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/overalls/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Красный Октябрь-Нева --
$img_name = "r2817.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2817/";
$imgadv[$img_name]["alt"] = "Красный Октябрь-Нева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cottage/technics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтик Лайнс Тур --
/*
$img_name = "baltic_lines468x60-27112.jpg";
$img_places["adv2_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.balticlines.ru/index.php?option=com_content&view=article&id=52&Itemid=51";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["urls"]["/catalog/transportations/*"][] = $img_name;

$img_name = "baltic_lines_1_468x60-27112.jpg";
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.balticlines.spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;

$img_name = "baltic_lines_2_468x60-27112.jpg";
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://nord.balticlines.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/transportations/*"][] = $img_name;

$img_name = "baltic_lines_3_468x60-27112.jpg";
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://vp.balticlines.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["urls"]["/catalog/transportations/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Барбариска --
/*$img_name = "r27084.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/27084/";
$imgadv[$img_name]["alt"] = "Арт-студия Барбариска";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it АртМедиЯ --
$img_name = "r3662.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3662/";
$imgadv[$img_name]["alt"] = "Клиника флебологии и медицинской косметологии АртМедиЯ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Клиническая больница №122 --
$img_name = "r26654.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26654/";
$imgadv[$img_name]["alt"] = "ФГБУЗ Клиническая больница №122 имени Л.Г.Соколова ФМБА России";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hospitals/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Эра Окон --
/*
$img_name = "r26746.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26746/";
$imgadv[$img_name]["alt"] = "Эра Окон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Новая волна 13.11.2015 19.11.2015--
$img_name = "r26901.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26901/";
$imgadv[$img_name]["alt"] = "Центр слухопротезирования Новая волна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Прима-СПб --
$img_name = "r20030.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20030/";
$imgadv[$img_name]["alt"] = "Прима-СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/stoneworks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Первый Интернет Канал --
$img_name = "r17080.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17080/";
$imgadv[$img_name]["alt"] = "Первый Интернет Канал";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/advertise/*"][] = $img_name;
$img_places["adv1_2"]["urls"]["/"][] = $img_name;
$img_places["adv1_6"]["urls"]["/"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Зоомагазины Енот --
$img_name = "r11337.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11337/";
$imgadv[$img_name]["alt"] = "Зоомагазины Енот";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/products/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Смурова 11.11.2015--
/*$img_name = "r26886.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26886/";
$imgadv[$img_name]["alt"] = "Оптика Стиль ИП Смурова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/glasses/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ПАКС --
$img_name = "r26893.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26893/";
$imgadv[$img_name]["alt"] = "Городской пародонтологический центр ПАКС";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания Петросфера 18.09.2015 --
/*$img_name = "r21055.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21055/";
$imgadv[$img_name]["alt"] = "Компания Петросфера";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/ceilings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Вера --
$img_name = "r26877.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26877/";
$imgadv[$img_name]["alt"] = "Стоматология Вера+";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Русская обувь --
$img_name = "r24020.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24020/";
$imgadv[$img_name]["alt"] = "Торговое предприятие Русская обувь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мебельная компания Кабриоль 30,10,2015--
/*$img_name = "r26802.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26802/";
$imgadv[$img_name]["alt"] = "Мебельная компания Кабриоль";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/custom/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Памятники Галерея камня --
/*$img_name = "r26769.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26769/";
$imgadv[$img_name]["alt"] = "Памятники Галерея камня";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/stoneworks/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Арктур Мебель --
/*$img_name = "r26768.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26768/";
$imgadv[$img_name]["alt"] = "Мебельный салон Арктур Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лаура --
/*$img_name = "r11302.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11302/";
$imgadv[$img_name]["alt"] = "Дилерская сеть Лаура";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/car/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стимул --
/*$img_name = "r4128.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4128/";
$imgadv[$img_name]["alt"] = "Стимул";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/roofings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мир камня --
/*$img_name = "r26756.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26756/";
$imgadv[$img_name]["alt"] = "Компания Мир камня";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/stoneworks/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Александровская больница --
$img_name = "r2839.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2839/";
$imgadv[$img_name]["alt"] = "СПб ГБУЗ Александровская больница";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hospitals/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Хваловские Воды --
$img_name = "r13238.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13238/";
$imgadv[$img_name]["alt"] = "Хваловские Воды";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/water/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сакура Доставка суши --
$img_name = "sakura240x400-13180.jpg";
$imgadv[$img_name]["url"] = "http://4588888.ru/";
$imgadv[$img_name]["alt"] = "Сакура Доставка суши";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/13180/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it АВЕРС-ломбард Ломбард и Автоломбард --
$img_name = "r1553.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1553/";
$imgadv[$img_name]["alt"] = "АВЕРС-ломбард Ломбард и Автоломбард";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/pawn-shops/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компания САНТЕХНИК --
/*$img_name = "r26765.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26765/";
$imgadv[$img_name]["alt"] = "Компания САНТЕХНИК";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/systems/*"][] = $img_name;


$img_name = "santehnik240x400-26765.jpg";
$imgadv[$img_name]["url"] = "http://prof-santehnik.ru/";
$imgadv[$img_name]["alt"] = "Компания САНТЕХНИК";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/26765/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ДНП Чикинское озеро --
/*$img_name = "r26764.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26764/";
$imgadv[$img_name]["alt"] = "ДНП Чикинское озеро";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/realestate/sale/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Финхаус --
/*$img_name = "r26665.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26665/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/cottage/beautification/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мастерская колпаков --
/*$img_name = "r26722.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26722/";
$imgadv[$img_name]["alt"] = "Мастерская колпаков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/roofings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Хеликс --
/*$img_name = "r3623.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3623/";
$imgadv[$img_name]["alt"] = "Лабораторная служба Хеликс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Белорусская косметика и трикотаж --
$img_name = "r2614.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2614/";
$imgadv[$img_name]["alt"] = "Белорусская косметика и трикотаж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/health/cosmetics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Спектр --
/*$img_name = "r14917.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14917/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Спектр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/perfumer/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it REMMARK --
/*$img_name = "r21391.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21391/";
$imgadv[$img_name]["alt"] = "REMMARK";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/alternative/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебельный Континент --
/*$img_name = "r4319.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4319/";
$imgadv[$img_name]["alt"] = "Мебельный Континент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Doritis --
$img_name = "r23774.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23774/";
$imgadv[$img_name]["alt"] = "Сеть салонов цветов, подарков и предметов интерьера Doritis";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/flowers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Моя Клиника --
/*$img_name = "r16148.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16148/";
$imgadv[$img_name]["alt"] = "Сеть медицинских клиник Моя Клиника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/family/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Орион --
/*
$img_name = "r24392.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24392/";
$imgadv[$img_name]["alt"] = "Технический центр Орион";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/electro/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аванс --
$img_name = "r2566.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2566/";
$imgadv[$img_name]["alt"] = "Производственная фирма Аванс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/packing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Классика --
$img_name = "r1960.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1960/";
$imgadv[$img_name]["alt"] = "Театральное ателье Классика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/representations/*"][] = $img_name;
// ------------------------------------------------------------------------------------------------- 
//it MS-Мебель --
/*
$img_name = "r24215.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24215/";
$imgadv[$img_name]["alt"] = "MS-Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/custom/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Рабочий-3 --
$img_name = "r3955.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3955/";
$imgadv[$img_name]["alt"] = "Рабочий-3";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/uniforms/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/* //it Валенсия --
$img_name = "r16353.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16353/";
$imgadv[$img_name]["alt"] = "Валенсия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/parts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it 8 марта --
$img_name = "r2912.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2912/";
$imgadv[$img_name]["alt"] = "Фабрика мебели 8 марта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ресторан У Горчакова --
/*
$img_name = "r19428.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19428/";
$imgadv[$img_name]["alt"] = "Ресторан У Горчакова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дан-Стар-Ком --
$img_name = "r4036.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4036/";
$imgadv[$img_name]["alt"] = "Дан-Стар-Ком";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/clubs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автограф --
/*$img_name = "r3614.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3614/";
$imgadv[$img_name]["alt"] = "Техцентр Автограф";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мединеф --
/*$img_name = "r3039.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3039/";
$imgadv[$img_name]["alt"] = "Клиника Мединеф";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ПрофСервис --
/*
$img_name = "r23972.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23972/";
$imgadv[$img_name]["alt"] = "Компания ПрофСервис Союз";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/systems/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Петровский колледж --
/*$img_name = "r7553.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7553/";
$imgadv[$img_name]["alt"] = "СПб ГБОУ СПО Петровский колледж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/colleges/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Пейнтбольный клуб PB21 --
/*$img_name = "r25504.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25504/";
$imgadv[$img_name]["alt"] = "Пейнтбольный клуб PB21";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/active/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ВетСеть --
/*$img_name = "r3734.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3734/";
$imgadv[$img_name]["alt"] = "ВетСеть";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Амира-Свет --
$img_name = "r4065.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4065/";
$imgadv[$img_name]["alt"] = "Амира-Свет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/light/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Восьмая клиника --
/*$img_name = "r23474.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23474/";
$imgadv[$img_name]["alt"] = "Медицинский центр Восьмая клиника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мегатек --
/*$img_name = "r25385.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25385/";
$imgadv[$img_name]["alt"] = "Мегатек";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/sanitary/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Zona Zvuka --
/*
$img_name = "r3558.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3558/";
$imgadv[$img_name]["alt"] = "Музыкальный гипермаркет Zona Zvuka";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/music/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Амикс --
$img_name = "r20366.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20366/";
$imgadv[$img_name]["alt"] = "Компания Амикс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/trading/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Мир соблазна --
$img_name = "r17265.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17265/";
$imgadv[$img_name]["alt"] = "Интернет-магазин Мир соблазна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/underwear/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Меховое золото --
/*$img_name = "r4064.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4064/";
$imgadv[$img_name]["alt"] = "Меховое золото";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Маттино Обувь --
/*$img_name = "r4385.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4385/";
$imgadv[$img_name]["alt"] = "Обувные супермаркеты Маттино Обувь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/shoes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Элеос --
/*
$img_name = "r24055.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24055/";
$imgadv[$img_name]["alt"] = "Многопрофильный медицинский центр Элеос";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Экономический университет --
$img_name = "r6455.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6455/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский государственный Экономический университет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/universities/*"][] = $img_name;


$img_name = "economuniver-468x60.gif";
$imgadv[$img_name]["url"] = "http://unecon.ru/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский государственный Экономический университет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/"][] = $img_name;

$img_name = "finek240x400-6455.gif";
$imgadv[$img_name]["url"] = "http://www.unecon.ru/";
$imgadv[$img_name]["alt"] = "Экономический университет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/6455/*"][] = $img_name;

$img_name = "finek240x400-6455.gif";
$imgadv[$img_name]["url"] = "http://www.unecon.ru/";
$imgadv[$img_name]["alt"] = "Экономический университет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/education/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------

// -------------------------------------------------------------------------------------------------
//it Аварийная служба --
$img_name = "r3874.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3874/";
$imgadv[$img_name]["alt"] = "Аварийная служба - вскрытие замков 400-50-20";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/emergency/opening-doors/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автошкола Автопилот --
$img_name = "r11698.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11698/";
$imgadv[$img_name]["alt"] = "Автошкола Автопилот";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/schools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Городская больница №26 --
/*$img_name = "r8957.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8957/";
$imgadv[$img_name]["alt"] = "СПб государственное учреждение здравоохранения Городская больница №26";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/hospitals/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Капитал Полис - Мед 26,10,2015--
$img_name = "r2036.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2036/";
$imgadv[$img_name]["alt"] = "Страховая компания Капитал Полис - Мед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/finances/insurance/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Немецкая обувь --
$img_name = "r13020.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13020/";
$imgadv[$img_name]["alt"] = "Сеть салонов Немецкая обувь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it КУБ --
/*$img_name = "r24839.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24839/";
$imgadv[$img_name]["alt"] = "Архитектурное бюро КУБ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/design/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it У Петровича --
/*$img_name = "r24290.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24290/";
$imgadv[$img_name]["alt"] = "Ресторанчик У Петровича";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it IKEA --
/*$img_name = "r3951.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3951/";
$imgadv[$img_name]["alt"] = "Магазин IKEA";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/goods4house/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it 1000 и одна туфелька --
/*$img_name = "r3924.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3924/";
$imgadv[$img_name]["alt"] = "1000 и одна туфелька";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/children/clothing/*"][] = $img_name;
*/
/*$img_name = "tufelka468x60-3924.gif";
$imgadv[$img_name]["url"] = "http://www.tufelka.spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/children/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/children/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Студия Мастер Видео --
$img_name = "r8864.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8864/";
$imgadv[$img_name]["alt"] = "Студия Мастер Видео";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/foto-video/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вальма53 --
/*$img_name = "r26605.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26605/";
$imgadv[$img_name]["alt"] = "Строительная компания Вальма53";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Альфа-М 08.09.2015 --
/*$img_name = "r26603.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26603/";
$imgadv[$img_name]["alt"] = "Альфа-М";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/electric-tools/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Адвокатская консультация №15 --
$img_name = "r26583.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26583/";
$imgadv[$img_name]["alt"] = "Адвокатская консультация №15 Санкт-Петербургская городская коллегия адвокатов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Чистякоф --
$img_name = "r26593.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26593/";
$imgadv[$img_name]["alt"] = "Химчистки и прачечные Чистякоф";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Shop Couture --
/*$img_name = "r26592.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26592/";
$imgadv[$img_name]["alt"] = "Интернет-магазин модной одежды Shop Couture";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/boutiques/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Школа Индивидуальной Подготовки --
/*$img_name = "r19682.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19682/";
$imgadv[$img_name]["alt"] = "Школа Индивидуальной Подготовки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кабинет --
/*$img_name = "r85.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/85/";
$imgadv[$img_name]["alt"] = "Компания Кабинет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/office/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Агентство домашнего персонала Ангелы уюта --
$img_name = "r26361.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26361/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/staff/*"][] = $img_name;


/*$img_name = "au234.swf"; 
$img_places["adv2_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26361/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#f6aa5f;"; //#6197c8
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стоматология комфорта --
/*$img_name = "r26503.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26503/";
$imgadv[$img_name]["alt"] = "Стоматология комфорта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
/*$img_places["adv1_1"]["urls"]["/catalog/medicine/*"][] = $img_name;*/
// -------------------------------------------------------------------------------------------------
//it Новый Дом --
/*$img_name = "r26394.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26394/";
$imgadv[$img_name]["alt"] = "Строительная компания Новый Дом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Прометей --
/*$img_name = "r20025.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20025/";
$imgadv[$img_name]["alt"] = "Прометей";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/fire/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фирма Часики --
$img_name = "r21399.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21399/";
$imgadv[$img_name]["alt"] = "Фирма Часики";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/clocks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Загородная мечта --
$img_name = "r26029.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/26029/";
$imgadv[$img_name]["alt"] = "СК Загородная мечта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стройтех --
/*$img_name = "r25804.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25804/";
$imgadv[$img_name]["alt"] = "Стройтех";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ателье Мастерская Елены Прекрасной --
/*$img_name = "r25601.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25601/ ";
$imgadv[$img_name]["alt"] = "Ателье Мастерская Елены Прекрасной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Schwaben Keller --
$img_name = "r25545.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25545/";
$imgadv[$img_name]["alt"] = "Баварский ресторан-пивоварня Schwaben Keller";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/beer/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Страховой центр --
/*$img_name = "r4374.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4374/";
$imgadv[$img_name]["alt"] = "Страховой центр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/insurance/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мегатек --
/*$img_name = "megatek468x60-25385.swf";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["url"] = "http://megatekspb.ru/";
$imgadv[$img_name]["style"] = "background:#EC9844;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Профюрист --
/*$img_name = "r25521.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25521/";
$imgadv[$img_name]["alt"] = "Юридическая компания Профюрист";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/advice/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Константин Перевозчиков --
$img_name = "voditel_dlya_vas468x60.jpg";
$imgadv[$img_name]["url"] = "http://vk.com/voditel_dlya_vas";
$imgadv[$img_name]["alt"] = "Константин Перевозчиков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it femida.spb.ru --
$img_name = "femidaspb468x60.jpg";
$imgadv[$img_name]["url"] = "http://femida.spb.ru/?cat=9";
$imgadv[$img_name]["alt"] = "femida.spb.ru";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/legal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Меридиан-Байк --
/*$img_name = "r25347.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25347/";
$imgadv[$img_name]["alt"] = "Интернет-магазин велосипедов Меридиан-Байк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sports/bicycles/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Звезда Невы --
$img_name = "r1866.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1866/";
$imgadv[$img_name]["alt"] = "Звезда Невы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/car/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автокомплекс на Тележной  --
/*
$img_name = "r16903.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16903/";
$imgadv[$img_name]["alt"] = "Автокомплекс на Тележной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/tyre-fitting/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Отис-Строй  --
$img_name = "r19554.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19554/";
$imgadv[$img_name]["alt"] = "Строительная компания Отис-Строй";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Пейнтбол клуб РВ21 --
$img_name = "pb21-468x60x1.swf"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.pb21.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#f6aa5f;"; //#6197c8
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/rest/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Robin Bad  --
/*$img_name = "r25056.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.008.ru/count/?http://www.robinbad.com";
$imgadv[$img_name]["alt"] = "Пейнтбольный клуб Robin Bad";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/active/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Design Tet-A-Tet  --
/*$img_name = "r25081.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/25081/";
$imgadv[$img_name]["alt"] = "Design Tet-A-Tet";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/design/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it У Петровича --
/*$img_name = "petrovich468x60x1-24290.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.008.ru/company/24290/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["style"] = "background:#ec9844;";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/petrovich468x60x1-24290.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it MS-Мебель  --
/*
$img_name = "r24215.swf"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.008.ru/company/24215/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "MS-Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/servicing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Манго Телеком --
//$img_name = "mango_15minutes_468x60.swf"; 
//$img_name = "mango_800_ats_468x60.swf";  //2
$img_name = "mango_bestATS_468x60.swf";  //3
//+ заглушка!!!!
$img_places["adv2_1"]["items"][] = $img_name;
//$imgadv[$img_name]["url"] = "http://mango-office.ru/products/virtualnaya_ats?utm_source=008&utm_medium=banner&utm_term=mango-office&utm_content=4a&utm_campaign=vats";
//$imgadv[$img_name]["url"] = "http://mango-office.ru/products/8-800-e_nomera?utm_source=008&utm_medium=banner&utm_term=free-call&utm_content=10n&utm_campaign=8800"; // 2
$imgadv[$img_name]["url"] = "http://mango-office.ru/products/virtualnaya_ats?utm_source=008&utm_medium=banner&utm_term=mango-office&utm_content=1a&utm_campaign=vats"; // 3
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/mango_15minutes_468x60.gif";
$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#f6aa5f;"; //#6197c8
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------


//it Ваш путь --
/*
$img_name = "r24255.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24255/";
$imgadv[$img_name]["alt"] = "Туристическая компания Ваш путь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/
/*$img_name = "vash_put468x60x1-24255.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.008.ru/company/24255/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["style"] = "background:#ec9844;";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/vash_put468x60x1-24255.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лазурный берег --
/*
$img_name = "r24884.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24884/";
$imgadv[$img_name]["alt"] = "Лазурный берег";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Печной Клуб --
/*$img_name = "r24828.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24828/";
$imgadv[$img_name]["alt"] = "Компания Печной Клуб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/stoves/*"][] = $img_name;
*/

/*$img_name = "pechnoiklub468х60-24828.jpg";
$imgadv[$img_name]["url"] = "http://www.pechnoyclub.ru/";
$imgadv[$img_name]["alt"] = "Компания Печной Клуб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Балтийская медицинская клиника --
$img_name = "r3670.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3670/";
$imgadv[$img_name]["alt"] = "Балтийская медицинская клиника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/female-consultation/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Амадеус --
/*
$img_name = "r24418.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24418/";
$imgadv[$img_name]["alt"] = "Ресторан Амадеус";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/banquets/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Интер-Мебель --
/*
$img_name = "r24312.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24312/";
$imgadv[$img_name]["alt"] = "Мебельный салон Интер-Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/custom/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
// Ветеринарная клиника РуВет --
$img_name = "ruvet.swf";
$imgadv[$img_name]["url"] = "http://www.ruvetspb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["type"] = "swf";
/*$imgadv[$img_name]["style"] = "border:1px solid #000; width:466px;height:58px;";*/
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/pets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it РуВет --
$img_name = "r18104.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18104/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника РуВет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Адена --
$img_name = "r2454.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2454/";
$imgadv[$img_name]["alt"] = "Салон-ателье Адена";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it 1-й Городской Санкт-Петербургский Учебный Центр --
/*
$img_name = "r24294.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24294/";
$imgadv[$img_name]["alt"] = "1-й Городской Санкт-Петербургский Учебный Центр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it МирраМед --
/*
$img_name = "r24216.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24216/";
$imgadv[$img_name]["alt"] = "Сеть косметологических клиник МирраМед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it BaltGaz --
/*
$img_name = "r24232.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24232/";
$imgadv[$img_name]["alt"] = "Клиника здоровья и красоты BaltGaz";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Транзит-С --
$img_name = "r19390.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19390/";
$imgadv[$img_name]["alt"] = "Транспортно-экспедиторская компания Транзит-С";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/russia/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Аларм-Моторс --
/*$img_name = "r24231.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/24231/";
$imgadv[$img_name]["alt"] = "Аларм-Моторс Петроградский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Виталь  --
$img_name = "r3525.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3525/";
$imgadv[$img_name]["alt"] = "Петербургская Клиника Виталь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Интернет-магазин Олска --
/*$img_name = "allsca468x60-20430.swf";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["url"] = "http://allsca.ru/";
$imgadv[$img_name]["style"] = "background:#5c9fd3;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/catalog/shops/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Аудиоклиник  --
$img_name = "r2050.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2050/";
$imgadv[$img_name]["alt"] = "Аудиоклиник";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/hearing-aids/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Экспресс Кредит  --
$img_name = "r23190.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23190/";
$imgadv[$img_name]["alt"] = "Экспресс Кредит";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/credits/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компания Окна Века  --
/*$img_name = "r12063.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12063/";
$imgadv[$img_name]["alt"] = "Компания Окна Века";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мир камня  --
/*$img_name = "r13737.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13737/";
$imgadv[$img_name]["alt"] = "Мир камня";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/stoneworks/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Клубный посёлок Альпино  --
$img_name = "r23703.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23703/";
$imgadv[$img_name]["alt"] = "Клубный посёлок Альпино";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it База Отдыха Кивиниеми  --
$img_name = "r23707.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23707/";
$imgadv[$img_name]["alt"] = "База Рафтинга и Активного Отдыха Кивиниеми";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/active/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it ФЛАГМАН  --
$img_name = "r23539.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23539/";
$imgadv[$img_name]["alt"] = "ФЛАГМАН";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/polygraphics/polygraphics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it АКВИЛОН  --
/*$img_name = "r4287.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4287/";
$imgadv[$img_name]["alt"] = "АКВИЛОН";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it КОМПЛЭД  --
$img_name = "r23524.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23524/";
$imgadv[$img_name]["alt"] = "КОМПЛЭД";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/restoration/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it МУЖ НА ЧАС  --
$img_name = "r23506.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23506/";
$imgadv[$img_name]["alt"] = "МУЖ НА ЧАС";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/minor-repair/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дисконт-кровать  --
$img_name = "r23286.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23286/";
$imgadv[$img_name]["alt"] = "Дисконт-кровать";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/tree-file/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Нотариальная контора  --
$img_name = "r22083.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22083/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Ивановой Людмилы Николаевны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СМОЛЕНСКИЕ МАСТЕРСКИЕ  --
$img_name = "r3742.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3742/";
$imgadv[$img_name]["alt"] = "СМОЛЕНСКИЕ МАСТЕРСКИЕ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/stoneworks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Северен --
/*$img_name = "severen170x248.swf";
$imgadv[$img_name]["url"] = "http://www.severen.ru/component/content/article/10-uslugi/307-virtualnyj-telefonnyj-nomer";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/huntworld240x400x1-13195.jpg";
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/legal/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/legal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it СампО  --
/*$img_name = "r23201.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23201/";
$imgadv[$img_name]["alt"] = "СампО";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/floorings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Нова СПб  --
$img_name = "r21865.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21865/";
$imgadv[$img_name]["alt"] = "Нова СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/tableware/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Bel Etage  --
/*$img_name = "r23189.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/23189/";
$imgadv[$img_name]["alt"] = "Мебельный салон Bel Etage";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/salons/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебель Лига  --
/*$img_name = "r16646.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16646/";
$imgadv[$img_name]["alt"] = "Мебель Лига";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/upholstered/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебельная аллея  --
/*$img_name = "r20198.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20198/";
$imgadv[$img_name]["alt"] = "Мебельная аллея";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Секс Шоп Амур  --
$img_name = "r22953.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22953/";
$imgadv[$img_name]["alt"] = "Секс Шоп Амур";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/erotic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Такси Карат  --
$img_name = "r22867.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22867/";
$imgadv[$img_name]["alt"] = "Такси Карат";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/taxi/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Невский форт  --
/*$img_name = "nevskii-fort.gif";
$imgadv[$img_name]["url"] = "http://www.neva-fort.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/furniture*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Магнолия  --
$img_name = "r22895.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22895/";
$imgadv[$img_name]["alt"] = "Салон красоты Магнолия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/health/salons/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Такси kарат --
/*$img_name = "taxikarat468x60x1.gif";
$imgadv[$img_name]["url"] = "http://www.taxikarat.ru/ordertaxi/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;

$img_name = "taxikarat468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.taxikarat.ru/ordertaxi/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/rest/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЮСМ  --
/*$img_name = "utour468x60x1.jpg";
$imgadv[$img_name]["url"] = "http://www.utour.spb.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Велоцентр в Автово  --
$img_name = "r2498.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2498/";
$imgadv[$img_name]["alt"] = "Велоцентр в Автово";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/bicycles/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Быстрый Цвет  --
$img_name = "r7018.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7018/";
$imgadv[$img_name]["alt"] = "Цифровая фабрика Быстрый Цвет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/polygraphics/polygraphics/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ателье Силуэт+  --
$img_name = "r10669.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10669/";
$imgadv[$img_name]["alt"] = "Ателье Силуэт+";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
// Медицинский центр Виталь Интернейшнл
/*$img_name = "vital.swf";
$imgadv[$img_name]["url"] = "http://клиника-виталь.рф/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["style"] = "border:1px solid #000; width:466px;height:58px;";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мир детства  | Би групп --
/*$img_name = "mirdetstva468x60.png";
$imgadv[$img_name]["url"] = "http://www.mirdetstvaspb.ru/";
$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#e23a79;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/children/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Конфеданс --
/*$img_name = "confedance468x60x2.jpg";
$imgadv[$img_name]["url"] = "http://vk.com/club40917355";
$imgadv[$img_name]["alt"] = "Конфеданс";
$imgadv[$img_name]["style"] = "background:#e23a79;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/flowers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Двери Эконом  РСК Невский Альянс ИП --
/*$img_name = "dveri-econom240x400x1.swf";
$imgadv[$img_name]["url"] = "http://www.dveri-econom.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/huntworld240x400x1-13195.jpg";
$img_places["adv4_1"]["items"][] = $img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/building/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/hunting/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/company/13195/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it REMMARK  Медицинский центр Реммарк, стоматология, накопительная система скидок --
/*$img_name = "remmark468x60x1-21391.jpg";
$imgadv[$img_name]["url"] = "http://remmark.su/";
$imgadv[$img_name]["alt"] = "Медицинский центр Реммарк, стоматология, накопительная система скидок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["items"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it МЦ доктора Бубновского  --
/*$img_name = "r22701.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22701/";
$imgadv[$img_name]["alt"] = "Медицинский центр доктора Бубновского";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Леди плюс  --
$img_name = "r3764.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3764/";
$imgadv[$img_name]["alt"] = "Женская одежда больших размеров Леди плюс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Платина-Кострома  --
$img_name = "r4384.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4384/";
$imgadv[$img_name]["alt"] = "Ювелирные магазины Платина-Кострома";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/jewelry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Арина  --
$img_name = "r8813.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8813/";
$imgadv[$img_name]["alt"] = "Торговая компания Арина";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/jewels/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------

/*
//it ВИТАЛЬ  --
$img_name = "r22254.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/22254/";
$imgadv[$img_name]["alt"] = "Медицинский центр Виталь Интернейшнл";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Олев  --
/*$img_name = "r21058.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21058/";
$imgadv[$img_name]["alt"] = "Клиника семейной медицины Олев";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Stenders  --
$img_name = "r6968.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/6968/";
$imgadv[$img_name]["alt"] = "Stenders";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/cosmetics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Туррис  --
/*$img_name = "r19658.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19658/";
$imgadv[$img_name]["alt"] = "Управляющая компания группы отелей Туррис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/hotels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мюзикфорт  --
/*$img_name = "r8350.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8350/";
$imgadv[$img_name]["alt"] = "Мюзикфорт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/music/instruments/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it обуви Liana  --
$img_name = "r11589.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11589/";
$imgadv[$img_name]["alt"] = "Сеть магазинов свадебной обуви Liana";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/wedding/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Кузница Севастьянова  --
/*$img_name = "r21703.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21703/";
$imgadv[$img_name]["alt"] = "Кузница Севастьянова";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/metal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it БЕСТ БУТИК  --
/*$img_name = "r16425.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16425/";
$imgadv[$img_name]["alt"] = "БЕСТ БУТИК";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/boutiques/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сандал Мед  --
/*$img_name = "r7016.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7016/";
$imgadv[$img_name]["alt"] = "Сандал Мед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/commission/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Объединенная Консалтинговая Группа  --
/*$img_name = "r21561.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21561/";
$imgadv[$img_name]["alt"] = "Объединенная Консалтинговая Группа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/realestate/estimation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Равелин ЛТД  --
/*$img_name = "r21317.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/21317/";
$imgadv[$img_name]["alt"] = "Равелин ЛТД";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/security/intercoms/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it НЕВСКИЙ ФОРТ  --
/*$img_name = "r4349.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4349/";
$imgadv[$img_name]["alt"] = "НЕВСКИЙ ФОРТ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/shops/furniture/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Пит.Жакофф  --
/*$img_name = "r10659.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10659/";
$imgadv[$img_name]["alt"] = "Пит.Жакофф";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/clothes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Клиника семейной медицины Олев --
/*$img_name = "olev468x60x1-21058.jpg";
$imgadv[$img_name]["url"] = "/company/21058/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Служба такси Мой город --
/*$img_name = "taxi666-240x400x1.gif";
$imgadv[$img_name]["url"] = "http://taxi-6666665.ru/008#page";
$imgadv[$img_name]["alt"] = "Служба такси Мой город";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/20937/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it БАЛТКЕРАМА = Керама Марацци --
$img_name = "r4316.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4316/";
$imgadv[$img_name]["alt"] = "БАЛТКЕРАМА";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/tile/*"][] = $img_name;

/*
$img_name = "/company/4316/*";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML

<!-- Kavanga.AdEngine START -->
<!-- БАЛТКЕРАМА -->
<!-- ZeroPixel -->
<script language="JavaScript">
<!--
        var kref = '';
        try {kref = escape(document.referrer);} catch(e){};
        var d = document, b = document.body;
        var img = d.createElement('IMG');
        with(img.style){position = 'absolute'; width = '0px'; height = '0px';}
        img.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'b.kavanga.ru/exp?sid=5836&bt=3&bn=1&ct=8&prr=' + kref + '&rnd=' + Math.round(Math.random()*1000000);
        b.insertBefore(img, b.firstChild);
//-->
</script>
<noscript><img src="http://b.kavanga.ru/exp?sid=5836&bt=3&bn=1&ct=8" border=0 width=1 height=1></noscript>
<!-- Kavanga.AdEngine END -->

HTML;
$img_places["adv4_2"]["urls"][$img_name][] = $img_name;
*/


/*
$img_name = "kerama468x60x2-4316.gif";
$imgadv[$img_name]["url"] = "http://www.kerama-marazzi.com";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Mистер Люстер  --
/*$img_name = "r14452.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14452/";
$imgadv[$img_name]["alt"] = "Сеть магазинов светильников Mистер Люстер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/light/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/* //it О!Еда  --
$img_name = "r20450.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20450/";
$imgadv[$img_name]["alt"] = "О!Еда";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/foods-delivery/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Мир охоты --
$img_name = "huntworld240x400x1-13195.swf";
$imgadv[$img_name]["url"] = "http://www.huntworld.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/huntworld240x400x1-13195.jpg";
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/hunting/*"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/shops/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/hunting/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/shops/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/13195/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сеть японских ресторанов Васаби --
/*$img_name = "wasabi240x400x1.jpg";
$imgadv[$img_name]["url"] = "http://www.wasabico.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/3912/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ателье Фасон  --
/*$img_name = "r20508.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20508/";
$imgadv[$img_name]["alt"] = "Ателье Фасон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/atelier/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Чистота сервис  --
/*$img_name = "histoblesk240x400x1.swf";
$imgadv[$img_name]["url"] = "#";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/services/*"][] = $img_name;
*/

/*$img_name = "histoblesk240x400x2.swf";
$imgadv[$img_name]["url"] = "#";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Black Iris  --
/*$img_name = "r19807.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19807/";
$imgadv[$img_name]["alt"] = "Салон красоты Black Iris";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/health/salons/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Медицинский центр МЕДИЦЕНТР  --
/*$img_name = "r17541.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17541/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
*/

/*$img_name = "medi-center468x60x1-17541.gif";
$imgadv[$img_name]["url"] = "http://www.medi-center.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Санкт-Петербургское региональное общественное учреждение Свет  --
/*$img_name = "r20420.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20420/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/hospitals/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Яркий мир рукоделия  --
$img_name = "r13575.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13575/";
$imgadv[$img_name]["alt"] = "Яркий мир рукоделия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sewing/needlework/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it СтройСуперМаркет  --
/*$img_name = "r20417.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20417/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/materials/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сеть японских ресторанов Васаби --
/*$img_name = "r3912.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3912/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/* 
//it Авто CPS --
$img_name = "r13735.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13735/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Поэма Здоровья --
/*$img_name = "aibolit468x60-20287.gif";
$imgadv[$img_name]["url"] = "http://www.aibolit.me/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
*/

/*
$img_name = "r20287.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/20287/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/family/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it pizza mafia --
$img_name = "r19994.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19994/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/foods-delivery/*"][] = $img_name;

$img_name = "pizza-mafia240x400x1-19994-2.jpg";
$imgadv[$img_name]["url"] = "http://www.3332222.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/19994/*"][] = $img_name;


//$img_name = "pizza-mafia240x400x1-19994.jpg";
//$imgadv[$img_name]["url"] = "http://www.3332222.ru/";
//$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/company/19994/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Балтийская инвестиционно-строительная группа --
/*
$img_name = "baltinvstroy468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.baltinvstroy.ru/";
$imgadv[$img_name]["alt"] = "Балтийская инвестиционно-строительная группа";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it КСК мебель --
/*$img_name = "r19762.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19762/";
$imgadv[$img_name]["alt"] = "КСК мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компания АТО --
/*$img_name = "r3458.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3458/";
$imgadv[$img_name]["alt"] = "Компания АТО";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/trade/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ПетроМедСнаб СПб --
/*$img_name = "r19657.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19657/";
$imgadv[$img_name]["alt"] = "ПетроМедСнаб СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Салоны кровельных материалов --
/*$img_name = "r9145.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9145/";
$imgadv[$img_name]["alt"] = "Салоны кровельных материалов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/roofings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Строительная компания Стройтехнологии --
$img_name = "r3659.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3659/";
$imgadv[$img_name]["alt"] = "Строительная компания Стройтехнологии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Гранти-Мед --
$img_name = "r2804.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2804/";
$imgadv[$img_name]["alt"] = "Медицинский центр Гранти-Мед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Компания Самстрой --
/*$img_name = "r19135.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/19135/";
$imgadv[$img_name]["alt"] = "Компания Самстрой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кафе цветов Прованс --
/*$img_name = "r18553.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18553/";
$imgadv[$img_name]["alt"] = "Кафе цветов Прованс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/company/18553/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/catalog/flowers/bouquets/*"][] = $img_name;
*/

/*$img_name = "flowers240x400.swf";
$imgadv[$img_name]["url"] = "/company/18553/"; //http://www.provenceflowers.ru/
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/flowers240x400.jpg";
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/18553/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/flowers/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/flowers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Inblu   Фараон Обувная компания --
/*$img_name = "r16366.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16366/";
$imgadv[$img_name]["alt"] = "Фараон Обувная компания";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/16366/*"][] = $img_name;
*/

/*$img_name = "faraon-240x400x2-16366.jpg";//"faraon-240x400-16366.gif"; 
$imgadv[$img_name]["url"] = "http://faraon-spb.ru/";
$imgadv[$img_name]["alt"] = "Фараон Обувная компания";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/16366/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ФьюжнКар --
/*$img_name = "r18699.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18699/";
$imgadv[$img_name]["alt"] = "ФьюжнКар";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Суши Wok --
$img_name = "r18226.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18226/";
$imgadv[$img_name]["alt"] = "Суши Вок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/cafes/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/18226/*"][] = $img_name;

$img_name = "sushi-wok240x40x2-18226.jpg?1"; 
//$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://sushi-wok.ru/"; //"http://vk.com/woksushi";
$imgadv[$img_name]["alt"] = "Суши Wok";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/18226/*"][] = $img_name;

/*$img_name = "sushi-wok240x40x3-18226.jpg?1"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://sushi-wok.ru/"; //"http://vk.com/woksushi";
$imgadv[$img_name]["alt"] = "Суши Wok";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;*/
// -------------------------------------------------------------------------------------------------
/*
//it Оптстрой СПб --
$img_name = "r18683.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18683/";
$imgadv[$img_name]["alt"] = "Оптстрой СПб";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/doors/*"][] = $img_name;
*/
//it Салюс Магазин Товары для здоровья --
/*$img_name = "r18687.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18687/";
$imgadv[$img_name]["alt"] = "Салюс Магазин Товары для здоровья";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
*/
//it Автотрейд-М --
/*$img_name = "r18210.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18210/";
$imgadv[$img_name]["alt"] = "Автотрейд-М";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/parts/*"][] = $img_name;
*/
//it Дом обуви --
$img_name = "r3035.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3035/";
$imgadv[$img_name]["alt"] = "Дом обуви";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;
/*
$img_name = "domobuvy468x60x1-3035.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.domobuvy.ru/";
$imgadv[$img_name]["alt"] = "Дом обуви";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it BEAUTY MED - Бьюти Мед --
/*$img_name = "r18180.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18180/";
$imgadv[$img_name]["alt"] = "Центр лазерной и эстетической косметологии BEAUTY MED";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
*/
/*$img_name = "beauty-med468x60x4-18180.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.beauty-med.spb.ru/";
$imgadv[$img_name]["alt"] = "Центр лазерной и эстетической косметологии BEAUTY MED";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/health/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/health/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аварийная служба --
$img_name = "locksmith468x60x1-3874.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.openlocks.ru/";//"http://www.locksmith-service.ru/";
$imgadv[$img_name]["alt"] = "Аварийная служба - вскрытие замков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/emergency/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/emergency/opening-doors/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/emergency/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Тортикофф --
$img_name = "r18150.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18150/";
$imgadv[$img_name]["alt"] = "ТОРТИКОФФ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/pastry/*"][] = $img_name;

/*$img_name = "tortikoff468x60x2-18150.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.tortikoff.ru/";
$imgadv[$img_name]["alt"] = "ТОРТИКОФФ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/food/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/food/*"][] = $img_name;
*/

$img_name = "tortikoff240x400x1-18150.gif"; 
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.tortikoff.ru/";
$imgadv[$img_name]["alt"] = "ТОРТИКОФФ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/food/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/food/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/18150/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицинский центр Здоровье для всех --
$img_name = "r18129.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18129/";
$imgadv[$img_name]["alt"] = "Медицинский центр Здоровье для всех";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Ханты-Мансийский Банк --
/*$img_name = "r5674.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/5674/";
$imgadv[$img_name]["alt"] = "Ханты-Мансийский Банк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/finances/banks/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Рестораны и суши-бары Евразия --
/*$img_name = "r4359.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4359/";
$imgadv[$img_name]["alt"] = "Рестораны и суши-бары Евразия";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Агентство недвижимости ИБС ЭКЮ Эстэйт --
/*$img_name = "r18043.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18043/";
$imgadv[$img_name]["alt"] = "Агентство недвижимости ИБС ЭКЮ Эстэйт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/realestate/sale/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Бали --
/*$img_name = "r1842.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1842/";
$imgadv[$img_name]["alt"] = "Ресторан Бали";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//  Авто Тревел
/*
$img_name = "r18181.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/18181/";
$imgadv[$img_name]["alt"] = "Авто Тревел";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/passenger/*"][] = $img_name;


$img_name = "avto-trevel240x400x3.swf";
//$imgadv[$img_name]["url"] = "/company/18181/";
$imgadv[$img_name]["url"] = "http://авто-трэвл.рф";
//$imgadv[$img_name]["url"] = "http://xn----7sbgb9bppnc5i.xn--p1ai";

$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/18181/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/auto/*"][] = $img_name;
*/



// -------------------------------------------------------------------------------------------------
//it Ортопедические салоны Террапевтика --
/*$img_name = "r3491.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3491/";
$imgadv[$img_name]["alt"] = "Ортопедические салоны Террапевтика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/orthopedic/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Агентство недвижимости ИНСАЙД НВ --
/*$img_name = "r4371.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4371/";
$imgadv[$img_name]["alt"] = "Агентство недвижимости ИНСАЙД НВ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компания Истрем Клипсо --
/*$img_name = "r2995.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2995/";
$imgadv[$img_name]["alt"] = "Компания Истрем Клипсо";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/ceilings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Реклама Лайт --
/*$img_name = "r-lite468x60x1-17754.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.r-lite.ru/";
$imgadv[$img_name]["alt"] = "Реклама Лайт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/advertising/*"][] = $img_name;
*/
/*
$img_name = "r17754.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17754/";
$imgadv[$img_name]["alt"] = "Реклама Лайт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/street/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------
//it Наша Семья --
$img_name = "nasem468x60x1-12777.gif"; 
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.nasem.ru/";
$imgadv[$img_name]["alt"] = "Наша Семья";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["urls"]["/catalog/children/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
// Гарант-право
/*$img_name = "garantpravo240x400x1-17159.gif";
$imgadv[$img_name]["url"] = "http://www.garantpravo-spb.ru/";
	//$imgadv[$img_name]["type"] = "js";
$imgadv[$img_name]["alt"] = "Гарант-право";
//$imgadv[$img_name]["style"] = "border:1px solid #000";
//$imgadv[$img_name]["js"] = "$('#adv-place').css({'width':'240px','height':'400px'}).crossSlide({sleep: 2,fade: 1}, [{ src: '/content/ilogos/240400/garantpravo240x400x1-17159.gif',target:'_blank',href: 'adv-url' },{ src: '/content/ilogos/240400/garantpravo240x400x2-17159.gif',target:'_blank',href: 'adv-url' }]);";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/17159/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/legal/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/legal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ателье кухни Marre --
$img_name = "r9349.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9349/";
$imgadv[$img_name]["alt"] = "Ателье кухни Marre";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автоломбард Платинум --
/*$img_name = "r17629.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17629/";
$imgadv[$img_name]["alt"] = "Автоломбард Платинум";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/pawnshop/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Satmontage --
/*$img_name = "r17609.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17609/";
$imgadv[$img_name]["alt"] = "Satmontage";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/communication/tv-aerials/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Чистоград --
/*$img_name = "r3030.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3030/";
$imgadv[$img_name]["alt"] = "Чистоград";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/washing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кафе Старый город --
$img_name = "r3554.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3554/";
$imgadv[$img_name]["alt"] = "Кафе Старый город";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/cafes/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it DIDRIKSONS --
/*$img_name = "r17551.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17551/";
$imgadv[$img_name]["alt"] = "DIDRIKSONS";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/clothes/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Каскад М сервис --
$img_name = "r4011.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4011/";
$imgadv[$img_name]["alt"] = "Каскад М сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/emergency/opening-doors/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицинский магазин --
$img_name = "r17550.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17550/";
$imgadv[$img_name]["alt"] = "Медицинский магазин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Собачья жизнь --
$img_name = "r17548.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17548/";
$imgadv[$img_name]["alt"] = "Собачья жизнь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/products/*"][] = $img_name;

//$img_name = "dog-life240x400x1-1.jpg";
$img_name = "dog-life240x400x3.swf";
$imgadv[$img_name]["url"] = "http://www.dog-life.com/";
//$imgadv[$img_name]["type"] = "js";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["js"] = "$('#adv-place').css({'width':'240px','height':'400px'}).crossSlide({sleep: 2,fade: 1}, [{ src: '/content/ilogos/240400/dog-life240x400x1-1.jpg',target:'_blank',href: 'adv-url' },{ src: '/content/ilogos/240400/dog-life240x400x1-2.jpg',target:'_blank',href: 'adv-url' },{ src: '/content/ilogos/240400/dog-life240x400x1-3.jpg',target:'_blank',href: 'adv-url' }]);";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/17548/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/pets/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/pets/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Япоша --
$img_name = "r16907.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16907/";
$imgadv[$img_name]["alt"] = "Япоша";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/foods-delivery/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мастер Мебель --
/*$img_name = "master-mebel468x60x2-8994.swf"; 
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.master-mebel.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["style"] = "background:#ec9844;";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r3956.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["urls"]["/catalog/furniture/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кадис --
/*$img_name = "r2911.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2911/";
$imgadv[$img_name]["alt"] = "Кадис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/reference-systems/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Оптика Спектр --
$img_name = "r2815.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2815/";
$imgadv[$img_name]["alt"] = "Оптика Спектр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/glasses/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мэдисон --
/*$img_name = "r17506.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17506/";
$imgadv[$img_name]["alt"] = "Мэдисон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/salons/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Артель ТД --
/*$img_name = "r17505.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17505/";
$imgadv[$img_name]["alt"] = "Артель ТД";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Вертикаль, рекламно-полиграфическое предприятие --
/*$img_name = "vertical468x60-11494.jpg"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.vertical3spb.ru/";
$imgadv[$img_name]["alt"] = "Вертикаль, рекламно-полиграфическое предприятие";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/jewels/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/jewels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Фасад-Сервис --
/*$img_name = "r16930.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16930/";
$imgadv[$img_name]["alt"] = "Фасад-Сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/cleaning/*"][] = $img_name;
*/
//it Центр экспертиз и контроля качества мебели --
$img_name = "r3544.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3544/";
$imgadv[$img_name]["alt"] = "Центр экспертиз и контроля качества мебели";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/researches/tests/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ИП Казьмин Ю.В. --
/*$img_name = "r8899.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8899/";
$imgadv[$img_name]["alt"] = "Казьмин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/parts/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Садовый рай --
/*img_name = "r8573.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8573/";
$imgadv[$img_name]["alt"] = "Садовый рай";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/residential/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Ладушки --
$img_name = "r2774.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2774/";
$imgadv[$img_name]["alt"] = "Ладушки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/staff/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------

//it Цветочная почта --
/* $img_name = "r17413.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17413/";
$imgadv[$img_name]["alt"] = "Цветочная почта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/flowers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Союз ломбард --
/*$img_name = "r17367.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17367/";
$imgadv[$img_name]["alt"] = "Союз ломбард";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/miscellanea/pawn-shops/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Часы века+ --
/*
$img_name = "r11827.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11827/";
$imgadv[$img_name]["alt"] = "Часы века+";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/jewels/clocks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
/*
//it Интернет-магазин Мир соблазна --
$img_name = "mir-soblazna468x60x4-17265.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://mirsoblazna.ru/";
$imgadv[$img_name]["alt"] = "Интернет-магазин Мир соблазна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стоматология Медиана  --
/*$img_name = "r3407.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3407/";
$imgadv[$img_name]["alt"] = "Стоматология Медиана";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/3407/*"][] = $img_name;
$img_name = "mediana240x400x1-3407.png"; 
$imgadv[$img_name]["url"] = "http://www.mediana.ru/";
$imgadv[$img_name]["alt"] = "Стоматология Медиана";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/3407/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр медкомиссий ИтаноМед --
/*$img_name = "itanomed468x60x2.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.itanomed.ru/";
$imgadv[$img_name]["alt"] = "Центр медкомиссий ИтаноМед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Невские кондиционеры  --
/*$img_name = "r13359.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13359/";
$imgadv[$img_name]["alt"] = "Невские кондиционеры";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/climate/*"][] = $img_name;
$img_places["adv1_2"]["urls"]["/company/13359/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Юмакс  --
/*$img_name = "r3072.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3072/";
$imgadv[$img_name]["alt"] = "Юмакс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/consumable/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Медицинское такси  --
$img_name = "r17264.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17264/";
$imgadv[$img_name]["alt"] = "Медицинское такси";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/ambulance/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/17264/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
/*
//it Компания ПрофУслуга  --
$img_name = "r7580.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7580/";
$imgadv[$img_name]["alt"] = "Компания ПрофУслуга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Торт Вашей Мечты --
/*
$img_name = "tortvasheimechty468x60x1.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://tortvm.ru";
$imgadv[$img_name]["alt"] = "Торт Вашей Мечты";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/food/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/food/*"][] = $img_name;
*/

/*
$img_name = "r17179.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17179/";
$imgadv[$img_name]["alt"] = "Торт Вашей Мечты";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/pastry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Батенинские бани  --
$img_name = "r17160.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17160/";
$imgadv[$img_name]["alt"] = "Батенинские бани";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/saunas/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/17160/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Пластпром  --
$img_name = "r17173.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17173/";
$imgadv[$img_name]["alt"] = "Пластпром - производство изделий из пластмассы";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/finishings/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Партнер Пак  --
$img_name = "r7927.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7927/";
$imgadv[$img_name]["alt"] = "Партнер Пак";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/locks/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Натяжные потолки Euro-L  --
$img_name = "r17133.gif";
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17133/";
$imgadv[$img_name]["alt"] = "Натяжные потолки Euro-L";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/ceilings/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Первый Интернет Канал  --
$img_name = "partner-pic-tv.com";
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<div class="adv1 fll"><iframe width="100" height="60" id="video" hspace="0" vspace="0" scrolling="no"  frameborder="no" src="http://pik-tv.com/embed/banners/3/"></iframe></div>';
//$img_places["adv1_1"]["urls"]["/catalog/media/tv/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/17080/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ОргПринт  --
/*$img_name = "r3814.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3814/";
$imgadv[$img_name]["alt"] = "ОргПринт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/consumable/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Инчкейп Олимп  --
$img_name = "r3676.gif";
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3676/";
$imgadv[$img_name]["alt"] = "Инчкейп Олимп";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/used-cars/*"][] = $img_name;

$img_name = "toyota240x400x5-3676.swf";
$imgadv[$img_name]["url"] = "http://www.toyota-dealer.ru/"; 
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/toyota240x400x5-3676.gif";
$img_places["adv4_2"]["urls"]["/company/3676/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/7548/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/7547/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сказка ожидания  --
$img_name = "r16904.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16904/";
$imgadv[$img_name]["alt"] = "Курсы подготовки к родам СКАЗКА ОЖИДАНИЯ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/courses/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it МузТорг  --
/*$img_name = "muztorg240x400.jpg";
//$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.muztorg.ru/";
$imgadv[$img_name]["alt"] = "МузТорг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/3086/*"][] = $img_name;

$img_name = "r3086.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3086/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
/*
$img_name = "muztog468x60-3086.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.muztorg.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r3956.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/music/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------
/* //it Такси ИСТ  --
$img_name = "r16902.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16902/";
$imgadv[$img_name]["alt"] = "Такси ИСТ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/taxi/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дороги 2005  --
/*$img_name = "r2882.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2882/";
$imgadv[$img_name]["alt"] = "Дороги 2005";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/machinery-rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Автосервис СТО №1  --
/*$img_name = "r13139.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13139/";
$imgadv[$img_name]["alt"] = "Автосервис СТО №1";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/service/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аксель-Рент  --
/*$img_name = "r2607.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2607/";
$imgadv[$img_name]["alt"] = "Аксель-Рент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Автоломбард №1  --
$img_name = "r16797.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16797/";
$imgadv[$img_name]["alt"] = "Автоломбард №1";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/pawnshop/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Производственная фирма Аванс --
/*$img_name = "avanse468x60-2566.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.avanse.ru";
$imgadv[$img_name]["alt"] = "Производственная фирма Аванс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/food/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/food/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Окна City | Окна Сити  --
/*$img_name = "r16777.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16777/";
$imgadv[$img_name]["alt"] = "Окна City - Завод металлопластиковых окон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/windows/*"][] = $img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/* //it Мебельная компания Profis --
$img_name = "r16693.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16693/";
$imgadv[$img_name]["alt"] = "Мебельная компания Profis";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/parts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
*/
//it Белорусская косметика и трикотаж --
/*$img_name = "viktoriya468x60-2614.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.vic-spb.ru/";
$imgadv[$img_name]["alt"] = "Белорусская косметика и трикотаж - Виктория";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/health/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/health/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Специализированная стоматологическая клиника Колибри --
$img_name = "kolibri468x70-1780.gif"; 
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://spbkolibri.ru/";
$imgadv[$img_name]["alt"] = "Специализированная стоматологическая клиника Колибри";
//$imgadv[$img_name]["style"] = "background:#74c043;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/discount/medicine/*"][] = $img_name;

$img_name = "r1780.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1780/";
$imgadv[$img_name]["alt"] = "Стоматология Колибри";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Кровля Плюс --
/*$img_name = "r2511.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2511/";
$imgadv[$img_name]["alt"] = "Кровля Плюс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/roof/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Автоломбард Кар Карыч --
/*$img_name = "r3310.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3310/";
$imgadv[$img_name]["alt"] = "Автоломбард Кар Карыч";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/pawnshop/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Энсто Рус --
/*$img_name = "r4415.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4415/";
$imgadv[$img_name]["alt"] = "Энсто";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/equipment/climate/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мастер Лэнд --
/*$img_name = "r164.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/164/";
$imgadv[$img_name]["alt"] = "Мастер Лэнд";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Холдинговая компания Пинскдрев --
/*$img_name = "r16334.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16334/";
$imgadv[$img_name]["alt"] = "Холдинговая компания Пинскдрев";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сакура --
//$img_name = "sakura240x400-13180.gif"; 
//$img_name = "sakura240x400x2-13180.jpg"; 
/*$img_name = "sakura240x400x10-13180.jpg"; 
$img_places["adv4_1"]["items"][] = $img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = " http://vk.com/sakura_sushi"; //"http://www.4588888.ru/";
$imgadv[$img_name]["alt"] = "Сакура";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_2"]["urls"]["/company/13180/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/restaurants/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
*/

//$img_places["adv4_2"]["urls"]["/company/*"][] = $img_name;//!!!!!!!!!!!!!!!!! убрать
//$img_places["adv4_2"]["urls"]["/catalog/furniture/*"][] = $img_name;//!!!!!!!!!!!!!!!!! убрать


$img_name = "r13180.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13180/";
$imgadv[$img_name]["alt"] = "Сакура Суши";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/restaurants/foods-delivery/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Центр компьютерных услуг СЭЛФИКС --
/*$img_name = "selfix468x60-14442.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.selfix.ru/";
$imgadv[$img_name]["alt"] = "Центр компьютерных услуг СЭЛФИКС";
//$imgadv[$img_name]["style"] = "background:#74c043;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/computers/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/computers/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/computers/*"][] = $img_name;
*/

/*$img_name = "r14442.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14442/";
$imgadv[$img_name]["alt"] = "Центр компьютерных услуг СЭЛФИКС";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Моя Клиника --
/*$img_name = "myclinic468x60x3-16148.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.myclinic.ru/";
$imgadv[$img_name]["alt"] = "Моя Клиника";
$imgadv[$img_name]["style"] = "background:#74c043;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Центр экологического сопровождения --
$img_name = "r17077.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17077/";
$imgadv[$img_name]["alt"] = "Центр экологического сопровождения";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/researches/ecology/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Торговый Дом Пищевые Технологии --
/*$img_name = "r4296.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4296/";
$imgadv[$img_name]["alt"] = "Торговый Дом Пищевые Технологии";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/food/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Рекламное движение --
/*$img_name = "r16145.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/16145/";
$imgadv[$img_name]["alt"] = "Рекламное движение";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/polygraphics/polygraphics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Панацея --
/*$img_name = "r3607.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3607/";
$imgadv[$img_name]["alt"] = "Стоматология Панацея";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Компьютерный сервис-центр IT-HOUSE --
/*$img_name = "it-house240x400-15932.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://айтихаус.рф/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/it-house240x400-15932.jpg";
$imgadv[$img_name]["alt"] = "IT-HOUSE";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/computers/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/15932/*"][] = $img_name;
*/

/*$img_name = "r15932.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/15932/";
$imgadv[$img_name]["alt"] = "Компьютерный сервис-центр IT-HOUSE";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/

/*$img_name = "r15932.swf"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/15932/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r15932.jpg";
$imgadv[$img_name]["alt"] = "IT-HOUSE";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/


// -------------------------------------------------------------------------------------------------
// it Экспра --
/*$img_name = "ekspra240x400.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.ekspra.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/ekspra240x400.gif";
//$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/state/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/legal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Скандин --
/*$img_name = "r3164.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3164/";
$imgadv[$img_name]["alt"] = "Скандин";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/resorts/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Нотариус Егорова Ольга Владимировна --
$img_name = "r11441.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11441/";
$imgadv[$img_name]["alt"] = "Нотариус Егорова Ольга Владимировна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Мебельная фабрика Красный Яр --
$img_name = "r2537.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2537/";
$imgadv[$img_name]["alt"] = "Мебельная фабрика Красный Яр";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Невская Мебельная Корпорация --
/*$img_name = "r15845.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/15845/";
$imgadv[$img_name]["alt"] = "Невская Мебельная Корпорация";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/compartments/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стоматологическая клиника Здоровье --
/*$img_name = "r3689.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3689/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника Здоровье";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/

/*$img_name = "zdoroviye240x400x1-3689.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.zdoroviye.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/helix468x60-3623.gif";
//$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000; height:400px;width:240px;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/health/*"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/miscellanea/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/catalog/health/*"][] = $img_name;

$img_places["adv4_2"]["urls"]["/company/3689/*"][] = $img_name;

//дополнительно бесплатно
//$img_places["adv4_2"]["urls"]["/catalog/restaurants/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/miscellanea/*"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/building/*"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/catalog/auto/*"][] = $img_name;

*/
// -------------------------------------------------------------------------------------------------
//it Ангел Кидс --
/*$img_name = "angelkids468x60.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.angelkids.ru/";
$imgadv[$img_name]["alt"] = "Ангел Кидс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/children/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/children/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Нотариальная 22,09,2015 --
/*$img_name = "r11290.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11290/";
$imgadv[$img_name]["alt"] = "Нотариальная контора Корецкой Елены Георгиевны";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/notaries/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Гарда --
/*$img_name = "centr-garda468x60-8901.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.centr-garda.ru/";
$imgadv[$img_name]["alt"] = "Гарда - центр здоровья, семьи и качества жизни";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/health/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/health/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Магазин готовых штор производства Беларусь --
/*$img_name = "shtora-spb468x60-14447.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.shtora-spb.ru/";
$imgadv[$img_name]["alt"] = "Магазин готовых штор производства Беларусь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/housing/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/housing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Магазин готовых штор производства Беларусь --
/*$img_name = "r14447.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14447/";
$imgadv[$img_name]["alt"] = "Магазин готовых штор производства Беларусь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/curtains/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Медицинский центр Олмед --
/*$img_name = "olmed468x60x2-14446.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.olmed-spb.ru/";
$imgadv[$img_name]["alt"] = "Олмед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$img_places["adv2_1"]["urls"]["/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/

/*$img_name = "r14446.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14446/";
$imgadv[$img_name]["alt"] = "Медицинский центр Олмед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аллергодом --
$img_name = "r3873.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3873/";
$imgadv[$img_name]["alt"] = "Аллергодом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Химо сервис --
$img_name = "r4334.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4334/";
$imgadv[$img_name]["alt"] = "Химо сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/cleaning/abstergents/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сеть фирменных магазинов Дом посуды --
/*$img_name = "r1084.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1084/";
$imgadv[$img_name]["alt"] = "Сеть фирменных магазинов Дом посуды";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/tableware/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Механика --
/*$img_name = "r14443.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14443/";
$imgadv[$img_name]["alt"] = "Компания Механика - Светопрозрачные конструкции, окна, двери, офисные перегородки";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Техцентр Автограф --
/*$img_name = "avtograf240x400xOct-3614x1.gif"; 
$imgadv[$img_name]["url"] = "http://www.avtografspb.ru/";
$imgadv[$img_name]["type"] = "js";
$imgadv[$img_name]["alt"] = "Техцентр Автограф";
$imgadv[$img_name]["js"] = "$('#adv4_1').css({'width':'240px','height':'400px'}).crossSlide({sleep: 2,fade: 1}, [{ src: '/content/ilogos/240400/avtograf240x400xOct-3614x1.gif',target:'_blank',href: 'adv-url' },{ src: '/content/ilogos/240400/avtograf240x400xOct-3614x2.gif',target:'_blank',href: 'adv-url' }]);";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/auto/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Альфа --
/*$img_name = "r14414.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14414/";
$imgadv[$img_name]["alt"] = "Альфа - Организация свадеб, банкетов, торжеств";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Всероссийский центр экстренной и радиационной медицины МЧС России --
/*$img_name = "r3777.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3777/";
$imgadv[$img_name]["alt"] = "Всероссийский центр экстренной и радиационной медицины МЧС России";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/diagnosis/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Группа предприятий Стройудача --
/*$img_name = "r3073.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3073/";
$imgadv[$img_name]["alt"] = "Группа предприятий Стройудача";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/saw-timbers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аксель-Моторс Север --
/*$img_name = "r3469.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3469/";
$imgadv[$img_name]["alt"] = "Аксель-Моторс Север";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аксель-Моторс --
/*$img_name = "r2674.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2674/";
$imgadv[$img_name]["alt"] = "Аксель-Моторс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_5"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Клуб VIP-Карта --
$img_name = "r8860.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8860/";
$imgadv[$img_name]["alt"] = "Клуб VIP-Карта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/visas/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Производственная компания Меланж --
/*$img_name = "r13605.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13605/";
$imgadv[$img_name]["alt"] = "Производственная компания Меланж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/textiles/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Республика Света 22.09.2015--
/*$img_name = "r3991.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3991/";
$imgadv[$img_name]["alt"] = "Республика Света";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
////$imgadv[$img_name]["dateon"] = '08.08.2011';
////$imgadv[$img_name]["dateoff"] = '08.08.2012';
$img_places["adv1_1"]["urls"]["/catalog/building/lamps/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кондитерская студия Арт-Трио Ирины Кошевой --
/*$img_name = "r14177.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/14177/";
$imgadv[$img_name]["alt"] = "Кондитерская студия Арт-Трио";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/banquets/*"][] = $img_name;


$img_name = "art-trio468x60-14177.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.studio-art-trio.ru/";
$imgadv[$img_name]["alt"] = "Кондитерская студия Арт-Трио";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/restaurants/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it КарРента --
/*$img_name = "r1165.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1165/";
$imgadv[$img_name]["alt"] = "КарРента";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЭкоГазСервис --
/*$img_name = "eko-gas468x60-3863.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.eko-gas.ru/";
$imgadv[$img_name]["alt"] = "ЭкоГазСервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/materials/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/materials/*"][] = $img_name;
*/

/*$img_name = "r3863.gif";
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1_3"]["items"][] = $img_name;
$img_places["adv1_3"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv1_3"]["urls"]["/discount/auto/*"][] = $img_name;
$img_places["adv1_3"]["urls"]["/catalog/materials/*"][] = $img_name;
$img_places["adv1_3"]["urls"]["/discount/materials/*"][] = $img_name;
$img_places["adv1_3"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv1_3"]["urls"]["/discount/services/*"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.eko-gas.ru/";//"/company/8587/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Леон-Строй --
/*$img_name = "r13553.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13553/";
$imgadv[$img_name]["alt"] = "Леон-Строй";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Транзит-ДМ --
/*$img_name = "r3456.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3456/";
$imgadv[$img_name]["alt"] = "Транзит-ДМ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/russia/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Даймэкс --
/*$img_name = "r3783.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3783/";
$imgadv[$img_name]["alt"] = "Даймэкс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/communication/express-post/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЛенМонтажСтрой --
/*$img_name = "lenmonst468x60-12342.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
//$imgadv[$img_name]["url"] = "http://www.lenmonst.ru/";
$imgadv[$img_name]["url"] = "http://www.lms-alp.com/";
$imgadv[$img_name]["alt"] = "ЛенМонтажСтрой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/salvaging/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/salvaging/export/*"][] = $img_name;

$img_name = "r12342.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12342/";
$imgadv[$img_name]["alt"] = "ЛенМонтажСтрой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/rope/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сеть магазинов инженерной сантехники Веста Трейдинг --
/*$img_name = "vestatrade468x60-12424.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.vestatrade.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "Сеть магазинов инженерной сантехники Веста Трейдинг";
//$imgadv[$img_name]["style"] = "background:#f6aa5f;"; //#6197c8
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/equipment/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/equipment/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Гуд-Сэил --
/*$img_name = "good-sale468x60-11841.swf"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.good-sale.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "Гуд-Сэил";
$imgadv[$img_name]["style"] = "background:#f6aa5f;"; //#6197c8
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/computers/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/computers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр профессиональной стоматологии Академия Дент --
/*$img_name = "r9303.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9303/";
$imgadv[$img_name]["alt"] = "Центр профессиональной стоматологии Академия Дент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it 007-Центр услуг --
/*$img_name = "r4206.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4206/";
$imgadv[$img_name]["alt"] = "007-Центр услуг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/transportations/taxi/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЛТ-Штамп --
/*$img_name = "r2451.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2451/";
$imgadv[$img_name]["alt"] = "ЛТ-Штамп";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/polygraphics/seals/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сервисный Центр Чудо-Мастера --
/*$img_name = "r13555.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13555/";
$imgadv[$img_name]["alt"] = "Сервисный Центр Чудо-Мастера";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/technology-repair/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр медицинских книжек --
/*$img_name = "r3383.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3383/";
$imgadv[$img_name]["alt"] = "Центр медицинских книжек";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/board/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аларм-Рент --
/*$img_name = "r13501.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13501/";
$imgadv[$img_name]["alt"] = "Аларм-Рент";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стереосуши --
/*$img_name = "r3362.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3362/";
$imgadv[$img_name]["alt"] = "Стереосуши";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/restaurants/foods-delivery/*"][] = $img_name;
*/

/*$img_name = "stereosushi468x60x2-3362.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.stereosushi.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "Стереосуши";
//$imgadv[$img_name]["style"] = "background:#3d962e;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/restaurants/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Роял 30,10,2015 --
/*$img_name = "r2768.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2768/";
$imgadv[$img_name]["alt"] = "Роял Сервис Компани";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/cleaning/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ладья --
/*$img_name = "ladyaspb468x60x2-3230.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.ladyaspb.ru/";
$imgadv[$img_name]["alt"] = "Ладья";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/

/*$img_name = "r3230.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3230/";
$imgadv[$img_name]["alt"] = "Ладья";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/tours/*"][] = $img_name;*/
// -------------------------------------------------------------------------------------------------
//it Оружейный магазин Барс --
/*$img_name = "r13412.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13412/";
$imgadv[$img_name]["alt"] = "Оружейный магазин Барс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/hunting/huntinggoods/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Санкт-Петербургский городской ломбард --
/*
$img_name = "lombard468x60x3-12442.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.lombard.sp.ru/";
$imgadv[$img_name]["alt"] = "Санкт-Петербургский городской ломбард";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/shops/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Атлант-М Лахта --
/*
$img_name = "r2926.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2926/";
$imgadv[$img_name]["alt"] = "Атлант-М Лахта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Печной центр Ками --
/*$img_name = "r3326.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3326/";
$imgadv[$img_name]["alt"] = "Печной центр Ками";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/stoves/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЭЛСО Энергодом --
/*$img_name = "r3444.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3444/";
$imgadv[$img_name]["alt"] = "ЭЛСО Энергодом";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/equipment/climate/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Северная Венеция 18.09.2015 --
$img_name = "r13302.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13302/";
$imgadv[$img_name]["alt"] = "Негосударственное образовательное учреждение гимназия Северная Венеция";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/private-schools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Супермаркеты Домовой --
$img_name = "r4268.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4268/";
$imgadv[$img_name]["alt"] = "Супермаркеты Домовой";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/designing/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Такси Счастливчик --
/*$img_name = "taksi-schastlivchik468x60x2.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://6220555.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/taksi-schastlivchik468x60.gif";
$imgadv[$img_name]["alt"] = "Такси Счастливчик - заказ такси в Санкт-Петербурге - 622-0-555";
//$imgadv[$img_name]["style"] = "background:#3d962e;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Северный Город --
$img_name = "r3993.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3993/";
$imgadv[$img_name]["alt"] = "Северный Город";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/realestate/sale/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Сервисный центр SolexAuto --
/*
$img_name = "r13301.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13301/";
$imgadv[$img_name]["alt"] = "Сервисный центр SolexAuto";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/trucks-service/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Промышленно-Финансовая группа НАНОТЕХ --
/*$img_name = "r13255.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13255/";
$imgadv[$img_name]["alt"] = "Промышленно-Финансовая группа НАНОТЕХ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/legal/organizations/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Адмирал+ --
/*$img_name = "r3732.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3732/";
$imgadv[$img_name]["alt"] = "Адмирал+";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кардинал --
/*$img_name = "r3129.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3129/";
$imgadv[$img_name]["alt"] = "Кардинал";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/street/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Сеть магазинов Шире Шаг --
$img_name = "r4173.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4173/";
$imgadv[$img_name]["alt"] = "Сеть магазинов Шире Шаг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/clothing/shoes/*"][] = $img_name;

$img_name = "shireshag240x400x2-4173.swf";
$imgadv[$img_name]["url"] = "http://www.shireshag.info/"; 
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/";
$img_places["adv4_2"]["urls"]["/company/4173/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Тойота Центр Невский --
$img_name = "r4182.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4182/";
$imgadv[$img_name]["alt"] = "Тойота Центр Невский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/parts/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Строительная компания Ель --
/*$img_name = "stroy-build468x60x3-13073.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.stroy-build.ru/";
//$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/";
$imgadv[$img_name]["alt"] = "Строительная компания Ель";
//$imgadv[$img_name]["style"] = "background:#3d962e;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мастер-Мебель --
/*$img_name = "r8994.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8994/";
$imgadv[$img_name]["alt"] = "Мастер-Мебель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Копицентр - сеть многопрофильных копировальных центров --
/*$img_name = "r9299.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9299/";
$imgadv[$img_name]["alt"] = "Копицентр - сеть многопрофильных копировальных центров";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/polygraphics/polygraphics/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ветеринарная клиника им. Айвэна Филлмора  --
$img_name = "r3747.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3747/";
$imgadv[$img_name]["alt"] = "Ветеринарная клиника им. Айвэна Филлмора";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/pets/clinic/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицинская компания Приоритет  --
/*$img_name = "r13219.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13219/";
$imgadv[$img_name]["alt"] = "Медицинская компания Приоритет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/ambulance/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
// it Просто --
/*$img_name = "prosto468x60x2-4336.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.prosto.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/prosto468x60x2-4336.gif";
$imgadv[$img_name]["alt"] = "Сеть магазинов бытовой техники и электроники Просто";
//$imgadv[$img_name]["style"] = "background:#3d962e;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$img_places["adv2_1"]["urls"]["/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housetech/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мир охоты  --
$img_name = "r13195.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13195/";
$imgadv[$img_name]["alt"] = "Мир охоты";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/sports/sports/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стоматологическая клиника на Стародеревенской  --
/*$img_name = "r3686.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3686/";
$imgadv[$img_name]["alt"] = "Стоматологическая клиника на Стародеревенской";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it АСтрой  --
/*$img_name = "r13140.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13140/";
$imgadv[$img_name]["alt"] = "АСтрой - Северная стройбаза";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/brick/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Торговый Дом Микрон  --
/*$img_name = "r13165.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13165/";
$imgadv[$img_name]["alt"] = "Торговый Дом Микрон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/furnitra/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it SatМастер • Satmaster  --
/*$img_name = "r13167.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/13167/";
$imgadv[$img_name]["alt"] = "Сеть салонов спутникового телевидения SatМастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_3"]["urls"]["/catalog/communication/tv-aerials/*"][] = $img_name;
*/

/*$img_name = "satmaster468x60-13167.gif";
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.satmaster-k.ru/";
$imgadv[$img_name]["alt"] = "SatМастер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/communication/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/communication/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Алфея --
/*$img_name = "r8938.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8938/";
$imgadv[$img_name]["alt"] = "Алфея";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/toys/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Маленькая Леди --
/*
$img_name = "r3346.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3346/";
$imgadv[$img_name]["alt"] = "Маленькая Леди";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/children/clothing/*"][] = $img_name;
*/
/*$img_name = "mledy468x60x3-3346.jpg"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.mledy.ru";
$imgadv[$img_name]["alt"] = "Маленькая Леди";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/children/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр АвтоЭксперт --
/*$img_name = "r8904.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8904/";
$imgadv[$img_name]["alt"] = "Центр АвтоЭксперт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/state/traffic/*"][] = $img_name;
*/
/*
$img_name = "ae468x60-8904.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.ae98.ru/";
$imgadv[$img_name]["alt"] = "Центр АвтоЭксперт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/state/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/state/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ассоциация независимых судебных экспертов --
$img_name = "r3690.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3690/";
$imgadv[$img_name]["alt"] = "Ассоциация независимых судебных экспертов";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/researches/tests/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Атол --
/*$img_name = "r8890.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8890/";
$imgadv[$img_name]["alt"] = "Ремонтно-строительная компания Атол";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
/*
//it Хема --
$img_name = "r2865.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2865/";
$imgadv[$img_name]["alt"] = "Хема - Продажа реагентики для лабораторных исследований";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебельная фабрика Принцип --
/*$img_name = "r2694.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2694/";
$imgadv[$img_name]["alt"] = "Мебельная фабрика Принцип";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/kitchen/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Туристическая фирма Нева --
/*$img_name = "nevatravel468x60-3962.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.nevatravel.ru/";
$imgadv[$img_name]["alt"] = "Туристическая фирма Нева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Дюша --
/*$img_name = "vetdusha468x60-9142.gif";
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.zoodusha.ru/"; //www.vetdusha.ru
$imgadv[$img_name]["alt"] = "СПб Ветклиника 364-59-63 Зоомагазины и аптеки 742-20-67 Скорая ветпомощь 24ч от 800руб 937-936-8";
//$imgadv[$img_name]["style"] = "background:#9ccdfe;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/pets/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/pets/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Баслайн --
/*$img_name = "busline468x60.gif";
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://busline.ru/services.html";
$imgadv[$img_name]["alt"] = "Баслайн";
$imgadv[$img_name]["style"] = "background:#bcde88";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Туристическая фирма Нева --
/*$img_name = "r3962.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3962/";
$imgadv[$img_name]["alt"] = "Турфирма Нева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ариадна --
/*$img_name = "r3818.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3818/";
$imgadv[$img_name]["alt"] = "Ариадна";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/travels/tickets/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Ауди Центр Петроградский --
/*$img_name = "r3331.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3331/";
$imgadv[$img_name]["alt"] = "Ауди Центр Петроградский";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аптека Петробель --
/*
$img_name = "petrobel468x60-12886.gif";
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12886/";
$imgadv[$img_name]["alt"] = "Аптека Петробель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
/*$img_name = "r12886.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12886/";
$imgadv[$img_name]["alt"] = "Аптека Петробель";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/pharmacies/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Центр эстетической медицины Преображение --
$img_name = "r3058.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3058/";
$imgadv[$img_name]["alt"] = "Центр эстетической медицины Преображение";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/cosmetology/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it RIKSHOP.ru --
/*
$img_name = "r3392.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3392/";
$imgadv[$img_name]["alt"] = "RIKSHOP.ru";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/plumbing-valves/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it ЛендМед --
/*$img_name = "lendmed468x60x3.gif"; 
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://lendmed.ru/";
$imgadv[$img_name]["alt"] = "ЛендМед";
//$imgadv[$img_name]["style"] = "background:#ec9844;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Клиника  Атлант плюс --
/*$img_name = "medatlant468x60.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.medatlant.ru/";
$imgadv[$img_name]["alt"] = "Клиника Атлант Плюс";
//$imgadv[$img_name]["style"] = "background:#ec9844;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Салон-ателье Сочи --
/*$img_name = "r3333.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3333/";
$imgadv[$img_name]["alt"] = "Салон-ателье Сочи";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/haberdashery/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Студия штор ФАВОЛА --
$img_name = "r12882.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12882/";
$imgadv[$img_name]["alt"] = "Студия штор ФАВОЛА";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/housing/curtains/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
// it Диагностический медицинский центр Хеликс --
/*$img_name = "helix468x60x2-3623.swf"; 
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.helix.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/helix468x60-3623.gif";
$imgadv[$img_name]["alt"] = "Диагностический медицинский центр Хеликс";
$imgadv[$img_name]["style"] = "background:#3d962e;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/discount/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/children/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/children/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
// it медицинский центр Мед-Арт --
/*$img_name = "medart240x400x5-4000.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.medart-clinic.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/helix468x60-3623.gif";
//$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000; height:400px;width:240px;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
// it Клиника На Театральной | Институт Здоровья --
/*$img_name = "kl-teatral240x400-17220.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.knt16.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/helix468x60-3623.gif";
$imgadv[$img_name]["alt"] = "клиника На Театральной";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000; height:400px;width:240px;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/17220/*"][] = $img_name;

//дополнительно бесплатно
$img_places["adv4_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
*/
/*$img_name = "kl-teatral468x60-17220.gif";
$imgadv[$img_name]["url"] = "http://www.knt16.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/

/*$img_name = "r17220.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/17220/";
$imgadv[$img_name]["alt"] = "клиника На Театральной";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/rehabilitation/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/17220/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Миламед --
$img_name = "r12862.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12862/";
$imgadv[$img_name]["alt"] = "Миламед";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Аудиоклиник --
/*$img_name = "audioclinica468x60-2050.swf"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.audioclinica.ru/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "Аудиоклиник";
$imgadv[$img_name]["style"] = "background:#ec9844;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Академии Родительской Культуры Наша Семья --
$img_name = "r12777.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12777/";
$imgadv[$img_name]["alt"] = "Академии Родительской Культуры Наша Семья";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/children/development/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Прачечная Возрождение --
$img_name = "r7051.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7051/";
$imgadv[$img_name]["alt"] = "Прачечная Возрождение";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/laundry/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Комиссионный магазин Успех --
/*$img_name = "uspex468x60-11842.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.by-tovar.com/";
$imgadv[$img_name]["alt"] = "Комиссионный магазин Успех";
//$imgadv[$img_name]["style"] = "background:#ffef00";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/furniture/*"][] = $img_name;
*/

$img_name = "r11842.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11842/";
$imgadv[$img_name]["alt"] = "Комиссионный магазин Успех";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/furniture/trading/*"][] = $img_name;

/*$img_name = "uspex468x60-11842.gif";
$imgadv[$img_name]["url"] = "http://www.by-tovar.com/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$imgadv[$img_name]["style"] = "background:#faeee6;";
$imgadv[$img_name]["alt"] = "";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/furniture/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Прямая Линия --
//$img_name = "prline468x60-3325x6.gif";
//$img_name = "prline468x60-3325xarenda3.gif";
//$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/metro_vagony.html";
//$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/konsol.html";
//$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/auto_bort.html";
//$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/arenda3.html";
/*$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/metro4.html";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/advertising/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/advertising/*"][] = $img_name;
*/

$img_name = "pr-line-468x60-3325.gif";  
//prlinia480x60.swf
//$img_name = "prlinia480x60х3325.swf";
$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/";
//$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/skidki.html";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["style"] = "border:1px solid #000; width:466px;height:58px;";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/advertising/*"][] = $img_name;

/*$img_name = "prline468x60-3325x5.jpg";
$imgadv[$img_name]["url"] = "http://www.prlreklama.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/media/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/media/*"][] = $img_name;
*/
$img_name = "r3325.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3325/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/advertising/street/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it АвисСтройТехника (АСТ) --
/* $img_name = "r8865.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8865/";
$imgadv[$img_name]["alt"] = "АвисСтройТехника";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/machinery-rent/*"][] = $img_name;
*/

/*$img_name = "avisstroiteh468x60-8865.gif";
$imgadv[$img_name]["url"] = "http://www.avisstroispb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/equipment/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/equipment/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it НЭК Энергия --
/*
$img_name = "necen468x60-7069.gif";
$imgadv[$img_name]["url"] = "http://www.necenergia.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["items"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/equipment/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/discount/equipment/*"][] = $img_name;
*/


// -------------------------------------------------------------------------------------------------
//it Элантра --
/*$img_name = "r8513.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8513/";
$imgadv[$img_name]["alt"] = "Элантра";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/legal/advice/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Энергомашбанк --
/*$img_name = "energomash468x60xNY.gif"; //energomash468x60xNY.gif | energomash468x60x008.gif
$imgadv[$img_name]["url"] = "http://www.energomb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/finances/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/finances/*"][] = $img_name;

//дополнительно поставили бесплатно в рубриках
$img_places["adv2_1"]["urls"]["/catalog/state/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/jewels/*"][] = $img_name;
//$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
*/

/*
$img_name = "r4369.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4369/";
$imgadv[$img_name]["alt"] = "Энергомашбанк";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/finances/banks/*"][] = $img_name;
*/

/*
$img_name = "energomash468x60x3.gif";
$imgadv[$img_name]["url"] = "http://www.energomb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/finances/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/finances/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------



//it Лайма --
/*$img_name = "laima468x60.gif";
$imgadv[$img_name]["url"] = "http://www.laimaspb.spbinform.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/services/*"][] = $img_name;
*/

//it Творческий Союз работников культуры --
/*$img_name = "kultura468x60-3637.gif";
$imgadv[$img_name]["url"] = "http://www.kultura.spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/services/*"][] = $img_name;
*/


// -------------------------------------------------------------------------------------------------

//it Мандарин --
/*$img_name = "mandarinn468x60.png";
$imgadv[$img_name]["url"] = "http://www.mandarinn.ru/mgp.html";
$imgadv[$img_name]["style"] = "background:#ef4c23;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/


//it Август - Невский промпродсервис --
/*
$img_name = "bazafoinox468x60.gif";
$imgadv[$img_name]["url"] = "http://www.bazafoinox.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/equipment/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/equipment/*"][] = $img_name;
*/



//it Константа-ТУР --
/*
$img_name = "kontour468x60-8875.jpg";
$imgadv[$img_name]["url"] = "http://kon-tour.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
*/
/*$img_name = "r8875.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8875/";
$imgadv[$img_name]["alt"] = "Константа-ТУР";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/travels/tours/*"][] = $img_name;
*/


//it М-Групп --
/*$img_name = "m-group-spb468x60x2-8855.gif"; 
$imgadv[$img_name]["url"] = "http://www.m-group-spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/renovation/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/transportations/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it 008 --
// совмещенный пакет
//$img_name = "008x240x400-18let.gif";
//$img_name = "008_240x400x8march.gif";
/*$img_name = "008_240x400x8phonet.gif";
$imgadv[$img_name]["url"] = "/feedback/present/";
$imgadv[$img_name]["alt"] = "тариф - Совмещенный пакет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/feedback/present/"][] = $img_name;
*/

$img_name = "008_240x400x1-elit.jpg";
$imgadv[$img_name]["url"] = "/feedback/present-elit/";
//$imgadv[$img_name]["alt"] = "тариф - Совмещенный пакет";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/feedback/present-elit/"][] = $img_name;


/*
//$img_name = "008_240x400x23feb-econom.gif";
//$img_name = "008_240x400x8march-econom.jpg";
$img_name = "008_240x400x1-elit.jpg";
//$img_name = "008_240x400x2-20let.gif";
$imgadv[$img_name]["url"] = "/feedback/present-elit/";
//$imgadv[$img_name]["url"] = "/info/iprice/";
//$imgadv[$img_name]["type"] = "js";
//$imgadv[$img_name]["alt"] = "тариф - Подарочный Эконом - 30% к 23 февраля";
//$imgadv[$img_name]["js"] = "$('#adv-place').css({'width':'240px','height':'400px'}).crossSlide({sleep: 2,fade: 1}, [{ src: '/content/ilogos/240400/008_240x400x1-elit.jpg',target:'_blank',href: 'adv-url' },{ src: '/content/ilogos/240400/008_240x400x2-elit.jpg',target:'_blank',href: 'adv-url' }]);";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["items"][] = $img_name;
$img_places["adv4_1"]["urls"]["/feedback/present-elit/"] = $img_name;
*/

// swf
$img_name = "008x240x400-skidka40.swf";
$imgadv[$img_name]["url"] = "/feedback/skidka/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/feedback/osen/"] = $img_name;


//$img_places["adv4_1"]["urls"]["/"][] = $img_name;
//$img_places["adv4_1"]["urls"]["/"][] = $img_name;

//it Проектно-строительное бюро = Систо Ф --
/*$img_name = "prstburo468x60.gif";
$imgadv[$img_name]["url"] = "/company/9968/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
/*
$img_name = "r9968.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9968/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Перевозки gruzinform --
/*$img_name = "gruzinform.gif";
$imgadv[$img_name]["url"] = "http://www.gruzinform.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/security/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/salvaging/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Стимул --
$img_name = "stimul468x60.gif";
$imgadv[$img_name]["url"] = "http://www.profnastill.com/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
//$img_places["adv2_1"]["urls"]["/catalog/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
///$img_places["adv2_1"]["urls"]["/catalog/cottage/*"][] = $img_name;
/*$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Меха Рот-Фронта --
$img_name = "r3635.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3635/";
$imgadv[$img_name]["alt"] = "Меха Рот-Фронта";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;

/*$img_name = "meharf468x60-3635.gif";
$imgadv[$img_name]["url"] = "http://www.meharf.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it мода меха --
/*$img_name = "modamexa468x60x2-4381.gif";
$imgadv[$img_name]["url"] = "http://www.modamexa.ru/";
$imgadv[$img_name]["alt"] = "Мода меха";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/discount/clothing/*"][] = $img_name;
*/

$img_name = "r4381.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4381/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
// -------------------------------------------------------------------------------------------------
//it Семейный Сервис --
/*$img_name = "r12137.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12137/";
$imgadv[$img_name]["alt"] = "Агентство Семейный Сервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/staff/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Теле-Сервис --
/*$img_name = "r11403.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11403/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/


//it Невская Оптика Холдинг --
$img_name = "r3763.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3763/";
$imgadv[$img_name]["alt"] = "Невская оптика";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/glasses/*"][] = $img_name;

/*$img_name = "noptica468x60-3763.gif";
$imgadv[$img_name]["url"] = "http://www.noptica.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$imgadv[$img_name]["style"] = "background:#faeee6;";
$imgadv[$img_name]["alt"] = "Невская Оптика";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/glasses/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/

//it Кондитерский комбинат Невские берега --
/*$img_name = "r2914.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2914/";
$imgadv[$img_name]["alt"] = "Кондитерский комбинат Невские берега";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/food/pastry/*"][] = $img_name;
*/

//it Югер --
$img_name = "r2703.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2703/";
$imgadv[$img_name]["alt"] = "Оптовый центр белья и колготок Югер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/clothes/*"][] = $img_name;
// ------------------------------------------------------------------------------------------------
//it Ювелирный Бутик Фамильные Драгоценности --
/*$img_name = "r12482.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12482/";
$imgadv[$img_name]["alt"] = "Ювелирный Бутик Фамильные Драгоценности";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/jewels/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Веста Трейдинг --
/*$img_name = "r12424.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12424/";
$imgadv[$img_name]["alt"] = "Веста Трейдинг";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/building/plumbing-valves/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Красный Октябрь-Нева --
/*$img_name = "r2817.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2817/";
$imgadv[$img_name]["alt"] = "Красный Октябрь-Нева";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/equipment/electrical/*"][] = $img_name;
*/

/*$img_name = "neva468x60-2817.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.motoblok.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/cottage/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it ТП Лидер --
/*$img_name = "r12472.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12472/";
$imgadv[$img_name]["alt"] = "ТП Лидер";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/cosmetics/*"][] = $img_name;
*/

// ------------------------------------------------------------------------------------------------
//it Агава - Студия флористики и дизайна --
/*$img_name = "r3956.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3956/";
//$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r3956.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/flowers/*"][] = $img_name;
///$img_places["adv1_1"]["urls"]["/"][] = $img_name; //test
*/


/*
$img_name = "agava468x60-3956.swf"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.agavaspb.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r3956.gif";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/housing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аструм --
$img_name = "r2528.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2528/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
// -------------------------------------------------------------------------------------------------
//it Компьютерный сервис Рестарт --
/*$img_name = "r11402.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11402/";
$imgadv[$img_name]["alt"] = "Компьютерный сервис Рестарт";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/computers/help/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Автошкола Дилижанс --
/*$img_name = "r12377.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12377/";
$imgadv[$img_name]["alt"] = "Автошкола Дилижанс";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/schools/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Химчистка Пингвин --
/*$img_name = "r4209.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4209/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Транспортная компания СпецБалтТранс --
/*$img_name = "r11396.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11396/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Лазерный центр --
$img_name = "r3915.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3915/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/souvenirs/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Стимул реклама (Рекламно-производственная фирма Стимул) --
$img_name = "stimul468x60-2979.gif";
$imgadv[$img_name]["url"] = "http://www.rpf-stimul.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/advertising/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/advertising/*"][] = $img_name;

$img_name = "r2979.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2979/";
$imgadv[$img_name]["alt"] = "Стимул";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/advertising/street/*"][] = $img_name;
$img_places["adv1_1"]["urls"]["/company/2979/*"][] = $img_name;

// -------------------------------------------------------------------------------------------------
//it Партнер Пак --
/*$img_name = "partnerpak468x60-7927.gif";
$imgadv[$img_name]["url"] = "http://www.partnerpak.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["items"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/discount/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Арт де Вивре --
/*$img_name = "kover468x60-4248.gif";
$imgadv[$img_name]["url"] = "http://www.kover.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housing/carpets/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/housing/*"][] = $img_name;
*/

/*
$img_name = "r4282.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4282/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/carpets/*"][] = $img_name;
*/


//it Аренда Авто --
/*$img_name = "a-arenda468x60-11849.gif";
$imgadv[$img_name]["url"] = "http://www.a-arenda-spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/auto/rent/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/auto/*"][] = $img_name;
*/
$img_name = "r11849.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11849/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_6"]["urls"]["/catalog/auto/rent/*"][] = $img_name;


//it Парфюмеръ --
/*$img_name = "r11748.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11748/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/


//it Монэ Моне --
/*$img_name = "mone.jpg";
$imgadv[$img_name]["url"] = "http://www.hotelmone.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/

//it Полезные Товары --
/*$img_name = "poleznytovar468x60-3926.gif";
$imgadv[$img_name]["url"] = "http://www.poleznytovar.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/

/*
$img_name = "r3926.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3926/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Прогрессивная стоматология --
/*$img_name = "r11848.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11848/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
//it Аксель-рент --
/*$img_name = "axsel-rent.swf";
$imgadv[$img_name]["url"] = "http://www.axsel-rent.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["style"] = "border:1px solid #000;";
//$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/auto/*"][] = $img_name;
*/
//it Лит фут --
/*$img_name = "litfoot468x60.gif";
$imgadv[$img_name]["url"] = "http://www.litfoot.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/
/*
$img_name = "r3999.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3999/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
//it Спецодежда --
/*$img_name = "supervat2.gif";
$imgadv[$img_name]["url"] = "http://www.supervatnik.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["alt"] = "ООО Спецодежда производство и продажа";
$imgadv[$img_name]["style"] = "background:#efefef;";
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/

//it Смак-Тревел --
//$img_name = "smaktravel100x60x2.gif";
/*$img_name = "r10418.gif";
$imgadv[$img_name]["url"] = "http://www.smaktravel.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1"]["items"][] = $img_name;
$img_places["adv1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv1"]["urls"]["/discount/travels/*"][] = $img_name;
*/

//it Гранти-мед --
/*$img_name = "granti468x60.gif";
$imgadv[$img_name]["url"] = "http://granti.spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/


//it магазин ярких красок --
/*$img_name = "mypaint2.gif";
$imgadv[$img_name]["url"] = "http://www.mypaint.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/building/*"][] = $img_name;
*/


//it АГЕНТСТВО ПЕРЕВОЗОК --
/*
$img_name = "agperevozok468x60.gif";
$imgadv[$img_name]["url"] = "/company/10360/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/transportations/*"][] = $img_name;
*/







//it Тайфун --
/*
$img_name = "taifun.gif";
$imgadv[$img_name]["typelink"] = "direct";
$imgadv[$img_name]["alt"] = "металлические двери";
$imgadv[$img_name]["url"] = "http://www.taifun.ru/?cat=dveri-metallicheskie";
$imgadv[$img_name]["style"] = "background:#f1ece0;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_2"]["items"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/catalog/building/doors/*"][] = $img_name;
$img_places["adv3_2"]["urls"]["/discount/building/*"][] = $img_name;
*/

//place,url,img_name,urls,srcurl 
//aaaaaaaaaaaa("adv1_1","/company/4349/","r4349.jpg",array())

//it Мир мебели --
/*
$img_name = "r4349.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4349/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Аэротрэвел-клуб --
/*$img_name = "aerotravel468x60-3798.gif";
$imgadv[$img_name]["url"] = "http://www.aerotravel.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/travels/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/travels/*"][] = $img_name;
*/
/*
$img_name = "r3798.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3798/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it СевЗапМебель --
$img_name = "r2042.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2042/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it Мастер Саун --
/*$img_name = "r3529.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3529/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Продюсерский центр ГранИ-АРТ --
/*$img_name = "r2562.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2562/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/services/holiday/*"][] = $img_name;
*/


//it Атидон --
$img_name = "r4418.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4418/";
$imgadv[$img_name]["alt"] = "Лечение зубов в Санкт-Петербурге, - стоматология Атидон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;


//it Невский простор --
/*$img_name = "r2084.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2084/";
$imgadv[$img_name]["alt"] = "Невский простор";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
//$img_places["adv1_2"]["urls"][""][] = $img_name;


//it РемСтройСервис --
/*$img_name = "r11240.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11240/";
$imgadv[$img_name]["alt"] = "РемСтройСервис";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/renovation/comprehensive/*"][] = $img_name;
*/

//it Мебель СВ --
/*$img_name = "r12296.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12296/";
$imgadv[$img_name]["alt"] = "Мебель СВ";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/furniture/parts/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------
//it ВедМед --
/*$img_name = "vedmed468x60-12667.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.vedmedspb.ru/";
$imgadv[$img_name]["alt"] = "Многопрофильная клиника ВедМед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/

/*$img_name = "r12667.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12667/";
$imgadv[$img_name]["alt"] = "Многопрофильная клиника ВедМед";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/specialists/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Пчёлкин мёд --
/*$img_name = "r8556.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8556/";
$imgadv[$img_name]["alt"] = "Пчёлкин мёд";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/food/stores/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Практичная одежда европейских марок --
/*
$img_name = "r4433.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4433/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/clothes/*"][] = $img_name;
*/
/*
$img_name = "lmstyle468x60-4433.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.lmstyle.ru/";
$imgadv[$img_name]["alt"] = "Практичная одежда европейских марок";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/

//it Медтехника --
$img_name = "r2665.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2665/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/appliances/*"][] = $img_name;

// -------------------------------------------------------------------------------------------------
//it Центр лазерных технологий --
/*$img_name = "r2922.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2922/";
$imgadv[$img_name]["alt"] = "Центр лазерных технологий";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/jewels/souvenirs/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Питер-лада --
/*$img_name = "r4388.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4388/";
$imgadv[$img_name]["alt"] = "Питер-лада";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
//it Метрика --
/*
$img_name = "r4308.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4308/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Он Клиник - Нева --
/*$img_name = "r4208.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4208/";  //r4208.gif
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Кеттлер-спорт --
/*$img_name = "r4422.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4422/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/sports/trainers/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Той энд Хобби / Проксон Той энд Хобби - Радиоуправляемые модели игрушек --
$img_name = "r3901.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3901/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/children/toys/*"][] = $img_name;

$img_name = "toyhobby468x60x2-3901.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.toyhobby.spb.ru/";
$imgadv[$img_name]["alt"] = "Радиоуправляемые модели игрушек";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/rest/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/rest/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/children/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/children/*"][] = $img_name;

// -------------------------------------------------------------------------------------------------
//it Эталон + --
$img_name = "r11299.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11299/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/mending/*"][] = $img_name;
$img_name = "etalonplus468x60-11299.gif"; 
$img_places["adv2_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.etalonplus.uspb.ru/";
$imgadv[$img_name]["alt"] = "Эталон +";
//$imgadv[$img_name]["style"] = "background:#3d962e;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/discount/services/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------


//it Лидер Бюро переводов  --
$img_name = "r1786.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/1786/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it Центр массажа  --
/*$img_name = "r8951.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8951/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Астростиль --
/*$img_name = "r4045.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4045/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it МВС School --
/*$img_name = "r12708.swf"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12708/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r12708.gif";
$imgadv[$img_name]["alt"] = "МВС School";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/education/language/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Крепеж --
$img_name = "r2923.swf"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2923/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/10060/r2923.jpg";
$imgadv[$img_name]["alt"] = "Сеть специализированных магазинов Крепеж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
/*$img_places["adv1_2"]["urls"]["/catalog/building/locks/*"][] = $img_name;*/


$img_name = "r2923.jpg"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2923/";
$imgadv[$img_name]["alt"] = "Сеть специализированных магазинов Крепеж";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/705/*"][] = $img_name;

// -------------------------------------------------------------------------------------------------
//it Транспортировка больных --
/*$img_name = "r2599.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2599/";
$imgadv[$img_name]["alt"] = "Транспортировка больных";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/ambulance/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//Аккорд-сервис
//$img_name = "r3336.jpg";
//$img_places["adv1"]["items"][] = $img_name;
//$imgadv[$img_name]["url"] = "/company/3336/";
//$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


// -------------------------------------------------------------------------------------------------
//it Мэллон --
/*$img_name = "mellon468x60x2.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.stroitelstvo-spb.ru/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["style"] = "background:#e5e5e5;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
// 11.11.2015
$img_name = "r3717.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3717/";
$imgadv[$img_name]["alt"] = "Мэллон";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/concrete/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Медицинский центр Миламед --
$img_name = "milamed468x60-12862.gif"; 
$img_places["adv3_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.milamed.com/";
$imgadv[$img_name]["alt"] = "Медицинский центр Миламед";
//$imgadv[$img_name]["style"] = "background:#eee6db;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Патронажная служба Парацельс + --
$img_name = "paratsels468x60x4.gif"; 
$img_places["adv2_2"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.paracelsplus.ru/";
$imgadv[$img_name]["alt"] = "Патронажная служба Парацельс +";
$imgadv[$img_name]["style"] = "background:#eee6db;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_2"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/discount/medicine/*"][] = $img_name;

$img_name = "r8592.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8592/";
$imgadv[$img_name]["alt"] = "Парацельс+";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/medicine/ambulance/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Вимос 16.10.2015 --
/*$img_name = "r4075.jpg";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4075/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
/*
$img_name = "vimos466x60-4075.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.vimos.ru/";
$imgadv[$img_name]["alt"] = "Торговый дом Вимос";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/building/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Виталь --
$img_name = "vital468x60-3525.gif"; 
$img_places["adv2_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.clinicvital.ru/";
$imgadv[$img_name]["alt"] = "Петербургская Клиника Виталь";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/medicine/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it ТТИШБ ШКОЛА--
$img_name = "r4309.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4309/";
///$imgadv[$img_name]["url"] = "http://www.ttishb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/education/private-schools/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------



//it Мехландия --
/*$img_name = "r3537.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3537/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;
*/

//it Ваша Безопасность --
/*$img_name = "r3727.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3727/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Мув-ит --
/*$img_name = "r11171.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11171/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/


//it Завод Стальнов --
/*$img_name = "r3553.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3553/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

// -------------------------------------------------------------------------------------------------
//it Альянс --
/*$img_name = "r3830.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3830/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/housing/curtains/*"][] = $img_name;
*/
/*
$img_name = "alyans468x60x2-3830.gif";
$imgadv[$img_name]["url"] = "/company/3830/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/housing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/housing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/sewing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/sewing/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Северо-Западная Клининговая Компания --
/*$img_name = "clean-spb468x60-3199.gif";
$imgadv[$img_name]["url"] = "http://www.clean-spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/services/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/services/*"][] = $img_name;
*/


//метизы
$img_name = "r2293.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2293/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;



//it Такси Драйв --
/*
$img_name = "taxi-drive468x60-9686.gif";
$imgadv[$img_name]["url"] = "http://www.taxi-drive-spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
*/
/*$img_name = "r9686.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9686/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Баня Виа Вита --
$img_name = "r3672.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3672/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
// ------------------------------------------------------------------------------------------------
//it Диалог Сеть центров слухопротезирования --
$img_name = "r11323.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11323/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
// ------------------------------------------------------------------------------------------------
//it 33-й зуб --
/*$img_name = "r9083.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9083/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_4"]["urls"]["/catalog/medicine/dentistry/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Алекс и Ко --
/*$img_name = "alexco.gif";
//$imgadv[$img_name]["url"] = "http://www.alex.kontoring.ru/";
$imgadv[$img_name]["url"] = "/company/4266/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/books/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/cleaning/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/computers/*"][] = $img_name;
*/
$img_name = "alexco468x60x1212.swf";
$imgadv[$img_name]["url"] = "http://xn--80acbm5ckbg.xn--p1ai/";
$imgadv[$img_name]["type"] = "swf";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/books/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/company/4266/*"][] = $img_name;


$img_name = "alex-ko240x400x5-4266.swf";
$imgadv[$img_name]["url"] = "http://xn--80acbm5ckbg.xn--p1ai/"; 
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/240400/flowers240x400.jpg";
$img_places["adv4_1"]["items"][] = $img_name;
//$img_places["adv4_2"]["items"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/4266/*"][] = $img_name; 
// 12.10.2015 и 01.11.2015
$img_places["adv4_1"]["urls"]["/catalog/books/*"][] = $img_name;
$img_places["adv4_1"]["urls"]["/catalog/books/office-supplies/*"][] = $img_name;

/*
$img_name = "alexco_lorenz468x60.gif";//"alexco_svetocopy468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.alex.kontoring.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["style"] = "background:#dd032a;";
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/books/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/books/*"][] = $img_name;
*/
// 12.10.2015 и 01.11.2015
$img_name = "r4266.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4266/";
$imgadv[$img_name]["alt"] = "Алекс и Ко";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/books/office-supplies/*"][] = $img_name;

// ------------------------------------------------------------------------------------------------
//it Материя Мода --
/*$img_name = "materiamoda468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.materiamoda.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/sewing/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/sewing/*"][] = $img_name;
*/

//it Тетра типография --
/*$img_name = "tetra468x60-11772.gif";
$imgadv[$img_name]["url"] = "http://www.tetraprint.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/polygraphics/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/polygraphics/*"][] = $img_name;
*/
/*
$img_name = "r11772.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11772/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

// ------------------------------------------------------------------------------------------------
//it Агата Меховое ателье --
/*$img_name = "agata468x60-3996.gif";
$imgadv[$img_name]["url"] = "http://www.agataspb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["style"] = "background:#58649D;";
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/clothing/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/clothing/*"][] = $img_name;
*/

/*$img_name = "r3996.gif"; 
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3996/";
$imgadv[$img_name]["alt"] = "Меховое ателье Агата";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/clothing/fur-clothes/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------



//it Транс Свет --
/*$img_name = "trsvet468x60-10593.gif";
$imgadv[$img_name]["url"] = "/company/10593/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/transportations/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/transportations/*"][] = $img_name;
*/

//it Комплекс плюс --
/*$img_name = "komplex468x60x6-2368.gif";
$imgadv[$img_name]["url"] = "http://www.komplex-plus.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/equipment/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/equipment/*"][] = $img_name;
*/
//it Эдинбург --
/*$img_name = "edinburg468x60.gif";
$imgadv[$img_name]["url"] = "http://www.edinburg-bar.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/restaurants/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/restaurants/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Грузчики Петербурга --
/*$img_name = "gspb468x60-7746.png";
$imgadv[$img_name]["url"] = "http://www.gspb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["style"] = "background:#93badc;";
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;
*/
$img_name = "r7746.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7746/";
$imgadv[$img_name]["alt"] = "Грузчики Петербурга";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/loader/*"][] = $img_name;
// ------------------------------------------------------------------------------------------------
//it Стритстрой --
/*$img_name = "stritstroy468x60.gif";
$imgadv[$img_name]["url"] = "http://www.stritstroy.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;

$img_name = "r10516.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10516/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$imgadv[$img_name]["alt"] = "Стритстрой";
$img_places["adv1_1"]["urls"]["/catalog/renovation/construction/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Текнос Деко --
$img_name = "r7467.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/7467/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it Софит --
/*$img_name = "r3847.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3847/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

/*
//it Томас-Петербург --
$img_name = "r4086.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4086/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$imgadv[$img_name]["alt"] = "Томас-Петербург";
$img_places["adv1_2"]["urls"]["/catalog/computers/consumable/*"][] = $img_name;
*/


//it Гурманин --
/*$img_name = "r12126.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12126/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Aurore Auto Аврора Авто --
$img_name = "r4254.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4254/";
$imgadv[$img_name]["alt"] = "Аврора Авто";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/cars/*"][] = $img_name;

//it Автофорум --
$img_name = "r4255.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4255/";
$imgadv[$img_name]["alt"] = "Автофорум";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/auto/cars/*"][] = $img_name;



//it Правовой центр Омега --
/*
$img_name = "omegacompany.swf";
$imgadv[$img_name]["url"] = "http://www.omegacompany.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$imgadv[$img_name]["type"] = "swf";
//$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/legal/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/legal/*"][] = $img_name;
*/

// ------------------------------------------------------------------------------------------------
//it Нирвана плюс --
/*$img_name = "nirvanaplus.gif";
$imgadv[$img_name]["url"] = "http://www.nirvanaplus.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/furniture/*"][] = $img_name;
*/

/*$img_name = "r9711.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9711/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

/*
$img_name = "nirvanaplus240x400x3-9711.swf"; 
$img_places["adv4_1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.nirvanaplus.ru/";
$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["noswfsrc"] = "/content/ilogos/46860/helix468x60-3623.gif";
//$imgadv[$img_name]["alt"] = "";
//$imgadv[$img_name]["style"] = "background:#d1eefc; border:1px solid #000; height:400px;width:240px;";
//$imgadv[$img_name]["dateon"] = '01.03.2011';
//$imgadv[$img_name]["dateoff"] = '01.04.2011';
$imgadv[$img_name]["srcurl"] = "/content/ilogos/240400/".$img_name;
$img_places["adv4_1"]["urls"]["/catalog/furniture/*"][] = $img_name;

//дополнительно бесплатно
$img_places["adv4_2"]["urls"]["/catalog/furniture/*"][] = $img_name;
$img_places["adv4_2"]["urls"]["/company/9711/*"][] = $img_name;
//$img_places["adv4_2"]["urls"]["/catalog/state/*"][] = $img_name;
*/
// ------------------------------------------------------------------------------------------------
//it Foris Fiat Форис Фиат --
/*$img_name = "r11739.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11739/";
$imgadv[$img_name]["alt"] = "Автофорум";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Foris --
$img_name = "r4257.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4257/";
$imgadv[$img_name]["alt"] = "Foris";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/cars/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it Автоклимат --
/*$img_name = "autoclimat.gif";
$imgadv[$img_name]["url"] = "http://www.avtoklimat.spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/auto/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Приморский авторынок --
$img_name = "prim-autorinok468x60-11974.gif";
$imgadv[$img_name]["url"] = "/company/11974/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/auto/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/auto/*"][] = $img_name;
// -------------------------------------------------------------------------------------------------
//it AGA --
$timeNOW = date("H:i");
$time1 = new DateTime('01:30');
$time2 = new DateTime('08:30');
$timeON = $time1->format('H:i');
$timeOFF = $time2->format('H:i');

/*
if($timeNOW > $timeON && $timeNOW < $timeOFF) {
$img_name = "aga-sprinthost1";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<iframe frameborder="0" width="468" height="60" hspace="0" vspace="0" scrolling="no" src="http://ad.sprinthost.ru/caroussel?cin=1342&r=1&enc=cp1251"></iframe>';
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/miscellanea/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/communication/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/computers/*"][] = $img_name;


$img_name = "aga-sprinthost2";
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<iframe frameborder="0" width="468" height="60" hspace="0" vspace="0" scrolling="no" src="http://ad.sprinthost.ru/caroussel?cin=1342&r=2&enc=cp1251"></iframe>';
$img_places["adv2_2"]["items"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/miscellanea/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/communication/*"][] = $img_name;
$img_places["adv2_2"]["urls"]["/catalog/computers/*"][] = $img_name;
}
*/
// -------------------------------------------------------------------------------------------------
//it Курьерская Служба Петербурга = СпецТехИнвест --
/*$img_name = "r10630.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/10630/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------

//it Ал-Ю-авто --
/*$img_name = "bazalbert468x60-4327.gif";
$imgadv[$img_name]["url"] = "/company/4327/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/travels/*"][] = $img_name;

$img_name = "r4327.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4327/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_2"]["urls"]["/catalog/transportations/passenger/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Юридическая корпорация справедливость --
/*$img_name = "spb-uks468x60-3963.gif";
$imgadv[$img_name]["url"] = "http://www.spb-uks.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/legal/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------


//it Надежда Срочное вскрытие дверей/замков --
$img_name = "r3715.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/3715/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it НСК-Модуль --
/*$img_name = "nsc_modul468x60.gif";
$imgadv[$img_name]["url"] = "http://www.nsc-modul.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/building/*"][] = $img_name;
*/


//it Каскад --
/*
$img_name = "kskspb468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.ksk-spb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/renovation/*"][] = $img_name;
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/renovation/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/salvaging/*"][] = $img_name;
*/




//it Альмандин --
//$img_name = "rusmattress468x60.gif";
//$imgadv[$img_name]["url"] = "http://www.rusmattress.ru/";
//$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$img_places["adv3_1"]["items"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/catalog/furniture/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/discount/furniture/*"][] = $img_name;


//it Атидон --
/*$img_name = "atidon468x60.gif";
$imgadv[$img_name]["url"] = "http://www.atidon.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/

//it Национальный институт здоровья --
/*
$img_name = "cnih468x60x2.gif";
$imgadv[$img_name]["url"] = "http://www.cnih.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/medicine/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/medicine/*"][] = $img_name;
*/
//$img_places["adv3_1"]["urls"]["/catalog/health/*"][] = $img_name;
//$img_places["adv3_1"]["urls"]["/discount/health/*"][] = $img_name;


//it Российские двери --
/*$img_name = "ros-dveri468x60x3.gif";
$imgadv[$img_name]["url"] = "http://www.ros-dveri.ru/";
$imgadv[$img_name]["style"] = "background:#c6be91;";//#4b7cc7
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/building/*"][] = $img_name;
*/

// -------------------------------------------------------------------------------------------------
//it Гильдия Маляров --
$img_name = "gmspb468x60x2-9410.gif"; //gmspb468x60.gif
$imgadv[$img_name]["url"] = "http://www.gmspb.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
$img_places["adv3_1"]["items"][] = $img_name;
$img_places["adv3_1"]["urls"]["/catalog/building/*"][] = $img_name;
$img_places["adv3_1"]["urls"]["/discount/building/*"][] = $img_name;

$img_name = "r9410.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9410/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
// -------------------------------------------------------------------------------------------------
//it Велес --
/*$img_name = "r8587.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8587/";//"http://www.veles-812.ru";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/building/windows/*"][] = $img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Гермес бильярд --
/*$img_name = "r2724.gif";
$img_places["adv1"]["items"][] = $img_name;
//$img_places["adv1_1"]["items"][] = $img_name;
$img_places["adv1_1"]["urls"]["/catalog/rest/*"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.germes-billiard.ru/"; ///company/2724/
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Макси Сервис --
/*$img_name = "7770777.jpg";
$img_places["adv1"]["items"][] = $img_name;
//$img_places["adv1_1"]["items"][] = $img_name;
$img_places["adv1_1"]["urls"]["/catalog/services/*"][] = $img_name;
$imgadv[$img_name]["url"] = "http://www.777-0-777.ru/";
$imgadv[$img_name]["alt"] = "ремонт бытовой техники, вызов сантехника и электрика, установка водосчетчиков";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Твой мир --
/*$img_name = "r9728.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/9728/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Аквапанорама / Аквариумы --
/*$img_name = "r2502.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2502/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/
// -------------------------------------------------------------------------------------------------
//it Мебель из дуба (Явид) --
$img_name = "r11181.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11181/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it Наш Город --
/*$img_name = "r8852.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/8852/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/renovation/machinery-rent/*"][] = $img_name;
*/

//it Mori Cinema --
/*$img_name = "mori468х60-4376.gif";
$imgadv[$img_name]["url"] = "http://www.mori-cinema.ru/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/46860/".$img_name;
//$imgadv[$img_name]["style"] = "background:#faeee6;";
$imgadv[$img_name]["alt"] = "";
$img_places["adv2_1"]["items"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/rest/cinema/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/catalog/rest/*"][] = $img_name;
$img_places["adv2_1"]["urls"]["/discount/rest/*"][] = $img_name;
*/

//it test items ----
$img_name = "/catalog/building/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Строительство, ремонт квартир, строительные и отделочные материалы" href="http://www.yamax.ru/">Строительство и ремонт</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/building/ceilings/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Широкий выбор натяжных потолков в СПб" href="http://potolki-okna.ru/natyazhnye-potolki/">Натяжные потолки</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/building/windows/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="5 неоспоримых преимуществ пластиковых окон veka" href="http://potolki-okna.ru/plastikovye-okna/">Пластиковые окна</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/renovation/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Ремонт квартиры своими руками" href="http://www.happydreams.biz/">Строительство и ремонт</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/medicine/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Все о медицине, здоровье, здоровом образе жизни" href="http://jivitezdorovo.ru/">Медицина и здоровье</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/health/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Все для женщин, красота, здоровье, диеты" href="http://dlya-woman.ru/category/krasota-i-zdorove/">Красота и здоровье</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/jewels/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Украшения, бижутерия, аксессуары ручной работы - Серьги, бусы, колье, браслеты, кольца и другие украшения" href="http://www.uznaiki.ru/"></a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;

$img_name = "/catalog/children/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="детские товары - книги, игрушки, мебель, музыка и другие товары для детей" href="http://www.uznaiki.ru/">Детские товары</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;
$img_places["adv_link_1"]["urls"]['/catalog/children/goods/p/*'][] = $img_name;

$img_name = "/catalog/children/furniture/p/*";
$img_places["adv_link_1"]["items"][] = $img_name;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = '<dd><a title="Мебель для детей: парты с рисунком и без, стулья, приставки и другая детская мебель" href="http://www.uznaiki.ru/Detskaya_mebel/">Детская мебель</a></dd>';
$img_places["adv_link_1"]["urls"][$img_name][] = $img_name;


//it АстраСтанкоПром --
/*$img_name = "r2639.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2639/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Предприятие Игрек-ПКФ --
$img_name = "r2933.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/2933/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


//it Лайн --
/*$img_name = "r4302.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4302/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it РКФ Норд-Вест --
/*$img_name = "r11456.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11456/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Автоцентр на Садовой --
/*$img_name = "r4339.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4339/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
$img_places["adv1_1"]["urls"]["/catalog/auto/moto/*"][] = $img_name;
*/

//it Вертикаль --
$img_name = "r11494.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11494/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;


/*
//it Предприятие ДВК --
$img_name = "r4380.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4380/";
$imgadv[$img_name]["alt"] = "Сейфы, шкафы, стеллажи, верстаки";
//$imgadv[$img_name]["type"] = "swf";
//$imgadv[$img_name]["style"] = "border-right:1px solid #000;border-top:1px solid #000;";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
//$img_places["adv1_4"]["items"][] = $img_name;
//$img_places["adv1_4"]["urls"]["/"][] = $img_name;
*/




//it Ваш Риэлтор --
/*
$img_name = "r11270.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/11270/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Евросоль --
/*$img_name = "r5.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/5/";
$imgadv[$img_name]["alt"] = "";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it Мэйджик Сан-Эм Би Эс --
/*$img_name = "r4191.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/4191/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it 100 печей --
/*
$img_name = "r12056.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12056/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/

//it СпецПромМонтаж --
/*$img_name = "r12060.gif";
$img_places["adv1"]["items"][] = $img_name;
$imgadv[$img_name]["url"] = "/company/12060/";
$imgadv[$img_name]["srcurl"] = "/content/ilogos/10060/".$img_name;
*/


@include_once(DIR_PROJECT_ROOT.'ini/advlist.zakaz.php');

?>
