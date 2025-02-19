<?php include 'header.php'; ?>
	<?php include 'koneksi.php';

	$query = mysqli_query($conn, "SELECT * FROM pengaturan LIMIT 1");

	if (mysqli_num_rows($query) > 0) {
		$d = mysqli_fetch_object($query);
	} else {
		echo "Data pengaturan tidak ditemukan.";
		exit;
	}
?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Tentang Taman Budaya</h3>
			<img src="uploads/informasi/<?= $d->foto_sekolah ?>" width="50%" class="image">
			<?= $d->tentang_sekolah ?>
		</div>
	</div>

	<?php include 'footer.php'; ?>