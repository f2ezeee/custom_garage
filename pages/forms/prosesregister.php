<?php 

include_once('../../config.php');

//  // errror
//  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//  session_start();
//  if($_SESSION['role'] == ""){
//    header("location:../../../index.php?pesan=belumSignIn");
//  }

if(isset($_POST['register'])) {

    $nama = $_POST['nama_user'];
    $role = "pemilik";
    $email = $_POST['email_user'];
    $alamat = $_POST['alamat_user'];
    $notelp = $_POST['telp_user'];
    $password = $_POST['password_user'];
    

    $check = mysqli_query($mysqli, "SELECT * FROM user WHERE email_user = '$email' OR telp_user = '$notelp' ");
    $recheck = mysqli_num_rows($check);

    if($recheck > 0) {
        echo "<script> alert('Data yang di input sudah terdaftarkan, silahkan log-in') </script>
            <script>location='login.php'</script>";
    }
    
    else{

       
        // $querry = mysqli_query($mysqli, "INSERT INTO user (nama_user, email_user, password_user, role_user, alamat_user, telp_user )
        // VALUES ('$nama', '$email', '$password', '$role', '$alamat', '$notelp')");

        // $register = mysqli_query($mysqli, $querry); 

        // $query1                 =  "SELECT * FROM user ORDER BY id_user DESC LIMIT 1";
        // $execute1               =  mysqli_query($mysqli, $query1);
        // $row                    =  mysqli_fetch_assoc($execute1);
        // $latest_id_pemilik      =  $row['id_user'];
        // $namapemilik            =  $row['nama_user'];
        // $alamatpemilik          =  $row['email_user'];
        // $telppemilik            =  $row['telp_user'];

        // $query2                 =  "INSERT INTO pemilik ('id_pemilik', 'nama_pemilik', 'alamat_pemilik', 'telp_pemilik')
        //                             VALUES('$latest_id_pemilik','$namapemilik','$alamatpemilik','$telppemilik')";
        // $execute2               =  mysqli_query($mysqli, $query2);





        $query         =    "INSERT INTO user (nama_user, email_user, password_user, role_user, alamat_user, telp_user)
                                VALUES ('$nama', '$email', '$password', '$role', '$alamat', '$notelp');
                                INSERT INTO pemilik (nama_pemilik, alamat_pemilik, telp_pemilik, id_user)
                                SELECT nama_user, alamat_user, telp_user, id_user FROM user
                                ORDER BY id_user DESC LIMIT 1";
            $signup        = $mysqli->multi_query($query);

            do {
                if ($result = $mysqli->store_result()) {
                    var_dump($result->fetch_all(MYSQLI_ASSOC));
                    $result->free();
                }
            } while ($mysqli->next_result());

        echo "<script> alert('Data yang di input berhasil didaftarkan, silahkan log-in') </script>
            <script>location='login.php'</script>";
    }

    

}



?>