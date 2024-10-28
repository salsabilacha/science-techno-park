<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah form disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form dan amankan
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_pengusul']);
    $nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
    $tanggal_daftar = mysqli_real_escape_string($koneksi, $_POST['tanggal_daftar']);
    $no_telepon = mysqli_real_escape_string($koneksi, $_POST['no_telepon']);
    $alamat_email = mysqli_real_escape_string($koneksi, $_POST['alamat_email']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $jenis_hki = mysqli_real_escape_string($koneksi, $_POST['jenis_hki']);
    $submit = mysqli_real_escape_string($koneksi, $_POST['submit']);

    // Debugging: Cetak data
    

    // Buat query untuk memasukkan data
    $query = "INSERT INTO register (nama_pengusul, nama_produk, tanggal_daftar, no_telepon, alamat_email, alamat, jenis_hki, submit_time) 
              VALUES ('$nama', '$nama_produk', '$tanggal_daftar', '$no_telepon', '$alamat_email', '$alamat', '$jenis_hki', NOW())";

    // Eksekusi query dan periksa hasilnya
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
            alert('Pendaftaran berhasil!');
            window.location.href = 'index.html';
        </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    echo "Form belum disubmit.";
}
?>
