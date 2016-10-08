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

<?
$app->vars['title']='Телефонные коды стран и городов мира';
?>
<div class="main_content">
        <h1><?=$base_form[0]?> — код <?=$codes[0]['countrycode']?>  (телефонный код <?=$base_form[1]?>)</h1>
<div class="r-description"><em>Телефонные коды городов <strong><?=$base_form[1]?></strong> . Обратите внимание, некоторые города могут иметь несколько кодов, тогда коды указаны через запятую. Телефонные коды других стран смотрите на странице <a title="телефонные коды стран мира" href="/phonecodes/">коды стран</a></em></div>
<h3>Порядок набора телефонного номера для <?=$base_form[1]?> (код <?=$codes[0]['countrycode']?> = код <?=$base_form[1]?>)</h3>
<div><b>Как позвонить в <?=$base_form[5]?>?</b></div>
<div>С городского: <b>8-гудок-10-<span title="международный код страны <?=$base_form[0]?>"><?=$codes[0]['countrycode']?></span>-(код города)-(телефонный номер абонента)</b>*</div>
<div>С городского (внутри страны): <b>8-гудок-(код города)-(телефонный номер абонента)</b></div>
<div>С мобильного: <b>+<span title="международный код страны <?=$base_form[0]?>"><?=$codes[0]['countrycode']?></span>-(код города)-(номер телефона абонента)</b>**</div>

<div style="padding:10px 0 20px 0px">
<div>* <i>при звонке из страны с кодом &laquo;<?=$codes[0]['countrycode']?>&raquo; код страны (из которой совершаете звонок совпадает с кодом страны куда хотите позвонить) <b>в большинстве случаев нужно опускать</b>, так же как и <b>код выхода на международную связь</b> (код 10 - <i>код выхода на международную связь, код зависит от оператора связи</i>)</i></div>
<div>** <i>набирать &laquo;<b>+</b>&raquo; или &laquo;<b>8</b>&raquo; перед кодом страны, зависит от мобильного оператора</i>.</div>
</div>

<div id="phonecodes">

<table width="100%" border="0" cellspacing="0" cellpadding="3" class="itrows">
<tr><td><strong>Наименование<strong></td><td width="80"><strong>Код страны</strong></td><td width="100" class="tac"><strong>Код города</strong></td></tr>


<?foreach($codes as $idx => $code):?>
<tr><td><?=$code['city']?></td><td><?=$code['countrycode']?></td><td> (<?=$code['citycode']?>)</td></tr>
<?endforeach?>
</table>

</div>


<?include("templates/subs/footer.php");?>
