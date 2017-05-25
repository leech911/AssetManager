 <html>
<?php
require 'header.php';
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
			while($rowLoc=$resultLoc->fetch(PDO::FETCH)){
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
print "<table id='tblTaggedAssets'> ";
$result = $dbAssetManTest->query($modalQuery);
$row = $result->fetch(PDO::FETCH_ASSOC);
print "<thead>";
print " <tr> ";
// pulls field data for table generation
foreach ($row as $field => $value){
    print " <th>$field</th> ";
}
print " </tr> ";
print "</thead>";
// end foreach
//body of Table
print "<tbody>";
// pulls live data from DB
$data = $dbAssetManTest->query($modalQuery);
$data->setFetchMode(PDO::FETCH_ASSOC);
foreach($data as $row){
    print " <tr> ";
    foreach ($row as $name=>$value){
        print " <td>$value</td> ";
    } // end field loop
    print " </tr> ";
} // end record loop
print "</tbody>";
print "</table>";

?>

</div>

    </body>
  <script>

$(function() {

$("#tblTaggedAssets").DataTable();

});


var table=$('#tblTaggedAssets').DataTable();

table.one('click',function () {

	var data=table.row(this).data();
	$("#modalLocation").show();

});

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  </script>


