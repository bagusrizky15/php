<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>phpmysql</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

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
                    <a href="#">Ubah</a> |
                    <a href="#">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" alt=""></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>

        <?php
            $i++;
        endforeach; ?>

    </table>
</body>

</html>