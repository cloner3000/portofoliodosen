<?php
include 'koneksi.php';

$nip = $_POST['nip'];
$nidn = $_POST['nidn'];
$nipprotect = mysqli_real_escape_string($conn,$nip);
$nidnprotect = mysqli_real_escape_string($conn,$nidn);

$sql = "SELECT * from database_lengkap_oktober_databaselengkap where NIP = '$nipprotect' and NIDN ='$nidnprotect'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  	session_start();
  	$_SESSION['id'] = $;
  	$_SESSION['status'] = "login";
    header("location:index.php");
}else {
header("location:login.php");
}


?>
