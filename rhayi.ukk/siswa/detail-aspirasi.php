<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Aspirasi</title>

<style>
body{
    background:#ddd;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
    width:500px;
    margin:30px auto;
    border:3px solid #444;
    background:#ddd;
}

.top{
    border-bottom:3px solid #444;
    padding:10px;
}

.logout{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
}

.judul{
    font-weight:bold;
    padding:15px;
}

.table-box{
    padding:0 15px 15px 15px;
}

table{
    width:100%;
    border-collapse:separate;
    border-spacing:0 10px;
}

td{
    font-weight:bold;
    font-size:14px;
}

.label{ width:150px; }
.titik{ width:10px; }

.inputbox{
    border:2px solid #555;
    background:#eee;
    border-radius:5px;
    padding:4px 8px;
    display:inline-block;
    min-width:160px;
}

.textarea{
    border:2px solid #555;
    background:#eee;
    border-radius:5px;
    padding:6px;
    height:70px;
}

.footer{
    text-align:right;
    padding:10px 15px 15px;
}

.back{
    padding:5px 14px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
}

.back:hover{
    background:#ccc;
    cursor:pointer;
}
</style>
</head>

<body>

<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

/* ambil id dari tombol detail */
$id = $_GET['id'] ?? 0;

/* query berdasarkan id */
$query = mysqli_query($koneksi,"
SELECT * FROM tb_aspirasi
JOIN tb_kategori ON tb_aspirasi.id_kategori = tb_kategori.id_kategori
WHERE id_pelaporan = '$id'
");

/* ambil data */
$data = mysqli_fetch_assoc($query);

/* jika data tidak ditemukan */
if(!$data){
    echo "<h3 style='text-align:center'>Data tidak ditemukan</h3>";
    exit;
}
?>

<div class="wrapper">

<div class="top">
<a href="logout.php">
<button class="logout">Logout</button>
</a>
</div>

<div class="judul">DETAIL ASPIRASI</div>

<div class="table-box">

<table>

<tr>
<td class="label">Kategori</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['ket_kategori']; ?></div></td>
</tr>

<tr>
<td class="label">Lokasi</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['lokasi']; ?></div></td>
</tr>

<tr>
<td class="label">Keterangan</td>
<td class="titik">:</td>
<td><div class="textarea"><?= $data['ket']; ?></div></td>
</tr>

<tr>
<td class="label">Status</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= strtoupper($data['status']); ?></div></td>
</tr>

<tr>
<td class="label">Feedback</td>
<td class="titik">:</td>
<td>
<div class="textarea">
<?= $data['feedback'] ? $data['feedback'] : 'Belum ada respon'; ?>
</div>
</td>
</tr>

<tr>
<td class="label">Tanggal</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['tanggal']; ?></div></td>
</tr>

</table>

</div>

<div class="footer">
<button class="back" onclick="history.back()">Kembali</button>
</div>

</div>

</body>
</html>