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
    
</head>

<body>
    <h1>Data Perpustakaan</h1>
    <ul>
        <?php foreach ($buku as $databuku) : ?>

            <li>
                <a href="03_get2.php?nama= <?= $databuku["judul"];?>"> <?= $databuku["judul"]; ?></a>
            </li>

            <br>
        <?php endforeach; ?>
    </ul>

</body>

</html>