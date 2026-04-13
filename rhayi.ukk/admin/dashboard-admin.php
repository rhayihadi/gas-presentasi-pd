<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Menu Admin</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#ffffff;
  font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
  width: 100vw;
  height: 100vh;
  border: 3px solid #333;
  background: #eee;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

.header{
  padding:12px;
  border-bottom:3px solid #333;
}

.logout{
  padding: 8px 20px;
  font-size: 20px;
  font-weight: bold;
  border: 3px solid #333;
  border-radius: 8px;
  background: #f5f5f5;
  cursor: pointer;
  text-decoration: none;
  color: black;
  display: inline-block;
}

.menu-area{
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 30px;
  padding: 20px;
}

.tampilan-menu {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
  justify-content: center;
}

.tampilan-menu a{
  width: 40%;
}

.btn{
  display: grid;
  padding:12px 26px;
  font-size:20px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:14px;
  background:#f5f5f5;
  cursor:pointer;
  transition:.2s;
  width: 100%;         
  text-align: center;
}

.btn:hover{
  background:#ddd;
}
.logout:hover{
  background:red;
}

a{
  text-decoration:none;
}
</style>
</head>

<body>

<div class="wrapper">

  <div class="header">
    <a href="logout.php">
      <button class="logout">LOGOUT</button>
    </a>
  </div>

  <div class="menu-area">
    <div class="tampilan-menu">
  <a href="data-Pengaduan.php">
    <button class="btn">Data Pengaduan</button>
  </a>
  <a href="data-siswa.php">
    <button class="btn">Data Akun Siswa</button>
  </a>
  <a href="tambah-siswa.php">
    <button class="btn">Daftar Akun</button>
  </a>
  <!-- Tambahan Histori -->
  <a href="histori-aspirasi.php">
    <button class="btn">Histori Pengaduan</button>
  </a>
</div>
  </div>

</div>

</body>
</html>