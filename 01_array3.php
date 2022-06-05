<?php

$mahasiswa = ["Bagus", 2711 , "Informatika"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Data</h1>
    <ul>
       <?php foreach($mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>