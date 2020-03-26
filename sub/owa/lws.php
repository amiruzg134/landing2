<?php
    include '../../config.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loka Wiyata Surya - Tahura Raden Soerjo</title>
    <!-- favion -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/logos/logo-tahura.png">
    <!-- link to font awesome -->
    <link media="all" rel="stylesheet" href="../vendors/font-awesome/css/all.css">
    <!-- link to material icon font -->
    <link media="all" rel="stylesheet" href="../vendors/material-design-icons/material-icons.css">
    <!-- link to wow js animation -->
    <link media="all" rel="stylesheet" href="../vendors/animate/animate.css">
    <!-- include bootstrap css -->
    <link media="all" rel="stylesheet" href="../css/bootstrap.css">
    <!-- include owl css -->
    <link media="all" rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.css">
    <link media="all" rel="stylesheet" href="../vendors/owl-carousel/owl.theme.css">
    <!-- include fancybox css -->
    <link media="all" rel="stylesheet" href="../vendors/fancybox/jquery.fancybox.css">
    <!-- include main css -->
    <link media="all" rel="stylesheet" href="../css/main.css">
    <!-- link to revolution css  -->
    <link rel="stylesheet" type="text/css" href="../vendors/revolution/css/settings.css">
	<!-- link to slider css  -->
	<link rel="stylesheet" type="text/css" href="../vendors/ionRangeSlider/css/ion.rangeSlider.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
