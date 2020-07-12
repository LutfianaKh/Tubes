<?php
    include('config.php');
    $koneksi = new Database();
    $id = $_GET['id'];

    $hasil = $koneksi->ambil_data_edit($id);
    // print_r($hasil);
    // header('location:tampilkan_data_belisekarang.php');
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Beli Sekarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body >
    <div class="container" style="background-color: #FFA07A" >
    <form action="action_simpan_edit_pelanggan.php" method="POST">
    <div class="form-row">
    <div class="form-group col-md-6">
        <fieldset>
        <legend>Beli Sekarang</legend>
        <p>
            <input class="form-control" type="hidden" name="id" placeholder="" value="<?php echo $hasil[0]['id']; ?>" />
        </p>
        <p>
            <label>Email Address:</label>
            <input class="form-control" type="text" name="Email_Address" placeholder="" value="<?php echo $hasil[0]['Email_Address']; ?>"/>
        </p>
        <p>
            <label>Password:</label>
            <input class="form-control" type="password" name="Password" placeholder="" value="<?php echo $hasil[0]['Password']; ?>" />
        </p>
        <p>
            <label>Alamat:</label>
            <input class="form-control" type="text" name="Alamat" placeholder="" value="<?php echo $hasil[0]['Alamat']; ?>"/>
        </p>
        <p>
            <label>Kode Pos:</label>
            <input class="form-control" type="text" name="Kode_pos" placeholder="" value="<?php echo $hasil[0]['Kode_pos']; ?>"/>
        </p>
        <p>
            <label>Telepon:</label>
            <input class="form-control" type="text" name="Telepon" placeholder="" value="<?php echo $hasil[0]['Telepon']; ?>" />
        </p>
        <p>
            <input class="btn btn-primary" type="submit" name="submit" value="save" />
        </p>
        </fieldset>
    </form>
    <li><a type="button" class="btn btn-danger" href="tampilkan_data_belisekarang.php">Selesai</a></li>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>