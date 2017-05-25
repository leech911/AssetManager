<?php

function initTable($query, $tblID, $db){
// Begin Table generation

print "<table id='".$tblID."'> ";
 $result = $db->query($query);
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
$data = $db->query($query);
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
}
?>
