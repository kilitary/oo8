var loading = false;
var prev_search_key = '';
var tempkey;
var curpage = 1;
var val;
var base_coords = [59.772899, 30.056551];
var company_coords = [0, 0];
var company_bounds;
var config;
var cID;
var entry = 0;
var inresolve = 0;

function limitText(limitField, limitCount, limitNum)
{
   if(limitField.value.length > limitNum)
   {
      limitField.value = limitField.value.substring(0, limitNum);
   }
   else
   {
      limitCount.value = limitNum - limitField.value.length;
   }
}

window.onerror = function myErrorHandler(errorMsg, url, lineNumber)
{
   console.log("error: " + errorMsg);

   // $.get("/jsErrors.php",
   // {
   //    errorMsg: errorMsg,
   //    url: url,
   //    lineNumber: lineNumber
   // });
   return false;
}

function clearMsg()
{
   $('#msg').fadeOut();
}

function DelStuff(sID)
{
   $.get("/system/ajax/delstuff/?sID=" + sID, function()
   {
      console.log("dleted " + sID);
      $('#stuff' + sID).remove();
   });
}

function Submit()
{
   console.log("saving ...");

   $('#mainform').submit();
   $('#contentdiv').html("сохраняем...");
   return;

   $('#msg').show();
   $('#savebutton').attr('disabled', 'disabled');
   var msg = $('#mainform').serialize();
   $.ajax(
   {
      type: 'POST',
      url: '/system/firms/edit/' + cID + "/",
      data: msg,
      success: function(data)
      {
         data = JSON.parse(data);

         $('#msg').html(data.msg);
         $('#savebutton').removeAttr('disabled');
         console.log("saved");
         setTimeout(clearMsg, 1500);
      },
      error: function(xhr, str)
      {
         console.log('Возникла ошибка: ' + xhr.responseCode);
         console.log("not saved");
         $('#savebutton').removeAttr('disabled');
      }
   });

}

ymaps.ready(function()
{
   $('#detectmetrobtn').removeAttr('disabled');
});

function DeleteMetro(cid)
{
   if(!confirm("вы уверены?"))
      return;
   $.get("/system/ajax/deletemetro/"+cid, function(d)
   {
      console.log("deleted metro");
      $('#metrolist').remove();
   });
}

