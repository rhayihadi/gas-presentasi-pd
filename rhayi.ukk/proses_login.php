<?php
    session_start();
    $koneksi = mysqli_connect("localhost", "root", "", "ujikom_12rpl2_rhayi");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "SELECT * FROM  tb_user WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_assoc($query);

    if($data)
        {
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nis'] = $data['nis'];


            if($data['role'] == 'admin')
                {
                    header("Location:admin/dashboard-admin.php");
                }
                elseif($data['role'] == 'siswa')
                    {
                        header("Location:siswa/dashboard-siswa.php");
                    }
        }
        else
            {
                echo"Login Gagal";
            }
?>