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
  <link rel="stylesheet" type="text/css" href="CSS/nav_bar.css">
  <!-- <link rel="stylesheet" type="text/css" href="CSS/nav_bar_copy.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/ori.css"> -->
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> Syarat Ketentuan :: Pendaftaran </title>
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
      padding: 0px 40px 30px 40px;
      margin: 105px 0 82px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }

    .bt{
      background-color: #243545;
      border-radius: 2px;
      border-style: none;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 18px;
      font-weight: 500;
      list-style: none;
      outline: none;
      height: 40px;
      width: 150px;
      margin: 10px 20px;
      padding: 10px 0px 0px;
      left: 1.2%;
      position: relative;
      text-align: center;
      text-decoration: none;
      transition: color 100ms;
      vertical-align: baseline;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    .bt:hover,
    .bt:focus {
      opacity: .75;
    }
    .b1{
      display: inline-block;
      top: 18px;
      left: 1.2%;
      position: relative;
    }
          /* -------------------------FORM dalam------------------------------- */
          .center {
            padding: 50px 50px;
            background: #fff;
            border-radius: 10px;
            margin: 50px 0 -20px 60px;
            width: 700px;
            height: 200px;
          }
          h1 {
            margin: -50px 0 30px;
          }
          .cekbox{
            font-size: 20px;
          }
          .center .inputbox input {
            border: 2px solid #000;
            outline: none;
            background: none;
            padding: 10px 0px 10px 0px;
            border-radius: 10px;
            font-size: 1.2em;
            float: right;
          }
          .center .inputbox [type="submit"] {
            width: 160px;
            background: #175b52;
            color: #fff;
            border: #fff;
            cursor: pointer;
          }
          .center .inputbox:hover [type="submit"] {
            opacity: 0.75;
          }

          /* -------------------------FORM dalam------------------------------- */
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
        <li> <a href="beranda.php" style="text-decoration:none; color:inherit;"><i class="fa fa-home"></i> Beranda </a></li>
          <li class="active"> <a href="pend_berkas.php" style="text-decoration:none; color:inherit;"><i class="fa fa-book" aria-hidden="true"></i> Pendaftaran </a></li>
          <li> <a href="wa_awal.php" style="text-decoration:none; color:inherit;"><i class="fa fa-briefcase"></i> Wawancara </a></li>
          <li> <a href="hasil.php" style="text-decoration:none; color:inherit;"><i class="fa fa-bullhorn"></i> Hasil </a></li>
          <li> <a href="t_kami.php" style="text-decoration:none; color:inherit;"><i class="fa fa-info"></i> Tentang Kami </a></li>
          
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
    <a class="bt" href="#">Berkas</a> 
    <a class="b1"><i class="fa fa-angle-right fa-4x" style="color: #243545" aria-hidden="true"></i></a> 
    <a class="bt" href="#">Data Diri</a>
    <a class="b1"><i class="fa fa-angle-right fa-4x" style="color: #243545" aria-hidden="true"></i></a> 
    <a class="bt" href="#">Syarat Ketentuan</a>
    <a class="b1"><i class="fa fa-angle-right fa-4x" style="color: #243545" aria-hidden="true"></i></a> 
    <hr>

    <div class="center">
      <h1>Silahkan Dilengkapi</h1>
      <form action="" method="post">
        <div class="cekbox">
          <p><input type='checkbox' name='' value='' required /> Saya Setuju dengan peraturan yang ada disini  </p>
          <p><input type='checkbox' name='' value='' required /> Saya bersedia menjadi warga Sekull yang menjunjung tinggi kewarganegaraan </p>
          <p><input type='checkbox' name='' value='' required /> Saya bersedia menjaga nama baik Sekull </p>
        </div>
        <div class="inputbox">
          <input type="submit" value="submit" name="submit" >
        </div>
      </form>
    </div>
  </div> 


  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>

<?php
include "0-koneksi.php";
	if(isset($_POST['submit'])){
    echo '<script>alert("Terimakasih Telah Mengisi Pertanyaan"); document.location="pend_selesai.php";</script>';
	}
?>