<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='masuk_login.php'>Klik disini</a>";
	exit;
}

$id_user      =$_SESSION["id_user"];
$Nama_lengkap =$_SESSION["Nama_lengkap"];
$username     =$_SESSION["username"];
$NIK          =$_SESSION["NIK"];
$tanggal_lahir=$_SESSION["tanggal_lahir"];


?>
<!DOCTYPE html>
<html>
<head>


</head>
<body>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
  <h4>Halaman ini hanya dapat diakses setelah login</h4>
    <p>Nama : <?php echo $Nama_lengkap; ?></p>
    <p>Username : <?php echo $username; ?></p>
    <p>tanggal lahir : <?php echo $tanggal_lahir; ?></p>
    <a href="masuk_logout.php" class="btn btn-warning" role="button">Logout</a>
</div>

</body>
</html> 