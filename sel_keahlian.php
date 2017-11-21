<?php

include 'koneksi.php';
if(isset($_POST['query'])){
$keyword = strval($_POST['query']);
 $resultfasilitas = array();
  $querylog ="SELECT * from keahlian where  keahlian like '".$keyword."%' group by keahlian order by keahlian asc";
  $resultlog = $conn->query($querylog);
  if($resultlog->num_rows > 0){
           while ($datalog = $resultlog->fetch_object()) {
          $resultfasilitas[]= $datalog->keahlian;
      }
}
echo json_encode($resultfasilitas);
}

?>
