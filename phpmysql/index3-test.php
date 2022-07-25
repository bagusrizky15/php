<?php
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMhs</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
        </tr>
        <?php $i = 1?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
            <td><img src="#" alt="<?php $row["gambar"]?>"></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>

</body>

</html>