<?php

$a = 100;
$nama = "muhammad irfan lutfi";
$angka1 = 80;
$angka2 = 90;
$hasil = $angka1 + $angka2;

// echo "Hasil dari " . $angka1 . " + " . $angka2 . " = " . $hasil;
// echo "<br>";
// echo "Hasil dari $angka1 + $angka2 = $hasil";
// echo "<br>";

// Index array
$array = [1, 2, 3, 4, 5];

// echo $array[0];

// $buah = ["Apel", "Mangga", "Pisang", "Jeruk"];
// echo $buah[2];

// Array Associative
$harga_buah = [
    "Apel" => 5000,
    "Mangga" => 8000,
    "Pisang" => 2000,
    "Jeruk" => 6000
];

// echo $harga_buah["Jeruk"];


// Array multidimensi
$buah = [
    [
        "nama_buah" => "Apel",
        "Harga"     => 5000
    ],
    [
        "nama_buah" => "Mangga",
        "harga"     => 8000
    ]
];

// echo $buah[0]["nama_buah"];
// echo $buah[1]['harga'];


// 
$nama = array(
    array("Andi", 25, "Laki-laki"),
    array("Budi", 23, "Laki-laki"),
    array("Cindy", 21, "Perempuan"),
    array("Dina", 24, "Perempuan")
);

echo $nama[1][1];
// echo $nama[3][0];
$buah = ["Apel", "Mangga", "Pisang", "Jeruk"];
$buah[] = "Alpukat";

echo $buah[4];

$buah[] = "Anggur";
echo $buah[5];

unset($buah[4]);

echo $buah[5];
