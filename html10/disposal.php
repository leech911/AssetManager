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
<?php echo$_POST?> 

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



