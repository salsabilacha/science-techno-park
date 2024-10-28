<?php
$servername = "localhost"; // Server name
$username = "username";     // Username database
$password = "password";     // Password database
$dbname = "daftar_hki";         // Nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
