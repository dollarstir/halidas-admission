<?php 



function neworder($inv,$name,$email,$contact,$quant,$venue,$when,$status)  
{
include "db.php";
$newo= mysqli_query($conn,"INSERT INTO orders (inv,name,email,contact,quant,venue,do,status) VALUES ('$inv','$name','$email','$contact','$quant','$venue','$when','$status')");
if ($newo) {
   echo ' <div class="alert alert-success alert-dismissible">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Order Successful!</strong> We will get in touch with you
 </div>';
} else {
    echo 'failed';
}



}
function footer() {
    $dy=date("Y");

    echo' 					<p style="background-color:rgba(0, 0, 0, 0.836);">© '.$dy.' HCT. All rights reserved | Design by <a href="http://purplesofts.com/" target="blank">Purple Software.</a></p>';

}

function getknust() 
{
include "db.php";

$geto=mysqli_query($conn,"SELECT * FROM orders  WHERE venue='knust'");

while ($rgo=mysqli_fetch_array($geto)) 
{
   $id= $rgo['id'];
   $inv=$rgo['inv'];
   $name=$rgo['name'];
   $email=$rgo['email'];
   $contact=$rgo['contact'];
   $quant=$rgo['quant'];
   $venue=$rgo['venue'];
   $date=$rgo['do'];
   $status=$rgo['status'];

  echo' <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$email.'</td>
                                                <td>'.$contact.'</td>
                                               
                                                <td>'.$quant.'</td>
                                                <td>'.$venue.'</td>
                                                <td>'.$date.'</td>
                                                <td class="align-center"><span class="badge badge-primary">'.$status.'</span></td>
                                                
                                                <!-- <td>
                                                     <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                         
                                                        </div>
                                                    </div> 

                                                    dfhdghdfjh
                                                </td> -->
                                                <td>
                                                <br>
                                                <a href="ducc.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Approve</a>                                                 </td>
                                                </td>
                                            </tr>';
}

}




function getapplicant() 
{
include "db.php";
$yoa = date("Y");

$geto=mysqli_query($conn,"SELECT * FROM applicant  WHERE yoa='$yoa'");

while ($rgo=mysqli_fetch_array($geto)) 
{
   $id= $rgo['id'];
   
   $name=$rgo['fname']." ".$rgo['lname'];
   $email=$rgo['email'];
   $contact=$rgo['contact'];
   $pic=$rgo['pic'];
   $town=$rgo['town'];
   $doa=$rgo['doa'];
$status=$rgo['status'];
$programme=$rgo['programe'];
  echo' <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$email.'</td>
                                                <td>'.$contact.'</td>
                                                <td>'.$programme.'</td>
                                                
                                               
                                              
                                                <td>'.$town.'</td>
                                                <td>'.$doa.'</td>


                                                <td><img src="../'.$pic.'" width="100px" height="100px"></td>
                                                
                                                <td class="align-center"><span class="badge badge-primary">'.$status.'</span></td>
                                                
                                                <!-- <td>
                                                     <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                         
                                                        </div>
                                                    </div> 

                                                    dfhdghdfjh
                                                </td> -->
                                                <td>
                                                <br>';
                                                if ($status=="Approved") {

                                                    echo ' <a href="veditap.php?oid='.$id.'" class="btn btn-secondary mb-4 mr-2">View</a><br><br>
                                                    
                                                    <a href="veditap.php.php?oid='.$id.'" class="btn btn-danger mb-4 mr-2">Delete</a>
                                                    
                                                    ';
                                                    # code...
                                                }
                                                else {
                                                    echo ' <a href="ducc.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Approve</a>  <br>
                                                    <a href="dela.php?oid='.$id.'" class="btn btn-danger mb-4 mr-2">Delete</a><br>
                                                    <a href="veditap.php?oid='.$id.'" class="btn btn-secondary mb-4 mr-2">View</a>
                                                    ';
                                                }

                                                echo '
                                                                                             </td>
                                            </tr>';
}

}









