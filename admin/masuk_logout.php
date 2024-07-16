<?php
session_start();

$_SESSION['id_admin']='';
$_SESSION['uname']='';
$_SESSION['nama']='';
$_SESSION['jabatan']='';
$_SESSION['noTlp']='';

unset($_SESSION['id_admin']);
unset($_SESSION['uname']);
unset($_SESSION['nama']);
unset($_SESSION['jabatan']);
unset($_SESSION['noTlp']);

session_unset();
session_destroy();
header('Location:index.php');

?>