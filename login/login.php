<?php

//cek tombol submit
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

//cek username dan pw

//jika benar ganti halaman

//jika salah tidak ganti halaman

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username / Password Salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <Button type="submit" name="submit">Login</Button>
            </li>
        </form>
    </ul>
</body>

</html>