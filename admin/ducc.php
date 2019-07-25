<?php
include "../db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"UPDATE orders SET  status='Delivered' WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="ucc.php"</script>';
} 
else 
{

    echo '<script>  window.location="ucc.php"</script>';
}






?>