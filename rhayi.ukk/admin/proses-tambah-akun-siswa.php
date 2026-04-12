<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

if (isset($_POST['simpan'])) {
    // 1. Ambil data dari form
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];

    // 2. Enkripsi Password
    // 3. Query Insert ke tabel user
    // password_hash akan mengubah "12345" menjadi kode acak seperti "$2y$10$...
    $query = "INSERT INTO tb_user (username , password , nis, kelas)
              VALUES ('$nama', '$password', '$nis', '$kelas')";

    $simpan = mysqli_query($koneksi, $query);

    if ($simpan) {
        echo "<script>alert('Data siswa berhasil ditambahkan!'); window.location='dashboard-admin.php';</script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}
?>
