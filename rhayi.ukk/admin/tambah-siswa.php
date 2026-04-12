<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Akun</title>

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
  width:500px;
  border:4px solid #333;
  background:#eaeaea;
  padding:40px 50px;
  box-sizing:border-box;
}

h2{
  text-align:center;
  font-size:28px;
  margin-bottom:30px;
  letter-spacing:1px;
}

form{
  display:flex;
  flex-direction:column;
}

label{
  font-weight:bold;
  margin-top:15px;
  margin-bottom:5px;
}

input, select{
  padding:8px 10px;
  font-size:16px;
  border:3px solid #333;
  border-radius:8px;
  outline:none;
}

.button-group{
  display:flex;
  justify-content:space-between;
  margin-top:40px;
}

.btn{
  padding:8px 18px;
  font-size:16px;
  font-weight:bold;
  border:3px solid #333;
  border-radius:10px;
  background:#f5f5f5;
  cursor:pointer;
  transition:0.2s;
}

.btn:hover{
  background:#ddd;
  transform:scale(1.05);
}

a{
  text-decoration:none;
}
</style>
</head>

<body>

<div class="wrapper">
  <h2>DAFTAR AKUN</h2>

  <form action="proses-tambah-akun-siswa.php" method="POST">
      
      <label>Nama</label>
      <input type="text" name="nama" required>

      <label>NIS</label>
      <input type="text" name="nis" required>

      <label>Kelas</label> 
      <select name="kelas" required>
          <option value="PILIH KELAS">PILIH KELAS</option>
          <option value="12 RPL 1">12 RPL 1</option>
          <option value="12 RPL 2">12 RPL 2</option>
          <option value="12 TKR 1">12 TKR 1</option>
          <option value="12 TKR 2">12 TKR 2</option>
      </select>

      <label>Password</label>
      <input type="password" name="password" required>

      <div class="button-group">
          <a href="dashboard-admin.php">
            <button type="button" class="btn">KEMBALI</button>
          </a>

          <button type="submit" name="simpan" class="btn">
            BUAT AKUN
          </button>
      </div>

  </form>
</div>

</body>
</html>