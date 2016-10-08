<?include("header.php")?>
<?foreach($banners as $b):?>
<div style='float:left;padding:20px'>
<div class=" ">
	<?=$b['block']?>
	<a href='/system/firms/edit/<?=$b['cID']?>/'><?=$b['fullname']?> <strong><?=$b['caption']?></strong></a><br/>
	<img  src='<?=$b['srcurl']?>'>
	<hr>
	<br/><br/>
</div>
</div>
<?endforeach?>

<script type='text/javascript'>
var current = "m1";
</script>
<?include("footer.php")?>