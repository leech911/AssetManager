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
 ?>
<div class="container">
<?php

$qty =$_POST["outQty"];
$id =$_POST["outID"];
$user=1;
 ?>
</div>

<?php
try{
$queryOut='insert into tblOut (descID,userOut,qty) VALUES ('.$id.','.$user.','.$qty.');';
$dbAssetManTest->exec($queryOut);
} catch(PDOException $e){
    die ("ERROR: Could not execute $queryOut. ". $e->getMessage());
}
?>
you have taken <?php echo $qty; ?> of asset <?php echo $id;?>

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



