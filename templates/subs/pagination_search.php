<?
$otrezok = $app->config['page_count_visible'];

$curotr = ceil(($curpage+1) / $otrezok);

$start=($curotr-1)*$otrezok;
if($start==0)
	$start=1;

$end = min($curotr*$otrezok,$npages)+1;

?>
<?if($npages>=1):?>
<div class="paging">
	<br><b>Страница</b>: 
	
	<?if($start!=1):?>
	[<a href='/<?=$place?>/<?=($catalogname?$catalogname."/":"")?><?=($nextcat?$nextcat."/":"")?><?=($what?"what/".$what."/":"")?>p/<?=($start-1)?>/'>««</a>]
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
			
			<a href="/<?=$place?>/<?=($catalogname?$catalogname."/":"")?><?=($nextcat ? $nextcat."/":"")?><?=($what?"what/".$what."/":"")?>p/<?=$i?>/"><?=$i?></a> 
			
			<?
		}
	}
	?>
	<?if($end!=$npages+1):?>
	[<a href='/<?=$place?>/<?=($catalogname?$catalogname."/":"")?><?=($nextcat?$nextcat."/":"")?><?=($what?"what/".$what."/":"")?>p/<?=($end+1)?>/'>»»</a>]
	<?endif?>
	
	из <?=ceil($npages)?> <div class="vsego">Всего записей: <?=$total?></div><br><br>
	<?
	?>


</div>
<?endif?>

