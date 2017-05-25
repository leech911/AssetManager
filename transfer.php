 <html>
<?php
require 'header.php';
require 'functions.php';
$descID=$_POST["transferDescID"];
$locationQuery="select * from tblLocations;";
$resultLoc= $dbAssetManTest->query($locationQuery);

?>
 <head>
     <title>
      Asset Manager 
     </title>
<style>
.modal {
z-index: 99999;
}
</style>
 </head>
 <body>
 <?php
 include_once('navBar.php');
 ?>
<div class="container" id="containerMocal">
	<div id ="modalLocation" class="modal">
		<div class="modal-content">
		<form action="./transferHandler.php" method="post" id="frmLocation">
		<div class="input-field col s2">
		<select>
		<?php	$locations=array();
			while($rowLoc=$resultLoc->fetch(PDO::FETCH_ASSOC)){
				$locations=$rowLoc;
			};
		?>
		</select>
		</div>
	</div>
</div>
<div class="container">
<?php
echo $locations["1"];
?>
<?php
// Begin Table generation
$modalQuery="select tblTaggedAssets.gesaTag, tblLocations.locName, tblTaggedAssets.department, tblAssetDesc.name, tblAssetDesc.make, tblAssetDesc.model, tblTaggedAssets.lastModified
from tblTaggedAssets
join tblAssetDesc
on tblAssetDesc.descID=tblTaggedAssets.descID
left join tblLocations
on tblLocations.locationID=tblTaggedAssets.locationID
where tblTaggedAssets.active=1 and tblTaggedAssets.descID=".$descID.";";
$tblID='tblTaggedAssets';
initTable($modalQuery,$tblID,$dbAssetManTest);
?>
</div>
    </body>
  <script>
$(function() {

$("#tblTaggedAssets").DataTable();
var table=$('#tblTaggedAssets').DataTable();
table.one('click',function () {
	var data=table.row(this).data();
	$("#modalLocation").show();
});
initNav();
});
  </script>
