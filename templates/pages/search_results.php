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
<?
$i=0;
?>
<h1><?=mb_convert_case(urldecode($key),MB_CASE_TITLE)?></h1>
<hr>
<?include("templates/subs/pagination_search.php");?>
<?
$i=0;//$curpage*$app->config['objects_per_page'];
?>
<?if(!count($results)):?>
<div class="main_content">
	<h1>Ничего не найдено!</h1> Попробуйте изменить параметры поиска
</div>
<?endif?>
<?foreach($results as $result):?>
	<div class="sresi">
			<div class="co">
			
				<?if($result['logo'] && ($result['razm_type'] != 1 && $result['razm_type']!=9)):?>
					<a href="/company/<?=$result['cID']?>/"><img class="co_logo" align="right" style="margin:10px" border="0" src="<?=$result['logo']		?>" alt="<?=$result['shortname']?>"></a> 
				<?endif?>
		 
				<h2>
					<span class="cn1"><?=++$i?></span> 
					<a title="<?=strip_tags($result['fullname'])?>" href="/company/<?=$result['cID']?>/"> <?=$result['shortname']?>
					 <?if(!empty($result['co_names'])):?>
						• 
					<?endif?>
					<?=str_replace("|", " • ", $result['co_names'])?>
				</h2>
				<div class="copages">
					<a href="/company/<?=$result['cID']?>/contacts/">Контакты</a>
					
					<?if($result['articles']):?>
					<a href="/company/<?=$result['cID']?>/articles/">Статьи</a>
					<?endif?>
					
					<?if($result['conews']):?>
					<a href="/company/<?=$result['cID']?>/conews/">Новости</a>
					<?endif?>
					
					<?if($result['discount']):?>
					<a href="/company/<?=$result['cID']?>/discount/">Акции и скидки</a>
					<?endif?>
					
					
					<?if($result['vacancy']):?>
					<a href="/company/<?=$result['cID']?>/vacancy/">Вакансии</a>
					<?endif?>
					
					<?if($result['pricelist']):?>
					<a href="/company/<?=$result['cID']?>/getpricelist/">Скачать прайс лист</a>
					<?endif?>
					
					<?if($result['attribs'][5]&& ($result['razm_type'] == 3 || $result['razm_type'] == 4)):?>
					<a class="url-extlink" target="_blank" href="/count/cvlink/?<?=$result['attribs'][5][0]['value']?>">Сайт компании</a>
					<?endif?>
					
				</div>
				
				<?if($result['razm_type'] == 4):?>
				<div class="photos_line">
					<?
					$npic=0;
					?>
					<?foreach($result['pics'] as $pic):?>
					<?
					if($npic++>=6)
						break;
					?>
					<a href="/company/<?=$result['cID']?>/"><img class=flimg height=50 src="/content/coimgs/<?=$result['cID']?>/<?=$pic?>_t.jpg"></a>
					<?endforeach?>
					
				</div>
				<?endif?>
				
			<?
			$fulladdr = Core::join_strings($result['addr']['region'] . ", ".$result['addr']['city'] . ", ".$result['addr']['street'].", ".
					$result['addr']['dom']. ", ".$result['addr']['korp'],",");
			?>
				<strong><?=$result['fullname']?></strong> - <?=$result['cinfo']?>
				<div>
					<ul class="co_addr">
					<li>
						<?if(($result['razm_type']==4 || $result['razm_type']==5) && !empty($result['attribs'][1])):?>
						<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border=""> +7 <?=(strstr($result['attribs'][1][0]['value'], "(") ? "":"(812)")?> <?=$result['attribs'][1][0]['value']?>&nbsp; 
						<?endif?>
						<?if(!empty($result['addr']['street'])):?>
							<a style="padding-right:30px" href="/company/<?=$result['cID']?>/"><?=$fulladdr?></a>
						<?endif?>
					</li>
					<?if($result['firm_html']):?>
							<br/>
							<hr>
						<div>
							<?=$result['firm_html']?>
						</div>
							<hr>
					<?endif?>
					<?if(count($office['offices'])):?>
						<?foreach($result['offices'] as $office):?>
						<li>
							<?if(!empty($office['attribs'][1])):?>
							<img style="margin:5px 0 -2px 0;" src="/itlib/contacts/phone.gif" alt="Телефон" border=""> <?=$office['attribs'][1]?>&nbsp; 
							<?endif?>
							<?if(!empty($office['addr']['street'])):?>
								<a style="padding-right:30px" href="/company/<?=$result['cID']?>/"><?=$fulladdr?></a>
							<?endif?>
						</li>
						<?endforeach?>
					<?endif?>
					</ul>
				</div>
				
				<?if(count($office['discounts'])):?>
				<div class="costuffs">
					<ul>
					<?foreach($office['discounts'] as $disc):?>
					<li><a href='/company/<?=$office['cID']?>/discount/#<?=$office['sID']?>'><?=$office['caption']?></a></li>
					<?endforeach?>
					</ul>
				</div>
				<?endif?>

				<?if($result['discount008']):?>
				<div class="corner c-discount">
				   <div>
				    <div>
				     <div>
				      <!-- in content -->
							<div class="discount008">
							<img align="left" width="93" title="" alt="" height="61" border="0" src="/content/discount/card<?=$result['cID']?>.png">
							<h4 style="margin-top:0px">Действующие скидки:</h4><em style="color:red; font-weight:bold"><?=$result['discount008']?></em>
							</div>
				      <!-- /in content -->
				     </div>
				    </div>
				   </div>
				</div>
				<?endif?>
						
				
				<i>В рубриках</i>:  <?=$result['co_rubrics']?>
			</div>
	<div class="clear"></div>
	</div>
<?endforeach?>
<?include("templates/subs/pagination_search.php");?>
<?include("templates/subs/footer.php");?>
