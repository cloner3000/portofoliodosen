<?php

include 'koneksi.php';
if(isset($_POST['nip'])){
$nip = $_POST['nip'];
$nip_lama = $_POST['nip_lama'];
$status = $_POST['status'];

if ($status==="semua"){

$resultfasilitas = array();
$querylog ="SELECT * from histori_mengajar  where nip = '$nip' or nip= '$nip_lama'  GROUP BY tahun_akad order by id desc";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){
         while ($datalog = $resultlog->fetch_object()) {
                  $resultfasilitas[]= array(
                    "tahun_akad"=>$datalog->tahun_akad,
                   "kode_mk" => $datalog->kode_mk,
                  "nama_mk" => $datalog->nama_mk,
                 "kelas" => $datalog->kelas,
                 "program" => $datalog->program,
                );
}
}
}
else {
  $resultfasilitas = array();
  $querylog ="SELECT * from histori_mengajar where (nip = '$nip' or nip= '$nip_lama') and tahun_akad='$status' order by id desc";
  $resultlog = $conn->query($querylog);
  if($resultlog->num_rows > 0){
           while ($datalog = $resultlog->fetch_object()) {
                    $resultfasilitas[]= array(
                      "tahun_akad"=>$datalog->tahun_akad,
                     "kode_mk" => $datalog->kode_mk,
                    "nama_mk" => $datalog->nama_mk,
                   "kelas" => $datalog->kelas,
                   "program" => $datalog->program,
                  );
  }
  }
}
echo json_encode($resultfasilitas);
}

?>
