<?php

include 'koneksi.php';
if(isset($_POST['nip'])){
$nip = $_POST['nip'];



$resultfasilitas = array();
$querylog ="SELECT nama_lengkap,nip,`tgl._lahir` as tgl_lahir,JK,tempat_lahir,`Gol.` as golongan ,unit_kerja,`jab.fungsional` as jabatan,`Jnj._Homebase` as jenjang_tb  FROM kepegawaian_databaselengkap where nip LIKE '%".$nip."%';";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){

         while ($datalog = $resultlog->fetch_object()) {

     $resultfasilitas= array(
      "nama_lengkap" => $datalog->nama_lengkap,
     "nip" => $datalog->nip,
    "tgl_lahir" => $datalog->tgl_lahir,
    "JK" => $datalog->JK,
    "tempat_lahir" => $datalog->tempat_lahir,
    "golongan" => $datalog->tempat_lahir,
    "unit_kerja" => $datalog->unit_kerja,
    "jabatan" => $datalog->jabatan,
    "jenjang_tb" => $datalog->jenjang_tb,
   );
}
}
echo json_encode($resultfasilitas);
}

?>
