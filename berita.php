<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Berita</h3>
			
			<?php
				$layanan = mysqli_query($conn, "SELECT * FROM layanan ORDER BY id DESC");
				if(mysqli_num_rows($layanan) > 0){
					while($j = mysqli_fetch_array($layanan)){
			?>

				<div class="col-4">
					<a href="detail-berita.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/berita/<?= $j['gambar'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= $j['nama'] ?>
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