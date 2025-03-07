-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 01:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'galeri1630509922.jpg', 'Kegiatan Belajar Mengajar', '2021-09-01 15:25:22', NULL),
(2, 'galeri1630510007.jpg', 'Lomba Mekanik Nasional', '2021-09-01 15:26:47', NULL),
(3, 'galeri1630510415.jpg', 'Acara Wisuda Angkatan 2012', '2021-09-01 15:33:35', NULL),
(4, 'galeri1630510443.jpg', 'Foto Bersama TOSM1', '2021-09-01 15:34:03', NULL),
(5, 'galeri1630510466.jpg', 'Berani Kotor Itu Baik', '2021-09-01 15:34:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Pengumuman Tanggal 1 September Dibagi Raport', '<p>untuk para siswa/i harap hadir dalam cara pembagian raport, jangan lupa membawa orang tua atau wali masing-masing</p>', 'informasi1630510538.jpg', '2021-09-01 15:35:38', '2021-09-01 22:40:26', 2),
(2, 'PPDB Akan Dibuka Pada Tanggal 2 September 2021', '<p>Penerimaan Peserta Didik Baru akan dibuka pada tanggal 2 September 2021, bagi calon siswa yang akan mendaftar, silahkan datang ke sekolah pada tanggal yang telah ditentukan.</p>', 'informasi1630510959.jpg', '2021-09-01 15:42:39', NULL, 2),
(3, 'Persyaratan PPDB', '<p>Silahkan membawa persyaratan PPDB pada saat mendaftar<br>1. Alat tulis<br>2. Uang saku</p>', 'informasi1739926066.jpg', '2021-09-01 15:45:07', '2025-02-19 07:47:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'Ketentuan Dan Alur Peminjaman Gedung Taman Budaya Provinsi NTB', '<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">1. Membuat surat permohonan peminjaman yang ditujukan kepada Kepala Taman Budaya Provinsi Nusa Tenggara Barat. </span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">2. Peminjaman gedung atau lokasi diterima dengan diberikannya surat balasan dari Taman Budaya Provinsi NTB. </span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">3. Membawa surat balasan dari Taman Budaya Provinsi NTB ke Polsek Mataram. </span></p>\r\n<p style=\"text-align: justify;\"><span style=\"font-size: 12pt;\">4. Menyelesaikan biaya peminjaman gedung atau lokasi.</span></p>', 'layanan1739925691.png', '2025-01-20 02:40:25', '2025-02-19 08:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `foto_sekolah` varchar(50) NOT NULL,
  `google_maps` text NOT NULL,
  `nama_kepsek` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang_sekolah`, `foto_sekolah`, `google_maps`, `nama_kepsek`, `foto_kepsek`, `sambutan_kepsek`, `created_at`, `updated_at`) VALUES
(1, 'Taman Budaya Provinsi NTB', 'tamanbudayantb2@gmail.com', '(0370) 622428', 'Jl. Majapahit No. 2 Mataram', 'logo1630507846.png', 'favicon1630507846.png', '<p style=\"text-align: center;\"><strong>Visi&nbsp;</strong></p>\r\n<p class=\"MsoListParagraph\" style=\"line-height: 150%; margin: 0cm 0cm 0cm 18pt; text-align: center;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Ekspresi Seni Sebagai Citra Budaya yang Kuat dalam Membangun Kepribadian Bangsa yang Utuh</span></p>\r\n<p class=\"MsoListParagraph\" style=\"line-height: 150%; margin: 0cm 0cm 0cm 18pt; text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>Misi</strong></p>\r\n<ol>\r\n<li class=\"MsoListParagraphCxSpFirst\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Memantapkan peran Taman Budaya sebagai laboratorium kesenian dan Lembaga Pendidikan kesenian.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Memperluas Perspektif aktivitas Taman Budaya kearah aktivitas budaya yang memiliki aspek seni dalam proses transformasi fungsi dalam masyarakat.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Mengembangkan fungsi Taman Budaya sebagai pusat pengkajian dan pusat informasi budaya, khususnya kesenian dan tradisi yang memiliki aspek seni.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Membina apresiasi masyarakat terhadap seni dan budaya pada umumnya sebagai iklim penunjang pengembangan kehidupan berkesenian dan berbudaya yang berkualitas dan bertanggung jawab.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Meningkatkan kualitas wawasan kemampuan professional dan manajerial seniman dan kelompok/organisasi kesenian.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Menciptakan iklim berkesenian yang menumbukan motivasi, peningkatan kreatifitas seniman melalui dialog, pagelaran, fasilitas, dan pemberian penghargaan terhadap seniman, dan budayawan yang memiliki dedikasi, prestasi dan kepedulian terhadap seni dan budaya.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Mengembangkan jaringan Kerjasama dengan masyarakat dan pihak ketiga dalam rangka pengkajian, pelestarian, pembinaan, dan pengembangan kesenian.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Menyebarluaskan informasi tentang potensi kesenian dan aktivitas budaya dan perkembangannya kepada masyarakat sebagai media Pendidikan apresiasi dan pertanggungjawaban publik tentang pembinaan kesenian di NTB.</span></li>\r\n<li class=\"MsoListParagraphCxSpMiddle\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Meningkatkan kualitas manajerial Taman Budaya dalam menerapkan model manajemen partisipatif sebagai upaya melibatkan masyarakat dan seniman dalam pengembangan kesenian dan budaya pada umumnya.</span></li>\r\n</ol>', 'sekolah1740530454.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.478291292925!2d116.0971399!3d-8.5938116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7b376bccb5%3A0x644ee757ea4d4d1b!2sTaman%20Budaya%20Provinsi%20NTB!5e0!3m2!1sen!2sid!4v1614031728659!5m2!1sen!2sid\r\n', 'Sabarudin, S.S', 'kepsek1630508274.png', '<p>Selamat datang di website Taman Budaya Provinsi Nusa Tenggara Barat. Temukan informasi seputar Taman Budaya di sini.</p>', '2021-08-14 15:24:49', '2025-02-26 07:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Dzulfikar F', 'sa', 'e807f1fcf82d132f9bb018ca6738a19f', 'Super Admin', '2021-07-17 06:25:30', '2021-09-01 21:49:21'),
(2, 'Putri P', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2021-07-17 06:25:30', '2021-09-01 21:49:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