</head>
<body class="default-page">
	<div class="preloader" id="pageLoad">
		<div class="holder">
			<div class="coffee_cup"></div>
		</div>
	</div>
	<!-- main wrapper -->
	<div id="wrapper">
		<div class="page-wrapper">
			<!-- main header -->
			<header id="header" class="white-header">
				<div class="container-fluid">
					<!-- logo -->
					<div class="logo">
						<a href="../../index.html">
							<img class="normal" src="../../images/logos/logos.svg" alt="Entrada">
							<img class="gray-logo" src="../../images/logos/logos-gray.svg" alt="Entrada">
						</a>
					</div>
					<!-- main navigation -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- main menu items and drop for mobile -->
						<div class="collapse navbar-collapse" id="nav">
							<!-- main navbar -->
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="../../index.html">Beranda</a>
								</li>
								<li class="dropdown">
									<a href="../../sekilas.html">Pelajari Tahura <b class="fas fa-angle-down"></b></a>
								</li>	
							</ul>
						</div>
					</nav>
				</div>
			</header>

			<!-- main container -->
			<main id="main">
				<!-- main tour information -->
				<section class="container-fluid trip-info">
					<div class="same-height two-columns row">
						<div class="height col-md-6">
							<!-- top image slideshow -->
							<div id="tour-slide">
								<div class="slide">
									<div class="bg-stretch">
										<img src="../../images/owa/owa-lws/img-01.jpg" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
								<div class="slide">
									<div class="bg-stretch">
										<img src="../../images/owa/owa-lws/img-03.jpg" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
							</div>
						</div>
						<div class="height col-md-6 text-col">
							<div class="holder">
								<h1 class="small-size">Loka Wiyata Surya</h1>
								<div class="description">
									<p>Loka Wiyata Surya (LWS) merupakan campground. </p>
								</div>
								<ul class="reviews-info">
									<li style="width: 100%">
										<div class="info-left">
											<strong class="title">Ulasan</strong>
											<span class="value"><?php $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_nilai) as jumlah FROM rating WHERE via = '$_GET[via]' ")); echo $sql["jumlah"];?> Ulasan</span>
										</div>
										<div class="info-right">
											<span class="value"><?php $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT ROUND(AVG(nilai), 2) as nilai FROM rating WHERE via = '$_GET[via]' ")); echo $sql["nilai"];?> / 5</span>
										</div>
                                    </li>
                                    <li style="width: 100%">
                                    	<div class="info-left" style="width: 100%">
											<strong class="title">Harga Tiket Masuk</strong>
											<ul>
												<li>Wisatawan Lokal : Rp. 11.000 / orang</li>
												<li>Wisatawan mancanegara : Rp. - / orang</li>
												<li>Parkir mobil : Rp.  </li>
												<li>Parkir motor : Rp. </li>
											</ul>
										</div>
                                    </li>
                                </ul>
							</div>
						</div>
					</div>
				</section>
				<div class="tab-container">
					<nav class="nav-wrap" id="sticky-tab">
						<div class="container">
							<!-- nav tabs -->
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Gambaran</a></li>
								<li role="presentation"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Pesona Wisata</a></li>
								<li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Lokasi</a></li>
								<li role="presentation"><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Galeri</a></li>
								<li role="presentation"><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Ulasan</a></li>
							</ul>
						</div>
					</nav>

					<!-- tab panes -->
					<div class="container tab-content trip-detail">
						<!-- Jalur tab content -->
						<div role="tabpanel" class="tab-pane" id="tab01">
							<div class="row">
								<div class="col-md-12">
									<ol class="detail-accordion">
										<li>
											<a href="#">
												<strong class="title">GUNUNG PUNDAK</strong>
												<span>&nbsp;</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</li>	
										<li>
											<a href="#">
												<strong class="title">PUTHUK SIWUR</strong>
												<span>&nbsp;</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</li>	
										<li>
											<a href="#">
												<strong class="title">ARBORETUM</strong>
												<span>&nbsp;</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">CAMPING GROUND</strong>
												<span>&nbsp;</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
													quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
													cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
													proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</li>
									</ol>
								</div>
							</div>
						</div>

						<!-- Map tab content -->
						<div role="tabpanel" class="tab-pane" id="tab02">
							<div class="row">
								<div class="col-md-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1247.1944848020707!2d112.5597182456658!3d-7.688082508160164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7879a2730d867d%3A0xb5a4abf2997191df!2sLoka%20Wiyata%20Surya!5e1!3m2!1sid!2sid!4v1582766323750!5m2!1sid!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
							</div>
						</div>

						<!-- gallery tab content -->
						<div role="tabpanel" class="tab-pane" id="tab03">
							<ul class="row gallery-list has-center">
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-02.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-02.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-03.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-03.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-04.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-04.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-05.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-05.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-06.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-06.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-08.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-08.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-09.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-09.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-10.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-10.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../../images/owa/owa-lws/img-11.jpg">
										<span class="img-holder">
											<img src="../../images/owa/owa-lws/img-11.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered"></span>
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- faq and review tab content -->
						<div role="tabpanel" class="tab-pane" id="tab04">
							<div class="row">
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title">Rating</strong>
											<span class="value"><?php $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT ROUND(AVG(nilai), 2) as nilai FROM rating WHERE via = '$_GET[via]' ")); echo $sql["nilai"];?> / 5</span>
										</span>
									</div>
								</div>
								<div class="col-md-7" style="margin-bottom: 20px">
									<div class="comments reviews-body" style="max-height: 600px; overflow: auto;">
										<div class="tampildata"></div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="header-box" >
										<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
										  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
										</div>
										<form method="post" class="form-user" action = "" id="form-user">
											<input type="text" name="via" id="via" hidden value=<?php echo $_GET['via'] ?>>
											<div class="col-md-2">
												<span class="rate-left">
													<strong class="title">Nama</strong>
												</span>
											</div>
											<div class="col-md-10" style="margin-bottom: 10px">
												<input type="text" class="form-control" id="namaUlasan" name="namaUlasan" required>
											</div>
											<div class="col-md-2">
												<span class="rate-left">
													<strong class="title">Email</strong>
												</span>
											</div>
											<div class="col-md-10" style="margin-bottom: 10px">
												<input type="email" class="form-control" id="emailUlasan" name="emailUlasan" required>
											</div>
											<div class="col-md-2">
												<span class="rate-left">
													<strong class="title">Ulasan</strong>
												</span>
											</div>
											<div class="col-md-10" style="margin-bottom: 10px">
												<textarea rows="5" class="form-control" id="ulasan" name="ulasan" required></textarea>
											</div>
											<div class="col-md-2">
												<span class="rate-left">
													<strong class="title">Nilai</strong>
												</span>
											</div>
											<div class="col-md-10" style="margin-bottom: 10px">
												<input type="text" class="js-range-slider" value="" />
												<input type="hidden" class="js-input-from form-control" value="0" id="slider" />
											</div>
											<a class="btn btn-default tombol-simpan" style="float: right; padding: 10px; margin: 30px 0 0 0" id="simpan"> KIRIM </a>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- kontak tab content -->
						<div role="tabpanel" class="tab-pane active" id="tab05">
							<div class="row">
								<div class="col-md-12">
									<strong class="header-box" style="text-align: center;">LETAK GEOGRAFIS</strong>
									<div class="detail">
										<p>Areal blok pemanfaatan Loka Wiyata Surya merupakan bagian kawasan Taman Hutan Raya Raden Soerjo seluas ± 28,9 hektar berada pada 7° 41’ 15,384” – 7° 41’ 33,850” LS dan 112° 33’ 24,864” – 112° 33’ 49,309” BT, terletak di wilayah Kabupaten Mojokerto Kecamatan Pacet Desa Claket. Areal ini memiliki topografi datar, landai dan curam. Pada areal datar dan landai sangat strategis untuk pembangunan sarana dan prasarana kegiatan pariwisata alam.ratif berada di Desa Tulungrejo Kecamatan Bumiaji Kota Batu, Lokasi tersebut berada pada ketinggian 1.800 mdpl.</p>
									</div>
								</div>
								<div class="col-md-12" style="margin-top: 20px">
									<div class="detail">
										<p>Yang menjadikan Loka Wiyata Surya menarik untuk di kunjungi karena kawasan ini memiliki keindahan alam yang asri dan udara yang sejuk, terdapat air terjun banyu adem, air terjun slumprit, dan camping ground, taman rusa, dan arboretum. Aktifitas yang dapat dilakukan yakni Pendakian gunung Pundak, Family camping, Bina cinta alam / outbound, Fun hiking, Forest bathing.</p>
										<p>Ada berbagai jenis flora yang berada di Bumi Perkemahan Pacet dimana pada area ini flora yang mendominasi yaitu jenis Tutup seperti (Macaranga gigantea), jenis lainnya yaitu Suren (Tona sureni), Maesopsis (Maesopsis eminii), Sengon (Albizia falcataria), Anggrung (Trema orientalis), Gmelina (Gmelina arborea), Pinus (Pinus merkusii), Kopel, Cemara Gunung (Casuarina junghuniana), Pakis aji (Cycas rumphii), Cembirit (Tabernaemontana macrocarpa) dengan tutupan lahan ± 85%. Satwa yang sering dijumpai yaitu Kijang (Muntiacus muntjak), Rusa Timor (Cervus timorensis), Ayam hutan (Galus sp) dan Monyet ekor panjang (Macaca fascicularis).</p>
										<p>OWA Loka Wiyata Surya merupakan kawasan wisata edukasi untuk pengenalan ekosistem hutan pegunungan beserta flora dan fauna, sambil menikmati udara bersih dan segar yang menyehatkan. Selain sebagai lokasi wisata edukasi juga terdapat wisata pendakian jalur menuju Gunung Pundak dengan ketinggian 1.585 mpdl dan Puthuk Pulosari.</p>
										<p>Pendakian menuju Gunung Pundak sangat cocok untuk pendaki pemula dan keluarga. Karena jalurnya yang pendek dan tidak terjal sehingga mudah untuk ditaklukkan oleh pendaki segala usia. Gunung Pundak merupakan anak dari Gunung Welirang. Gunung Pundak memungkinkan pendaki untuk menikmati suasana terbit dan tenggelamnya matahari di ketinggian. Di puncak Gunung Pundak dapat pula dilakukan aktifitas camping. Selain wisata pendakian, dapat pula menikmati keindahan pemandangan wisata air terjun saat musim penghujan (Air Terjun Banyu Adem dan Selumprit). Fasilitas yang terdapat pada OWA Loka Wiyata Surya antara lain: musholla, toilet, gazebo, camping ground, cottage, pendopo, arboretum, taman rusa, jalan hutan, tempat parkir dan kantin.</p>
										<p>OWA Loka Wiyata Surya sebelumnya dinamakan Objek Wisata Alam Budhuk Gede, karena lokasinya yang berada pada blok Budhuk Gede. Dengan kondisi tegakan hutan yang alami dengan stratifikasi tajuk yang bertingkat membuat kawasan ini kaya akan oksigen (O2) yang bermanfaat untuk kesehatan dan melakukan aktifitas forest bathing dan menikmati atraksi satwa. Objek wisata Loka Wiyata Surya sangat cocok juga untuk kegiatan gathering, outbound, fun hiking, dan camping ceria bersama keluarga. Tersedia toilet dan air bersih yang memadai serta lapangan parkir yang luas dan penjagaan 24 jam</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>

		<!-- main footer -->
		<footer id="footer">
			<div class="container">
				<!-- footer links -->
				<div class="row footer-holder">
					<nav class="col-sm-4 col-lg-3 footer-nav active">
						<h3>ALAMAT KANTOR</h3>
						<ul class="slide">
							<li>Jl. Simpang Panji Suroso No.144, Arjosari, Kec. Blimbing, Kota Malang, Jawa Timur 65126</li>
						</ul>
					</nav>
					<nav class="col-sm-4 col-lg-3 footer-nav">
						<h3>JAM OPERASIONAL</h3>
						<ul class="slide">
							<li>Senin - Kamis, 07.00 - 15.30</li>
							<li>Jumat, 07.00 - 14.30</li>
						</ul>
					</nav>
					<nav class="col-sm-4 col-lg-3 footer-nav">
						<h3>KONTAK KAMI</h3>
						<ul class="slide">
							<li>Telp: (0341) – 483254</li>
							<li>tahuraradensoerjo@gmail.com</li>
						</ul>
					</nav>
					<nav class="col-sm-4 col-lg-3 footer-nav">
						<h3>WEBSITE</h3>
						<ul class="slide">
							<li><a href="https://tahuraradensoerjo.or.id">www.tahuraradensoerjo.or.id</a></li>
						</ul>
					</nav>
				</div>
				<!-- social wrap -->
				<ul class="social-wrap">
					<li class="facebook">
						<a target="_blank" href="https://instagram.com/tahuraradensoerjo.official?igshid=1lwx5yb6lhu3b">
							<span class="fab fa-instagram fa-3x"></span>
							<strong class="txt">Follow Us</strong>
						</a>
					</li>
					<li class="twitter">
						<a target="_blank" href="https://www.youtube.com/channel/UCl0gtcFpoFrQY6MU50tqC4Q?view_as=subscriber">
							<span class="fab fa-youtube fa-3x"></span>
							<strong class="txt">Subscribe Us</strong>
						</a>
					</li>
					<li class="twitter">
						<a target="_blank" href="mailto:tahuraradensoerjo@gmail.com?Subject=Hello">
							<span class="fas fa-envelope fa-3x"></span>
							<strong class="txt">Mail Us</strong>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<!-- copyright -->
							<strong class="copyright"><i class="fa fa-copyright"></i> Copyright 2020 - UPT Tahura Raden Soerjo - by Amiruzzuhhad Gunes</strong>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- scroll to top -->
	<div class="scroll-holder text-center">
		<a href="javascript:" id="scroll-to-top"><i class="fas fa-angle-down"></i></a>
	</div>
        <!-- jquery library -->
    <script src="../vendors/jquery/jquery-2.1.4.min.js"></script>
    <!-- external scripts -->
    <script src="../vendors/bootstrap/javascripts/bootstrap.min.js"></script>
    <script src="../vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="../vendors/match-height/jquery.matchHeight.js"></script>
    <script src="../vendors/wow/wow.min.js"></script>
    <script src="../vendors/stellar/jquery.stellar.min.js"></script>
    <script src="../vendors/validate/jquery.validate.js"></script>
    <script src="../vendors/waypoint/waypoints.min.js"></script>
    <script src="../vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="../vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="../vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="../vendors/fancybox/jquery.fancybox.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../vendors/jcf/js/jcf.js"></script>
    <script src="../vendors/jcf/js/jcf.select.js"></script>
    <script src="../js/mailchimp.js"></script>
    <!-- <script src="vendors/retina/retina.min.js"></script> -->
    <script src="../vendors/sticky-kit/sticky-kit.js"></script>
    <script src="../js/sticky-kit-init.js"></script>
    <script src="../vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
    <!-- custom jquery script -->
    <script src="../js/jquery.main.js"></script>
    <!-- revolution slider plugin -->
    <script type="text/javascript" src="../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- rs5.0 core files -->
    <script type="text/javascript" src="../vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="../vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <!-- revolutions slider script -->
    <script src="../js/revolution.js"></script>
    <!-- magnify script -->
    <script src="../vendors/magnify/jquery.magnify.js"></script>
    <script src="../vendors/magnify/jquery.magnify-mobile.js"></script>
    <!-- ion slider script -->
    <script src="../vendors/ionRangeSlider/js/ion.rangeSlider.min.js"></script>

	<script>
        $(document).ready(function() {

        	$('.tampildata').load("../tampil.php?via=<?php echo $_GET['via'] ?>");
        	
         	$('.zoom').magnify();

         	var $range = $(".js-range-slider"),
			    $inputFrom = $(".js-input-from"),
			    $inputTo = $(".js-input-to"),
			    instance,
			    min = 0,
			    max = 1000000,
			    from = 0,
			    to = 0;

			$range.ionRangeSlider({
			    
			    min: 1,
			    max: 5,
			    from: 4,
			    onStart: updateInputs,
			    onChange: updateInputs,
			    step: 0.1,
			    prettify_enabled: true,
				force_edges: true,
				grid: true
			});

			instance = $range.data("ionRangeSlider");

			function updateInputs (data) {
			    from = data.from;
			    to = data.to;
			    
			    $inputFrom.prop("value", from);
			    $inputTo.prop("value", to); 
			}

			$inputFrom.on("input", function () {
			    var val = $(this).prop("value");
			    
			    // validate
			    if (val < min) {
			        val = min;
			    } else if (val > to) {
			        val = to;
			    }
			    
			    instance.update({
			        from: val
			    });
			});

			$inputTo.on("input", function () {
			    var val = $(this).prop("value");
			    
			    // validate
			    if (val < from) {
			        val = from;
			    } else if (val > max) {
			        val = max;
			    }
			    
			    instance.update({
			        to: val
			    });
			});	


	        $(".tombol-simpan").click(function(){
				// var data = $('.form-user').serialize();
				var nama 	= $('#namaUlasan').val();
				var email 	= $('#emailUlasan').val();
				var ulasan 	= $('#ulasan').val();
				var via 	= $('#via').val();
				var slider 	= $('#slider').val();
				if(nama!="" && email!="" && ulasan!="" && via!=""){
					$.ajax({
						type: 'POST',
						url: "../save.php",
						data: {
							nama: nama,
							email: email,
							ulasan: ulasan,
							via: via,
							slider: slider				
						},
						success: function() {
							$("#simpan").removeAttr("disabled");
							$("#form-user").trigger("reset");
							$("#success").show();
							$('#success').html('Ulasan telah terkirim');  
							$('.tampildata').load("../tampil.php?via=<?php echo $_GET['via'] ?>");
						}
					});
				}
				else{
					alert('Harap isi semua kolom!');
				}
			});
        });
    </script>

</body>
</html>