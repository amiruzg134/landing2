<?php
    include '../config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tahura Raden Soerjo</title>
	<!-- favion -->
	<link rel="icon" type="image/png" sizes="16x16" href="../images/logos/logo-tahura.png">
	<!-- link to font awesome -->
	<link media="all" rel="stylesheet" href="vendors/font-awesome/css/all.css">
	<!-- link to material icon font -->
	<link media="all" rel="stylesheet" href="vendors/material-design-icons/material-icons.css">
	<!-- link to wow js animation -->
	<link media="all" rel="stylesheet" href="vendors/animate/animate.css">
	<!-- include bootstrap css -->
	<link media="all" rel="stylesheet" href="css/bootstrap.css">
	<!-- include owl css -->
	<link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.carousel.css">
	<link media="all" rel="stylesheet" href="vendors/owl-carousel/owl.theme.css">
	<!-- include fancybox css -->
	<link media="all" rel="stylesheet" href="vendors/fancybox/jquery.fancybox.css">
	<!-- include main css -->
	<link media="all" rel="stylesheet" href="css/main.css">
	<!-- link to revolution css  -->
	<link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">
	<!-- link to magnify css  -->
	<link rel="stylesheet" type="text/css" href="vendors/magnify/magnify.css">
	<!-- link to slider css  -->
	<link rel="stylesheet" type="text/css" href="vendors/ionRangeSlider/css/ion.rangeSlider.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
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
						<a href="../index.html">
							<img class="normal" src="../images/logos/logos.svg" alt="Entrada">
							<img class="gray-logo" src="../images/logos/logos-gray.svg" alt="Entrada">
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
									<a href="../index.html">Beranda</a>
								</li>
								<li class="dropdown">
									<a href="../sekilas.html">Pelajari Tahura <b class="fas fa-angle-down"></b></a>
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
										<img src="../images/generic/img-05.jpg" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
								<div class="slide">
									<div class="bg-stretch">
										<img src="../images/generic/img-06.jpeg" alt="image descriprion" height="1104" width="966">
									</div>
								</div>
							</div>
						</div>
						<div class="height col-md-6 text-col">
							<div class="holder">
								<h1 class="small-size">Jalur Pendakian Gunung Arjuno-Welirang</h1>
								<div class="price">
									Via <strong>LAWANG</strong>
								</div>
								<div class="description">
									<p>Jalur pendakian gunung Arjuno-Welirang via Lawang merupakan jalur favorit bagi pendaki running</p>
								</div>
								<ul class="reviews-info">
									<li>
										<div class="info-left">
											<strong class="title">Ulasan</strong>
											<span class="value"><?php $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_nilai) as jumlah FROM rating WHERE via = '$_GET[via]' ")); echo $sql["jumlah"];?> Ulasan</span>
										</div>
										<div class="info-right">
											<div class="star-rating">
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span><span class="icon-star"></span></span>
												<span class="disable"><span class="icon-star"></span></span>
											</div>
											<span class="value"><?php $sql = mysqli_fetch_array(mysqli_query($conn, "SELECT ROUND(AVG(nilai), 2) as nilai FROM rating WHERE via = '$_GET[via]' ")); echo $sql["nilai"];?> / 5</span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Vacation Style</strong>
											<span class="value">Adult Group</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-hiking"></span>
												</li>
												<li>
													<span class="icon icon-mount"></span>
												</li>
												<li>
													<span class="icon icon-camping"></span>
												</li>
											</ul>
											<span class="value">Camping Trek</span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Activity Level</strong>
											<span class="value">Quite Tough</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-level3"></span>
												</li>
												<li>
													<span class="icon icon-level5"></span>
												</li>
												<li>
													<span class="icon icon-level7"></span>
												</li>
											</ul>
											<span class="value">9/10</span>
										</div>
									</li>
									<li>
										<div class="info-left">
											<strong class="title">Group Size</strong>
											<span class="value">Medium Grougs</span>
										</div>
										<div class="info-right">
											<ul class="ico-list">
												<li>
													<span class="icon icon-group-small"></span>
												</li>
												<li>
													<span class="icon icon-group-medium"></span>
												</li>
												<li>
													<span class="icon icon-group-large"></span>
												</li>
											</ul>
											<span class="value">8/10</span>
										</div>
									</li>
								</ul>
								<div class="btn-holder">
									<a target="_blank" href="https://sipenerang.tahuraradensoerjo.or.id" class="btn btn-lg btn-info">REGISTRASI</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="tab-container">
					<nav class="nav-wrap" id="sticky-tab">
						<div class="container">
							<!-- nav tabs -->
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Jalur</a></li>
								<li role="presentation"><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Lokasi</a></li>
								<li role="presentation"><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Galeri</a></li>
								<li role="presentation"><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Ulasan</a></li>
								<li role="presentation"><a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Kontak Basecamp</a></li>
							</ul>
						</div>
					</nav>

					<!-- tab panes -->
					<div class="container tab-content trip-detail">
						<!-- Jalur tab content -->
						<div role="tabpanel" class="tab-pane active " id="tab01">
							<div class="row">
								<div class="col-md-6">
									<ol class="detail-accordion">
										<li>
											<a href="#">
												<strong class="title">JALUR MENUJU BASECAMP</strong>
												<span>Wonorejo, Kec. Lawang, Malang, Jawa Timur 65216</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p style="margin-bottom: 5px">Pendakian Gunung Arjuno via Lawang merupakan pendakian dari sisi sebelah timur yang menyuguhkan pemandangan indah berupa perkebunan teh dan perbukitan di dalam pendakiannya. Rute menuju pos registrasi pendakian Gunung Arjuno via Lawang tidak terlalu sulit. Berikut beberapa rute yang bisa digunakan :</p>
													<ol style="padding-left: 30px">
														<li>
															Dengan kereta api turun di Stasiun Lawang (Malang) - Pasar Lawang - Desa Wonosari. Jika naik bus dari arah Surabaya langsung turun di Pasar Lawang. Bisa ditempuh dengan angkutan umum.
														</li>
														<li>
															Dari arah Malang langsung ke Pasar Lawang atau lewat pangkalan ojek pasar lawang atau di gang Tawangsari. Dari pangkalan ojek yang tepat berada di pinggir jalan utama, basecamp tidak terlampau jauh, sekitar 15 menit.
														</li>
													</ol>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">BASECAMP - POS 1 ALANG-ALANG</strong>
												<span>1 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Dari basecamp yang berada di dekat Perkebunan Teh Wonosari, bisa langsung melanjutkan pendakian menyusuri kebun teh dan pepohonan. Jalan masih landai dan teduh. Pos 1 - Alang-alang, ditandai dengan bangunan kayu terbuka yang cukup lebar untuk beristirahat. Pos 1 berada di perbatasan kebun teh dan jalan masuk ke hutan.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 1 ALANG-ALANG - POS 2 LINCING</strong>
												<span>2 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>
														Tidak lama selepas Pos 1, jalur pendakian Gunung Arjuno via Lawang mulai menanjak dan masuk perkebunan. Jalan setapak berupa tanah keras yang sempit menyerupai kalimati. Pos 2 - Lincing, ditandai dengan shelter kayu, cukup lebar seperti di Pos 1. Di sebelah kanan shelter ada area luas yang cukup untuk 3 tenda isi 4.</p>
													<p>
														Di sebelah kiri shelter ada sebuah jalan setapak kecil menuju ke sumber air. Jalan setapak ini menanjak melewati bebatuan kemudian menurun ke dasar jurang. Membutuhkan waktu sekitar 15 menit untuk menuju sumber air berupa kolam kecil tersebut.k menuju ke Sendang Dewi Kunti, ikuti jalan paving ke arah kiri dimana ada beberapa bangunan lagi sebagai tempat pemujaan dan juga gubuk untuk para peziarah.
													</p>
													<p>
														Di sekitar arah sumber air, ada satu tempat menarik untuk camp, tapi hanya cukup untuk 1 tenda saja. Jika cuaca bagus, melihat perbukitan dan pemandangan kota sambil menyaksikan kembang api tahun baru sangat menarik untuk dicoba. Pemandangan Gunung Semeru juga tampak menjulang di balik perkotaan. Istimewa...
													</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 2 LINCING - POS 3 MAHAPENA</strong>
												<span>3 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Selepas pos 2, jalur kembali menanjak melewati perbukitan indah yang bisa mengobati rasa lelah sejenak. Melewati perbukitan dan savana luas adalah hal yang mengasyikkan dalam perjalanan dari Pos 2 ke Pos 3.</p>
													<p>Ada jalur alternatif dari Pos 2 ke Pos 3, tepatnya di sebelah kanan lahan lapang Pos 2. Jalur setapak yang menurun bisa dicoba bagi yang suka tantangan karena jalurnya lebih ekstrim, lebih menanjak, lebih panjang dan berbatu, sehingga kadang perlu sedikit teknik memanjat.</p>
													<p>Adanya beberapa pohon cemara menandai sudah depat dengan Pos 3. Pos 3 - Mahapena, berupa tanah lapang di atas bebatuan. Tidak ada sumber air di Pos 3, tapi jika musim hujan, bisa menemukan air di tampungan bebatuan.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 3 MAHAPENA - POS 4 GOMBES</strong>
												<span>3 Jam 45 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Ini adalah jalur yang paling melelahkan dan paling menanjak di sepanjang pendakian Gunung Arjuno via Lawang. Trek masih berupa tanah keras di antara pepohonan cemara yang rapat dan tanpa bonus, kecuali berhenti. Pendakian yang panjang ini akan sangat melelahkan karena menuju ke Pos 4 lumayan jauh.</p>
													<p>Pos 4 - Nggombes, berupa tanah lapang di bawah pohon cemara. Di area ini bisa mendirikan 6 tenda isi 4 dan merupakan tempat camp luas terakhir yang nyaman di sepanjang pendakian Gunung Arjuno via Lawang dan tidak ada sumber air.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 4 GOMBES - PLAWANGAN</strong>
												<span>1 Jam 30 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Selepas Pos 4, jalan kembali menanjak dan akan melewati Alas Lali Jiwo. Di sepanjang jalur, vegetasi berupa hutan lumut yang rapat dan lebat. Trek masih berupa tanah keras di jalan setapak sempit. Di sepanjang perjalanan menuju Plawangan, ada beberapa tempat datar yang bisa digunakan untuk camp. Beberapa tempat yang sempit bisa menampung 1 tenda isi 4, itupuk sedikit memaksa. Namun, bisa menjadi alternatif camp darurat.</p>
													<p>Memasuki hutan cemara menandakan sudah dekat ke Plawangan. Plawangan adalah pertemuan jalur pendakian Gunung Arjuno via Lawang dengan Pendakian Gunung Arjuno via Purwosari. Plawangan tepat berada di lereng Gunung Arjuno, sehingga tidak banyak tempat datar di tempat ini. Ada lokasi datar di atas Plawangan yang bisa digunakan untuk beristirahat atau membuat 1 tenda isi 3.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">PLAWANGAN - PUNCAK ARJUNO</strong>
												<span>1 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Dari Plawangan ke puncak Gunung Arjuno, jalur sudah tidak terlalu menanjak dan mulai terbuka dengan pepohonan cantigi yang mendominasi area. Pendakian dilanjutkan dengan memutari lereng Gunung Arjuno hingga sampai di area bebatuan yang menampakkan Puncak Ogal Agil. Tidak dibutuhkan waktu lama untuk menapaki bebatuan besar menuju Puncak Gunung Arjuno.</p>
												</div>
											</div>
										</li>
									</ol>
									<strong class="header-box" style="margin: 10px 0 0 0">TIPS PENDAKIAN GUNUNG ARJUNO VIA LAWANG</strong>
									<div class="detail" style="padding: 20px 20px 20px 20px;">
										<ul>
					                        <li>Gunakan Peralatan dan Perlengkapan Mendaki Gunung yang lengkap untuk kenyamanan dan keamanan.</li>
					                        <li>Bawalah persediaan air yang cukup karena di sepanjang jalur nyaris tidak ada sumber air dan trek sangat menanjak.</li>
					                        <li>Dari basecamp ke Pos 1 bisa numpang di truk pengangkut teh, jika beruntung.</li>
					                        <li>Sebaiknya tidak memulai pendakian malam hari di area kebun teh jika tidak hafal jalur.</li>
					                        <li>Dikenal sebagai gunung yang sakral, hargai mitos-mitos seperti tidak boleh ganjil, menggunakan baju merah dan wanita yang sedang berhalangan (menstruasi) dilarang melakukan pendakian.</li>
					                    </ul>
									</div>
									<strong class="header-box" style="margin: 10px 0 0 0">SUMBER</strong>
									<div class="detail" style="padding: 20px 20px 20px 20px;">
										<ul>
						                    <li>http://infopendaki.com/pendakian-gunung-arjuno-jalur-lawang/</li>
						                    <li>https://www.manusialembah.com/2016/11/pendakian-gunung-arjuno-via-lawang.html</li>
						                </ul>
									</div>
								</div>
								<div class="col-md-6">
									<article class="img-article article-light">
										<div class="img-wrap">
											<img src="../images/jalur/lawang.jpg" height="319" width="570" class="zoom" data-magnify-src="../images/jalur/lawang.jpg">
										</div>
										<div class="text-block">
											<h3  style="text-align: center;"><a href="#">Peta menuju puncak Arjuno - Welirang via Lawang</a></h3>
										</div>
									</article>
								</div>
							</div>
						</div>

						<!-- Map tab content -->
						<div role="tabpanel" class="tab-pane" id="tab02">
							<div class="row">
								<div class="col-md-12">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28213.363097163427!2d112.64659657466036!3d-7.798981554334056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717c6ebae5349fa2!2sPos%20ijin%20pendakian%20Lawang!5e1!3m2!1sen!2sid!4v1582164344324!5m2!1sen!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
								</div>
							</div>
						</div>

						<!-- gallery tab content -->
						<div role="tabpanel" class="tab-pane" id="tab03">
							<ul class="row gallery-list has-center">
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-15.jpeg" title="BASECAMP LAWANG">
										<span class="img-holder">
											<img src="../images/jalur/img-15.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">BASECAMP LAWANG</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-16.jpeg" title="BASECAMP LAWANG">
										<span class="img-holder">
											<img src="../images/jalur/img-16.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">BASECAMP LAWANG</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-17.jpg" title="JALUR KEBUN TEH DAN PEPOHONAN">
										<span class="img-holder">
											<img src="../images/jalur/img-17.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">JALUR KEBUN TEH DAN PEPOHONAN</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-18.jpg" title="POS 1 ALANG-ALANG">
										<span class="img-holder">
											<img src="../images/jalur/img-18.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 1 ALANG-ALANG</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-19.jpg" title="POS 2 LINCING">
										<span class="img-holder">
											<img src="../images/jalur/img-19.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 2 LINCING</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-20.jpeg" title="POS 2 LINCING">
										<span class="img-holder">
											<img src="../images/jalur/img-20.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 2 LINCING</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-21.jpeg" title="POS 3 MAHAPENA">
										<span class="img-holder">
											<img src="../images/jalur/img-21.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 3 MAHAPENA</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-21a.jpg" title="POS 3 MAHAPENA">
										<span class="img-holder">
											<img src="../images/jalur/img-21a.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 3 MAHAPENAA</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-22.jpeg" title="POS 4 NGGOMBES">
										<span class="img-holder">
											<img src="../images/jalur/img-22.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 4 NGGOMBES</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-23.jpeg" title="POS 4 NGGOMBES">
										<span class="img-holder">
											<img src="../images/jalur/img-23.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 4 NGGOMBES</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-24.jpeg" title="PUNCAK GUNUNG ARJUNO">
										<span class="img-holder">
											<img src="../images/jalur/img-24.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">PUNCAK GUNUNG ARJUNO</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-05.jpeg" title="PUNCAK GUNUNG ARJUNO">
										<span class="img-holder">
											<img src="../images/jalur/img-05.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">PUNCAK GUNUNG ARJUNO</strong>
											</span>
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- faq and review tab content -->
						<div role="tabpanel" class="tab-pane " id="tab04">
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
						<div role="tabpanel" class="tab-pane" id="tab05">
							<div class="row">
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:081330787722">Rudiono - 081330787722</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:082231518172">Khairul Anam - 082231518172</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:081331834646">Arif Yuwono - 081331834646</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:082244447790">Roni S. - 082244447790</a></strong>
										</span>
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
	<script src="vendors/jquery/jquery-2.1.4.min.js"></script>
	<!-- external scripts -->
	<script src="vendors/bootstrap/javascripts/bootstrap.min.js"></script>
	<script src="vendors/jquery-placeholder/jquery.placeholder.min.js"></script>
	<script src="vendors/match-height/jquery.matchHeight.js"></script>
	<script src="vendors/wow/wow.min.js"></script>
	<script src="vendors/stellar/jquery.stellar.min.js"></script>
	<script src="vendors/validate/jquery.validate.js"></script>
	<script src="vendors/waypoint/waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
	<script src="vendors/jQuery-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="vendors/fancybox/jquery.fancybox.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jcf/js/jcf.js"></script>
	<script src="vendors/jcf/js/jcf.select.js"></script>
	<script src="js/mailchimp.js"></script>
	<!-- <script src="vendors/retina/retina.min.js"></script> -->
	<script src="vendors/sticky-kit/sticky-kit.js"></script>
	<script src="js/sticky-kit-init.js"></script>
	<script src="vendors/bootstrap-datetimepicker-master/dist/js/bootstrap-datepicker.js"></script>
	<!-- custom jquery script -->
	<script src="js/jquery.main.js"></script>
	<!-- revolution slider plugin -->
	<script type="text/javascript" src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- rs5.0 core files -->
	<script type="text/javascript" src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<!-- revolutions slider script -->
	<script src="js/revolution.js"></script>
	<!-- magnify script -->
	<script src="vendors/magnify/jquery.magnify.js"></script>
	<script src="vendors/magnify/jquery.magnify-mobile.js"></script>
	<!-- ion slider script -->
	<script src="vendors/ionRangeSlider/js/ion.rangeSlider.min.js"></script>

	<script>
        $(document).ready(function() {

        	$('.tampildata').load("tampil.php?via=<?php echo $_GET['via'] ?>");
        	
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
						url: "save.php",
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
							$('.tampildata').load("tampil.php?via=<?php echo $_GET['via'] ?>");
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