<?php
    include('config.php');
    $koneksi = new Database();
    $koneksi->register(
        $_POST['register_nama'],  $_POST['register_email'], $_POST['register_password']);

    // header('location:tampilkan_data_belisekarang.php');
    ?>