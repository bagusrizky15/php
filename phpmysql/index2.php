<?php

//koneksi
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data mahasiswa dari object result (fetch)
//mysqli_fetch_row // mengembalikan array numeric
//mysqli_fetch_object // mengembalikan object result // tidak akan di pakai
//mysqli_fetch_array //mengembalikan array numeric dan assosiatif
//mysqli_fetch_assoc // mengembalikan array assosiatif

// while ($ambil = mysqli_fetch_assoc($result)) {
//     # code...
//     var_dump($ambil);
// }



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
        while ($row = mysqli_fetch_assoc($result)) : ?>
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
        endwhile; ?>

    </table>
</body>

</html>