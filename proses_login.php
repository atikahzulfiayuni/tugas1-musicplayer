<link rel="stylesheet" href="layout/assets/css/main.css">
<div align='center'>
  <div class="we">
    <img src="layout/assets/images/music.png" alt="">
  </div>

<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Kembali & Daftar </a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password Salah! <a href='login.php'>Ulangi</a></div>";
       header('location:menu.php');
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>