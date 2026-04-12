<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_12rpl2_rhayi");

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Siswa</title>

<style>
body{
    background:#eee;
    font-family: Arial, Helvetica, sans-serif;
}

/* WRAPPER */
.wrapper{
    width:500px;
    margin:40px auto;
    border:3px solid #444;
    background:#ddd;
    padding:20px 30px;
    border-radius:10px;
}

/* HEADER */
.top{
    border-bottom:3px solid #444;
    padding:10px;
    margin-bottom:20px;
    text-align:center;
    font-weight:bold;
    font-size:18px;
}

/* FORM BOX */
.form-box{
    padding:10px 0;
}

/* LABEL */
label{
    display:block;
    font-weight:bold;
    margin-bottom:5px;
}

/* INPUT */
input[type="text"], input[type="password"]{
    width:100%;
    padding:8px 10px;
    margin-bottom:12px;
    border-radius:6px;
    border:2px solid #444;
    background:#eee;
    box-sizing:border-box;
}

/* BUTTONS */
button{
    padding:6px 15px;
    border:2px solid #333;
    border-radius:6px;
    background:#eee;
    cursor:pointer;
    font-weight:bold;
    margin-top:10px;
    margin-right:5px;
}

button:hover{
    background:#ccc;
}

/* FOOTER */
.footer{
    text-align:center;
    padding-top:15px;
}

a{
    text-decoration:none;
}
</style>

</head>
<body>

<div class="wrapper">

    <div class="top">EDIT DATA SISWA</div>

    <div class="form-box">
    <form action="proses-edit-siswa.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>NIS</label>
        <input type="text" name="nis" value="<?= $data['nis']; ?>" required>

        <label>Username</label>
        <input type="text" name="username" value="<?= $data['username']; ?>" required>

        <label>Password</label>
        <input type="text" name="password" value="<?= $data['password']; ?>" required>

        <label>Kelas</label>
        <input type="text" name="kelas" value="<?= $data['kelas']; ?>" required>

        <button type="submit">UPDATE</button>
        <a href="data-siswa.php"><button type="button">BATAL</button></a>
    </form>
    </div>

</div>

</body>
</html>