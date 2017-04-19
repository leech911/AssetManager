<html>
<head>
<?php
require 'header.php';
include_once 'navBar.php';

?>
</head>
<body>
<p>test</p>
</body>

  <script>
$(function() {

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
});
var test="testing tests";
$(function() {
    $("p").append(test);
});
  </script>


</html>
