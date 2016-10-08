<?
$userdef["curdate"]  = $loc->getCurDate("l, j F Y");
$userdef["copyright"]  = "&copy; 1993 - ".$loc->getCurDate("Y");

include_once('advlist.co.php');
//include_once('advlist.zakaz.php');
include_once(_DIR_MODULS.'adv/adv.mod.class.php');


// -------------------------------------------------------------------------------------------------
//it онлайн консультант --
// -------------------------------------------------------------------------------------------------
$uri = $_SERVER["REQUEST_URI"];
	if( 
	//не отображать онлайн консультанта при условиях
	$uri == '/'
	|| preg_match("/^\/phonecodes\/.*/",$uri) // телефонные коды
	|| preg_match("/^\/catalog\/state\/.*/",$uri) // Государственные органы
	|| $_ENV["COMPUTERNAME"]=="AGA"
	) {
} else {
$userdef["footer_script"] = <<< HTML
<script type="text/javascript"><!-- /* build:::5 */ -->
	var liveTex = true,
		liveTexID = 54944,
		liveTex_object = true;
	(function() {
		var lt = document.createElement('script');
		lt.type ='text/javascript';
		lt.async = true;
		lt.src = 'http://cs15.livetex.ru/js/client.js';
		var sc = document.getElementsByTagName('script')[0];
		sc.parentNode.insertBefore(lt, sc);
	})();
</script>
HTML;
}
// -------------------------------------------------------------------------------------------------

?>