<?php

include_once('../../config.php');

//  // errror
//  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//  session_start();
//  if($_SESSION['role'] == ""){
//    header("location:../../../index.php?pesan=belumSignIn");
//  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Custom</b>Garage</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><b>Register</b></p>

      <form action="prosesregister.php" method="post">

      <label for="exampleInputEmail1">Nama</label>
        <div class="input-group mb-3">
          <input type="text" name="nama_user" class="form-control" placeholder="Nama">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <label for="exampleInputEmail1">Email</label>
        <div class="input-group mb-3">
          <input type="email"   name="email_user" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>  
        
        <label for="exampleInputEmail1">Alamat</label>
        <div class="input-group mb-3">
          <input type="text" name="alamat_user" class="form-control" placeholder="Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <label for="exampleInputEmail1">No Telfon</label>
        <div class="input-group mb-3">
          <input type="number" name="telp_user" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        
        <label for="exampleInputEmail1">Password</label>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.php" class="text-center">Saya sudah mempunyai akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
