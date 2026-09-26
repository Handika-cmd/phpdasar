<?php
// menggunakan fungsi yang telah di sediakan PHP untuk menampilkan tanggal dan waktu saat ini
// l = menampilkan hari dalam format teks, misal: Senin
// d = menampilkan tanggal dalam format angka, misal: 01 sampai 31
// m = menampilkan bulan dalam format angka, misal: 01 sampai 12
// Y = menampilkan tahun dalam format angka, misal: 2023
// kalau mau lengkap bisaa langsung ke https://www.php.net/manual/en/function.date.php
   echo date("l, d-m-Y");
//time
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

echo date("l, d-m-Y", time() + 60 * 60 * 24 * 100); // menampilkan tanggal 100 hari kedepan

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0);
// jam, menit, detik, bulan, tanggal, tahun
echo date ("l", mktime(0,0,0,9,7,2006)); // menampilkan hari pada tanggal 7 september 2006

// strtotime
// membuat sendiri detik dengan format string
echo strtotime("7 september 2006"); // menampilkan detik pada tanggal 7 september 2006

// belajar mandiri
// string
// strlen() = menghitung panjang string
// strcmp() = membandingkan string
// explode() = memecah string menjadi array
// htmlspecialchars() = mengubah karakter spesial menjadi entitas HTML

// utility
// var_dump() = menampilkan informasi tentang variabel
// isset() = mengecek apakah variabel sudah di set atau belum
// empty() = mengecek apakah variabel kosong atau tidak
// die() = menghentikan eksekusi script
// sleep() = menghentikan eksekusi script selama beberapa detik



?>
