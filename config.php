<?php
    /**
     * using mysqli_connect for database connection
     */

    $databaseHost       = 'localhost';
    $databaseName       = 'bae_custom_garage';
    $databaseUsername   = 'root';
    $databasePassword   = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    // // Tes koneksi
    // if ( !$mysqli ){
    //     echo "Koneksi database gagal: ".mysqli_error($mysqli);
    // }
?>