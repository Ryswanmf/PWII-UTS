<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
