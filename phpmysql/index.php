<?php

    //koneksi
    $conn = mysqli_connect("localhost", "root", "root", "phpdasar");

    //ambil data dari tabel mahasiswa
    mysqli_query($conn, "SELECT * FROM mahasiswa");

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