$(document).ready(function () {

    function resp(response) {

        $("#respo").html(response);
        $("#mess").fadeOut(15000);
        
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



    $(".subcourse").submit(function (e) {
        e.preventDefault();
        
        var optionsc = {
            url: 'process.php?dollar=coursereg',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionsc);
 
    });



    $(".subt").submit(function (e) {
        e.preventDefault();
        
        var optionst = {
            url: 'process.php?dollar=teachreg',
            type: 'post',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
         //    beforeSend: prog,
            success: resp,
         }
 
        $.ajax(optionst);
 
    });
    
})