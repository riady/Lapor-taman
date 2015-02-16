<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<?php 
	mysql_connect("localhost","root","");
	@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
	$query = "SELECT * FROM t_admin";
	$result = mysql_query($query);
	$jumuser = mysql_numrows($result);
?>
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
												<li><a href="daftarpengaduan.html">Daftar Pengaduan</a></li>
												<li class="active"><a href="manajemenuser.html">Pengaturan</a></li>
												<li><a href="berita_admin.html">Berita</a></li>
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
		<div class="section pengaturan-user clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Manajemen <span>User</span></h1>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped">
										
										<tr>
											<th></th>
											<th></th>
											<th>ID</th>
											<th>Nama</th>
											<th>Username</th>
											<th>Password</th>
											<th>Alamat</th>
											<th>Email</th>
											<th>Telpon</th>
										</tr>
										<tr>
											<?php 
											for($i=0 ; $i<$jumuser ; $i++){
											?>
												<td>
													<input type="checkbox" id="blankCheckox" value="option1">
												</td>
												<td>
													<a href="#" data-toggle="modal" data-target="#editModal" data-whatever="">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
													</a>
												</td>
											<?php
												$id = mysql_result($result,$i,"id_admin");
												$nama = mysql_result($result,$i,"nama");
												$username = "dummy";
												$password = "dummy";
												$alamat = mysql_result($result,$i,"alamat");
												$email = mysql_result($result,$i,"email");
												$telpon = mysql_result($result,$i,"no_tlp");
												echo '<td>'.$id.'</td>';
												echo '<td>'.$nama.'</td>';
												echo '<td>'.$username.'</td>';
												echo '<td>'.$password.'</td>';
												echo '<td>'.$alamat.'</td>';
												echo '<td>'.$email.'</td>';
												echo '<td>'.$telpon.'</td>';
												echo '</tr>';
											}
											?>
											
									</table>
									<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
					  					<div class="modal-dialog">
					    					<div class="modal-content">
					      						<div class="modal-header">
					        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        						<h4 class="modal-title" id="editModalLabel">Edit User</h4>
					      						</div>
					      						<div class="modal-body">
					        						<form>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Nama:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											         	</div>
											         	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Username:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Password:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Ulangi Password:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Alamat:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Email:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
											          	<div class="form-group">
											            	<label for="recipient-name" class="control-label">Telpon:</label>
											            	<input type="text" class="form-control" id="recipient-name">
											          	</div>
					        						</form>
					      						</div>
					      					<div class="modal-footer">
					        					<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
					        					<button type="button" class="btn btn-default">Simpan</button>
					      					</div>
					    					</div>
					  					</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<input type="submit" value="Hapus" class="btn btn-default hapus">
						<button type="button" class="btn btn-default tambah" data-toggle="modal" data-target="#tambahModal" data-whatever="">Tambah User</button>
					</div>
					<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="tambahModalLabel">Tambah User</h4>
					      </div>
					      <div class="modal-body">
					        <form>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Nama:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					         	</div>
					         	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Username:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Password:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Ulangi Password:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Alamat:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Email:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					          	<div class="form-group">
					            	<label for="recipient-name" class="control-label">Telpon:</label>
					            	<input type="text" class="form-control" id="recipient-name">
					          	</div>
					        </form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
					        <button type="button" class="btn btn-default">Simpan</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section pengaturan-taman clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Manajemen <span>Taman</span></h1>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped">
										<tr>
											<th style="width:4%"></th>
											<th style="width:4%"></th>
											<th style="width:13%">ID Taman</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Admin</th>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>
											<td>
												<a href="#" data-toggle="modal" data-target="#edit-tamanModal" data-whatever="">
													<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
												</a>
											</td>
											<td>Tmn01</td>
											<td>Pasupati</td>
											<td>Jl. Pasupati 1</td>
											<td>Adm01</td>
										</tr>
									</table>
									<div class="modal fade" id="edit-tamanModal" tabindex="-1" role="dialog" aria-labelledby="edit-tamanModalLabel" aria-hidden="true">
					  					<div class="modal-dialog">
					    					<div class="modal-content">
					      						<div class="modal-header">
					        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        						<h4 class="modal-title" id="edit-tamanModalLabel">Edit User</h4>
					      						</div>
					      						<div class="modal-body">
					        						<form>
											          	<div class="form-group">
											            	<label for="nama-taman" class="control-label">Nama:</label>
											            	<input type="text" class="form-control">
											         	</div>
											         	<div class="form-group">
											            	<label for="alamat-taman" class="control-label">Alamat:</label>
											            	<input type="text" class="form-control">
											          	</div>
											          	<div class="form-group">
											            	<label for="admin-taman" class="control-label">Admin:</label>
											            	<input type="text" class="form-control">
											          	</div>
					        						</form>
					      						</div>
					      					<div class="modal-footer">
					        					<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
					        					<button type="button" class="btn btn-default">Simpan</button>
					      					</div>
					    					</div>
					  					</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<input type="submit" value="Hapus" class="btn btn-default hapus">
						<button type="button" class="btn btn-default tambah" data-toggle="modal" data-target="#tambah-tamanModal" data-whatever="">Tambah Taman</button>
					</div>
					<div class="modal fade" id="tambah-tamanModal" tabindex="-1" role="dialog" aria-labelledby="tambah-tamanModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="tambah-tamanModalLabel">Tambah Taman</h4>
					      </div>
					      <div class="modal-body">
					        <form>
					          	<div class="form-group">
					            	<label for="nama-taman" class="control-label">Nama:</label>
					            	<input type="text" class="form-control" id="nama-taman">
					         	</div>
					         	<div class="form-group">
					            	<label for="alamat-taman" class="control-label">Alamat:</label>
					            	<input type="text" class="form-control" id="alamat-taman">
					          	</div>
					          	<div class="form-group">
					            	<label for="admin" class="control-label">Admin:</label>
					            	<input type="text" class="form-control" id="admin-taman">
					          	</div>
					        </form>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
					        <button type="button" class="btn btn-default">Simpan</button>
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
		$('#tambahModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget) // Button that triggered the modal
		  	var recipient = button.data('whatever') // Extract info from data-* attributes
		  	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Tambah User')
		  	modal.find('.modal-body input').val()
		})
		</script>

		<script>
		$('#editModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget) // Button that triggered the modal
		  	var recipient = button.data('whatever') // Extract info from data-* attributes
		  	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Edit User')
		  	modal.find('.modal-body input').val()
		})
		</script>

		<script>
		$('#edit-tamanModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget) // Button that triggered the modal
		  	var recipient = button.data('whatever') // Extract info from data-* attributes
		  	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Edit Taman')
		  	modal.find('.modal-body input').val()
		})
		</script>

		<script>
		$('#tambah-tamanModal').on('show.bs.modal', function (event) {
		  	var button = $(event.relatedTarget) // Button that triggered the modal
		  	var recipient = button.data('whatever') // Extract info from data-* attributes
		  	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  	var modal = $(this)
		  	modal.find('.modal-title').text('Tambah Taman')
		  	modal.find('.modal-body input').val()
		})
		</script>

	</body>
</html>
