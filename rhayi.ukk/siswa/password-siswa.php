<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ganti Password</title>

<style>
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center; /* tengah horizontal */
  align-items:center;     /* tengah vertikal */
  background: #eee;
  font-family: Arial, Helvetica, sans-serif;
}

/* KOTAK LUAR */
.wrapper{
    width:500px;
    margin:40px auto;
    border:3px solid #444;
    background: #eee;
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
    cursor:pointer;
}

/* JUDUL */
.judul{
    font-weight:bold;
    padding:15px;
}

/* FORM */
.form-box{
    padding:10px 20px 25px 20px;
}

.form-group{
    display:flex;
    align-items:center;
    margin:12px 0;
}

.label{
    width:180px;
}

.titik{
    width:15px;
}

.input input{
    width:100%;
    border:2px solid #333;
    border-radius:6px;
    padding:5px;
}

/* TOMBOL */
.btn-area{
    text-align:center;
    margin-top:25px;
}

.btn{
    padding:6px 18px;
    margin:5px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background: #ccc;

}
.logout-btn:hover{
    background: red;
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

<div class="judul">GANTI PASSWORD</div>

<form action="proses-password.php" method="POST" class="form-box">

<div class="form-group">
<div class="label">Password Lama</div>
<div class="titik">:</div>
<div class="input">
<input type="password" name="password_lama" required>
</div>
</div>

<div class="form-group">
<div class="label">Password Baru</div>
<div class="titik">:</div>
<div class="input">
<input type="password" name="password_baru" required>
</div>
</div>

<div class="form-group">
<div class="label">Konfirmasi Password</div>
<div class="titik">:</div>
<div class="input">
<input type="password" name="konfirmasi_password" required>
</div>
</div>

<div class="btn-area">
<button type="submit" name="ganti" class="btn">Simpan</button>
<a href="dashboard-siswa.php"><button type="button" class="btn">Kembali</button></a>
</div>

</form>

</div>

</body>
</html>