function getleg() 
{
include "db.php";

$geto=mysqli_query($conn,"SELECT * FROM orders  WHERE venue='legon'");

while ($rgo=mysqli_fetch_array($geto)) 
{
   $id= $rgo['id'];
   $inv=$rgo['inv'];
   $name=$rgo['name'];
 
   $contact=$rgo['contact'];
  
   $venue=$rgo['venue'];
   $date=$rgo['do'];
   $status=$rgo['status'];

  echo' <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$inv.'</td>
                                                <td>'.$name.'</td>
                                               
                                                <td>'.$contact.'</td>
                                               
                                                <td>'.$quant.'</td>
                                                <td>'.$venue.'</td>
                                                <td>'.$date.'</td>
                                                <td class="align-center"><span class="badge badge-primary">'.$status.'</span></td>
                                                
                                                <!-- <td>
                                                     <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                         
                                                        </div>
                                                    </div> 

                                                    dfhdghdfjh
                                                </td> -->
                                                <td>
                                                <br>
                                                <a href="dleg.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Delivered</a> 
                                                </td>
                                            </tr>';
}

}


function login($email,$password) 

{

    include "db.php";

    $log=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND password='$password'");

    if ($row=mysqli_fetch_array($log)) {
     $_SESSION['id']=$row['id'];
     $_SESSION['name']=$row['name'];
     $_SESSION['email']=$row['email'];

     echo '<script>window.location= "home.php"</script>';
    } else {
        echo    "please enter correct details";
    }
}




function getvoucher() 
{
include "db.php";
$batch = date("Y");

$getvol=mysqli_query($conn,"SELECT * FROM voucher  WHERE  batch='$batch' ");

    while ($rgvol=mysqli_fetch_array($getvol)) 
    {
        $id= $rgvol['id'];
        
       
        $serial=$rgvol['serial'];
        $pin=$rgvol['pin'];
       
        
        $status=$rgvol['status'];
        $batch=$rgvol['batch'];
        $ustatus=$rgvol['ustatus'];
        echo' <tr>
                                                       
                                                <td>'.$serial.'</td>
                                                <td>'.$pin.'</td>';
                                                if ($status=="Sold") {
                                                    
                                                echo '<td class="align-center"><span class="badge badge-danger">'.$status.'</span></td>';

                                                }
                                                else {
                                                    echo '<td class="align-center"><span class="badge badge-primary">'.$status.'</span></td>';
                                                }

                                              echo 

                                                '<td>'.$ustatus.'</td>
                                                <td>'.$batch.'</td>
                                                
                                               
                                              
                                                


                                                
                                                
                                                
                                                <td>
                                                <br>';
                                                if ($status=="Sold") {

                                                    if ($ustatus=="Used") {

                                                        echo ' <a href="actvol.php?oid='.$id.'" class="btn btn-secondary mb-4 mr-2">Activate</a> ';
                                                    }
                                                    else {
                                                        echo '';
                                                    }

                                                  
                                                }
                                                else {
                                                   echo ' <a href="sellvol.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Sell</a> ';
                                                }

                                                echo '
                                                                                               </td>
                                            </tr>';
    }

}




function  adcourses($ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees){

    include "db.php";

    $ccourse= mysqli_query($conn,"SELECT * FROM programme WHERE ctitle= '$ctitle' AND level='$level' ");
    $rcourse= mysqli_fetch_array($ccourse);
        if ($rcourse >=1) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry Course already Exist</p></div>';
                        
            # code...
        } else {
           $adco= mysqli_query($conn,"INSERT INTO programme (ctitle,duration,arequirement,location,level,structure,description,fees) VALUES ('$ctitle','$duration','$arequirement','$location','$level','$structure','$description','$fees')  ");
            
                if ($adco) {
                    echo' <div id="mess"><p>Course added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add course/p></div>';
                }
                
        }
        


}




