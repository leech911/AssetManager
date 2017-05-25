
<?php
require "../PDO.info";
require "header.php"; 

$query='select * from tblAssetDesc';
print "<table id='tblAssetDesc'> ";
$result = $dbAssetManTest->query($query);
$row = $result->fetch(PDO::FETCH_ASSOC);
print "<thead>";
print " <tr> ";
foreach ($row as $field => $value){
    print " <th>$field</th> ";
} 
print " </tr> ";
print "</thead>";
// end foreach
print "<tbody>";
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
$(document).ready( function(){
        $("#tblAssetDesc").DataTable();
        });
</script>
