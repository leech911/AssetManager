 <html>

 <?php
 require 'header.php';
 ?>

 <head>
     <title>
        Check out
     </title>
 </head>
 <body>
 <div class ="container">
 Check out
  </div>

 </div>
 <?php
 include_once('navBar.php');
 ?>


<h2>Modal Example</h2>

<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>

 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

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
</script>

</body>
</html>

