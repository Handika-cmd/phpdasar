<?php
// pengkondisian / percabangan pada php
// if else : percabangan yang dijalankan jika kondisi terpenuhi atau tidak
// if else if else : percabangan yang dijalankan jika kondisi terpenuhi atau tidak, dan bisa menambahkan kondisi lain
// switch case : percabangan yang dijalankan jika kondisi terpenuhi atau tidak, dan bisa menambahkan kondisi lain, namun hanya untuk nilai tertentu
// ternary  : percabangan yang dijalankan jika kondisi terpenuhi atau tidak, namun hanya untuk nilai tertentu

// contoh if else
$nilai = 80;
if ($nilai < 100) {
    echo "guud job";
} else {
    echo "try again";
}

// contoh if else if else
$nilai = 80;
if ($nilai < 100) {
    echo "guud job";
} else if ($nilai < 80) {
    echo "it's ok";
} else {
    echo "try again";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <!-- membuat tabel dengan pengulangan -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <?php if ($i % 2 == 0): ?>
                <tr class="warna-baris">
                <?php else: ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 5; $j <= 5; $j++): ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>