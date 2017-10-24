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



        <div class="wrapper wrapper-full-page">

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form id="form_login">
                                    <div class="card card-hidden">
                                        <div class="header text-center">Login untuk dapat mengakses sistem </div>
                                        <div class="content">
                                            <div class="form-group">
                                                <span>NIP</span>
                                                <input type="texr" placeholder="NIP Anda" id="nip" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <span>NIDN</span>
                                                <input type="text" placeholder="NIDN Anda" id="nidn" class="form-control">
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-fill btn-info btn-wd">Login</button>
                                                     <div class="clearfix"></div>
                                        </div>
                                      </br>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>



</body>

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


          					$("#form_login").submit(function(e) { // chapter section
          			 		 e.preventDefault();
                     $.ajax({
                       url: 'loginaksi.php',
                       type:'post',
                       data : {
                         'nip' : $('#form_login #nip').val(),
                         'nidn' : $('#form_login #nidn').val()
                       },
                       success : function(r){

                    console.log(r);
                       }
                     });
          				 });

			</script>


</html>
