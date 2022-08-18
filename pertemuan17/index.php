<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require 'functions.php';

//pagination
//konfigurasi

$jumlahData = 2;
$total = count(query("SELECT * FROM mahasiswa"));
var_dump($total);

$jumlahHalaman = ceil($total / $jumlahData);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET['halaman'] : 1;
var_dump($halamanAktif);

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $total = mysqli_num_rows($result);

// var_dump($total);

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 0,$jumlahData");

//tombol cari di klik
if(isset ($_POST["cari"]))
{
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>phpmysql</title>
</head>

<body>

    <a href="logout.php">Log out</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">
        Tambah Data Mahasiswa
    </a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan pencarian" autocomplete="off">
        <button type="submit" name="cari"> Cari </button>
    </form>

    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php
        $i = 1;
        foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><img width="150" src="img/<?= $row["gambar"] ?>" alt=""></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>

        <?php
            $i++;
        endforeach; 
        ?>

    </table>
</body>

</html>