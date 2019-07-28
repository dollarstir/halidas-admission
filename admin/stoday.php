<?php  
include "db.php";
        $dateSold = date("d/m/Y");


        $co=mysqli_query($conn,"SELECT * FROM voucher  WHERE status
        ='Sold'");
        $result3=mysqli_num_rows($co);
             if ($result3 >= 1) {

             echo ' <div class="media">
                                <div class="icon ml-2">
                                <i class="flaticon-money"></i>
                                 </div>
                        <div class="media-body text-right">
                                 <p class="widget-text mb-0">Sold</p>
                
                
                                 <p class="widget-numeric-value">'.$result3.'</p>
                        </div>
                    </div>
                                <p class="widget-total-stats mt-2"> '.$result3.' Voucher  Sold </p>';
              
            
            }else {
            echo '  <div class="media">
                        <div class="icon ml-2">
                        <i class="flaticon-money"></i>
                        </div>
                        <div class="media-body text-right">
                                <p class="widget-text mb-0">Sold</p>
                
                
                
                                <p class="widget-numeric-value">0</p>
                         </div>
                    </div>
                                 <p class="widget-total-stats mt-2"> Nothing Sold  </p>';
            }




        ?>