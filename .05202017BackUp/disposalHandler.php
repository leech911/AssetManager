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
 include_once('navBar.php');

$userID = "2";
$gesaTag=$_POST["gesaTag"];
$reason=$_POST["reason"];
$error=false;

$queryInsert='insert into tblDisposal VALUES ("","'.$gesaTag.'","'.$userID.'","","'.$reason.'")';
$queryUpdate = 'update tblTaggedAssets set active=0 where gesaTag="'.$gesaTag.'";';



try{
	$dbAssetManTest->exec($queryInsert);
	
}catch (PDOException $e){
	$error=true;
	die("ERROR: Could not execute $queryInsert. ". $e->getMessage());
}

if (!$error) {
	try{
		$dbAssetManTest->exec($queryUpdate);
	}
	catch (PDOException $e) {
		die("ERROR: Could not execute $queryUpdate. ". $e->getMessage());
	};
}

 
?>
</div>
<div class="container">
Asset:
<?php echo $_POST["gesaTag"];?>
 Has been disposed of succesfully!
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
