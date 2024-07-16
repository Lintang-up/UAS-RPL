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
      margin: 80px 0 -35px 195px;
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
    /* --------------------------------------Data Siswa--------------------------------------- */
    .form_class {
      width: 900px;
      padding: 0px 40px 20px 40px;
      margin: 50px 0 50px 190px;
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
    .pl{
      float: right;
      width : 50%;
      height: 50%;
    }
    .table1, th, td {
      /* text-align: left; */
      border: 1px solid #999;
      padding: 8px 20px;
    }
    .table1 tr:hover {
      background-color: #f5f5f5;
    }
    .table1 tr:nth-child(even) {
      background-color: #f7f7f7;
    }
    /* -------------------------------------Data SISWA------------------------------------------- */
    /* -------------------------------------Validasi------------------------------------------- */
    .valid_class{
      width: 900px;
      padding: 0px 40px 20px 40px;
      margin: -45px 0 50px 190px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    button{
      font-family: "Lexend Deca", sans-serif;
      font-size: 15px;
      margin: 0 0px 0 200px;
      padding: 5px 10px 5px 10px;
    }
    /* -------------------------------------Validasi------------------------------------------- */
    /* -------------------------------------Konfirmasi------------------------------------------- */
    .konfirm_class{
      width: 600px;
      margin: 0px 0 50px 350px;
      border-radius: 8px;
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .konfirm_class input[type=submit]{
      width: 600px;
      height: 80px;
      border: none;
      font-size: 50px;
      border-radius: 8px;
      color: white;
      background-color: #329680;
      font-family: "Lexend Deca", sans-serif;
      cursor: pointer;
    }
    .konfirm_class input[type=submit]:hover{
      background-color: #175b52;
    }
    /* -------------------------------------Konfirmasi------------------------------------------- */
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
    <a href="da_list.php">
      <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  Kembali
    </a>
  </div>
  
  <div class="form_class">
    <p class="syst">Data Siswa Pendaftar</p><hr/>
    <table class="table1">
      <?php include "0-koneksi.php";
        $ID_DS = $_GET['ID_DS'];
        $query = mysqli_query($kon, "SELECT * FROM data_siswa WHERE ID_DS='$ID_DS'");
        while ($data = mysqli_fetch_array($query)) {
      ?>            
      <tbody>
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

  <form method="POST" action="">
    <div class="valid_class">
      <p class="syst">Aksi Data</p><hr/>
      <button> <input name="DataValidasi" value="Valid" type="radio"> <i class="fa fa-check-circle" aria-hidden="true"></i> Valid </button>
      <button> <input name="DataValidasi" value="Tidak Valid" type="radio"> <i class="fa fa-times-circle" aria-hidden="true"></i> Tidak Valid </button>
    </div>
  
    <div class="form_class">
      <p class="syst">Kuisoner Siswa Pendaftar</p><hr/>
      <table class="table1"> 
          <thead>
            <th rowspan="2" bgcolor="#ededed">NO</th>
            <th rowspan="2" bgcolor="#ededed">Pertanyaan</th>
            <th rowspan="2" bgcolor="#ededed">Jawaban</th>
          </thead>
      
          <tbody>
          <?php include "0-koneksi.php";
            // $ID_Kuisoner = $_GET['ID_Kuisoner'];
            $query = mysqli_query($kon, "SELECT * FROM kuisoner WHERE ID_Kuisoner='$ID_DS'");
            while ($data = mysqli_fetch_array($query)) {?> 
            <tr>
              <td align="center">1</td>
              <td>Apakah anda datang di sekolah sebelum pelajaran dimulai ?</td>
              <td align="center"> <?php echo $data['p1']?> </td>
            </tr>
            <tr>
              <td align="center">2</td>
              <td>Apakah anda mengikuti pelajaran tepat pada waktunya ?</td>
              <td align="center"> <?php echo $data['p2']?> </td>
            </tr>
            <tr>
              <td align="center">3</td>
              <td>Ketika semua pelajaran telah berakhir, apakah anda langsung bergegas untuk pulang ?</td>
              <td align="center"> <?php echo $data['p3']?> </td>
            </tr>
            <tr>
              <td align="center">4</td>
              <td>Apakah jadual belajar yang anda yang buat anda laksanakan?</td>
              <td align="center"> <?php echo $data['p4']?> </td>
            </tr>
            <tr>
              <td align="center">5</td>
              <td>Apakah anda menentukan waktu yang terbaik yang memungkinkan agar dapat belajar ?</td>
              <td align="center"> <?php echo $data['p5']?> </td>
            </tr>
            <tr>
              <td align="center">6</td>
              <td>Apakah anda tetap belajar di malam harinya meskipun tidak ada ulangan harian esok hari ?</td>
              <td align="center"> <?php echo $data['p6']?> </td>
            </tr>
            <tr>
              <td align="center">7</td>
              <td>Sepulang sekolah apakah anda meletakkan baju, sepatu dan tas pada tempatnya ?</td>
              <td align="center"> <?php echo $data['p7']?> </td>
            </tr>
            <tr>
              <td align="center">8</td>
              <td>Bila anda berhalangan hadir di sekolah, apakah anda menulis surat izin ?</td>
              <td align="center"> <?php echo $data['p8']?> </td>
            </tr>
            <tr>
              <td align="center">9</td>
              <td>Apakah anda memepersiapkan semua peralatan yang diperlukan untuk belajar di sekolah ?</td>
              <td align="center"> <?php echo $data['p9']?> </td>
            </tr>
            <tr>
              <td align="center">10</td>
              <td>Apakah anda memepelajari kembali materi pelajaran yang disampaiakan oleh guru ?</td>
              <td align="center"> <?php echo $data['p10']?> </td>
            </tr>
            <tr>
              <td align="center">11</td>
              <td>Jika mengerjakan tugas, apakah anda mengerjakan tepat waktu yang telah ditentukan ?</td>
              <td align="center"> <?php echo $data['p11']?> </td>
            </tr>
            <tr>
              <td align="center">12</td>
              <td>Ketika anda sedang bermain dengan teman dan tiba waktunya untuk belajar, apakah anda segera pulang untuk belajar? </td>
              <td align="center"> <?php echo $data['p12']?> </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
    </div>
  
    <div class="form_class">
      <p class="syst">Dokumen Siswa Pendaftar</p><hr/>
      <table class="table1">
        <?php 
         include "0-koneksi.php";
         $ID_DS = $_GET['ID_DS'];
         $query = mysqli_query($kon, "SELECT * FROM dokumen WHERE ID_Dokumen='$ID_DS'");
         while ($data = mysqli_fetch_array($query)) {    ?>
        <tr>
          <td> Dokumen Akte</td>
          <td> <img class="pl" src="<?php echo "files_pendaftaran/".$data['Akte']; ?>"> </td>		
        </tr>
        <tr>
          <td> Dokumen KK</td>
          <td> <img class="pl" src="<?php echo "files_pendaftaran/".$data['KK']; ?>"> </td>		
        </tr>
        <tr>
          <td> PasFoto</td>
          <td> <img class="pl" src="<?php echo "files_pendaftaran/".$data['PasFoto']; ?>">	</td>		
        </tr>
        <?php } ?>
      </table>
    </div>

    <div class="form_class">
      <p class="syst">Aksi Siswa </p><hr/>
      <button> <input name="Pengumuman" value="Diterima" type="radio"> <i class="fa fa-check-circle" aria-hidden="true"></i> Diterima </button>
      <button> <input name="Pengumuman" value="Tidak" type="radio"> <i class="fa fa-times-circle" aria-hidden="true"></i> Tidak Diterima </button>
    </div>
    
    <div class="konfirm_class">
      <input type="submit" value="Simpan" name="submit">
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
    $ID_Pengumuman  = $ID_DS;
    $DataValidasi   = $_POST['DataValidasi'];
    $Pengumuman     = $_POST['Pengumuman'];
      $sql = mysqli_query($kon, "INSERT INTO pengumuman (ID_Pengumuman, DataValidasi, pengumuman) 
             VALUES('$ID_Pengumuman', '$DataValidasi', '$Pengumuman')") or die(mysqli_error($kon));
        if($sql){
          echo '<script>alert("Terimakasih Telah mengkonfirmasi data"); document.location="da_list.php";</script>';
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses Input Data</div>';
        }
	}
?>