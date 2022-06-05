<?php
//menampilkan array untuk user
//for atau foreach
$angka = [1,2,3,4,5,9,10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <?php
    for($i =0; $i<count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i];?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $key => $value) { ?>
        <div class="kotak"><?php echo $value ?></div>
    <?php } ?>

    <?php foreach ($angka as $key) : ?>
        <div class="kotak"><?= $value ?></div>
    <?php endforeach; ?>


</body>
</html>