
<?php 


echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="home.php" class="navbar-brand">
                            <img src="assets/img/log2.png" class="img-fluid" alt="logo" width="70px" height="70px">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link"> HCT </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-bag"></i>
                                <span>Applicants</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="#">Add Applicant</a>
                            </li>
                            <li>
                                <a href="#"> View Applicants </a>
                            </li>

                           
                           

                            
                        </ul>
                    </li>


                   



                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-user-group"></i>
                            <span>Programmes</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addvol.php"> Add Programme </a>
                        </li>
                        <li>
                            <a href="#"> View Programmes </a>
                        </li>

                        



                       

                       
                    </ul>
                </li>




                <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="flaticon-money"></i>
                                <span>Fees</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="adsubadmin.php"> Add Fees </a>
                            </li>
                            <li>
                                <a href="#"> View Fees </a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Vouchers</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                            <li>
                                <a href="gen_voucher.php">Add Voucher</a>
                            </li>
                            <li>
                                <a href="#"> View All Vouchers</a>
                            </li>

                            <li>
                            <a href="#">UCC-Vouchers </a>
                             </li>

                             <li>
                            <a href="#"> HoTECH- Vouchers </a>
                             </li>

                             <li>
                            <a href="#"> KNUST- Vouchers </a>
                             </li>

                             <li>
                            <a href="#"> LEGON- Vouchers </a>
                             </li>
                            
                            
                           
                           
                        </ul>
                    </li>

                    
                </ul>
            </nav>

        </div>'
               ;?>