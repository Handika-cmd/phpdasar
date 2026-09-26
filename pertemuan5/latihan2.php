<?php
// menampilkan array untuk user.
$array = [1,2,3,4,5,6,7];
?>
<!DOCTYPE html>
<html>
    <head>
    <title> latihan 2 </title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
    </head>
    <body>
        <?php for ( $i = 0; $i < count($array); $i++ ) { ?>
        <div class="kotak"><?php echo $array[$i]; ?></div>
        <?php } ?>

        <div class="clear"></div>

        <?php foreach($array as $a ) { ?>
            <div class="kotak"><?php echo $a; ?></div>
        <?php } ?>

        <div class="clear"></div>

        <?php foreach($array as $a ) : ?>
            <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
    </body>
</html>