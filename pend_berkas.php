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

  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title> Upload Berkas :: Pendaftaran </title>
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
            position: relative;
            padding: 50px 50px;
            background: #fff;
            border-radius: 10px;
            /* margin: -85px 0 0 300px; */
            width: 400px;
          }
          h1 {
            margin: -50px 0 30px;
          }
          .center .inputbox {
            position: relative;
            width: 300px;
            height: 50px;
            margin-bottom: 20px;
            margin-top: -20px;
          }
          .center .inputbox input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            border: 2px solid #000;
            outline: none;
            background: none;
            padding: 10px;
            border-radius: 10px;
            font-size: 16px;
          }
          .center .inputbox:last-child {
            margin-bottom: 0;
          }
          .center .inputbox h3{
            font-family: sans-serif;
            /* margin: -20px 0 -20px 0; */
          }
          .center .inputbox [type="submit"] {
            margin: 20px 0 0 0;
            width: 50%;
            background: #175b52;
            color: #fff;
            border: #fff;
            cursor: pointer;
          }
          .center .inputbox:hover [type="submit"] {
            opacity: 0.75;
          }
          /* --------------------------------------------------------------------- */
          .right{
            float: right;
            margin: -240px 0 0 -400px;
            padding: 50px 50px;
            background: #fff;
            border-radius: 10px;
            width: 200px;
          }
          .right pre{
            font-size: 14px;
            margin: 0px 0 0 -200px;
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
    <hr>

    <div class="center">
      <h1>Silahkan Dilengkapi</h1>
      <form method="post" action="" enctype="multipart/form-data">
        <h3> Foto Akte</h3> 
        <div class="inputbox">
          <input type="file" name="fupload" required="required">
        </div>
        <h3> Foto KK</h3> 
        <div class="inputbox">
          <input type="file" name="KK" required="required">
        </div>
        <h3> PasFoto 3x4</h3> 
        <div class="inputbox">
          <input type="file" name="PasFoto" required="required">
        </div>
        <div class="inputbox">
          <input type="submit" value="Upload" name="upload">
        </div>
      </form>
    </div>
    <div class="right">
      <pre>
        - Format foto berupa JPG/PNG/BMP.
        - File Dokumen Bisa Berupa JPG/PNG/PDF Scanner.
        - Max Ukuran Foto 5MB.
        - Background PasFoto Merah.
        - Ukuran pasFoto 3x4.
      </pre>
    </div>
  </div> 

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>
<!-- FUNGSI UPLOAD DATA -->
<?php
include "0-koneksi.php";
  if(isset($_POST['upload'])){
    // Baca lokasi file sementar dan nama file dari form (fupload)
    $lokasi_file_Akte    = $_FILES['fupload']['tmp_name'];
    $lokasi_file_KK      = $_FILES['KK']['tmp_name'];
    $lokasi_file_PasFoto = $_FILES['PasFoto']['tmp_name'];
    $nama_file_Akte      = $_FILES['fupload']['name'];
    $nama_file_KK        = $_FILES['KK']['name'];
    $nama_file_PasFoto   = $_FILES['PasFoto']['name'];
    // Tentukan folder untuk menyimpan file
    $folder_Akte         = "admin/files_pendaftaran/$nama_file_Akte";
    $folder_KK           = "admin/files_pendaftaran/$nama_file_KK";
    $folder_PasFoto      = "admin/files_pendaftaran/$nama_file_PasFoto";
    // $folder_Akte         = "files/$nama_file_Akte";
    // $folder_KK           = "files/$nama_file_KK";
    // $folder_PasFoto      = "files/$nama_file_PasFoto";
    // Apabila file berhasil di upload

    if (move_uploaded_file($lokasi_file_Akte,"$folder_Akte")){
      $query = "INSERT INTO dokumen (ID_Dokumen, Akte, KK, PasFoto)
                VALUES('$id_user', '$nama_file_Akte', '', '')";       
      mysqli_query($kon, $query);
    }
    else{
      echo "File Akte gagal di upload";
    }
    // --------------------------------------------------------------------------------
    if (move_uploaded_file($lokasi_file_KK,"$folder_KK")){
      $query = "UPDATE dokumen SET ID_Dokumen='$id_user', Akte='$nama_file_Akte', KK='$nama_file_KK' 
                WHERE ID_Dokumen='$id_user'";       
      mysqli_query($kon, $query);
    }
    else{
      echo "File KK gagal di upload";
    }
    // --------------------------------------------------------------------------------
    if (move_uploaded_file($lokasi_file_PasFoto,"$folder_PasFoto")){
      $sql = mysqli_query($kon, "UPDATE dokumen SET ID_Dokumen='$id_user', Akte='$nama_file_Akte', 
                                 KK='$nama_file_KK', PasFoto='$nama_file_PasFoto' 
                                 WHERE ID_Dokumen='$id_user'") or die(mysqli_error($kon));
        if($sql){
          echo '<script>alert("Terimakasih Telah Upload data"); document.location="pend_isidata.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses Upload Data</div>';
              }
    }else{
      echo '<script>alert("Anda Sudah Upload Data Silahkan Lanjut Tahap Selanjutnya"); document.location="pend_syarat.php";</script>';
    }
  }

?>
