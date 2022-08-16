<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
                    <a href="delete.php?id=<?= $row["id"]; ?>" 
                    onclick="return confirm('yakin?');">Hapus</a>
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