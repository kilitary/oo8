jQuery.validator.addMethod("datetime2", function(value, element) { 
  return this.optional(element) || /^\d\d?\.\d\d?\.\d\d\d?\d? \d\d:\d\d$/.test(value);
}, "Please enter correct date!"); 

jQuery.validator.addMethod(
  "datetime",
  function(value, element) {
    var check = false;
    var re = /^\d{1,2}.\d{1,2}.\d{4} \d\d:\d\d$/
    if( re.test(value)){
      var adata = value.split('.');
      var gg = parseInt(adata[0],10);
      var mm = parseInt(adata[1],10);
      var aaaa = parseInt(adata[2],10);
      var xdata = new Date(aaaa,mm-1,gg);
      if ( ( xdata.getFullYear() == aaaa ) && ( xdata.getMonth () == mm - 1 ) && ( xdata.getDate() == gg ) )
        check = true;
      else
        check = false;
    } else
      check = false;
    return this.optional(element) || check;
  }, 
  "Please enter a correct date"
);


jQuery.validator.addMethod("filename", function(value, element) {
  return this.optional(element) || /^[a-z0-9-_]+$/i.test(value);
}, "Letters, numbers and \"-_\" only please");

jQuery.validator.addMethod("letterswithbasicpunc", function(value, element) {
  return this.optional(element) || /^[a-z-.,()'\"\s]+$/i.test(value);
}, "Letters or punctuation only please");  

jQuery.validator.addMethod("alphanumeric", function(value, element) {
  return this.optional(element) || /^\w+$/i.test(value);
}, "Letters, numbers, spaces or underscores only please");  

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 

jQuery.validator.addMethod("nowhitespace", function(value, element) {
  return this.optional(element) || /^\S+$/i.test(value);
}, "No white space please"); 
