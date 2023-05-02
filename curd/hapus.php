<?php
// menghubungkan ke database
include('koneksi.php');

// cek apakah parameter id_mhs sudah ada pada URL
if (isset($_GET['id_mhs'])) {
    // ambil id_mhs dari URL
    $id_mhs = $_GET['id_mhs'];

    // query untuk menghapus data mahasiswa berdasarkan id_mhs
    $query = "DELETE FROM mahasiswa WHERE id_mhs = $id_mhs";
    $result = mysqli_query($koneksi, $query);

    // cek apakah query berhasil atau tidak
    if ($result) {
        // redirect ke halaman index.php
        header('Location: index.php');
        exit();
    } else {
        echo "Data gagal dihapus";
    }
}
