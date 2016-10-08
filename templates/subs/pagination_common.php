<?
$otrezok = $app->config['page_count_visible'];
//$cur = $npages / $otrezok;
//$curpage++;
//$curpage=15;
$curotr = ceil(($curpage+1) / $otrezok);


//echo "Длина отрезка: $otrezok, текущая страница: $curpage, текущий отрезок: $curotr, всего страниц: $npages";

//echo "npages=$npages";
$start=($curotr-1)*$otrezok;
if($start==0)
	$start=1;
$end = min($curotr*$otrezok,$npages)+1;
		//echo "<br />Отрезок ОТ $start ДО $end"
?>
<?if($npages>=1):?>
	<div class="paging">
	<br><b>Страница</b>: 
	
	<?if($start!=1):?>
		[<a href='/<?=$place?>/<?=$catalogname?>/<?=($nextcat?$nextcat."/":"")?>p/<?=($start-1)?>/'>««</a>]
	<?endif?>
	<?
		for ($i=$start;$i<=$end;$i++) 
		{
			if($i==($curpage+1))
			{
				?><span class="sel"><?=($i)?></span><?
			} 
			else
			{
			?> 
			
			<a href="/<?=$place?>/<?=$catalogname?>/<?=($nextcat ? $nextcat."/":"")?>p/<?=$i?>/"><?=$i?></a> 
			
			<?
			}
		}
		?>
		<?if($end!=$npages+1):?>
			[<a href='/<?=$place?>/<?=$catalogname?>/<?=($nextcat?$nextcat."/":"")?>p/<?=($end+1)?>/'>»»</a>]
		<?endif?>
		
		из <?=ceil($npages)?> <div class="vsego">Всего записей: <?=$total?></div><br><br>
		<?
	?>

	</div>
<?endif?>

