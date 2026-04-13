<?php
// CEK STATUS POPUP
$status = "";
if(isset($_GET['status'])){
    $status = $_GET['status'];
}

?>

<?php
$sql = " SELECT * FROM `tb_kategori`";
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");
$query = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Buat Aspirasi</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#eee;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
  width:600px;
  border:3px solid #333;
  background:#eee;
  padding:20px 50px 30px;
}

.title{
  font-size:26px;
  font-weight:bold;
  margin-bottom:20px;
  color:#333;
}

.row{
  display:flex;
  align-items:center;
  margin:8px 0;
  font-size:20px;
  font-weight:bold;
  color:#333;
}

.label{
  width:150px;
}

.colon{
  width:30px;
}

input, select{
  flex:1;
  height:30px;
  border:2px solid #333;
  border-radius:6px;
  padding:3px 8px;
  font-size:16px;
  outline:none;
}

textarea{
  width:100%;
  height:120px;
  border:3px solid #333;
  border-radius:20px;
  margin-top:10px;
  padding:10px;
  font-size:16px;
  resize:none;
  outline:none;
}

.btn-area{
  display:flex;
  justify-content:space-around;
  margin-top:20px;
}

.btn-btn:hover {
  background: #ddd;

}

button{
  padding:10px 35px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:12px;
  background:#f5f5f5;
  cursor:pointer;
}

button:hover {
  background:#ddd;
}

/* ===== POPUP ===== */
.popup-overlay{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.6);
  display:flex;
  justify-content:center;
  align-items:center;
  z-index:999;
}

.popup-box{
  background:#fff;
  padding:40px;
  border-radius:15px;
  text-align:center;
  width:350px;
  box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.success{
  color:green;
}

.error{
  color:red;
}

.close-btn{
  display:inline-block;
  margin-top:20px;
  padding:10px 30px;
  background:#eee;
  color:#000;
  text-decoration:none;
  border-radius:8px;
  font-weight:bold;
  box-shadow:0 0 0 2px #000 inset;
}
</style>
</head>

<body>

<?php if($status != ""): ?>
<div class="popup-overlay">
  <div class="popup-box">
    <?php if($status == "success"): ?>
        <h2 class="success">Aspirasi Berhasil Dikirim ✔</h2>
    <?php else: ?>
        <h2 class="error">Aspirasi Gagal Dikirim ✖</h2>
    <?php endif; ?>
    <a href="input-aspirasi.php" class="close-btn">OK</a>
  </div>
</div>
<?php endif; ?>

<form action="proses_input.php" method="post">
<div class="wrapper">

  <div class="title">BUAT ASPIRASI</div>

  <div class="row">
    <div class="label">Nis</div>
    <div class="colon">:</div>
    <input type="text" name="nis" placeholder="Masukan Nis" required>
  </div>

  <div class="row">
    <div class="label">Kategori</div>
    <div class="colon">:</div>
    <select name="kategori" required>
    <option value="">Pilih kategori</option>
    <option value="1">Fasilitas</option>
    <option value="2">Kebersihan</option>
    <option value="3">Keamanan</option>
  </select>
  </div>

  <div class="row">
    <div class="label">Lokasi</div>
    <div class="colon">:</div>
    <input type="text" name="lokasi" placeholder="Masukan Lokasi" required>
  </div>

  <div class="row">
    <div class="label">Tanggal</div>
    <div class="colon">:</div>
    <input type="date" name="tanggal" required>
  </div>

  <div class="row" style="align-items:flex-start">
    <div class="label">Keterangan</div>
    <div class="colon">:</div>
  </div>

  <textarea name="keterangan" placeholder="Masukan Keterangan" required></textarea>

  <div class="btn-area">
    <button type="submit">Kirim</button>
    <a href="dashboard-siswa.php">
      <button type="button">Kembali</button>
    </a>
  </div>

</div>
</form>

</body>
</html>