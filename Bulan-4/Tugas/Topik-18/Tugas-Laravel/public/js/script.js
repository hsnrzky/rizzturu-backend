$("#alert-success").hide();
$(document).ready(function(){
    $("#success-btn").click(function showAlert() {
        $("#alert-success").alert();
        window.setTimeout(function() {
           $("#alert-success").alert('close');
        }, 200);
    });
    $("#alert-danger").hide();
    $("#delete-btn").click(function showAlert() {
        $("#alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-danger").slideUp(500);
        });
    });
    $("#alert-warning").hide();
    $("#update-btn").click(function showAlert() {
        $("#alert-warning").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-warning").slideUp(500);
        });
    });
 });

 
