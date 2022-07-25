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
    $ambil = mysqli_fetch_assoc($result);
    var_dump($ambil["jurusan"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>php mysql</title>
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

        <tr>
            <td>1</td>
            <td>
                <a href="#">Ubah</a> |
                <a href="#">Hapus</a>
            </td>
            <td><img src="" alt=""></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>
</body>
</html>