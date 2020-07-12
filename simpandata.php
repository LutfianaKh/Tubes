<?php
    include('config.php');
    $koneksi = new Database();
    $koneksi->tambah_data($_POST['Email_Address'],
                          $_POST['Password'],
                          $_POST['Alamat'],
                          $_POST['Kode_pos'],
                          $_POST['Telepon']);

    header('location:tampilkan_data_belisekarang.php');
    ?>