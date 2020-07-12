<?php
    include('config.php');
    $koneksi = new Database();
    $koneksi->simpan_edit_pelanggan($_POST['id'],
    $_POST['Email_Address'],
    $_POST['Password'],
    $_POST['Alamat'],
    $_POST['Kode_pos'],
    $_POST['Telepon']);

    header('Location: tampilkan_data_belisekarang.php');
    ?>