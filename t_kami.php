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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/nav_bar.css">
  <link rel="stylesheet" type="text/css" href="CSS/soc.css">
  <!-- <link rel="stylesheet" type="text/css" href="CSS/tabel.css"> -->

  <!-- <link rel="stylesheet" type="text/css" href="CSS/nav_bar_copy.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/ori.css"> -->
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> About US :: Sekull </title>
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
      width: 500px;
      padding: 30px 40px 40px 40px;
      margin: 105px 0 135px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .form_class h1{
      margin: -80px 0 40px -350px;
      text-align: center;
      font-size: 30px;
    }
    .social {
      /* height: 50px; */
      width: 200px;
      padding: 30px 40px 30px 40px;
      margin: 10px 0 85px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    h1{
      margin: -100px 0 0 200px;
    }
    /* -------------------------------------KOTAKAN PUTIH------------------------------------------- */
    .logo_ttk{
      margin: -395px 150px 0px 0;
      float: right;
    }
    .log{
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
      border-radius: 5%;
      weight: 250px;
      height: 250px;
    }
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
          <li> <a href="beranda.php" style="text-decoration:none; color:inherit;"><i class="fa fa-home"></i> Beranda </a></li>
          <li> <a href="pend_berkas.php" style="text-decoration:none; color:inherit;"><i class="fa fa-book" aria-hidden="true"></i> Pendaftaran </a></li>
          <li> <a href="wa_awal.php" style="text-decoration:none; color:inherit;"><i class="fa fa-briefcase"></i> Wawancara </a></li>
          <li> <a href="hasil.php" style="text-decoration:none; color:inherit;"><i class="fa fa-bullhorn"></i> Hasil </a></li>
          <li class="active"> <a href="t_kami.php" style="text-decoration:none; color:inherit;"><i class="fa fa-info"></i> Tentang Kami </a></li>
          
          <li class="with-submenu">
            <i class="fa fa-user-circle" aria-hidden="true" aria-hidden="true"></i> 
              <?php echo $username; ?> 
            <i class="fa fa-caret-down"></i>
            <ul class="submenu">
              <li> <a href="da_lihat.php"> Lihat Data </a></li>
              <li> <a href="masuk_logout.php"> Logout </a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="form_class">
    <h1> Tentang Kami </h1>
    <div class="center">
      <p>Sekull merupakan system pendaftaran sekolah yang dikembangkan oleh kelompok lintang, rizal, rio atas dasar untuk memenuhi tugas akhir matakuliah RPL yang di ampu oleh bu Dwi Hartanti, M.Kom.</p>
      <p>Dialam system ini terdapat 2 aktor, yaitu siswa pendaftar dan admin. Disini siswa memiliki hak akses antara lain buat akun, upload data, isi data, jawab pertanyaan dan mengubah beberapa data. Dan disini admin bertugas untuk mengecek data siswa apakah sudah valid.</p>
    </div>
  </div>

  <div class="logo_ttk">
    <img class= "log" src="gambar/logo.jpg">
  </div>

  <h1> ContactMe </h1>
  <div class="icon">
    <a href="#"> <span>WhatsApp</span></a>
    <a href="#"> <span>Telepon</span></a>
    <a href="#"> <span>Gmail</span></a>
  </div>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>