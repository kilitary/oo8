<?include("header.php")?>

<div class="tabs contentdiv">
	<br/>
	<label for='firmkey'>поиск
		<input id=firmkey style='width:50%;padding:5px' placeholder='введите часть названия или номер компании'>
	</label>
	<div id="result-search"></div>

	<div class=firmdiv id=firmdiv>
	</div>
	<?if(count($_SESSION['lastcIDvisited'])):?>
	<h3>последние посещенные:</h3>
	<?endif?>
	<table class=last>
		<?foreach(array_reverse($_SESSION['lastcIDvisited'],true) as  $firm):?>
		<?if($firm['company']['cID']):?>
		<tr>
			<td style='color:#96AB9A'><?=date('H:i', $firm['time'])?></td>
			<td align=right><a href='/system/firms/edit/<?=$firm['cID']?>/'><?=$firm['cID']?></a></td>
			
			<td><?=$firm['company']['razm_caption']?></td>
			<td align=right><?=($firm['company']['office_caption'] ? $firm['company']['office_caption']:"[K]")?></td>
			<td><a href='/system/firms/edit/<?=$firm['cID']?>/'><?=$firm['name']?> 
				<?if($firm['company']['addr']['street']):?>
				[<?=$firm['company']['addr']['street']?>, <?=$firm['company']['addr']['dom']?>]
				<?endif?>
			</a>

			<?if($firm['state']):?>
			[<?=$firm['state']?>]
			<?endif?>
		</td>
	</tr>
	<?endif?>
	<?endforeach?>
</table>
</div>


<script type='text/javascript'>
	var current = "firms";
</script>
<?include("footer.php")?>