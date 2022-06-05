<?php

//array boleh menggunakan tipe data yang berbeda
//cara lama
$hari = array("senin", "selasa");
echo $hari;

//cara baru
$bulan = ["Januari", "Februari"];
echo $bulan;

//tidak bisa menggunakan echo

//menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//menampilkan satu elemen pada array 
echo $bulan[1];
?>