<?php
session_start();

if (!isset($_SESSION["uname"])) {
	echo "Anda harus login dulu <br><a href='index.php'>Klik disini</a>";
	exit;
}

$id_admin      =$_SESSION["id_admin"];
$uname         =$_SESSION["uname"];
$nama          =$_SESSION["nama"];
$jabatan       =$_SESSION["jabatan"];
$noTlp         =$_SESSION["noTlp"];
?>

<?php 
include "0-koneksi.php";
$ID_DS = $_GET['ID_DS'];
mysqli_query($kon, "DELETE FROM pengumuman WHERE ID_Pengumuman='$ID_DS'");
header("location:hasil.php?pesan=hapus");
?>