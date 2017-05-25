<html>
<?php 
require 'header.php';
?>
<head>
</head>
<body>
<!-- The Modal -->
<div id="addModal" class="modal">
<!-- Modal content -->
    <form class="col s12" action="addAssetHandler.php" method="post" >
        <h4>New Asset Type</h4>
<br>
<h5> Please enter information for the new asset </h5>
        <div class="row">
<br>
<div class ="input-field col s2"> 
<input id="name" name="name" type="text" class="validate">
    <label for="name"> Asset Name</label>
</div>
<div class ="input-field col s2">
<input id="make" name="make" type="text" class="validate">
    <label for="make">Make</label>
</div>
<div class ="input-field col s2">
<input id="model" name="model" type="text" class="validate">
    <label for="model">Model</label>
</div>
<div class ="input-field col s2">
<input id="value" name="value" type="text" class="validate">
    <label for="value">Asset Cost</label>
</div>
<br><br><br><br>
<div class="row">
<h6> Location: </h6>
            <div class="input-field col s1">
    <input id="rack" name="rack" type="text" class="validate">
    <label for="rack">Rack #</label>
</div>
<div class ="input-field col s1">
<input id = "shelf" name="shelf" type="text" class"validate">
<label for="shelf">Shelf #</label>
</div>
<br><br><br><br>
<h6> Asset Description: </h6>
<div class="row">
            <div class="input-field col s6">
    <textarea id="desc" name="desc" type="text" class="materialize-textarea"></textarea>
    <label for="rack">Enter Description Here</label>
</div>
</div>
</div>
</div>
<div classpp; &nbsp;"modal-footer">
 <a href="#!" id="xBtnAdd" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div>
    </form>
  </div>
</div>
<!-- End Modal -->
<div class="container" align="center">
<h1> Asset Manager Alpha </h1>
</div>
<div class='container'>
<ul id="slide-out" class="side-nav">
      <li><div class="userView">
        <div class="background">
          <img src="./images/office.jpg">
        </div>
        <a href="#!user"><img class="circle" src="./images/box.jpg"></a>
      </div></li>
        <h5>  Asset Manager</h5>
        <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="index.php">Home</a></li>
      <li><a class="waves-effect" href="reports.php">Reports</a></li>
      <li><div a class="divider"></div></li>
     <li><a id="btnTag" class="waves-effect waves-light" href="#modalReports">Tag Assets</a></li>
     <li><a id="btnTransfer" class="waves-effect waves-light" href="#modalReports">Batch Asset Transfer</a></li>
    <li><a id= "btnAdd" class="waves-effect waves-light" href="#modalReports">Add New Asset</a></li>
<form action="logout.php" method="get" id="logout">
<input type ="text" name="logout" value="true" style="display: none;"> 
    <li><input type="submit" id= "btnlogout" class="waves-effect waves-light" value="Log Out"></li>
</form>
   </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
</div>
<script>
$(function(){
 $('#xlose').click(function() {
         $('#addModal').hide();
});
});
$(function() {
     $('#xBtnAdd').click(function() {
         $('#addModal').hide();
});
});
$(function(){
    $('#btnAdd').click(function() {
        $('#addModal').show();
    });
});
</script>
   </body>
