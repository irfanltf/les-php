<?php

// function hello($selamat)
// {
//     echo "selamat $selamat!";
// }


// hello("sore");
// hello("malam");
// hello("pagi");


function sayHello($nama, $umur, $alamat = "Indonesia")
{
    echo "hello $nama, umur anda $umur, alamat anda adalah $alamat";
}

sayHello("Rohim", 20, "Bandar Lampung");
echo "<br>";
sayHello("rohman", 26);
echo "<br>";
sayHello("Rani", 19);



// function tambah($a, $b)
// {
//     $hasil = $a + $b;
//     return $hasil;
// }


// echo tambah(4, 5);



function cek($angka)
{
    if ($angka % 2 == 0) {
        return "bilangan genap";
    } else {
        return "bilangan ganjil";
    }
}

echo cek(8);


$string = "hello world";
$kapital = strtoupper($string);
echo $kapital; // Output: HELLO WORLD


$string = "Hello World";
$kecil = strtolower($string);
echo $kecil; // Output: hello world



$string = "hello world";
$kapital = ucfirst($string);
echo $kapital; // Output: Hello world

$string = "hello world";
$kapital = ucwords($string);
echo $kapital; // Output: Hello World
