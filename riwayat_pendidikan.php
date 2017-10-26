<?php

include 'koneksi.php';
if(isset($_POST['nip'])){
$nip = $_POST['nip'];


$resultfasilitas = array();
$querylog ="SELECT PT_S1,PROD1_S1,`TGL.IJAZAH_S1` as TGL_S1 FROM kepegawaian_databaselengkap where nip = '$nip'";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){

         while ($datalog = $resultlog->fetch_object()) {
              if ($datalog->PT_S1!=''){
                     $resultfasilitas[]= array(
                       "JENJANG"=>"S1",
                      "PT" => $datalog->PT_S1,
                     "PROD1" => $datalog->PROD1_S1,
                    "TGL" => $datalog->TGL_S1
                   );
                 }
}

$querylog ="SELECT PT_S2,PROD1_S2,`TGL.IJAZAH_S2` as TGL_S2 FROM kepegawaian_databaselengkap where nip = '$nip'";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){

         while ($datalog = $resultlog->fetch_object()) {
               if ($datalog->PT_S2!=''){
                     $resultfasilitas[]= array(
                       "JENJANG"=>"S2",
                      "PT" => $datalog->PT_S2,
                     "PROD1" => $datalog->PROD1_S2,
                    "TGL" => $datalog->TGL_S2
                   );
                 }
}
}


$querylog ="SELECT PT_S3,PROD1_S3,`TGL.IJAZAH_S3` as TGL_S3 FROM kepegawaian_databaselengkap where nip = '$nip'";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){

         while ($datalog = $resultlog->fetch_object()) {
           if ($datalog->PT_S3!=''){
                   $resultfasilitas[]= array(
                     "JENJANG"=>"S3",
                    "PT" => $datalog->PT_S3,
                   "PROD1" => $datalog->PROD1_S3,
                  "TGL" => $datalog->TGL_S3
                 );
              }
}
}

}
echo json_encode($resultfasilitas);
}

?>
