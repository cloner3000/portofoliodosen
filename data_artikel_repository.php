<?php

    include 'koneksi.php';

    if (isset($_POST['nip'])) 
    {
        $nip = $_POST['nip'];

        $usernya  = 'slim';
        $tgl_now  =  date('dmY');
        $tokennya =  md5($usernya.$tgl_now.'senayan');

        $get_repodig = file_get_contents('http://repository.untan.ac.id/layanan/index.php?serv=bio&user='.$usernya.'&token='.$tokennya.'&nip='.$nip);
        $datas       = json_decode($get_repodig, TRUE);
       
        $dataArtikel = array();
        foreach ($datas as $data) {
            $dataArtikel[]   =  array(
                                        'type'              => $data['spec_detail_info'],
                                        'title'             => $data['title'],
                                        'publication_date'  => $data['publish_year'],
                                        'biblio_id'         => $data['biblio_id'],
                                    );
        }
        
        echo json_encode($dataArtikel);
    }

?>