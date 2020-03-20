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
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">PELAJARI TAHURA <b class="fas fa-angle-down"></b></a>
									<div class="dropdown-menu">
										<ul>
											<li><a href="#">SEKILAS TAHURA</a></li>
											<li><a href="#">KONDISI UMUM</a></li>
										</ul>
									</div>
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
									Via <strong>TAMBAKSARI</strong>
								</div>
								<div class="description">
									<p>Jalur pendakian gunung Arjuno-Welirang via Tambaksari bisa disebut juga dengan jalur religi karena terdapat beberapa petilasan dan penginggalan - peninggalan kuno yang dapat ditemukan di jalur pendakian.</p>
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
												<span>Tambak Sari, Kec. Purwodadi, Kab. Pasuruan, Jawa Timur. 67163</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Pendakian Gunung Arjuno via Purwosari adalah salah satu jalur pendakian yang sangat menarik. Suasana mistis dengan berbagai situs peninggalan Kerajaan Majapahit dan tempat-tempat pemujaan bplawisa ditemukan di sepanjang jalur pendakian. Inilah kenapa pendakian Gunung Arjuno via Purwosari disebut sebagai pendakian spiritual.</p>
													<p>Jalur pendakian Gunung Arjuno via Purwosari dimulai dari Desa Tambak Watu, Kecamatan Purwodadi, Kabupaten Pasuruan. Dari Malang bisa dimulai dari Terminal Arjosari menuju pasar Purwosari dengan angkutan umum dan dilanjutkan menuju pos perijinan Dusun Tambak Watu. Rute dari Surabaya bisa menaiki bus tujuan Malang dan turun di kantor penggadaian. Untuk menuju ke basecamp bisa menggunakan ojek yang ada sepanjang malam dengan tarif sekitar Rp. 30.000 (negoisasi) dengan perjalanan kurang lebih 30 menit.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">BASECAMP - POS 1 ONTO BOEGO</strong>
												<span>1 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Pendakian Gunung Arjuno via Puwosari, dari Tambak Watu melanjutkan perjalanan menuju ke Pos 1 dengan jalan yang masih landai dengan pepohonan kopi di sekitar. Banyak persimpangan di jalur menuju pos 1 dan ikutilah pipa air yang ada. Jika tersesat jangan ragu untuk bertanya pada penduduk sekitar yang melintas atau bermalam sampai menunggu pagi. Onto Boego dengan ketinggian 1.300 mdpl merupakan salah satu Situs Pemujaan Sipitual Gunung Arjuno yang bisa pertama ditemui di jalur pendakian.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 1 ONTO BOEGO - POS 2 TAMPUONO</strong>
												<span>1 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>
														Menuju pos 2, jalur pendakian Gunung Arjuno masih berupa tanah padat berkelok dan menanjak. Jalur sudah memasuki hutan dengan pepohonan besar yang rapat. Pos 2 berupa warung untuk melepas lelah dan beberapa gubuk yang biasa digunakan para peziarah.</p>
													<p>
														Gubuk yang berada tepat di pos 2 adalah petilasan Eyang Sekutrem. Di pos 2 ini terdapat Sendang Dewi Kunti untuk mengisi perbekalan air. Untuk menuju ke Sendang Dewi Kunti, ikuti jalan paving ke arah kiri dimana ada beberapa bangunan lagi sebagai tempat pemujaan dan juga gubuk untuk para peziarah.
													</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 2 TAMPUONO - POS 3 EYANG SAKRI</strong>
												<span>10 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Jarak dari pos 2 ke pos 3 tidak jauh, jalan menanjak yang santai akan membawa sampai ke pos 3. Ada papan berisi petunjuk jalan di pertigaan ketika hampir sampai di pos 3, ikuti jalan ke arah jalur pendakian Gunung Arjuno. Ada satu shelter di pos 3 yaitu petilasan Hyang Sakri.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 3 EYANG SAKRI - POS 4 EYANG SEMAR</strong>
												<span>1 Jam 30 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Selepas dari pos 3, jalur pendakian Gunung Arjuno mulai menanjak. Dari trek tanah akan berubah menjadi bebatuan dengan pemandangan alam pegunungan yang cukup indah. Di trek berbatu ini pohon-pohon besar mulai jarang. Sesampainya di atas, jalan mulai landai dan kembali masuk ke hutan dengan pepohonan yang rindang di sekitas jalan setapak.</p>
													<p>Tak jauh di tengah hutan ada sebuah gubuk bernama "Rahayu" yang ditulis dalam aksara jawa. Meski sebagai tempat pemujaan para peziarah, gubuk ini cocok untuk tempat beristirahat karena lokasinya yang cukup teduh, sunyi, dan sejuk.</p>
													<p>Selepas dari gubuk, jalur pendakian Gunung Arjuno tetap menanjak dengan trek berupa tanah padat yang didominasi akar-akar pepohonan dan batu-batu besar. Perjalanan akan sangat menguras tenaga sampai akhirnya menemukan pos 4 dengan beberapa gubuk seperti di pos 2. Di tempat ini juga terdapat sumber air.</p>
													<p>Ada Pondok Konservasi Treppa dan juga gubuk-gubuk lain yang bisa digunakan untuk beristirahat. Di bagian atas ada patung Eyang Semar dan sebuah tempat pemujaan dengan beberapa dupa yang masih tertancap di dekat patung Eyang Semar. Ini adalah Situs Pemujaan Gunung Arjuno yang dipercaya tempat moksa Eyang Semar.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 4 EYANG SEMAR - POS 5 MANGKUTOROMO</strong>
												<span>40 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Perjalanan dari pos 4 ke pos 5 tidak cukup jauh, jalanan berupa tanah menanjak dan berbelok-belok hingga menemukan bangunan candi yang besar dengan punden berundak di bawahnya. Itulah petilasan Mangkutoromo.</p>
													<p>Mangkutoromo adalah tempat camp favorit di sepanjang jalur pendakian Gunung Arjuno via Purwosari. Selain ada sumber air, tempat yang sangat luas dan gubuk untuk bermalam, ada beberapa tanaman yang bisa dimasak seperti paku-pakuan, jamur, dan lain sebagainya.</p>
													<p>Ada Mitos Gunung Arjuno yang perlu diketahui sebelum melanjutkan pendakian, seperti beberapa pantangan yaitu, jika jumlah ganjil maka haruslah membawa tongkat, tidak menggunakan pakaian berwarna merah dan untuk wanita yang sedang haid lebih baik tidak melanjutkan perjalanan. Meski ada beberapa Tips Melakukan Pendakian di Masa Haid, prosedur pendakian Gunung Arjuno via Purwosari melarang hal tersebut karena berhubungan dengan hal mistis.</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 5 MANGKUTOROMO - POS 6 CANDI SEPILAR</strong>
												<span>20 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Selepas dari Mangkutoromo, jalur pendakian Gunung Arjuno berupa punden berundak yang lumayan tinggi dan cukup membuat ngos-ngosan. Sampai diatas akan menjumpai Candi Sepilar yang bentuknya mirip dengan petilasan Mangkutoromo namun lebih kecil.
													</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 6 CANDI SEPILAR - POS 7 JAWA DIPA</strong>
												<span>1 Jam 45 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Trek mulai menanjak di tengah hutan yang didominasi pohon pinus. Tidak ada tempat datar di sepanjang jalur pendakian hingga sampai di Pos 7. Pos 7 - Jawa Dipa, adalah lokasi camp favorit setelah Mangkutoromo. Meski tidak ada sumber air, lokasi ini cukup luas untuk membuat 4-5 tenda. Siapkan stamina di pos Jawa Dipa ini karena selepas Jawa Dipa, trek akan membutuhkan tenaga yang sangat ekstra.
													</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">POS 7 JAWA DIPA - PLAWANGAN</strong>
												<span>3 Jam 30 Menit</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Selepas Jawa Dipa, tidak ada ampun untuk trek yang akan dilalui menuju Plawangan. Trek yang sangat menanjak tanpa bonus di tengah hutan pinus akan sangat melelahkan. Trek tanah yang padat sesekali akan menjadi trek bebatuan dengan kemiringan tinggi. Ini adalah trek terpanjang yang dinamai bukit penyesalan dimana ketika sampai di atas, masih ada bukit yang harus didaki lagi. Ini adalah trek pendakian Gunung Arjuno yang paling menguras tenaga.
													</p>
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<strong class="title">PLAWANGAN - PUNCAK GUNUNG ARJUNO</strong>
												<span>1 Jam</span>
											</a>
											<div class="slide">
												<div class="slide-holder">
													<p>Semakin dekat ke Plawangan, jalur pendakian lumayan landai dan tinggal mengikuti jalur ke kiri memutar bukit hingga sampai di Plawangan. Plawangan adalah pertigaan dimana ada petunjuk arah untuk ke puncak Gunung Arjuno dan jalur Pendakian Gunung Arjuno via Lawang. Ada beberapa tempat datar yang bisa digunakan untuk beristirahat atau membuat tenda kecil maupun shelter, lokasinya ada di sekitar jalur ke arah puncak.
													</p>
													<p>Dari Plawangan ke Puncak Gunung Arjuno, jalur masih menanjak dengan pepohonan cantigi yang mulai mendominasi area. Ada beberapa tikungan dan ikuti jalur ke kanan, ke arah puncak.</p>
													<p>Tidak dibutuhkan waktu lama, ketika sampai pada daerah bebatuan, puncak Ogal Agil sudah nampak dan hanya dibutuhkan waktu sekitar 10 menit mendaki bebatuan hingga sampai di Puncak Gunung Arjuno. Di puncak tampak Gunung Welirang dan juga Gunung Semeru.</p>
												</div>
											</div>
										</li>
									</ol>
									<strong class="header-box" style="margin: 10px 0 0 0">TIPS PENDAKIAN GUNUNG ARJUNO VIA TAMBAKSARI</strong>
									<div class="detail" style="padding: 20px 20px 20px 20px;">
										<ul>
					                        <li>Gunakan Peralatan dan Perlengkapan Mendaki Gunung yang lengkap untuk kenyamanan dan keamanan.</li>
					                        <li>Terdapat air di sepanjang jalur hingga Mangkutoromo, tapi jika musim kemarau, air terbatas dan hanya bisa ditemukan di pos tertentu seperti di Pos 2 - Tampuono dan Mangkutoromo.</li>
					                        <li>Ada warung di Pos 2 - Tampuono, yang cocok untuk beristirahat.</li>
					                        <li>Jangan merusak tempat pemujaan atau situs yang ada di sepanjang jalur pendakian.</li>
					                        <li>Lokasi camp yang strategis adalah di Mangkutoromo karena ada shelter dan sumber air. Tidak ada salahnya jika ingin camp di Jawadwipa untuk mengejar waktu summit.</li>
					                        <li>Hormati peraturan yang ada di sepanjang jalur pendakian, mengingat purwosari adalah jalur pendakian spiritual yang berhubungan dengan hal mistis.</li>
					                        <li>Jika cuaca buruk, segera turun dari puncak karena rawan sambaran petir, atau bisa menunda waktu ke puncak.</li>
					                        <li>Jika ingin lintas jalur, ada sedikit tempat datar di dekat Plawangan untuk mendirikan tenda.</li>
					                    </ul>
									</div>
									<strong class="header-box" style="margin: 10px 0 0 0">SUMBER</strong>
									<div class="detail" style="padding: 20px 20px 20px 20px;">
										<ul>
						                    <li>http://infopendaki.com/jalur-purwosari-pendakian-gunung-arjuno/</li>
						                    <li>https://www.manusialembah.com/2016/01/pendakian-gunung-arjuna-3339-mdpl-via.html</li>
						                </ul>
									</div>
								</div>
								<div class="col-md-6">
									<article class="img-article article-light">
										<div class="img-wrap">
											<img src="../images/jalur/tambaksari.jpg" height="319" width="570" class="zoom" data-magnify-src="../images/jalur/tambaksari.jpg">
										</div>
										<div class="text-block">
											<h3  style="text-align: center;"><a href="#">Peta menuju puncak Arjuno - Welirang via Tambaksari</a></h3>
										</div>
									</article>
								</div>
							</div>
						</div>

						<!-- Map tab content -->
						<div role="tabpanel" class="tab-pane" id="tab02">
							<div class="row">
								<div class="col-md-12">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16776.680907843558!2d112.64717671822577!3d-7.776135590261266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d584ad887a4d%3A0x9194b0e944939cdf!2sPos%20Pendakian%20Gunung%20Arjuno%20Via%20Tambaksari!5e1!3m2!1sen!2sid!4v1582605186530!5m2!1sen!2sid" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
								</div>
							</div>
						</div>

						<!-- gallery tab content -->
						<div role="tabpanel" class="tab-pane" id="tab03">
							<ul class="row gallery-list has-center">
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-06.jpg" title="POS 2 TAMPUONO">
										<span class="img-holder">
											<img src="../images/jalur/img-06.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 2 TAMPUONO</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-07.jpg" title="POS 3 EYANG SAKRI">
										<span class="img-holder">
											<img src="../images/jalur/img-07.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 3 EYANG SAKRI</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-08.jpg" title="POS 4 EYANG SEMAR">
										<span class="img-holder">
											<img src="../images/jalur/img-08.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 4 EYANG SEMAR</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-09.jpg" title="POS 4 EYANG SEMAR">
										<span class="img-holder">
											<img src="../images/jalur/img-09.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 4 EYANG SEMAR</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-10.jpg" title="POS 5 MANGKUTOROMO">
										<span class="img-holder">
											<img src="../images/jalur/img-10.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 5 MANGKUTOROMO</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-11.jpeg" title="POS 6 CANDI SEPILAR">
										<span class="img-holder">
											<img src="../images/jalur/img-11.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 6 CANDI SEPILAR</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-12.jpeg" title="POS 7 JAWA DIPA">
										<span class="img-holder">
											<img src="../images/jalur/img-12.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 7 JAWA DIPA</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-13.jpeg" title="POS 7 JAWA DIPA">
										<span class="img-holder">
											<img src="../images/jalur/img-13.jpeg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">POS 7 JAWA DIPA</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-14.jpg" title="PLAWANGAN">
										<span class="img-holder">
											<img src="../images/jalur/img-14.jpg" height="750" width="450" alt="image description">
										</span>
										<span class="caption">
											<span class="centered">
												<strong class="title">PLAWANGAN</strong>
											</span>
										</span>
									</a>
								</li>
								<li class="col-sm-6">
									<a class="fancybox" data-fancybox-group="group" href="../images/jalur/img-04.jpeg" title="PUNCAK GUNUNG ARJUNO">
										<span class="img-holder">
											<img src="../images/jalur/img-04.jpeg" height="750" width="450" alt="image description">
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
											<strong class="title"><a href="tel:082244737622">Hadi Choirul - 082244737622</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:082245814672">Nur Yusuf - 082245814672</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:085606589978">Talis - 085606589978</a></strong>
										</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="header-box">
										<span class="rate-left">
											<strong class="title"><a href="tel:081331330207">Karyadi - 081331330207</a></strong>
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