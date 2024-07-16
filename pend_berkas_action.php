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
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file_Akte    = $_FILES['fupload']['tmp_name'];
$lokasi_file_KK      = $_FILES['KK']['tmp_name'];
$lokasi_file_PasFoto = $_FILES['PasFoto']['tmp_name'];
$nama_file_Akte      = $_FILES['fupload']['name'];
$nama_file_KK        = $_FILES['KK']['name'];
$nama_file_PasFoto   = $_FILES['PasFoto']['name'];
// Tentukan folder untuk menyimpan file
$folder_Akte         = "files/$nama_file_Akte";
$folder_KK           = "files/$nama_file_KK";
$folder_PasFoto      = "files/$nama_file_PasFoto";
// Apabila file berhasil di upload

if (move_uploaded_file($lokasi_file_Akte,"$folder_Akte")){
  echo "Nama File : <b>$nama_file_Akte</b> sukses di upload";
  
  $query = "INSERT INTO dokumen (ID_Dokumen, Akte, KK, PasFoto)
            VALUES('$id_user', '$nama_file_Akte', '', '')";       
  mysqli_query($kon, $query);
}
else{
  echo "File Akte gagal di upload";
}
// --------------------------------------------------------------------------------
if (move_uploaded_file($lokasi_file_KK,"$folder_KK")){
  echo "<br>Nama File : <b>$nama_file_KK</b> sukses di upload";
  
  $query = "UPDATE dokumen SET ID_Dokumen='$id_user', Akte='$nama_file_Akte', KK='$nama_file_KK' 
            WHERE ID_Dokumen='$id_user'";       
  mysqli_query($kon, $query);
}
else{
  echo "File KK gagal di upload";
}
// --------------------------------------------------------------------------------
if (move_uploaded_file($lokasi_file_PasFoto,"$folder_PasFoto")){
  echo "<br>Nama File : <b>$nama_file_PasFoto</b> sukses di upload";
  
  $query = "UPDATE dokumen SET ID_Dokumen='$id_user', Akte='$nama_file_Akte', KK='$nama_file_KK', 
            PasFoto='$nama_file_PasFoto' WHERE ID_Dokumen='$id_user'";     
  mysqli_query($kon, $query);
}
else{
  echo "File PasFoto gagal di upload";
}

?>