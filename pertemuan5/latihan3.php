<?php
$mhs = ["ririn", "090102", "mi", "email"];

// membuat array didalam array (array multidemensi)
$mahasiswa = [["ririn", "090102", "mi", "email"],["dwi", "090103", "mi", "email"],["aryanti", "090102", "mi", "email"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<!-- membuat list manual -->
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li>
            ririn
        </li>
        <li>
            090102
        </li>
        <li>
            manajemen informatika
        </li>
        <li>
            ririndwiaryanti@gmail.com
        </li>
    </ul>
<!-- menggunakan foreach -->
    <ul>
        <?php foreach ($mhs as $m ) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>

<!-- memanggil array di dalam array/ array multidimensi menggunakan foreach  -->
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>nama:<?= $mhs[0]; ?></li>
        <li>nim:<?= $mhs[1]; ?></li>
        <li>jurusan:<?= $mhs[2]; ?></li>
        <li>email:<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>