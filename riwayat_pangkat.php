<?php

include 'koneksi.php';
if(isset($_POST['nip'])){
$nip = $_POST['nip'];



$resultfasilitas = array();
$querylog ="SELECT 2A as gol_2A,`no.SK_2A` as SK_2a, tgl_2A,TMT_2A,Tahun_2A,Bulan__2A,
                  2B as gol_2B,`no.SK_2B` as SK_2B, tgl_2B,TMT_2B,Tahun_2B,Bulan__2B,
                  2C as gol_2C,`no.SK_2C` as SK_2C, tgl_2C,TMT_2C,Tahun_2C,Bulan__2C,
                  2D as gol_2D,`no.SK_2D` as SK_2D, tgl_2D,TMT_2D,Tahun_2D,Bulan__2D,
                  3A as gol_3A,`no.SK_3A` as SK_3A, tgl_3A,TMT_3A,Tahun_3A,Bulan__3A,
                  3B as gol_3B,`no.SK_3B` as SK_3B, tgl_3B,TMT_3B,Tahun_3B,Bulan__3B,
                  3C as gol_3C,`no.SK_3C` as SK_3C, tgl_3C,TMT_3C,Tahun_3C,Bulan__3C,
                  3D as gol_3D,`no.SK_3D` as SK_3D, tgl_3D,TMT_3D,Tahun_3D,Bulan__3D,
                  4A as gol_4A,`no.SK_4A` as SK_4A, tgl_4A,TMT_4A,Tahun_4A,Bulan__4A,
                  4B as gol_4B,`no.SK_4B` as SK_4B, tgl_4B,TMT_4B,Tahun_4B,Bulan__4B,
                  4C as gol_4C,`no.SK_4C` as SK_4C, tgl_4C,TMT_4C,Tahun_4C,Bulan__4C,
                  4D as gol_4D,`no.SK_4D` as SK_4D, tgl_4D,TMT_4D,Tahun_4D,Bulan__4D,
                  4E as gol_4E,`no.SK_4E` as SK_4E, tgl_4E,TMT_4E,Tahun_4E,Bulan__4E
 FROM kepegawaian_databaselengkap where nip = '$nip'";
$resultlog = $conn->query($querylog);
if($resultlog->num_rows > 0){

         while ($datalog = $resultlog->fetch_object()) {
           if ($datalog->gol_2A!=''){
                  $resultfasilitas[]= array(
                    "gol"=>$datalog->gol_2A,
                   "tmt" => $datalog->TMT_2A,
                  "NO_SK" => $datalog->SK_2a,
                 "tahun" => $datalog->Tahun_2A,
                 "bulan" => $datalog->Bulan__2A,
                );
              }
              if ($datalog->gol_2B!=''){
                     $resultfasilitas[]= array(
                       "gol"=>$datalog->gol_2B,
                      "tmt" => $datalog->TMT_2B,
                     "NO_SK" => $datalog->SK_2B,
                    "tahun" => $datalog->Tahun_2B,
                    "bulan" => $datalog->Bulan__2B,
                   );
                 }
                 if ($datalog->gol_2C!=''){
                        $resultfasilitas[]= array(
                          "gol"=>$datalog->gol_2C,
                         "tmt" => $datalog->TMT_2C,
                        "NO_SK" => $datalog->SK_2C,
                       "tahun" => $datalog->Tahun_2C,
                       "bulan" => $datalog->Bulan__2C,
                      );
                    }
                    if ($datalog->gol_2D!=''){
                           $resultfasilitas[]= array(
                             "gol"=>$datalog->gol_2D,
                            "tmt" => $datalog->TMT_2D,
                           "NO_SK" => $datalog->SK_2D,
                          "tahun" => $datalog->Tahun_2D,
                          "bulan" => $datalog->Bulan__2D,
                         );
                       }
                       if ($datalog->gol_3A!=''){
                              $resultfasilitas[]= array(
                                "gol"=>$datalog->gol_3A,
                               "tmt" => $datalog->TMT_3A,
                              "NO_SK" => $datalog->SK_3A,
                             "tahun" => $datalog->Tahun_3A,
                             "bulan" => $datalog->Bulan__3A,
                            );
                          }
                          if ($datalog->gol_3B!=''){
                                 $resultfasilitas[]= array(
                                   "gol"=>$datalog->gol_3B,
                                  "tmt" => $datalog->TMT_3B,
                                 "NO_SK" => $datalog->SK_3B,
                                "tahun" => $datalog->Tahun_3B,
                                "bulan" => $datalog->Bulan__3B,
                               );
                             }
                             if ($datalog->gol_3C!=''){
                                    $resultfasilitas[]= array(
                                      "gol"=>$datalog->gol_3C,
                                     "tmt" => $datalog->TMT_3C,
                                    "NO_SK" => $datalog->SK_3C,
                                   "tahun" => $datalog->Tahun_3C,
                                   "bulan" => $datalog->Bulan__3C,
                                  );
                                }
                                if ($datalog->gol_3D!=''){
                                       $resultfasilitas[]= array(
                                         "gol"=>$datalog->gol_3D,
                                        "tmt" => $datalog->TMT_3D,
                                       "NO_SK" => $datalog->SK_3D,
                                      "tahun" => $datalog->Tahun_3D,
                                      "bulan" => $datalog->Bulan__3D,
                                     );
                                   }
                                   if ($datalog->gol_4A!=''){
                                          $resultfasilitas[]= array(
                                            "gol"=>$datalog->gol_4A,
                                           "tmt" => $datalog->TMT_4A,
                                          "NO_SK" => $datalog->SK_4A,
                                         "tahun" => $datalog->Tahun_4A,
                                         "bulan" => $datalog->Bulan__4A,
                                        );
                                      }
                                      if ($datalog->gol_4B!=''){
                                             $resultfasilitas[]= array(
                                               "gol"=>$datalog->gol_4B,
                                              "tmt" => $datalog->TMT_4B,
                                             "NO_SK" => $datalog->SK_4B,
                                            "tahun" => $datalog->Tahun_4B,
                                            "bulan" => $datalog->Bulan__4B,
                                           );
                                         }
                                         if ($datalog->gol_4C!=''){
                                                $resultfasilitas[]= array(
                                                  "gol"=>$datalog->gol_4C,
                                                 "tmt" => $datalog->TMT_4C,
                                                "NO_SK" => $datalog->SK_4C,
                                               "tahun" => $datalog->Tahun_4C,
                                               "bulan" => $datalog->Bulan__4C,
                                              );
                                            }
                                            if ($datalog->gol_4D!=''){
                                                   $resultfasilitas[]= array(
                                                     "gol"=>$datalog->gol_4D,
                                                    "tmt" => $datalog->TMT_4D,
                                                   "NO_SK" => $datalog->SK_4D,
                                                  "tahun" => $datalog->Tahun_4D,
                                                  "bulan" => $datalog->Bulan__4D,
                                                 );
                                               }
                                               if ($datalog->gol_4E!=''){
                                                      $resultfasilitas[]= array(
                                                        "gol"=>$datalog->gol_4E,
                                                       "tmt" => $datalog->TMT_4E,
                                                      "NO_SK" => $datalog->SK_4E,
                                                     "tahun" => $datalog->Tahun_4E,
                                                     "bulan" => $datalog->Bulan__4E,
                                                    );
                                                  }

}
}
echo json_encode($resultfasilitas);
}

?>
