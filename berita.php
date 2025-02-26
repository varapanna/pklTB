<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Berita</h3>
			
			<?php
				$berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
				if(mysqli_num_rows($berita) > 0){
					while($j = mysqli_fetch_array($berita)){
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