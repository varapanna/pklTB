<?php
include 'koneksi.php'; // File koneksi ke database
include 'header.php'; // Header untuk halaman
?>

<div class="banner" style="background-image: url('uploads/taman budaya.jpg');">
    <div class="banner-text">
        <div class="container">
            <h3>Selamat Datang di Taman Budaya Provinsi Nusa Tenggara Barat</h3>
            <p>Taman Budaya Provinsi Nusa Tenggara Barat</p>
        </div>
    </div>
</div>

<div class="section">
    <div class="container text-center">
        <h3>Sambutan Kepala Taman Budaya Provinsi Nusa Tenggara Barat</h3>
        <img src="uploads/person.png" width="100">
        <!--
        <h4><?= $d->nama_kepsek ?></h4>
        <p><?= $d->sambutan_kepsek ?></p>
        -->
    </div>
</div>

<div class="section" id="layanan">
    <div class="container text-center">
        <h3>Kegiatan Yang Akan Datang</h3>
        <p>Kegiatan yang akan diselenggarakan di Taman Budaya Provinsi NTB</p>

        <?php
            $layanan = mysqli_query($conn, "SELECT * FROM layanan ORDER BY id DESC");
            if(mysqli_num_rows($layanan) > 0){
                while($j = mysqli_fetch_array($layanan)){
        ?>

            <div class="col-4">
                <a href="detail-layanan.php?id=<?= $j['id'] ?>" class="thumbnail-link">
                <div class="thumbnail-box">
                    <div class="thumbail-img" style="background-image: url('assets/<?= $j['gambar'] ?>');">
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

<div class="section">
    <div class="container text-center">
        <h3>Layanan</h3>
        <p>Layanan serta informasi gedung di Taman Budaya Provinsi NTB</p>

        <?php
            $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
            if(mysqli_num_rows($informasi) > 0){
                while($p = mysqli_fetch_array($informasi)){
        ?>

            <div class="col-4">
                <a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
                <div class="thumbnail-box">
                    <div class="thumbail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
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