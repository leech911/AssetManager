var modal = document.getElementById("myModal");
var modalBR = document.getElementById("modalBR");
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
 $(document).ready( function(){
         $("#tblTaggedAssets").DataTable();
        });
$(document).ready(function() {
// pulling from table to populate form
//table row on click even
//$('#tblAssetDesc tbody').one('click', 'tr', function () {

 $(document).ready( function(){
         $("#tblTaggedAssets").DataTable();
        });

var tableBR=$('#tblBROnHand').DataTable();
var table= $('#tblAssetDesc').DataTable();

tableBR.one('click', 'tr', function () {
        var data=tableBR.row(this).data();
        var tcast = data.toString();
        var pass = tcast.split(",");
        var qData = pass[0];
        $("modalBoxBR").css('position', 'absolute');
        $("#modalBoxBR").css('z-index', 9999);
        modalBR.style.visibility = "visible";
         modalBR.style.display = "block";

        $("#selectionBR").append("<strong>"+data[1]+"s</strong>?");

        $('input[name="inID"]').val(qData);
        $('input[name="outID"]').val(qData);
});


table.one('click', 'tr', function () {
//data will be aray with row info at each index will get passed to the form
var data = table.row(this).data();
var tcast = data.toString();
var pass = tcast.split(",");
var qData = pass[0];
//alert(qData);

$('input[name="descID"]').val(qData);
$('input[name="transferDescID"]').val(qData);

//$.cookie("data",data);
//alert($.cookie("data"[0]));
$(function() {
    $("#selection").append("<strong>"+data[1]+"s?</strong>");
    if (data[7]=="True") {

 $("#btnCheckOut").hide();
 }else {
$("#btnTfer").hide();
 $("#btnCheckIn").hide();
 $("#btnCheckOut").hide();
}
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

$(function() {
        $("#btnDisposal").on('click', function() {
                $("#frmDisposal").submit();
        });
});

$(function() {
        $("#btnTfer").on('click', function() {
                $("#frmTransfer").submit();
});

});

$(function() {
        $("#tblAssetDescCntnr").hide();

        $("#tblBROnHandCntnr").hide();
        $("#btnShowTagged").on('click', function(){


                $("#tblBROnHandCntnr").hide();
                $("#tblAssetDescCntnr").show();
        });

        $("#btnShowBR").on('click', function(){
        $("#tblAssetDescCntnr").hide();
        $("#tblBROnHandCntnr").show();
        });



$("#btnBRClose").on('click', function() {
                location.reload();
        });
});

        var cOut=document.getElementById("frmBRCOut");
        var cIn=document.getElementById("frmBRCIn");
//      var cInQty=document.getElementById("inQty");
//      var cInBtn=document.getElementById("btnCIn");

//      var ciID=document.getElementById(
//      var coID
$(function() {


        cIn.style.display="none";
        $("#btnBRCheckIn").on('click', function() {
        cIn.style.display="block";
        cOut.style.display="none";
        });
});


$(function() {


        cOut.style.display="none";
        $("#btnBRCheckOut").on('click', function() {
                cOut.style.display="block";

                cIn.style.display="none";

        });
});


