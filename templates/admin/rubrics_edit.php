<?include("header.php")?>

<div class="contentdiv tabs">
	
	<div style='color:red;font-size:20px;font-family:lucida console'><?=$rmsg?></div>
	<div style='color:green;font-size:20px;font-family:lucida console'><?=$gmsg?></div>
	<br/>
	<h2>Редактирование рубрики: <?=$rubric['caption']?> </h2> (<?=$rubric['objects_count']?> компаний)

	<br/><br/>
	<form id=rubric method=post>
	<input type=hidden name=rID value=<?=$rubric['rID']?>>
	<strong>Код</strong><br/>
	<input name=cat id=cat value='<?=$rubric['cat']?>'><br/><br/>
	<strong>Название</strong><br/>
	<input placeholder="название рубрики" size=100 name=caption value='<?=$rubric['caption']?>'><br/><br/>
	<strong>Сортировка</strong><br/>
	<input name=pos value=<?=$rubric['pos']?>><br/><br/>
	<strong>Ключевые слова</strong><br/>
	<input name=keywords size=100 placeholder="введите ключевые слова" value=<?=$rubric['keywords']?>><br/><br/>
	<strong>Описание</strong><br/>
	<textarea placeholder="описание рубрики" class=ckeditor cols=150 rows=20 name=desc><?=$rubric['description']?></textarea><br/><br/>
	<strong>Включено</strong>
	<input type=checkbox <?echo($rubric['published']=='yes'? 'checked':'')?> name=published><br/><br/>
	<input type=submit value=обновить>
	<input type=button name=delete value=удалить onclick='RubricDelete(<?=$rubric['rID']?>)'>
	</form>

</div>

<script type='text/javascript'>
var current = "m1";
</script>
<?include("footer.php")?>