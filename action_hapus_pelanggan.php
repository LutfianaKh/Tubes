<?php
    include('config.php');
    $koneksi = new Database();
    $id = $_GET['id'];

    $hasil = $koneksi->action_hapus_pelanggan($id);
    // print_r($hasil);
    header('location:tampilkan_data_belisekarang.php');
    ?>
