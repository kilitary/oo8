<?include('header.php')?>


<div class="tabs contentdiv">

	<a class=underlined href='#' onclick='NewPage()'><h2>создать новую страницу</h2></a>


<div >
<?
$pages = $app->db->query("SELECT * FROM _it_PAGES");
foreach($pages as $page)
{
	?>
	<div class=clear style='border-bottom:1px solid lightgray;padding:17px;padding-left:0px;font-size:18px'>
	
	<a style='font-size:18px' href='/system/pages/edit/<?=$page['pID']?>/'><span style='width:50%;float:left'>&nbsp;<?=$page['meta_title']?></span></a>
	<span style='width:10%;float:left'>/info/<?=$page['pID']?>/</span> 
	<span style='width:30%;float:left'>/info/<?=$page['url_title']?>/</span> 
	<span style='width:10%;float:left'>[<a href='/info/<?=$page['pID']?>/'>переход на сайт</a>]</span><br/>
	</div>
	<?
}
?>
</div>
</div>

<script type='text/javascript'>
var current = "m1";
</script>
<?include('footer.php')?>