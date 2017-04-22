 <html>



<?php
require './php/header.php'
?>

 <head>


<script type='text/javascript' src='./js/materialize.min.js'> </script>
<script type='text/javascript' src='./js/materialize.js'> </script>
     <title>
       Check In
     </title>
 </head>
 <body>
 <div class ="container">
 Home
  </div>

 <?php
 include_once('./php/navBar.php');
 ?>
<div class="container">
<?php
include_once('./php/tblDesc.php');
?>


</div>
    </body>
  <script>

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );

  </script>



