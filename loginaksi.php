<?php
      session_start();
include 'koneksi.php';

$nip = $_POST['nip'];
$nidn = $_POST['nidn'];
$nipprotect = mysqli_real_escape_string($conn,$nip);
$nidnprotect = mysqli_real_escape_string($conn,$nidn);

$sql = "SELECT * from database_lengkap_oktober_databaselengkap where NIP LIKE '%$nipprotect%' and NIDN ='$nidnprotect'";
$result = mysqli_query($conn,$sql) or die(mysql_error());

$rows = mysqli_num_rows($result);
    if($rows==1){

         $_SESSION['NIP'] = $nipprotect;
        echo "1"; // login berhasil bang
  }else{
     echo "0";
     }
?>
