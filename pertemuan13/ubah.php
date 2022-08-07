<?php

require 'functions.php';

$id = $_GET["id"];

//query data mhs berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit udah di pencet
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data gagal diubah');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">

        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" required
                value="<?= $mhs["nim"];?>">
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required
                value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img width="150" src="img/<?= $mhs['gambar'];?>" alt="">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">
                    Ubah
                </button>
            </li>

        </ul>

    </form>

</body>

</html>