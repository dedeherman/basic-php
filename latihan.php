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
echo "Luas lingkaran: $luas";
/*Komentar program: menampilkan pesan
Luas lingkaran
Teks komentar program tidak dimunculkan */
    ?>
</body>
</html>