<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

      //data admin
      $reference = 'Admin/'.$_SESSION['username'];
      $checkdata = $database->getReference($reference)->getValue();

         //data sales
        $path_sales_fb = 'MyTickets';
        $checkdata_sales = $database->getReference($path_sales_fb)->getValue();
           //data turis
    $path_turis_fb = 'Users';
    $checkdata_turis = $database->getReference($path_turis_fb)->getValue();
         // cetak data admin
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

                    <div class="item-menu inactive">
                      <a href="dashboard.php">
                        <p class="icon-item-menu">
                          <i class="fab fa-delicious"></i>
                      </p>
                      </a>
                    </div>

                     <div class="item-menu ">
                         <a href="sales.php">
                            <p class="icon-item-menu">
                          <i class="fas fa-ticket-alt"></i>
                      </p>
                         </a>
                    </div>
                     <div class="item-menu inactive">
                         <a href="wisata.html">
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
                        <li >
                            My Dashboard
                        </li>
                    </a>
                     <a href="sales.html">
                        <li class="active-link">
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
                        Ticket Sales
                    </p>
                    <p>
                        <p class="sub-header-title">
                            The item are bought around the world
                        </p>
                    </p>
                </div>
            </div>
           <div class="row report-group">

               <div class="col-md-12">
                   <div class="item-big-report col-md-12">
                        <table class="table-tiketsaya table table-borderless">
  <thead>
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah Wisata</th>
      <th scope="col">Sisa Balance</th>
      <th scope="col">Menu</th>
    </tr>
  </thead>
  <tbody>
  <?php

foreach($checkdata_sales as $data_sales_final => $data_print_sales) {

    $path_data_based_on_username = 'Users/'.$data_print_sales['username'];
    $print_data_user_profile = $database->getReference($path_data_based_on_username)->getValue();

    // foreach($print_data_user_profile as $print_data_user_profile_final => $value_data_user_profile)
    // {}
    // //data place
    // $path_place_fb = 'MyTickets/'.$data_print_sales['username'].'/wisata';
    // $checkdata_place = $database->getReference($path_place_fb)->getValue();

    // echo count($checkdata_place);

?>
    <tr>
      <td scope="row ">
          <img class="user-table-item" src="images/WhatsApp Image 2020-05-24 at 09.53.16 (1).jpeg" alt="">
      </td>
      <td><?php echo $data_print_sales['username']; ?></td>
      <td></td>
      <td></td>
      <td>
            <a href="#" class="btn btn-small-table btn-primary">Detail</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>             
               </div>
           </div>
        </div>
        </div>
    </div>

        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>