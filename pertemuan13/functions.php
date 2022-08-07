<?php

//koneksi
$conn = mysqli_connect("localhost", "root", "root", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        # code...
        $rows[]= $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    //$gambar = htmlspecialchars($data["gambar"]);

     //query insert data
    $query = "INSERT INTO mahasiswa
        VALUES
        (null, '$nama', '$nim', '$email', '$jurusan', '$gambar')
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $file = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gamber']['tmp_name'];

    if ($error === 4) {
        echo "<script>
            alert('pilih gambar');
        </script>
        ";

        return false;
    }
}

function delete($id){
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     //query insert data
    $query = "UPDATE mahasiswa
        SET
        nama = '$nama', 
        nim = '$nim', 
        email = '$email',
        jurusan = '$jurusan',
        gambar = '$gambar'
        WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
    WHERE 
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}

?>