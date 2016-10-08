<?include("header.php");?>

<div class="tabs contentdiv">
<div>
<a href='#' onclick='RubricNew(1)' class=underlined style='color:gray;font-size:20px'>добавить новую рубрику</a>
</div>

<div class=clear></div>

<?foreach($rubrics as $r):?>
<div style='border-bottom:1px solid lightgray;padding-bottom:3px'>
<a class=underlined  href='/system/rubrics/edit/<?=$r['rID']?>/'><h1><?=$r['caption']?></h1></a> <span style='color:gray;font-size:12px'>компаний: <?=intval($r['objects_count'])?> скидок: <?=intval($r['discount_count'])?> хитов: <?=stat::get("$r[cat]/visits")?></span><br/><br/>
	<?foreach($r['subs'] as $rubric):?>
		<span><a style='font-size:18px' href='/system/rubrics/edit/<?=$rubric['rID']?>/'><?=$rubric['caption']?></a></span> <span style='color:green'>■</span>
	<?endforeach?>
	<br/><br/><a href='#' onclick='RubricNew(<?=$r['rID']?>)' class=underlined style='color:gray'>добавить подрубрику</a>
</div>

<?endforeach?>
<br/>
<div class=clear></div>
</div>

<script type='text/javascript'>
var current = "m1";
</script>

<?include("footer.php");?>