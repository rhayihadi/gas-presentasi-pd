<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Login</title>
  <style>
    body{
      margin:0;
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background:#ddd;
      font-family: Arial, Helvetica, sans-serif;
    }

    .box{
      border:3px solid #333;
      background-color: #ddd;
      padding:30px 50px;
      border-radius:4px;
      background:#ddd;
    }

    .row{
      display:flex;
      align-items:center;
      margin:15px 0;
      font-weight:bold;
      font-size:20px;
      color:#333;
    }

    label{
      width:140px;
    }

    input{
      width:200px;
      height:28px;
      border:2px solid #333;
      border-radius:6px;
      padding:2px 8px;
      font-size:16px;
      outline:none;
    }

    .btn-wrap{
      text-align:center;
      margin-top:20px;
    }

    button{
      padding:10px 40px;
      font-size:22px;
      font-weight:bold;
      border:3px solid ;
      border-radius:10px;
      background:#f5f5f5;
      cursor:pointer;
      transition:.15s;
    }

    button:hover{
      background: lightgreen;
      transform:scale(1.05);
    }
  </style>
</head>
<body>
  <form action="proses_login.php" method="post">
  <div class="box">
    <div class="row">
      <label>Username :</label>
      <input type="text" name="username" required>
    </div>

    <div class="row">
      <label>Password :</label>
      <input type="password" name="password" required>
    </div>

    <div class="btn-wrap">
      <button>LOGIN</button>
    </div>
  </div>
  </form>
</body>
</html>
