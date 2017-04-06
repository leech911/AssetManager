 <html>

 <?php
    include '../PDO.info';
    require 'header.php';
    require 'functions.php'; 
?>

 <head>
     <title>
       Check In
     </title>
 </head>
 <body>
 <div class ="container">
 Check In
  </div>

 </div>
 <?php
 include_once('navBar.php');
 ?>

<div class ="container">
<form action="checkIn.php" method="post">
            <input type="submit" name="on" value="on">
            <input type="submit" name="off" value="off">
        </form>
</div>
<div class="container">
<h4>Assets</h4>
<?php
    if(isset($_POST['on'])) {
 
 $query='select * from tblAssetDesc';
    print "<table id='t01'> ";
    $result = $dbAssetManTest->query($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);

  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
    $data = $dbAssetManTest->query($query);
    $data->setFetchMode(PDO::FETCH_ASSOC);

  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  
print "</table>";

} 
  

    if(isset($_POST['off'])) {
        offFunc();
    }


?>
</div>
    </body>

