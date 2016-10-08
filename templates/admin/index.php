<?include("header.php")?>

<div class=tabs>

	<!--<div class='statdiv'><h3>переходы по баннерам</h3>
		<?foreach($app->config['advs'] as $adv):?>
			<?=$adv?>: <?=intval(stat::get($adv.'_redirects_count'))?><br/>
		<?endforeach?>
	</div>-->

	<div class='statdiv'><h3>сводная статистика</h3>
		Онлайн: <?=$online?> (<?=$humans_online?> чел)<br/>
		Ошибок: <?=$errors?><br/>
		Хиты: <?=$visits?><br/>
		Компаний: <?=$company_num?><br/>
		Новостей: <?=$conews_num?><br/>
		Акций: <?=$discount_num?><br/>
	</div>
	
	<div class='statdiv'><h3>производительность</h3>
		Кеш попаданий: <?=intval(stat::get('cache_hits'))?><br/>
		Кеш промахов: <?=intval(stat::get('cache_misses'))?><br/>
		MemCached размер: <?=sprintf("%.2f MB",floatval(Cache::db_size())/1024.0/1024.0)?><br/>
		MemCached соединений: <?=Cache::current_connections()?><br/>
	</div>
	
	<div class=statdiv><h3>Zend OPCache</h3>
	<?foreach($zendopcache as $k => $v):?>
	<?=$k?>: <?=$v?><br/>
	<?endforeach?>
	</div>
	
	<!--<div class=statdiv><h3>APC</h3>
	<?foreach($apc_cache_info as $k => $v):?>
		<?if(!is_array($v)):?>
		<?=$k?>: <?=$v?><br/>
		<?endif?>
	<?endforeach?>
	</div>
	-->
	<div class='statdiv'><h3>защита</h3>
		Ботов обнаружено: <?=intval(stat::get('bot_detects'))?><br/>
		Ошибок капчи: <?=intval(stat::get('captcha_fails'))?><br/>
		Разсинхронизаций куки: <?=intval(stat::get('frame_cookie_desync'))?><br/>
	</div>
	
	<div class=clear></div>
	
	<div class='statdiv'><h3>внутренние системы</h3>
		<a href='https://<?=$_SERVER['HTTP_HOST']?>/memcached/' title='memcached сервер - статистика'>MemCached</a> <a href='/webgrind/' title='профайлер'>WebGrind</a>
		<a href='https://<?=$_SERVER['HTTP_HOST']?>/dminer.php' title='тулза для ДБ'>Adminer</a>
		<a href='https://<?=$_SERVER['HTTP_HOST']?>:19200/_plugin/head/' title='тулза для ДБ'>ES Head</a> 
		<a href="https://<?=$_SERVER['HTTP_HOST']?>:19200/_plugin/HQ/">HQ</a>
	</div>

</div>

<?include("footer.php")?>