<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='shorcut icon' href=gambar/ico_logo.ico>
  <title>Welcome in Sekull</title>
  <style>
    body {
      background-image : url("gambar/background-utama.jpg");
      background-size: cover;

    }
    .judul{
      text-align:center;
      font-family: "Andale Mono", "Monotype.com", monospace;
      font-size: 40px;
      font-weight: 900;
      color: #FCFDF2;
    }

    .logo{
      width: 250px;
      height: 250px;
      position: absolute;
      left: 50%;
      top: 38%;
      transform: translate(-50%, -50%);
    }

    .div_pilihan{
      margin: 300px 0 0 0px;
    }

    .kotak_pilihan {
      width: 540px;
      margin: 60px auto 30px;
      padding: 45px;
      position: relative;
      background: #fffaf6;
      border-radius: 4px;
      color: #7e7975;
      box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 5px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4); 
    }

    a, .a1{
      font-family: sans-serif;
      font-size: 30px;
      background: #22a4cf;
      color: white;
      border: white 3px solid;
      border-radius: 5px;
      padding: 18px 40px;
      margin: 10px 0 0 40px;
    }
    .a1{
      margin: 0 0 0 130px;
    }
    a, .a1 {
      text-decoration: none;
    }
    a:hover, .a1:hover{
      opacity:0.7;
    }
  </style>
</head>

<body>
  <p class="judul"> Selamat Datang di Sistem Pendaftaran Online </p>
  <div class= "logo"> 
    <img class= "logo" src="gambar/logo.png">
  </div>
  <div class="div_pilihan">
	  <form class="kotak_pilihan">
		  <p> 
				<a href="masuk_regis.php" class="tombol">Regist</a>
        <a class = "a1" href="masuk_login.php" class="tombol">Login</a>    
			</p>
    </form>
  </div>

</body>
</html>