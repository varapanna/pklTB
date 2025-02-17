<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_tb');

if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
echo '';
?>