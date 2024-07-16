<!-- -------------------------------------FUNGSI LOGIN PHP------------------------------------- -->
<?php 
include '0-koneksi.php';
error_reporting(0);
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: beranda.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($kon, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
          $_SESSION["id_user"]        =$row["id_user"];
          $_SESSION["Nama_lengkap"]   =$row["Nama_lengkap"];
          $_SESSION["username"]       =$row["username"];
          $_SESSION["NIK"]            =$row["NIK"];
          $_SESSION["tanggal_lahir"]  =$row["tanggal_lahir"];
        header("Location: beranda.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title>Login :: Sekul</title>
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
      height: 597px;
      width: 100%;
      background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Mountains-1412683.svg/1280px-Mountains-1412683.svg.png) no-repeat center center;
      background-size: cover;
    }
    .form_class {
      width: 500px;
      padding: 40px 40px 295px 40px;
      margin: 205px;
      border-radius: 8px;
      background-color: white;
      font-family: 'system-ui';
      box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .form_div {
      text-transform: uppercase;
    }
    .form_div > label {
      letter-spacing: 3px;
      font-size: 1rem;
    }
    .lupa{
      border-style: none;
      background-color: #F3CCFF;
      padding: 5px 15px;
      font-family: 'system-ui';
      letter-spacing: .8px;
      cursor: pointer;
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
        <form id="login_form" class="form_class" action="" method="post">
            <div class="form_div">
                <label>Email/Username</label>
                <input class="field_class" name="username" type="text" placeholder="Enter your email address" autofocus>
                <label>Password</label>
                <input id="pass" class="field_class" name="password" type="password" placeholder="Enter your password">
                <button class="lupa" onclick="myalert()"> Forgot Your Password?</button> 
                  <script> 
                    function myalert() { 
                    alert("Silahkan Tanyakan Kepada Mantan Anda 😭");  } 
                  </script> 
                <button class="submit_class" type="submit" value="submit" name="submit">Masukk</button>
            </div>
            <div class="info_div">
                <p>Anda belum memiliki akun? <a href="masuk_regis.php">Klik disini!</a></p>
            </div>
        </form>
    </main>
    <footer>
        <p>CopyRight Pendaftaran Siswa</p>
    </footer>
</body>
</html>

