<?php

require 'functions.php';

$id = $_GET["id"];

if(hapus($id)>0)
{
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
    ";
} else{
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>
        ";

}

?>