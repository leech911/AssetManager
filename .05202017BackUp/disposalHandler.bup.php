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
 <?php
 include_once('navBar.php');

$userID = "2";
$gesaTag=$_POST["gesaTag"];
$reason=$_POST["reason"];


$queryUpdate = "update tblTaggedAssets set active=1 where gesatag=".$gesatag.";";

$queryInsert = "INSERT INTO tblDisposal ('requestUser', 'gesaTag', 'disposalReason') 
VALUES (".$userID.",".$gesaTag.",".$reason.");";

try{
	$dbAssetManTest->exec($queryInsert);
}catch (PDOException $e){
	die("ERROR: Could not execute $queryUpdate. ". $e->getMessage());
}


 
?>
<div class="container">
<?php echo $_POST["gesaTag"];?>
</div>
    </body>
  <script>
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  </script>
