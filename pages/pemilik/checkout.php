<?php

include_once('../../config.php');

 // errror
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 session_start();
 if($_SESSION['role'] == ""){
   header("location:../../../index.php?pesan=belumSignIn");
 }

 $kueri = "SELECT * FROM user WHERE email_user='". $_SESSION['email'] ."'";
 $eksekusi = mysqli_query($mysqli, $kueri);
 $baris = mysqli_fetch_assoc($eksekusi);

 $_SESSION['nama_user'] = $baris['nama_user'];
 $_SESSION['id_user'] = $baris['id_user'];

//  // Fetch all users data from database


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="sukucadang.php" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Suku Cadang</p>
              </a>
            </li> 
          <li class="nav-item">
            <a href="keranjang.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Keranjang</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="kendaraan.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Kendaraan</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="nota.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Nota</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipe Kendaraan</label>
                    <select class="form-control" name="no_stnk" required>
                        <option value="" disabled selected hidden> Pilih STNK</option>
                        <?php
                          $result = "SELECT k.no_stnk FROM kendaraan k JOIN pemilik p ON k.id_pemilik = p.id_pemilik JOIN user u ON u.id_user = p.id_user WHERE u.id_user = '".$_SESSION['id_user']."' ";
                          $tipe = mysqli_query($mysqli, $result);

                          foreach ($tipe as $row) :
                        ?>
                        <option value="<?php echo $row['no_stnk']; ?>"><?php echo $row['no_stnk']; ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
                </div>
              </form>
              <?php
                if(isset($_POST['checkout'])){
                    $stnk = $_POST['no_stnk'];
                    $idnsc = '1';

                    $kuerrinsc              = mysqli_query($mysqli, "INSERT INTO nota_sukucadang VALUES ('$idnsc', NULL)");
                    $query4                 = "SELECT no_nota_sukucadang FROM nota_sukucadang  ORDER BY no_nota_sukucadang DESC LIMIT 1";
                    $execute4               =  mysqli_query($mysqli, $query4);
                    $row_nsc                =  mysqli_fetch_assoc($execute4);
                    $latest_id_nsc          =  $row_nsc['no_nota_sukucadang'];

                   foreach ($_SESSION['keranjang'] as $id => $qty) {
                      $kueri           = "SELECT * FROM sukucadang
                                          WHERE id_sukucadang='$id'";
                      $sukucadang      = mysqli_query($mysqli, $kueri);
                      $row             = mysqli_fetch_assoc($sukucadang);

                      $querryEX        = mysqli_query($mysqli, "INSERT INTO detail_nota_sukucadang VALUES ('$latest_id_nsc', '$id', '$qty')");
                   }

                   $querryinspkb = mysqli_query($mysqli, "INSERT INTO pkb (no_stnk, no_nota_sukucadang) VALUES ('$stnk', '$latest_id_nsc')");

                   $query7                 =  "SELECT id_pkb FROM pkb
                   ORDER BY id_pkb DESC LIMIT 1";
                    $execute7               =  mysqli_query($mysqli, $query7);
                    $row_id_pkb             =  mysqli_fetch_assoc($execute7);
                    $latest_id_pkb          =  $row_id_pkb['id_pkb']; 
                    $kueri                  =  mysqli_query($mysqli,
                    "CREATE OR REPLACE FUNCTION total(id_nsc VARCHAR(7))
                    RETURNS INT
                    BEGIN
                        DECLARE hitung INT;
                        SELECT SUM(dnsc.`banyak`*sc.`harga_satuan`) INTO hitung
                        FROM detail_nota_sukucadang dnsc JOIN sukucadang sc ON dnsc.id_sukucadang = sc.id_sukucadang
                        WHERE dnsc.no_nota_sukucadang = id_nsc;
                    RETURN hitung;
                    END;");
                    $hasil                  =  mysqli_query($mysqli, "SELECT total('$latest_id_nsc') AS 'Total'");
                    $row_total              =  mysqli_fetch_assoc($hasil);
                    $total                  =  $row_total['Total'];
                  $resullt1               =  "INSERT INTO pembayaran (id_pkb, total_harga) VALUES ('$latest_id_pkb', '$total')";
                    $add_byr                =  mysqli_query($mysqli, $resullt1);

                    unset($_SESSION['keranjang']);

                    if($add_byr){
                      echo "<script>alert('Checkout Berhasil!. Silakan Melakukan Pembayaran!')</script>
                      <script>location='nota.php'</script>";
                  }
                }
                
               
      

            ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
