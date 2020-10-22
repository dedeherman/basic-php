<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5</title>
</head>
<body>
    <?php
    
    $bil1 = 30;
    $bil2 = 45;
    $bil3 = 57;
    $bil4 = 63;
    $bil5 = 20;

    // 1
    $hasil = $bil1 < $bil2;
    echo "$bil1 < $bil2 = $hasil<br>";

    // 2
    $hasil = $bil3 <> $bil4;
    echo "$bil3 <> $bil4 = $hasil<br>";

    // 3
    $hasil = $bil2 == $bil4;
    echo "$bil2 == $bil4 = $hasil<br>";

    // 4
    $hasil = !($bil4 > $bil1);
    echo "!($bil4 > $bil1 = $hasil<br>";

    // 5
    $hasil = ($bil5 <> $bil1) or !($bil2 == $bil4);
    echo "($bil5 <> $bil1) or !($bil2 == $bil4) = $hasil<br>";

    // 6
    $hasil = !($bil2 <> $bil4) and !($bil1 <= $bil3);
    echo "!($bil2 <> $bil4) and !($bil1 <= $bil3) = $hasil<br><br>";

    $teks1 = "Belajar Menghitung ";
    $teks2 = "Volume Balok ";
    $teks3 = "Menggunakan Operator Matematika";
    $hasil = $teks1.$teks2.$teks3;
    echo "$hasil<br>";

    $p = 10;
    $l = 7;
    $t = 15;
    echo "Panjang Balok = $p<br>";
    echo "Lebar Balok = $l<br>";
    echo "Tinggi Balok = $t<br>";
    $volume = $p * $l * $t;
    echo "Volume Balok = $volume<br>";
    
    ?>
</body>
</html>