<?php

if(!isset($_GET["nama"]))
{
    header("Location : 04_post.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
    <a href="04_post.php">Kembali</a>
</body>
</html>