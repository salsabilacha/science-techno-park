<?php
// daftar_hki.php

$servername = "localhost"; // atau alamat server Anda
$username = "root"; // username MySQL Anda
$password = ""; // password MySQL Anda
$dbname = "daftar_hki"; // ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama_Pengusul = $_POST['Nama_Pengusul'];
    $Nama_Produk = $_POST['Nama_Produk'];
    $Deskripsi_Produk = $_POST['Deskripsi_Produk'];
    $Tanggal_Daftar = $_POST['Tanggal_Daftar'];
    $No_Telephone = $_POST['No_Telephone'];
    $Alamat_Email = $_POST['Alamat_Email'];
    $Alamat = $_POST['Alamat'];
    $Jenis_HKI = $_POST['Jenis_HKI'];

    // Query untuk menyimpan data
    $sql = "INSERT INTO hki (Nama_Pengusul, Nama_Produk, Deskripsi_Produk, Tanggal_Daftar, No_Telephone/Wa, Alamat_Email, Alamat, Jenis_HKI) 
            VALUES ('$Nama_Pengusul', '$Nama_Produk', '$Deskripsi_Produk', '$Tanggal_Daftar', '$No_Telephone/WA', '$Alamat_Email', '$Alamat', '$Jenis_HKI')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran HKI berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
