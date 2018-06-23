$(document).ready(function(){

  $(".alert-success").fadeOut(5000);

  $("#btnEditComment").click(function(){
    // show edit form here
    $("#postCommentPreForm").hide();
    $("#frmEditComment").fadeIn(500);
    $(this).hide();
  });

  $('#summernote').summernote();

});
