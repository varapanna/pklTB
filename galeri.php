<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Galeri</h3>
            <p>Koleksi Taman Budaya Provinsi NTB</p>
			
			<?php
				$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
					if(mysqli_num_rows($galeri) > 0){
						while($p = mysqli_fetch_array($galeri)){
			?>

				<div class="col-4">
					<a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/galeri/<?= $p['foto'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= $p['keterangan'] ?>
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