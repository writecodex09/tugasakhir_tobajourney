
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
        <div class="container">
            <div class="row header-sign-in">
                <div class="col-lg-12 col-sm-12">
                </div>
            </div>
            <div class="row form-sign-in ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="icon-header" height="276" src="images/ilustrasilogin.png" alt="">
                        </div>
                        <div class="col-md-4">
                            <p class="title-form">Sign In</p>
                            <p class="subtitle-form">Let's make a report</p>
                            <form method="POST" action="includes/data_model.php">
                                <div class="form-group content-sign-in content-sign-in-tiketsaya">
                                <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Username</label>
                                <input name="username" type="text" class="form-control input-type-primary-tiketsaya" placeholder="Username">
                                    </div>
                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control input-type-primary-tiketsaya " placeholder="Password">
                            </div>
                        <button type="submit" name="signin" class="btn btn-primary btn-primary-tiketsaya">Sign In</button>
                                </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>