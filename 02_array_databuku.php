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
    <title>Data Buku Perpustakaan</title>
</head>

<body>
    <ul>
        <?php foreach ($buku as $databuku) : ?>
            <?php foreach ($databuku as $datalengkap) : ?>
                <li><?= $datalengkap ?></li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>

</body>

</html>