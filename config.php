<?php
class database{
    var $host = "localhost";
    var $email = "root";
    var $password = "";
    var $database = "tugas_besar";
    var $koneksi = "";
    function __construct(){
        $this ->koneksi = mysqli_connect($this->host, $this->email, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "koneksi database gagal : ".mysqli_connect_error(); 
        }
    }
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"select * from beli_sekarang");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($Email_Address, $Password, $Alamat, $Kode_pos, $Telepon)
    {
        mysqli_query($this->koneksi, "insert into beli_sekarang values (null, '$Email_Address', '$Password', '$Alamat', '$Kode_pos', '$Telepon')");
        // echo mysqli_error($this->koneksi);
    }
    function login($email, $password){
        $query = mysqli_query($this->koneksi, "select * from users where Email_Address = '$email' and Password = '$password'");
        
        $data = mysqli_num_rows($query);
        if ($data>0){
            echo "<script>
                    alert('Login berhasil');
                    </script>";
            header('location: index.html');
        }else
            echo "Login gagal";
    
    }
    function register($nama, $email, $password){
        $query = mysqli_query($this->koneksi, "insert into users values (null, '$nama', '$email', '$password')");
        echo mysqli_error($this->koneksi);
        echo "<script>
                alert('Register berhasil');
                </script>";
        header('location: index.html');
    }

    function ambil_data_edit($id){
        $data = mysqli_query($this->koneksi,"select * from beli_sekarang where id = '$id'");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function simpan_edit_pelanggan($id, $email, $password, $alamat, $Kode_pos, $Telepon){
        $data = mysqli_query($this->koneksi,"update beli_sekarang set Email_Address= '$email' , Password='$password', Alamat='$alamat', Kode_pos='$Kode_pos', Telepon='$Telepon' where id='$id'");
        echo mysqli_error($this->koneksi);
    }
    function action_hapus_pelanggan($id){
        mysqli_query($this->koneksi,"DELETE from beli_sekarang where id ='$id'");
    }
}
?>