function DetectMetro()
{
   $('#map').empty();
   street = $('#street').val();
   dom = $('#dom').val();
   region = $('#region').val();
   district = $('#district').val();

   if(!street.length)
   {
      $('#metrodiv').html("<strong>не задан адрес</strong>");
      return;
   }

   var queryAddr = region + ", " + district + " район, " + street + " " + dom;
   console.log("queryAddr[", queryAddr, "]");
   $('#metrodiv').html(
      "<br/><i>определяем [" + queryAddr + "] ...</i><br/><br/>");
   ymaps
      .geocode(queryAddr,
      {
         /**
          * Опции запроса
          * 
          * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/geocode.xml
          */
         // boundedBy: myMap.getBounds(), // Сортировка результатов от
         // центра окна карты
         // strictBounds: true, // Вместе с опцией boundedBy будет искать
         // строго внутри области, указанной в boundedBy
         results: 1
            // Если нужен только один результат, экономим трафик пользователей
      })
      .then(
         function(res)
         {
            var name;
            // Выбираем первый результат геокодирования.
            console.log("res=", res);
            var firstGeoObject = res.geoObjects.get(0),
               // Координаты геообъекта.
               company_coords = firstGeoObject.geometry.getCoordinates(),
               // Область видимости геообъекта.
               company_bounds = firstGeoObject.properties.get('boundedBy');
            console.log(street + " " + dom + " : ", company_coords);
            $('#sh').val(company_coords[0]);
            $('#dl').val(company_coords[1]);

            $('#map').html('').hide();
            var myMap = new ymaps.Map('map',
            {
               center: company_coords,
               zoom: 2
            },
            {
               searchControlProvider: 'yandex#search'
            });

            // Добавляем первый найденный геообъект на карту.
            myMap.geoObjects.add(firstGeoObject);
            // Масштабируем карту на область видимости геообъекта.
            myMap.setBounds(company_bounds,
            {
               checkZoomRange: true
                  // проверяем наличие тайлов на данном масштабе.
            });

            for(var i in config.metros)
            {
               inresolve++;
               name = config.metros[i];
               // console.log("inresolve ",inresolve);
               // $('#metrodiv').append(name+" ");

               ymaps
                  .geocode("россия, санкт-петербург, метро " + name,
                  {
                     /**
                      * Опции запроса
                      * 
                      * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/geocode.xml
                      */
                     // boundedBy: myMap.getBounds(),
                     // // Сортировка результатов от
                     // центра окна карты
                     // strictBounds: true, // Вместе
                     // с опцией boundedBy будет
                     // искать строго внутри области,
                     // указанной в boundedBy
                     results: 1
                        // Если нужен только один результат,
                        // экономим трафик пользователей
                  })
                  .then(
                     function(res)
                     {
                        // console.log("res",res);
                        var metro_coords;
                        // Выбираем первый результат
                        // геокодирования.
                        var firstGeoObject = res.geoObjects.get(0),
                           // Координаты геообъекта.
                           metro_coords = firstGeoObject.geometry
                           .getCoordinates(),
                           // Область видимости геообъекта.
                           bounds = firstGeoObject.properties
                           .get('boundedBy');
                        // console.log("res=",res);
                        // Добавляем первый найденный
                        // геообъект на карту.

                        // Масштабируем карту на область
                        // видимости геообъекта.

                        // console.log('координаты
                        // '+place, metro_coords);

                        var multiRoute = new ymaps.multiRouter.MultiRoute(
                        {
                           // Описание опорных
                           // точек
                           // мультимаршрута.
                           referencePoints: [metro_coords,
                              company_coords
                           ],
                           // Параметры
                           // маршрутизации.
                           params:
                           {
                              // Ограничение
                              // на
                              // максимальное
                              // количество
                              // маршрутов,
                              // возвращаемое
                              // маршрутизатором.
                              results: 1
                           }
                        },
                        {
                           // Автоматически
                           // устанавливать
                           // границы карты
                           // так, чтобы
                           // маршрут был виден
                           // целиком.
                           boundsAutoApply: true
                        });
                        // $('#map').show();
                        // console.log("multiRoute
                        // ",multiRoute);
                        var route = multiRoute.getRoutes();
                        // console.log("route=",route);
                        // console.log('prop=',route.properties);
                        var distance = route.properties['distance'];
                        // console.log("distance=",distance);
                        var mname = res.metaData.geocoder.request;
                        // console.log("mname=",mname);
                        // mname=mname.split(" ");
                        // console.log("spl",mname);
                        var n = mname.indexOf("о ");
                        mname = mname
                           .substring(n + 2, mname.length);

                        var dist = ymaps.formatter.distance(
                           ymaps.coordSystem.geo.getDistance(
                              company_coords, metro_coords),
                           2);
                        // console.log(mname+" raw:
                        // ",ymaps.coordSystem.geo.getDistance(company_coords,
                        // metro_coords));
                        // console.log(mname+"
                        // dist=",dist);

                        var metre;
                        if(dist.indexOf("&#160;м") != -1)
                           metre = 'м';
                        else
                           metre = 'км';
                        // console.log("["+dist+"]
                        // "+metre);

                        var expdist = dist.split("&");

                        // expdist =
                        // expdist[1].split(";")[0];
                        expdist = parseFloat(expdist[0]);

                        // console.log(res.metaData.geocoder.request,"
                        // expdist: ",expdist);
                        // console.log("расстояние
                        // "+expdist);

                        // var price =
                        // parseFloat(basePrice) +
                        // (expdist*pricePerKm);
                        // console.log("res.metaData",res.metaData);
                        // console.log("res.metaData.geoCoder",res.metaData.geoCoder);

                        // console.log("mname2=",mname,n);

                        if((metre == 'м' && (parseFloat(expdist) < 1000) || expdist <= 5))
                        {
                           if((metre == 'м' && parseFloat(expdist) <= 1000) || parseFloat(expdist) <=
                              2.0)
                           {
                              myMap.geoObjects.add(multiRoute);
                              // myMap.geoObjects.add(multiRoute);
                              checked = 'checked';
                           }
                           else
                           {
                              checked = '';
                           }

                           $('#metrodiv')
                              .append(
                                 "<div style='clear:both;color:darkblue;left:-18px;position:relative'><label><input " +
                                 checked + " type=checkbox name='metro[]' value='" + mname + "|" +
                                 expdist + "|" + metre + "'>" + mname + "</label> " + expdist +
                                 metre + "</div>");
                           myMap.geoObjects.add(firstGeoObject);
                           myMap.setBounds(company_bounds,
                           {
                              checkZoomRange: true
                                 // проверяем
                                 // наличие
                                 // тайлов на
                                 // данном
                                 // масштабе.
                           });
                        }
                        else
                           $('#metrodiv').append(
                              "<div style='clear:both;color:gray'>" + mname + " " + expdist + " " +
                              metre + "</div>");

                        // console.log("inresolve
                        // ",inresolve);
                        if(inresolve-- <= 1)
                        {
                           $('#map').show();

                        }
                        // else
                        // console.log("res",resolve);
                     });
            }

         });

}

