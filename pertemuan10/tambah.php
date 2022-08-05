<?php
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");
//cek apakah tombol submit udah di pencet
if (isset($_POST["submit"])) {
    # ambil data dari tiap element for
    
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query = "INSERT INTO mahasiswa
        VALUES
        (null, '$nama', '$nim', '$email', '$jurusan', '$gambar')
        ";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>

        </script>
        ";
    } else {
        echo "gagal";
        echo "<br>";
        echo mysqli_error($conn);
    }

    //cek apakah data berhasil masuk
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">

        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim">
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambah
                </button>
            </li>

            <li>
                <a href="index.php">Kembali</a>
            </li>
        </ul>

    </form>

</body>

</html>