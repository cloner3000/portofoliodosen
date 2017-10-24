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
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
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
                              <p><b>NIP = <span id="nip">15185888888 </span></b></p>
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

								<div class="btn btn-info btn-fill" id="addmanually">Add Article Manually</div>
							</br>
						</br>
								<div class="tab-content">

									<div class="row">
												<div class="col-md-12">
														<div class="card ">
									<table class="table table-hover table-bordered">
										<thead>
												<tr>
														<th ><center>No.</center></th>
														<th><center>Type</center></th>
														<th><center>Title</center></th>

												</tr>
										</thead>

										<tbody class="displaydataarticle"> </tbody>
									</table>


						</div>
					</div>
				</div>
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
			<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
			<script src="assets/js/bootstrap-notify.js"></script>
			<script src="assets/js/light-bootstrap-dashboard.js"></script>
			<script src="assets/js/sweetalert.min.js"></script>

			<script type="text/javascript">
		    	$(document).ready(function(){
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









			</script>
			<script src="assets/custom.js">
			</script>
			<!-- <script src="assets/journal.js"></script>  // in case
			<script src="assets/conference.js"></script>
			<script src="assets/chapter.js"></script>
			<script src="assets/book.js"></script>
			<script src="assets/thesis.js"></script>
			<script src="assets/patent.js"></script>
			<script src="assets/courtcase.js"></script>
			<script src="assets/other.js"></script> -->

</html>
