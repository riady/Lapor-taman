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
												<li class="active"><a href="notifikasi.html">Notifikasi</a></li>
												<li><a href="daftarpengaduan.php">Daftar Pengaduan</a></li>
												<li><a href="manajemenuser.php">Pengaturan</a></li>
												<li><a href="laporan.html">Statistik</a></li>
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
		<?php
		$db_loc="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="lapor_tamanbdg";
		$kateg=["Kebersihan","Kerusakan Fasilitas","Keamanan"];
		$bulan=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
		
		mysql_connect($db_loc,$db_user,$db_pass);
		@mysql_select_db($db_name) or die( "Unable to select database");
		$query = "delimiter ;;
				drop procedure if exists bala;;
				create procedure bala()
				begin
				set @sql = 'select month(tanggal) as Bulan, year(tanggal) as Tahun,';
				-- get the first record
				set @i=0;
				set @j=0;
				set @i=(SELECT min(A.status) FROM (select status from t_adu GROUP BY status) as A);
				-- loop until we have no more records
				WHILE @i is NOT NULL DO
					IF @i>0 THEN
						set @j = (SELECT min(A.kategori) FROM (select kategori from t_adu GROUP BY kategori) as A);
						WHILE @j is NOT NULL DO
							set @sql= CONCAT(@sql,'(select count(*) from t_adu as B',@i,'_',@j,' where month(A.tanggal)=month(B',@i,'_',@j,'.tanggal) and B',@i,'_',@j,'.status=',@i,' and B',@i,'_',@j,'.kategori=',@j,') as total',@i,'_',@j,',');
							set @j=(SELECT min(A.kategori) FROM (select kategori from t_adu WHERE @j < kategori GROUP BY kategori) as A);
						END WHILE;
						set @sql= CONCAT(@sql,'(select count(*) from t_adu as B',@i,' where month(A.tanggal)=month(B',@i,'.tanggal) and B',@i,'.status=',@i,') as total',@i,',');
					END IF;
					-- get the next record
					set @i = (SELECT min(A.status) FROM (select status from t_adu WHERE @i < status GROUP BY status) as A);
				END WHILE;
				set @sql=CONCAT(@sql,'Count(*) as jum from t_adu as A where status > 0 group by month(tanggal);');
				PREPARE stmt FROM @sql;
				EXECUTE stmt;
				end;;";
		mysql_query($query);
		$query = "call bala()";
		$result = mysql_query($query);
		$sum = mysql_numrows($result);
		?>
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Statistik <span>Pengaduan</span></h1>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped">
										<tr>
											<!--<th></th>-->
											<th rowspan="2" class="font-align">Bulan</th>
											<th rowspan="2" class="font-align">Tahun</th>
											<th colspan="3">Belum Diatasi</th>
											<th rowspan="2" class="font-align">Total</th>
											<th colspan="3">Sedang Diatasi</th>
											<th rowspan="2" class="font-align">Total</th>
											<th colspan="3">Sudah Diatasi</th>
											<th rowspan="2" class="font-align">Total</th>
										</tr>
										<tr>
											<!--<th class="font-table"></th>-->
											<th class="font-table">Kebersihan</th>
											<th class="font-table">Fasilitas</th>
											<th class="font-table">Keamanan</th>
											<th class="font-table">Kebersihan</th>
											<th class="font-table">Fasilitas</th>
											<th class="font-table">Keamanan</th>
											<th class="font-table">Kebersihan</th>
											<th class="font-table">Fasilitas</th>
											<th class="font-table">Keamanan</th>
										</tr>
										<?php
										for($i=0 ; $i<$sum ; $i++){
											$tgl_bln = mysql_result($result,$i,"Bulan");
											$tgl_thn = mysql_result($result,$i,"Tahun");
											$tbl_jum = mysql_result($result,$i,"jum");
										?>
										<tr>
											<!--<td>
												<input type="checkbox" id="blankCheckox" value="option1">
											</td>-->
											<td><?php echo $bulan[$tgl_bln-1]; ?></td>
											<td><?php echo $tgl_thn; ?></td>
											<?php 
											for ($ii=1;$ii<4;$ii++){
												for ($ij=1;$ij<=3;$ij++){
													echo "<td>".mysql_result($result,$i,"total".$ii."_".$ij)."</td>";
												}
												echo "<td>".mysql_result($result,$i,"total".$ii)."</td>";
											}
											?>
										</tr>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--<div class="text-center">
						<input type="submit" value="Buat Laporan" class="btn btn-default laporan">
					</div>-->
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

	</body>
</html>
