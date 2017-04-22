<html>

<style>
.modal {
z-index: 99999;
}
</style>

<head>
 <?php
  require "../PDO.info";
  ?>
</head>
<body>
<div id=modalBox class="container">
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
  <div class="modal-content">
    <span id="xlose"  class="close">&times;</span>
    <p>Some text in the Modal..</p>
</div>
<div class="modal-footer">
 <a href="#!" id="btnAgree" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
</div>
</div>
<!-- End Modal -->
<?php
// Begin Table generation
$query='select * from tblAssetDesc';
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
var table= $('#tblAssetDesc').DataTable();
//table row on click even    
$('#tblAssetDesc tbody').on('click', 'tr', function () {
//data will be aray with row info at each index will get passed to the form
var data = table.row(this).data();
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
    });
});
</script>
</body>
</html>
