<html>
<!--moves all modal class objects to the front -->
<style>
.modal {
z-index: 99999;
}
</style>
<head>
<!--includes -->
<?php 
//shows php errors and what line they're on
	ini_set('display_errors',1);
	require "header.php";
	require "functions.php";
?>
<!--variable declarations -->
<?php
$queryBR="select tblAssetDesc.descID, tblAssetDesc.name, tblAssetDesc.make, tblAssetDesc.model, tblStorageLocations.rack, tblStorageLocations.shelf, tblBROnHand.qty as 'BackRoom qty',
case tblAssetDesc.taggable
when 1 then 'True'
when 0 then 'False'
End as taggable
from tblTaggedAssets
right join tblAssetDesc on
tblTaggedAssets.descID=tblAssetDesc.descID
right join  tblStorageLocations on
tblStorageLocations.locationID=tblAssetDesc.storeRmLocation
right join tblBROnHand on
tblBROnHand.descID=tblAssetDesc.descID
where tblAssetDesc.taggable=0
group by tblAssetDesc.descID;";
$tblIDBR='tblBROnHand';

$queryTag="select tblAssetDesc.descID, tblAssetDesc.name, tblAssetDesc.make, tblAssetDesc.model, tblStorageLocations.rack, tblStorageLocations.shelf, count(distinct tblTaggedAssets.gesaTag) as 'tagged qty',
case tblAssetDesc.taggable
when 1 then 'True'
when 0 then 'False'
End as taggable
from tblTaggedAssets
right join tblAssetDesc on
tblTaggedAssets.descID=tblAssetDesc.descID
join  tblStorageLocations on
tblStorageLocations.locationID=tblAssetDesc.storeRmLocation
where tblTaggedAssets.active=1
group by tblAssetDesc.descID;";

$tblIDTag="tblAssetDesc";
?>
</head>
<body>
<!-- home buttons that reveal either tagged or Back room tables -->
<div id="buttons" class="container">
<br>
<a id="btnShowTagged" class="waves-light btn">Tagged Assets</a>
<a id="btnShowBR" class="waves-light btn">Back Room Assets</a>
</div>
<!-- on click modal for Backroom table -->
<div id=modalBoxBR class="container">
	<div id="modalBR" class="modal">
		<div class="modal-content">
		 <span id="xlose"  class="close">&times;</span>
		<p id="selectionBR">What would you like to do with </p>
		<!-- Check In Form -->
		<form action="./checkIn.php" method="post" id="frmBRCIn">
		<strong>Quantity to check in:</strong>
		<div class="input-field col s2">
		<input type="text" name="inID"  style="display: none">
		<label for "cID"></label>
		</div>
		<div id="cID">
		<input type="text" name="inQty">
		</div>
		  <strong> PO Number:</strong>
         <div id="inPo">
                <input type="text" name="inPo" style="diplay: none;">
        </div>
		<div id ="btnCIn">
		<input type="submit" value="submit" id=btnCIn>
		</div>
		</form>	
		<!-- Check Out Form -->
		<form action="./checkOut.php" method="post" id="frmBRCOut">
		<strong>Quantity to check out:</strong>
	<div class="input-field col s1" id="OutQty">
		<input type="text" name="outID" class="validate" style= "display: none;">
		<label for "outID"></label>
	</div>
	<div id="oID">
		<input type="text" name="outQty" style="diplay: none;">
	</div>
	<div id="btnCOut">
		<input type="submit" value="submit" name="btnCOut">
	</div>
</form>
	<div class="modal-footer">
		<a href="#!" id="btnBRClose" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		<a href="#!" id="btnBRCheckOut" class="modal-action modal-close waves-effect waves-green btn-flat">Check Out</a>
		<a href="#!" id="btnBRCheckIn" class="modal-action modal-close waves-effect waves-green btn-flat">Check In</a>

	</div>
	</div>
</div>
</div>
<!-- tagged modal -->
<div id=modalBox class="container">
<div id="myModal" class="modal">
  <div id="modalTbl" class="modal-content">
    <span id="xlose"  class="close">&times;</span>
    <p id="selection">What would you like to do with </p>
<!-- hidden form to pass user selection info to disposal page-->
<form action="./disposal.php" method="post" id="frmDisposal">
  <input type="text" name="descID" style="display: none;" id="descID"><br>
<input type = "submit" id="btnDescSubmit" style="display: none;">
</form>
<!-- hidden form to pass user selection info to transfer page-->
<form action="./transfer.php" method="post" id="frmTransfer">
  <input type="text" name="transferDescID" style="display: none;" id="transferDescID"><br>
<input type = "submit" id="btnTransferSubmit" style="display: none;">
</form>
</div>
<div class="modal-footer">
 <a href="#!" id="btnCheckIn" class="modal-action modal-close waves-effect waves-green btn-flat">Check In</a>
 <a href="#!" id="btnTfer" class="modal-action modal-close waves-effect waves-green btn-flat">Transfer</a>
 <a href="#!" id="btnDisposal" class="modal-action modal-close waves-effect waves-green btn-flat">Disposal</a>
 <a href="#!" id="btnCheckOut" class="modal-action modal-close waves-effect waves-green btn-flat">Check Out</a>
 <a href="#!" id="btnAgree" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
 </div>
</div>
</div>
<!-- End Modal -->
<div id=tblBROnHandCntnr class="container">
<h4> Back Room Assets</h4>
<?php
//builds Back Room table
initTable($queryBR, $tblIDBR,$dbAssetManTest); 
?>
</div>
<div id=tblAssetDescCntnr class="container">
<h4>Tagged Assets</h4>
<?php
//builds Tagged Table
initTable($queryTag, $tblIDTag, $dbAssetManTest);
?>
</div>
<script src="./js/tblDesc.js"></script>
</body>
</html>
