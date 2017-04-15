<html>
<head>
<?php 
require 'header.php';
include_once 'navBar.php';
$value=$_POST["value"];
$taggable;
if($value<500){$taggable='0';}
else{$taggable='1';};
$passLoc=0;
$queryLocation='select locationID from tblStorageLocations where rack like '.$_POST["rack"].' and shelf like '.$_POST["shelf"].'';
$resultLocation= $dbAssetManTest->query($queryLocation);
$resultLocation->setFetchMode(PDO::FETCH_ASSOC);
foreach($resultLocation as $output=>$value){

    foreach($value as $location=>$locID){

$passLoc=($locID);

    }
}


try{

$queryInput='insert into tblAssetDesc VALUES ("",'.$locID.',"'.$_POST["name"].'","'.$_POST["desc"].'",'.$taggable.','.$_POST["value"].',"'.$_POST["make"].'","'.$_POST["model"].'")';

$dbAssetManTest->exec($queryInput);
} catch(PDOException $e){
    die ("ERROR: Could not execute $queryInput. ". $e->getMessage());
}

?>
<script>
var $tag ='<?php echo $taggable; ?>';
var $test='this is a test';
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );

$(function(){
alert($tag);
});
</script>
</head>




<body>

<br>
<br>
<div class="container">
<br>
Rack:  <?php echo $_POST["rack"]; ?><br>
Shelf Number: <?php echo $_POST["shelf"]; ?>
<br>
loc printed: <?php echo $passLoc; ?>
</div>

</body>

</html>
