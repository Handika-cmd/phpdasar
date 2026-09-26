<?php
// array numerik
// array adalah tipe data yang bisa menampung banyak nilai sekaligus
// varibael yg bisa menampung banyak tipe data sekaligus
// elemen pada array bisa memiliki tipe data yang berbeda
// pasangan antara key dan value.
// key-nya adalah index, yg dimulai dari 0

// cara lama
$hari = array("Senin", "Selasa", "Rabu", "kamis", "jumat", "sabtu", "minggu");

// cara baru
$bulan = ["januari", "februari", "maret", "april"];

// menampilkan array
// var_dump / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan salah satu elemen array
echo $hari[0];
echo "<br>";
// menambahkan elemen baru pada array
$bulan[] = "mei";
var_dump($bulan);

?>