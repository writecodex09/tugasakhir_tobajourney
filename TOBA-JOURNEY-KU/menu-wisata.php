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

    //data pantai
    $path_pantai_fb = 'Pantai';
    $checkdata_pantai = $database->getReference($path_pantai_fb)->getValue();

    //data air terjun
    $path_airterjun_fb = 'AirTerjun';
    $checkdata_airterjun = $database->getReference($path_airterjun_fb)->getValue();

    //data hotel
    $path_hotel_fb = 'Hotel';
    $checkdata_hotel = $database->getReference($path_hotel_fb)->getValue();


    //data wisata alam
    $path_wisataalam_fb = 'WisataAlam';
    $checkdata_wisataalam = $database->getReference($path_wisataalam_fb)->getValue();

    //data restoran
    $path_restoran_fb = 'Restoran';
    $checkdata_restoran = $database->getReference($path_restoran_fb)->getValue();

     //data kebudayaan
     $path_kebudayaan_fb = 'Kebudayaan';
     $checkdata_kebudayaan = $database->getReference($path_kebudayaan_fb)->getValue();


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
                       Menu Wisata
                    </p>
                    <p>
                        <p class="sub-header-title">
                            Manage your wisata
                        </p>
                    </p>
                </div>
            </div>
                <div class="row report-group">
                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_pengguna (1).png" alt=""> -->
                            <p class="title-item">
                               Jumlah Wisata Pantai
                            </p>
                            <p class="subtitle-item">
                                
                            </p>
                            <p class="value-item">
                                <?php
                                    echo count($checkdata_pantai);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the world -->
                                <a href="pantai.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_sales.png" alt=""> -->
                            <p class="title-item">
                               Jumlah Air Terjun
                            </p>
                            <p class="subtitle-item">
                               <!-- TICKET BEING SOLD -->
                            </p>
                            <p class="value-item">
                               <?php
                                    echo count($checkdata_airterjun);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the world -->
                                <a href="airterjun.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_wisata.png" alt=""> -->
                            <p class="title-item">
                                Jumlah Hotel
                            </p>
                            <p class="subtitle-item">
                                <!-- PALCE THAT AVAILABLE -->
                            </p>
                            <p class="value-item">
                                 <?php
                                    echo count($checkdata_hotel);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the tobasa -->
                                <a href="hotel.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
           </div>
           <div class="row report-group">
                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_pengguna (1).png" alt=""> -->
                            <p class="title-item">
                               Jumlah Wisata Alam
                            </p>
                            <p class="subtitle-item">
                                
                            </p>
                            <p class="value-item">
                                <?php
                                    echo count($checkdata_wisataalam);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the world -->
                                <a href="wisataalam.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_sales.png" alt=""> -->
                            <p class="title-item">
                               Jumlah Restoran
                            </p>
                            <p class="subtitle-item">
                               <!-- TICKET BEING SOLD -->
                            </p>
                            <p class="value-item">
                               <?php
                                    echo count($checkdata_restoran);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the world -->
                                <a href="restoran.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
                                <div class="col-md-4">
                  <div class=" item-report col-md-12">
                    <div class="row">
                        <div class=" content col-md-12">
                            <!-- <img src="images/icon_total_wisata.png" alt=""> -->
                            <p class="title-item">
                                Jumlah Kebudayaan
                            </p>
                            <p class="subtitle-item">
                                <!-- PALCE THAT AVAILABLE -->
                            </p>
                            <p class="value-item">
                                 <?php
                                    echo count($checkdata_kebudayaan);
                                ?>
                            </p>
                            <p class="desc-item">
                                <!-- around the tobasa -->
                                <a href="kebudayaan.php" class="btn btn-small btn-primary btn-primary-tiketsaya">See More</a>
                            </p>
                        </div>
                    </div>
                  </div>
                </div>
           </div>
        </div>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>