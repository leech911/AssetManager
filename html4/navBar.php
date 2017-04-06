<html>
<?php 
require 'header.php';
?>
<head>
<style>
.h6{
margin-left:50px;
padding:100px;
}
</style>
</head>
<body>
<!-- The Modal -->
<div id="addModal" class="modal">
<!-- Modal content -->
    <form class="col s12" action="addAssetHandler.php" method="post" >
        <h4>New Asset Type</h4>
        <div class="row">
<br>
        <h6>&nbsp; Location: </h6>
            <div class="input-field col s1">
    <input id="rack" name="rack" type="text" class="validate">
    <label for="rack">Rack #</label>
</div>
<div class ="input-field col s1">
<input id = "shelf" name="shelf" type="text" class"validate">
<label for="shelf">Shelf #</label>


</div>
</div>
    </form>
<div classpp; &nbsp;"modal-footer">
 <a href="#!" id="xBtnAdd" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
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
          <img src="../images/office.jpg">
        </div>
        <a href="#!user"><img class="circle" src="../images/box.jpg"></a>
      </div></li>
        <h5>  Asset Manager</h5>
        <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="index.php">Home</a></li>
      <li><a class="waves-effect" href="reports.php">Reports</a></li>
      <li><div a class="divider"></div></li>
     <li><a id="btnTag" class="waves-effect waves-light" href="#modalReports">Tag Assets</a></li>
     <li><a id="btnTransfer" class="waves-effect waves-light" href="#modalReports">Transfer Assets</a></li>
     <li><a id= "btnAdd" class="waves-effect waves-light" href="#modalReports">Add New Asset</a></li>
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
