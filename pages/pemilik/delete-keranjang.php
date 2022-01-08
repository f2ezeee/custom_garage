<?php
    include_once('../../config.php');

    session_start();

    $id     = $_GET['id_sukucadang'];

    if(isset($_SESSION['keranjang'][$id])){
        $_SESSION['keranjang'][$id]=+1;
    } else{
        $_SESSION['keranjang'][$id]=1;
    }

    echo "<script>alert('Produk dimasukkan keranjang belanja!')</script>
    <script>location='sukucadang.php'</script>";
?>