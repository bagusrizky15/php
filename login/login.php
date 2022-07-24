<?php

//cek tombol submit
if (isset($_POST["submit"])) {
    //cek username dan pw
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar ganti halaman
        header("Location: admin.php");
        exit;
    } else {
        //jika salah tampilkan error
        $error = true;
    }
}

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