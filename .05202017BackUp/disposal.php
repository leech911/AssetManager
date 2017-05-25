 <html>
<style>
.modal {
z-index: 99999;
}
</style>
<?php
ini_set('display_errors',1);
require 'header.php';
require 'functions.php';
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
<!-- declare variables -->
<?php
$modalQuery="select tblTaggedAssets.gesaTag, tblLocations.locName, tblTaggedAssets.department, tblAssetDesc.name, tblAssetDesc.make, tblAssetDesc.model, tblTaggedAssets.lastModified
from tblTaggedAssets
join tblAssetDesc
on tblAssetDesc.descID=tblTaggedAssets.descID
left join tblLocations
on tblLocations.locationID=tblTaggedAssets.locationID
where tblTaggedAssets.active=1 and tblTaggedAssets.descID=".$_POST["descID"].";";
$tblID="tblTaggedAssets";
?>
<style>
.modal {
z-index: 99999;
}
</style>
<div id="confirmModal" class="modal">
<h5>Are you sure you want to dispose of asset number: <p id="cText"></p> </h5>
<br>
<a id="btnFormSubmit" class="btn waves-effect waves-light" href="#">I'm sure</a>
<a id="btnSubmitCancel" class="btn waves-effect waves-light" href="#">Cancel</a>
</div>
<div id="disposalModal" class="modal">
                <form id="frmDisposal" class="col s12" action="disposalHandler.php" method="post">
                                <h4> Asset Disposal </h4>
                                <br>
                                <div class="row">
				<input type="text" name="gesaTag" style="display: none;" id="gesaTag"> 
                                                <div class="input-field col s6">
                                                                <textarea id="reason" name="reason" type="text" class="materialize-textarea"></textarea>
                                                                <label for="reason"> Please enter reason for disposal </label>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <input type="submit" id="btnDisposalSubmit" style="display: none;">
                                                </div>
                                </form>
                                <div classpp; &nbsp;"modal-footer">
                                                <a id="btnSubmit" class="btn waves-effect waves-light" href="#"> submit</a>
                                                <a id="btnClose" class="btn waves-effect waves-light" href="#"> close</a>
                                </div>
                                </div>
<div class="container">
<?php
initTable($modalQuery,$tblID,$dbAssetManTest);
?>
DescID:
<?php
echo $_POST["descID"];
?>
</div>
    </body>
  <script>
var modal = document.getElementById("confirmModal");
(function() {
$("#tblTaggedAssets").DataTable();
});

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
var table=$('#tblTaggedAssets').DataTable();

$(function() {
            table.one('click','tr', function () {
                                var data = table.row(this).data();
                                var tcast = data.toString();
                                var pass=tcast.split(",");
                                var qData=pass[0];
				$('input[name="gesaTag"]').val(qData);
                                $("#cText").append(data[0]);
                                $("#disposalModal").show();
                                });
                $('#btnSubmit').click(function() {
                                $("#disposalModal").hide();
                                $("#confirmModal").show();
                });
 
                $('#btnClose').click(function() {
				modal.style.display="none";
				location.reload();
                });
 
                $('#btnSubmitCancel').click(function() {
                                modal.style.display="none";
                                location.reload();
                });

                $("#btnFormSubmit").on('click', function(){
                        $("#frmDisposal").submit();
        });
});        
  </script>
