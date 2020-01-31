<?php

/////////////////////////////////////////////
/// Evodesign Internet Promotion Company ///
/// 008.ru Engine (c) 2015.             ///
/// Support mail: kilitary@gmail.com  ///
////////////////////////////////////////
//xdebug_disable();
// подключем конфиг
require_once __DIR__ . '/lib/config.php';
// подключаем  3rd либы
require_once __DIR__ . '/lib/elasticsearch/vendor/autoload.php'; // db
require_once __DIR__ . '/lib/silex/vendor/autoload.php'; // framework routing
require_once __DIR__ . '/lib/phpmorphy/src/common.php'; // morphology
require_once __DIR__ . '/lib/goDB/autoload.php'; // db mysql
require_once __DIR__ . '/lib/mammail.class.php'; // mail
require_once __DIR__ . '/lib/ImageResize.php'; // image resize
require_once __DIR__ . '/lib/securimage/securimage.php'; // captcha
require_once __DIR__ . '/lib/functions.php'; // other
// подключаем наши классы
require_once __DIR__ . '/lib/classes/core.php';
require_once __DIR__ . '/lib/classes/elasticsearch.php';
require_once __DIR__ . '/lib/classes/stat.php';
require_once __DIR__ . '/lib/classes/news.php';
require_once __DIR__ . '/lib/classes/cache.php';
require_once __DIR__ . '/lib/classes/objects.php';
require_once __DIR__ . '/lib/classes/advert.php';
require_once __DIR__ . '/lib/classes/discount.php';
// подключаем редиректы
include_once "it_sites/008.ru/content/ini/redirect.php";

$StartTime = microtime_float();
// посылаем ненайденнный контент нафиг

if (strstr(@$_SERVER['REQUEST_URI'], "/content/"))
{
    header("Location: /content/files/noimage.png");
    die();
}
Core::init_user();
Core::mut();
/*if(@strstr($_SERVER['REQUEST_URI'], "008"))
$_SESSION['allowed'] = true;
if(@$_SESSION['allowed'] != true)
die("доступ закрыт");*/
$_SESSION['hits']++;
$app->links = $links;
// подключаем обработку /stat/ (вынесено в отдельный файл)
require_once "stat.inc";

