<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">

			<?php
				$berita 	= mysqli_query($conn, "SELECT * FROM berita WHERE id = '".$_GET['id']."' ");

				if(mysqli_num_rows($berita) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p 			= mysqli_fetch_object($berita);
			?>

			<h3 class="text-center"><?= $p->nama ?></h3>
			<img src="uploads/berita/<?= $p->gambar ?>" width="50%" class="image">
			<?= $p->keterangan ?>
		</div>
	</div>

<?php include 'footer.php'; ?>