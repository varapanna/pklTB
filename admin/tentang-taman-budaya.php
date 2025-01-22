<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Tentang Taman Budaya
					</div>

					<div class="box-body">

						<?php
							if(isset($_GET['success'])){
								echo "<div class='alert alert-success'>".$_GET['success']."</div>";
							}
						?>
						
						<form action="" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label>Tentang Taman Budaya</label>
								<textarea name="tentang" class="input-control" placeholder="Tentang Taman Budaya" id="keterangan"><?= $d->tentang_sekolah ?></textarea>
							</div>

							<div class="form-group">
								<label>Foto Taman Budaya</label>
								<img src="../uploads/informasi/<?= $d->foto_sekolah ?>" width="200px" class="image">
								<input type="hidden" name="foto_lama" value="<?= $d->foto_sekolah ?>">
								<input type="file" name="foto_baru" class="input-control">
							</div>

							<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$tentang  = addslashes($_POST['tentang']);
								$currdate = date('Y-m-d H:i:s');

								// menampung dan validasi data foto sekolah
								if($_FILES['foto_baru']['name'] != ''){

									$filename 	= $_FILES['foto_baru']['name'];
									$tmpname 	= $_FILES['foto_baru']['tmp_name'];
									$filesize 	= $_FILES['foto_baru']['size'];

									$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
									$rename 	 = 'sekolah'.time().'.'.$formatfile;

									$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

									if(!in_array($formatfile, $allowedtype)){

										echo '<div class="alert alert-error">Format file foto taman budaya tidak diizinkan.</div>';

										return false;

									}elseif($filesize > 1000000){

										echo '<div class="alert alert-error">Ukuran file foto taman budaya tidak boleh lebih dari 1 MB.</div>';

										return false;

									}else{

										if(file_exists("../uploads/informasi/".$_POST['foto_lama'])){

											unlink("../uploads/informasi/".$_POST['foto_lama']);

										}

										move_uploaded_file($tmpname, "../uploads/informasi/".$rename);

									}

								}else{

									$rename 	= $_POST['foto_lama'];

								}

								

								$update = mysqli_query($conn, "UPDATE pengaturan SET
										tentang_sekolah = '".$tentang."',
										foto_sekolah = '".$rename."',
										updated_at = '".$currdate."'
										WHERE id = '".$d->id."'
									");


								if($update){
									echo "<script>window.location='tentang-taman-budaya.php?success=Edit Data Berhasil'</script>";
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