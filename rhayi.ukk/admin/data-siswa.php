<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");
$query = mysqli_query($koneksi, "SELECT * FROM tb_user");
$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Akun</title>

<style>
body{
    background:#eee;
    font-family: Arial, Helvetica, sans-serif;
}

/* WRAPPER */
.wrapper{
    width:650px;
    margin:30px auto;
    border:3px solid #444;
    background:#ddd;
}

/* HEADER */
.top{
    border-bottom:3px solid #444;
    padding:10px;
}

.logout-btn{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
}

/* JUDUL */
.judul{
    font-weight:bold;
    padding:15px;
    text-align:center;
}

/* TABLE BOX */
.table-box{
    padding:10px 15px;
}

/* TABEL */
table{
    width:100%;
    border-collapse:collapse;
    background:#eee;
}

th, td{
    border:2px solid #444;
    padding:6px;
    font-size:14px;
    text-align:center;
}

th{
    background:#ddd;
}

tr:hover{
    background:#dcdcdc;
}

/* BUTTON AKSI */
td button{
    padding:3px 10px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    cursor:pointer;
    margin:2px;
}

/* FOOTER */
.footer{
    text-align:center;
    padding:15px;
}

.back{
    padding:5px 15px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
}

a{ text-decoration:none; }

.logout-btn:hover {
  background: red;
}

button:hover {
  background:#ddd;
}

</style>
</head>
<body>

<div class="wrapper">

<div class="top">
    <a href="logout.php">
        <button class="logout-btn">Logout</button>
    </a>
</div>

<div class="judul">HALAMAN DATA AKUN SISWA</div>

<div class="table-box">

<table>
<tr>
<th>No</th>
<th>Nis</th>
<th>Nama</th>
<th>Kelas</th>
<th>Aksi</th>
</tr>

<?php while ($data = mysqli_fetch_assoc($query)) { ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $data['nis'] ?></td>
<td><?= $data['username'] ?></td>
<td><?= $data['kelas'] ?></td>
<td>
<a href="edit-siswa.php?id=<?= $data['id'] ?>">
<button style="background-color :springgreen;">Edit</button>
</a>

<a href="proses-hapus-siswa.php?id=<?= $data['id'] ?>" onclick="return confirm('hapus')">
<button style="background-color: crimson;">Hapus</button>
</a>
</td>
</tr>
<?php } ?>

</table>

</div>

<div class="footer">
<a href="dashboard-admin.php">
<button class="back">Kembali</button>
</a>
</div>

</div>

</body>
</html>