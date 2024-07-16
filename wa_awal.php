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
  <title> Kuisoner :: Pendaftaran </title>
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
      padding: 30px 40px 30px 40px;
      margin: 105px 0 82px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
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
          <li> <a href="beranda.php" style="text-decoration:none; color:inherit;"><i class="fa fa-home"></i> Beranda </a></li>
          <li> <a href="pend_berkas.php" style="text-decoration:none; color:inherit;"><i class="fa fa-book" aria-hidden="true"></i> Pendaftaran </a></li>
          <li class="active"> <a href="wa_awal.php" style="text-decoration:none; color:inherit;"><i class="fa fa-briefcase"></i> Wawancara </a></li>
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

<form method="POST" action="">
  <div class="form_class">
    <table class="table1">
      <thead>
        <th rowspan="2" bgcolor="#ededed">NO</th>
        <th rowspan="2" bgcolor="#ededed">Pertanyaan</th>
        <th colspan="3" bgcolor="#ededed">Pilihan</th>
        <tr>
          <td>Ya</td>
          <td>Kadang</td>
          <td>Tidak</td>
        </tr>
      </thead>
  
      <tbody>
        <tr>
          <td>1</td>
          <td class="lf">Apakah anda datang di sekolah sebelum pelajaran dimulai ?</td>
          <td><input name="p1" value="Ya"     type="radio" required></td>
          <td><input name="p1" value="Kadang" type="radio"></td>
          <td><input name="p1" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>2</td>
          <td class="lf">Apakah anda mengikuti pelajaran tepat pada waktunya ?</td>
          <td><input name="p2" value="Ya"     type="radio" required></td>
          <td><input name="p2" value="Kadang" type="radio"></td>
          <td><input name="p2" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>3</td>
          <td class="lf">Ketika semua pelajaran telah berakhir, apakah anda langsung bergegas untuk pulang ?</td>
          <td><input name="p3" value="Ya"     type="radio" required></td>
          <td><input name="p3" value="Kadang" type="radio"></td>
          <td><input name="p3" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>4</td>
          <td class="lf">Apakah jadual belajar yang anda yang buat anda laksanakan?</td>
          <td><input name="p4" value="Ya"     type="radio" required></td>
          <td><input name="p4" value="Kadang" type="radio"></td>
          <td><input name="p4" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>5</td>
          <td class="lf">Apakah anda menentukan waktu yang terbaik yang memungkinkan agar dapat belajar ?</td>
          <td><input name="p5" value="Ya"     type="radio" required></td>
          <td><input name="p5" value="Kadang" type="radio"></td>
          <td><input name="p5" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>6</td>
          <td class="lf">Apakah anda tetap belajar di malam harinya meskipun tidak ada ulangan harian esok hari ?</td>
          <td><input name="p6" value="Ya"     type="radio" required></td>
          <td><input name="p6" value="Kadang" type="radio"></td>
          <td><input name="p6" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>7</td>
          <td class="lf">Sepulang sekolah apakah anda meletakkan baju, sepatu dan tas pada tempatnya ?</td>
          <td><input name="p7" value="Ya"     type="radio" required></td>
          <td><input name="p7" value="Kadang" type="radio"></td>
          <td><input name="p7" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>8</td>
          <td class="lf">Bila anda berhalangan hadir di sekolah, apakah anda menulis surat izin ?</td>
          <td><input name="p8" value="Ya"     type="radio" required></td>
          <td><input name="p8" value="Kadang" type="radio"></td>
          <td><input name="p8" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>9</td>
          <td class="lf">Apakah anda memepersiapkan semua peralatan yang diperlukan untuk belajar di sekolah ?</td>
          <td><input name="p9" value="Ya"     type="radio" required></td>
          <td><input name="p9" value="Kadang" type="radio"></td>
          <td><input name="p9" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>10</td>
          <td class="lf">Apakah anda memepelajari kembali materi pelajaran yang disampaiakan oleh guru ?</td>
          <td><input name="p10" value="Ya"     type="radio" required></td>
          <td><input name="p10" value="Kadang" type="radio"></td>
          <td><input name="p10" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>11</td>
          <td class="lf">Jika mengerjakan tugas, apakah anda mengerjakan tepat waktu yang telah ditentukan ? </td>
          <td><input name="p11" value="Ya"     type="radio" required></td>
          <td><input name="p11" value="Kadang" type="radio"></td>
          <td><input name="p11" value="Tidak"  type="radio"></td>
        </tr>
        <tr>
          <td>12</td>
          <td class="lf">Ketika anda sedang bermain dengan teman dan tiba waktunya untuk belajar, apakah anda segera pulang untuk belajar? </td>
          <td><input name="p12" value="Ya"     type="radio" required></td>
          <td><input name="p12" value="Kadang" type="radio"></td>
          <td><input name="p12" value="Tidak"  type="radio"></td>
        </tr>
      </tbody>
    </table>
    <input type="submit" value="submit" name="submit">
  </div> 
</form>

  <footer>
    <p>CopyRight Pendaftaran Siswa</p>
  </footer>
</body>
</html>
<!-- ------------Fungsi PHP INPUT DATA----------- -->
<?php
include "0-koneksi.php";
	if(isset($_POST['submit'])){
    $ID_Kuisoner    = $id_user;
    $p1             = $_POST['p1'];
    $p2             = $_POST['p2'];
    $p3             = $_POST['p3'];
    $p4             = $_POST['p4'];
    $p5             = $_POST['p5'];
    $p6             = $_POST['p6'];
    $p7             = $_POST['p7'];
    $p8             = $_POST['p8'];
    $p9             = $_POST['p9'];
    $p10            = $_POST['p10'];
    $p11            = $_POST['p11'];
    $p12            = $_POST['p12'];
		$cek = mysqli_query($kon, "SELECT * FROM kuisoner WHERE ID_Kuisoner='$ID_Kuisoner'") or die(mysqli_error($kon));
		
    if(mysqli_num_rows($cek) == 0){
      $sql = mysqli_query($kon, "INSERT INTO kuisoner (ID_Kuisoner, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12) 
             VALUES('$ID_Kuisoner', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12')") or die(mysqli_error($kon));
        if($sql){
          echo '<script>alert("Terimakasih Telah Mengisi Semua Kuisoner"); document.location="wa_akhir.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses Input Data</div>';
              }
    }else{
      echo '<script>alert("Anda Sudah Telah Mengisi Kuisoner"); document.location="wa_akhir.php";</script>';
    }
	}
?>