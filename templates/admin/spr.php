<?include("header.php")?>

<?foreach($tarifs as $t):?>
<div style='padding:10px;float:left'>
<i><?=$t['caption']?></i> <br/>
<strong><?=$t['count']?></strong>
</div>
<?endforeach?>
<?include("footer.php")?>
