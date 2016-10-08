/*** www.it24.ru ***************************************************************
 * Basket class for it24.ru Library
 *    _    ____ _    _    _____  _    _
 *  _| |  / __ \ |  | |  |  _  \| |  | |
 * {_} |_|_| | | |  | |  | {_}  | |  | |
 *  _|  /    | | |__| |  |  ___/| |  | |
 * | | |    / / \___| |  | |\ \ | |  | |
 * | | |__ / /_     | |  | | \ \| |__| |
 * |_|\__/_____|    |_|{}|_|  \_/\_____| 
 * 
 *** www.it24.ru ***************************************************************/


  var itmouse = {
    x:false,
    y:false
  };




var Basket = {
  translations: {
    ru: {
        padd:     'Добавить в корзину',
        pdel:     'Удалить из корзины',
        loading:  'Обновление информации',
        porder:   'Для заказа товара кликните на изображении корзины рядом с ним',
        order:    'Оформить заказ',
        success:	'Успешно добавлено!',
        error:		'Ошибка, попробуйте еще раз!'
        },
    en: {
        padd:     'Add to the basket',
        pdel:     'Delete from the basket',
        loading:  'Update',
        porder:   'To order the goods, please, click the basket near it',
        order:    'Checkout',
        success:	'Added successfully!',
        error:		'Error, please, try again!'        
        }        
  },
  images: {
    on:           '/itlib/buy/c-buy-on.gif',
    off:          '/itlib/buy/c-buy-off.gif',
    loading:      '/itlib/loaders/2.gif'
  },
  allowDel:false,	// повторное нажатие позволяет удалить товар из корзины, д.б false для работы с передачей param 

move: function(o, i){
	if(lang!="ru") lang = "en";
	
  key = i.substring(2);
  if($(o).hasClass("addbasket")) {
    ok = false;
    o.src = this.images.loading;
    o.alt = this.translations[lang].loading;
    o.title = this.translations[lang].loading;
    this.pAdd(o,key);
  } else if($(o).hasClass("delbasket")){
    ok = false;
    o.src =this.images.loading;
    o.alt =this.translations[lang].loading;
    o.title =this.translations[lang].loading;
    $(o).removeClass("delbasket").addClass("addbasket");
    this.pDel(o,key);
  }
},

pAdd: function(o,itemid){
    amount =  $("#am"+itemid).val();
    param = $("#param"+itemid).val();
    $.ajax({type: "POST",url:'/?cat=basket',time:5000,data:({itemid:itemid,cmd:'add',amount:amount,param:param}),success:function(data,status) {
        if(status=="success") {
          if(data) {
              $('#basket').html(data);
              $("#ajaxdialog").css({"position":"absolute","top":itmouse.y,"left":itmouse.x});
              $('#ajaxdialog').html(Basket.translations[lang].success).show().fadeOut(1000);
          } else {
              alert(Basket.translations[lang].error);
          }
          ok = true;
       }
    if(ok) {
    	if(Basket.allowDel) {
      	o.src =   Basket.images.off;
      	o.alt =   Basket.translations[lang].pdel;
      	o.title = Basket.translations[lang].pdel;
      	$(o).removeClass("addbasket").addClass("delbasket");
    	} else {
      	o.src =   Basket.images.on;
      	o.alt =   Basket.translations[lang].padd;
      	o.title = Basket.translations[lang].padd;
    	}
      num++;
    }   
  }});    
},

pDel: function(o,itemid){
    $.post('/?cat=basket', {
        itemid:itemid,cmd:'delete',param:param}, function(data,status) {
        if(status=="success") {
           $('#basket').html(data);
           ok = true;
       }
      if(ok) {
        o.src =   Basket.images.on;
        o.alt =   Basket.translations[lang].padd;
        o.title = Basket.translations[lang].padd;
        num--;
      }        
    });       
},
proddesc: function(o){
  $("#"+o).toggleClass("hidden");
},
validate: function(formData, jqForm, options) {
  var valid = false;
  oname = jqForm[0];
  
$(oname).validate({
    meta: "validate",
    showErrors: function(errorMap, errorList) {
      errors = this.numberOfInvalids();
      if (errors) {
        var message = errors == 1
          ? 'Ошибка в 1 поле. Оно подсвечено'
          : 'Ошибки в ' + errors + ' полях. Они подсвечены';
        $("div.error").html(message);
        $("div.error").show();
      } else {
        $("div.error").hide();
      }
    this.defaultShowErrors();
  },
  wrapper: 'div',
  	errorPlacement: function(error, element) {
			if (element.is(":radio"))
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.insertAfter(element);
   },  
  onkeyup: false,
  debug:false
 });

  valid = $(oname).valid();
  if(valid) {
    return true;
  }
  else return false;
},  
savecomplite: function(responseText, statusText) {
  $("#stepcontent").hide();
  $("#stepcontent").html(responseText).fadeIn(1000);
},
finish: function(responseText, statusText) {
  //document.location.href = "/?cat=basket";
  $("#basket_content").html(responseText);
}
};


jQuery( function($) {
   $("body").mouseup(function(e){
    itmouse.x = e.pageX;
    itmouse.y = e.pageY;
   });      
   
	$.post('/?cat=basket', {ajax:"ajax"}, function(data) {$('#basket').html(data);});
   

  $(".urfiz").live("click", function(e){
  	
  	if($(this).is(":first-child")) $(".ur").addClass("hidden");
		else $(".ur").removeClass("hidden");
  });


  $("#stepprev").live("click", function(e){
    $("form.steps").ajaxSubmit({url:'/order/?move=prev',success:Basket.savecomplite}); 
    return false;
  });
  $("#stepnext").live("click", function(e){
    $("form.steps").ajaxSubmit({url:'/order/?move=next',beforeSubmit:Basket.validate,success:Basket.savecomplite});   
    return false;
  });
  $("#stepfinish").live("click", function(e){
		$("form.steps").ajaxSubmit({url:'/order/?move=options',beforeSubmit:Basket.validate,success:function(){$("#frm_order").ajaxSubmit({url:'/order/?order=order',success:Basket.finish});}});     	
    //Print.toPrintLayout();
    //$("#frm_order").submit();
    return false;
  });







  //$(".aproddesc").bind("click", function(e){Basket.proddesc()});
  $(".addbasket").bind("click", function(e){Basket.move(this,this.id);});
});
