
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coder's Guild - HMSI UNAND</title>
	<link rel="icon" href="../favicon.ico" type="image/ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/scrollreveal.min.js"></script>
</head>
<body id="cghmsiua">
	<nav class="navbar navbar-expand-sm fixed-top">
		<div class="container">
			<a href="#cghmsiua" class="navbar-brand navbar-brand-edit" onclick="$('body').animatescroll();">
				<div class="logo-nav"></div>
			</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-edit" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">TENTANG
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-edit" onclick="$('#kompetisi-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">KOMPETENSI
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-edit" onclick="$('#acara-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">ANGGOTA
							<div class="garis" id="br"></div>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link nav-link-edit" onclick="$('#timeline-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">TIMELINE
							<div class="garis" id="br"></div>
						</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link nav-link-edit" onclick="$('#kontak-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});" style="color: #fff;">KONTAK
							<div class="garis" id="br"></div>
						</a>
					</li>
					<li class="nav-item">
						<!-- <a href="https://itfestusu.id/ITFest/signin"><button class="btn px-5 signup">DAFTAR/MASUK</button></a> -->
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header id="about">
		<div class="container">
			<div class="row">
				  <div class="col col-header">
					<h3 class="head">CODER'S GUILD<br>HMSI</h3>
					<h4 class="head-2">Universitas Andalas</h4>
					<div class="row row2">
						<div class="col">
							<a href="http://unand.ac.id" target="_blank"><img src="img/logo/logo-unand.png" alt="codersguild" style="max-height: 100px; margin-right: 30px;"></a>
							<a href="http://hmsiunand.com" target="_blank"><img src="img/logo/logo-hmsi.png" alt="codersguild" style="max-height: 100px; "></a>
						</div>
					</div>
					<button class="btn head1" onclick="$('#about-section').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Tentang</button>
					<!-- <a href="https://itfestusu.id/ITFest/signin"><button class="btn head2">Daftar/Masuk</button></a> -->
				</div>
			</div>
		</div>
	</header>

	<section id="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-test">
					<img class="col-test-img" src="img/logo/logo.png" alt="codersguild">
				</div>
				<div class="col-md-6 col-about-2">
					<div class="garis-text d-none d-lg-block"></div>
					<h2 class="about2">Tentang Coder's Guild</h2>
					<p style="text-indent: 10%">
					Tidak sedikit mahasiswa Sistem Informasi yang mengeluhkan tentang sulitnya belajar Programming. Kesulitan yang dialami mungkin disebabkan kurangnya latihan, referensi yang berkualitas, dan tentunya minat terhadap Programming itu sendiri. Namun, ada juga sebagian mahasiswa yang memiliki minat dan bakat di bidang Programming ini. Sehingga ingin mempelajari Programming lebih mendalam dibanding mahasiswa lainnya.<br></p><p style="text-indent: 10%">Dengan latar belakang tersebut, maka dibentuklah Club Programming dengan nama Coder’s Guild HMSI Unand. Club ini dibentuk pada Hari Jum’at, 26 Oktober 2018 demi menciptakan wadah bagi mahasiswa Sistem Informasi Universitas Andalas untuk mengembangkan minat dan bakatnya dalam bidang Programming. Tujuan akhir dari pembentukan Club ini adalah mendapatkan SDM yang berpengalaman dan berkompetensi dalam bidang Programming serta diharapkan mampu untuk melanjutkan ilmunya kepada mahasiswa atau orang lain di sekitarnya.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="kompetisi-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-kompetisi">
					<center><h1 class="h1-kompetisi">Kompetensi</h1>
					<hr class="hr-kompetisi">
					<p class="p-judul-kompetisi">Kompetensi anggota Coder's Guild</p><br></center>
				</div>
				<div class="card-columns">
					<div class="card">
						<div class="card-body text-center">
							<img src="img/comp/web-dev.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Web App Development</h4>
							<p>Merupakan kemampuan anggota dalam pengembangan aplikasi pada platform web. Yaitu pada bagian back-end dari aplikasi. Kemampuan ini harus dimiliki oleh setiap anggota Coder's Guild divisi Web Programming. Namun tidak menutup kemungkinan bagi anggota divisi Mobile Programming Coder's Guild yang berminat untuk menguasai kemampuan ini dengan syarat harus menguasai bidangnya terlebih dahulu.</p>
							<!-- <a href="https://itfestusu.id/ITFest/kompetisi?k=Competitive Programming"><button class="btn btn-light btn-kompetisi">Read More...</button></a> -->
						</div>
					</div>
					<div class="card" >
						<div class="card-body text-center">
							<img src="img/comp/web-des.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Web Design</h4>
							<p>Merupakan kemampuan anggota dalam pengembangan aplikasi pada platform web. Yaitu pada bagian front-end dari aplikasi. Kemampuan ini harus dimiliki oleh setiap anggota Coder's Guild divisi Web Programming. Namun tidak menutup kemungkinan bagi anggota divisi Mobile Programming Coder's Guild yang berminat untuk menguasai kemampuan ini dengan syarat harus menguasai bidangnya terlebih dahulu.</p>
							<!-- <a href="https://itfestusu.id/ITFest/kompetisi?k=Business IT Case"><button class="btn btn-light btn-kompetisi">Read More...</button></a> -->
						</div>
					</div>
					<div class="card" >
						<div class="card-body text-center">
							<img src="img/comp/mobile.png" alt="" style="max-height: 100px;">
							<h4 class="card-title">Mobile App Development</h4>
							<p>Merupakan kemampuan anggota dalam pengembangan aplikasi pada platform mobile. Anggota dituntut bisa full-stack untuk bidang ini. Kemampuan ini harus dimiliki oleh setiap anggota Coder's Guild divisi Mobile Programming. Namun tidak menutup kemungkinan bagi anggota divisi Web Programming Coder's Guild yang berminat untuk menguasai kemampuan ini dengan syarat harus menguasai bidangnya terlebih dahulu.</p>
							<!-- <a href="https://itfestusu.id/ITFest/kompetisi?k=Business IT Case"><button class="btn btn-light btn-kompetisi">Read More...</button></a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="acara-section">
		<div class="container">
			<div class="row" style="color: white; text-shadow: 1px 1px 1px rgba(0,0,0,.5)">
				<div class="col-md-12 col-acara">
					<center><h1 class="h1-kompetisi">Anggota CG</h1>
					<hr class="hr-kompetisi">
					<p class="p-judul-kompetisi">Inilah Anggota Kami yang diketuai oleh orang yang biasa biasa saja yang bahkan anggotanya lebih sakti dari ketuanya dan ketuanya terpaksa menjadi ketua di klub penuh cinta dan kasih sayang. Namun sekarang rasa terpaksa itu sudah sedikit menghilang karena satu dan lain hal.</p><br></center>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4" style="text-align: center;">
					<h5>Web Division</h5>
					<li>Koordinator - 404 name not found</li>
					<li>Rahma si sekretaris teladan</li>
					<li>Feny si awan kinton</li>
					<li>Rion si anu akut</li>
					<li>Opi si Bulcit</li>
					<li>Albi si komting yg lah mailang2</li>
					<li>apip jongkok</li>
				</div>
				<div class="col-md-4" style="text-align: center;">
					<h5>Mobile Division</h5>
					<li>Koordinator - Ananda Mardhatillah si kampret</li>
					<li>3e5a600e</li>
					<li>Popsicle</li>
					<li>Tipa si anu</li>
					<li>Muti si anu</li>
					<li>Ilham si sesepuh</li>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</section>

	<!-- <section id="timeline-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6"></div>
				<div class="col-md-6 col-timeline">
					<div class="col-timeline">
						<h1 class="h1-timeline">Timeline</h1>
						<p><b>Persiapkan dirimu untuk mengikuti rangkaian acara di ITFest</b></p>
						<hr class="hr-timeline"><br>
					</div>
					<div class="text-timeline">
						<p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>
						<p><b>14 Januari 2019 – 7 Februari 2019</b> Penyisihan I</p>
						<p><b>14 Februari 2019</b> Pengumuman Penyisihan I</p>
						<p><b>15 Februari 2019 – 1 Maret 2019</b> Penyisihan II</p>
						<p><b>7 Maret 2019</b> Pengumuman Finalis</p>
						<p><b>16 Maret 2019</b> Final</p>
						<p><b>17 Maret 2019</b> Acara Puncak ITFest 3.0</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="kontak-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-map">
					<!-- Start Google Map -->
					<section id="mu-google-map">
			      	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3092131339718!2d100.45889341427304!3d-0.9153144355909941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963e1ea631%3A0x452d09b61f76d6ec!2sFakultas+Teknologi+Informasi!5e0!3m2!1sid!2sid!4v1547957484219" width="100%" height="500" frameborder="1" style="border:0" allowfullscreen></iframe>
					</section>
					<!-- End Google Map -->
				</div>
				<div class="col-md-12 col-img-kontak">
					<a href="#"><img class="img-kontak" src="img/sosmed/fb.png" alt="" width="30px"></a>
					<a href="https://www.instagram.com/cghmsiua/"><img class="img-kontak" src="img/sosmed/ig.png" alt="" width="30px"></a>
					<a href="#"><img class="img-kontak" src="img/sosmed/twit.png" alt="" width="30px"></a>
					<a href="https://plus.google.com/u/1/110641560061566284586"><img class="img-kontak" src="img/sosmed/gplus.png" alt="" width="30px"></a>
					<p class="p-footer">©2019 Coder's Guild - HMSI - Universitas Andalas</p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		// Scrolling Effect
	  $(window).on("scroll", function() {
	        if($(window).scrollTop()) {
	              $('nav').addClass('black');
	              $('.logo-nav').addClass('logo-nav-white');
	        }

	        else {
	              $('nav').removeClass('black');
	              $('.logo-nav').removeClass('logo-nav-white');
	        }
	  })
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  	<script src="js/animatescroll.js"></script>
    <script>
		window.sr = ScrollReveal({reset:true});
		sr.reveal('.col-header', {
			duration: 2000,
			origin:'left',
			distance:'200px'
		});
		sr.reveal('.col-test', {
			duration: 2000,
			origin:'left',
			distance:'200px'
		});
		sr.reveal('.col-about-2', {
			duration: 2000,
			delay:500,
			origin:'bottom',
			distance:'200px'
		});
		sr.reveal('.col-kompetisi', {
			duration: 2000,
			origin:'left',
			distance:'200px'
		});
		sr.reveal('.card-columns', {
			duration: 2000,
			delay:500,
			origin:'bottom',
			distance:'100px'
		});
		sr.reveal('.col-acara', {
			duration: 2000,
			origin:'left',
			distance:'200px'
		});
		sr.reveal('.video-content', {
			duration: 2000,
			delay:500,
			origin:'bottom',
			distance:'200px'
		});
		sr.reveal('.col-timeline', {
			duration: 2000,
			origin:'top',
			distance:'100px'
		});
		sr.reveal('.text-timeline', {
			duration: 2000,
			delay:500,
			origin:'left',
			distance:'100px'
		});
	</script>
</body>
</html>
