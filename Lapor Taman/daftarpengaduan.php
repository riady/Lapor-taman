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
												<li class="active"><a href="daftarpengaduan.php">Daftar Pengaduan</a></li>
												<li><a href="manajemenuser.php">Manajemen User</a></li>
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
		<?php
		$db_loc="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="lapor_tamanbdg";
		$kateg=["Kebersihan","Kerusakan Fasilitas","Keamanan"];
		$bulan=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
		
		/*$db = new mysqli($db_loc,$db_user,$db_pass,$db_name);
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = $db->query("SELECT A.*, B.nama FROM `t_adu`  as A JOIN `t_taman` as B on A.id_mengenai=B.id_taman;");
		$sum=mysqli_num_rows($result);*/
		
		mysql_connect($db_loc,$db_user,$db_pass);
		@mysql_select_db($db_name) or die( "Unable to select database");
		$query = "SELECT A.*, B.nama FROM `t_adu`  as A JOIN `t_taman` as B on A.id_mengenai=B.id_taman;";
		$result = mysql_query($query);
		$sum = mysql_numrows($result);
		?>
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<form method="post" action="edit_adu.php">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Daftar <span>Pengaduan</span></h1>
						<div class="space"></div>
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
										if ($sum>0){
											?>
											<input type="hidden" name="sum" id="sum" value="<?php echo $sum; ?>">
											<?php
											//$result = $db->query("SELECT A.*, B.nama FROM `t_adu`  as A JOIN `t_taman` as B on A.id_mengenai=B.id_taman;");
											/*while($res = $result->fetch_array(MYSQLI_ASSOC)){
												$id_adu=$res['id_pengaduan'];
												$tanggal=$res['tanggal'];
												$nama_adu=$res['nama_pengadu'];
												$email_adu=$res['email_pengadu'];
												$nama_taman=$res['nama'];
												$kategori=$res['kategori']-1;
												$konten=$res['konten'];
												$status=$res['status'];*/
											for($i=0 ; $i<$sum ; $i++){
												$id_adu = mysql_result($result,$i,"id_pengaduan");
												$tanggal = mysql_result($result,$i,"tanggal");
												$nama_adu = mysql_result($result,$i,"nama_pengadu");
												$email_adu = mysql_result($result,$i,"email_pengadu");
												$nama_taman = mysql_result($result,$i,"nama");
												$kategori = mysql_result($result,$i,"kategori") -1;
												$konten = mysql_result($result,$i,"konten");
												$status = mysql_result($result,$i,"status");
											?>
											<tr>
											<?php $date=strtotime($tanggal); ?>
											<td><?php echo "".date('j',$date)." ".$bulan[date('n',$date)-1]." ".date('Y',$date); ?></td>
											<td><?php echo $nama_adu; ?></td>
											<td><?php echo $email_adu; ?></td>
											<td><?php echo $nama_taman; ?></td>
											<td><?php echo $kateg[$kategori]; ?></td>
											<td><?php echo mb_strimwidth($konten,0,50,"&hellip;"); ?></td>
											<td>
												<input type="hidden" name="id_adu<?php echo $i; ?>" value="<?php echo $id_adu; ?>">
												<select class="form-control select" name="stats<?php echo $i; ?>">
													<option value="0" <?php echo $status==0?"selected":""; ?>>Belum Verifikasi</option>
													<option value="1" <?php echo $status==1?"selected":""; ?>>Pending</option>
													<option value="2" <?php echo $status==2?"selected":""; ?>>Diproses</option>
													<option value="3" <?php echo $status==3?"selected":""; ?>>Selesai</option>
												</select>
											</td>
											<td>
												<button type="button" class="btn btn-default lapor" data-toggle="modal" data-target="#laporModal<?php echo $id_adu; ?>" data-whatever="">Lapor</button>
												<button type="button" class="btn btn-default detail" data-toggle="modal" data-target="#detailModal<?php echo $id_adu; ?>" data-whatever="">Detail</button>
												<div class="modal fade" id="detailModal<?php echo $id_adu; ?>" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
													<div class="modal-dialog">
													    <div class="modal-content">
													      	<div class="modal-header">
													        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													        	<h4 class="modal-title" id="detailModalLabel">Detail Pengaduan</h4>
													      	</div>
													      	<div class="modal-body">
													        <form>
													          	<!-- <p><?php echo $email_adu; ?></p>-->
													          	<p><?php echo $konten; ?></p>
													          	<div class="modal-footer">
													        		<button type="button" class="btn btn-default batal" data-dismiss="modal" style="margin-left:0px;">Tutup</button>
													      		</div>
													        </form>
													      	</div>
													    </div>
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
											<td>N/A</td>
										<?php } ?>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<input type="submit" value="Simpan" class="btn btn-default">
					</div>
					</form>
				</div>
			</div>
		</div>
		<?php
		if ($sum>0){
			/*$result = $db->query("SELECT A.*, B.nama FROM `t_adu`  as A JOIN `t_taman` as B on A.id_mengenai=B.id_taman;");
			while($res = $result->fetch_array(MYSQLI_ASSOC)){
				$id_adu=$res['id_pengaduan'];
				$tanggal=$res['tanggal'];
				$nama_adu=$res['nama_pengadu'];
				$email_adu=$res['email_pengadu'];
				$nama_taman=$res['nama'];
				$kategori=$res['kategori']-1;
				$konten=$res['konten'];
				$status=$res['status'];*/
			for($i=0 ; $i<$sum ; $i++){
				$id_adu = mysql_result($result,$i,"id_pengaduan");
				$tanggal = mysql_result($result,$i,"tanggal");
				$nama_adu = mysql_result($result,$i,"nama_pengadu");
				$email_adu = mysql_result($result,$i,"email_pengadu");
				$nama_taman = mysql_result($result,$i,"nama");
				$kategori = mysql_result($result,$i,"kategori") -1;
				$konten = mysql_result($result,$i,"konten");
				$status = mysql_result($result,$i,"status");
			?>
				<div class="modal fade" id="laporModal<?php echo $id_adu; ?>" tabindex="-1" role="dialog" aria-labelledby="laporModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="laporModalLabel">Kirim Email Laporan</h4>
							</div>
							<div class="modal-body">
								<p>Anda yakin akan mengirim laporan?</p>
							</div>
							<div class="modal-footer">
							<form method="post" action="sentemail.php">
								<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-left:0px;">Batal</button>
								<input type="hidden" name="id_pengaduan" id="id_pengaduan" value="<?php echo $id_adu; ?>">
								<input type="submit" name="submit" value="Kirim" class="btn btn-default">
							</form>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
		}
		?>
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
