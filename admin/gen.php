<?php
include 'db.php';


    $quant=$_POST['quant'];
    $location=$_POST['location'];
    $status="Available";
    $dd= date("d/m/Y");

    if (empty($quant)) {
        echo '
        
        <div id="mess" style="background-color:red;"><p>Please Quantity</p></div>        
        ';

        # code...
    }
    elseif (empty($location)) {
        # code...
        echo '
        
        <div id="mess" style="background-color:red;"><p>Please Choose Campus</p></div>        
        ';
    }
    else {
      
        if ($location=="ucc") {

            $def1="SAUCC";

            $gen=rand(11111,99999);
            $gen1=rand(1,10);

            $tt=$def1.''.$gen;
            for ($i=0; $i <= $quant ; $i++) { 
                $gen=rand(11111,99999);
            $gen1=rand(1,10);

                $check= mysqli_query($conn,"SELECT * FROM voucher WHERE voucher='$tt'");
                $rch= mysqli_fetch_array($check);
                if ($rch>=1) {
                    $tt=$def1.''.$gen.''.$gen1;

                    $ins1=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins1;



                   
                }
                else {
                    $tt=$def1.''.$gen;
                    $ins2=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins2;
                }

            } 
            if ($ins1) {

               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
               
            }elseif ($ins2) {
               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
            }
            else {
                echo ' <div id="mess" style="background-color:red;"><p>C\Failed to generate Voucher</p></div>';
            }      
        }

        elseif ($location=="knust") {

            $def1="SAUST";

            $gen=rand(11111,99999);
            $gen1=rand(1,10);

            $tt=$def1.''.$gen;
            for ($i=0; $i <= $quant ; $i++) { 
                $gen=rand(11111,99999);
            $gen1=rand(1,10);

                $check= mysqli_query($conn,"SELECT * FROM voucher WHERE voucher='$tt'");
                $rch= mysqli_fetch_array($check);
                if ($rch>=1) {
                    $tt=$def1.''.$gen.''.$gen1;

                    $ins1=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins1;



                   
                }
                else {
                    $tt=$def1.''.$gen;
                    $ins2=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins2;
                }

            } 
            if ($ins1) {

               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
               
            }elseif ($ins2) {
               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
            }
            else {
                echo ' <div id="mess" style="background-color:red;"><p>C\Failed to generate Voucher</p></div>';
            }      
        }

        elseif ($location=="legon") {

            $def1="SAUG";

            $gen=rand(11111,99999);
            $gen1=rand(1,10);

            $tt=$def1.''.$gen;
            for ($i=0; $i <= $quant ; $i++) { 
                $gen=rand(11111,99999);
            $gen1=rand(1,10);

                $check= mysqli_query($conn,"SELECT * FROM voucher WHERE voucher='$tt'");
                $rch= mysqli_fetch_array($check);
                if ($rch>=1) {
                    $tt=$def1.''.$gen.''.$gen1;

                    $ins1=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins1;



                   
                }
                else {
                    $tt=$def1.''.$gen;
                    $ins2=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins2;
                }

            } 
            if ($ins1) {

               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
               
            }elseif ($ins2) {
               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
            }
            else {
                echo ' <div id="mess" style="background-color:red;"><p>C\Failed to generate Voucher</p></div>';
            }      
        }
        elseif ($location=="hotech") {

            $def1="SAHOT";

            $gen=rand(11111,99999);
            $gen1=rand(1,10);

            $tt=$def1.''.$gen;
            for ($i=0; $i < $quant ; $i++) { 
                $gen=rand(11111,99999);
            $gen1=rand(1,10);

                $check= mysqli_query($conn,"SELECT * FROM voucher WHERE voucher='$tt'");
                $rch= mysqli_fetch_array($check);
                if ($rch>=1) {
                    $tt=$def1.''.$gen.''.$gen1;

                    $ins1=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins1;



                   
                }
                else {
                    $tt=$def1.''.$gen;
                    $ins2=mysqli_query($conn,"INSERT INTO voucher(voucher,location,status,dateadded) VALUES('$tt','$location','$status','$dd')");
                    // echo $ins2;
                }

            } 
            if ($ins1) {

               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
               
            }elseif ($ins2) {
               echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
            }
            else {
                echo ' <div id="mess" style="background-color:red;"><p>C\Failed to generate Voucher</p></div>';
            }      
        }




        

    }
    



?>