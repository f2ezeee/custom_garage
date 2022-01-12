<?php
    include_once('../../config.php');

    session_start();

    $id     = $_GET['id_sukucadang'];

    unset ($_SESSION['keranjang'][$id]);

    echo "<script>alert('Produk berhasil dihapus')</script>
    <script>location='keranjang.php'</script>";
?>