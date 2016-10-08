<?include("header.php")?>

<?if($rmsg):?>
<span style='color:red'><?=$rmsg?></span>
<?endif?>

<?if($gmsg):?>
<span style='color:green'><?=$gmsg?></span>
<?endif?>


<form method=post>
	<input type=hidden name=cID id=cID value=<?=$selcompany['cID']?>>
	<div class=' contentdiv' >
	<div class=clear></div>
	<br/>

	<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">сохранить
	</button>
	<button onclick='DeleteCompany(<?=$company_id?>)' type=button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить компанию
	</button>
	<div style='float:right'>
		<a href='http://<?=$_SERVER['HTTP_HOST']?>/company/<?=$selcompany['cID']?>/'>перейти в компанию на сайте</a>
	</div>
	<div id=topmsg style='display:inline'></div>
	<div class=clear></div>
   <?if(!$company['cID']):?>
   <h2 style='color:red'>компания удалена!</h2>
   <?endif?>
 <div id="devview" title="dev" style='display:none'>
            <?foreach($devviewcompany as $k => $v):?>
            <div style='width:300px;float:left'><strong><?=$k?></strong> <i><?=($v ? $v: '[NULL]')?></i></div>
            <?endforeach?>
        </div>

	<div class='ui-widget-content' style='min-height:100%;width:21%;float:left;margin:5px;padding:5px'>
		
		<ul class='officelistdiv'>
		<a style='font-size:11px;color:darksilver' class=addmore href='/system/firms/new/?cID=<?=$primary_office['cID']?>&shortname=<?=$o['shortname']?>'>+ добавить филиал/группу филиалов</a><br/><br/>
			<?if($primary_office):?> 
			<li <?=($primary_office['cID'] == $company_id ? 'style="background-color:lightblue"':'')?>>
						
						<a href='/system/firms/edit/<?=$primary_office['cID']?>/' <?=(($primary_office['parent']['cID']==$parent['cID'])?'style="border-bottom:1px dotted orange"':'')?>> <?=$primary_office['shortname']?><br/> <?=$primary_office['cID']?></a>
					</li>
			<?endif?>
			
				
			<?foreach($offices as $group => $office):?>
				<?
				$main_office=NULL;

				?>	
					
				<h3 class=shortname style='padding-top:12px !important;'><?=$group?> </h3>
				<?foreach($office[1] as $o):?>
				
					<?
					if($o['office_type'] == NULL)
                        $main_office = $o['cID'];
					?>
					<?if($o['cID'] == $company_id):?>
					<li <?=($o['cID'] == $company_id ? 'style="background-color:lightblue"':'')?>>
						<?=($o['published'] ==  'yes' ? '' : '<strike>')?>
						<a style='font-size:11px;' href='/system/firms/edit/<?=$o['cID']?>/' <?=(($o['parent']['cID']==$parent['cID'])?'style="border-bottom:1px dotted orange"':'')?>><?=sprintf("%05d",$o['cID'])?> <?=!empty($o['office_caption'])?'[A]':'[K]'?> <?=Core::join_strings($o['addr']['street'].", ".$o['addr']['dom'],",")?></a>
						<?=($o['published'] ==  'yes' ? '' : '</strike>')?>
					</li>
					<?else:?>
					
					<li <?=($o['cID'] == $company_id ? 'style="background-color:lightblue"':'')?>>
					<?=($o['published'] ==  'yes' ? '' : '<strike>')?><a style='font-size:11px' href='/system/firms/edit/<?=$o['cID']?>/'><?=sprintf("%5d",$o['cID'])?> <?=!empty($o['office_caption'])?'[A]':'[K]'?> <?=Core::join_strings($o['addr']['street'].", ".$o['addr']['dom'],",")?></a><?=($o['published'] ==  'yes' ? '' : '</strike>')?>
					</li>
					
					<?endif?>
				<?endforeach?>
				
				
				
				<?foreach($office[0] as $o):?>
				
				<?
					if(!$main_office)
                        $main_office = $o['cID'];
					?>
					<?if($o['cID'] == $company_id):?>
					<li <?=($o['cID'] == $company_id ? 'style="background-color:lightblue"':'')?>>
						<?=($o['published'] ==  'yes' ? '' : '<strike>')?>
						<a style='font-size:11px' href='/system/firms/edit/<?=$o['cID']?>/' <?=(($o['parent']['cID']==$parent['cID'])?'style="border-bottom:1px dotted orange"':'')?>><?=sprintf("%5d",$o['cID'])?> <?=!empty($o['office_caption'])?'[A]':'[K]'?> <?=Core::join_strings($o['addr']['street'].", ".$o['addr']['dom'],",")?></a>
						<?=($o['published'] ==  'yes' ? '' : '</strike>')?>
					</li>
					<?else:?>
					
					<li <?=($o['cID'] == $company_id ? 'style="background-color:lightblue"':'')?>>
					<?=($o['published'] ==  'yes' ? '' : '<strike>')?><a style='font-size:11px' href='/system/firms/edit/<?=$o['cID']?>/'><?=sprintf("%5d",$o['cID'])?> <?=!empty($o['office_caption'])?'[A]':'[K]'?> <?=Core::join_strings($o['addr']['street'].", ".$o['addr']['dom'],",")?></a><?=($o['published'] ==  'yes' ? '' : '</strike>')?>
					
					</li>
					
					<?endif?>
				<?endforeach?>
				<a style='font-size:11px;color:darksilver' class=addmore href='/system/firms/new/?cID=<?=$primary_office['cID']?>&shortname=<?=$o['shortname']?>&parent=<?=$main_office?>'>+ добавить филиал</a>
				
				
				 
			<?endforeach?>
		
		</ul>
		<br/>
		Поле вводящего:<br/>
		<textarea class=inputarea name=input rows=70 cols=100 class=inputarea><?=($company['input'])?></textarea>
		 <div style='float:right'>
             <a href='#' onclick=' $( "#devview" ).dialog({Width: 900,minWidth:900});return false;'>dev</a>
            </div>
        
	</div>
    
   
	
	<div class=tabs id=tabs style='float:left;min-height:100%;width:70%'>
	<ul>
		<li><a href='#company'>Компания</a></li>
		<li><a href='#address'>Адрес</a></li>
		<li><a href='#contacts'>Контакты</a></li>
		<li><a href='#dopinfo'>ДИ</a></li>
		<li><a href='#rubrics'>Рубрики</a></li>
		<?if($company_id == $primary_office['cID'] ):?>
		
		<li><a href='#dogovor'>Договор</a></li>
		
		<li><a href='#banners'>Баннеры</a></li>
		<li><a href='#conews'>Новости</a></li>
		<li><a href='#discount'>Акции</a></li>
		<li><a href='#vacancy'>Вакансии</a></li>
		<li><a href='#articles'>Статьи</a></li>
		<?endif?>
	</ul>
	
	<div id=dopinfo idx=1>
	<table class=firmtbl>
	<tr><td><strong>Краткая информация</strong></td></tr><tr><td>
	
					<textarea class=inputarea id=inputarea maxlength=1000 rows=70 cols=80 name=inputarea><?=($selcompany['cinfo'])?></textarea>
					</td>
				</tr>
	<tr><td><strong>Дополнительная информация</strong></td></tr><tr><td>
					<textarea name=firm_html id=firm_html rows=70 cols=80  class=ckeditor><?=($selcompany['firm_html'])?></textarea>
					</td>
				</tr>
	</table>

	</div>
	
	<div id=contacts idx=3>
	
		<div id=original_contact style='clear:both;display:none'>
			<select name="attrib_type[]">
				<?foreach($attrib_types as $type):?>
				<option value=<?=$type['ID']?>><?=$type['caption']?></option>
				<?endforeach?>
			</select>
			<input size=33 name='value[]' value=' ' placeholder='значение'>
			<input size=33 name='info[]'value=' ' placeholder='инфо'>
	
		</div>
		

		<div id=original_contact2 >
			
			<?foreach($selcompany['attr_all'] as $a):?>
			<div id=contact<?=$a['faID']?>>
				<div class=clear></div>
				
				
				<select name="attrib_type[]">
					
					<?foreach($attrib_types as $type):?>
					<option <?=($type['ID'] == $a['type']?"selected":"")?> value='<?=$type['ID']?>'><?=$type['caption']?></option>
					<?endforeach?>
				</select>
				
				<input size=33 name='value[]' placeholder="значение" value='<?=$a['value']?> '>
				<input size=33 name='info[]' placeholder="описание" value='<?=$a['info']?> '>
				<!--<input name="pos[]" placeholder="позиция"  value=<?=$a['pos']?>>-->
				<input type=hidden name="faID[]" value=<?=$a['faID']?>>
				<button type=button  onclick='DelContact(<?=$a['faID']?>)' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button>
			</div>
			<?endforeach?>
		
		</div>
		<a  class=newcontactlink 	href='javascript:AddContact()'>+ добавить контакт</a>
		
	
	</div>	
	
	<div id=address idx=2>
		<Table class=firmtbl>
			
			
				<tr><td><strong>Регион РФ</strong></td></tr><tr><td><input size="100px" name=region id=region value='<?=(empty($selcompany['addr']['region'])?'Санкт-Петербург':$selcompany['addr']['region'])?>'></td></tr>
				<tr><td><strong>Район региона</strong></td></tr><tr><td><input size="100px" name=area id=area value='<?=$selcompany['addr']['area']?>'></td></tr>
				<tr><td><strong>Населенный пункт</strong></td></tr><tr><td><input size="100px" name=city id=city value='<?=$selcompany['addr']['city']?>'></td></tr>
				<tr><td><strong>Район города</strong></td></tr><tr><td>
					
					<input name=district size="100px" value='<?=$selcompany['addr']['district']?>' id=district>
					
				</td></tr>
				<tr><td><strong>Улица</strong></td></tr><tr><td><input size="100px" id=street name=street value='<?=$selcompany['addr']['street']?>'><div id="result-search"></div></td></tr>
				
				<tr><td></td></tr><tr><td><strong>Дом </strong><input  name=dom id=dom width=20px  value='<?=$selcompany['addr']['dom']?>'> 
				<strong>Корпус</strong> <input  width=20px name=korp value='<?=$selcompany['addr']['korp']?>'> <strong>Литера </strong><input name=lit value='<?=$selcompany['addr']['lit']?>'></td></tr>
				<tr><td><strong>Почтовый индекс</strong></td></tr><tr><td><input size="100px" name=index placeholder="" value='<?=$selcompany['addr']['index']?>'></td></tr>
				<tr><td><strong>Комментарий</strong></td></tr><tr><td><input name=comment   size="100px"  value='<?=$selcompany['addr']['info']?>'></td></tr>
				<tr><td><strong>Название вместо адреса в меню</strong></td></tr><tr><td><input  size="100px" name=name_menu value='<?=$selcompany['addr']['name_menu']?>'></td></tr>
				<tr><td><strong>Как добраться</strong></td></tr>
				<tr><td><textarea name=transport rows=20 cols=100><?=$selcompany['addr']['transport']?></textarea></td></tr>
				
				<tr><td><strong>Ближайшее метро (<a href='javascript:ShowHelp("Метро и расстояния определяються автоматически, Вам остаеться только выбрать подходящие. Метро с дальностью более 5км не даеться для выбора. От 3х до 5км - на Ваш выбор. Менее 2км - автоматически выбраны")'>?</a>)</strong>
				<br/>
				<ul id=metrolist>
				<?foreach($selcompany['metros'] as $m):?>
				<li><?=$m['metro']." ".sprintf("%.1f", ($m['dist']/1000.0))."км"?></li>
				<?endforeach?>
				</ul>
				<button type=button id=detectmetrobtn onclick='DetectMetro()' disabled class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">обнаружить
				</button>
				<button type=button id=deletemetrobtn onclick='DeleteMetro(<?=$company['cID']?>)'  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить
				</button>

				<br/><br/><div class=clear></div>
				
				<div id=map style='border:1px solid gray;width:640px;height:480px;display:none;float:left;padding:4px'></div><div style='float:left;clear:both' id=metrodiv></div></td></tr>
				 <tr><td><strong>Расположение на карте</strong> <input id=sh name=sh placeholder="xx.xx"> <input name=dl id=dl placeholder="xx.xx"></td></tr><tr><td></td></tr>
				
			</table>
	</div>
	
	
	
	<div id=company idx=4>
		

		<div style='display:inline;float:left;'>
			
			<input name=cID type=hidden value=<?=$company['cID']?>>
			<table class=firmtbl>
				
				<tr>
				<td colspan=2><label>
				<label  class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="published">
				  <input name=published type=checkbox  id="published" class="mdl-checkbox__input" <?=($selcompany['published'] == 'yes' ? 'checked':'')?> />
				  <span class="mdl-checkbox__label">Отображать компанию</span>
				</label>

				</td>
				</tr>
				
				<?if(!$selcompany['office_type']):?>
				<tr><td>
				<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="view_setup">
				  <input type=checkbox name=view_setup <?=($selcompany['view_setup'] == 1 ? 'checked':'')?>  style='display:inline' id="view_setup" class="mdl-checkbox__input"  />
				  <span class="mdl-checkbox__label">Головной офис </span>
				

				(<a href='javascript:ShowHelp("Незабудьте снять эту галочку у предыдущей компании (если Вы её ставили)")'>?</a>)<?=($primary_office['view_setup'] == 1 && $primary_office['cID'] != $selcompany['cID'] ? "<br/>
				<a href='/system/firms/edit/$primary_office[cID]/'>[текущий: $primary_office[cID]]</a>":"")
				?></label></td></tr>
				<?endif?>

				
				<?if($primary_office['cID'] == $selcompany['cID']):?>
				<tr><td><strong>Тип тарифа</strong></td></tr><tr>
				<td><select name=razm_type>
				<option value=0>[не выбран]</option>
				<?foreach($razm_types as $ot):?>
				<option <?=($selcompany['razm_type'] == $ot['ID'] ? "selected":"")?> value=<?=$ot['ID']?>><?=$ot['caption']?></option>
				<?endforeach?>
				</select>
				</td></tr>
				
				<tr><td><strong>Форма собственности</strong></td></tr><tr>
				<td><select name=ownership_type>
				<option value=0>[не выбрана]</option>
				<?foreach($ownership_types as $ot):?>
				<option <?=($selcompany['ownership_type'] == $ot['ID'] ? "selected":"")?> value=<?=$ot['ID']?>><?=$ot['caption']?></option>
				<?endforeach?>
				</select>
				</td></tr>
				<?endif?>
				
				
			
				<?if($selcompany['parent']!=$selcompany['cID']):?>
				<tr><td><strong>Тип филиала </strong></td></tr><tr>
				<td><select name=office_type>
				<option value=0>[не выбран]</option>
				<?foreach($office_types as $ot):?>
				<option <?=($selcompany['office_type'] == $ot['ID'] ? "selected":"")?> value=<?=$ot['ID']?>><?=$ot['caption']?></option>
				<?endforeach?>
				</select>
				</td></tr>
				<?endif?>
				
				<tr><td>
				<strong>Сокращенное название компании (<a href='javascript:ShowHelp("Также это поле используеться для создания новой группы филиалов или присоединение к уже существующей.уппы филиалов.")'>?</a>)</strong></strong></td></tr><tr><td> <input  size="100px" required name=shortname placeholder="введите" value='<?=$selcompany['shortname']?>'></td></tr>
				<tr><td><strong>Полное название </strong></td></tr><tr><td><input placeholder="Интернет-магазин DeloMed Group"  size="100px"  name=fullname id=fullname value='<?=$selcompany['fullname']?>' onkeyup='$("#metatitle").val($("#fullname").val());'></td></tr>
				<tr><td><strong>Мета-заголовок страницы (<a href='javascript:ShowHelp("Возможно будет использоваца в СЕО. Как правило - краткая информация до 50 символов")'>?</a>)</strong></td></tr><tr><td><input id=metatitle  size="100px" name=title value='<?=$selcompany['title']?>'></td></tr>
				<tr><td><strong>Мета-keywords страницы (<a href='javascript:ShowHelp("Возможно будет использоваца в СЕО. Как правило - краткая информация до 50 символов")'>?</a>)</strong></td></tr><tr><td><input id=metakeys size="100px" name=metakeys value='<?=$selcompany['metakeys']?>'></td></tr>
				<tr><td><strong>Мета-дескрипшн страницы (<a href='javascript:ShowHelp("Возможно будет использоваца в СЕО. Как правило - краткая информация до 50 символов")'>?</a>)</strong></td></tr><tr><td><input id=metadesc size="100px" name=metadesc value='<?=$selcompany['metadesc']?>'></td></tr>
				
					<tr><td><strong>Дополнительные названия (через запятую) </strong></td></tr><tr><td><input  size="100px"  name=co_names value='<?=$selcompany['co_names']?>'></td></tr>
					<tr><td><strong>Лицензия фирмы </strong></td></tr><tr><td><input   size="100px" name=license value='<?=$selcompany['license']?>'></td></tr>
					<tr><td><strong>Слоган компании </strong></td></tr><tr><td><input   size="100px" name=slogan value='<?=$selcompany['slogan']?>'></td></tr>
					<tr><td><strong>Дисконтная карта </strong></td></tr><tr><td><input size="100px" name=discount008 value="<?=$selcompany['discount008']?>"></td></tr>
					<tr><td><strong>Часы работы </strong></td></tr><tr><td><textarea class=inputarea rows=10 cols=100 name=work_time><?=$selcompany['work_time']?></textarea></td></tr>
					
				
				
				<tr><td><strong>Признак компании </strong></td></tr><tr><td><label>Производитель <input value=2 name=firm_type type=checkbox></label>
				<label>Официальный дилер <input value=1 name=firm_type type=checkbox></label></td></tr>
				<tr><td><strong>Тип торговли </strong></td></tr>
							<tr><td>
				<label><input type=checkbox name='trade_type[]' value=1> Розница</label>
				<label><input type=checkbox name='trade_type[]' value=2> Мелкий опт</label>
				<label><input type=checkbox name='trade_type[]' value=3> Опт</label>
				</tr>
				<tr><td>
					<button type=button onclick="DeleteCompany(<?=$company_id?>);" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить компанию и филиалы
				</button>
					</td></tr>
			
				
			</table>
			


			<div class='clear'></div>
			
			
		</div>
	</div>
	
	

	
	<div id="rubrics" idx=5>
	<?if($company_id != $primary_office['cID']):?>
	<label>Свой набор <input id=owncats <?=($selcompany['rsID'] == $primary_office['rsID'] ? '':'checked')?> type=checkbox onclick='toggleCats()' name=owncats></label>
	<?endif?>
		<ul id=tree>
		<?foreach($ncats as $cat):?>
			
			<li>
				
				<label><input onclick="$('#cat<?=$cat['rID']?>').attr('checked','')"  id=cat<?=$cat['rID']?> value=<?=$cat['rID']?> <?=($cat['hassub'] ? "checked":"")?> type=checkbox name='cat[]' />
				<a href='javascript:$("#subs<?=$cat['rID']?>").toggle();'><?=$cat['caption']?></a></label>
				<ul style='display:<?=($cat['hassub'] ? 'block':'none')?>' id=subs<?=$cat['rID']?>>
					
					
					<?foreach($cat['subs'] as $subcat):?>
					
					<li parent=cat<?=$cat['rID']?>>
					<label><input onclick='$("#cat<?=$cat['rID']?>").attr("checked","checked")' <?=(in_array($subcat['rID'], $rubrics) ? "checked":"")?>  type=checkbox name='cat[]' value='<?=$subcat['rID']?>'/><?=$subcat['caption']?></label>
					</li>
					<?endforeach?>
					
				</ul>
			</li>
		<?endforeach?>
		</ul>
		<div class=debugdiv><br/>rsID: <?=$company['rsID']?></div>
	</div>
	<?if($company_id == $primary_office['cID'] ):?>
	<div id=dogovor>
		<table class=firmtbl>
		<tr><td><strong>Агент</strong></td></tr>
		<tr><td>
			<select name=oID>
			<?foreach($users as $u):?>
			<option <?=($u['ID'] == $company['oID']?'selected':'')?> value='<?=$u['ID']?>'><?=$u['name']?></option>
			<?endforeach?>
			</select>
		</td>
		</tr>
		<tr><td><strong>Вводящий</strong></td></tr>
		<tr><td>
			<select name=uID> 
			<?foreach($users as $u):?>
			<option <?=($u['ID'] == $company['uID']?'selected':'')?> value='<?=$u['ID']?>'><?=$u['name']?></option>
			<?endforeach?>
			</select>
		</td>
		</tr>
		<tr><td><strong>Срок контракта</strong></td></tr>
		<tr><td>
			<select name=contracttime>
		
			<?for($i=1;$i<13;$i++):?>
				<option <?=($i==intval($company['contracttime'])?'selected':'')?> value='<?=$i?>'><?=$i?> мес.</option>
			<?endfor?>
			</select>
		</td>
		</tr>
		<tr>
				<td><strong>Дата актуальности</strong></td></tr>
				<tr><td><input name=actual_date id=actual_date class=datepicker initvalue='<?=date('d.m.Y',strtotime($selcompany['actual_date']))?>' value='<?=$selcompany['actual_date']?>'></td></tr>
				
				<tr>
				<td><strong>Дата отображения</strong></td></tr>
				<tr><td><input placeholder='C' initvalue='<?=date('d.m.Y',strtotime($selcompany['dateon']))?>' id=dateon class=datepicker name=dateon value='<?=$selcompany['dateon']?>'> 
				<input name=dateoff placeholder='по' initvalue='<?=date('d.m.Y',strtotime($selcompany['dateoff']))?>' id=dateoff class=datepicker value='<?=$selcompany['dateoff']?>'></td>
				</tr>
		<tr><td><strong>Номер счета оплаты</strong></td></tr>
		<tr><td>
			<input name=ordernum value='<?=$company['ordernum']?>'>
		</td>
		</tr>
			<tr><td><strong>Контакты ответственых лиц компании</strong></td></tr>
		<tr><td>
			<textarea rows=5 cols=80 name=correct_contacts><?=$company['correct_contacts']?></textarea>
		</td>
		</tr>
	</table>
</div>

</form>

<?if($company_id == $primary_office['cID'] ):?>
<div id=banners idx=6>

	<?foreach($banners as $b):?>
	<div id='banner_<?=$b['aID']?>' class=bannerdiv>
		<div><img  src='http://<?=$_SERVER['HTTP_HOST']?><?=$b['srcurl']?>'></div>
		<form method=post action='/system/ads/update/<?=$b['aID']?>/'>
			место:<?=$b['block']?>  
			Рубрика: <a href='http://<?=$_SERVER['HTTP_HOST']?><?=trim($b['catalog'],"* ")?>'><?=$b['catalog']?></a> Ид <?=$b['aID']?><br/>
			<strong><?=$b['caption']?></strong> 
			<input id=adateon name=adateon value='<?=date('d.m.Y',strtotime($b['dateon']))?>' 
			class=datepicker> 
			<input id=adateoff name=adateoff value='<?=date('d.m.Y',strtotime($b['dateoff']))?>' 
			class=datepicker>
		
			<button type=button onclick='document.location.href="/system/ads/delete/<?=$b['aID']?>/"' onclick="DeleteCompany(<?=$company_id?>);" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button>
		</form>

	</div>
	<?endforeach?>

	<div class='clear'></div>

	<div class=bannerdiv>
		
			Добавить новый баннер:
			<form method=post action='/system/ads/new/' enctype="multipart/form-data">
			<input required type=file name=logo>
			<br/>
			<label>С<input placeholder='с' id=dateon_new name=dateon_new class=datepicker></label> 
			По<label><input id=dateoff_new name=dateoff_new class=datepicker placeholder='по'></label><br/>	
			Ссылка<br/>
			<input name=url size=80 value='/company/<?=$selcompany['cID']?>/'>
			
			<div>Место<br/>
				<select required name=adv>
				<?foreach($app->config['advs'] as $a):?>
					<option value=<?=$a?>><?=$a?></option>
				<?endforeach?>
				</select>
			</div>
			<br/>
			
			<div id=catseldiv style='display:none;	clear:both'>
			<label><input  type=checkbox name='cats[]' value='0'>главная</label><br/>
				<?foreach($ncats as $c):?>
				
				<?if($i++%3 == 0):?>
				<div class=clear></div>
				<?endif?>
				
				<label style='clear:both;float:left'><input  type=checkbox name='cats[]' value='<?=$c['rID']?>'><?=$c['caption']?> <a href='#' onclick='$(".sub<?=$c['rID']?>").toggle();return false;'>>></a></label>
					<?foreach($c['subs'] as $sc):?>
					<div class="sub<?=$c['rID']?> clear" style='display:none;'>
					<label>- <input  type=checkbox name='cats[]' value='<?=$sc['rID']?>'><?=$sc['caption']?></label>
					</div>
					<?endforeach?>
				
				<?endforeach?>
			</div>
			<div class=clear>
			<button name=catalog type=button  onclick='showCatSelDiv()' class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">[выбрать рубрики]</button>
			<button type=submit  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			  добавить баннер
			</button>
			</div>
			<input type=hidden name=cID value='<?=$company['cID']?>'>
			
			</form>
		</div>

	</div>
	
	<div id=conews idx=7>
		<table class=firmtbl>
		<tr><th>№</th><th>ID</th><th>Название</th><th>начало</th><th>конец</th></tr>
		
		<?foreach($selcompany['conews'] as $s):?>
			<?
		if(empty($s['dateon']))
			$s['dateon'] = '-';
		else
			$s['dateon'] = date('d.m.Y',strtotime($s['dateon']));
		if(empty($s['dateoff']))
			$s['dateoff'] = '-';
		else
			$s['dateoff'] = date('d.m.Y',strtotime($s['dateoff']));
		?>
		<tr id=stuff<?=$s['sID']?>><td><?=++$i?></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['sID']?></a></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['caption']?></a></td><td><?=$s['dateon']?></td><td><?=$s['dateoff']?></td><td>
		<button type=button value='удалить' onclick='DelStuff(<?=$s['sID']?>)' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button>
		</td></tr>
		<?endforeach?>
		</table>
		<br/>
		<a href='javascript:NewStuff("conews",<?=$company['cID']?>);'>+добавить новость</a>
	</div>
	
	<div id=discount idx=8>
		<table class=firmtbl>
		<tr><th>ID</th><th>Название</th><th>начало</th><th>конец</th></tr>
		<?foreach($selcompany['discount'] as $s):?>
		<?
		if(empty($s['dateon']))
			$s['dateon'] = '-';
		else
			$s['dateon'] = date('d.m.Y',strtotime($s['dateon']));
		if(empty($s['dateoff']))
			$s['dateoff'] = '-';
		else
			$s['dateoff'] = date('d.m.Y',strtotime($s['dateoff']));
		?>
		<tr id=stuff<?=$s['sID']?>><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['sID']?></a></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['caption']?></a></td><td><?=$s['dateon']?></td><td><?=$s['dateoff']?></td><td><button type=button value='удалить' onclick='DelStuff(<?=$s['sID']?>)' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button></tr>
		<?endforeach?>
		</table>
		<br/>
		<a href='javascript:NewStuff("discount",<?=$company['cID']?>);'>+добавить скидку</a>
	</div>
	
	<div id=vacancy idx=9>
		<table class=firmtbl>
		<tr><th>№</th><th>ID</th><th>Название</th><th>начало</th><th>конец</th></tr>
		<?foreach($selcompany['vacancy'] as $s):?>
			<?
		if(empty($s['dateon']))
			$s['dateon'] = '-';
		else
			$s['dateon'] = date('d.m.Y',strtotime($s['dateon']));
		if(empty($s['dateoff']))
			$s['dateoff'] = '-';
		else
			$s['dateoff'] = date('d.m.Y',strtotime($s['dateoff']));
		?>
		<tr id=stuff<?=$s['sID']?>><td><?=++$i?></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['sID']?></a></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['caption']?></a></td><td><?=$s['dateon']?></td><td><?=$s['dateoff']?></td><td><button type=button value='удалить' onclick='DelStuff(<?=$s['sID']?>)' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button></tr>
		<?endforeach?>
		</table>
		<br/>
		<a href='javascript:NewStuff("vacancy",<?=$company['cID']?>);'>+добавить вакансию</a>
	</div>
	
	<div id=articles idx=10>
		<table class=firmtbl>
		<tr><th>№</th><th>ID</th><th>Название</th><th>начало</th><th>конец</th></tr>
		<?foreach($selcompany['articles'] as $s):?>
			<?
		if(empty($s['dateon']))
			$s['dateon'] ='-';
		else
			$s['dateon'] = date('d.m.Y',strtotime($s['dateon']));
		if(empty($s['dateoff']))
			$s['dateoff'] ='-';
		else
			$s['dateoff'] = date('d.m.Y',strtotime($s['dateoff']));
		?>
		<tr id=stuff<?=$s['sID']?>><td><?=++$i?></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['sID']?></a></td><td><a href='javascript:EditStuff(<?=$s['sID']?>,"<?=$s['stuff_type']?>")'><?=$s['caption']?></a></td><td><?=$s['dateon']?></td><td><?=$s['dateoff']?></td><td><button type=button value='удалить' onclick='DelStuff(<?=$s['sID']?>)' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">удалить 
				</button></tr>
		<?endforeach?>
		</table>
		<br/>
		<a href='javascript:NewStuff("articles",<?=$company['cID']?>);'>+добавить статью</a>
	</div>
	<?endif?>
	
	<?endif?>
	
	

	<div class=clear></div>
	
	<div id=stuffeditor>
	</div>
	<br/><br/>
	

	</div>
	<br/>
	<div class=clear></div>
	<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect ">сохранить
	</button>
	<div class=clear></div>
	<div style='float:right'>
		<button type=submit class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect " onclick='DeleteCompany(<?=$company_id?>)'>удалить компанию
	</button>
	</div>
</div>


<div id=dialog-message title="пояснение">

</div>

<script type='text/javascript'>
	var current = "firms";

	$(function()
	{
		CKEDITOR.replace('firm_html',
		{
			"extraPlugins": "imgbrowse",
			"filebrowserImageBrowseUrl": "/assets/js/ckeditor/plugins/imgbrowse/imgbrowse.html"
		});
		CKEDITOR.replace('inputarea',
		{
			"extraPlugins": "imgbrowse",
			"filebrowserImageBrowseUrl": "/assets/js/ckeditor/plugins/imgbrowse/imgbrowse.html"
		});
	/*CKEDITOR.replace('discount_html',
		{
			"extraPlugins": "imgbrowse",
			"filebrowserImageBrowseUrl": "/assets/js/ckeditor/plugins/imgbrowse/imgbrowse.html"
		});*/
	});
</script>


<?include("footer.php")?>