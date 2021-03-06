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
									<li <?php echo $header_i==0?"class=\"active\"":""; ?>><a href="notifikasi.php">Notifikasi</a></li>
									<li <?php echo $header_i==1?"class=\"active\"":""; ?>><a href="daftarpengaduan.php">Daftar Pengaduan</a></li>
									<li <?php echo $header_i==2?"class=\"active\"":""; ?>><a href="manajemenuser.php">Pengaturan</a></li>
									<li <?php echo $header_i==3?"class=\"active\"":""; ?>><a href="laporan.php">Statistik</a></li>
									<li><a href="berita_admin.html">Berita</a></li>
									<li><a href="logout_handler.php">Logout</a></li>
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
