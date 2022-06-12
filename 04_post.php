<?php
//post mengirim data melalui form


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
    <?php if (isset($_POST["submit"]) && isset($_POST["nama"]) ) :?> 
              <h1>Halo <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
  
    <form action="" method="post">
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>