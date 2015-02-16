<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Lapor Taman</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top admin">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Lapor Taman</a></div>
								<div class="site-slogan">Web Pengaduan Online Taman <a target="_blank" href="#">Kota Bandung</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<!--<li class="active"><a href="#banner">Beranda</a></li>-->
												<li><a href="notifikasi.html">Notifikasi</a></li>
												<li class="active"><a href="daftarpengaduan.html">Daftar Pengaduan</a></li>
												<li><a href="manajemenuser.html">Manajemen User</a></li>
												<li><a href="berita.html">Berita</a></li>
												<li><a href="index-admin.html">Logout</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Daftar <span>Pengaduan</span></h1>
						<!--<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p>-->
						<div class="space"></div>
						<?php
						$db_loc="localhost";
						$db_user="root";
						$db_pass="";
						$db_name="lapor_tamanbdg";
						$db = new mysqli($db_loc,$db_user,$db_pass,$db_name);
						if (mysqli_connect_errno()){
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$result = $db->query("SELECT * FROM t_adu;");
						$tp2=mysqli_num_rows($result);
						?>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped">
										<tr>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Taman</th>
											<th>Kategori</th>
											<th>Pengaduan</th>
											<th>Status</th>
											<th></th>
										</tr>
										<?php
										if ($tp2>0){
											while($res = $result->fetch_array(MYSQLI_ASSOC)){ ?>
											<tr>
											<td>N/A</td>
											<td><?php echo $res['nama_pengadu']; ?></td>
											<td><?php echo $res['email_pengadu']; ?></td>
											<td><?php echo "Taman"; ?></td>
											<td><?php echo $res['kategori']; ?></td>
											<td><?php echo $res['konten']; ?></td>
											<td>
												<select class="form-control select">
													<option <?php echo $res['status']==0?"selected":""; ?>>Pending</option>
													<option <?php echo $res['status']==1?"selected":""; ?>>Diproses</option>
													<option <?php echo $res['status']==2?"selected":""; ?>>Selesai</option>
												</select>
											</td>
											<td>
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#exampleModal" data-whatever="">Lapor</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<form method="post" action="sentemail.php">
													    <div class="modal-content">
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
													      	</div>
													      	<div class="modal-body">
													        
													          	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Email:</label>
													            	<input type="text" class="form-control" id="email" name="email">
													         	</div>
													         	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Subjek:</label>
													            	<input type="text" class="form-control" id="subjek" name="subjek">
													          	</div>
													          	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
													        
													      	</div>
													      	<div class="modal-footer">
													        	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
													        	<input type="submit" class="btn btn-default" value="Kirim">
													      	</div>
													    </div>
														</form>
													</div>
												</div>
											</td>
												<?php
											}
										} else { ?>
											<tr>
											<td>N/A</td>
											<td>N/A</td>
											<td>N/A</td>
											<td>N/A</td>
											<td>N/A</td>
											<td>Belum ada pengaduan</td>
											<td>N/A<!--status--></td>
										<?php } ?>
											<tr>
											<td>17 Februari 2015</td>
											<td>Fanny Aulia</td>
											<td>fannyaulia@gmail.com</td>
											<td>Jomblo</td>
											<td>Kebersihan</td>
											<td>Banyak sampah plastik berserakan</td>
											<td>
												<select class="form-control select">
											  		<option>Pending</option>
											  		<option selected>Diproses</option>
											  		<option>Selesai</option>
												</select>
											</td>
											<td>
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#exampleModal" data-whatever="">Lapor</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<form method="post" action="sentemail.php">
													    <div class="modal-content">
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
													      	</div>
													      	<div class="modal-body">
													        
													          	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Email:</label>
													            	<input type="text" class="form-control" id="email" name="email">
													         	</div>
													         	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Subjek:</label>
													            	<input type="text" class="form-control" id="subjek" name="subjek">
													          	</div>
													          	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
													        
													      	</div>
													      	<div class="modal-footer">
													        	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
													        	<input type="submit" class="btn btn-default" value="Kirim">
													      	</div>
													    </div>
														</form>
													</div>
												</div>
											</td>
											<tr>
											<td>17 Februari 2015</td>
											<td>Fanny Aulia</td>
											<td>fannyaulia@gmail.com</td>
											<td>Jomblo</td>
											<td>Kebersihan</td>
											<td>Banyak sampah plastik berserakan</td>
											<td>
												<select class="form-control select">
											  		<option>Pending</option>
											  		<option>Diproses</option>
											  		<option>Selesai</option>
												</select>
											</td>
											<td>
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#exampleModal" data-whatever="">Lapor</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
													    <div class="modal-content">
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
													      	</div>
													      	<div class="modal-body">
													        <form>
													          	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Email:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													         	</div>
													         	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Subjek:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													          	</div>
													          	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
													        </form>
													      	</div>
													      	<div class="modal-footer">
													        	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
													        	<button type="button" class="btn btn-default">Kirim</button>
													      	</div>
													    </div>
													</div>
												</div>
											</td>
											<tr>
											<td>17 Februari 2015</td>
											<td>Fanny Aulia</td>
											<td>fannyaulia@gmail.com</td>
											<td>Jomblo</td>
											<td>Kebersihan</td>
											<td>Banyak sampah plastik berserakan</td>
											<td>
												<select class="form-control select">
											  		<option>Pending</option>
											  		<option>Diproses</option>
											  		<option>Selesai</option>
												</select>
											</td>
											<td>
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#exampleModal" data-whatever="">Lapor</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
													    <div class="modal-content">
														
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
													      	</div>
													      	<div class="modal-body">
													        <form>
													          	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Email:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													         	</div>
													         	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Subjek:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													          	</div>
													          	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
													        </form>
													      	</div>
													      	<div class="modal-footer">
													        	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
													        	<button type="button" class="btn btn-default">Kirim</button>
													      	</div>
													    </div>
													</div>
												</div>
											</td>
											<tr>
											<td>17 Februari 2015</td>
											<td>Fanny Aulia</td>
											<td>fannyaulia@gmail.com</td>
											<td>Jomblo</td>
											<td>Kebersihan</td>
											<td>Banyak sampah plastik berserakan</td>
											<td>
												<select class="form-control select">
											  		<option>Pending</option>
											  		<option>Diproses</option>
											  		<option>Selesai</option>
												</select>
											</td>
											<td>-->
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#exampleModal" data-whatever="">Lapor</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog">
													    <div class="modal-content">
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
													      	</div>
													      	<div class="modal-body">
													        <form>
													          	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Email:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													         	</div>
													         	<div class="form-group">
													            	<label for="recipient-name" class="control-label">Subjek:</label>
													            	<input type="text" class="form-control" id="recipient-name">
													          	</div>
													          	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
													        </form>
													      	</div>
													      	<div class="modal-footer">
													        	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
													        	<button type="button" class="btn btn-default">Kirim</button>
													      	</div>
													    </div>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Lapor Taman</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

		<!-- Modal -->
		<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget) // Button that triggered the modal
		  	var recipient = button.data('whatever') // Extract info from data-* attributes
		  	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Kirim Email Laporan')
		  	modal.find('.modal-body input').val()
		})
		</script>

	</body>
</html>
