<html>
<?php 
require 'header.php';
?>
<body>
<br>
<div class="container">
<h1> Asset Manager Alpha </h1>
<a href = "/index.php" class="waves-effect waves-light btn"><i class="material-icons left"></i>Home</a>
<a href = "/php/reports.php" class="waves-effect waves-light btn"><i class="material-icons left"></i>Reports</a>
<a href = "/php/tagIn.php" class="waves-effect waves-light btn"><i class="material-icons left"></i>Tag Assets</a>
<a href = "/php/transfer.php" class="waves-effect waves-light btn"><i class="material-icons left"></i>Transfer Asset</a>

<a href = "/php/addAsset.php" class="waves-effect waves-light btn"><i class="material-icons left"></i>Add Asset</a>
<br>
<ul id="slide-out" class="side-nav">

      <li><div class="userView">
        <div class="background">
          <img src="../images/office.jpg">
        </div>
        <a href="#!user"><img class="circle" src="../images/box.jpg"></a>
      </div></li>
        <h5>  Asset Manager</h5>
        <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="#modalReports">Reports</a></li>
      <li><div a class="divider"></div></li>
  <li><a class="waves-effect" href="#modalReports">Tag Assets</a></li>
     <li><a class="waves-effect" href="#modalReports">Transfer Assets</a></li>
     <li><a class="waves-effect" href="#modalReports">Add New Asset</a></li>



   </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>


</div>
   </body>




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


