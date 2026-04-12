<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Aspirasi</title>

<style>
body{
    background:#eee;
    font-family: Arial, Helvetica, sans-serif;
}

/* KOTAK LUAR */
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
}

/* FILTER */
.filter{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 15px 10px 15px;
}

.cari{
    border:2px solid #333;
    border-radius:6px;
    padding:5px 10px;
    width:180px;
}

#btnCari{
    padding:5px 12px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    cursor:pointer;
}

.tanggal{
    border:2px solid #333;
    border-radius:6px;
    padding:3px;
}

.table-box{
    padding:10px 15px;
    overflow-x:auto;
}

table.dataTable{
    width:100% !important;
    border-collapse:collapse !important;
    background:#eee;
}

table.dataTable th,
table.dataTable td{
    border:2px solid #444 !important;
    padding:6px !important;
    text-align:center;
}

table.dataTable thead th{
    background:#ddd !important;
}

table.dataTable tbody tr:hover{
    background:#dcdcdc;
}

.dataTables_filter{
    display:none;
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

.logout-btn:hover {
  background: red;
}

button:hover {
  background:#ddd;
}

</style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

</head>
<body>

<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");
$no = 1;

$tanggal = $_GET['tanggal'] ?? '';
$bulan   = $_GET['bulan'] ?? '';

$where = "WHERE 1=1";

/* TAMBAHAN FUNGSI FILTER STATUS */
$where .= " AND tb_aspirasi.status!='Selesai'";

if($tanggal!=''){
    $where .= " AND tb_aspirasi.tanggal='$tanggal'";
}
elseif($bulan!=''){
    $pecah = explode("-", $bulan);
    $tahun = $pecah[0];
    $bln   = $pecah[1];

    $where .= " AND MONTH(tb_aspirasi.tanggal)='$bln'
                AND YEAR(tb_aspirasi.tanggal)='$tahun'";
}

$query = mysqli_query($koneksi, "SELECT tb_aspirasi.*, tb_kategori.ket_kategori 
FROM tb_aspirasi
LEFT JOIN tb_kategori
ON tb_aspirasi.id_kategori = tb_kategori.id_kategori
$where");
?>

<div class="wrapper">

<div class="top">
    <a href="logout.php">
        <button class="logout-btn">Logout</button>
    </a>
</div>
    
<div class="judul">DATA ASPIRASI</div>

<div class="filter">
<div>
<input id="customSearch" class="cari" placeholder="Cari data...">
<button type="button" id="btnCari">Cari</button>
</div>

<div>
<form method="GET" style="text-align:right">
<input type="date" name="tanggal" class="tanggal" value="<?= $tanggal ?>" onchange="this.form.submit()"><br>
</br>
<input type="month" name="bulan" class="tanggal" value="<?= $bulan ?>" onchange="this.form.submit()">
</form>
</div>

</div>

<div class="table-box">

<table id="datatable" class="display">
<thead>
<tr>
<th>No</th>
<th>Id kategori</th>
<th>Nama kategori</th>
<th>Lokasi</th>
<th>Keterangan</th>
<th>Status</th>
<th>Tanggal</th>
<th>Detail</th>
</tr>
</thead>

<tbody>
<?php while ($data = mysqli_fetch_assoc($query)) { ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $data['id_kategori'] ?></td>
<td><?= $data['ket_kategori'] ?></td>
<td><?= $data['lokasi'] ?></td>
<td><?= $data['ket'] ?></td>
<td><?= $data['status'] ?></td>
<td><?= $data['tanggal'] ?></td>
<td>
<a href="detail-pengaduan.php?id=<?= $data['id_pelaporan'] ?>">
<button>Detail</button>
</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

</div>

<div class="footer">
<a href="dashboard-admin.php"><button class="back">Kembali</button></a>
</div>

</div>

<script>
$(document).ready(function() {

    var table = $('#datatable').DataTable({
        paging:false,
        info:false,
        lengthChange:false,
        ordering:false,
        dom:"t"
    });

    $('#btnCari').click(function(){
        table.search($('#customSearch').val()).draw();
    });

    $('#customSearch').keyup(function(e){
        if(e.key==="Enter"){
            table.search(this.value).draw();
        }
    });

});
</script>

</body>
</html>