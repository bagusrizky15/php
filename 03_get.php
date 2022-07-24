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
    <!-- metode pengiriman data lewat URL dan menangkap data menggunakan variabel superglobal $_GET
     -->
</head>

<body>
    <h1>Data Perpustakaan</h1>
    <ul>
        <?php foreach ($buku as $databuku) : ?>

            <li>
                <a href="03_get2.php?judul= <?= $databuku["judul"];?>
                &pengarang=<?= $databuku["pengarang"]; ?>
                &isbn=<?= $databuku["isbn"]; ?>
                &harga=<?= $databuku["harga"]; ?>
                &tahun=<?= $databuku["tahun"]; ?>">
                <?= $databuku["judul"]; ?>
            </a>
            </li>

            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>