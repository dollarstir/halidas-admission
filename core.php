<?php
function reg($fname,$lname,$email,$contact,$dob,$gender,$town,$nation,$sex,$pob,$position,$rel,$s1,$c1,$start,$end,$programe,$pname,$native,$pcontact,$doa,$status,$yoa,$serial)
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
        
            $checkserial=mysqli_query($conn,"SELECT * FROM applicant WHERE serial= '$serial' ");
            $rse=mysqli_fetch_array($checkserial);
            if ($rse>=1)
            {
                
                 echo '
                    <div id="mess" style="background-color:red;">
                        <p id="mm">Sorry Card  Already used</p>
                    </div>';
                
            }
            else{
                
                    $fileinfo=PATHINFO($_FILES["image"]["name"]);
                    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
                    move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
                    $pic="upload/" . $newFilename;
                $insert=mysqli_query($conn,"INSERT INTO applicant (fname,lname,email,contact,dob,gender,town,nation,sex,pob,position,rel,pic,s1,c1,start,end,programe,pname,native,pcontact,doa,status,yoa,serial) VALUES ('$fname','$lname','$email','$contact','$dob','$gender','$town','$nation','$sex','$pob','$position','$rel','$pic','$s1','$c1','$start','$end','$programe','$pname','$native','$pcontact','$doa','$status','$yoa','$serial')");

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
                        <p id="mm">Registration failed</p>
                    </div>';
                }
            }
                
        
    }
}


function getcc(){
    include 'db.php';
    $getco = mysqli_query($conn,"SELECT * FROM programme");
    while ($geto= mysqli_fetch_array($getco)) {


        $ctitle= $geto['ctitle'];
        $level= $geto['level'];

        echo '
            <option  value="'.$ctitle.'">'.$ctitle.' - ('.$level. ')</option><br>
        ';
        # code...
    }
    
}

function verification($serial,$pin){
    include 'db.php';

    $ch1 = mysqli_query($conn,"SELECT * FROM  voucher  WHERE serial = '$serial' AND pin= '$pin' ");
    $r1 =mysqli_fetch_array($ch1);


    if ($r1 >= 1) {
        $ustatus= $r1['ustatus'];

        if ($ustatus=="Not used") {

            $upd= mysqli_query($conn,"UPDATE voucher SET ustatus='Used' WHERE serial='$serial' ");
            if ($upd) {

                $_SESSION['serial']=$serial;
                $_SESSION['pin']=$pin;
                echo '<script>window.location="index.php"</script>';
                # code...
            }
            # code...
        } else {
            echo  '
            <center><div id="erro"><p>Sorry  Card is Already in  use contact admin or <a href="#">Login Here</a> </p></div></center>
        
            '; 
        }
        


        # code...
    }
    else {
        echo  '
    <center><div id="erro"><p>Invalid Serial number or Pin code</p></div></center>

    '; 
    }
}

?>