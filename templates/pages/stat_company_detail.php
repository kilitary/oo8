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
						<form>
						Статистика<br/>С:<input name=fromdate class='datepicker' value='<?=$fromdate?>'>
						По: <input name=todate class='datepicker' value='<?=$todate?>'><br/>
						Компания: <input autocomplete="off" name=cID id=company value='<?=$company['cID']?>'><br/>
						общая <input <?=($_GET['type']=='bytotal'?'checked':'')?> name=type type=radio value=bytotal> по дням<input <?=($_GET['type']=='byday'?'checked':'')?> name=type type=radio value=byday>
						по месяцам<input <?=($_GET['type']=='bymonth'?'checked':'')?> name=type type=radio value=bymonth>
						<input type=submit value=применить>
						<div id="result-search"></div>
						
						<table width='80%'>
						
						<?if($_GET['type']=='bytotal'||!isset($_GET['type'])):?>
							<?foreach($cats as $cat):?>
							<tr><td><h3><?=$cat['name']?></h3></td><td><?=$cat['visits']?></td><td></td></tr>
								<?foreach($cat['sub'] as $s):?>
								<tr><td><?=$s['name']?></td><td><?=$s['visits']?></td><td></td></tr>
								<?endforeach?>
							<?endforeach?>
							
							<tr><th colspan=3>Переходы с баннера или со страницы компании</th></tr>
							<?foreach($advstat as $as):?>
								<tr><td><?=$as['name']?></td><td><?=$as['count']?></td><td></td></tr>
							<?endforeach?>
							
							<tr><th colspan=3>Подробная информация по переходам</th></tr>
							<tr><th>дата</th><th>URL(ссылка) перехода</th><th>место</th></tr>
							<?foreach($links as $link):?>
								<tr><td><?=$link['added']?></td><td><?=$link['url']?></td><td><?=$link['block']?></td></tr>
							<?endforeach?>
							
						<?elseif($_GET['type']=='byday'):?>
							<tr><th>день</th><th>посещений</th></tr>
							<?foreach($days as $d):?>
							<tr><td><?=$d['date']?></td><td><?=$d['visits']?></td></tr>
							<?endforeach?>
							
						<?elseif($_GET['type']=='bymonth'):?>
							<tr><th>месяц</th><th>посещений</th></tr>
							<?foreach($months as $m):?>
							<tr><td><?=$m['date']?></td><td><?=$m['visits']?></td></tr>
							<?endforeach?>
							
						<?endif?>
						
						</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
					
<?include("templates/subs/footer.php");?>