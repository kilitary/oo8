<?include("header.php")?>


<?if(strlen($rmsg)):?>
<span style='color:red'><?=$rmsg?></span>
<?endif?>

<?if(strlen($gmsg)):?>
<span style='color:green'><?=$gmsg?></span>
<?endif?>


<div class="contentdiv tabs">

<?if($company['cID']):?>
<h1>Добавление филиала для компании '<?=$company['fullname']?>' (<?=$company['cID']?>)</h1>
<?else:?>
<h1>Добавление новой компании</h1>
<?endif?>
	<form method=post>
	<input name=cID type=hidden value=<?=$_GET['cID']?>>
    <input name=parent type=hidden value=<?=$_GET['parent']?>>
	<table class=firmtbl>
		<?if(!$company['cID']):?>
			<tr><td><strong>Тип тарифа</strong></td></tr><tr>
			<td><select name=razm_type>
			<?foreach($razm_types as $ot):?>
			<option value=<?=$ot['ID']?>><?=$ot['caption']?></option>
			<?endforeach?>
			</select>
			</td></tr>
		<?endif?>
		
		<?if($company['cID']):?>
		<?else:?>
		<tr><td><strong>Форма собственности</strong></td></tr><tr>
		<td><select name=ownership_type>
		<option value=0>[не выбранa]</option>
		<?foreach($ownership_types as $ot):?>
		<option value=<?=$ot['ID']?>><?=$ot['caption']?></option>
		<?endforeach?>
		</select>
		</td></tr>
		<?endif?>
		
		<?if($company['cID']):?>
		<tr><td><strong>Тип филиала</strong></td></tr><tr>
		<td><select required name=office_type>
		
		<?foreach($office_types as $ot):?>
		<option value=<?=$ot['ID']?>><?=$ot['caption']?></option>
		<?endforeach?>
		</select>
		</td></tr>
		<?endif?>
		
		<tr><td><strong>
		Сокращенное название компании<?=($company['cID']?'/группы филиалов':'')?></strong></td></tr><tr><td> <input size="100px" placeholder="<?=($company['cID']?'Новая группа филиалов':'Сверхновая компания')?>" value='<?=(isset($_GET['shortname'])?$_GET['shortname']:'')?>' required name=shortname placeholder="введите" value='<?=$company['shortname']?>'></td></tr>
		<?if($_GET['cID']):?>
		<tr><td><label><strong> <input type=checkbox checked=checked name=copyparent> Скопировать данные контактов/информацию/рубрик из родителя</strong></label></td></tr>
		<?endif?>
		
		<tr><td colspan=2>
		<?if(count($company['offices'])):?>
		<!-- Raised button with ripple -->
		<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		  продолжить
		</button>

		<?else:?>
			<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		  продолжить
		</button>
		<?endif?>
		</td></tr>
	</table>
	</form>
</div>

<script type='text/javascript'>
var current = "firms";
</script>
<?include("footer.php")?>