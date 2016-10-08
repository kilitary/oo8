<?
mysql_connect('localhost', '008', 'oo8oo8');
mysql_select_db('oo8_main');
mysql_query("set names utf8");

$firms = mysql_query("SELECT * FROM _it_FIRMS");
while ($firm = mysql_fetch_assoc($firms))
{
   $full = trim($firm['fullname']);
   $short = trim($firm['shortname']);
   $co_names = trim($firm['co_names']);
   
   $cnames = explode("|", $co_names);
   $ncnames = array();
   foreach ($cnames as $cn)
   {
      $cn = trim($cn);
      if ($cn == $full || $cn == $short)
         continue;
      $ncnames[] = $cn;
   }
   $nccnames = implode("|", $ncnames);
   echo "$firm[cID] [$co_names] full:$full short:$short => $nccnames <br/>";
   mysql_query("UPDATE _it_FIRMS
		SET co_names = '$nccnames'
		WHERE cID = $firm[cID]");
}

echo "all done";
?>