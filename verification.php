<?php
include 'core.php';
session_start();

$serial= $_POST['serial'];
$pin = $_POST['pin'];

if (empty($serial)) {
    echo  '
        <center><div id="erro"><p>Please enter A valid serial number</p></div></center>

        ';    # code...
}
elseif (empty($pin)) {


    echo  '
    <center><div id="erro"><p>Please enter pin numbers</p></div></center>

    '; 
    # code...
}
else {

    verification($serial,$pin);
   

}

?>