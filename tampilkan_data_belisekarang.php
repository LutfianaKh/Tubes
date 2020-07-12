<?php
include 'config.php';
$db = new Database();
?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table border="1" class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Email Address</th>
        <th scope="col">Password</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kode Pos</th>
        <th scope="col">Telepon</th>
        <th scope="col">Edit</th>
        <th scope="col">Hapus</th>
    </tr>
</thead>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
        ?>
        <tbody>
        <tr>
        <td scope="row"><?php echo $no++; ?></td>
        <td><?php echo $x['Email_Address']; ?></td>
        <td><?php echo $x['Password']; ?></td>
        <td><?php echo $x['Alamat']; ?></td>
        <td><?php echo $x['Kode_pos']; ?></td>
        <td><?php echo $x['Telepon']; ?></td>
        <td><a href="edit_data_pelanggan.php?id=<?php echo $x['id'];?>">Edit</a></td>
        <td><a href="action_hapus_pelanggan.php?id=<?php echo $x['id'];?>">Hapus</a></td>
        </tr>
    </tbody>
        <?php
    }
    ?>
    </table>
    <a type="button" href="index.html" class="btn btn-danger text-white">Selesai</a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>