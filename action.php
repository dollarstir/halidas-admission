<?php

include 'db.php';
include 'core.php';

if (isset($_GET['dollar'])) {

    if ($_GET['dollar']=="reg") {



        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $town=$_POST['town'];
        $nation=$_POST['nation'];
        $sex=$_POST['sex'];
        $pob=$_POST['pob'];
        $position=$_POST['position'];
        $rel=$_POST['rel'];
        $s1=$_POST['s1'];
        $c1=$_POST['c1'];
        $start=$_POST['start'];
        $end=$_POST['end'];
        $programe=$_POST['programe'];
        $pname=$_POST['pn1'].' '.$_POST['pn2'];
        $native=$_POST['native'];
        $pcontact=$_POST['pcontact'];

        $dd= date("jS F, Y");
        $doa=$dd;
        $status="Pending";
        $yoa= date("Y");





        // check if applicant exist  in database
        echo reg($fname,$lname,$email,$contact,$dob,$gender,$town,$nation,$sex,$pob,$position,$rel,$s1,$c1,$start,$end,$programe,$pname,$native,$pcontact,$doa,$status,$yoa);

        // echo reg($fname,$lname,$email,$contact,$dob,$gender,$town,$nation,$sex,$pob,$position,$rel,$s1,$c1,$start,$end,$programe,$pname,$native,$pcontact,$doa,$status);
            # code...
    }


    if ($_GET['dollar']=="coursereg") {
        # code...
    }
















    # code...
}




?>