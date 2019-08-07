<?php

include 'db.php';
include 'core.php';

if (isset($_GET['dollar'])) {

    

    if ($_GET['dollar']=="coursereg") {


        $ctitle=$_POST['ctitle'];
        $duration=$_POST['duration'];
        $arequirement=$_POST['arequirement'];
        $location=$_POST['location'];
        $level = $_POST['level'];
        $structure=$_POST['structure'];
        $description= $_POST['description'];
        $fees= $_POST['fees'];

        if (empty($ctitle)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Course title</p></div>';
        }
        elseif (empty($duration)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter course duration</p></div>';
        }
        elseif (empty($arequirement)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter admission requirement</p></div>';
        }
        elseif (empty($level)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose level</p></div>';
            # code...
        }
        elseif (empty($structure)) {
            echo' <div id="mess" style="background-color:red;"><p>Note down the course structure</p></div>';
            # code...
        }
        elseif (empty($description)) {
            echo' <div id="mess" style="background-color:red;"><p>Give a  brief description of your course</p></div>';
            # code...
        }
        else {
           echo adcourses($ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees); 
        }

        # code...
    }

   
















    # code...
}




?>