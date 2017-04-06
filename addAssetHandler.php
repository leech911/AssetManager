<html>
<?php 
require 'header.php';
include_once 'navBar.php';
?>


<?php
$value=$_POST["value"];
$taggable;

if($value<500){$taggable='false';}
else{$taggable='true';};
?>


<body>
<br>
<br>
<div class="container">
Rack:  <?php echo $_POST["rack"]; ?><br>
Shelf Number: <?php echo $_POST["shelf"]; ?>
</div>


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


</body>
</html>
