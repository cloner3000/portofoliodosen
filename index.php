<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Portofolio Dosen</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/lobibox.css" rel="stylesheet" />
		<link href="assets/css/sweetalert.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<style>
		.card .category, .card label {
			color: black;
		}
		</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SISTEM INFORMASI PORTOFOLIO DOSEN UNIVERSITAS TANJUNGPURA</a>
                </div>

            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">IDENTITAS</h4>

                            </div>
                            <div class="content">
                              <p><b>Nama = <span id="nama">Andreas Christian </span></b></p>
                              <p><b>NIP = <span id="nip">198412162008121003</span></b></p>
                              <p><b>Fakultas = <span id="fakulas">Teknik</span> </b></p>
                              <p><b>Jurusan = <span id="jurusan">Elektro </span> </b></p>
                              <p><b>Unit Kerja =<span id="unitkerja">Universitas Tanjungpura</span></b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">KETERANGAN</h4>
                            </div>
                            <div class="content">
															<p>Berilah Tanda Cek (&#10004;) pada kolom skor sesuai dengan penilaian Anda</p>
			                          <div class="item">1 = Kurang </div>
			                          <div class="item">2 = Cukup</div>
			                          <div class="item">3 = Baik</div>
			                          <div class="item">4 = Sangat Baik</div>
			                          <p><b>Skor Lulus = 27 atau lebih </b></p>
                            </div>
                        </div>
                    </div>
                </div>


								<div class="tab-content">
                  <div class="btn btn-info btn-fill" id="addmanually">Add Article Manually</div>
									<div class="btn btn-info btn-fill" id="detail" onclick="lihatdetail()">Detail</div>
									<table class="table table-hover table-striped">
										<thead>
												<tr>
														<th ><center>No.</center></th>
														<th><center>TH1</center></th>
														<th><center>TH2</center></th>
												</tr>
										</thead>
										<tbody>


										</tbody>
									</table>


						</div>
            </div>


        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy;  <a href="http://tik.untan.ac.id">Puskom Tim</a> UNIVERSITAS TANJUNGPURA
                </p>
            </div>
        </footer>

    </div>


</body>
<!-- REDHA -->

<div id="myModaldetail" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Riwayat Data Pegawai</h4>
            </div>
            <div class="modal-body">
							<h4 class="modal-title"  id="detail-nip"></h3>
              <ul class="nav nav-tabs">
								<li class="active"><a href="#Personal" data-toggle="tab"> Data Personal</a></li>
								<li class=""><a href="#Pendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
								<li class=""><a href="#Pangkat" data-toggle="tab">Riwayat Pangkat</a></li>
								<li class=""><a href="#Jabatan" data-toggle="tab">Riwayat Jabatan</a></li>
								<li class=""><a href="#Kerja" data-toggle="tab">Riwayat Unit Kerja</a></li>
              </ul>

              <div class="tab-content">
  							<div class="tab-pane fade  active in" id="Personal">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															  <div class="row">
															<div class="col-md-12">
															<div class="form-horizontal">
														 			 <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
														 			 <div class="col-md-6 col-xs-12">
														 					 <label class="form-control" id="dtl_nama"> </label>
														 			 </div>
														 	 </div>
														 </div>
													 </div>
													   <div class="row">
														 <div class="col-md-12">
															 <div class="form-horizontal">
 														 			 <label class="col-md-3 col-xs-12 control-label">Tempat Lahir</label>
 														 			 <div class="col-md-6 col-xs-12">
 														 					 <label class="form-control" id="dtl_tmp_lahir"></label>
 														 			 </div>
 														 	 </div>
														 </div>
													 </div>
													   <div class="row">
														<div class="col-md-12">
															 <div class="form-horizontal">
 														 			 <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
 														 			 <div class="col-md-6 col-xs-12">
 														 					 <label class="form-control" id="dtl_tgl_lahir"> </label>
 														 			 </div>
 														 	 </div>
														</div>
													</div>
													</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Pendidikan">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="table_riwayat_pendidikan" class="table table-striped">
																 <thead>
																		<tr>
																			 <th>No.</th>
																			 <th>Jenjang</th>
																			 <th>Jurusan/Institusi</th>
																			 <th>No./Tgl. Ijazah</th>
																		</tr>
																 </thead>
																 <tbody>

																 </tbody>
																</table>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Pangkat">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="table_riwayat_pangkat" class="table table-striped">
															   <thead>
															      <tr>
															         <th>No.</th>
															         <th>Status Pengangkatan</th>
															         <th>Pangkat</th>
															         <th>Gol.</th>
															         <th>TMT</th>
															         <th>Nomor/Tgl. SK</th>
															         <th>MK Th</th>
															         <th>MK Bl</th>
															         <th>Pejabat Penetap</th>
															      </tr>
															   </thead>
															   <tbody>

															   </tbody>
															</table>

														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Jabatan">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="" class="table table-striped">
															   <thead>
															      <tr>
															         <th>No.</th>
															         <th>Jabatan/Level</th>
															         <th>No./Tgl. SK</th>
															         <th>Pejabat Penetap/NIP</th>
															         <th>TMT</th>
															         <th>No./Tgl. Lantik</th>
															      </tr>
															   </thead>
															   <tbody>

															   </tbody>
															</table>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="Kerja">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<table id="" class="table table-striped">
   <thead>
      <tr>
         <th>No.</th>
         <th>Unit Kerja</th>
         <th>No./Tgl. SK</th>
         <th>Pejabat Penetap/NIP</th>
         <th>TMT</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>
            1
         </td>
         <td id="riwayat_unit">
            Fakultas Pertanian
         </td>
         <td>
            <br>
         </td>
         <td>
            <br>
         </td>
         <td>
         </td>
      </tr>
   </tbody>
</table>
														</div>
												</div>
										</div>
									</div>
								</div>

                    </div>



            </div>

        </div>
    </div>
</div>
<!-- end of redha -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Article Manually</h4>
            </div>
            <div class="modal-body">
              <ul class="nav nav-tabs">
								<li class="active"><a href="#journal" data-toggle="tab"> Journal</a></li>
								<li class=""><a href="#conference" data-toggle="tab">Conference</a></li>
								<li class=""><a href="#chapter" data-toggle="tab">Chapter</a></li>
								<li class=""><a href="#bookok" data-toggle="tab">Book</a></li>
								<li class=""><a href="#thesis" data-toggle="tab">Thesis</a></li>
								<li class=""><a href="#patent" data-toggle="tab">Patent</a></li>
								<li class=""><a href="#courtcase" data-toggle="tab">Court Case</a></li>
								<li class=""><a href="#other" data-toggle="tab">Other</a></li>
              </ul>

              <div class="tab-content">
  							<div class="tab-pane fade  active in" id="journal">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<?php  include 'article/journal.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="conference">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<?php  include 'article/conference.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="chapter">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
																	<?php  include 'article/chapter.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="bookok">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
																<?php  include 'article/book.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="thesis">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
															<?php  include 'article/thesis.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="patent">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
																<?php  include 'article/patent.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="courtcase">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
																<?php  include 'article/courtcase.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade " id="other">
									<div class="row">
										<div class="col-md-12">
												<div class="card ">
														<div class="content">
																		<?php  include 'article/other.html';?>
														</div>
												</div>
										</div>
									</div>
								</div>

                    </div>



            </div>

        </div>
    </div>
</div>
			<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
			<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
			<script src="assets/js/bootstrap-notify.js"></script>
			<script src="assets/js/light-bootstrap-dashboard.js"></script>
			<script src="assets/js/sweetalert.min.js"></script>
			<script src="assets/js/notifications.js"></script>

			<script type="text/javascript">
		    	$(document).ready(function(){
						// $('#cari_nama_table').DataTable({
						// 	searching: false,
						// });

		        	$.notify({
		            	icon: 'pe-7s-gift',
		            	message: "Selamat Datang di <b>SISTEM INFORMASI PORTOFOLIO UNIVERSITAS TANJUNGPURA</b> "

		            },{
		                type: 'info',
		                timer: 4000
		            });

		    	});
					$('#addmanually').click(function(){
						$("#myModal").modal('show');
					});


				 $("#form_insert_journal").submit(function(e) {  //journal Section
					 e.preventDefault();
					 swal({
							 title: "Confirm Navigation",
							 text: "Are you sure want to save this article ?",
							 type: "info",
							 showCancelButton: true,
							 closeOnConfirm: false,
							 confirmButtonText: "Yes !",
							 confirmButtonColor: "#59c2e6"
						 },  function() {
						 $.ajax({
							 url: 'insert_article.php',
							 type:'post',
							 data : {
								 'type' : 'Journal',
								 'nip' : $('#nip').text(),
								 'title' :	$('#form_insert_journal #title').val(),
								 'authors' : $('#form_insert_journal #authors').val(),
								 'pdate' : $('#form_insert_journal #pdate').val(),
								 'journal' : $('#form_insert_journal #journal').val(),
								 'volume' : $('#form_insert_journal #volume').val(),
								 'issue' : $('#form_insert_journal #issue').val(),
								 'pages' : $('#form_insert_journal #pages').val(),
								 'publisher' : $('#form_insert_journal #publisher').val()
							 },
							 success : function(r){
									$("#myModal").modal('hide');
								if(r =='1'){
									$.notify({
											icon: 'pe-7s-check',
											message: "Data saved successfully . Status : SUCCESS"

										},{
												type: 'success',
												timer: 4000
										});
										swal("Done!", "Data saved successfully", "success");
								}else {
										swal("Oops!", "Something went wrong", "error");
									$.notify({
											icon: 'pe-7s-bell',
											message: "Oops, Something went wrong . Status : FAILED"

										},{
												type: 'danger',
												timer: 4000
										});
								}
							 }
						 });
			 	 });
				 });


 				 $("#form_insert_conference").submit(function(e) { // conference section
 					 e.preventDefault();

					 $.ajax({
						 url: 'insert_article.php',
						 type:'post',
						 data : {
							 'type' : 'Journal',
							 'title' :	$('#title').val()
						 },
						 success : function(r){
							 console.log(r);
						 }
					 });
 				 });
//redha
				 $("#form_cari_nip").submit(function(e) { //
 					 e.preventDefault();

					 $.ajax({
						 url: 'cari_nip.php',
						 type:'post',
						 data:  new FormData(this),
					   contentType: false,
					   cache: false,
						 dataType: 'json',
						 success : function(data){
							 var table = $('#cari_nama_table').DataTable();
							 table.destroy();
							 	$('#cari_nama_table tbody').empty();
							for (var i = 0; i < data.length; i++) {
								content[i]='<tr>'+
		               '<td> 1</td>'+
		               '<td>'+
		                  '<strong>'+data[i].nama_lengkap+'</strong> (55 th) ('+data[i].JK+') <br>'+
		                  'NIP. <a  onclick="lihatdetail(\''+data[i].nip+'\')">'+data[i].nip+'</a>'+
		               '</td>'+
		               '<td> '+data[i].tempat_lahir+'<br> '+data[i].tgl_lahir+'</td>'+
		               '<td> '+data[i].golongan+'</td>'+
		               '<td>'+data[i].unit_kerja+'</td>'+
		               '<td>Struktural<br>'+data[i].jabatan+' </td>'+
		               '<td>'+data[i].jenjang_tb+'</td>'+
		            '</tr>';
								$('#cari_nama_table tbody').append(content[i]);
							}
							$('#cari_nama_table').DataTable({
								searching: false,
							});
						 }
					 });
 				 });
function lihatdetail(){
	var nip=$('#nip').text();
	$('#myModaldetail').modal('show');
	$.ajax({
		url: 'cari_nip.php',
		type:'post',
		data : {
			'nip' :	nip
		},
		dataType: 'json',
		success : function(data){
			$('#dtl_nama').html(data['nama_lengkap']);
			$('#dtl_tmp_lahir').html(data['tempat_lahir']);
			$('#dtl_tgl_lahir').html(data['tgl_lahir']);
			$('#riwayat_unit').html(data['unit_kerja']);

		}
	});
	var content=[];
	$.ajax({
		url: 'riwayat_pendidikan.php',
		type:'post',
		data : {
			'nip' :	nip
		},
		dataType: 'json',
		success : function(data){
		$('#table_riwayat_pendidikan tbody').empty();
		for (var i = 0; i < data.length; i++) {
			content[i]='<tr>'+
				 '<td>'+(i+1)+'</td>'+
				 '<td>'+
						'<strong>'+data[i].JENJANG+'</strong> </td>'+
				 '<td> '+data[i].PT+'<br> '+data[i].PROD1+'</td>'+
				 '<td>'+data[i].TGL+'</td>'+
			'</tr>';
			$('#table_riwayat_pendidikan tbody').append(content[i]);
		}
		}
	});

	$.ajax({
		url: 'riwayat_pangkat.php',
		type:'post',
		data : {
			'nip' :	nip
		},
		dataType: 'json',
		success : function(data){
		$('#table_riwayat_pangkat tbody').empty();
		for (var i = 0; i < data.length; i++) {
			content[i]='<tr>'+
			'<td>'+(i+1)+'</td>'+
			'<td> </td>'+
			'<td> </td>'+
			'<td>'+data[i].gol+'</td>'+
			'<td>'+data[i].tmt+'</td>'+
			'<td>'+data[i].NO_SK+'</td>'+
			'<td>'+data[i].tahun+'</td>'+
			'<td>'+data[i].bulan+'</td>'+
			'<td> </td>'+
			'</tr>';
			$('#table_riwayat_pangkat tbody').append(content[i]);
		}
		}
	});

}
//end of redha

				 $("#form_insert_chapter").submit(function(e) { // chapter section
						 e.preventDefault();

						 alert($(this).serialize());
					 });

					 $("#form_insert_chapter").submit(function(e) { // chapter section
							e.preventDefault();

							alert($(this).serialize());
						});

						$("#form_insert_chapter").submit(function(e) { // chapter section
								e.preventDefault();

								alert($(this).serialize());
							});
			</script>


</html>
