<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['Nama_lengkap']='';
$_SESSION['username']='';
$_SESSION['NIK']='';
$_SESSION['tanggal_lahir']='';

unset($_SESSION['id_user']);
unset($_SESSION['Nama_lengkap']);
unset($_SESSION['username']);
unset($_SESSION['NIK']);
unset($_SESSION['tanggal_lahir']);

session_unset();
session_destroy();
header('Location:index.php');

?>