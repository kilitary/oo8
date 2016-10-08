<?include("templates/subs/header.php");?>

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="home">
            <tr>
                <td>
                    <table cellspacing="0" width="100%" border="0" cellpadding="0" style="margin-top:5px">
                        <tr>
							<td width="240" style="padding-right:50px;min-width: 260px;">
								<?include("templates/subs/left-pane.php");?>
							</td>
                            <td width="100%">
                                <div class="main_content">

<div class="main_content">
          <h1>Телефонные коды стран и городов мира</h1>
<div class="r-description"><em><strong>Коды телефонов городов России и международные телефонные коды стран мира. Ниже найдете информацию как позвонить и как набирать телефонный номер.</strong></em></div>

<div>Часто спрашиваемые коды стран:
<a href="/phonecodes/rossiya/">Коды городов регионов России</a>,
<a href="/phonecodes/ukraina/">городов Украины</a>,
<a href="/phonecodes/kazahstan/">городов Казахстана</a>,
<a href="/phonecodes/rossiya/leningradskaya-oblast/">городов Ленинградской области</a>,
<a href="/phonecodes/rossiya/moskovskaya-oblast/">городов Московской области</a>, 
<a href="/phonecodes/ssha/">коды Америки</a>
</div>

<h3>Порядок набора номера:</h3>
<div><b>Как позвонить?</b></div>
<div>С городского телефона: <b>8-гудок-(код выхода на международную связь)-(международный код страны)-(код города)-(номер абонента)</b>*</div>
<div>С мобильного телефона: <b>+(международный код страны)-(код города)-(номер абонента)</b>**</div>
<div style="padding:10px 0 20px 0px">
<div>* <i><b>код выхода на международную связь = 10(для России)</b> (<i>код выхода на международную связь, зависит от оператора связи</i>)</i></div>
<div>** <i>набирать «<b>+</b>» или «<b>8</b>» перед кодом страны, зависит от мобильного оператора</i>.</div>
</div>
<div style="width:49%;float:left">
<h2>Коды стран</h2>
(После названия страны, в скобочках, указан код страны)
</div>
<div style="width:49%;float:left">
<h2>Коды городов</h2>
(По названию страны можно перейти к кодам городов выбранной страны)
</div>
<div class="clear"></div>
<h2>Алфавитный указатель стран мира</h2>

<?
$prevLetter='';
?>
<div id="phonecodes">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td>
				<?foreach($codes as $letter => $codes):?>
					<?if ($letter == 'К' || $letter == 'Т'){?>
						</td><td>
					<?}?>
					<h2 class="let"><?=$letter?></h2>
					<ul>
					<?foreach($codes as $code):?>
					
						<?if(count($code['haschilds'])==2||count($code['haschilds'])==1):?>
						<li><?=$code['code']['country']?> (<?=$code['code']['countrycode']?>)</li>
						<?else:?>
						
						<li><a href='/phonecodes/<?=$code['code']['cat']?>/'><?=$code['code']['country']?></a> (<?=$code['code']['countrycode']?>)</li>
						<?endif?>
					<?endforeach?>
					</ul>
				<?endforeach?>
				</td>
			</tr>
		</tbody>
	</table>
</div>


<?include("templates/subs/footer.php");?>
