<?php
// menghubungkan ke database
include('koneksi.php');

// cek apakah tombol submit sudah diklik atau belum
if (isset($_POST['submit'])) {
    // ambil data dari form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_prodi = $_POST['id_prodi'];

    // query untuk menambahkan data mahasiswa
    $query = "INSERT INTO mahasiswa (npm, nama, jenis_kelamin, id_prodi)
                VALUES ('$npm', '$nama', '$jenis_kelamin', '$id_prodi')";
    $result = mysqli_query($koneksi, $query);

    // cek apakah query berhasil atau tidak
    if ($result) {
        // redirect ke halaman index.php
        header('Location: index.php');
        exit();
    } else {
        echo "Data gagal ditambahkan";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form method="POST" action="">
        <label>NPM</label><br>
        <input type="text" name="npm"><br>

        <label>Nama</label><br>
        <input type="text" name="nama"><br>
        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>

        <label>Program Studi</label><br>
        <select name="id_prodi">

            <?php $prodi = mysqli_query($koneksi, "SELECT * FROM prodi"); ?>

            <?php while ($data = mysqli_fetch_array($prodi)) { ?>
                <option value="<?= $data['id_prodi'] ?>"><?= $data['nama_prodi'] ?></option>
            <?php } ?>
        </select><br>

        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>

</html>