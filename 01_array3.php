<?php

$mahasiswa = [["Bagus", 2711, "Informatika"], 
["Rehan", 2121, "Sistem Informasi"]];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Data</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]?></li>
        <li>NIM : <?= $mhs[1]?></li>
        <li>Jurusan : <?= $mhs[2]?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>