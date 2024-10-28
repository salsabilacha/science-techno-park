<?php
date_default_timezone_set("Asia/Bangkok");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran HKI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="styles.css"> <!-- Anda dapat menambahkan file CSS untuk styling -->
</head>
<body>
    <header>
        <h1>Pendaftaran Hak Kekayaan Intelektual (HKI)</h1>
    </header>
    <main>
        <form action="proses.php" method="post">
            <p><label for="">Nama Pengusul</label></p>
            <input type="text" name="nama_pengusul" autocomplete="off"><br>

            <p><label for="">Nama Produk</label></p>
            <input type="text" name="nama_produk" autocomplete="off"><br>

            <p><label for="">Tanggal Daftar</label></p>
            <input type="date" name="tanggal_daftar" id="tanggal_daftar" autocomplete="off"><br>

            <p><label for="">No Telepon</label></p>
            <input type="text" name="no_telepon" id="no_telepon" autocomplete="off"><br>

            <p><label for="">Alamat Email:</label></p>
            <input type="email" name="alamat_email" autocomplete="off"><br>

            <p><label for="">Alamat:</label></p>
            <input type="alamat" name="alamat" autocomplete="off"><br>

            <p><label for="">Jenis HKI</label></p>
            <select class="" name="jenis_hki">
                <option value="Paten">Paten</option>
                <option value="Hak Cipta">Hak Cipta</option>
                <option value="Merek">Merek</option>
                <option value="Desain Industri">Desain Industri</option>
                <p></select><br></p>

            <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Daftar</button>
        </form>
    </main>
</body>
</html>