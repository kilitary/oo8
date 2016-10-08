<?include("templates/subs/header.php");?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
	<tr>
		<td>
			<table cellspacing="0" width="100%" border="0" cellpadding="0" style="margin-top:5px">
				<tr>
					<td width="240" style="padding-right:40px;min-width: 240px;">
						<?include("templates/subs/left-pane.php");?>
					</td>
					<td width="100%">
						<div class="main_content">
						
						<form method=get>
						Статистика С:<input name=fromdate class='datepicker' value='<?=$fromdate?>'>
						По: <input name=todate class='datepicker' value='<?=$todate?>'><br/>
						Ключевое слово: <input id=keyword name=keyword value='<?=$_GET['keyword']?>'>
						<input type=submit value=применить>
						</form>
						<br/><br/>
						
						<table class=stat>
						<tr><th>рубрика</th><th>посещений</th><th>уникальных</th></tr>
						<?foreach($cats as $cat):?>
						<?if($cat==null){continue;}?>
						<tr><td><h3 class=stat><?=$cat['caption']?></h3></td><td><?=$cat['visits']?></td><td><?=$cat['unique']?></td></tr>
							<?foreach($cat['subcats'] as $subcat):?>
							<?if($subcat==null){continue;}?>
							<tr onmouseover="$(this).css('color','blue')" onmouseout="$(this).css('color','black')"><td><?=$subcat['caption']?></td><td><?=$subcat['visits']?></td><td><?=$subcat['unique']?></td></tr>
							<?endforeach?>
						<tr><td style='padding-bottom:10px'><strong>Итого</strong></td><td colspan=2><?=$cat['total']?></td></tr>
						<?endforeach?>
						<tr><td><strong>Итого всего</strong></td><td colspan=2><?=$glototal?></td></tr>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
					
<?include("templates/subs/footer.php");?>