<?php
//post mengirim data melalui form


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"]) && isset($_POST["nama"])) : ?>
        <h1>Halo <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username</label>
                <input type="text" name="nama" id="username">
            </li>
            <br>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </form>
    </ul>

</body>

</html>