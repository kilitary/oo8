<?php

/////////////////////////////////////////////
/// Evodesign Internet Promotion Company ///
/// 008.ru Engine (c) 2015.             ///
/// Chief mail:   info@evodesign.ru    ///
/// Support mail: support@evodesign.ru///
////////////////////////////////////////

function isAdminIp()
{
    $ips = array('37.143.23.90', '188.134.30.227');

    if(in_array($_SERVER['REMOTE_ADDR'], $ips))
        return true;
    return false;
}


function sanitizeOutput($buffer)
{
    $search = array(
        '/\>[^\S ]+/s', // strip whitespaces after tags, except space
        '/[^\S ]+\</s', // strip whitespaces before tags, except space
        '/(\s)+/s', // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1',
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

function parseTemplate($template, $params = array())
{
    global $app, $totalDBtime;

    extract($params);

    if (!is_file($_SERVER['DOCUMENT_ROOT'] . "/templates/$template"))
    {
        die("нету темплейта '" . $_SERVER['DOCUMENT_ROOT'] . "/templates/$template'<br/>" .
            " [<a href='$_SERVER[HTTP_REFERER]'>назад</a>]");
    }

    ob_start("ob_gzhandler");
    include_once $_SERVER['DOCUMENT_ROOT'] . "/templates/$template";
    $data = ob_get_clean();
    ob_end_clean();

    if ($app->config['compact_page'] == true)
    {
        $data = preg_replace("#([\n\r\t]*)#Usmi", "", $data);
    }

    return $data;
}

function udate($format = 'u', $utimestamp = null)
{
    if (is_null($utimestamp))
    {
        $utimestamp = microtime(true);
    }

    $timestamp    = floor($utimestamp);
    $milliseconds = round(($utimestamp - $timestamp) * 1000000);

    return date(preg_replace('`(?<!\\\\)u`', sprintf("%04d", substr($milliseconds, 0, 4)), $format), $timestamp);
}

function microtime_float()
{
    list($u, $s) = explode(' ', microtime());
    return ((float) $u + (float) $s);
}

function mlog($msg)
{
    global $app;
    static $fail = false;

    if ($fail || $_SERVER['REMOTE_ADDR'] == '62.210.169.39')
    {
        return;
    }

    $app->system['mlog_calls']++;

    if (!strstr($msg, "\n"))
    {
        $msg .= "\r\n";
    }

    if (empty($_SERVER['DOCUMENT_ROOT']))
    {
        echo date("H:m:s") . " " . $msg;
        $root = "/home/oo8/html";

    }
    else
    {
        $root = $_SERVER['DOCUMENT_ROOT'];
    }
    $file = $root . "/" . $app->config['log_file'];
    $fp   = fopen($file, "a+");
    if (!$fp)
    {
        //echo("mlog failed $file");
        $fail = true;
    }
    if ($_SERVER['REMOTE_ADDR'] == '195.88.209.190')
    {
        $host = 'server';
    }
    else if ($_SERVER['REMOTE_ADDR'])
    {
        $host = $_SERVER['REMOTE_ADDR'];
    }
    else
    {
        $host = "console";
    }

    fwrite($fp, udate("H:i:s.u") . " [" . $host . "] " . $msg);
    fclose($fp);
    return;
/*     if(!isset($app['monolog']))
{
return;
}

$app['monolog']->addInfo($msg);
if($app->config['enable_html_debug'])
echo "<div>$msg</div>"; */
}

function goDBDebug($query, $duration, $info)
{
    global $app;
    global $totalDBtime;
    static $num = 0;

    $num++;
    $app->system['db_querys']++;
    $app->system['totalDBtime'] += $duration;

    if ($app->config['enable_db_slow_log'] == true && $duration >= $app->config['db_slow_log_duration'])
    {
        $query = preg_replace("#(\s{2,})#smi", " ", $query);
        //$query = preg_replace("#(\n|\r)#smi", "", $query);
        //    $query = preg_replace("#(FROM|WHERE|ORDER|LIMIT|LEFT|GROUP|ON DUPLICATE)#smi", " $1", $query);
        mlog("SLOW QUERY [$query] " . sprintf("%.4f", $duration));
    }

    if ($app->config['enable_db_debug'])
    {
        $query = preg_replace("#(\s{2,})#smi", " ", $query);
        //$query = preg_replace("#(\n|\r)#smi", "", $query);
        //$query = preg_replace("#(FROM|WHERE|ORDER|LIMIT|LEFT|GROUP|ON DUPLICATE)#smi", " $1", $query);

        //$query = preg_replace("#(ORDER)#smi", " $1", $query);

        $str = "[#" . sprintf("%03d", $num) . ":" . sprintf("%07X", crc32($_SERVER['UNIQUE_ID'])) . "] [" .
        sprintf("%.4f", $duration) . ":" . sprintf("%.4f", $app->system['totalDBtime']) . "] " . $query . "\r\n";
        mlog($str);

        if ($app->config['enable_html_debug'] == true)
        {
            echo "$str" . '<br />';
        }

    }
}

function rus2translit($string)
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
    return strtolower(strtr($string, $converter));
}

function str2url($str)
{
    // переводим в транслит
    $str = rus2translit($str);
    // в нижний регистр
    $str = strtolower($str);
    // заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
    // удаляем начальные и конечные '-'
    $str = trim($str, "-");
    return $str;
}
