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
  <!-- <link rel="stylesheet" type="text/css" href="CSS/nav_bar_copy.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/ori.css"> -->
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> Dashboard - Sekull </title>
  <style>
    .logo{
      width: 80px;
      height: 80px;
      position: absolute;
      left: 2%;
      top: 2.1%;
      border-radius: 50%;
    }
    .sayHI {
      text-align: right;
      margin: 90px 300px -100px;
    }
    /* --------------------------------------KOTAKAN PUTIH--------------------------------------- */
    .form_class {
      width: 700px;
      padding: 0px 40px 0px 40px;
      margin: 105px 0 90px 290px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .syst{
      font-size: 40px;
      font-weight: bold;
      /* padding: 0 0 -120px; */
      margin: 0 0 -5px;
    }
    .bt{
      background-color: #243545;
      border-radius: 8px;
      border-style: none;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 24px;
      font-weight: 500;
      list-style: none;
      outline: none;
      height: 60px;
      width: 200px;
      margin: 60px 15px;
      padding: 20px 0px 45px;
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
      /* font-family: 'system-ui'; */
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

  <div class="sayHI">
    <p>HI!! <?php echo $nama; ?> 👋</p>
  </div>

  <div class="form_class">
    <p class="syst">System Admin</p><hr/>
    <table align="center">
      <tr>
        <td><a class="bt" href="da_list.php">List Data Siswa</a></td>
        <td><a class="bt" href="hasil.php"> Hasil Akhir</a></td>
      </tr>
    </table>
  </div>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>