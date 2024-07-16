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
        
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/nav_bar.css">
  <link rel="stylesheet" type="text/css" href="CSS/tabel.css">

  <!-- <link rel="stylesheet" type="text/css" href="CSS/nav_bar_copy.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/ori.css"> -->
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> upload berkas </title>
  <style>
    .logo{
      width: 80px;
      height: 80px;
      position: absolute;
      left: 2%;
      top: 2.1%;
      border-radius: 50%;
    }
    /* --------------------------------------KOTAKAN PUTIH--------------------------------------- */
    .form_class {
      /* height: 200px; */
      width: 900px;
      padding: 30px 40px 40px 40px;
      margin: 105px 0 80px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .form_class  h1{
      margin: -10px 0 0px;
      text-align: left;
      font-size: 30px;
    }
    .table1 {
      width: 900px;
      font-family: sans-serif;
      color: #232323;
      border-collapse: collapse;
    }
    .table1, th, td {
      text-align: left;
      border: 1px solid #999;
      padding: 8px 20px;
    }
    .table1 tr:hover {
      background-color: #f5f5f5;
    }
    .table1 tr:nth-child(even) {
      background-color: #f7f7f7;
    }
    /* -------------------------------------KOTAKAN PUTIH------------------------------------------- */
    footer {
      height: 60px;
      background-color: #FCFDF2;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
    }
    footer > p {
      text-align: center;
      font-family: "Lexend Deca", sans-serif;
      letter-spacing: 3px;
      color:black;
      font-weight: bold;
    }
  </style>
</head>

<body>
<div class="navbar">
    <a class ="alogo" href="beranda.php"> <img class= "logo" src="gambar/logo.jpg"> </a>
    <div class="container">
      <nav class="menu">
        <ul class="main-menu">       
          <li class="with-submenu">
            <i class="fa fa-user-circle" aria-hidden="true" aria-hidden="true"></i> 
              <?php echo $uname; ?> 
            <i class="fa fa-caret-down"></i>
            <ul class="submenu">
              <li> <a href="akun.php"> Lihat Akun </a></li>
              <li> <a href="masuk_logout.php"> Logout </a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="form_class">
    <?php
    include "0-koneksi.php";
    $query = mysqli_query($kon, "SELECT * FROM admin WHERE id_admin='$id_admin'");
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <h1> Data <?php echo $data['uname']?></h1> <br>
    <table class="table1">            
      <tbody>
        <tr>
          <td>Akun</td>
          <td> <?php echo $data['uname']?> </td>
        </tr>
        <tr>
          <td>Nama Admin</td>
          <td> <?php echo $data['nama']?> </td>
        <tr>
          <td>Jabatan Admin</td>
          <td> <?php echo $data['jabatan']?> </td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td> <?php echo $data['noTlp']?> </td>
        </tr>
      </tbody>
      <?php }?>
    </table>
    <a href="akun_update.php">
      <input type="submit" value="ubah">
    </a>
  </div>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>

