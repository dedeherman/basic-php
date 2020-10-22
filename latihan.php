<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$jumlah =5;
$harga = 20000;
$total = $jumlah * $harga;

echo "Jumlah beli: $jumlah<br>";
echo "Harga Barang: $harga<br>";
echo "Total bayar: $total<br><br>";

//konstanta untuk nilai judul
define("Judul", "Hitung Luas Lingkaran");
#komentar untuk nilai phi
define("PHI", 3.14);
echo Judul;
$r = 10;
echo"<br>Jari-jari: $r<br>";
$luas = PHI * $r * $r;
echo "Luas lingkaran: $luas<br><br>";
/*Komentar program: menampilkan pesan
Luas lingkaran
Teks komentar program tidak dimunculkan */

// operator aritmatika
$bil1 = 200;
$bil2 = 40;
$hasil = $bil1 + $bil2;
echo "$bil1 + $bil2 = $hasil<br>";
$hasil = $bil1 - $bil2; 
echo "$bil1 - $bil2 = $hasil<br>";
$hasil = $bil1 * $bil2;
echo "$bil1 * $bil2 = $hasil<br>";
$hasil = $bil1 / $bil2;
echo "$bil1 / $bil2 = $hasil<br><br>";

// operator perbandingan
$bil1 = 200;
$bil2 = 40;
$teks1 = "PHP";
$teks2 = "php";

$hasil = $bil1 == $bil2;
echo "$bil1 == $bil2 = $hasil<br>";

$hasil = $bil1 != $bil2;
echo "$bil1 != $bil2 = $hasil<br>";

$hasil = $bil1 >= $bil2;
echo "$bil1 >= $bil2 = $hasil<br>";

$hasil = $teks1 == $teks2;
echo "$teks1 == $teks2 = $hasil<br>";

$hasil = $teks1 != $teks2;
echo "$teks1 != $teks2 = $hasil<br><br>";

// operator logika
$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";

$hasil = ($bil1 < $bil2) or ($teks1 == $teks2);
echo "$bil1 < $bil2 or $teks1 == $teks2 adalah $hasil<br>";

$hasil = ! ($teks1 == $teks2);
echo "! ($teks1 == $teks2) adalah $hasil<br><br>";

// operator string
$teks1 = "Aku sedang belajar ";
$teks2 = "Pemrograman WEB ";
$teks3 = "Menggunakan bahasa pemroraman PHP";
$hasil = $teks1 . $teks2 . $teks3;
echo "$hasil";

    ?>
</body>
</html>