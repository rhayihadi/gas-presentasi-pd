<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Histori Aspirasi</title>

<style>
body{
    background:#eee;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
    width:750px;
    margin:30px auto;
    border:3px solid #444;
    background:#ddd;
    box-sizing:border-box;
}

/* BAR ATAS */
.top-bar{
    border-bottom:3px solid #444;
    padding:10px;
}

/* BUTTON LOGOUT */
.logout-btn{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}

/* ISI KONTEN */
.content{
    padding:20px;
}

.judul{
    font-weight:bold;
    font-size:18px;
    text-align:center;
    margin-bottom:15px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:#eee;
}

th, td{
    border:2px solid #444;
    padding:8px;
    text-align:center;
    font-size:14px;
}

th{ background:#ddd; }

tbody tr:hover{ background:#dcdcdc; }

.footer{
    text-align:center;
    margin-top:15px;
}

.back-btn{
    padding:5px 15px;
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

<!-- BAR LOGOUT ATAS -->
<div class="top-bar">
    <a href="logout.php">
        <button class="logout-btn">Logout</button>
    </a>
</div>

<!-- KONTEN -->
<div class="content">

<div class="judul">HISTORI ASPIRASI (SELESAI)</div>

<table>
<tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Lokasi</th>
    <th>Status</th>
    <th>Tanggal</th>
    <th>Detail</th>
</tr>

<?php
$query = mysqli_query($koneksi,"
SELECT a.*, k.ket_kategori
FROM tb_aspirasi a
LEFT JOIN tb_kategori k ON a.id_kategori = k.id_kategori
WHERE a.status='Selesai'
ORDER BY a.tanggal DESC
");

$no=1;
while($data=mysqli_fetch_assoc($query)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['ket_kategori']; ?></td>
    <td><?= $data['lokasi']; ?></td>
    <td><?= $data['status']; ?></td>
    <td><?= $data['tanggal']; ?></td>
    <td>
        <a href="detail-pengaduan.php?id=<?= $data['id_pelaporan']; ?>">
            <button>Detail</button>
        </a>
    </td>
</tr>
<?php } ?>

</table>

<div class="footer">
<a href="dashboard-admin.php">
<button class="back-btn">Kembali</button>
</a>
</div>

</div>
</div>
</body>
</html>