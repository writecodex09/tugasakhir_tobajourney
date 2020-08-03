<?php
    //tambah
    //  include 'includes/user_token.php';
    include 'myfirebase.php';

    if(isset($_POST['signin'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if($username != null){
            if($password != null){
                $reference = 'Admin/'.$username;
                $checkdata = $database->getReference($reference)->getValue();
                if($checkdata != null){
                    if($password != null)
                    {

                        $password_admin_saat_ini = $checkdata['password'];

                        if($password == $password_admin_saat_ini) {
                            session_start();
                        $_SESSION['username'] = $username;
                        header('location: ../dashboard.php');
                        }
                        else {
                             echo 'password salah';
                        }

                        // session_start();
                        // $_SESSION['username'] = $username;
                        // header('location: ../dashboard.php');
                    }
                    else {
                        echo 'password salah';
                    }
                }
                else {
                    echo 'data tidak ada';
                }
            }
        }
    }

?>