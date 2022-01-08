<?php
    include_once('../../config.php');

    session_start();

    if(isset($_POST['tambah-kendaraan'])){
        $stnk = $_POST['no_stnk'];
        $tipekendaraan = $_POST['id_tipe'];
        $mesin = $_POST['no_mesin'];
        $rangka = $_POST['no_rangka'];
        $tahun = $_POST['tahun'];
        $warna = $_POST['warna'];

        
    }

    echo "<script>alert('Produk dimasukkan keranjang belanja!')</script>
    <script>location='sukucadang.php'</script>";
?>