<?php
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="../uploads/identitas/<?= $d->favicon ?>">
		<title>Panel Admin - <?= $d->nama ?></title>
		<link rel="stylesheet" type="text/css" href="../assets/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="../tinymce/tinymce.min.js"></script>
		<script>
		tinymce.init({
			selector: '#keterangan', // Target elemen textarea
			menubar: true,           // Menampilkan menu bar
			plugins: 'lists link image table', // Tambahkan plugin tambahan
			toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			height: 400,             // Tinggi editor
		});
		</script>

	</head>

	<body class="bg-light">

		<!-- navbar -->
		<div class="navbar">

			<div class="container">

				<!-- navbar brand -->
				<h2 class="nav-brand float-left"><a href="index.php"><?= $d->nama ?></a></h2>

				<!-- navbar menu -->
				<ul class="nav-menu float-left">
					<li><a href="index.php">Dashboard</a></li>

					<?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

						<li><a href="pengguna.php">Pengguna</a></li>

					<?php }elseif($_SESSION['ulevel'] == 'Admin'){ ?>

						<li><a href="layanan.php">Layanan</a></li>
						<li><a href="galeri.php">Galeri</a></li>
						<li><a href="informasi.php">Informasi</a></li>
						<li><a href="berita.php">Berita</a></li>
						<li>
							<a href="#">Pengaturan <i class="fa fa-caret-down"></i></a>

							<!-- sub menu -->
							<ul class="dropdown">
								<li><a href="identitas-taman-budaya.php">Identitas Taman Budaya</a></li>
								<li><a href="tentang-taman-budaya.php">Tentang Taman Budaya</a></li>
								<li><a href="kepala-taman-budaya.php">Kepala Taman Budaya</a></li>
							</ul>
						</li>

					<?php } ?>

					<li>
						<a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="ubah-password.php">Ubah Password</a></li>
							<li><a href="logout.php">Keluar</a></li>
						</ul>
					</li>
				</ul>

				<div class="clearfix"></div>
			</div>

		</div>