function toggleCats()
{

   var cID = $('#cID').val();
   // console.log("owncats ",$('#owncats').prop('checked'));
   if($('#owncats').prop('checked') == false)
   {
      $('#tree').hide();
      $.get("/system/ajax/useowncat/",
      {
         cID: cID
      }, function(d)
      {
         console.log("tgl owncat");

      });
   }
   else
   {
      $('#tree').show();
   }
   $('.cats').show().css("color", "darkblue");
}

function SaveStuff(id)
{
   $('#savemsg').html("<span style='color:green'>сохраняется...</span>");
   var caption = $('#stuffcaption').val();
   var notice = CKEDITOR.instances.stuffnotice.getData();
   var body = CKEDITOR.instances.stuffbody.getData();
   var sdateon = $('#sdateon').val();
   var sdateoff = $('#sdateoff').val();
   var stype = $('#stype').val();
   var sID = parseInt($('#sID').val());

   console.log("cID=", cID + " body=", body, " notice=", notice);
   $.post("/system/ajax/savestuff/",
   {
      sdateon: sdateon,
      sdateoff: sdateoff,
      sID: id,
      cID: cID,
      caption: caption,
      notice: notice,
      body: body,
      stype: stype,
      sID: sID
   }, function(d)
   {
      console.log("saved");
      $('#stuffeditor').html("<span style='color:green'>сохранено</span>");
      document.location.href = document.location.href;

   });
}

function DelContact(id)
{
   if(!confirm("вы уверены?"))
      return;
   console.log("delcontact " + id);
   $.get("/system/ajax/removecontact/",
   {
      faID: id
   }, function(d)
   {
      console.log("deleted " + id);
      $('#contact' + id).remove();
   });
}

function NewPage()
{
   var title = prompt("Название страницы");
   $.get("/system/ajax/addpage/",
   {
      'title': title
   }, function(id)
   {
      document.location.href = '/system/pages/edit/' + parseInt(id) + '/';
   });
}

function PageDelete(pID)
{
   if(!confirm("вы уверены?"))
      return;
   $.get("/system/ajax/delpage/",
   {
      'pID': pID
   }, function(id)
   {
      document.location.href = '/system/pages/';
   });
}

function RubricDelete(rID)
{
   if(!confirm("вы уверены?"))
      return;
   $.get("/system/ajax/delrubric/",
   {
      'rID': rID
   }, function(id)
   {
      document.location.href = '/system/rubrics/';
   });
}

function RubricNew(rID)
{
   var newcat = prompt("введите англоязычный код рубрики (например: vacancy)");

   if(typeof(newcat) == 'undefined' || !newcat.length)
      return;

   $.get("/system/ajax/addrubric/",
   {
      cat: newcat,
      parent: rID
   }, function(id)
   {
      if(id == 0)
         alert("Ошибка: такой код уже используется");
      else
         document.location.href = '/system/rubrics/edit/' + parseInt(id) + '/';
   });
}

function load_firms()
{
   console.log("loading page " + curpage);
   $.get("/system/ajax/firms/search/" + val + '/p/' + curpage + '/',
      function(d)
      {
         if(curpage == 1)
            $('#firmdiv').html(d);
         else
            $('#firmdiv').html($('#firmdiv').html() + d);

         // $('input[type=checkbox]').focus();
         prev_search_key = tempkey;
         // setTimeout(toggleLoadState,100) //wait ten seconds before
         // continuing
      });

}


function UrlLocation(url)
{
   document.location.href = url;
}

function SelFindFirmKey(key)
{
   $('#firmkey').val(key);
   $("#result-search").hide();
   val = encodeURIComponent(key).replace(/%20/g, '+');
   $('#firmdiv').html("<div>поиск ...</div>");
   load_firms();
}

function showCatSelDiv()
{
   $('#catseldiv').toggle();
}

function ChangeToSelectedFirm()
{
   var id = $('#firmsel').val();
   console.log("going " + id);
   UrlLocation("/system/firms/edit/" + id + "/");

}

function ToggleRubrics()
{
   $('.cwrapper_hidden').toggle();
}

function AddContact()
{
   $('.newcontactlink').remove();
   // $('#original_contact > input').val(config.lastpos);
   $('#contacts')
      .append($('#original_contact').html())
      .append(
         "<br/><a class=newcontactlink href='javascript:AddContact()'>+ добавить еше</a><br/>");;

   console.log("set lastpos = ", config.lastpos);
   config.lastpos--;
}

function ShowHelp(msg)
{
   $("#dialog-message").html(msg).dialog(
   {
      modal: true,
      buttons:
      {
         ясно: function()
         {
            $(this).dialog("close");
         }
      }
   });
}

function NewStuff(type, cID)
{
   $('#stuffeditor').load("/system/stuffeditor/new/" + type + "/?cID=" + cID,
      function() {

      }).show();

}

