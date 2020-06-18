<!DOCTYPE html>
<html>
<head>
	<title> Sistem Informasi A.M.P </title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-widt, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Anda telah login</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>

	<div class="login">
	<?php
	include "koneksi.php";
	session_start();
	if (!isset($_SESSION['username'])){
		header("location:login.php");
	} else {
		$username = $_SESSION['username'];
	}
	?>
	</div>
	
<title>Halaman Sukses Login</title>
<div class="selamat">
   <b> Selamat Datang Ke Atzuan Music Player ,<b><?php echo $username;?></b> <a href="logout.php"><i>(Logout)</i></a></b>
</div>

	<div class="utama"> <!-- ini area utama-->
		
		<div class="kepala">
			
			<?php include "header.php"; ?>

		</div>
		<div class="menu">
			
			<?php include "menu.php"; ?>

		</div>
		<div class="isi">

			<?php 
					if (isset($_GET['halaman']))
					{
						include $_GET['halaman'];
					} else {
						include	"utama.php";
					}
			 ?>

		</div>
		<div class="footer">
			
			<?php include "footer.php"; ?>

		</div>

	</div> <!-- area utama sampai sini -->

</body>
</html>
