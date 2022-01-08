<?php
    include_once('../../config.php');

    session_start();

    if(isset($_GET['no_stnk'])){
        $delete = mysqli_query($mysqli, "DELETE FROM kendaraan WHERE no_stnk='". $_GET['no_stnk'] ."'");
    }

    if($delete){
        echo "<script>location='kendaraan.php'</script>";
    }
?>