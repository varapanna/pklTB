<?php include 'header.php';
 ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Informasi</h3>
			<p> Berikut adalah informasi kegiatan yang telah dan akan berlangsung di Taman Budaya Provinsi Nusa Tenggara Barat </p>
			
			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC");
				if(mysqli_num_rows($informasi) > 0){
					while($p = mysqli_fetch_array($informasi)){
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>'); "width="50%" class="image" >
						</div>

						<div class="thumbnail-text">
							<?= substr($p['judul'], 0, 50) ?>
						</div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
			
		</div>
	</div>

	<?php include 'footer.php'; ?>