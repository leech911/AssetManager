 <html>
<?php
require 'header.php'
?>
 <head>
     <title>
      Asset Manager 
     </title>
 </head>
 <body>
<div class="container">
<?php
$qty =$_POST["inQty"];
$id =$_POST["inID"];
$po = $_POST["inPo"];
$user=1;
 ?>
</div>
<?php
try{
$queryIn='insert into tblIn (descID,userIn,qty,po) VALUES ('.$id.','.$user.','.$qty.','.$po.')';
$dbAssetManTest->exec($queryIn);
} catch(PDOException $e){
    die ("ERROR: Could not execute $queryIn. ". $e->getMessage());
}
?>
<?php
$passLocRack=0;
$queryRLocation='select tblStorageLocations.rack
from tblStorageLocations
join tblAssetDesc
on tblAssetDesc.storeRmLocation=tblStorageLocations.locationID
where tblAssetDesc.descID='.$id.';';
$resultRLocation= $dbAssetManTest->query($queryRLocation);
$resultRLocation->setFetchMode(PDO::FETCH_ASSOC);
foreach($resultRLocation as $output=>$value){
    foreach($value as $location=>$locID){
$passLocRack=($locID);
    }
}

$passLocShelf=0;
$querySLocation='select tblStorageLocations.shelf
from tblStorageLocations
join tblAssetDesc
on tblAssetDesc.storeRmLocation=tblStorageLocations.locationID
where tblAssetDesc.descID='.$id.';';
$resultSLocation= $dbAssetManTest->query($querySLocation);
$resultSLocation->setFetchMode(PDO::FETCH_ASSOC);
foreach($resultSLocation as $output=>$value){
    foreach($value as $location=>$locID){
$passLocShelf=($locID);
    }
}
?>


 <?php
 include_once('navBar.php');
?>
<div class="container">

Check in of asset successful please place on Rack: <?php echo $passLocRack; ?> Shelf: <?php echo $passLocShelf; ?>

<br><br>
<?php

echo $_POST["inQty"];
echo "<br>";
echo $_POST["inID"];
 ?>
</div>

    </body>
  <script>
initNav();
  </script>



