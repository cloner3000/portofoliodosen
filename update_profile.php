<?php
  require("koneksi.php");

$type = $_POST['type'];
$nip = trim($_POST['nip']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($type == 'personal'){
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $keahlian = $_POST['keahlian'];
  $sql = "update kepegawaian_databaselengkap set nama_lengkap='$nama',`tgl._lahir`='$tgl_lahir',tempat_lahir='$tempat_lahir',keahlian='$keahlian',fix='1' where nip='$nip'";
  if ($conn->query($sql) === TRUE) {echo '1';} else {echo '0';}
} else{
  echo "0";
}





 ?>
