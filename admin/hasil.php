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
    .kembali{
      margin: 80px 0 -65px 195px;
    }
    .kembali a{
      text-decoration: none;
      padding: 7px 15px 7px 15px;
      border-radius: 8px;
      color: white;
      background-color: #329680;
      font-family: "Lexend Deca", sans-serif;
    }
    .kembali a:hover{
      background-color: #175b52;
    }
    /* --------------------------------------KOTAKAN PUTIH--------------------------------------- */
    .form_class {
      width: 900px;
      padding: 0px 40px 20px 40px;
      margin: 80px 0 80px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .syst{
      font-size: 40px;
      font-weight: bold;
      margin: 0 0 -5px;
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
              <li> <a href="da_lihat.php"> Lihat Akun </a></li>
              <li> <a href="masuk_logout.php"> Logout </a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="kembali">
    <a href="beranda.php">
      <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  Kembali
    </a>
  </div>
  
  <div class="form_class">
    <p class="syst">List Siswa Diterima</p><hr/>
    <table align="center" class="table1">
      <thead>
        <tr>
          <td>NO</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>NoHP</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        include '0-koneksi.php';
        $tampil = mysqli_query($kon, "SELECT * FROM `data_siswa`, `pengumuman` where ID_Pengumuman=ID_DS and pengumuman='Diterima'");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){ ?>
        <tr>
          <td align="center"><?= $no++;              ?></td>
          <td align="left">  <?= $hasil['Nama'];     ?></td>
          <td align="right"> <?= $hasil['Alamat'];   ?></td>
          <td align="right"> <?= $hasil['Telepon'];  ?></td>
          <td>
            <a href="hasil_hapus.php?ID_DS=<?php echo $hasil['ID_DS']; ?>">Hapus</a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>