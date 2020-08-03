<?php
    // include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    $nama_wisata_url = $_GET['nama_wisata'];
    //data wisata
    // $path_wisata_fb = 'Wisata';
    // $checkdata_wisata = $database->getReference($path_wisata_fb)->getValue();

    $path_wisata_details = 'Wisata/'.$nama_wisata_url;
    $checkdata_wisata_details = $database->getReference($path_wisata_details)->getValue();

    
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

                    <div class="item-menu inactive">
                      <a href="dashboard.php">
                        <p class="icon-item-menu">
                          <i class="fab fa-delicious"></i>
                      </p>
                      </a>
                    </div>

                     <div class="item-menu inactive ">
                         <a href="sales.php">
                            <p class="icon-item-menu">
                          <i class="fas fa-ticket-alt"></i>
                      </p>
                         </a>
                    </div>
                     <div class="item-menu ">
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
                    Kornelius Sipayung
                </p>
                <p class="admin-level">
                    Super Admin
                </p>
                <ul class="admin-menus">
                    <a href="dashboard.php">
                        <li >
                            My Dashboard
                        </li>
                    </a>
                     <a href="sales.php">
                        <li>
                            Ticket Sales
                        </li>
                    </a>
                     <a href="wisata.php">
                        <li class="active-link">
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
                     <a href="">
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
                       <?php 
                       echo $checkdata_wisata_details['nama_wisata'];
                    // print_r($checkdata_wisata_details);
                       ?>
                    </p>
                    <nav aria-label="sitemap-ts breadcrumb">
                        <ol class="breadcrumb" style="margin-left: -15px; background: none;">
                            <li class="breadcrumb-item"><a href="wisata.php" style="color: #c7c7c7;">Wisata</a></li>
                            <li style="color: #21272c;" class="breadcrumb-item active" aria-current="page">Details Wisata</li>
                        </ol>
                    </nav>
                </div>
            </div>
           <div class="row report-group">

               <div class="col-md-12">
                   <div class="item-big-report col-md-12">
                  <div class="row">
                      
                      <div class="overlay-box col-md-4">
                        <a href="" type="submit" class="btn btn-primary btn-third-tiketsaya">Replace</a>
                      </div>
                      
                        <div style="padding-left: 30px;" class="thumbnail-box col-md-4">
                            <!-- <p class="label-thumbnail">
                                Thumbnail Wisata
                            </p> -->
                            
                        <img style="padding-top: 10px;" class="thumbnail-wisata" src="images/WhatsApp Image 2020-05-24 at 09.53.16 (1).jpeg" alt="">
                            
                    </div>
            
                    <div class="col-md-5">
                        <form>
                                <div class="form-group content-sign-in content-sign-in-tiketsaya">
                                <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Nama Wisata</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya" placeholder="Nama Wisata">
                                    </div>
                                <div class="form-group ">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Lokasi</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya " placeholder="Lokasi Wisata">
                            </div>
                            <div class="form-group ">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Lokasi</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya " placeholder="Lokasi Wisata">
                            </div>
                             <div class="form-group ">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Harga Tiket (IDR)</label>
                                <input type="number" class="form-control input-type-primary-tiketsaya " placeholder="Harga">
                                        </div>
                                        <div class="col-md-6">
                                             <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Tanggal Wisata</label>
                                <input type="text" class="form-control input-type-primary-tiketsaya " placeholder="Tanggal">
                                        </div>
                                    </div>
                            </div>
                             <div class="form-group">
                                <label class="title-input-type-primary-tiketsaya" for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control input-type-primary-tiketsaya " id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Update</button>
                                </form>
                    </div>
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