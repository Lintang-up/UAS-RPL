<?php
$host="localhost";
$user="root";
$password="";
$db="pendaftaran_siswa";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>