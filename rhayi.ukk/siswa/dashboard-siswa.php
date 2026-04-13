

</body>
</html><!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body {
  margin: 0;
  background: #999;
  font-family: Arial, Helvetica, sans-serif;
}

.main-box {
  width: 100vw;
  height: 100vh;
  border: 3px solid #333;
  background: #eee;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

.top-bar {
  border-bottom: 3px solid #333;
  padding: 15px 25px;
  /*display: flex;
  justify-content: flex-end; kek kanan (logout)*/
  /*display: flex;
  flex-direction: column;
  align-items: flex-end; garis ke atas*/
}

.line {
  width: 100%;
  border-bottom: 3px solid #333;
  margin-bottom: 10px;
}

.logout-btn {
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

.logout-btn:hover {
  background: red;
  transform: scale(1.05);
}

.content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  /*flex-end (untuk ke kanan) flex-start (untuk ke kiri)  
  justify-content: flex-start (untuk ke atas) justify-content: flex-end (untuk ke bawah)*/
  gap: 30px;
  padding: 20px;
}

/*a[href="password-siswa.php"] {
  align-self: flex-end/flex-start;
}*/

.menu-row {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
  justify-content: center;
}

.menu-btn {
  padding: 12px 30px;
  font-size: 22px;
  font-weight: bold;
  border: 3px solid #333;
  border-radius: 12px;
  background: #f5f5f5;
  cursor: pointer;
  text-decoration: none;
  color: black;
  display: inline-block;
}

.menu-btn:hover {
  background: #ddd;
  transform: scale(1.05);
}
</style>
</head>
<body>

<div class="main-box">
  <div class="top-bar">
    <a href="logout.php" class="logout-btn">LOGOUT</a>
  </div>
  <div class="content">
    <div class="menu-row">
      <a href="input-aspirasi.php" class="menu-btn">Buat aspirasi</a>
      <a href="data-aspirasi.php" class="menu-btn">Data aspirasi</a>
    </div>
    <a href="password-siswa.php" class="menu-btn">Ganti password</a>
  </div>
</div>

</body>
</html>