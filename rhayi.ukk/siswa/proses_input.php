<?php

$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

$nis      = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi   = $_POST['lokasi'];
$ket      = $_POST['keterangan'];
$tanggal  = $_POST['tanggal'];

$query = "INSERT INTO tb_aspirasi
          (id_pelaporan, nis, id_kategori, lokasi, ket, status, feedback, tanggal)
          VALUES
          (NULL, '$nis', '$kategori', '$lokasi', '$ket', 'menunggu', NULL, '$tanggal')";

if(mysqli_query($koneksi, $query)){
    header("Location: input-aspirasi.php?status=success");
} else {
    header("Location: input-aspirasi.php?status=gagal");
}

exit;
?>