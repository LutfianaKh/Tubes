<?php
include 'config.php';
$db = new Database();
?>
<table border="1">
    <tr>
        <th>Email Address</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Telepon</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
    $no = 1;
    foreach($db->tampil_data() as $x){
        ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['Email_Address']; ?></td>
        <td><?php echo $x['Password']; ?></td>
        <td><?php echo $x['Alamat']; ?></td>
        <td><?php echo $x['Kode_pos']; ?></td>
        <td><?php echo $x['Telepon']; ?></td>
        <td><a href="edit_data_pelanggan.php?id=<?php echo $x['nama'];?>">Edit</a></td>
        <td><a href="hapus_data_pelanggan.php?id=<?php echo $x['nama'];?>">Hapus</a></td>
        </tr>
        <?php
    }
    ?>
    </table>