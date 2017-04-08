  <html>

  <?php
  require 'header.php';
 ?>

  <head>
      <title>
         Add Asset Description
      </title>
  </head>
  <body>

<?php 
include_once 'navBar.php';
?>
<div class ="container">
     Add Asset Description
 </div>

 
<br>
<div class='container'>
<h5> Asset Location </h5>
<div class="row">
    <form class="col s12" action="addAssetHandler.php" method="post" >
      <div class="row">
        <div class="input-field col s1">
          <input id="rack" name="rack" type="text" class="validate">
          <label for="rack">Rack</label>
        </div>
        <div class="input-field col s1">
          <input id="shelf" name="shelf" type="text" class="validate">
          <label for="shelf">Shelf</label>
        </div>
      </div>
</div>
<input type="submit">
</form>
 

       

     </body>
</html>
