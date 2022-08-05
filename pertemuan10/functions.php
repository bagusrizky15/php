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
    $nama = $data["nama"];
    $nim = $data["nim"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

     //query insert data
    $query = "INSERT INTO mahasiswa
        VALUES
        (null, '$nama', '$nim', '$email', '$jurusan', '$gambar')
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

?>