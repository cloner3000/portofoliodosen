<?php

include 'koneksi.php';
if(isset($_POST['nip'])){
$nip = $_POST['nip'];
$nip_lama = $_POST['nip_lama'];
$status = $_POST['status'];

if ($status==="semua"){
$resultfasilitas = array();
$querylog ="select IF(CHAR_LENGTH(nim)=9,SUBSTRING(nim ,5,2),SUBSTRING(nim ,6,2)) as tahun_angkatan,nim from histori_bimbingan   where (nip = '$nip' or nip= '$nip_lama')group by tahun_angkatan order by tahun_angkatan desc";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){
         while ($datalog = $resultlog->fetch_object()) {
              if (($datalog->tahun_angkatan<=99) and ($datalog->tahun_angkatan>=90)) {
                $tahun_angkatan='19'.$datalog->tahun_angkatan;
              }
              else {
                $tahun_angkatan='20'.$datalog->tahun_angkatan;
              }
                  $resultfasilitas[]= array(
                    "tahun_angkatan"=>$tahun_angkatan,
                    "key"=>$datalog->tahun_angkatan
                );
}
}
}
else {
  $resultfasilitas = array();
  $querylog ="SELECT * from histori_bimbingan where (nip = '$nip' or nip= '$nip_lama') and (nim like'____".$status."___' or nim like'_____".$status."____') order by id desc";
  $resultlog = $conn->query($querylog);
  if($resultlog->num_rows > 0){
           while ($datalog = $resultlog->fetch_object()) {
             $resultfasilitas[]= array(
                 "progdi"=>$datalog->progdi,
               "program"=>$datalog->program,
              "nim" => $datalog->nim,
             "nama" => $datalog->nama);
  }
  }
}
echo json_encode($resultfasilitas);
}

?>
