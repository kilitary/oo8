
$(function() 
{
	var id;
	
	$("#keyword").keyup(function () 
	{ 
		var search = $("#keyword").val();
		if (search.length > 0) 
		{
			$.ajax(
			{
				type: "GET",
				url: "/stat/ajax/suggestkeyword/",
				data: {"key": search},      
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
	
	
	
	$("#company").keyup(function () 
	{ 
		var search = $("#company").val();
		if (search.length > 0) 
		{
			$.ajax({
				type: "GET",
				url: "/stat/ajax/suggestcompany/",
				data: {"key": search},      
				success: function(response){
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
	
	if(typeof($.cookie('topmenuitem')) != 'undefined' 
		&& $.cookie('topmenuitem').length) 
	{
		id='#'+$.cookie('topmenuitem');
		
		var ids = id.split("_");
		TopMenuBase = ids[1];
	}
	$('#feedback_click').click(function() {
		$('#feedback').toggle();
	});
	$('.top_menu_item').click(function(e) {
		$.removeCookie('topmenuitem', { path: '/' });
		$.cookie("topmenuitem", $(this).attr('id'), { expires: 7, path: '/' });
	});
	$('.datepicker').pickmeup({
		format  : 'Y-m-d',
		hide_on_select: true
	});
	$('#fsearch').bind("submit", function(e) 
	{
		e.preventDefault();
		var parser = document.createElement('a');
		parser.href = document.location.href; 
		var root = parser.href.indexOf("/discount/") ? "/discount/":'/catalog';
		var what = $('.what').val();
		what=what.trim();
		if(what.length<=2||what=='Что искать? Введите')     
		{ 
			alert('Введите что искать!');
			return;
		} 
		what = encodeURIComponent(what).replace(/%20/g,'+');
		if((parser.href.indexOf("/catalog/") || parser.href.indexOf("/discount/")) &&
			$('#inrubric').attr('checked')=='checked') 
		{
			root = parser.href;
			var chain = parser.pathname.split("/");
			if(chain.length>=3) 
			{
				root = "/"+chain[1]+"/"+chain[2]+"/";
				if(chain[3]!='what'&&chain[3] != 'undefined' && chain[3].length&&chain[3]!='p')
					root = root + chain[3]+"/";
			}
		} 
		else 
		{
			root = parser.href.indexOf("/discount/") > 0 ? "/discount/":'/catalog/';
		}
		var url;
		url = root+"what/"+what+"/";
		document.location.href=url;
	});
	$('#gosearch').removeAttr("disabled");
	$('#page_errors').submit(function(e) 
	{
		e.preventDefault();
		var notes = $('#notes').val();
		if(notes.length<5)
		{
			$('#result').html("<span style='color:red'>Введите не менее 10 символов. Введено "+notes.length+"</span>");
			return;
		}
		$('#err_submit').attr("disabled","disabled");
		$('#result').html("<strong>Подождите...</strong><br/><br/>");
		var dataform = $('#page_errors').serialize();
		$.post("/feedback/error/", dataform, function(data) 
		{
			$('#result').html(data);
			$('#err_submit').removeAttr("disabled");
			if(data.indexOf("Успешно"))
				$('#err_submit').remove();
		});
	});
	$(".scrollable").scrollable({circular:true,mousewheel:true}).autoscroll({interval:5000}).show();
	DoITLoad();
});
var Print = {
	translations: {
		en: ['Return','Print'],
		ru: ['Вернуться к полной версии','Распечатать']
	},
	toNormalLayout: function(){
		$(".noprint").show();
		$(".print_panel").hide();
		$("*").css("background-image","");
		$("*").css("background-color","");
		$("*").css("color","");
//    $("#zoom").css({width:""});
//    $(".main_content").css({paddingLeft:"15px", paddingRight:"5px"});   
},
toPrintLayout: function(){
	if(lang!="ru") lang = "en";
	$(".noprint").hide();
  // $("*").css("background","none");
  //  $("*").css("background-color","#FFF");
  $("*").css("color","#000");
//    $("#zoom").css({width:"800px"});
//    $(".main_content").css({paddingLeft:"0px", paddingRight:"15px"});
this.addPrintButton();
},  
addPrintButton2: function(){
	var out = '<div class="print_panel">';
	out += '<a href="#" style="color:000" onclick="window.print();" title="'+ this.translations[lang][1]+'">';
	out += '<img border="0" src="/itlib/boolets/print.gif" alt="" /> '+ this.translations[lang][1];
	out += '</a>';
	out += '     ';
	out += '<a href="#" style="color:000" onclick="Print.toNormalLayout();" title="'+ this.translations[lang][0]+'">';
	out += '<img border="0" src="/itlib/boolets/red_arrow_icon.gif" alt="" /> '+ this.translations[lang][0];
	out += '</a>';
	out += '</div>';
	$(out).prependTo('body');
},
addPrintButton: function(){
	var out = '<div class="print_panel">';
	out += '<button type="button" onclick="window.print();">';
	out += '<img src="/itlib/boolets/print.gif" alt="" /> '+ this.translations[lang][1];
	out += '</button>';
	out += ' ';
	out += '<button type="button" onclick="Print.toNormalLayout();">';
	out += '<img src="/itlib/boolets/red_arrow_icon.gif" alt="" /> '+ this.translations[lang][0];
	out += '</button>';
	out += '</div>';
	$(out).prependTo('body');
}
};
var lang = 'ru';
var Base = {
	translations: {
		ru: {
			loading: '<div align=center><img src=/itlib/loaders/2.gif alt="Обновление информации"></div>',
			del: 'Вы действительно хотите удалить?'
		}
	},
	images: {
		on: '/itlib/buy/c-buy-on.gif',
		off: '/itlib/buy/c-buy-off.gif',
		loading: '/itlib/loaders/2.gif'
	},
	divmenu: function(cur) { //div menu
		//reset
		$(".advanced_menu:visible").hide();
		$(".top_menu_item").removeClass("color");
		$(".top_menu_item a").css({
			'color': ''
		});
		//set active
		$("#adv_" + cur + ".advanced_menu:hidden").show();
		$("#menu_" + cur).addClass("color");
		//$("#menu_"+cur).css({'background-color':'#115193'});
		$("#menu_" + cur + " a").css({
			'color': '#FFFFFF'
		});
	},
	itoggle: function(what, obj)
	{
		if (obj) $(obj).parent().find(what).toggleClass("hidden");
		else $(what).toggleClass("hidden");
	}
};
var IT = {};
IT.Search = 
{
	translations: 
	{
		ru: 
		{
			what: 'Что искать? Введите',
			where: 'Где?',
			errlen: 'Введите искомое слово (не менее трех символов)'
		}
	}
};
IT.searchForm = 
{
	prepare: function() 
	{
		//      var start = $("#fsearch").attr("action");
		return (this.hasWhat() && this.hasWhere());
	},
	hasWhat: function() 
	{
		var what = $('#fsearch input[name=what]').val();
		if (what && what != IT.Search.translations[lang]['what']) return true;
	  //  alert(IT.Search.translations[lang]['what']);
	  return false;
	},
	hasWhere: function() 
	{
		var owhere = $('#fsearch input[name=where]');
		var where = owhere.val();
		if (!where) return true;
		if (where == IT.Search.translations[lang]['where']) {
			owhere.val("");
			return true;
		}
		if (where) {
			return true;
		}
		return false;
	}
};
hs.graphicsDir = '/css/graphics/';
var TopMenuBase = 'm2';
function DoITLoad()
{
	// IT DATA
	
	Base.divmenu(TopMenuBase);
	$("#h1-rubric").bind("click", function() {
		$('.drop-list[id!="nav-rubcrics"]').hide();
		$('#nav-rubcrics').toggle();
		return false;
	});
	$("body").bind("click", function() {
		$('.drop-list').hide();
	});
	$("#filter-district").bind("click", function() {
		$('.drop-list[id!="drop-list-district"]').hide();
		$('#district-list .drop-list').toggle();
		return false;
	});
	$("#filter-metro").bind("click", function() {
		$('.drop-list[id!="drop-list-metro"]').hide();
		$('#metro-list .drop-list').toggle();
		return false;
	});
	$("#filter-option").bind("click", function() {
		$('.drop-list[id!="drop-list-option"]').hide();
		$('#option-list .drop-list').toggle();
		return false;
	});
	$("#catalogs td").bind("mouseover", function() {
		$(this).addClass("over");
	});
	$("#catalogs td").bind("mouseout", function() {
		$(this).removeClass("over");
	});
	//it catalogs items over -
	$(".ritem").bind("mouseover", function() {
		$(this).children(".ricon").addClass("sel");
	});
	$(".ritem").bind("mouseout", function() {
		$(this).children(".ricon").removeClass("sel");
	});
	$(".moreblock .moreinfo").bind("click", function() {
		$(this).parent().find(".moreinfo").toggle();
		$(this).parent().find(".sh").toggleClass("hidden");
	});
	$("#fsearch").bind("submit", function(e) {
		return IT.searchForm.prepare();
		return false;
	});
	$("#fsearch span.sample").bind("click", function() {
		$("#searchform input.what").val($(this).text());
		return false;
	});
	$("#searchform .adv a").bind("click", function() {
		var menuItem = $("#head_box");
		var panel = $("#search_adv");
		if (menuItem.data('expanded')) {
			menuItem.data('expanded', false);
			panel.slideUp();
			$(".iicon").removeClass("moreinfo_act").addClass("moreinfo");
			//  $("#dropugol").removeClass("lt");
		} else {
			menuItem.data('expanded', true);
			panel.slideDown();
			$(".iicon").removeClass("moreinfo").addClass("moreinfo_act");
			//$("#dropugol").addClass("lt");
		}
	});
	// search form -------------------------------------------------------------------------------------
	$("#searchform input.what").bind("click", function() {
		$("#searchform td.what").attr("width", "70%");
		$("#searchform td.where .comment").html("&nbsp;");
		if ($(this).val() == IT.Search.translations[lang]['what']) $(this).val("");
	});
	$("#searchform input.what").bind("blur", function() {
		if ($(this).val() == "") $(this).val(IT.Search.translations[lang]['what']);
	});
	$("#searchform input.where").bind("click", function() {
		$("#searchform td.what").attr("width", "50%");
		$("#searchform td.where .comment").html("Улица, район, станция метро");
		if ($(this).val() == IT.Search.translations[lang]['where']) $(this).val("");
	});
	$("#searchform input.where").bind("blur", function() {
		if ($(this).val() == "") $(this).val(IT.Search.translations[lang]['where']);
	});
	// div menu ----------------------------------------------------------------------------------------
	$("div.top_menu_item").bind("click", function() {
		var cur = this.id;
		cur = cur.substring(5);
		Base.divmenu(cur);
		return false;
	});
	$(".itrows tr:even").css("background-color", "#e8f1fa", "border-bottom", "1px dashed #b5cde5");
	$(".evenodd:even").css("background-color", "#F2F6FA", "border-bottom", "1px dashed #b5cde5");
	$(".evenodd:odd").css("background-color", "#FFFFFF", "border-bottom", "1px dashed #b5cde5");
}
