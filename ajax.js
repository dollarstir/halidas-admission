$(document).ready(function () {

    
   


    function regsuccess(response) {

        $("#mcon").html(response);
        $("#mess").fadeout(3000);

        
    };

  $("#myform").submit(function (event) {
    

    event.preventDefault();

    var options = {
      url: 'action.php?dollar=reg',
      type: 'post',
      data: new FormData(this),
      cache: false,
      processData: false,
      contentType: false,
   //    beforeSend: prog,
      success: regsuccess,
   }

  $.ajax(options);

      
  });

    
});