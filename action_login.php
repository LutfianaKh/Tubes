<?php
    include('config.php');
    $koneksi = new Database();
    $koneksi->login($_POST['email_login'],
                          $_POST['password_login']);

    // header('location:tampilkan_data_belisekarang.php');
    ?>