/*** www.it24.ru ***************************************************************
 * Print class for it24.ru Library
 *    _    ____ _    _    _____  _    _
 *  _| |  / __ \ |  | |  |  _  \| |  | |
 * {_} |_|_| | | |  | |  | {_}  | |  | |
 *  _|  /    | | |__| |  |  ___/| |  | |
 * | | |    / / \___| |  | |\ \ | |  | |
 * | | |__ / /_     | |  | | \ \| |__| |
 * |_|\__/_____|    |_|{}|_|  \_/\_____| 
 * 
 *** www.it24.ru ***************************************************************/

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