<?php include 'header.php' ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea[name="keterangan"]', // Target elemen textarea
        menubar: true,           // Menampilkan menu bar
        plugins: 'lists link image table', // Tambahkan plugin tambahan
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        height: 400,             // Tinggi editor
    });
    </script>

    <!-- content -->
    <div class="content">

        <div class="container">

            <div class="box">

                <div class="box-header">
                    Tambah Layanan
                </div>

                <div class="box-body">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama Jurusan" class="input-control" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="input-control" placeholder="Keterangan"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="input-control" required>
                        </div>

                        <button type="button" class="btn" onclick="window.location = 'layanan.php'">Kembali</button>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                    </form>

                    <?php

                        if(isset($_POST['submit'])){

                            // print_r($_FILES['gambar']);

                            $nama 	= addslashes(ucwords($_POST['nama']));
                            $ket 	= addslashes($_POST['keterangan']);

                            $filename 	= $_FILES['gambar']['name'];
                            $tmpname 	= $_FILES['gambar']['tmp_name'];
                            $filesize 	= $_FILES['gambar']['size'];

                            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                            $rename 	= 'layanan'.time().'.'.$formatfile;

                            $allowedtype = array('png', 'jpg', 'jpeg', 'gif');

                            if(!in_array($formatfile, $allowedtype)){

                                echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

                            }elseif($filesize > 1000000){

                                echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

                            }else{

                                move_uploaded_file($tmpname, "../uploads/layanan/".$rename);

                                $simpan = mysqli_query($conn, "INSERT INTO layanan VALUES (
                                        null,
                                        '".$nama."',
                                        '".$ket."',
                                        '".$rename."',
                                        null,
                                        null
                                )");

                                if($simpan){
                                    echo '<div class="alert alert-success">Simpan Berhasil</div>';
                                }else{
                                    echo 'gagal simpan '.mysqli_error($conn);
                                }

                            }

                        }

                    ?>

                </div>

            </div>

        </div>

    </div>

<?php include 'footer.php' ?>