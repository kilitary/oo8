/*** www.it24.ru ***************************************************************
 * Base class for it24.ru Library
 *    _    ____ _    _    _____  _    _
 *  _| |  / __ \ |  | |  |  _  \| |  | |
 * {_} |_|_| | | |  | |  | {_}  | |  | |
 *  _|  /    | | |__| |  |  ___/| |  | |
 * | | |    / / \___| |  | |\ \ | |  | |
 * | | |__ / /_     | |  | | \ \| |__| |
 * |_|\__/_____|    |_|{}|_|  \_/\_____|
 *
 *** www.it24.ru ***************************************************************/

var Base = {
  translations: {
    ru: {
        loading:  '<div align=center><img src=/itlib/loaders/2.gif alt="Обновление информации"></div>',
        del:  'Вы действительно хотите удалить?'
        }
  },
  images: {
    on:           '/itlib/buy/c-buy-on.gif',
    off:          '/itlib/buy/c-buy-off.gif',
    loading:      '/itlib/loaders/2.gif'
  },
divmenu: function(cur) {    //div menu
//reset
	$(".advanced_menu:visible").hide();
	$(".top_menu_item").removeClass("color");
	$(".top_menu_item a").css({'color':''});
//set active
	$("#adv_"+cur+".advanced_menu:hidden").show();
	$("#menu_"+cur).addClass("color");
	//$("#menu_"+cur).css({'background-color':'#115193'});
	$("#menu_"+cur+" a").css({'color':'#FFFFFF'});
},
itoggle: function(what,obj) {
	if(obj) $(obj).parent().find(what).toggleClass("hidden");
	else $(what).toggleClass("hidden");
}
};

var IT	= {
};

IT.Search = {
  translations: {
    ru: {
        what:		'Что искать? Введите',
        where:	'Где?',
    		errlen:	'Введите искомое слово (не менее трех символов)'
        }
  }
};

IT.searchForm = {
    prepare: function(){
//    	var start = $("#fsearch").attr("action");
    	return (this.hasWhat() && this.hasWhere());
    },
    hasWhat: function(){
    	var what = $('#fsearch input[name=what]').val();
    	if(what && what != IT.Search.translations[lang]['what']) return true;
    	alert(IT.Search.translations[lang]['what']);
    	return false;
    },
    hasWhere: function(){
    	var owhere = $('#fsearch input[name=where]');
    	var where = owhere.val();
    	if(!where) return true;
    	
    	if(where == IT.Search.translations[lang]['where']) {
    		owhere.val("");return true;}
    	if(where) {return true;}
    	return false;
    }    
};



//it DOM ready -
$(document).ready(function() {
//$('.ittab').tabs().show();
//it top catalogs over -
$("#catalogs td").bind("mouseover", function(){$(this).addClass("over");});
$("#catalogs td").bind("mouseout", function(){$(this).removeClass("over");});

//it catalogs items over -
$(".ritem").bind("mouseover", function(){$(this).children(".ricon").addClass("sel");});
$(".ritem").bind("mouseout", function(){$(this).children(".ricon").removeClass("sel");});


$(".moreblock .moreinfo").bind("click", function(){
	$(this).parent().find(".moreinfo").toggle();
	$(this).parent().find(".sh").toggleClass("hidden");
});



/*

$(".updown").bind("click", function(){
	if($(".updown .sh").is(":hidden")) $(".updown .sh").slideDown(); 
});

$(".updown .moreinfo").bind("click", function(){
	if($(".updown .sh").not(":hidden")) $(".updown .sh").slideUp(); 
});
*/





$("#fsearch").bind("submit", function(e){
	return IT.searchForm.prepare();
	return false;
});

$("#fsearch span.sample").bind("click", function(){
	$("#searchform input.what").val($(this).text());
	return false;
});   



$("#searchform .adv a").bind("click", function(){
    var menuItem = $("#head_box");
    var panel = $("#search_adv"); 
    if (menuItem.data('expanded')) {
    		menuItem.data('expanded', false);
    		panel.slideUp();
    		$(".iicon").removeClass("moreinfo_act").addClass("moreinfo");
    	//	$("#dropugol").removeClass("lt");
    } else {
    		menuItem.data('expanded', true);
    		panel.slideDown();
    		$(".iicon").removeClass("moreinfo").addClass("moreinfo_act");
    		//$("#dropugol").addClass("lt");
    	}     
});   





	//IT.searchForm.canSubmit


// search form -------------------------------------------------------------------------------------
$("#searchform input.what").bind("click", function(){
	$("#searchform td.what").attr("width","70%");
	$("#searchform td.where .comment").html("&nbsp;");
	if($(this).val()==IT.Search.translations[lang]['what']) $(this).val("");
});
$("#searchform input.what").bind("blur", function(){
	if($(this).val()=="") $(this).val(IT.Search.translations[lang]['what']);
});
$("#searchform input.where").bind("click", function(){
	$("#searchform td.what").attr("width","50%");
	$("#searchform td.where .comment").html("Улица, район, станция метро");
	if($(this).val()==IT.Search.translations[lang]['where']) $(this).val("");	
});
$("#searchform input.where").bind("blur", function(){
	if($(this).val()=="") $(this).val(IT.Search.translations[lang]['where']);
});	
// div menu ----------------------------------------------------------------------------------------
  $("div.top_menu_item").bind("click", function(){
      var cur = this.id;
      cur  = cur.substring(5);
      Base.divmenu(cur);
      return false;
    });
    
    /*
    $("div.advanced_menu td img.adv_menu_item_off").fadeTo(0,0.7);
    $("div.advanced_menu td span").bind("mouseover", function(){
      var active = $(this).find(".adv_menu_item_off");
      active.fadeTo(100,1);
      active.css({'border':'1px #fff solid'});
    });
    $("div.advanced_menu td span").bind("mouseout", function(){
      var active = $(this).find(".adv_menu_item_off");
      active.fadeTo(100,0.7);
      active.css({'border':'1px #000 solid'});
    });
    */
   // $("div.advanced_menu td span").bind("click", function(){
    //  window.location.href = $(this).find("a").attr("href");
   // });	
///div menu ----------------------------------------------------------------------------------------



$(".itrows tr:even").css("background-color", "#e8f1fa","border-bottom","1px dashed #b5cde5");
$(".evenodd:even").css("background-color", "#F2F6FA","border-bottom","1px dashed #b5cde5");
$(".evenodd:odd").css("background-color", "#FFFFFF","border-bottom","1px dashed #b5cde5");


//$('a[href^=http://]').addClass('url-extlink');
//a[href$='.doc'] a[href$='.pdf'] a[href$='.zip'], a[href$='.rar'], a[href$='.gzip']



});// end document ready function