<?
if($_GET['cID']) { //получаем информацию о компании
$cID = $_GET['cID'];	
//$orginfo =$company->get_org_info($_GET['cID']);
//pr($orginfo);



$img_src = make_img_zakaz_path($cID);
if($img_src) {
$img_name = $img_src;
$img_places["adv4_2"]["items"][] = $img_src;
$imgadv[$img_name]["type"] = "html";
$imgadv[$img_name]["html"] = <<< HTML

<!--noindex-->
<div style="margin-top:20px;" id="zakaz_click">
<img border="0" src="{$img_src}" alt="" width="240" height="400">
</div>

<div id="zakaz_div" class="hidden" style="background:#FFF; border:5px solid #CCC;position:absolute; overflow:auto; width:450px; height:auto; right:305px; margin-top:-400px; padding:20px !important">
<a class="close" href="javascript:void(0);" style="float:right">Закрыть</a>
<div id="zakaz"></div>
</div>
<!--/noindex-->
HTML;
$img_places["adv4_2"]["urls"]["/company/{$cID}/*"][] = $img_name;
}
} //end if







function make_img_zakaz_path($coID="") {
if(!$coID)	 return;
	$path2logos = DIR_CONTENT_ROOT."zakaz/";
	$file_name = "".$coID."-240x400.jpg";
	$file_name1 = "".$coID."-240x400.gif";
	$file_path = $path2logos .	$file_name;
	$file_path1 = $path2logos .	$file_name1;


//echo $file_path;

	if (is_file($file_path) && file_exists($file_path)) {
		$logo = $file_name;
		$logo_exist = true;
	} else if (is_file($file_path1) && file_exists($file_path1)) {
		$logo = $file_name1;
		$logo_exist = true;
	} else $logo_exist = false;

if($logo_exist){
	$src = "/content/zakaz/{$logo}";
	
	//echo $src;
	return $src;
}
}






?>