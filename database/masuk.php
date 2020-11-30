<?php
login();
function login()
{
  require 'db_login.php';
  session_start();
  $user = ($_POST['user']);
  $password = md5($_POST['password']);
  $query = "SELECT * FROM user WHERE username='$user' AND password ='$password'";
  $result = $mysqli->query($query);
  $cek = mysqli_num_rows($result);
  if ($cek < 1) {
    echo "<script>window.alert('username atau password salah'); window.location='../index.php';</script>";
  } else {
    $tes = mysqli_fetch_array($result);
    $level = $tes['level'];
    if ($level == '1') {
      $_SESSION['user'] = $user;
      echo "<script>window.alert('Selamat Datang Admin'); window.location='../admin/dashboard.php?user=$user'</script>";
    }
  }
}
