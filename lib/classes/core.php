<?php

/////////////////////////////////////////////
/// Evodesign Internet Promotion Company ///
/// 008.ru Engine (c) 2015.             ///
/// Chief mail:   info@evodesign.ru    ///
/// Support mail: support@evodesign.ru///
////////////////////////////////////////
use Symfony\Component\HttpFoundation\Response;

class Core
{
    public static function clear_key($key)
    {
        $key = preg_replace("#[^ ё0-9a-zA-Zа-яА-Я-]*#usmi", "", $key);
        while (mb_stripos($key, "  "))
        {
            $key = str_replace("  ", " ", $key);
        }

        //mlog("clearkey: '$key'=>'$ret'");
        return $key;
    }

    public static function LogSearch($opts)
    {
        global $app;

        //    mlog("log: $opts[key] $opts[ip] $opts[ua]");
        $app->db->query("INSERT INTO _it_SEARCH_LOG
			SET what = ?, ip = ?, results = ?i, ua = ?",
            array($opts['key'], $opts['ip'],
                $opts['total'],
                $opts['ua']));
    }

    public static function check_access()
    {
        global $app;

        if ($app->config['site_disabled'])
        {
            die("доступ временно закрыт");
        }

        if (@strstr($_SERVER['REQUEST_URI'], "008"))
        {
            $_SESSION['allowed'] = true;
        }

        if (@$_SESSION['allowed'] != true)
        {
            die("доступ закрыт");
        }

    }

    public static function check_auth()
    {
        global $app;

        if (!$_SESSION['user'])
        {
            //mlog("new login");
            if (isset($_POST['login']) && isset($_POST['password']))
            {
                //mlog("logging in $_POST[login]");
                $user = $app->db->query("SELECT * FROM _it_SYS_USERS
					WHERE login = ? AND password = ?", array($_POST['login'], md5($_POST['password'])),
                    'row');
                if ($user)
                {
                    $_SESSION['user'] = $user;
                    //mlog("logged in");
                }
                else
                {
                    mlog("fail $_POST[login]/$_POST[password]");
                    $msg = "неверный логин или пароль";
                    echo parseTemplate("admin/login.php", compact('msg'));
                    exit;
                }
            }
            else
            {
                echo parseTemplate("admin/login.php");
                exit;
            }

        }
    }
    public static function init_user()
    {
        global $config, $db, $app, $time_start;

        self::init();
        // создаем главный Silex апп
        $app = new Silex\Application();
        // зададим общий конфиг
        $app->config = $config;
        // режим отладки (см dev.log)
        if ($app->config['enable_app_debug'] == true)
        {
            $app['debug'] = $config['enable_app_debug'];
            /// настраиваем в dev.log отладку роутов
            $app->register(new Silex\Provider\MonologServiceProvider(), array(
                'monolog.logfile' => __DIR__ . '/' . $config['log_file'],
                'monolog.name' => "008",
            ));
        }
        // дб автолоадер
        \go\DB\autoloadRegister();

        // подключеемся к базе
        $app->db = go\DB\DB::create($config['db'], 'mysql');
        $app->db->setDebug('goDBDebug');
        //$db = &$app->db;
        //$app->db->query('SET NAMES utf8');
        //$app->db->setPrefix("evo_");
        //$app->db->query("SET GLOBAL sql_mode = 'STRICT_TRANS_TABLES'");
        //$app->db->query("SET SESSION sql_mode = 'STRICT_TRANS_TABLES'");

        // сессия, защита от роботов
        //self::check_human();
        // debug
        self::show_debug();

        // load stat
        if (!stat::loaded())
        {
            stat::load();
        }
        else if (stat::inc("statvars") > 0 && (intval(stat::get("statvars"))
            % $app->config['vars_saver_per']) == 0)
        {
            stat::save();
        }

        if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
        {
            stat::inc("visits");
        }

        //mlog("stat visits: ".stat::get("visits"));

        // внешние рефы
        if (strlen($_SERVER['HTTP_REFERER']) && !strstr($_SERVER['HTTP_REFERER'],
            $app->config['domain']))
        {
            /*    mlog("****> external ref: $_SERVER[HTTP_REFERER] <****");
            if(strstr($_SERVER['HTTP_REFERER'],'setup.php')||
            strstr($_SERVER['HTTP_REFERER'],'google.com'))
            {
            $has = `ipfw show|grep $_SERVER[REMOTE_ADDR]`;
            if(!strlen($has))
            {
            $out = `/root/ban.sh $_SERVER[REMOTE_ADDR]`;
            mlog("[pidor $_SERVER[REMOTE_ADDR] banned - $out]\r\n");
            }
            else
            {
            mlog("already banned $_SERVER[REMOTE_ADDR]");
            }

            }
            else*/
            $app->db->query("INSERT DELAYED INTO evo_refs SET ref='?e',link=?,ip=?,sess=?",
                array(
                    $_SERVER['HTTP_REFERER'],
                    $_SERVER['REQUEST_URI'],
                    $_SERVER['REMOTE_ADDR'],
                    session_id())
            );
        }
        // таблица онлайн
        if (stat::get("visits") % $app->config['online_cleanup_per'] == 0)
        {
            $app->db->query("DELETE FROM {online} WHERE ?i - online >= ?i", array(
                time(),
                $app->config['online_check_time']));
        }

        if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1')
        {
            $is_human = self::IsHuman();

            $app->db->query("INSERT DELAYED INTO {online} SET ua='?e',sess=?,ip = ?, url = ?, online = ?i, is_human = ?i
				ON DUPLICATE KEY UPDATE url='?e', online=?i", array($_SERVER['HTTP_USER_AGENT'], session_id(),
                $_SERVER['REMOTE_ADDR'], $_SERVER['REQUEST_URI'], time(), $is_human, $_SERVER['REQUEST_URI'], time()));
        }

