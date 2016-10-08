<html>

<head>

   <link rel="stylesheet" type="text/css" href="/system/assets/jquery.tree.min.css" />
   <link href="/assets/jquery.formstyler.css" rel="stylesheet" />
   <link href="/assets/css/editor.css" rel="stylesheet" />
   <link rel="stylesheet" href="/assets/css/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="/assets/css/jQuery.Tree.css" />
   <link href="/css/008.css?v=<?=Core::crc(Core::get_file_mtime($_SERVER['DOCUMENT_ROOT']." /it_sites/008.ru/templates/css/008.css
   "))?>" type="text/css" rel="stylesheet" />
   <link href="/system/assets/admin.css?v=<?=Core::crc(Core::get_file_mtime($_SERVER['DOCUMENT_ROOT']."
   /system/assets/admin.css "))?>" type="text/css" rel="stylesheet" />

   <script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
   <script type='text/javascript' src="/assets/js/datepicker-ru.js"></script>
   <script type="text/javascript" src="/system/assets/jquery.tree.min.js"></script>
   <script src="/assets/jquery.formstyler.min.js"></script>
   <script src="/it_sites/008.ru/templates/js/it.base.js"></script>
   <script src="/assets/js/ckeditor/ckeditor.js"></script>
   <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
   <script src="/assets/js/jquery.cookie.js"></script>
   <script src="/assets/js/jQuery.Tree.js"></script>
   <script type="text/javascript" src="/system/assets/admin.js?v=<?=Core::crc(Core::get_file_mtime($_SERVER['DOCUMENT_ROOT']."
   /system/assets/admin.js "))?>"></script>

   <link rel="stylesheet" type="text/css" href="/assets/redactor/css/style.css" />
   <link rel="stylesheet" href="/assets/redactor/redactor.css" />
   <script type="text/javascript" src="/assets/redactor/redactor.min.js"></script>

   <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">
   <script type="text/javascript" src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
 
<body>
   <div class="div_menu adm_menu">
   <!--   <?if($_SERVER['REQUEST_SCHEME']!='https'):?>
      <strong style='color:red'>пожалуйста используйте безопасный <a href='https://<?=$_SERVER['HTTP_HOST']?><?=$_SERVER['REQUEST_URI']?>'>https протокол</a></strong><br/>
      <?endif?>-->
      <div class="top_menu_item" id="menu_firms" style="background-color: rgb(17, 81, 147);"> <a href="#" class="top_menu_item" id="a_firms" style="color: rgb(255, 255, 255);">Фирмы</a></div>
      <div class="top_menu_item" id="menu_m1"> <a href="#" class="top_menu_item" id="a_m1">Наполнение сайта</a></div>
      <div class="top_menu_item" id="menu_m2"> <a href="#" class="top_menu_item" id="a_m2">статистика</a></div>

      <div style="vertical-align:top;float:right;margin-right:5px;">
         [
         <?=$_SESSION['user']['name']?>]
            <a href="/system/debug/" class="debuginfo">debug info</a> | <a href="/system/logout/">Завершить сеанс</a>            | <a href="/system/">сводное инфо</a>
      </div>
      <div style="width:100%;float:left;">
         <div class="advanced_menu color" id="adv_firms" style="display: block;">
            <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/firms/" class="adv_menu_item" id="a_allfirms"><img class="adv_menu_item_on" src="/itlib/icons/32x32/i32x064ec46fc4.gif" alt="Все компании" border="0" width="32" height="32"><br>Все компании</a></span></td>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/firms/new/" class="adv_menu_item" id="a_firms_addeditfirm"><img class="adv_menu_item_off" src="/itlib/icons/32x32/i32xnew.gif" alt="Добавить&nbsp;компанию" border="0" width="32" height="32" style="opacity: 0.7; border: 1px solid rgb(0, 0, 0);"><br>Добавить&nbsp;компанию</a></span></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="advanced_menu color" id="adv_m1" style="display:none;">
            <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/pages/" class="adv_menu_item" id="a_adm_trees"><img class="adv_menu_item_off" src="/itlib/icons/32x32/i32x064ec46fc4.gif" alt="Страницы" border="0" width="32" height="32" style="opacity: 0.7;"><br>Страницы</a></span></td>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/rubrics/" class="adv_menu_item" id="a_adm_moduls_stuffs"><img class="adv_menu_item_off" src="/itlib/icons/32x32/i32xbe5fdf2611.gif" alt="Материалы" border="0" width="32" height="32" style="opacity: 0.7;"><br>Рубрики</a></span></td>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/banners/" class="adv_menu_item" id="a_adm_moduls_news"><img class="adv_menu_item_off" src="/itlib/icons/32x32/i32xa91b60e014.gif" alt="Новости" border="0" width="32" height="32" style="opacity: 0.7;"><br>Баннеры</a></span></td>
                     <td align="center" style="width:auto;padding:0 5px"><span><a href="/system/attribs/" class="adv_menu_item" id="a_adm_moduls_spr"><img class="adv_menu_item_off" src="/itlib/icons/32x32/abc.gif" alt="Справочники" border="0" width="32" height="32" style="opacity: 0.7;"><br>Аттрибуты</a></span></td>

                  </tr>
               </tbody>
            </table>
         </div>

         <div class="advanced_menu color" id="adv_m2" style="display: none;">
            <table border="0" cellspacing="0" cellpadding="0">
               <tbody>
                  <tr>

                     <td align="center" style="width:auto;padding:0 5px"><span><a class="adv_menu_item" id="a_adm_moduls_spr" href="/system/stats/spr/"><img class="adv_menu_item_off" src="/itlib/icons/32x32/abc.gif" alt="Справочники" border="0" width="32" height="32" style="opacity: 0.7;"><br>тарифы</a></span></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div id=waitmsg>секундочку...</div>
   <div class=clear></div>
   <div id=content>
