<?php
include '../PDO.info'; 

 function showAssets()
{
  $query= "select * from tblAssetDesc";
  $result= mysql_query($query);
     
 while($row = mysql_fetch_array($result))
        {
        echo $row['name'];
        die (mysql_error());
        }
echo 'outside the loop';
    }



    function onFunc(){
          echo "";
      }



      function offFunc(){
          echo "Button off clicked";
    }


function getTblDesc(){


 $stmt = $dbAssetManTest->query('select * from tblAssetDesc');
     while ($row = $stmt->fetch())
         {
         echo nl2br ($row['name'] ." ". $row['descID']  . "\n");

         }


}


  ?>