//==================================================================================
// admin ajax
$app->get("/404/", function () use ($app)
{
    return parseTemplate("pages/404.php"); //$app->redirect($_SERVER['HTTP_REFERER']);
});
// admin ajax
$app->get("/admin/ajax/{cmd}/", function ($cmd) use ($app)
{
    mlog("admin ajax cmd [$cmd]");
    switch ($cmd)
    {
        case 'resetcache':
            Cache::clear();
            break;
        default:
            break;
    }
    return json_encode(array('result' => 'ok')); //$app->redirect($_SERVER['HTTP_REFERER']);
});
//==================================================================================
// описываем роуты, начнем с корня
$app->get('/', function () use ($app)
{
    // запишем посетителя в лог
    //mlog("$_SERVER[REQUEST_METHOD] / [ua:".$_SERVER['HTTP_USER_AGENT']."] [ref:".$_SERVER['HTTP_REFERER']."]");
    stat::inc("root_visits");
    $catalog = $app->db->query("SELECT parent,rID,cat,caption
		FROM _it_RUBRICS
		WHERE parent = 1 and pos != 5
		ORDER BY pos DESC
		LIMIT 12", null, 'assoc');
    foreach ($catalog as &$cat)
    {
        $cat['sub'] = $app->db->query("SELECT cat,caption
			FROM _it_RUBRICS
			WHERE parent = ?i
			ORDER BY caption
			LIMIT 8 ", array($cat['rID']), 'assoc');
    }
    $title     = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, адреса магазинов, каталог компаний в Санкт-Петербурге';
    $discounts = Discount::getRandom(3);
    $conews    = News::getRandom(3);
    $advert    = Advert::getAdvertData("/");
    //mlog("main advert:".print_r($advert,1));
    $random_companys = Objects::getRandomCompanys(4);
    return parseTemplate("pages/index.php", array('catalog' => $catalog, 'title' => $title, 'random_discounts' => $discounts,
        'random_conews' => $conews, 'advert' => $advert, 'random_companys' => $random_companys));
});
//==================================================================================
$app->get('/count/{adv}/', function ($adv) use ($app)
{
    $goto = $_SERVER['QUERY_STRING'];
    //mlog(print_r($goto,1));
    mlog("redirect $adv -> " . $goto);
    stat::inc("$adv" . "_redirects_count");
    if (empty($goto))
    {
        $goto = "/";
    }

    //header("Location: $goto[0]");
    $app->db->query("INSERT INTO evo_ads_stat
		SET block=?,url=?,ua=?,ip=?,ref=?", array($adv, $goto, $_SERVER['HTTP_USER_AGENT'], $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_REFERER']), 'id');
    if (!strstr($goto, "http://"))
    {
        $goto = "http://$_SERVER[HTTP_HOST]$goto";
    }

    return $app->redirect($goto);
});
//==================================================================================
$app->get('/count/', function () use ($app)
{
    $goto = $_SERVER['QUERY_STRING'];
    //mlog(print_r($goto,1));
    mlog("redirect-> " . $goto);
    stat::inc("redirects_count");
    //header("Location: $goto[0]");
    return $app->redirect($goto);
});
//==================================================================================
// детальная страница компании
$app->get('/company/{company_id}/', function ($company_id) use ($app)
{
    //mlog("load redirects: ".count($app->links));
    if (!intval($company_id))
    {
        mlog("error cid=" . $company_id);
        return "";
    }
    foreach ($app->links as $r)
    {
        if ("/company/$company_id/" == $r[1])
        {
            mlog("doing file redirect $r[1]=>$r[0]");
            return $app->redirect($r[0]);
        }
    }
    stat::inc("profile_views");
    $company = Objects::GetCompanyById($company_id, true, true);
//    print_r($company);die;
    //mlog("company '".rus2translit($company['shortname'])."' $company_id ".($company['from_cache']?"[CACHED]":""));
    if ($company['cID'] == $company['parent'])
    {
        elasticsearch::recordCompanyVisit($company_id);
    }

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['metakeys'];
    $description = $company['metadesc'];
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);

        $company_info = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }

//    mlog("cats:".print_r($company['subcats'],1));
    $advert = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);

    $adminInfo = Objects::getAdminInfo($company_id);
    if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    {
        $app->db->query("INSERT INTO evo_company_stat
			SET ip = ?, cID = ? ", array($_SERVER['REMOTE_ADDR'], $company_id));
    }

//    mlog(print_r($company['addr'],1));
    return parseTemplate("pages/company.php", array('gallery' => true, 'companyShowType' => 'company',
        'company' => $company, 'adminInfo' => $adminInfo,
        'lefttype' => 'company', 'title' => $title, 'description' => $description, 'keywords' => $keywords,
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert));
});
//==================================================================================
$app->get('/company/{company_id}/getpricelist/', function ($company_id) use ($app)
{
    stat::inc("contacts_views");
    $company = Objects::GetCompanyById($company_id);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID']);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }
    $advert = Advert::getAdvertData("/");
    return $app->redirect("/content/company/$company_id/getpricelist/$company[pricelist]");
});
//==================================================================================
$app->get('/company/{company_id}/contacts/', function ($company_id) use ($app)
{
    stat::inc("contacts_views");
    $company = Objects::GetCompanyById($company_id);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['co_rubrics'];
    $description = $company['cinfo'];
    $advert      = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);
    $adminInfo = Objects::getAdminInfo($company_id);
    return parseTemplate("pages/company.php", array('adminInfo' => $adminInfo,
        'companyShowType' => 'contacts', 'company' => $company,
        'logo' => $logo, 'pics' => $pics, 'lefttype' => 'company',
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
//===================================================================================
$app->get('/company/{company_id}/conews/', function ($company_id) use ($app)
{
    stat::inc("conews_views");
    $company = Objects::GetCompanyById($company_id, true, true);
    //$company['conews'] = Objects::GetCompanyNews($company_id);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }
    $advert = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['co_rubrics'];
    $description = $company['cinfo'];
    $adminInfo   = Objects::getAdminInfo($company_id);
    return parseTemplate("pages/company.php", array('adminInfo' => $adminInfo,
        'companyShowType' => 'conews', 'company' => $company,
        'logo' => $logo, 'pics' => $pics, 'lefttype' => 'company',
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
$app->get('/company/{company_id}/articles/', function ($company_id) use ($app)
{
    stat::inc("articles_views");
    $company = Objects::GetCompanyById($company_id, true, true);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }
    $advert = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['co_rubrics'];
    $description = $company['cinfo'];
    $adminInfo   = Objects::getAdminInfo($company_id);
    return parseTemplate("pages/company.php", array('adminInfo' => $adminInfo,
        'companyShowType' => 'articles', 'company' => $company,
        'logo' => $logo, 'pics' => $pics, 'lefttype' => 'company',
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
$app->get('/company/{company_id}/vacancy/', function ($company_id) use ($app)
{
    $company = Objects::GetCompanyById($company_id, true, true);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }
    $advert = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['co_rubrics'];
    $description = $company['cinfo'];
    $adminInfo   = Objects::getAdminInfo($company_id);
    return parseTemplate("pages/company.php", array('adminInfo' => $adminInfo,
        'companyShowType' => 'vacancy', 'company' => $company,
        'logo' => $logo, 'pics' => $pics, 'lefttype' => 'company',
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
//==================================================================================
$app->get('/company/{company_id}/discount/', function ($company_id) use ($app)
{
    stat::inc("discount_views");
    $company = Objects::GetCompanyById($company_id, true, true);
    if ($company['parent'])
    {
        $company_right = Objects::GetCompanyById($company['pID'], true, true);
        $company_info  = $company_right['cinfo'];
    }
    else
    {
        $company_right = $company;
        $company_info  = $company['cinfo'];
    }
    $advert = Advert::getAdvertData("/catalog/" . $company['subcats'][0]['parent_cat'] . "/*",
        $company['subcats'], $company_id);

    $title = Core::unify_strings($company['shortname'] . " | " . $company['fullname'] . " | " . $company['co_names'] . ". "
        . $company['addr']['region'] . ", " . $company['addr']['district'] . " район, " . $company['addr']['street'] . ", "
        . $company['addr']['dom'], "|");
    $keywords    = $company['co_rubrics'];
    $description = $company['cinfo'];
    $adminInfo   = Objects::getAdminInfo($company_id);

    return parseTemplate("pages/company.php", array('adminInfo' => $adminInfo,
        'companyShowType' => 'discount', 'company' => $company,
        'logo' => $logo, 'pics' => $pics, 'lefttype' => 'company',
        'company_right' => $company_right, 'company_id' => $company_id, 'company_info' => $company_info,
        'advert' => $advert, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
//==================================================================================
$app->get('/adv/', function () use ($app)
{
    $content = $app->db->query("SELECT  * FROM
		_it_PAGES WHERE pID = ?i", array(106), 'row');
    $advert = Advert::getAdvertData("/");
    $title  = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, ' .
        'адреса магазинов, каталог компаний в Санкт-Петербурге';
    return parseTemplate("pages/info.php", compact('title', 'content', 'advert'));
});
//==================================================================================
$app->get('/info/{id}/', function ($id) use ($app)
{
    stat::inc("info/$id" . "/views");
    $content = $app->db->query("SELECT  * FROM
		_it_PAGES
		WHERE url_title = ? OR pID = ?i", array($id, $id), 'row');
    $title  = $content['meta_title'];
    $advert = Advert::getAdvertData("/");
    $title  = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, адреса магазинов, каталог компаний в Санкт-Петербурге';
    return parseTemplate("pages/info.php", array('title' => $title, 'content' => $content, 'advert' => $advert, 'title' => $title));
});
//==================================================================================
// отсыл формы фидбака
$app->get('/feedback/osen/', function () use ($app)
{
    $advert = Advert::getAdvertData("/feedback");
    return parseTemplate("pages/feedback_osen.php", array('lefttype' => 'feedback', 'sentok' => 1, 'advert' => $advert));
});
$app->get('/feedback/present/', function () use ($app)
{
    $advert = Advert::getAdvertData("/feedback");
    return parseTemplate("pages/feedback_present.php", array('lefttype' => 'feedback', 'sentok' => 1, 'advert' => $advert));
});
$app->get('/feedback/present-elit/', function () use ($app)
{
    $advert = Advert::getAdvertData("/feedback");
    return parseTemplate("pages/feedback_present_elit.php", array('lefttype' => 'feedback', 'sentok' => 1, 'advert' => $advert));
});
$app->get('/feedback/', function () use ($app)
{
    $advert = Advert::getAdvertData("/feedback");
    $title  = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, адреса магазинов, каталог компаний в Санкт-Петербурге';
    return parseTemplate("pages/feedback.php", array('lefttype' => 'feedback', 'advert' => $advert, 'title' => $title));
});
$app->post('/feedback/error/', function () use ($app)
{
    stat::inc("error_feedbacks");
    $temp .= "<h1>Ошибка на странице сайта</h1><br/>";
    $temp .= "Компания $_POST[url]<br/>";
    //$temp .= "Тип: $_POST[type]<br/>";
    $temp .= "Тип: $_POST[subject]<br/>";
    $temp .= "Контакт: $_POST[contactname]<br/>";
    $temp .= "Email: $_POST[email]<br/>";
    $temp .= "Описание: $_POST[notes]<br/>";
    $temp .= "IP: $_SERVER[REMOTE_ADDR]<br/>";
    $temp .= "Время: " . strftime("%c") . "<br/>";
    $temp .= "Ссылка для редактирования: <strong>https://new.008.ru/system/firms/edit/$_POST[cID]/</strong><br/>";

    Core::send_mail($app->config['feedback_email'], 'сообщение об ошибке: ' . $_POST['subject'], $temp);
    Core::send_mail('sergey.efimov@evodesign.ru', 'сообщение об ошибке: ' . $_POST['subject'], $temp);
    return "<h1>Успешно отправлено!</h1>";
});
//==================================================================================
// обработка засабмитенного фидбака (урл тотже, но МЕТОД теперь POST!!!!)
$app->post('/feedback/', function () use ($app)
{
    if ($_POST['captcha'] != $_SESSION['securimage_code_value']['default'])
    {
        $msg = "Ошибка ввода капчи ";
        mlog("#" . $_SESSION['captcha_fails'] . " fail feedback captcha: " . $_POST['captcha'] .
            " should be " . $_SESSION['securimage_code_value']['default']);
        $_SESSION['captcha_fails']++;
        $sentok = false;
        stat::inc('captcha_fails');
    }
    else
    {
        $msg  = "Спасибо, наши операторы свяжуться с Вами";
        $keys = array("subject" => "Тема", "contactname" => "Контактное лицо",
            "contacts" => "Контактные телефоны",
            "email" => "Емейл", "notes" => "Пожелания/Комментарии", "referer" => "Пришел с:");
        $temp = "<h1>Письмо с сайта</h1><br/>";
        foreach ($_POST as $k => $v)
        {
            if (@$keys[$k] && strlen($v))
            {
                @$temp .= $keys[$k] . ": $v\r\n<br/>";
            }
        }

        $temp .= "IP:" . $_SERVER['REMOTE_ADDR'] . "<br/>";
        $temp .= "Время: " . date(DATE_RFC822) . "<br/>";

        Core::send_mail($app->config['feedback_email'], 'размещение рекламы', $temp);
        Core::send_mail('sergey.efimov@evodesign.ru', 'размещение рекламы' . $_POST['subject'], $temp);
        unset($_SESSION['securimage_code_value']);
        $sentok = true;
    }
    //print_r($_SESSION);
    $advert = Advert::getAdvertData("/");
    $title  = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, адреса магазинов, каталог компаний в Санкт-Петербурге';
    return parseTemplate("pages/feedback.php", array('msg' => $msg, 'advert' => $advert, 'sentok' => $sentok, 'title' => $title));
});
//==================================================================================
$app->get('/feedback/request/', function () use ($app)
{
    $advert = Advert::getAdvertData("/");
    $title  = 'Справочная информационная система 008 - адреса и телефоны, телефонный справочник компаний, адреса магазинов, каталог компаний в Санкт-Петербурге';
    return parseTemplate("pages/feedback_request.php", array('advert' => $advert, 'sentok' => true,
        'lefttype' => 'feedback', 'title' => $title));
});
//==================================================================================
$app->post('/feedback/request/', function () use ($app)
{
    if ($_POST['captcha'] != $_SESSION['securimage_code_value']['default'])
    {
        $msg     = "<strong style='color:red'>Ошибка ввода капчи </strong>";
        $captcha = substr($_POST['captcha'], 0, 128);
        $_SESSION['captcha_fails']++;
        mlog("#" . $_SESSION['captcha_fails'] . " fail feedback captcha: $captcha !=" . $_SESSION['securimage_code_value']['default']);
        $sentok = true;
        stat::inc('captcha_fails');
    }
    else
    {
        $msg  = "<strong style='color:green'>Спасибо, наши операторы свяжуться с Вами.</strong>";
        $keys = array("subject" => "Тема", "contactname" => "Контактное лицо", "contacts" => "Контактные телефоны",
            "email" => "Емейл", "notes" => "Пожелания/Комментарии", "shortname" => "Название организации",
            "cofield" => "Сфера деятельности", "contactpost" => "Должность", "paket" => "Пакет размещения на сайте",
            "tarif" => "Размещение в справочной службе", "referer" => "Пришел с");
        $temp = "<h1>Письмо с сайта</h1><br/>";
        foreach ($_POST as $k => $v)
        {
            if (@$keys[$k] && strlen($v))
            {
                @$temp .= $keys[$k] . ": $v\r\n<br/>";
            }
        }

        $temp .= "IP:" . $_SERVER['REMOTE_ADDR'] . "<br/>";
        $temp .= "Время: " . date(DATE_RFC822) . "<br/>";
        Core::send_mail($app->config['feedback_email'], 'добавление компании', $temp);
        Core::send_mail('sergey.efimov@evodesign.ru', 'добавление компании', $temp);
        $sentok = false;
    }
    unset($_SESSION['securimage_code_value']);
    $advert = Advert::getAdvertData("/");
    return parseTemplate("pages/feedback_request.php", array('sentok' => $sentok,
        'msg' => $msg, 'advert' => $advert));
});
//==================================================================================
$app->get('/phonecodes/', function () use ($app)
{
    $allcodes = $app->db->query("SELECT *
		FROM _it_PHONE_CODES
		WHERE type = 1
		"); //ORDER BY country ASC
    foreach ($allcodes as $code)
    {
        $letter    = mb_substr($code['country'], 0, 1);
        $haschilds = $app->db->query("SELECT * FROM _it_PHONE_CODES
			WHERE type = 2 AND country =
			?
			ORDER BY city ASC", array($code['country']), 'assoc');

        $codes[$letter][] = array('code' => $code, 'haschilds' => $haschilds);
    }
    $lefttype    = 'google';
    $title       = 'Телефонные коды городов и стран мира: Россия, Украина, Казахстан, США, Канада, Абхазия, Австралия, Австрия, Азербайджан, Алжир и другие';
    $keywords    = 'Россия,Украина,Казахстан,США,Канада,Абхазия,Австралия,Австрия,Азербайджан,Алжир,Ангилья,Ангола,Андорра,Антигуа и Барбуда,Антильские острова,Аомынь (Макао),Аргентина,Армения,Аруба,Афганистан,Багамские острова,Бангладеш,Барбадос,Бахрейн,Беларусь,Белиз,Бельгия,Бенин,Болгария,Боливия,Босния и Герцеговина,Ботсвана,Бразилия,Бруней,Буркина-Фасо,Бурунди,Бутан,Вануату,Ватикан,Великобритания,Венгрия,Венесуэла,Виргинские острова (Американские),Виргинские острова (Британские),Вьетнам,Габон,Гавайские острова,Гаити,Гайана,Гамбия,Гана,Гвателупа,Гватемала,Гвинея,Гвинея Бисау,Германия,Гибралтар,Гонконг,Гренада,Гренландия,Греция,Грузия,Гуам,Дания,Демократическая Республика Конго,Джибути,Доминика,Доминиканская Республика,Египет,Замбия,Западное Самоа,Зимбабве,Израиль,Индия,Индонезия,Иордания,Ирак,Иран,Ирландия,Исландия,Испания,Италия,Йемен,Кабо-Верде,Казахстан,Каймановы острова,Камбоджа,Камерун,Канада,Канарские острова,Катар,Кения,Кипр,Кирибати,Китай,КНДР,Колумбия,Конго,Корсика,Коста Рика,Кот-дИвуар,Куба,Кувейт,Кыргызстан,Лаос,Латвия,Лесото,Либерия,Ливан,Ливия,Литва,Лихтенштейн,Люксембург,Маврикий,Мавритания,Мадагаскар,Македония,Малави,Малайзия,Мали,Мальта,Марокко,Мартиника остров,Мексика,Микронезия,Мозамбик,Молдова,Монако,Монголия,Монтсеррат,Мьянма,Намибия,Науру,Невис и Сент Китс,Непал,Нигер,Нигерия,Нидерланды,Никарагуа,Новая Зеландия,Новая Каледония,Норвегия,Норфолк остров,ОАЭ,Оман,Пакистан,Палау,Панама,Папуа-Новая Гвинея,Парагвай,Перу,Польша,Португалия,Пуэрто-Рико,Реюньон,Россия,Руанда,Румыния,Сальвадор,Сан Марино,Сан-Томе и Принсипи,Саудовская Аравия,Свазиленд,Сенегал,Сент Люсия,Сент-Винсент и Гренадины,Сербия,Сингапур,Сирия,Словакия,Словения,Содружество Северных Марианских островов,Сомали,Судан,Суринам,США,Сьерра-Леоне,Таджикистан,Таиланд,Тайвань,Танзания,Теркс и Кайкос,Того,Тонга,Тринидад и Тобаго,Тунис,Туркменистан,Турция,Уганда,Узбекистан,Украина,Уругвай,Фиджи,Филиппины,Финляндия,Франция,Хорватия,Центрально-Африканская Республика,Чад,Чешская Республика,Чили,Швейцария,Швеция,Шри Ланка,Эквадор,Экваториальная Гвинея,Эритрея,Эстония,Эфиопия,ЮАР,Южная Корея,Ямайка,Япония';
    $description = 'Телефонные коды';
    $advert      = Advert::getAdvertData("/");
    unset($advert['adv2_2']);
    unset($advert['adv2_1']);
    $bread       = array(array('link' => '/phonecodes/', 'name' => 'Телефонные коды городов и стран'),
    );
    return parseTemplate("pages/phonecodes.php", array('codes' => $codes, 'lefttype' => $lefttype,
        'title' => $title, 'keywords' => $keywords, 'description' => $description,
        'advert' => $advert, 'bread' => $bread));
});
//=============================================================================
$app->get('/phonecodes/{country}/', function ($country) use ($app)
{
    $codes = $app->db->query("SELECT * FROM _it_PHONE_CODES
		WHERE type = 2 AND country =
		(SELECT country FROM _it_PHONE_CODES WHERE cat = ? LIMIT 1)
		ORDER BY city ASC", array($country), 'assoc');
    $lefttype = 'google';
    $advert   = Advert::getAdvertData("/");
    unset($advert['adv2_2']);
    unset($advert['adv2_1']);
    $bread    = array(array('link' => '/phonecodes/', 'name' => 'Телефонные коды городов и стран'));

    // morphy
    $opts = array(
        // storage type, follow types supported
        // PHPMORPHY_STORAGE_FILE - use file operations(fread, fseek) for dictionary access, this is very slow...
        // PHPMORPHY_STORAGE_SHM - load dictionary in shared memory(using shmop php extension), this is preferred mode
        // PHPMORPHY_STORAGE_MEM - load dict to memory each time when phpMorphy intialized, this useful when shmop ext. not activated. Speed same as for PHPMORPHY_STORAGE_SHM type
        'storage' => PHPMORPHY_STORAGE_SHM,
        // Extend graminfo for getAllFormsWithGramInfo method call
        'with_gramtab' => false,
        // Enable prediction by suffix
        'predict_by_suffix' => false,
        // Enable prediction by prefix
        'predict_by_db' => false,
    );

    $static_country = array("ssha", "yuar");
    $static         = false;
    foreach ($static_country as $sc)
    {
        if ($country == $sc)
        {
            $static = true;
        }

    }

    if ($static)
    {
        $base_form = array(mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"),
            mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"), mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"));
    }
    else
    {
        $dir         = __DIR__ . '/lib/phpmorphy/dicts';
        $dict_bundle = new phpMorphy_FilesBundle($dir, 'ru_RU');

        try
        {
            $morphy = new phpMorphy($dict_bundle, $opts);
        }
        catch (phpMorphy_Exception $e)
        {
            die('Error occured while creating phpMorphy instance: ' . $e->getMessage());
        }
        $word_one  = mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8");
        $base_form = $morphy->getAllForms($word_one);
        foreach ($base_form as &$bf)
        {
            $bf = mb_convert_case($bf, MB_CASE_TITLE, "UTF-8");
        }
    }
    if ($base_form == false)
    {
        mlog("fail to predict morphy");
    }

    $citys = '';
    for ($i = 0; $i < 10; $i++)
    {
        $citys .= " " . $codes[$i]['city'] . ", ";
    }

    $keywords = '';
    foreach ($codes as $c)
    {
        $keywords .= " $c[city],";
    }

    $lines = file("lib/country.csv");
    foreach ($lines as $line)
    {
        $data = explode(",", trim($line));
        if ($data[0] == $codes[0]['country'])
        {
            $base_form[0] = $data[0];
            $base_form[1] = $data[1];
            $base_form[2] = $data[2];
            $base_form[3] = $data[3];
            $base_form[4] = $data[4];
            $base_form[5] = $data[5];
            break;
        }
    }

    $title       = "Код $base_form[1] - " . $codes[0]['countrycode'] . ". Телефонные коды городов $base_form[1]: $citys и другие.";
    $description = "Телефонные коды $base_form[1]";

    return parseTemplate("pages/phonecodes_city.php", array('codes' => $codes, 'lefttype' => $lefttype, 'advert' => $advert,
        'bread' => $bread, 'base_form' => $base_form, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
//=============================================================================
$app->get('/phonecodes/{country}/{place}/', function ($country, $place) use ($app)
{
    $country = $place;
    $codes   = $app->db->query("SELECT * FROM _it_PHONE_CODES
		WHERE type = 2 AND cat = ?
		ORDER BY city ASC", array($country), 'assoc');
    $lefttype = 'google';
    $advert   = Advert::getAdvertData("/");
    unset($advert['adv2_2']);
    unset($advert['adv2_1']);
    $bread    = array(array('link' => '/phonecodes/', 'name' => 'Телефонные коды городов и стран'));

    // morphy
    $opts = array(
        // storage type, follow types supported
        // PHPMORPHY_STORAGE_FILE - use file operations(fread, fseek) for dictionary access, this is very slow...
        // PHPMORPHY_STORAGE_SHM - load dictionary in shared memory(using shmop php extension), this is preferred mode
        // PHPMORPHY_STORAGE_MEM - load dict to memory each time when phpMorphy intialized, this useful when shmop ext. not activated. Speed same as for PHPMORPHY_STORAGE_SHM type
        'storage' => PHPMORPHY_STORAGE_SHM,
        // Extend graminfo for getAllFormsWithGramInfo method call
        'with_gramtab' => false,
        // Enable prediction by suffix
        'predict_by_suffix' => false,
        // Enable prediction by prefix
        'predict_by_db' => false,
    );

    $static_country = array("ssha", "yuar");
    $static         = false;
    foreach ($static_country as $sc)
    {
        if ($country == $sc)
        {
            $static = true;
        }

    }

    if ($static)
    {
        $base_form = array(mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"),
            mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"), mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8"));
    }
    else
    {
        $dir         = __DIR__ . '/lib/phpmorphy/dicts';
        $dict_bundle = new phpMorphy_FilesBundle($dir, 'ru_RU');

        try
        {
            $morphy = new phpMorphy($dict_bundle, $opts);
        }
        catch (phpMorphy_Exception $e)
        {
            die('Error occured while creating phpMorphy instance: ' . $e->getMessage());
        }
        $word_one  = mb_convert_case($codes[0]['country'], MB_CASE_UPPER, "UTF-8");
        $base_form = $morphy->getAllForms($word_one);
        foreach ($base_form as &$bf)
        {
            $bf = mb_convert_case($bf, MB_CASE_TITLE, "UTF-8");
        }
    }
    if ($base_form == false)
    {
        mlog("fail to predict morphy");
    }

    $citys = '';
    for ($i = 0; $i < 10; $i++)
    {
        $citys .= " " . $codes[$i]['city'] . ", ";
    }

    $keywords = '';
    foreach ($codes as $c)
    {
        $keywords .= " $c[city],";
    }

    $lines = file("lib/country.csv");
    foreach ($lines as $line)
    {
        $data = explode(",", trim($line));
        if ($data[0] == $codes[0]['country'])
        {
            $base_form[0] = $data[0];
            $base_form[1] = $data[1];
            $base_form[2] = $data[2];
            $base_form[3] = $data[3];
            $base_form[4] = $data[4];
            $base_form[5] = $data[5];
            break;
        }
    }

    $title       = "Код $base_form[1] - " . $codes[0]['countrycode'] . ". Телефонные коды городов $base_form[1]: $citys и другие.";
    $description = "Телефонные коды $base_form[1]";

    return parseTemplate("pages/phonecodes_city.php", array('codes' => $codes, 'lefttype' => $lefttype, 'advert' => $advert,
        'bread' => $bread, 'base_form' => $base_form, 'title' => $title, 'keywords' => $keywords, 'description' => $description));
});
//==================================================================================
// дискаунты
$app->get('/discount/', function () use ($app)
{
    $title   = 'Акции, скидки, распродажи. Каталог';
    $catalog = $app->db->query("SELECT  * FROM _it_RUBRICS
		WHERE parent = 1 AND discount_count > 0
		ORDER BY caption ", null, 'assoc');
    //print_r($catalog);
    foreach ($catalog as $idx => $cat)
    {
        $subcats = $app->db->query("SELECT  cat,caption,rID
			FROM _it_RUBRICS
			WHERE parent = ?i AND discount_count > 0
			ORDER BY caption
			LIMIT 8", array($cat['rID']), 'assoc');
        $catalog[$idx]['sub'] = $subcats;
    }
    $title     = 'Акции, скидки, распродажи. Каталог';
    $discounts = Discount::getRandom(8);
    //$conews = News::getRandom(3);
    $advert = Advert::getAdvertData("/discount/");
    $bread  = array(array('link' => '/discount/', 'name' => 'Акции и скидки'));
    return parseTemplate("pages/discount_full.php", array('catalog' => $catalog, 'subcat' => $cat,
        'title' => $title, 'random_conews' => $conews, 'random_discounts' => $discounts, 'advert' => $advert,
        'place' => 'discount', 'bread' => $bread));
});
//==================================================================================
$app->get('/discount/{cat}/p/{pagenum}/', function ($cat, $pagenum) use ($app)
{
    $pagenum--;
    $cat_name = $cat;
    $firms    = array();
    $catalog  = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = '$cat' AND parent = 1", null, 'row');
    $title = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    //print_r($catalog);
    $subcats = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE  discount_count > 0 AND (parent = ?i OR cat = ?) ",
        array($catalog['rID'], $cat), 'assoc');
    //$catalog[$idx]['sub'] = $subcats;
    //$cached = Cache::get("discount/$cat");
    mlog("discount $cat page $pagenum " . count($subcats));
    if ($cached == null)
    {
        $firmss = elasticsearch::getDiscountCompanys($catalog['rID'], $pagenum *
            $app->config['objects_per_page'], $app->config['objects_per_page']);
        foreach ($firmss as $firmcID)
        {
            $firm = Objects::GetCompanyById($firmcID, true, true);
/*            if (!count($firm['discount']))
continue;
 */
            $firms[] = $firm;
        }
        //}
        if ($catalog['rID'])
        {
            $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i WHERE rID=?i",
                array(elasticsearch::getDiscountCompanysCount($catalog['rID']), $catalog['rID']));
        }

        //    Cache::set("discount/$cat", $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        mlog("\r\nCACHED RESUL\r\n");
        $firms = &$cached;
    }
    $total   = elasticsearch::getDiscountCompanysCount($catalog['rID']); //count($firms);
    $npages  = (int) ($total / $app->config['objects_per_page']);
    $curpage = $pagenum;
    //$firms = array_slice($firms, $pagenum*$app->config['objects_per_page'], $app->config['objects_per_page']);
    $catdescription = $catalog['description'];
    $description    = $catalog['description'] . " ";
    //print_r($firms[$i]['discount']);
    foreach ($firms as &$firm)
    {
        foreach ($firm['discount'] as &$d)
        {
            $description .= $firm['shortname'] . " - $d[caption]. ";

        }
    }

    $description = str_replace('"', "", $description);

    $discounts = Discount::getRandom(8);
    $advert    = Advert::getAdvertData("/discount/cat/");
    $bread     = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/discount.php", array('catalog' => $catalog,
        'subcat' => $cat, 'firms' => $firms,
        'title' => $title, 'npages' => $npages, 'curpage' => $curpage,
        'catalogname' => $cat_name,
        'subcats' => $subcats, 'description' => $description, 'total' => $total,
        'random_conews' => $conews, 'random_discounts' => $discounts,
        'advert' => $advert, 'place' => 'discount', 'bread' => $bread, 'catdescription' => $catdescription,
        'inrubric' => true));
});
//==================================================================================
$app->get('/discount/{cat}/{subcat}/what/{key}/p/{pagenum}/', function ($cat, $subcat, $key, $pagenum) use ($app)
{
    $pagenum--;
    $urlkey   = $key;
    $title    = 'Акции, скидки, распродажи. Каталог';
    $key      = str_replace("+", " ", $key);
    $firms    = array();
    $catname  = $cat;
    $catalog  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$subcat'", null, 'assoc');
    $parent   = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'", null, 'row');
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption", array($parent['rID']), 'assoc');
    $keycache = "discount/$cat" . "/$subcat/" . crc32($key);
    $cached   = Cache::get($keycache);
    mlog("discount [$cat/$subcat] [" . ($cached ? "CACHED" : "NOT CACHED") . "]");
    if ($cached == null)
    {
        foreach ($catalog as $cat)
        {
            $rlinks = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
				WHERE rID = ?",
                array($cat['rID']), 'col');
            if (!count($rlinks))
            {
                continue;
            }

            $firmss = $app->db->query("SELECT cID FROM _it_FIRMS
				JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID AND office_type IS NULL AND rsID IN(?l)
				AND (search LIKE '%$key%' OR fullname LIKE '%$key%' OR firm_html LIKE '%$key%' OR info LIKE '%$key%')
				ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
				", array($rlinks), 'col');
//        die(count($firmsSelected));
            mlog("srch " . count($firmss));
            foreach ($firmss as $firmcID)
            {
                //print_r($firm);
                //die();
                if (!Discount::CompanyDiscountsCount($firmcID))
                {
                    continue;
                }

                //mlog("ok ".count($firms));
                $firm    = Objects::GetCompanyById($firmcID);
                $firmm   = $firm;
                $firms[] = $firmm;
            }
            if ($cat['rID'])
            {
                $app->db->query("UPDATE _it_RUBRICS SET discount_count = ? WHERE rID=?i",
                    array(count($firms), $cat['rID']));
            }

        }
        mlog("save disc " . count($firms));
        Cache::set($keycache, $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        $firms = &$cached;
    }
    $total     = count($firms);
    $npages    = (int) ($total / $app->config['objects_per_page']);
    $firms     = array_slice($firms, $pagenum * $app->config['objects_per_page'], $app->config['objects_per_page']);
    $curpage   = $pagenum;
    $discounts = Discount::getRandom(8);
    $advert    = Advert::getAdvertData("/");
    $bread     = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $parent['cat'] . '/', 'name' => $parent['caption']),
        array('link' => '/discount/' . $parent['cat'] . "/" . $catalog[0]['cat'] . '/', 'name' => $catalog[0]['caption']));
    return parseTemplate("pages/discount_subcatalog.php", array('catalog' => $parent, 'subcat' => $subcat, 'firms' => $firms,
        'title' => $title, 'description' => $description, 'total' => $total,
        'catalogname' => $catname, 'npages' => $npages, 'curpage' => $curpage,
        'subcats' => $subcats, 'description' => $parent['description'],
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount', 'nextcat' => $subcat,
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey));
});
//==================================================================================
$app->get('/discount/{cat}/{subcat}/what/{key}/', function ($cat, $subcat, $key) use ($app)
{
    $urlkey   = $key;
    $title    = 'Акции, скидки, распродажи. Каталог';
    $key      = str_replace("+", " ", $key);
    $firms    = array();
    $catname  = $cat;
    $catalog  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$subcat'", null, 'assoc');
    $parent   = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'", null, 'row');
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption", array($parent['rID']), 'assoc');
    $keycache = "discount/$cat" . "/$subcat/" . crc32($key);
    $cached   = Cache::get($keycache);
    mlog("discount [$cat/$subcat] [" . ($cached ? "CACHED" : "NOT CACHED") . "]");
    if ($cached == null)
    {
        foreach ($catalog as $cat)
        {
            $rlinks = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
				WHERE rID = ?",
                array($cat['rID']), 'col');
            if (!count($rlinks))
            {
                continue;
            }

            $firmss = $app->db->query("SELECT cID FROM _it_FIRMS
				JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID AND office_type IS NULL AND rsID IN(?l)
				AND (search LIKE '%$key%' OR fullname LIKE '%$key%' OR firm_html LIKE '%$key%' OR info LIKE '%$key%')
				ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
				", array($rlinks), 'col');
//        die(count($firmsSelected));
            mlog("srch " . count($firmss));
            foreach ($firmss as $firmcID)
            {
                //print_r($firm);
                //die();
                if (!Discount::CompanyDiscountsCount($firmcID))
                {
                    continue;
                }

                //mlog("ok ".count($firms));
                $firm    = Objects::GetCompanyById($firmcID);
                $firmm   = $firm;
                $firms[] = $firmm;
            }
            if ($cat['rID'])
            {
                $app->db->query("UPDATE _it_RUBRICS SET discount_count = ? WHERE rID=?i",
                    array(count($firms), $cat['rID']));
            }

        }
        mlog("save disc " . count($firms));
        Cache::set($keycache, $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        $firms = &$cached;
    }
    $total     = count($firms);
    $npages    = (int) ($total / $app->config['objects_per_page']);
    $firms     = array_slice($firms, 0, $app->config['objects_per_page']);
    $curpage   = $pagenum;
    $discounts = Discount::getRandom(8);
    $advert    = Advert::getAdvertData("/");
    $bread     = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $parent['cat'] . '/', 'name' => $parent['caption']),
        array('link' => '/discount/' . $parent['cat'] . "/" . $catalog[0]['cat'] . '/', 'name' => $catalog[0]['caption']));
    return parseTemplate("pages/discount_subcatalog.php", array('catalog' => $parent, 'subcat' => $subcat, 'firms' => $firms,
        'title' => $title, 'description' => $description, 'total' => $total,
        'catalogname' => $catname, 'npages' => $npages, 'curpage' => $curpage,
        'subcats' => $subcats, 'description' => $parent['description'],
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount', 'nextcat' => $subcat,
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey));
});
//==================================================================================
$app->get('/discount/what/{key}/', function ($key) use ($app)
{
    $pagenum--;
    if (mb_strlen($key) > 255)
    {
        $key = mb_substr($key, 0, 255);
    }

    $urlkey   = $key;
    $cat_name = $cat;
    $key      = str_replace("+", " ", $key);
    $title    = 'Акции, скидки, распродажи. Каталог';
    $firms    = array();
    // $catalog = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'",
    //                           null, 'row');
    //print_r($catalog);
    $keycache = "discount/$cat" . "/" . crc32($key);
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption",
        array($catalog['rID']), 'assoc');
    //$catalog[$idx]['sub'] = $subcats;
    $cached = Cache::get($keycache);
    //mlog("discount [$cat] [".($cached?"CACHED":"")."]");
    $results = elasticsearch::search_discount($key, 0, $app->config['objects_per_page'], false, true);
    //mlog("srch [$trkey] done count=".count($results));
    $newresults = array();
    $tm         = microtime_float();
    foreach ($results as $cID => $hl)
    {
        $result             = Objects::GetCompanyById($cID, true, true);
        $result['fullname'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['fullname']);
        $result['co_rubrics'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>",
            $result['co_rubrics']);
        $result['shortname'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['shortname']);
        $result['co_names'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['co_names']);
        $result['cinfo'] = preg_replace("#($key)#mui", "<span class='bhl'>$1</span>",
            $result['cinfo']);
        $keys = explode(" ", $key);
        foreach ($keys as $k)
        {
            if (mb_strlen($k) <= 2)
            {
                continue;
            }

            $result['fullname']   = elasticsearch::replaceWordForms($k, $result['fullname']);
            $result['shortname']  = elasticsearch::replaceWordForms($k, $result['shortname']);
            $result['co_names']   = elasticsearch::replaceWordForms($k, $result['co_names']);
            $result['co_rubrics'] = elasticsearch::replaceWordForms($k, $result['co_rubrics']);
            $result['cinfo']      = elasticsearch::replaceWordForms($k, $result['cinfo']);
        }
        $result['firm_html'] = "";
        $hl                  = array_unique($hl);
        foreach ($hl as $h)
        {
            $h = trim($h);
            $h = preg_replace("#[0-9]*#umi", "", $h);
            $result['firm_html'] .= "...$h...";
        }
        $newresults[] = $result;
    }
    mlog("[srch disc] " . rus2translit($key) . " " . sprintf("%.2f", floatval(microtime_float() - $tm)) . " num=" .
        count($results));
    $firms = &$newresults;

    $total  = elasticsearch::search_discount_count($key);
    $npages = (int) ($total / $app->config['objects_per_page']);
    //$firms = array_slice($firms, $pagenum*$app->config['objects_per_page'], $app->config['objects_per_page']);

    $curpage     = $pagenum;
    $title       = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $description = $catalog['description'];
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/search_results.php", array('catalog' => $catalog, 'subcat' => $cat,
        'results' => $firms, 'title' => $title, 'npages' => $npages, 'curpage' => $curpage, 'catalogname' => $cat_name,
        'description' => $description, 'subcats' => $subcats, 'total' => $total,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey, 'key' => $key));
});
//==================================================================================
$app->get('/discount/what/{key}/p/{pagenum}/', function ($key, $pagenum) use ($app)
{
    $pagenum--;
    if (mb_strlen($key) > 255)
    {
        $key = mb_substr($key, 0, 255);
    }

    $urlkey   = $key;
    $cat_name = $cat;
    $key      = str_replace("+", " ", $key);
    $title    = 'Акции, скидки, распродажи. Каталог';
    $firms    = array();
    // $catalog = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'",
    //                           null, 'row');
    //print_r($catalog);
    $keycache = "discount/$cat" . "/" . crc32($key);
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption",
        array($catalog['rID']), 'assoc');
    //$catalog[$idx]['sub'] = $subcats;
    $results = elasticsearch::search_discount($key, $pagenum *
        $app->config['objects_per_page'], $app->config['objects_per_page'], false, true);
    $newresults = array();
    $tm         = microtime_float();
    foreach ($results as $cID => $hl)
    {
        $result             = Objects::GetCompanyById($cID, true, true);
        $keys               = explode(" ", $key);
        $result['fullname'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['fullname']);
        $result['co_rubrics'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['co_rubrics']);
        $result['shortname'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['shortname']);
        $result['co_names'] = preg_replace("#($key)#ui", "<span class='bhl'>$1</span>",
            $result['co_names']);
        $result['cinfo'] = preg_replace("#($key)#mui", "<span class='bhl'>$1</span>",
            $result['cinfo']);
        foreach ($keys as $k)
        {
            if (mb_strlen($k) <= 2)
            {
                continue;
            }

            $result['fullname']   = elasticsearch::replaceWordForms($k, $result['fullname']);
            $result['shortname']  = elasticsearch::replaceWordForms($k, $result['shortname']);
            $result['co_names']   = elasticsearch::replaceWordForms($k, $result['co_names']);
            $result['co_rubrics'] = elasticsearch::replaceWordForms($k, $result['co_rubrics']);
            $result['cinfo']      = elasticsearch::replaceWordForms($k, $result['cinfo']);
        }
        $result['firm_html'] = "";
        $hl                  = array_unique($hl);
        foreach ($hl as $h)
        {
            $h = trim($h);
            $h = preg_replace("#[0-9]*#umi", "", $h);
            $result['firm_html'] .= "...$h...";
        }
        $newresults[] = $result;

        //Cache::set("search/Core::keyhash", $results, $app->config['cache_time_search']);
    }
    $firms = &$newresults;
    $total = elasticsearch::search_discount_count($key); //count($firms);
    mlog("[srch disc page $pagenum] " . rus2translit($key) . " " .
        sprintf("%.2f", floatval(microtime_float() - $tm)) . " num=" .
        $total);
    $npages = (int) ($total / $app->config['objects_per_page']);
    //$firms = array_slice($firms, $pagenum*$app->config['objects_per_page'], $app->config['objects_per_page']);

    $curpage     = $pagenum;
    $title       = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $description = $catalog['description'];
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/search_results.php", array('catalog' => $catalog, 'subcat' => $cat,
        'results' => $firms, 'title' => $title, 'npages' => $npages, 'curpage' => $curpage, 'catalogname' => $cat_name,
        'description' => $description, 'subcats' => $subcats, 'total' => $total,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey, 'key' => $key));
});
//==================================================================================
$app->get('/discount/{cat}/what/{key}/p/{pagenum}/', function ($cat, $key, $pagenum) use ($app)
{
    $pagenum--;
    $urlkey   = $key;
    $cat_name = $cat;
    $key      = str_replace("+", " ", $key);
    $title    = 'Акции, скидки, распродажи. Каталог';
    $firms    = array();
    $catalog  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'",
        null, 'row');
    //print_r($catalog);
    $keycache = "discount/$cat" . "/" . crc32($key);
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption",
        array($catalog['rID']), 'assoc');
    //$catalog[$idx]['sub'] = $subcats;
    $cached = Cache::get($keycache);
    mlog("discount [$cat] [" . ($cached ? "CACHED" : "") . "]");
    if ($cached == null)
    {
        mlog("caching discount $cat  subcats:" . count($subcats));
        foreach ($subcats as $subcat)
        {
            $rlinks = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?i",
                array($subcat['rID']), 'col');
            //die(print_r($rlinks,1));
            if (!count($rlinks))
            {
                continue;
            }

            $firmss = $app->db->query("SELECT (cID) FROM _it_FIRMS
				LEFT JOIN _it_SPR_FIRM_RAZM ON
				_it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID
				AND office_type IS NULL AND rsID IN(?l)
				AND (search LIKE '%$key%' OR fullname LIKE '%?e%'
					OR firm_html LIKE '%$key%' OR info LIKE '%$key%')
			ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,
			_it_FIRMS.shortname ASC
			", array($rlinks, $key), 'col');
            //    mlog("caching discount ".count($firmsSelected)." firms");
            foreach ($firmss as $firmcID)
            {
                if ($ndone++ % 150 == 0)
                {
                    mlog("... $ndone");
                }

                if (!Discount::CompanyDiscountsCount($firmcID))
                {
                    continue;
                }

                $firm = Objects::GetCompanyById($firmcID);
                if (!count($firm['discount']))
                {
                    continue;
                }

                $firms[] = $firm;
            }
            unset($firmss);
            if ($subcat['rID'])
            {
                $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i
					WHERE rID=?i", array(count($firms), $subcat['rID']));
            }

        }
        mlog(count($firms) . " extracted from $cat");
        Cache::set($keycache, $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        mlog("cached res");
        $firms = &$cached;
    }
    $total  = count($firms);
    $npages = (int) ($total / $app->config['objects_per_page']);
    $firms  = array_slice($firms, $pagenum * $app->config['objects_per_page'],
        $app->config['objects_per_page']);
    $curpage     = $pagenum;
    $title       = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $description = $catalog['description'];
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/discount.php", array('catalog' => $catalog, 'subcat' => $cat,
        'firms' => $firms, 'title' => $title, 'npages' => $npages, 'curpage' => $curpage,
        'catalogname' => $cat_name,
        'description' => $description, 'subcats' => $subcats, 'total' => $total,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey));
});
//==================================================================================
$app->get('/discount/{cat}/what/{key}/', function ($cat, $key) use ($app)
{
    $urlkey   = $key;
    $cat_name = $cat;
    $key      = str_replace("+", " ", $key);
    $title    = 'Акции, скидки, распродажи. Каталог';
    $firms    = array();
    $catalog  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'",
        null, 'row');
    //print_r($catalog);
    $keycache = "discount/$cat" . "/" . crc32($key);
    $subcats  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption",
        array($catalog['rID']), 'assoc');
    //$catalog[$idx]['sub'] = $subcats;
    $cached = Cache::get($keycache);
    mlog("discount [$cat] [" . ($cached ? "CACHED" : "") . "]");
    if ($cached == null)
    {
        mlog("caching discount $cat  subcats:" . count($subcats));
        foreach ($subcats as $subcat)
        {
            $rlinks = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?i",
                array($subcat['rID']), 'col');
            //die(print_r($rlinks,1));
            if (!count($rlinks))
            {
                continue;
            }

            $firmss = $app->db->query("SELECT cID FROM _it_FIRMS
				LEFT JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID AND office_type IS NULL AND rsID IN(?l)
				AND (search LIKE '%$key%' OR fullname LIKE '%?e%' OR firm_html LIKE '%$key%' OR info LIKE '%$key%')
				ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
				", array($rlinks, $key), 'col');
            //    mlog("caching discount ".count($firmsSelected)." firms");
            foreach ($firmss as $firmcID)
            {
                if ($ndone++ % 150 == 0)
                {
                    mlog("... $ndone");
                }

                if (!Discount::CompanyDiscountsCount($firmcID))
                {
                    continue;
                }

                $firm = Objects::GetCompanyById($firmcID);
                if (!count($firm['discount']))
                {
                    continue;
                }

                $firms[] = $firm;
            }
            unset($firmss);
            if ($subcat['rID'])
            {
                $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i
					WHERE rID=?i", array(count($firms), $subcat['rID']));
            }

        }
        mlog(count($firms) . " extracted from $cat");
        Cache::set($keycache, $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        mlog("cached res");
        $firms = &$cached;
    }
    $total       = count($firms);
    $npages      = (int) ($total / $app->config['objects_per_page']);
    $firms       = array_slice($firms, 0, $app->config['objects_per_page']);
    $curpage     = $pagenum;
    $title       = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $description = $catalog['description'];
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/discount.php", array('catalog' => $catalog, 'subcat' => $cat,
        'firms' => $firms, 'title' => $title, 'npages' => $npages, 'curpage' => $curpage, 'catalogname' => $cat_name,
        'description' => $description, 'subcats' => $subcats, 'total' => $total,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'bread' => $bread, 'inrubric' => true, 'what' => $urlkey));
});
//==================================================================================
$app->get('/discount/{cat}/', function ($cat) use ($app)
{
    $cat_name = $cat;

    $firms   = array();
    $catalog = $app->db->query("SELECT  * FROM _it_RUBRICS WHERE cat = '$cat'",
        null, 'row');
    $title   = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $subcats = $app->db->query("SELECT  * FROM _it_RUBRICS
		WHERE parent = ?i AND discount_count > 0
		ORDER BY caption",
        array($catalog['rID']), 'assoc');
    mlog("subcats: " . count($subcats));

    //$cached = Cache::get("discount/$cat");
    mlog("discount [$cat] [" . ($cached ? "CACHED" : "") . "]");
    if ($cached == null || $_GET['refresh'] == 1)
    {
        mlog("caching discount $cat  subcats:" . count($subcats));

        $firmss = elasticsearch::getDiscountCompanys($catalog['rID'], 0, $app->config['objects_per_page']);
        //    mlog("cat firmss:    ".count($firmss));
        foreach ($firmss as $firmcID)
        {
            $firm = Objects::GetCompanyById($firmcID, true, true);
            if (!count($firm['discount']))
            {
                continue;
            }

            if ($ndone++ > $app->config['objects_per_page'])
            {
                break;
            }

            $firms[] = $firm;
        }

        if ($catalog['rID'])
        {
            $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i
				WHERE rID=?i", array(
                elasticsearch::getDiscountCompanysCount($catalog['rID']), $catalog['rID']));
        }

        mlog(count($firms) . " extracted from $cat");
        //  Cache::set("discount/$cat", $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        $firms = &$cached;
    }
    $total          = elasticsearch::getDiscountCompanysCount($catalog['rID']);
    $npages         = (int) ($total / $app->config['objects_per_page']);
    $curpage        = $pagenum;
    $title          = 'Акции, скидки, распродажи. ' . $catalog['caption'];
    $catdescription = $catalog['description'];
    $description    = $catalog['description'] . " ";
    //print_r($firms[$i]['discount']);
    foreach ($firms as $firm)
    {
        if (!count($firm['discount']))
        {
            continue;
        }

        $description .= $firm['shortname'] . " - ";
        $u = 0;
        foreach ($firm['discount'] as $idx => $d)
        {
            $description .= "$d[caption].";
            if (++$u < count($firm['discount']))
            {
                $description .= " ";
            }

        }
        $description .= "; ";
    }
    $description = str_replace('"', "", $description);
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $cat_name . "/", 'name' => $catalog['caption']));
    return parseTemplate("pages/discount.php", array('catalog' => $catalog, 'subcat' => $cat,
        'firms' => $firms, 'title' => $title, 'npages' => $npages, 'curpage' => $curpage, 'catalogname' => $cat_name,
        'description' => $description, 'subcats' => $subcats, 'total' => $total,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'bread' => $bread, 'inrubric' => true, 'catsecond' => $catalog, 'catdescription' => $catdescription));
});
//==================================================================================
// просмотр дискаунтов в конекретноам подразделе, почти аналогично
$app->get('/discount/{cat}/{subcat}/', function ($cat, $subcat) use ($app)
{
    $firms  = array();
    $parent = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'", null, 'row');
    if ($parent)
    {
        $subcats = $app->db->query("SELECT * FROM _it_RUBRICS
			WHERE parent = ?i AND discount_count > 0
			ORDER BY caption", array($parent['rID']), 'assoc');
    }

    $catname = $cat;
    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '?e' AND parent = ?i",
        array($subcat, $parent['rID']), 'row');
    $title = 'Акции, скидки, распродажи. ' . $catalog['caption'] . ". " . $parent['caption'] . " ";

    //$cached=Cache::get("discount/$cat"."/$subcat");

    mlog("discount [$cat/$subcat] [" . ($cached ? "CACHED" : "NOT CACHED") . "]");
    if ($cached == null || $_GET['refresh'] == 1)
    {
        $firmss = $app->db->query("SELECT cID FROM _it_FIRMS
			LEFT JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
			WHERE published='yes' AND parent=cID AND office_type IS NULL
			AND rsID IN(SELECT DISTINCT(rsID) FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?i)

			ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
			", array($catalog['rID']), 'col');
        foreach ($firmss as $firmcID)
        {
            if (!Discount::CompanyDiscountsCount($firmcID))
            {
                continue;
            }

            $firm = Objects::GetCompanyById($firmcID, true, true);
            //mlog("discount1 ".print_r($firm['discount']));
            $firmm   = $firm;
            $firms[] = $firmm;
        }
        if ($catalog['rID'])
        {
            $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i WHERE rID=?i",
                array(count($firms), $catalog['rID']));
        }

        Cache::set("discount/$catname" . "/$subcat", $firms, $app->config['cache_time_catalog']);
    }
    else
    {
        $firms = &$cached;
    }

    if ($catalog['rID'])
    {
        $app->db->query("UPDATE _it_RUBRICS SET discount_count = ?i WHERE rID=?i",
            array(count($firms), $catalog['rID']));
    }

    $total          = count($firms);
    $npages         = (int) ($total / $app->config['objects_per_page']);
    $firms          = array_slice($firms, $pagenum * $app->config['objects_per_page'], $app->config['objects_per_page']);
    $catdescription = $catalog['description'];
    $description    = $catalog['description'] . " ";
    foreach ($firms as $firm)
    {
        if (!count($firm['discount']))
        {
            continue;
        }

        $description .= $firm['shortname'] . " - ";
        $u = 0;
        foreach ($firm['discount'] as $idx => $d)
        {
            $description .= "$d[caption].";
            if (++$u < count($firm['discount']))
            {
                $description .= " ";
            }

        }
        $description .= "; ";
    }
    $description = str_replace('"', "", $description);
    $curpage     = $pagenum;
    $discounts   = Discount::getRandom(8);
    $advert      = Advert::getAdvertData("/");
    $bread       = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $parent['cat'] . '/', 'name' => $parent['caption']),
        array('link' => '/discount/' . $parent['cat'] . "/" . $catalog[0]['cat'] . '/', 'name' => $catalog[0]['caption']));
    return parseTemplate("pages/discount_subcatalog.php", array('catalog' => $parent, 'subcat' => $subcat,
        'firms' => $firms,
        'title' => $title, 'total' => $total,
        'catalogname' => $catname, 'npages' => $npages, 'curpage' => $curpage,
        'subcats' => $subcats, 'description' => $description,
        'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount', 'nextcat' => $subcat,
        'bread' => $bread, 'inrubric' => true, 'catsecond' => $catalog, 'catdescription' => $catdescription));
});
//==================================================================================
$app->get('/discount/{cat}/{subcat}/p/{pagenum}/', function ($cat, $subcat, $pagenum) use ($app)
{
    $pagenum--;
    $title   = 'Акции, скидки, распродажи. Каталог';
    $firms   = array();
    $catname = $cat;
    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$subcat'", null, 'row');
    $parent  = $app->db->query("SELECT * FROM _it_RUBRICS WHERE cat = '$cat'", null, 'row');
    $subcats = $app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = ?i ORDER BY caption",
        array($parent['rID']), 'assoc');
    $discounts = Discount::getRandom(8);
    $advert    = Advert::getAdvertData("/catalog/$catname");
    $bread     = array(array('link' => '/discount/', 'name' => 'Акции и скидки'),
        array('link' => '/discount/' . $parent['cat'] . '/', 'name' => $parent['caption']),
        array('link' => '/discount/' . $parent['cat'] . "/" . $catalog[0]['cat'] . '/', 'name' => $catalog[0]['caption']));
    return parseTemplate("pages/discount_subcatalog.php", array('catalog' => $parent, 'subcat' => $cat,
        'firms' => $firms, 'title' => $title, 'total' => $total, 'catalogname' => $catname,
        'npages' => $npages, 'curpage' => $curpage, 'subcats' => $subcats, 'description' => $description,
        'subcats' => $subcats, 'random_discounts' => $discounts, 'advert' => $advert, 'place' => 'discount',
        'nextcat' => $subcat, 'bread' => $bread, 'inrubric' => true));
});
//==================================================================================
// наш поиск
//====
$app->get("/catalog/{cat}/what/{key}/", function ($cat, $key) use ($app)
{
    $catname  = $cat;
    $urlkey   = $key;
    $key      = urldecode($key);
    $key      = str_replace(array("+"), ' ', $key);
    $key      = trim($key);
    $keyhash  = Core::keyhash($key);
    $results  = array();
    $results2 = array();

    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = ?", array($cat), 'row');
    mlog("catalog = " . $catalog['cat']);
    $rIDs = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
		WHERE rID = ?i", array($catalog['rID']), 'col');
    mlog("srch rubric $catalog[rID], count(rIDs)=" . count($rIDs));
    //$data = Cache::get("search/".Core::keyhash);
    mlog("search '$key' [Core::keyhash] [" . ($data ? "CACHED" : "NOT CACHED") . "]");

    if (!$data)
    {
        mlog("cache miss for Core::keyhash");
        // ищем по шортнейму
        mlog("srch 1");
        $results = $app->db->query("SELECT  cID FROM _it_FIRMS
			WHERE published='yes' AND fullname LIKE '%?e%' AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        mlog("count: " . count($results));
        // ищем по серч филду (который кстати с багом, название компании сливаеца с текстом, впринципе можно устранить автоматически
        mlog("srch 2");
        $results2 = $app->db->query("SELECT  cID  FROM _it_FIRMS
			WHERE published='yes' AND search LIKE '%?e%' AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        $results = array_merge($results, $results2);
        mlog("count: " . count($results2) . " total: " . count($results) . " [filtering]");
        $newresults = array();
        $firms      = array();
        foreach ($results as $cID)
        {
            if (in_array($cID, $firms))
            {
                continue;
            }

            $firms[]             = $cID;
            $result              = Objects::GetCompanyById($cID);
            $result['search']    = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['search']);
            $result['shortname'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['shortname']);
            $result['fullname']  = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['fullname']);
            $result['info']      = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['info']);
            // $result['info_html'] = preg_replace("#($key)#iu", "<span class='bhl'>$1</span>", $result['info_html']);
            $result['firm_html'] = strip_tags($result['firm_html']);
            $result['firm_html'] = "..." . mb_substr($result['firm_html'], 20, 155) . "...";
            $result['firm_html'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['firm_html']);
            if (strlen($result['firm_html']) == 6)
            {
                $result['firm_html'] = '';
            }

            $result['co_rubrics'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['co_rubrics']);
            $newresults[]         = $result;
        }
        $results = &$newresults;
        mlog("filtered " . count($results));
        //    Cache::set("search/".Core::keyhash, $results, $app->config['cache_time_search']);
    }
    else
    {
        $results = &$data;
        mlog("precached " . count($results));
    }
    //print_r($results);
    Core::WriteSearchLog($key, count($results));
    $npages  = floor(count($results) / $app->config['objects_per_page']);
    $total   = intval(count($results));
    $results = array_slice($results, 0, $app->config['objects_per_page']);
    $advert  = Advert::getAdvertData("/catalog/$catname/");
    return parseTemplate("pages/search_results.php",
        array('results' => $results, 'key' => urlencode($key), 'npages' => $npages, 'total' => $total,
            'curpage' => 0, 'advert' => $advert, 'inrubric' => true, 'catalogname' => $catname,
            'place' => 'catalog', 'what' => $urlkey));
});
//====
$app->get("/catalog/{cat}/what/{key}/p/{pagenum}/", function ($cat, $key, $pagenum) use ($app)
{
    $catname  = $cat;
    $urlkey   = $key;
    $key      = urldecode($key);
    $key      = str_replace(array("+"), ' ', $key);
    $key      = trim($key);
    $keyhash  = Core::keyhash($key);
    $results  = array();
    $results2 = array();

    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = ?", array($cat), 'row');

    mlog("catalog = " . $catalog['cat']);

    $rIDs = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
		WHERE rID = ?i", array($catalog['rID']), 'col');

    mlog("srch rubric $catalog[rID], count(rIDs)=" . count($rIDs));
    $data = Cache::get("search/" . Core::keyhash);
    mlog("search '$key' [Core::keyhash] [" . ($data ? "CACHED" : "NOT CACHED") . "]");
    if (!$data)
    {
        mlog("cache miss for Core::keyhash");
        // ищем по шортнейму
        mlog("srch 1");
        $results = $app->db->query("SELECT  cID FROM _it_FIRMS
			WHERE published='yes' AND fullname LIKE '%?e%' AND  office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        mlog("count: " . count($results));
        // ищем по серч филду (который кстати с багом, название компании сливаеца с текстом, впринципе можно устранить автоматически
        mlog("srch 2");
        $results2 = $app->db->query("SELECT  cID  FROM _it_FIRMS
			WHERE published='yes' AND search LIKE '%?e%' AND office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        $results = array_merge($results, $results2);
        mlog("count: " . count($results2) . " total: " . count($results) . " [filtering]");
        $newresults = array();
        $firms      = array();
        foreach ($results as $cID)
        {
            if (in_array($cID, $firms))
            {
                continue;
            }

            $firms[]          = $cID;
            $result           = Objects::GetCompanyById($cID);
            $result['search'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['search']);
            $result['info']   = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['info']);
            // $result['info_html'] = preg_replace("#($key)#iu", "<span class='bhl'>$1</span>", $result['info_html']);
            $result['firm_html'] = strip_tags($result['firm_html']);
            $result['firm_html'] = "..." . mb_substr($result['firm_html'], 20, 155) . "...";
            $result['firm_html'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['firm_html']);
            if (strlen($result['firm_html']) == 6)
            {
                $result['firm_html'] = '';
            }

            $result['co_rubrics'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['co_rubrics']);
            $newresults[]         = $result;
        }
        $results = &$newresults;
        mlog("filtered " . count($results));
        Cache::set("search/" . Core::keyhash, $results, $app->config['cache_time_search']);
    }
    else
    {
        $results = &$data;
        mlog("precached " . count($results));
    }
    //print_r($results);
    Core::WriteSearchLog($key, count($results));
    $npages  = floor(count($results) / $app->config['objects_per_page']);
    $total   = intval(count($results));
    $results = array_slice($results, $pagenum * $app->config['objects_per_page'], $app->config['objects_per_page']);

    $advert = Advert::getAdvertData("/catalog/$catname/");
    return parseTemplate("pages/search_results.php",
        array('results' => $results, 'key' => urlencode($key), 'npages' => $npages, 'total' => $total,
            'curpage' => $pagenum - 1, 'advert' => $advert, 'inrubric' => true, 'catalogname' => $catname,
            'place' => 'catalog', 'what' => $urlkey));
});
//====
$app->get("/catalog/{cat}/{subcat}/what/{key}/p/{pagenum}/", function ($cat, $subcat, $key, $pagenum) use ($app)
{
    $pagenum--;
    $catname = $cat;
    $urlkey  = $key;
    $key     = urldecode($key);
    $key     = str_replace(array("+"), ' ', $key);
    $key     = trim($key);

    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = ?", array($subcat), 'row');

    mlog("catalog = " . $catalog['cat']);

    $rIDs = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
		WHERE rID = ?i", array($catalog['rID']), 'col');
    $keyhash  = Core::keyhash($key);
    $results  = array();
    $results2 = array();
    $data     = Cache::get("search/$cat/$subcat/" . Core::keyhash);
    mlog("search '$key' [Core::keyhash] [" . ($data ? "CACHED" : "NOT CACHED") . "]");
    if (!$data)
    {
        mlog("cache miss for Core::keyhash");
        // ищем по шортнейму
        mlog("srch 1");
        $results = $app->db->query("SELECT  cID FROM _it_FIRMS
			WHERE published='yes' AND fullname LIKE '%?e%' AND  office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        mlog("count: " . count($results));
        // ищем по серч филду (который кстати с багом, название компании сливаеца с текстом, впринципе можно устранить автоматически
        mlog("srch 2");
        $results2 = $app->db->query("SELECT  cID  FROM _it_FIRMS
			WHERE published='yes' AND search LIKE '%?e%' AND office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        $results = array_merge($results, $results2);
        mlog("count: " . count($results2) . " total: " . count($results) . " [filtering]");
        $newresults = array();
        $firms      = array();
        foreach ($results as $cID)
        {
            if (in_array($cID, $firms))
            {
                continue;
            }

            $firms[]          = $cID;
            $result           = Objects::GetCompanyById($cID);
            $result['search'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['search']);
            $result['info']   = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['info']);
            // $result['info_html'] = preg_replace("#($key)#iu", "<span class='bhl'>$1</span>", $result['info_html']);
            $result['firm_html'] = strip_tags($result['firm_html']);
            $result['firm_html'] = "..." . mb_substr($result['firm_html'], 20, 155) . "...";
            $result['firm_html'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['firm_html']);
            if (strlen($result['firm_html']) == 6)
            {
                $result['firm_html'] = '';
            }

            $result['co_rubrics'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['co_rubrics']);
            $newresults[]         = $result;
        }
        $results = &$newresults;
        mlog("filtered " . count($results));
        Cache::set("search/$cat/$subcat/" . Core::keyhash, $results, $app->config['cache_time_search']);
    }
    else
    {
        $results = &$data;
        mlog("precached " . count($results));
    }
    //print_r($results);
    Core::WriteSearchLog($key, count($results));
    $npages  = floor(count($results) / $app->config['objects_per_page']);
    $total   = intval(count($results));
    $results = array_slice($results, $pagenum * $app->config['objects_per_page'], $app->config['objects_per_page']);
    $advert  = Advert::getAdvertData("/catalog/$catname/");
    return parseTemplate("pages/search_results.php",
        array('results' => $results, 'key' => urlencode($key), 'npages' => $npages, 'total' => $total,
            'curpage' => $pagenum, 'advert' => $advert, 'inrubric' => true, 'catalogname' => $catname,
            'nextcat' => $subcat, 'place' => 'catalog', 'what' => $urlkey));
});
//====
$app->get("/catalog/{cat}/{subcat}/what/{key}/", function ($cat, $subcat, $key) use ($app)
{
    $catname = $cat;
    $urlkey  = $key;
    $key     = urldecode($key);
    $key     = str_replace(array("+"), ' ', $key);
    $key     = trim($key);

    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = ?", array($subcat), 'row');
    mlog("catalog = " . $catalog['cat']);

    $rIDs = $app->db->query("SELECT rsID FROM _it_LINK_RUBRICS_2_SETS
		WHERE rID = ?i", array($catalog['rID']), 'col');
    $keyhash  = Core::keyhash($key);
    $results  = array();
    $results2 = array();
    //$data = Cache::get("search/$cat/$subcat/".Core::keyhash);
    mlog("search '$key' [Core::keyhash] [" . ($data ? "CACHED" : "NOT CACHED") . "]");
    if (!$data)
    {
        mlog("cache miss for Core::keyhash");
        // ищем по шортнейму
        mlog("srch 1");
        $results = $app->db->query("SELECT  cID FROM _it_FIRMS
			WHERE published='yes' AND fullname LIKE '%?e%' AND  office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        mlog("count: " . count($results));
        mlog("srch 2");
        $results2 = $app->db->query("SELECT  cID  FROM _it_FIRMS
			WHERE published='yes' AND search LIKE '%?e%' AND office_type IS NULL AND rsID IN(?l)
			", array($key, $rIDs), 'col');
        $results = array_merge($results, $results2);
        mlog("count: " . count($results2) . " total: " . count($results) . " [filtering]");
        $newresults = array();
        $firms      = array();
        foreach ($results as $cID)
        {
            if (in_array($cID, $firms))
            {
                continue;
            }

            $firms[]          = $cID;
            $result           = Objects::GetCompanyById($cID);
            $result['search'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['search']);
            $result['info']   = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['info']);
            // $result['info_html'] = preg_replace("#($key)#iu", "<span class='bhl'>$1</span>", $result['info_html']);
            $result['firm_html'] = strip_tags($result['firm_html']);
            $result['firm_html'] = "..." . mb_substr($result['firm_html'], 20, 155) . "...";
            $result['firm_html'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['firm_html']);
            if (strlen($result['firm_html']) == 6)
            {
                $result['firm_html'] = '';
            }

            $result['co_rubrics'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>", $result['co_rubrics']);
            $newresults[]         = $result;
        }
        $results = &$newresults;
        mlog("filtered " . count($results));
        //Cache::set("search/$cat/$subcat/".Core::keyhash, $results, $app->config['cache_time_search']);
    }
    else
    {
        $results = &$data;
        mlog("precached " . count($results));
    }
    //print_r($results);
    Core::WriteSearchLog($key, count($results));
    $npages  = floor(count($results) / $app->config['objects_per_page']);
    $total   = intval(count($results));
    $results = array_slice($results, 0, $app->config['objects_per_page']);
    $advert  = Advert::getAdvertData("/catalog/$catname/");
    return parseTemplate("pages/search_results.php",
        array('results' => $results, 'key' => urlencode($key), 'npages' => $npages, 'total' => $total,
            'curpage' => 0, 'advert' => $advert, 'inrubric' => true, 'catalogname' => $catname,
            'nextcat' => $subcat, 'place' => 'catalog', 'what' => $urlkey));
});
$app->get("/catalog/what/{key}/", function ($key) use ($app)
{
    if (mb_strlen($key) > 255)
    {
        $key = mb_substr($key, 0, 255);
    }

    $urlkey = $key;
    $key    = urldecode($key);

    $key      = str_replace(array("+"), ' ', $key);
    $key      = str_replace(array("Ё", "ё"), array("Е", "е"), $key);
    $key      = trim($key);
    $key      = mb_strtolower($key);
    $key      = Core::clear_key($key);
    $keyhash  = Core::keyhash($key);
    $results  = array();
    $results2 = array();
    //$data = Cache::get("search/".Core::keyhash);
    $trkey = Core::translate($key);

    $results = elasticsearch::search($key, 0, $app->config['objects_per_page'], false, true);

    //mlog("srch [$trkey] done count=".count($results));
    $newresults = array();
    $tm         = microtime_float();

    foreach ($results as $cID => $hl)
    {
        $result             = Objects::GetCompanyById($cID, true, true);
        $result['fullname'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['fullname']);
        $result['co_rubrics'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['co_rubrics']);
        $result['shortname'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['shortname']);
        $result['co_names'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['co_names']);
        $result['cinfo'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>",
            $result['cinfo']);
        $keys = explode(" ", $key);
        foreach ($keys as $k)
        {
            if (mb_strlen($k) <= 2)
            {
                continue;
            }

            $result['fullname']   = elasticsearch::replaceWordForms($k, $result['fullname']);
            $result['shortname']  = elasticsearch::replaceWordForms($k, $result['shortname']);
            $result['co_names']   = elasticsearch::replaceWordForms($k, $result['co_names']);
            $result['co_rubrics'] = elasticsearch::replaceWordForms($k, $result['co_rubrics']);
            $result['cinfo']      = elasticsearch::replaceWordForms($k, $result['cinfo']);
        }
        $result['firm_html'] = "";
        $hl                  = array_unique($hl);
        foreach ($hl as $h)
        {
            $h = trim($h);
            $h = preg_replace("#[0-9]*#umi", "", $h);
            $result['firm_html'] .= "...$h...";
        }
        $newresults[] = $result;
    }
    $total = elasticsearch::searchCount($key);
    mlog("[srch] " . rus2translit($key) . " " . sprintf("%.2f", floatval(microtime_float() - $tm)) . " num=" .
        $total);
    $results = &$newresults;
    // Cache::set("search/".Core::keyhash, $results, $app->config['cache_time_search']);

    $npages = $total / $app->config['objects_per_page'];

    Core::WriteSearchLog($key, $total);
    //Core::LogSearch(array('key'=>$key,'ip'=>$_SERVER['REMOTE_ADDR'],'total'=>$total,
    //'ua'=>$_SERVER['HTTP_USER_AGENT']));

    $advert = Advert::getAdvertData("/");

    return parseTemplate("pages/search_results.php",
        array('results' => $results, 'key' => urlencode($key), 'npages' => $npages, 'total' => $total,
            'curpage' => 0, 'advert' => $advert, 'place' => 'catalog', 'what' => $urlkey));
});
//==================================================================================
$app->get("/catalog/what/{key}/p/{pagenum}/", function ($key, $pagenum) use ($app)
{
    if (mb_strlen($key) > 255)
    {
        $key = mb_substr($key, 0, 255);
    }

    if ($pagenum >= 1)
    {
        $pagenum--;
    }

    $urlkey   = $key;
    $key      = urldecode($key);
    $key      = str_replace(array("+"), ' ', $key);
    $key      = str_replace(array("Ё", "ё"), array("Е", "е"), $key);
    $key      = trim($key);
    $key      = mb_strtolower($key);
    $key      = Core::clear_key($key);
    $results  = array();
    $results2 = array();
    $keyhash  = Core::keyhash($key);
    //$cached=Cache::get("search/Core::keyhash");
    $results = elasticsearch::search($key, $pagenum *
        $app->config['objects_per_page'], $app->config['objects_per_page'], false, true);
    $newresults = array();
    $tm         = microtime_float();
    foreach ($results as $cID => $hl)
    {
        $result             = Objects::GetCompanyById($cID, true, true);
        $keys               = explode(" ", $key);
        $result['fullname'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['fullname']);
        $result['co_rubrics'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['co_rubrics']);
        $result['shortname'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['shortname']);
        $result['co_names'] = preg_replace("#($key)#isu", "<span class='bhl'>$1</span>",
            $result['co_names']);
        $result['cinfo'] = preg_replace("#($key)#imu", "<span class='bhl'>$1</span>",
            $result['cinfo']);
        foreach ($keys as $k)
        {
            if (mb_strlen($k) <= 2)
            {
                continue;
            }

            $result['fullname']   = elasticsearch::replaceWordForms($k, $result['fullname']);
            $result['shortname']  = elasticsearch::replaceWordForms($k, $result['shortname']);
            $result['co_names']   = elasticsearch::replaceWordForms($k, $result['co_names']);
            $result['co_rubrics'] = elasticsearch::replaceWordForms($k, $result['co_rubrics']);
            $result['cinfo']      = elasticsearch::replaceWordForms($k, $result['cinfo']);
        }
        $result['firm_html'] = "";
        $hl                  = array_unique($hl);
        foreach ($hl as $h)
        {
            $h = trim($h);
            $h = preg_replace("#[0-9]*#umi", "", $h);
            $result['firm_html'] .= "...$h...";
        }
        $newresults[] = $result;
        $results      = &$newresults;

        //Cache::set("search/Core::keyhash", $results, $app->config['cache_time_search']);
    }
    mlog("[srch page $pagenum] " . rus2translit($key) . " " . sprintf("%.2f", floatval(microtime_float() - $tm)) . " num=" .
        count($results));
    $total = elasticsearch::searchCount($key);
    Core::WriteSearchLog($key, $total);
    $npages = $total / $app->config['objects_per_page'];
    $advert = Advert::getAdvertData("/");
    return parseTemplate("pages/search_results.php", array('results' => $results, 'key' => urlencode($key),
        'npages' => $npages, 'total' => $total,
        'curpage' => $pagenum, 'advert' => $advert, 'place' => 'catalog', 'what' => $urlkey));
});
//==================================================================================
// каталог
$app->get('/catalog/', function () use ($app)
{
    stat::inc("catalog_root_views");
    $catalog = $app->db->query("SELECT discount_count,objects_count, parent,rID,cat,caption
		FROM _it_RUBRICS WHERE parent = 1 AND published = 'yes' ORDER BY caption ",
        null, 'assoc');
    foreach ($catalog as $idx => $cat)
    {
        $catalog[$idx]['sub'] = $app->db->query("SELECT  discount_count,objects_count,rID,cat,caption
			FROM _it_RUBRICS
			WHERE parent = ?i
			ORDER BY caption
			LIMIT 8",
            array($cat['rID']),
            'assoc');
    }
    $lefttype = 'google';
    $title    = 'Каталог';
    $bread    = array(array('link' => '/catalog/', 'name' => 'Каталог'));
    $advert   = Advert::getAdvertData("/catalog/");
    return parseTemplate("pages/catalog_full.php", array('catalog' => $catalog, 'subcat' => $cat, 'lefttype' => $lefttype,
        'title' => $title, 'advert' => $advert, 'bread' => $bread, 'place' => 'catalog'));
});
//==================================================================================
$app->get('/catalog/{cat}/', function ($cat) use ($app)
{
    $catname   = $cat;
    $catalog   = $app->db->query("SELECT * from _it_RUBRICS where cat = '$catname' AND parent = 1", null, 'assoc');
    $cat_title = $catalog[0]['caption'];
    if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    {
        $app->db->query("INSERT INTO evo_rubrics_stat
			SET ip = ?, rID = ? ", array($_SERVER['REMOTE_ADDR'], $catalog[0]['rID']));
    }

    stat::inc("$catname/visits");
    $ffirms = array();
    //$cached = Cache::get("firms/$cat");
    //mlog("catalog [$cat] [".($cached ? 'CACHED':'NOT CACHED')."] ".count($catalog)." records of '$catname'");
    if ($cached == null || $_GET['refresh'] == 1)
    {
        foreach ($catalog as $idx => $cat)
        {
            mlog("$cat[cat] $cat[rID] #$idx ");
            $firms = elasticsearch::getCatalogCompanys($cat['rID'], 0,
                $app->config['objects_per_page']);
            //   mlog("selected ".count($firms)." firms, getting info...");
            foreach ($firms as $firmcID)
            {
                $firm = Objects::GetCompanyInfoById($firmcID, array('pics' => true,
                    'common' => true, 'offices' => true, 'stuff' => true,
                    'price' => true, 'addr' => true, 'attribs' => true));
                // if (!$firm['cID'])
                // {
                //     mlog("error? ".__LINE__.":".__FILE__);
                //     continue;
                // }
                $ffirms[] = $firm;
                if ($ndone++ > $app->config['objects_per_page'])
                {
                    break;
                }

                /*  if ($ndone++%50==0)
            mlog("... $ndone");*/
            }
            //  mlog("done selection, count=".count($ffirms));
        }
        $total   = elasticsearch::getCatalogCompanysCount($cat['rID']); //count($ffirms);
        $npages  = $total / $app->config['objects_per_page']; //(int) ($total/$app->config['objects_per_page']);
        $curpage = 0;
        //  $bytes=Cache::set("firms/$catname", $ffirms, $app->config['cache_time_catalog']);
        // $ccat=$app->db->query("SELECT * FROM _it_RUBRICS WHERE parent = 1 AND cat = ?", array($catname),'row');
        $app->db->query("UPDATE _it_RUBRICS SET objects_count = ?i WHERE rID=?i",
            array($total, $catalog[0]['rID']));
        //    $ffirms = array_slice($ffirms, 0, $app->config['objects_per_page']);
    }
    else
    {
        $ffirms  = &$cached;
        $total   = count($ffirms);
        $npages  = (int) ($total / $app->config['objects_per_page']);
        $curpage = 0;
        $ffirms  = array_slice($ffirms, 0, $app->config['objects_per_page']);
    }
    $subcats     = Objects::getCatalogSubcatsById($catalog[0]['rID']);
    $title       = $cat_title;
    $description = $catalog[0]['description'];
    $advert      = Advert::getAdvertData("/catalog/$catname/*");
    //    $banners = Advert::getBanner("/catalog/$catname/*");
    $bread = array(array('link' => '/catalog/', 'name' => 'Каталог'),
        array('link' => '/catalog/' . $catname . '/', 'name' => $cat_title));
    //    print_r($bread);
    $data = parseTemplate("pages/catalog.php", array('catalog' => $catalog, 'subcat' => $cat, 'firms' => $ffirms,
        'cat_title' => $cat_title, 'title' => $title, 'npages' => $npages, 'total' => $total,
        'curpage' => $curpage,
        'catalogname' => $catname, 'lefttype' => 'catalog', 'description' => $description,
        'subcats' => $subcats, 'advert' => $advert, 'nextcat' => '', 'place' => 'catalog',
        'bread' => $bread, 'inrubric' => true));
    return $data;
});
//==================================================================================
$app->get('/catalog/{cat}/p/{pagenum}/', function ($cat, $pagenum) use ($app)
{
    $pagenum--;
    $catname = $cat;
    stat::inc("$catname/visits");
    $catalog = $app->db->query("SELECT * from _it_RUBRICS
		WHERE cat = '$cat' AND parent = 1", null, 'assoc');
    if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    {
        $app->db->query("INSERT INTO evo_rubrics_stat
			SET ip = ?, rID = ? ", array($_SERVER['REMOTE_ADDR'], $catalog[0]['rID']));
    }

//print_r($catalog);
    $cat_title = $catalog[0]['caption'];
    //mlog("catalog [$cat] page $pagenum");
    //$cached = Cache::get("firms/$catname");
    if ($cached == null)
    {
        foreach ($catalog as $idx => $cat)
        {
            $subcats              = Objects::getCatalogSubcatsById($cat['rID']);
            $catalog[$idx]['sub'] = $subcats;
            $firms                = elasticsearch::getCatalogCompanys($cat['rID'],
                $pagenum * $app->config['objects_per_page'],
                $app->config['objects_per_page']);
            foreach ($firms as $firmcID)
            {
                $last = microtime(true);
                //$firm = Objects::GetCompanyById($firmcID,true, false);
                $firm = Objects::GetCompanyInfoById($firmcID, array('pics' => true,
                    'common' => true, 'offices' => true, 'stuff' => true,
                    'price' => true, 'addr' => true, 'attribs' => true));
                $ms = microtime(true) - $last;
                $take += $ms;
                $ffirms[] = $firm;
                //    mlog("cID $firmcID took $ms"."ms ($take)");
            }
        }
        //mlog("firms took $take ms");
        $total  = elasticsearch::getCatalogCompanysCount($cat['rID']);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //mlog("cached $bytes for $catname");
    }
    else
    {
        $subcats = Objects::getCatalogSubcatsById($catalog[0]['rID']);
        //echo "cached";
        $ffirms = $cached;
        $total  = count($ffirms);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //    $curpage = 0;
        $ffirms = array_slice($ffirms, $pagenum * $app->config['objects_per_page'],
            $app->config['objects_per_page']);
    }
    $curpage     = $pagenum;
    $title       = $cat_title;
    $description = $catalog[0]['description'];
    $advert      = Advert::getAdvertData("/catalog/$catname/*");
    $bread       = array(array('link' => '/catalog/', 'name' => 'Каталог'),
        array('link' => '/catalog/' . $catname . '/', 'name' => $cat_title));
    $data = parseTemplate("pages/catalog.php", array('catalog' => $catalog,
        'subcat' => $cat, 'firms' => $ffirms,
        'cat_title' => $cat_title, 'title' => $title, 'npages' => $npages,
        'total' => $total, 'curpage' => $curpage,
        'catalogname' => $catname, 'lefttype' => 'catalog', 'description' => $description,
        'subcats' => $subcats, 'advert' => $advert, 'nextcat' => '', 'place' => 'catalog',
        'bread' => $bread, 'inrubric' => true));
    return $data;
});
//==================================================================================
$app->get('/catalog/{cat}/{subcat}/', function ($cat, $subcat) use ($app)
{
    stat::inc("$cat:$subcat/visits");
    $catname   = $subcat;
    $cat_upper = $cat;
    $upper_cat = $app->db->query("SELECT discount_count,objects_count,description,rID,cat,caption FROM _it_RUBRICS
		WHERE cat = '$cat' AND parent = 1", null, 'row');
    //print_r($upper_cat);
    $catalog = $app->db->query("SELECT discount_count,objects_count,description,rID,cat,caption FROM _it_RUBRICS
		WHERE cat = ? AND parent = ?i", array($subcat, $upper_cat['rID']), 'assoc');
    if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    {
        $app->db->query("INSERT INTO evo_rubrics_stat
			SET ip = ?, rID = ? ", array($_SERVER['REMOTE_ADDR'], $catalog[0]['rID']));
    }

    //     print_r($catalog);
    //    print_r($catalog);
    $cat_title = $catalog[0]['caption'];
    //$cached = Cache::get("firms/$cat_upper"."/".$subcat);
    mlog("catalog [$cat/$subcat]  [" . ($cached ? 'CACHED' : 'NOT CACHED') . "]");
    $ffirms = array();
    if ($cached == null || $_GET['refresh'] == 1)
    {
        foreach ($catalog as $idx => $cat)
        {
            $subcats              = Objects::getCatalogSubcatsById($cat['rID']);
            $catalog[$rID]['sub'] = $subcats;
            $firms                = $app->db->query("SELECT cID FROM _it_FIRMS
				JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID AND office_type IS NULL AND published='yes'
				AND rsID IN(SELECT DISTINCT(rsID) FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?i)
				ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
				", array($cat['rID']), 'col');
            //mlog(print_r($firms,1));
            foreach ($firms as $firmcID)
            {
                $firm = Objects::GetCompanyInfoById($firmcID, array('pics' => true,
                    'common' => true, 'offices' => true, 'stuff' => true,
                    'price' => true, 'addr' => true, 'attribs' => true));
                if ($firmcID == 29059)
                {
                    mlog(print_r($firm, 1));
                }
                if (!$firm['cID'])
                {
                    continue;
                }

                $ffirms[] = $firm;
            }
            $app->db->query("UPDATE _it_RUBRICS SET objects_count = ?i
				WHERE rID=?i", array(count($ffirms), $cat['rID']));
            //    mlog("set ".count($ffirms)." for $cat[rID]");
        }
        $total  = count($ffirms);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //$curpage = 0;
        $bytes = Cache::set("firms/$cat_upper" . "/" . $subcat, $ffirms, $app->config['cache_time_catalog']);
        if (count($ffirms))
        {
            $ffirms = array_slice($ffirms, 0, $app->config['objects_per_page']);
        }

        //   mlog("cached $bytes for $cat_upper/$catname");
    }
    else
    {
        $ffirms = &$cached;
        $total  = count($ffirms);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //    $curpage = 0;
        if (count($ffirms))
        {
            $ffirms = array_slice($ffirms, 0, $app->config['objects_per_page']);
        }

    }
    $subcats     = Objects::getCatalogSubcatsById($upper_cat['rID']);
    $title       = "$cat_title. $upper_cat[caption]";
    $description = $catalog[0]['description'];
    //mlog(print_r($subcats,1));
    // mlog("desc ".$description);
    //$advert = Advert::getAdvertData("/catalog/$cat_upper/$catname/*");
    $advert = Advert::getAdvertData("/catalog/$cat_upper/*");
    // $banners = Advert::getBanner("/catalog/$catname/*");
    $bread = array(array('link' => '/catalog/', 'name' => 'Каталог'),
        array('link' => '/catalog/' . $upper_cat['cat'] . '/', 'name' => $upper_cat['caption']),
        array('link' => '/catalog/' . $upper_cat['cat'] . '/' . $catname . '/', 'name' => $cat_title));
    return parseTemplate("pages/catalog_subcatalog.php", array('catalog' => $upper_cat, 'subcat' => $catname, 'firms' => $ffirms,
        'cat_title' => $cat_title, 'title' => $title, 'npages' => $npages, 'total' => $total, 'curpage' => $curpage,
        'catalogname' => $cat_upper, 'lefttype' => 'catalog', 'description' => $description,
        'subcats' => $subcats, 'advert' => $advert, 'banners' => $banners,
        'nextcat' => $catname, 'place' => 'catalog', 'bread' => $bread, 'inrubric' => true));
});
//==================================================================================
$app->get('/catalog/{cat}/{subcat}/p/{pagenum}/', function ($cat, $subcat, $pagenum) use ($app)
{
    stat::inc("$cat:$subcat/visits");
    $pagenum--;
    $curpage   = $pagenum;
    $catname   = $subcat;
    $cat_upper = $cat;
    $upper_cat = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat='$cat' AND parent = 1", null, 'row');
    $catalog = $app->db->query("SELECT * FROM _it_RUBRICS
		WHERE cat = '$subcat' AND parent = ?i", array($upper_cat['rID']), 'assoc');
    if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
    {
        $app->db->query("INSERT INTO evo_rubrics_stat
			SET ip = ?, rID = ? ", array($_SERVER['REMOTE_ADDR'], $catalog[0]['rID']));
    }

//    print_r($catalog);
    $cat_title = $catalog[0]['caption'];
//    $cached = Cache::get("firms/$cat_upper"."_".$catname);
    mlog("catalog [$cat/$subcat] page $pagenum [" . ($cached ? 'CACHED' : 'NOT CACHED') . "]");
    //$cached=null;
    if ($cached == null)
    {
        foreach ($catalog as $idx => $cat)
        {
            mlog("cat $idx: $cat");
            $subcats = $app->db->query("SELECT *
				FROM _it_RUBRICS
				WHERE parent = ?i", array($cat['rID']), 'assoc');
            $catalog[$idx]['sub'] = $subcats;
            $firms                = $app->db->query("SELECT cID FROM _it_FIRMS
				JOIN _it_SPR_FIRM_RAZM ON _it_SPR_FIRM_RAZM.ID = _it_FIRMS.razm_type
				WHERE published='yes' AND parent=cID AND office_type IS NULL AND published='yes'
				AND rsID IN(SELECT DISTINCT(rsID) FROM _it_LINK_RUBRICS_2_SETS WHERE rID = ?i)
				ORDER BY _it_SPR_FIRM_RAZM.prioritet DESC,_it_FIRMS.shortname ASC
				", array($cat['rID']), 'col');
            foreach ($firms as $firmcID)
            {
                $firm = Objects::GetCompanyInfoById($firmcID, array('pics' => true,
                    'common' => true, 'offices' => true, 'stuff' => true,
                    'price' => true, 'addr' => true, 'attribs' => true));
                if (!$firm['cID'])
                {
                    continue;
                }

                $ffirms[] = $firm;
            }
            //$app->db->query("UPDATE _it_RUBRICS SET objects_count = ? WHERE rID=?",
            //              array(count($ffirms),$cat['rID']));
        }
        $total  = count($ffirms);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //$curpage = 0;
        $bytes = Cache::set("firms/$cat_upper" . "_" . $catname, $ffirms, $app->config['cache_time_catalog']);
        //     mlog("cached $bytes for $cat_upper/$catname");
    }
    else
    {
        //echo "cached";
        //    mlog("cached result");
        $ffirms = $cached;
        $total  = count($ffirms);
        $npages = (int) ($total / $app->config['objects_per_page']);
        //    $curpage = 0;
    }
    $subcats = Objects::getCatalogSubcatsById($upper_cat['rID']);
    $ffirms  = array_slice($ffirms, $pagenum * $app->config['objects_per_page'],
        $app->config['objects_per_page']);
    $title       = "$cat_title. $upper_cat[caption]";
    $description = $catalog[0]['description'];
    $advert      = Advert::getAdvertData("/catalog/$cat_upper/*");
    //mlog("desc ".$description);
    $bread = array(array('link' => '/catalog/', 'name' => 'Каталог'),
        array('link' => '/catalog/' . $upper_cat['cat'] . '/', 'name' => $upper_cat['caption']),
        array('link' => '/catalog/' . $upper_cat['cat'] . '/' . $catname . '/', 'name' => $cat_title));
    return parseTemplate("pages/catalog_subcatalog.php", array('catalog' => $upper_cat,
        'subcat' => $catname, 'firms' => $ffirms,
        'cat_title' => $cat_title, 'title' => $title, 'npages' => $npages,
        'total' => $total, 'curpage' => $curpage,
        'catalogname' => $cat_upper, 'lefttype' => 'catalog', 'description' => $description,
        'subcats' => $subcats, 'advert' => $advert, 'nextcat' => $catname, 'place' => 'catalog',
        'bread' => $bread, 'inrubric' => true));
});
//==================================================================================
$app->get("/contacts/", function () use ($app)
{
    $advert = Advert::getAdvertData("/");
    return parseTemplate("pages/contacts.php", array('advert' => $advert));
});
//==================================================================================
// запускаем апп для обработки роутов

header("Expires: " . date('r', time() + 60 * 60 * 2));
try
{
    $app->run();
}
catch (go\DB\Exceptions\Exception $e)
{
    mlog("DB ERROR: " . $e->getMessage());

}
catch (go\DB\Exceptions\Query $e)
{
    mlog('*** Query: ' . $e->getQuery());
    mlog('*** Error: ' . $e->getError());
    mlog('*** Error code: ' . $e->getErrorCode());
}
if (!$app->system['mlog_calls'])
{
    $took = sprintf("%.2f", microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]);
    mlog($_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] .
        " db_querys: " . $app->system['db_querys'] . " took $took " . (Core::IsHuman() ? "" : "[BOT]"));
}
