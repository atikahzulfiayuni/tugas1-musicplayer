<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<body>
<link rel="stylesheet" href="layout/assets/css/main.css">
<div align='center'>
  <div class="we">
    <img src="layout/assets/images/login.png" alt="">
  </div>
  <form class="login" action="proses_login.php" method="post">
  <h1>Login ke Atzuan Music Player </h1>
 
  <table >
  <tbody class="tabel">
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Login" type="submit">  <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar Disini</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</body>