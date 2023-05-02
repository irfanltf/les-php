<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_mahasiswa";

// membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// mengecek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
