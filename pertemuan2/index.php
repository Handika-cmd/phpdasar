<?php
// belajar sintax dasar php
// komentar untuk satu baris
/* komentar untuk beberapa baris
*/
// materi sintax php dasar
/* standar output php (untuk menampilkan output ke layar):
1.echo
2.print
3.print_r
4.var_dump (untuk array dan object)
*/

/* penulisan sintax php
1. php di dalam html
2. html di dalam php
*/

// variable dan tipe data
// variabel untuk menampung/menyimpan data
// penulisan nama variabel tidak boleh diawali angka, tidak boleh ada spasi, dan tidak boleh menggunakan simbol kecuali underscore (_)
$nama = "Ririn Dwi Aryanti"; // string
$umur = 20; // integer
$beratbadan = 50.5; // float
$bolean = true; // boolean 

//operator
// aritmatika (+ _ * / %)
$x = 10;
$y = 20;
echo $x * $y;

// penggabung string / concatenation / concat
// operatornya adalah titik (.)
$nama_depan = "ririn";
$nama_belakang = "dwi aryanti";
echo $nama_depan . " " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
$a = 1;
$a += 5; // sama dengan $a = $a + 5;
echo $a;
$nama = "ririn";
$nama .= " ";
$nama .= "dwi aryanti";
echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1"); // true

// identitas
// ===, !==
var_dump(1 === "1"); // false
var_dump(1 !== "1"); // true

//logika
// && (and), || (or), ! (not)
$z = 10;
var_dump($z < 20 && $z % 2 == 0); // true


?>
<!DOCTYPE html>
<html lang="en">

<Head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</Head>

<body>
    //php di dalam html, paling sering digunakan
    <h1>hallo semua, ini adalah website <?php echo $nama; ?></h1>
    //html di dalam php
    <?php
    echo "<h1>Halo, Nama saya Ririn Dwi Aryanti</h1>";
    ?>
</body>

</html>