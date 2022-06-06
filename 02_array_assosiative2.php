<?php

$mahasiswa = ["Bagus", 2711, "Informatika"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></div>
        <?php endforeach; ?>
    </ul>

</body>

</html>