function getcourses() 
{
include "db.php";


$getcos=mysqli_query($conn,"SELECT * FROM programme ");

while ($rgo=mysqli_fetch_array($getcos)) 
{
   $id= $rgo['id'];
   
   $ctitle=$rgo['ctitle'];
   $duration=$rgo['duration'];
   $level=$rgo['level'];
   $fees=$rgo['fees'];
   $location=$rgo['location'];
   $arequirement=$rgo['arequirement'];
$structure=$rgo['structure'];
$description=$rgo['description'];
  echo' <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$ctitle.'</td>
                                                <td>'.$duration.'</td>
                                                <td>'.$level.'</td>
                                                <td>'.$fees.'</td>
                                                
                                               
                                              
                                                <td>'.$location.'</td>
                                                <td>'.$arequirement.'</td>
                                                <td>'.$structure.'</td>


                                                <td>'.$description.'</td>


                                               
                                                
                                               
                                                
                                                <!-- <td>
                                                     <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                         
                                                        </div>
                                                    </div> 

                                                    dfhdghdfjh
                                                </td> -->
                                                <td>
                                                
                                               
                                                    <a href="editco.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Edit</a>  <br>
                                                   
                                                    <a href="viewap.php?oid='.$id.'" class="btn btn-secondary mb-4 mr-2">View</a>
                                                    <a href="delc.php?oid='.$id.'" class="btn btn-danger mb-4 mr-2">Delete</a><br>
                                                    
                                                

                                                
                                                                                             </td>
                                            </tr>';
}

}





function  adteacher($tname,$tdob,$hometown,$address,$tcontact,$temail,$tgender,$mstatus,$qualification,$dateadded){

    include "db.php";

    $cteacher= mysqli_query($conn,"SELECT * FROM teachers WHERE temail= '$temail' AND tcontact='$tcontact' ");
    $rteacher= mysqli_fetch_array($cteacher);
        if ($rteacher >=1) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry Teacher already in database</p></div>';
                        
            # code...
        } else {
           $adtea= mysqli_query($conn,"INSERT INTO teachers (tname,tdob,hometown,address,tcontact,temail,tgender,mstatus,qualification,dateadded) VALUES ('$tname','$tdob','$hometown','$address','$tcontact','$temail','$tgender','$mstatus','$qualification','$dateadded')  ");
            
                if ($adtea) {
                    echo' <div id="mess"><p>Teacher added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add teacher/p></div>';
                }
                
        }
        


}






function getteachers() 
{
include "db.php";


$gettea=mysqli_query($conn,"SELECT * FROM teachers ");

while ($rgo=mysqli_fetch_array($gettea)) 
{
   $id= $rgo['id'];
   
   $name=$rgo['tname'];
   $email=$rgo['temail'];
   $tcontact=$rgo['tcontact'];
   $hometown=$rgo['hometown'];
   $address=$rgo['address'];
   $dob=$rgo['tdob'];
$tgender=$rgo['tgender'];
$qualification=$rgo['qualification'];

$mstatus=$rgo['mstatus'];
  echo' <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$email.'</td>
                                                <td>'.$tcontact.'</td>
                                                <td>'.$address.'</td>
                                                
                                               
                                              
                                                <td>'.$qualification.'</td>
                                                <td>'.$hometown.'</td>
                                                <td>'.$mstatus.'</td>


                                                <td>'.$dob.'</td>


                                               
                                                
                                               
                                                
                                                <!-- <td>
                                                     <div class="d-flex">
                                                        <div class="usr-img-frame mr-2 rounded-circle">
                                                         
                                                        </div>
                                                    </div> 

                                                    dfhdghdfjh
                                                </td> -->
                                                <td>
                                                
                                               
                                                    <a href="duc.php?oid='.$id.'" class="btn btn-success mb-4 mr-2">Edit</a>  <br>
                                                   
                                                   
                                                    <a href="delt.php?oid='.$id.'" class="btn btn-danger mb-4 mr-2">Delete</a><br>
                                                    
                                                

                                                
                                                                                             </td>
                                            </tr>';
}

}



function edic($id,$ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees){

    include 'db.php';
    $edip= mysqli_query($conn,"UPDATE programme SET ctitle ='$ctitle',duration='$duration',arequirement= '$arequirement',location= '$location',level='$level',structure='$structure',description='$description',fees='$fees' WHERE id = '$id' ");

    if ($edip) {

        echo' <div id="mess"><p>Course updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update course</p></div>';

    }
    



}



?>












































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































