$(document).ready(function () {

    function resp(response) {

        $("#respo").html(response);
        $("#mess").fadeOut(3000);
        
    }



    $(".subm").submit(function (e) {
        e.preventDefault();
        
        var options = {
            url: 'gen.php',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(options);
 
     });
    
})