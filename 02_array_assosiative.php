<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: yellow;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php 
    $angka = [1,"Bagus",3,4,5,6];
?>

<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a;  ?></div>
    <?php endforeach; ?>
</body>
</html>