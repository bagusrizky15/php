<?php

$mahasiswa = [
    [
    "nama" => "Bagus",
     "nim" => 2711,
    "jurusan" => "Informatika"
    ],
    [
        "nama" => "Rizky",
         "nim" => 2712,
        "jurusan" => "Informatika"
    ],
    [
        "nama" => "Ahmad",
         "nim" => 2713,
        "jurusan" => "Informatika"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <?php foreach ($mhs as $m) : ?>
            <li><?= $m ?></div>
            <?php endforeach; ?>
            <br>
            <?php endforeach; ?>
    </ul>

</body>

</html>