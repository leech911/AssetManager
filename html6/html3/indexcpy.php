<html>

<?php
echo phpversion();
include_once('navBar.php');
require '../PDO.info';
require 'functions.php';
?>
<head>
<title>
Home
</head>

<body>
<div class ="container">
Home
<?php
include_once('tblDesc.php');
?>
</div>
   </body>
