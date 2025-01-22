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
			<h3 class="text-center">Kontak</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
			</div>

			<div class="box-gmaps">
				<?php if (!empty($d->google_maps)) : ?>
					<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<?php else : ?>
					<p>Lokasi tidak tersedia.</p>
				<?php endif; ?>
			</div>
			
		</div>
	</div>

<?php include 'footer.php'; ?>