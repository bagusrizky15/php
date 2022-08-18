//ambil elemen yang dibutuhkan 
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tombolCari.addEventListener('click', function(){
//     alert('berhasil');
// });

//tambahkan event ketika keyword ditulis

keyword.addEventListener('keyup', function(){
    console.log(keyword.value);

    //buat objek ajax
    var xhr = new XMLHttpRequest();
    
});