function EditStuff(id, type)
{
   $('#stuffeditor').load("/system/stuffeditor/" + id + "/" + type + "/", function() {

   }).show();

}

function DeleteCompany(cid)
{
   if(confirm("удалить компанию и все её данные?"))
   {
      document.location.href = '/system/delete/' + cid + '/';
   }
}

$(function()
{
   $('#topmsg').html("получение конфига...");

   // $( "#devview" ).dialog();

   $.getJSON("/system/ajax/getconfig/",
   {
      cID: cID
   }, function(cfg)
   {
      // config = JSON.parse(cfg);
      config = cfg;
      //  console.log("Config:", config);
      $('#topmsg').html("");
      // config.metros;
   });

   $('.tabs').tabs(
   {
      activate: function(event, ui)
      {
         // alert(ui.newPanel.attr('id'));
         $('#stuffeditor').hide();
         $.cookie("currentTab", ui.newPanel.attr('idx'));
         // console.log("tab cookie: ",$.cookie("currentTab"));
      }
   });

   // if(typeof($.cookie('currentTab')) != 'undefined')
   // {
   //    // alert('sw'+$.cookie('currentTab'));
   //    $('.tabs').tabs('option', 'active', $.cookie('currentTab'));
   // }

   $('#content').show();

   // $('#waitmsg').remove();
   $('#waitmsg').remove();
   // $('input, select').styler({selectSearch: true});

   $('body').click(function()
   {
      $("#result-search").hide();
   });

   $("#district").keyup(function()
   {
      var search = $("#district").val();
      if(search.length > 0)
      {
         $.ajax(
         {
            type: "GET",
            url: "/system/ajax/suggestdistrict/",
            data:
            {
               "search": search
            },
            cache: true,
            success: function(response)
            {
               $('#result-search').css(
               {
                  position: 'relative',
                  top: $('#district').css('top'),
                  left: $('#district').css('left')
               });
               $("#result-search").show();
               $("#result-search").html(response);
            }
         });
      }
      else
      {
         $("#result-search").hide();
      }
   });

   $("#street").keyup(function()
   {
      var search = $("#street").val();
      if(search.length > 0)
      {
         $.ajax(
         {
            type: "GET",
            url: "/system/ajax/suggestway/",
            data:
            {
               "search": search
            },
            cache: true,
            success: function(response)
            {
               $("#result-search").show();
               $("#result-search").html(response);
            }
         });
      }
      else
      {
         $("#result-search").hide();
      }
   });

   $("#firmkey").keyup(function()
   {
      var search = $("#firmkey").val();
      if(search.length > 0)
      {
         $.ajax(
         {
            type: "GET",
            url: "/system/ajax/suggest/",
            data:
            {
               "search": search
            },
            cache: false,
            success: function(response)
            {
               $("#result-search").show();
               $("#result-search").html(response);
            }
         });
      }
      else
      {
         $("#result-search").hide();
      }
   });

   var dateon = $('#dateon').attr('initvalue');
   var dateoff = $('#dateoff').attr('initvalue');

   var adateon = $('#adateon').attr('value');
   var adateoff = $('#adateoff').attr('value');

   var actual = $('#actual_date').attr('initvalue');

   /*
    * $('.datepicker').pickmeup({ format : 'y-m-d', hide_on_select: true });
    */

   $(".datepicker").datepicker().datepicker("option", "dateFormat", "dd.mm.yy");
   $('#actual_date').val(actual);
   $('#dateon').val(dateon);
   $('#dateoff').val(dateoff);
   $('#adateon').val(adateon);
   $('#adateoff').val(adateoff);
   // $( ".datepicker" );

   if(typeof(tinymce) != 'undefined')
   {

      tinymce.init(
      {
         selector: '.htmlarea',
         language: 'ru',
         language_url: '/system/assets/ru.js'
      });
      console.log("tinymce initialized");
   }
   /*
    * $( document ).tooltip({ position: { my: "center bottom-20", at: "center
    * top", using: function( position, feedback ) { $( this ).css( position ); $( "<div>" )
    * .addClass( "arrow" ) .addClass( feedback.vertical ) .addClass(
    * feedback.horizontal ) .appendTo( this ); } } });
    */

   $('#firmkey').bind('keypress', function(e)
   {
      val = $('#firmkey').val();

      tempkey = val;

      if(val.length <= 1 || loading || prev_search_key == val)
         return;

      // $('input[type=checkbox]').focus();
      prev_search_key = tempkey;
      // loading = true;
      console.log("search " + val);
      val = encodeURIComponent(val).replace(/%20/g, '+');
      $('#firmdiv').html("<div>поиск ...</div>");

      curpage = 1;
      load_firms();
   });

});
