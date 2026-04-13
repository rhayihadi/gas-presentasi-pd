<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

if(!isset($_GET['id'])){
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];

if (isset($_POST['update'])) {

    $status   = $_POST['status'];
    $feedback = $_POST['feedback']; 

    mysqli_query($koneksi, "UPDATE tb_aspirasi SET 
        status='$status', 
        feedback='$feedback'
        WHERE id_pelaporan='$id'
    ");

    echo "<script>
        alert('Data berhasil diupdate!');
        window.location='histori-aspirasi.php';
    </script>";
    exit;
}

$query = mysqli_query($koneksi, "
SELECT a.*, k.ket_kategori
FROM tb_aspirasi a
LEFT JOIN tb_kategori k
ON a.id_kategori = k.id_kategori
WHERE a.id_pelaporan = '$id'
");

$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Detail Aspirasi</title>

<style>
body{
    background: #eee;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
    width:520px;
    margin:30px auto;
    border:3px solid #333;
    background: #eee;
}

.top{
    border-bottom:3px solid #333;
    padding:10px;
}

.logout{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}

.judul{
    font-weight:bold;
    padding:15px;
    font-size:18px;
}

.table-box{
    padding:0 20px 20px 20px;
}

table{
    width:100%;
    border-collapse:separate;
    border-spacing:0 12px;
}

td{
    font-size:14px;
}

.label{
    width:140px;
    font-weight:bold;
}

.titik{
    width:10px;
}

.inputbox{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:5px 10px;
    display:inline-block;
    min-width:170px;
}

textarea{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:8px;
    width:100%;
    resize:none;
}

select{
    border:2px solid #555;
    background:#eee;
    border-radius:6px;
    padding:5px;
}

.footer{
    text-align:right;
    padding:10px 20px 15px;
}

.back{
    padding:5px 14px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}

button:hover {
  background:#ddd;
}
</style>

</head>

<body>

<div class="wrapper">

<div class="top">
    <button class="logout" onclick="window.location='logout.php'">Logout</button>
</div>

<div class="judul">DETAIL ASPIRASI</div>

<div class="table-box">
<form method="POST">
<table>

<tr>
<td class="label">Kategori</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['ket_kategori'] ?></div></td>
</tr>

<tr>
<td class="label">Lokasi</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['lokasi'] ?></div></td>
</tr>

<tr>
<td class="label">Keterangan</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['ket'] ?></div></td>
</tr>

<tr>
<td class="label">Status</td>
<td class="titik">:</td>
<td>
<select name="status">
<option value="Menunggu" <?= strtolower(trim($data['status']))=='menunggu'?'selected':'' ?>>Menunggu</option>
<option value="Proses" <?= strtolower(trim($data['status']))=='proses'?'selected':'' ?>>Proses</option>
<option value="Selesai" <?= strtolower(trim($data['status']))=='selesai'?'selected':'' ?>>Selesai</option>
</select>
</td>
</tr>

<tr>
<td class="label">Feedback</td>
<td class="titik">:</td>
<td>
<textarea name="feedback" rows="4"><?= $data['feedback'] ?></textarea>
</td>
</tr>

<tr>
<td class="label">Tanggal</td>
<td class="titik">:</td>
<td><div class="inputbox"><?= $data['tanggal'] ?></div></td>
</tr>

</table>
</div>

<div class="footer">
<button type="submit" name="update" class="back">Simpan</button>
<button type="button" class="back" onclick="history.back()">Kembali</button>
</div>

</form>
</div>

</body>
</html>