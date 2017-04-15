$(document).ready( function(){
          $("#tblAssetDesc").DataTable();
 
  var table = $('#tblAssetDesc').DataTable();
 
      $('#tblAssetDesc tbody').on('click', 'tr', function () {
 
   var data = table.row( this ).data();
          alert(   data[2] + '\'s row is now selected' );
      } );
 
 
  });
