<?php session_start();

if (isset($_SESSION['serial'])) {

    echo '<script>window.location="index.php"</script>';
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halidas- College</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<div class="cont">
    <center><div class="tit"><img src="images/log2.png" width="70px" height="60px" alt=""><p>HALIDAS COLLEGE OF TECHNOLOGY</p></div></center><br>

    <center><small>
    Contact : +233547501699</small></center><br>

    <center><small>
    Email : halidas99@gmail.com</small></center><br>
    <center><small style="color:red;">
    NB: You can only use card once so make sure you ready before you fill forms</small></center><br><br>

    <form  id="vform">
        <center><label for="">Serial Number: </label> <input type="text" name="serial" class="ipt"></center><br>
        <center><label for="" id="lb"> Enter  Pin code: </label> <input type="text" name="pin" class="ipt"></center><br><br>

        <center><input type="submit" value="Apply" id="btnap" class="btnss"></center>

    </form>
        <div class="sh">

            <!-- <center><div id="erro"><p>Please enter A valid serial number</p></div></center> -->
        </div>
</div>
    
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>