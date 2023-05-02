<?php
// kondisi yang komplex, juga  range sebuah nilai
$a = 5;
if ($a < 9) {
    echo "benar";
} else if ($a == 5) {
    echo "paling benar";
} else if ($a == 6) {
    echo "paling benar";
} else {
    echo "salah";
}

$nilai = 75;
// lebih dari 80 A
if ($nilai >= 80) {
    echo 'Nilai kamu A';
    // lebih dari == 70 B
} else if ($nilai >= 70) {
    echo 'Nilai kamu B';
    // lebih dari == 60 nilai C
} else if ($nilai >= 60) {
    echo 'Nilai kamu C';
    // dibawah itu nilainya D
} else {
    echo 'Nilai kamu D';
}


// mengevaluasi suatu variable
$warna = "kuning";
switch ($warna) {
    case "merah":
        echo "warna favorite kamu merah";
        break;
    case "biru":
        echo "Warna favorite kamu biru";
        break;
    default:
        echo "Warna favorite kamu tidak terdaftar";
}
