<?php 
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="uploads/informasi/taman budaya.jpg">
	<title>Website Taman Budaya NTB</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

	<!-- box menu mobile -->
	<div class="box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">
                <li><a href="index.php">Beranda</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="informasi.php">Informasi</a></li>
				<li><a href="kontak.php">Kontak</a></li>
		</ul>
	</div>

	<!-- bagian header -->
	<div class="header">

		<div class="container">

			<div class="header-logo">
				<img src="uploads/test/tutwuri.png" width="70">
				<h2>Taman Budaya Provinsi NTB</h2>
			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="informasi.php">Informasi</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>

			<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>

		</div>

	</div>