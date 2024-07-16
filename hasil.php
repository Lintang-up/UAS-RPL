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
  <link rel="stylesheet" type="text/css" href="CSS/tabel.css">

  <!-- <link rel="stylesheet" type="text/css" href="CSS/nav_bar_copy.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="CSS/ori.css"> -->
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> Hasil :: Pendaftaran </title>
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
    .photo{
      float: right;
      margin: 20px 0px;
    }
    .photo img{
      width : 152px;
      height: 250px;
    }
    .form_class {
      /* height: 200px; */
      width: 900px;
      padding: 30px 40px 40px 40px;
      margin: 105px 0 40px 190px;
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
      width: 650px;
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
    /* -------------------------------------Form Diterima------------------------------------------- */
    .form_terima {
      width: 982px;
      margin: 0px 0 80px 190px;
      border-radius: 8px;
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
      background-color: white;
    }
    .form_terima h1 {
      text-align: center;
      padding: 10px 0 10px 0;
      border-radius: 8px;
      font-size: 40px;
      font-family: 'system-ui';

    }
    /* -------------------------------------Form Diterima------------------------------------------- */
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
          <li class="active"> <a href="#" style="text-decoration:none; color:inherit;"><i class="fa fa-bullhorn"></i> Hasil </a></li>
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
    <h1> Data Siswa Pendaftar</h1> <br>
			<?php 
      include "0-koneksi.php";
      $query = mysqli_query($kon, "SELECT * FROM dokumen WHERE ID_Dokumen='$id_user'");
			while ($data = mysqli_fetch_array($query)) {    ?>
      <div class="photo">
				<img src="<?php echo "files/".$data['PasFoto']; ?>">
      </div>
      <?php } ?>

    <table class="table1">  
      <?php
        include "0-koneksi.php";
        $query = mysqli_query($kon, "SELECT * FROM data_siswa WHERE ID_DS='$id_user'");
        while ($data = mysqli_fetch_array($query)) {
      ?>          
      <tbody>
        <tr>
          <td>Akun</td>
          <td> <?php echo $username;?> </td>
        </tr>
        <tr>
          <td>Nama Siswa</td>
          <td> <?php echo $data['Nama']?> </td>
        <tr>
          <td>NIK</td>
          <td> <?php echo $data['NIK']?> </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td> <?php echo $data['JenisKelamin']?> </td>
        </tr>
        <tr>
          <td>Agama</td>
          <td> <?php echo $data['Agama']?> </td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td> <?php echo $data['TempatLahir']?>, <?php echo $data['TanggalLahir']?> </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> <?php echo $data['Alamat']?> </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td> <?php echo $data['Telepon']?> </td>
          <?php } ?>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="form_terima">
    <?php
      include "0-koneksi.php";
      $query = mysqli_query($kon, "SELECT * FROM pengumuman WHERE ID_Pengumuman='$id_user'");
      while ($data = mysqli_fetch_array($query)) {    ?>
    <h1> <?php echo $data['Pengumuman']?> </h1>
    <?php } ?>
  </div>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>

