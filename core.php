<?php
function reg($fname,$lname,$email,$contact,$dob,$gender,$town,$nation,$sex,$pob,$position,$rel,$s1,$c1,$start,$end,$programe,$pname,$native,$pcontact,$doa,$status,$yoa)
{

    include 'db.php';
    $check=mysqli_query($conn,"SELECT * FROM applicant WHERE contact =$contact");
    $row= mysqli_fetch_array($check);
    if ($row >=1) {
       echo '
            <div id="mess" style="background-color:red;">
                <p id="mm">Applicant Already In database</p>
            </div>';
    }
    else {
        $fileinfo=PATHINFO($_FILES["image"]["name"]);
        $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
        $pic="upload/" . $newFilename;
        $insert=mysqli_query($conn,"INSERT INTO applicant (fname,lname,email,contact,dob,gender,town,nation,sex,pob,position,rel,pic,s1,c1,start,end,programe,pname,native,pcontact,doa,status,yoa) VALUES ('$fname','$lname','$email','$contact','$dob','$gender','$town','$nation','$sex','$pob','$position','$rel','$pic','$s1','$c1','$start','$end','$programe','$pname','$native','$pcontact','$doa','$status','$yoa')");

        if ($insert) {
            # code...
            echo '
            <div id="mess">
                <p id="mm">Registration Successful</p>
            </div>';
        }
        else {
            # code...

            echo '
            <div id="mess" style="background-color:red;">
                <p id="Registration failed</p>
            </div>';
        }
    }
}

?>