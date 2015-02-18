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
			<?php $header_i=0;include 'header.php'; ?>
		</header>
		<!-- header end -->

		<!-- section start -->
		<!-- ================ -->
		<?php
			mysql_connect("localhost","root","");
			@mysql_select_db("lapor_tamanbdg") or die( "Unable to select database");
			$query = "SELECT * FROM t_notif WHERE status=0";
			$result = mysql_query($query);
			$jumnotif = mysql_numrows($result);
		?>
		
		
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center admin">Notifikasi <span>Pengaduan</span></h1>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped">
										
										<tr>
											<th>Tanggal</th>
											<th>Notifikasi</th>
										</tr>
										
										<?php 
											if($jumnotif>0){												
												for($i = 0 ;$i<$jumnotif;$i++){
													$tanggal = mysql_result($result,$i,"tanggal");
													$konten = mysql_result($result,$i,"konten");
													echo "<tr>";
													echo "<td>".$tanggal."</td>";
													echo "<td>".$konten."</td>";
													echo "</tr>";
												}
												$query = "UPDATE t_notif SET status=1";
												mysql_query($query);
											}
											else{?>
												<tr>
													<td>N/A</td>
													<td>Belum ada notifikasi</td>
												</tr>
												
											<?php
												
											}
										?>
										
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
			<?php include 'footer.html'; ?>
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
