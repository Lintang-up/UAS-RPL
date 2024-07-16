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

<?php
  include "0-koneksi.php";
  // $no = 1;
  $query = mysqli_query($kon, "SELECT * FROM data_siswa WHERE ID_DS='$id_user'");
  while ($data = mysqli_fetch_array($query)) {
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
  <title> Ubah Data <?php echo $username;?> :: Sekull </title>
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
    .form_class  h2{
      margin: -20px 0 0px;
      text-align: left;
      font-size: 30px;
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
            /* position: relative; */
            /* align-items: center; */
            padding: 50px 50px;
            background: #fff;
            border-radius: 10px;
            margin: 50px 0 -20px 60px;
            width: 700px;
            height: 330px;
          }
          h1 {
            margin: -50px 0 30px;
          }
          .center .inputbox {
            position: sticky;
            width: 300px;
            height: 50px;
            margin: 0 50px 20px 0;
            float: right;
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
            font-size: 1.2em;
          }
          .center .inputbox:last-child {
            margin-bottom: 0;
          }
          .center .inputbox span {
            position: absolute;
            top: 14px;
            left: 20px;
            font-size: 1em;
            transition: 0.6s;
            font-family: sans-serif;
          }
          .center .inputbox input:focus ~ span,
          .center .inputbox input:valid ~ span {
            transform: translateX(-13px) translateY(-32px);
            font-size: 1em;
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
          .ra {
            float: left;
          }
          .input_agama {
            margin: 0px 0 14px 0;
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
          <li> <a href="pend_berkas.php" style="text-decoration:none; color:inherit;"><i class="fa fa-book" aria-hidden="true"></i> Pendaftaran </a></li>
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
    <h2>Ubah Data</h2>
    <hr>

    <div class="center">
      <h1>Silahkan Dilengkapi</h1>
      <form method="POST" action="">
        <div class="inputbox">
          <input type="text" name="NIK" value="<?php echo $data['NIK'] ?>" required="required">
          <span>NIK</span>
        </div>
        <div class="inputbox">
          <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>" required="required">
          <span>NAMA</span>
        </div>

        <div class="ra">
          Jenis Kelamin
          <div class="jenis_kelamin">
            <input name="JenisKelamin" value="Laki-laki" type="radio" <?php if($data['JenisKelamin']=='Laki-laki') echo 'checked'?>>
            <label>Laki-laki</label>
            <input name="JenisKelamin" value="Perempuan" type="radio" <?php if($data['JenisKelamin']=='Perempuan') echo 'checked'?>>
            <label>Perempuan</label>
          </div> <br>
          AGAMA
          <div class="input_agama">
            <div class="radio">
              <input name="Agama" value="Islam" type="radio"  <?php if($data['Agama']=='Islam') echo 'checked'?>>
              <label>Islam</label>
              <input name="Agama" value="Kristen" type="radio"  <?php if($data['Agama']=='Kristen') echo 'checked'?>>
              <label>Kristen</label>
              <br>
              <input name="Agama" value="Hindu" type="radio"  <?php if($data['Agama']=='Hindu') echo 'checked'?>>
              <label>Hindu</label>
              <input name="Agama" value="Buddha" type="radio" <?php if($data['Agama']=='Buddha') echo 'checked'?>>
              <label>Buddha</label>
              <input name="Agama" value="Katolik" type="radio"  <?php if($data['Agama']=='Katolik') echo 'checked'?>>
              <label>Katolik</label>
            </div>
          </div>
        </div>
        <div class="inputbox">
          <input type="text" name="TempatLahir" value="<?php echo $data['TempatLahir'] ?>" required="required">
          <span>Tempat Lahir</span>
        </div>
        <div class="inputbox">
          <input type="date" name="TanggalLahir" value="<?php echo $data['TanggalLahir'] ?>" required="required">
          <span>Tanggal Lahir</span>
        </div>
        <div class="inputbox">
          <input type="text" name="Telepon" value="<?php echo $data['Telepon'] ?>" required="required">
          <span>Telepon</span>
        </div>
        <div class="inputbox">
          <input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>"  required="required">
          <span>Alamat</span>
        </div>
        <div class="inputbox">
          <input type="submit" value="submit" name="submit" >
          <?php } ?>
        </div>

      </form>
    </div>
  </div> 


  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>
<!-- ------------Fungsi PHP INPUT DATA----------- -->
<?php
include "0-koneksi.php";
	if(isset($_POST['submit'])){
    $ID_DS          = $id_user;
    $NIK            = $_POST['NIK'];
    $Nama           = $_POST['Nama'];
    $JenisKelamin   = $_POST['JenisKelamin'];
    $Agama          = $_POST['Agama'];
    $TempatLahir    = $_POST['TempatLahir'];
    $TanggalLahir   = $_POST['TanggalLahir'];
    $Telepon        = $_POST['Telepon'];
    $Alamat         = $_POST['Alamat'];
		
    $sql = mysqli_query($kon, "UPDATE data_siswa SET NIK='$NIK', Nama='$Nama', JenisKelamin='$JenisKelamin', Agama='$Agama', TempatLahir='$TempatLahir', TanggalLahir='$TanggalLahir', Telepon='$Telepon', Alamat='$Alamat' WHERE ID_DS='$id_user'") or die(mysqli_error($kon));
      if($sql){
        echo '<script>alert("Sukses Mengedit Data"); document.location="da_lihat.php";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses Update Data</div>';
      }
	}
?>