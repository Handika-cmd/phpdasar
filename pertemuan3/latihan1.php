<?php
// pengulangan 
// for : pengulangan yang dijalankan dengan jumlah iterasi yang diketahui
// while : pengulangan yang dijalankan selama kondisi tertentu terpenuhi
// do while : pengulangan yang selalu dijalankan setidaknya sekali
// foreach : pengulangan khusus arrayy

//contoh for
for ($i = 0; $i < 5; $i++) {
    echo "ririn cantik <br>";
}

//contoh while
$i = 0;
while ($i < 5) {
    echo "ririn cantik <br>";
    $i++;
}

//contoh do while
$i = 0;
do {
    echo "ririn cantik <br>";
    $i++;
} while ($i < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
</head>

<body>
    <!-- membuat tabel dengan pengulangan -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <tr>
                <?php for ($j = 5; $j <= 5; $j++): ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>