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
    <?php
    include "0-koneksi.php";
    $query = mysqli_query($kon, "SELECT * FROM admin WHERE id_admin='$id_admin'");
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
    <h2> Edit Data Admin</h2>
    <hr>

    <div class="center">
      <h1>Silahkan Dilengkapi</h1>
      <form method="POST" action="">
        <div class="inputbox">
          <input type="text" name="uname" value="<?php echo $data['uname']?>" required="required">
          <span>Username Admin</span>
        </div>
        <div class="inputbox">
          <input type="text" name="password" value="<?php echo $data['password']?>" required="required">
          <span>Password Admin</span>
        </div>
        <div class="inputbox">
          <input type="text" name="nama" value="<?php echo $data['nama']?>" required="required">
          <span>NAMA</span>
        </div>

        <div class="ra">
          Jabatan
          <div class="jenis_kelamin">
            <input name="jabatan" value="Guru" type="radio" <?php if($data['jabatan']=='Guru') echo 'checked'?>>
            <label>Guru</label>
            <input name="jabatan" value="Staff" type="radio" <?php if($data['jabatan']=='Staff') echo 'checked'?>>
            <label>Staff</label>
            <input name="jabatan" value="Kepala Sekolah" type="radio" <?php if($data['jabatan']=='Kepala Sekolah') echo 'checked'?>>
            <label>Kepala Sekolah</label>
          </div> <br>
        </div>
        <div class="inputbox">
          <input type="text" name="noTlp" value="<?php echo $data['noTlp']?>" required="required">
          <span>No Telepon</span>
        </div>
        <?php }?>
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
<!-- ------------Fungsi PHP INPUT DATA----------- -->
<?php
include "0-koneksi.php";
	if(isset($_POST['submit'])){
    $uname          = $_POST['uname'];
    $password		    = md5($_POST["password"]);
    $nama           = $_POST['nama'];
    $jabatan        = $_POST['jabatan'];
    $noTlp          = $_POST['noTlp'];
		
    $sql = mysqli_query($kon, "UPDATE admin SET uname='$uname', password='$password', nama='$nama', jabatan='$jabatan', noTlp='$noTlp' WHERE id_admin='$id_admin'") or die(mysqli_error($kon));
      if($sql){
        echo '<script>alert("Sukses Mengedit Data Admin"); document.location="akun.php";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses Update Data</div>';
      }
	}
?>