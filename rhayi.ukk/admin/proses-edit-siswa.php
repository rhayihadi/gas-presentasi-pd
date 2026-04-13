<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

$id       = $_POST['id'];
$nis      = $_POST['nis'];
$username = $_POST['username'];
$password = $_POST['password'];
$kelas    = $_POST['kelas'];

$query = "UPDATE tb_user SET 
            nis='$nis',
            username='$username',
            password='$password',
            kelas='$kelas'
          WHERE id='$id'";

if(mysqli_query($koneksi, $query)){
    header("Location: data-siswa.php");
} else {
    echo "Gagal mengupdate data!";
}

exit;
?>