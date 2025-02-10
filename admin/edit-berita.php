<?php include 'header.php' ?>

<?php
	$berita	= mysqli_query($conn, "SELECT * FROM berita WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($berita) == 0){
		echo "<script>window.location='berita.php'</script>";
	}

	$p 			= mysqli_fetch_object($berita);
?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Edit Berita
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Berita" value="<?= $p->nama ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Keterangan</label>
								<textarea name="keterangan" class="input-control" placeholder="Keterangan"><?= $p->keterangan ?></textarea>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<img src="../uploads/berita/<?= $p->gambar ?>" width="200px" class="image">
								<input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
								<input type="file" name="gambar" class="input-control">
							</div>

							<button type="button" class="btn" onclick="window.location = 'berita.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$nama 	= addslashes(ucwords($_POST['nama']));
								$ket 	= addslashes($_POST['keterangan']);
								$currdate = date('Y-m-d H:i:s');

								if($_FILES['gambar']['name'] != ''){

									// echo 'user ganti gambar';

									$filename 	= $_FILES['gambar']['name'];
									$tmpname 	= $_FILES['gambar']['tmp_name'];
									$filesize 	= $_FILES['gambar']['size'];

									$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
									$rename 	= 'layanan'.time().'.'.$formatfile;

									$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

									if(!in_array($formatfile, $allowedtype)){

										echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

										return false;

									}elseif($filesize > 1000000){

										echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

										return false;

									}else{

										if(file_exists("../uploads/berita/".$_POST['gambar2'])){

											unlink("../uploads/berita/".$_POST['gambar2']);

										}

										move_uploaded_file($tmpname, "../uploads/berita/".$rename);

									}

								}else{

									// echo 'user tidak ganti gambar';

									$rename 	= $_POST['gambar2'];

								}

								$update = mysqli_query($conn, "UPDATE layanan SET
										nama = '".$nama."',
										keterangan = '".$ket."',
										gambar = '".$rename."',
										updated_at = '".$currdate."'
										WHERE id = '".$_GET['id']."'
									");


								if($update){
									echo "<script>window.location='berita.php?success=Edit Data Berhasil'</script>";
								}else{
									echo 'gagal edit '.mysqli_error($conn);
								}

							}

						?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>