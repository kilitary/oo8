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
						Ключевое слово: <input autocomplete="off" name=keyword id=keyword value='<?=$_GET['keyword']?>'>
						<div id="result-search"></div>

						<select name=type>
						<option <?=($_GET['type']==1 ? "selected":"")?> value=1>находят</option>
						<option <?=($_GET['type']==2 ? "selected":"")?> value=2>не находят</option>
						<input type=submit value=применить>
						</select>
						</form>
						
						<table class=stat>
						<tr><th>ключевое слово</th><th>запросов</th><th>результатов</th></tr>
						<?foreach($keywords as $k):?>
						<tr><td><a href='/catalog/what/<?=$k['text']?>/'><?=$k['text']?></a></td><td><?=$k['count']?></td><td><?=$k['results']?></td></tr>
						<?endforeach?>
						</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
					
<?include("templates/subs/footer.php");?>