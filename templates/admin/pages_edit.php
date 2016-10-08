<?include('header.php')?>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<?

?>


<div class="contentdiv tabs">
	<div style='color:green'><?=$gmsg?></div>
	<form method=post>
	<strong>Meta title</strong><br/>
	<input size=200 name=meta_title value='<?=$page['meta_title']?>'><br/><br/>
	<strong>Meta keywords</strong><br/>
	<input size=200 placeholder="SEO, заполните ключевые слова" name=meta_keywords value='<?=$page['meta_keywords']?>'><br/><br/>
	<strong>Meta description</strong><br/>
	<input size=200 placeholder="SEO, заполните описание страницы" name=meta_description value='<?=$page['meta_description']?>'><br/><br/>
	<strong>URL title</strong><br/>
	<input size=200 name=url_title value='<?=$page['url_title']?>'><br/><br/>
	<strong>контент</strong><br/>
	<textarea style='height:300px' rows=240 cols=150 class=ckeditor name=content>
	<?=$page['content']?>
	</textarea><br/>
	<input type=submit value=сохранить>
	<input type=button name=delete value=удалить onclick='PageDelete(<?=$page['pID']?>)'>
	</form>
</div>

<script type='text/javascript'>
var current = "m1";
</script>
<?include('footer.php')?>
