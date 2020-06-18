<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Daftar</title>
<link rel="stylesheet" href="layout/assets/css/main.css">
<div align='center'>
  <div class="we">
    <img src="layout/assets/images/login.png" alt="">
  </div>
 
  
  <form action="proses_daftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Akun AYO Laundry</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="5" align="center"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login Disini !</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>