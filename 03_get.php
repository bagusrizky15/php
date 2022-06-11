<?php
$buku = [
    [
        "judul" => "Atomics Habit",
        "pengarang" => "joko sasongko",
        "isbn" => "19112711",
        "harga" => 89000,
        "tahun" => 2021
    ],
    [
        "judul" => "Text Mining",
        "pengarang" => "suyanto",
        "isbn" => "20199389",
        "harga" => 99000,
        "tahun" => 2019
    ],
    [
        "judul" => "Fotografi",
        "pengarang" => "sulaeman",
        "isbn" => "1809220",
        "harga" => 77000,
        "tahun" => 2017
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GET</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: yellow;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <h1>Data Perpustakaan</h1>
    <ul>
        <?php foreach ($buku as $databuku) : ?>
            <?php foreach ($databuku as $datalengkap) : ?>
                <li><?= $datalengkap ?></li>
            <?php endforeach; ?>
            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>