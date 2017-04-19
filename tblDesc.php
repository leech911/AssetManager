<html>

<style>
.modal {
z-index: 99999;
}
</style>

<head>


</head>
<body>
<div id=modalBox class="container">
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
  <div id="modalTbl" class="modal-content">
    <span id="xlose"  class="close">&times;</span>
    <p id="selection">What would you like to do with </p>
</div>
<div class="modal-footer">
 
 <a href="#!" id="btnCheckIn" class="modal-action modal-close waves-effect waves-green btn-flat">Check In</a>
 <a href="#!" id="btnTransfer" class="modal-action modal-close waves-effect waves-green btn-flat">Transfer</a>
 <a href="#!" id="btnDisposal" class="modal-action modal-close waves-effect waves-green btn-flat">Disposal</a>
 <a href="#!" id="btnCheckOut" class="modal-action modal-close waves-effect waves-green btn-flat">Check Out</a>
 <a href="#!" id="btnAgree" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>

 </div>
</div>
</div>
<!-- End Modal -->
<?php
// Begin Table generation
$query="select tblAssetDesc.name, tblAssetDesc.make, tblAssetDesc.model, tblStorageLocations.rack, tblStorageLocations.shelf, count(tblTaggedAssets.descID) as 'tagged qty', tblBROnHand.qty as 'BackRoom qty',
case tblAssetDesc.taggable
when 0 then 'True'
when 1 then 'False'
End as taggable
from tblTaggedAssets
right join tblAssetDesc on 
tblTaggedAssets.descID=tblAssetDesc.descID
join  tblStorageLocations on
tblStorageLocations.locationID=tblAssetDesc.storeRmLocation
left join tblBROnHand on
tblBROnHand.descID=tblAssetDesc.descID
group by tblAssetDesc.descID;";
print "<table id='tblAssetDesc'> ";
$result = $dbAssetManTest->query($query);
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
$data = $dbAssetManTest->query($query);
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

<script>
var modal = document.getElementById("myModal");
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
        location.reload();
  }
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
$(document).ready( function(){
        $("#tblAssetDesc").DataTable();
        });
$(document).ready(function() {
// pulling from table to populate form
//table row on click even    
var table= $('#tblAssetDesc').DataTable();
$('#tblAssetDesc tbody').one('click', 'tr', function () {
//data will be aray with row info at each index will get passed to the form


var data = table.row(this).data();
$(function() {


    $("#selection").append("<strong>"+data[0]+"'s?</strong>");
    if (data[7]=="True") { $("#btnCheckOut").hide(); }
});
// Positions the Modal in the right spot and brings it to the front. 
$("#modalBox").css('position', 'absolute');
$("#modalBox").css('z-index', 9999);
        modal.style.visibility = "visible";
         modal.style.display = "block";
   } );
} );
$(document).ready( function(){
    $('#btnAgree').on('click', function (){
        modal.style.display="none";
        location.reload();
    });
});

var passText="test";
$(function() {
    $("#ptest").append(passText);
});

</script>
</body>
</html>
