<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title>Registrasi :: Sekul</title>
  <style>
    * {
      padding: 0px;
      margin: 0px;
    }
    body {
      background-color: lightgreen;
    }
    .logo{
      width: 220px;
      height: 220px;
      position: absolute;
      left: 50%;
      top: 25%;
      transform: translate(-50%, -50%);
    }
    h1 {
      letter-spacing: 1.5vw;
      font-family: 'system-ui';
      text-transform: uppercase;
      text-align: center;
    }
    main {
      display: flex;
      /* align-items: center; */
      justify-content: center;
      height: 850px;
      width: 100%;
      background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
      background-size: cover;
    }
    .form_class {
      width: 500px;
      padding: 15px 40px 570px 40px;
      margin: 205px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .div_buatakun{
      text-align: center;
      letter-spacing: 1px;
      font-size: 20px;
      padding: 0 0 25px;
    }
    .form_div {
      text-transform: uppercase;
    }
    .form_div > label {
      letter-spacing: 3px;
      font-size: 1rem;
    }
    .info_div {
      text-align: center;
      margin-top: 20px;
      letter-spacing: 1px;

    }
    .field_class {
      width: 100%;
      border-radius: 6px;
      border-style: solid;
      border-width: 1px;
      padding: 5px 0px;
      text-indent: 6px;
      margin-top: 10px;
      margin-bottom: 20px;
      font-family: 'system-ui';
      font-size: 0.9rem;
      letter-spacing: 2px;
    }
    .submit_class {
      border-style: none;
      border-radius: 5px;
      background-color: #FFE6D4;
      padding: 8px 20px;
      font-family: 'system-ui';
      text-transform: uppercase;
      letter-spacing: .8px;
      display: block;
      margin: auto;
      margin-top: 10px;
      box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
      cursor: pointer;
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
      font-family: 'system-ui';
      letter-spacing: 3px;
      color:black;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="logo">
    <img class= "logo" src="gambar/logo.png">
  </div>
    <main>
        <form class="form_class" action="" method="post" name="form1">
            <div class="div_buatakun">
              <p> Buat Akun </p>
            </div>
            <div class="form_div">
                <label>Nama Lengkap</label>
                <input class="field_class" name="Nama_lengkap" type="text" placeholder="Enter your name" autofocus required>
                <label>NIK</label>
                <input class="field_class" name="NIK" type="text" placeholder="Enter your NIK" autofocus required>
                <label>Email/username</label>
                <input class="field_class" name="username" type="text" placeholder="Enter your email address" autofocus required>
                <label>Password</label>
                <input id="pass" class="field_class" name="password" type="password" placeholder="Enter your password" required>
                <label>Tanggal Lahir</label>
                <input class="field_class" name="tanggal_lahir" type="date" placeholder="Enter your name" autofocus required>
                
                <button class="submit_class" type="submit" name="submit" value="Submit"> Buat akun </button>
            </div>
            <div class="info_div">
                <p>Anda sudah memiliki akun? <a href="masuk_login.php">Klik disini!</a></p>
            </div>
        </form>
    </main>
    <footer>
        <p>CopyRight Pendaftaran Siswa</p>
    </footer>
</body>
</html>

<!-- -------------------------------------FUNGSI REGIST PHP------------------------------------- -->
<?php
include "0-koneksi.php";
	if(isset($_POST['submit'])){
		$Nama_lengkap		= $_POST['Nama_lengkap'];
		$NIK			      = $_POST['NIK'];
		$username		    = $_POST['username'];
		$password		    = md5($_POST["password"]);
		$tanggal_lahir	= $_POST['tanggal_lahir'];
			
		$cek = mysqli_query($kon, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($koneksi));

		if(mysqli_num_rows($cek) == 0)
      {$sql = mysqli_query($kon, "INSERT INTO user(Nama_lengkap, NIK, username, password, tanggal_lahir) 
              VALUES('$Nama_lengkap','$NIK', '$username', '$password', '$tanggal_lahir')") 
              or die(mysqli_error($koneksi));
				if($sql){
					echo '<script>alert("Berhasil regist akun, silahkan lanjutkan LOGIN 😉"); document.location="masuk_login.php";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses Regist Akun 😶</div>';
				}
			}else{
				echo '<script>alert("Username sudah terdaftar 😖"); document.location="masuk_regis.php";</script>';
			}
	}
?>