        //==================================================================================
        // хандлер ошибок
        $app->error(function (\Exception $e, $code)
        {
            global $app;

            $res = '<div style="color:red">Извините, произошла ошибка: ' . $code . "</div>";
            if ($app->config['dev_mode'])
            {
                $res .= "<br/>" . $e->getMessage();
            }

            mlog("error $id: (" . $_SERVER['REQUEST_URI'] . ") $code [" . $e->getMessage() . "] " .
                $_SERVER['HTTP_REFERER']);
            if ($app->db != null)
            {
                $id = $app->db->query("INSERT INTO evo_errors SET ua=?,url=?, msg=?,code=?i, ip=?,sess=?,ref=?",
                    array($_SERVER['HTTP_USER_AGENT'], $_SERVER['REQUEST_URI'], $res, $code,
                        $_SERVER['REMOTE_ADDR'],
                        session_id(), $_SERVER['HTTP_REFERER']), 'id');

            }
            header($code . " HTTP/1.0");
            $res .= "<br/>ID: " . sprintf("%019d", $id);
            return new Response($res);
        });

        self::mut();
        self::registerOverloads();
    }

    public static function IsHuman()
    {
        $is_human = 1;
        if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'bot') ||
            strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'crawler'))
        {
            $is_human = 0;
        }

        return $is_human;
    }

    public static function WriteSearchLog($key, $count)
    {
        global $app;
        $app->db->query("INSERT INTO _it_SEARCH_LOG
			SET what = ?, ip = ?, results = ?i, ua = ?",
            array($key, $_SERVER['REMOTE_ADDR'], $count, $_SERVER['HTTP_USER_AGENT']));
    }

    public static function init()
    {
        global $config, $time_start, $app;

        $time_start = microtime_float();
        error_reporting($config['error_reporting']);
        date_default_timezone_set($config['date_timezone']);
        setlocale(LC_ALL, $config['locale']);
        ini_set("session.hash_function", 23);
        ini_set("html_errors", 0);
        session_name($config['cookie_name']);
        session_set_cookie_params(130008, "/");
        session_start();
    }

    public static function init_system()
    {
        global $app, $config, $time_start;

        self::init();
        $config['log_file'] = "/system/.dev.log";
        // создаем главный Silex апп
        $app = new Silex\Application();
        // зададим общий конфиг
        $app->config = $config;
        // режим отладки (см dev.log)
        if ($app->config['enable_app_debug'] == true)
        {
            $app['debug'] = $config['enable_app_debug'];
            /// настраиваем в dev.log отладку роутов
            $app->register(new Silex\Provider\MonologServiceProvider(), array(
                'monolog.logfile' => __DIR__ . '/' . $config['log_file'],
                'monolog.name' => "008",
            ));
        }

        // дб автолоадер
        \go\DB\autoloadRegister();
        // подключеемся к базе
        $app->db = go\DB\DB::create($config['db'], 'mysql');
        $app->db->setDebug('goDBDebug');
        $app->db->query('SET NAMES utf8');

        //==================================================================================
        // хандлер ошибок
        $app->error(function (\Exception $e, $code)
        {
            global $app;

            $res = '<div style="color:red">Извините, произошла ошибка: ' . $code . "</div>";
            if ($app->config['dev_mode'])
            {
                $res .= "<br/>" . $e->getMessage();
            }

            mlog("error $id: (" . $_SERVER['REQUEST_URI'] . ") $code [" . $e->getMessage() . "] " . $_SERVER['HTTP_REFERER']);
            /* if($app->db != null)
            {

            $id = $app->db->query("INSERT INTO evo_errors SET url=?, msg=?,code=?i, ip=?,sess=?,ref=?",
            array($_SERVER['REQUEST_URI'],$res, $code,$_SERVER['REMOTE_ADDR'], session_id(),$_SERVER['HTTP_REFERER']),'id');

            } */
            header($code . " HTTP/1.0");
            $res .= "<br/>ID: " . sprintf("%019d", $id);
            return new Response($res);
        });
        self::registerOverloads();
    }
    public static function registerOverloads()
    {
        global $app, $q;
        //$query ='query';
        $q = create_function('$q,$p,$m', 'return $app->db->query($q,$p,$m);');
        //echo("app->query = ".print_r($app->query));
    }

    public static function rand_string($num)
    {
        $al = "0987654321QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm ~`'\\%&$#-|+!@";

        for ($i = 0; $i < $num; $i++)
        {
            $let = $al{
                mt_rand(0, strlen($al))};
            $out .= $let;
        }
        return $out;
    }
    public static function keyhash($str)
    {
        return sprintf("%x", crc32($str));
    }

    public static function mut()
    {
        header("X-Powered-By: PHP/5.4.44-0+deb7u1", true);
        // header("User-Agent: $_SERVER[HTTP_USER_AGENT]", true);
        // header("X-Client: $_SERVER[REMOTE_ADDR]:$_SERVER[REMOTE_PORT] ".sprintf("%x",crc32($_SERVER['REMOTE_ADDR'])));
        // header("Via: SERV".mt_rand(0,3));
        // header("Host: ".$_SERVER['REMOTE_ADDR']);
        // header("Accept: */x");
        /*    do
        {
        $val=(self::rand_string(mt_rand(3,10)));
        header(self::rand_string(mt_rand(3,100)).": ".$val);
        } while(mt_rand(0,5)!=1);*/

        // foreach($_SERVER as $k => $v)
        // {
        //     if(!strstr($k, "HTTP_"))
        //         continue;
        //     preg_match("#^HTTP_(.*)$#si", $k, $m);
        //     $k = $m[1];
        //     $k = trim($k);
        //     $k = str_replace("_", "-", $k);
        //     $k = ucwords($k);
        //     if(mt_rand(1,109)>5)
        //         header("$k: $v");
        // }
    }
    public static function translate($string)
    {
        $converter = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v',
            'г' => 'g', 'д' => 'd', 'е' => 'e',
            'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
            'и' => 'i', 'й' => 'y', 'к' => 'k',
            'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r',
            'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
            'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            'А' => 'A', 'Б' => 'B', 'В' => 'V',
            'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
            'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
            'И' => 'I', 'Й' => 'Y', 'К' => 'K',
            'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R',
            'С' => 'S', 'Т' => 'T', 'У' => 'U',
            'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
            'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
            'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        );
        return strtr(($string), $converter);
    }

    public static function post_check()
    {

        $scan['what'] = 1;
        foreach ($_GET as $k => $v)
        {
            if ($scan[$k])
            {
                $_GET[$k] = mysql_real_escape_string($_GET[$k]);
            }

        }
    }

    public static function get_file_ver($file)
    {
        return self::crc(self::get_file_mtime($file));
    }

    public static function get_file_mtime($file)
    {
        $stat = stat($file);
        return $stat['mtime'];
    }

    public static function crc($str)
    {
        return sprintf("%u", crc32($str));
    }

    public static function unify_strings($str, $del)
    {
        $strings = explode($del, $str);
        foreach ($strings as $str)
        {
            $str = trim($str);
            if (in_array($str, $strs))
            {
                continue;
            }

            $strs[] = $str;
            if (strlen($out))
            {
                $out .= " $del ";
            }

            $out .= $str;
        }
        return $out;
    }

    public static function join_strings($str, $del)
    {
        $str = str_replace("(обл)", "обл.", $str);
        $str = str_replace("(г)", "", $str);
        $str = str_replace("(р-н)", "р-н", $str);

        $strings = explode($del, $str);
        //mlog("joinn [$str] ".count($strings));
        foreach ($strings as $str)
        {
            $str = trim($str);
            if (empty($str))
            {
                continue;
            }

            if (strlen($out))
            {
                $out .= ", ";
            }

            $out .= $str;
        }
        //    mlog("res: [$out]");
        $out = str_replace(", район,", ",", $out);
        return $out;
    }

    public static function send_mail($to, $subject, $msg)
    {
        $cc = array('sergey.efimov@evodesign.ru');
        if (empty($msg))
        {
            mlog("message is empty");
            return;
        }
        else
        {
            mlog("send_mail " . strlen($msg));
        }
        $_to = $to;
        if (is_array($to))
        {
            $cc  = array_merge($cc, $to);
            $_to = array_pop($cc);
        }

        $mail     = new MimeMail("sergey.efimov@evodesign.ru", $_to, 'info@008.ru', 'info@008.ru');
        $mail->Cc = $cc;
        //        $msg=utf8_encode($msg);
        $mail->buildMessage($subject, $msg);
        $ret = $mail->sendmail();

        $mail     = new MimeMail($_to, $_to, 'info@008.ru', 'info@008.ru');
        $mail->Cc = $cc;
        //$msg=utf8_encode($msg);
        //$msg=iconv('utf-8','windows-1251',$msg);
        $mail->buildMessage($subject, $msg);

        $ret = $mail->sendmail();
        mlog("send_mail($_to, $subject, " . strlen($msg) . ") = $ret");

        //echo $msg;
        return $ret;
    }

    public static function normalize_tel($tel)
    {
        global $app;
        if (strstr($tel, "("))
        {
            return "+7 " . $tel;
        }
        else
        {
            return "+7 (812) " . $tel;
        }

    }

    public static function show_debug()
    {
        global $app;

        if (isset($_GET['SHOW_SQL']))
        {
            $app->config['enable_db_debug']   = true;
            $app->config['enable_html_debug'] = true;
        }
        if (isset($_GET['XCACHE_DUMP']))
        {
            $app->config['memcached_debug']   = true;
            $app->config['enable_html_debug'] = true;
        }
        if (isset($_GET['XDEBUG_PROFILE']))
        {
            echo "<h3><a href='/webgrind/'>
				профайл</a></h3><br/>";
        }
        if (isset($_GET['CLEAR_CACHE']))
        {
            $app->config['memcached_return_null'] = true;
        }
    }
    public static function check_human()
    {
        global $app;

        if (empty($_SESSION['trackStartTime']))
        {
            $_SESSION['trackStartTime'] = microtime_float();
            $app->system['newtrack']    = true;
            setcookie('frame', 0, time() + 9999999);
            return true;
        }
        else
        {
            setcookie('frame_' . $_SERVER['REQUEST_URI'], $_COOKIE['frame_' . $_SERVER['REQUEST_URI']] + 1, time() + 9999999);

            $hashere = $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_check'];
            if (!empty($hashere))
            {

                if (!$app->system['newtrack'] && empty($_COOKIE[$hashere])
                    && (time()
                         - $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']) >= 2)
                {
                    stat::inc("frame_cookie_desync");
                    if ((time()
                         - $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']) <= 1200)
                    {
                        setcookie($app->config['bot_sign_cookie'], $_SERVER['REMOTE_PORT'], time() + 9999999);
                        $_SESSION['isBot'] += 15.0;
                        stat::inc("bot_detects");
                        mlog("bot detected $_SERVER[UNIQUE_ID] $_SESSION[isBot]% (empty $hashere for $_SERVER[REQUEST_URI]) created: " . (time()
                             - $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']) . " secs ago, " .
                            (time() - $_SESSION['trackStartTime']) . " secs tracked");
                        $app->system['bot_detected'] = true;
                    }
                    else
                    {
                        //    mlog("reset $_SERVER[REQUEST_URI] ".(time()
                        //-$_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']));
                        unset($_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']);
                        unset($_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_check']);
                    }

                }
                else
                {

                    unset($_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_check']);
                }
            }

            if (count($_SESSION['checks']) > 115)
            {
                array_pop($_SESSION['checks']);
            }

            $hashkey                                                     = hash('crc32', $_SERVER['REQUEST_URI'] . $_SERVER['REMOTE_PORT'] . $_SERVER['REMOTE_ADDR']);
            $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_check'] = $hashkey;
            $_SESSION['checks'][$_SERVER['REQUEST_URI']]['cookie_time']  = time();
            setcookie($hashkey, $_SERVER['REMOTE_PORT'], time() + 2201);
            if ($app->system['bot_detected'])
            {
                return false;
            }

            return true;
        }
    }
}
