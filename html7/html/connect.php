<?php
/* $dbc = mysql_connect('%', 'wadmin', 'a7pLm%?y,D=?Y%7~');
 if (!$dbc)
     {
         die ("can't connect1: " . mysql_error());
     }
 $db_selecte= mysql_select_db('assetManTest', $dbc);
 if (!$db_selected)
     {
         die ("can't connect2q:: " . mysql_error());
     }*/
$query("select * from tblAssetDesc");
$connection new mysqli("localhost","wadmin","a7pLm%?y,D=?Y%7~","assetManTest") or die ('Connection failed');
$result = $connection->query($query);
?>
