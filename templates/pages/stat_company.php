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
						<form id=formstat>
						Статистика<br/>С:<input name=fromdate class='datepicker' value='<?=$fromdate?>'>
						По: <input name=todate class='datepicker' value='<?=$todate?>'><br/>
						Компания: <input autocomplete="off" name=cID id=company value='<?=$_GET['cID']?>'>
						<input type=submit value=применить>
						<div id="result-search"></div>
						
						<div>
						<br/>
						<table width='80%'>
						<?if($num>0):?>
							<tr><th>Компания</th><th>посещений</th></tr>
							<tr><td><?=$company['fullname']?> <a href='/company/<?=$company['cID']?>/'>перейти к компании</a>
							<a href='/stat/company/detail/<?=$company['cID']?>/'>перейти к расширенной статистики компании</a>
							</td><td><?=$num?></td></tr>
						<?else:?>
							
						<?endif?>
						</table>
						</div>
						
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
					
<?include("templates/subs/footer.php");?>