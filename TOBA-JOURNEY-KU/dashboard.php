<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    //  $reference = 'Admin/'.$_SESSION['username'];
    //  echo $reference;
    //  $checkdata = $database->getReference($reference)->getValue();

    //data admin
    $reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();

    //data turis
    $path_turis_fb = 'Users';
    $checkdata_turis = $database->getReference($path_turis_fb)->getValue();

    //data sales
    $path_sales_fb = 'MyTickets';
    $checkdata_sales = $database->getReference($path_sales_fb)->getValue();

    
    //data wisata
    $path_wisata_fb = 'Wisata';
    $checkdata_wisata = $database->getReference($path_wisata_fb)->getValue();




    //cek data admin
    $nama_admin_f = $checkdata['nama_admin'];
?>
<!DOCTYPE>
<html>
    <head>
        <title>Web Admin</title>
            <meta charset="utf-8">
            <meta name="descripstion" content="Toba journey">
            <meta name="keyword" content="Web Dashboard Toba Journey">
            <meta name="author" content="D3-TI-11">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/style.css">
            <link href="css/all.css" rel="stylesheet">

    </head>
    <body>
       
        <div class="side-left">
            <div class="shortcut" onmouseover="showAdminProfile()">
                <div class="emblemapp">
                    <img src="images/leaflet.png" height="29" alt="">
                </div>
                <div class="menus">

                    <div class="item-menu">
                      <a href="dashboard.php">
                        <p class="icon-item-menu">
                          <i class="fab fa-delicious"></i>
                      </p>
                      </a>
                    </div>

                     <div class="item-menu inactive">
                         <a href="sales.php">
                            <p class="icon-item-menu">
                          <i class="fas fa-ticket-alt"></i>
                      </p>
                         </a>
                    </div>
                     <div class="item-menu inactive">
                         <a href="wisata.php">
                             <p class="icon-item-menu">
                          <i class="fas fa-globe"></i>
                      </p>
                         </a>
                    </div>
                     <div class="item-menu inactive">
                         <a href="customer.php">
                            <p class="icon-item-menu">
                          <i class="fas fa-users"></i>
                      </p>
                         </a>  
                    </div>
                     <div class="item-menu inactive">
                         <a href="setting.php">
                             <p class="icon-item-menu">
                          <i class="fas fa-cog"></i>
                      </p>
                         </a>
                    </div>
                    <div class="item-menu inactive">
                         <a href="menu-wisata.php">
                             <p class="icon-item-menu">
                          <i class="fas fa-cog"></i>
                      </p>
                         </a>
                    </div>
                     <div class="item-menu inactive">
                         <a href="#">
                            <p class="icon-item-menu">
                          <i class="fas fa-power-off"></i>
                      </p>
                         </a>
                    </div>
                </div>
            </div>
            <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
                <div class="admin-picture">
                    <img src="images/WhatsApp Image 2020-05-24 at 09.53.16 (1).jpeg" alt="">
                </div>
                <p class="admin-name">
                    <?php
                    echo $checkdata['nama_admin'];
                    ?>
                </p>
                <p class="admin-level">
                    Super Admin
                </p>
                <ul class="admin-menus">
                    <a href="dashboard.php">
                        <li class="active-link">
                            My Dashboard
                        </li>
                    </a>
                     <a href="sales.php">
                        <li>
                            Ticket Sales
                        </li>
                    </a>
                     <a href="wisata.php">
                        <li>
                            Manage Wisata
                        </li>
                    </a>
                     <a href="customer.php">
                        <li>
                            Customers <span class=" badge-tiketsaya badge badge-pill badge-primary">96</span>
                        </li>
                    </a>
                     <a href="setting.php">
                        <li>
                            Account Setting
                        </li>
                    </a>
                    <a href="menu-wisata.php">
                        <li>
                            Menu Wisata
                        </li>
                    </a>
                     <a href="includes/user_destroy.php">
                        <li style="padding-top : 70px">
                            Log Out
                        </li>
                    </a>
                </ul>
            </div>
        </div>
      
        <div class="main-content">
            <div class=" header row">
                <div class="col-md-12">
                    <p class="header-title">
                        My Dashboard
                    </p>
                    <p>
                        <p class="sub-header-title">
                            Latest report updated this week and on
                        </p>
                    </p>
                </div>
            </div>
                <div class="row report-group">
                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <img src="images/icon_total_pengguna (1).png" alt="">
                            <p class="title-item">
                                TOURIST
                            </p>
                            <p class="subtitle-item">
                                USERS LIFETIME
                            </p>
                            <p class="value-item">
                                <?php
                                    echo count($checkdata_turis);
                                ?>
                            </p>
                            <p class="desc-item">
                                around the world
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <img src="images/icon_total_sales.png" alt="">
                            <p class="title-item">
                               SALES
                            </p>
                            <p class="subtitle-item">
                               TICKET BEING SOLD
                            </p>
                            <p class="value-item">
                               <?php
                                    echo count($checkdata_sales);
                                ?>
                            </p>
                            <p class="desc-item">
                                around the world
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <img src="images/icon_total_wisata.png" alt="">
                            <p class="title-item">
                                WISATA
                            </p>
                            <p class="subtitle-item">
                                PALCE THAT AVAILABLE
                            </p>
                            <p class="value-item">
                                 <?php
                                    echo count($checkdata_wisata);
                                ?>
                            </p>
                            <p class="desc-item">
                                around the tobasa
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
           </div>
           <div class="row report-group">

               <div class="col-md-6">
                   <div class="item-big-report col-md-12">
                       <p class="title">
                           <span class="title-blue">NEWEST</span> USERS
                       </p>
                       <p class="sub-title">
                           USER THAT SIGN UP NOWADAYS
                       </p>
                       <a href="#" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                    <div class="divider-line"></div>

                    <?php 
                        foreach($checkdata_turis as $checkdata_turis_value){

                       
                       
                    ?>

                    <div class="user-item">
                        <div class="user-picture">
                            <img src="images/WhatsApp Image 2020-05-24 at 09.53.16 (1).jpeg" alt="">
                        </div>
                       <div class="user-inf0">
                            <p class="title">
                          <?php echo $checkdata_turis_value['nama_lengkap']; ?>
                       </p>
                       <br>
                       <p class="sub-title">
                       <?php echo $checkdata_turis_value['bio']; ?>
                       </p>
                       </div>
                       <a href="#" class="btn btn-small-border btn-primary">View Profile</a>
                    </div>
                   <?php  } ?>
                   </div>

              
                  

                </div>

                <div class="col-md-6">
                   <div class="item-big-report col-md-12">
                       <p class="title">
                           <span class="title-blue">TICKET</span> SOLD
                       </p>
                       <p class="sub-title">
                           USER THAT SIGN UP NOWADAYS
                       </p>
                       <a href="#" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                                            <div class="divider-line"></div>


                    <?php
                       
                        foreach($checkdata_sales as $data_sales_final => $data_print_sales){

                       
                        

                      
            
                    ?>

                    <div class="user-item">
                        <div class="user-picture">
                            <!-- <img src="images/WhatsApp Image 2020-05-24 at 09.53.16 (1).jpeg" alt=""> -->
                        </div>
                       <div class="user-inf0">
                            <p class="title">
                           <?php echo $data_print_sales['username']; ?>
                       </p>
                       <br>
                       <p class="sub-title">
                       
                       </p>
                       </div>
                       <a href="#" class="btn btn-small-border btn-primary">View Profile</a>
                    </div>
                        <?php } ?>
                   
                   </div>

              
                  

                </div>

                
               </div>
           </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>