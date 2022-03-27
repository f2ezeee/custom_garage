<?php
    // mengaktifkan session php
    session_start();

    // Create database connection using config file
    include_once("../../config.php");

    // errror
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // menangkap data yang dikirim dari form
    $email          = $_POST['email_user'];
    $password       = ($_POST['password_user']);

    // Fetch all users data from database
    $result         =   "SELECT * FROM user WHERE email_user ='$email' AND password_user ='$password'";
    $signin         =   mysqli_query($mysqli, $result);

    // menghitung jumlah data yang ditemukan
    $cek            = mysqli_num_rows($signin);

    if($cek > 0){
        $data   = mysqli_fetch_assoc($signin);

        if($data['role_user'] == "admin"){
            $_SESSION['email_user']   = $email;
            $_SESSION['role_user']    = "admin";
            header("location:../admin/profile.php");
        }
        
        else if($data['role_user'] == "pemilik"){
            $_SESSION['email']   = $email;
            $_SESSION['role_user']    = "pemilik";
            header("location:../pemilik/profile.php");
        } else {
            header("location:login.php");
        }
    } else {
        header("location:login.php");
    }
?>