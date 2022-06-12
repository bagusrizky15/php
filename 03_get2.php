<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["isbn"]; ?></li>
        <li><?= $_GET["harga"]; ?></li>
        <li><?= $_GET["tahun"]; ?></li>
    </ul>

    <a href="03_get.php">Kembali</a>
    
</body>
</html>