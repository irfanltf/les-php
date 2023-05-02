<?php
// menghubungkan ke database
include('koneksi.php');

// cek apakah tombol submit sudah diklik atau belum
if (isset($_POST['submit'])) {
    // ambil data dari form
    $id_mhs = $_POST['id_mhs'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_prodi = $_POST['id_prodi'];

    // query untuk update data mahasiswa
    $query = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama', jenis_kelamin = '$jenis_kelamin', id_prodi = '$id_prodi' WHERE id_mhs = '$id_mhs'";
    $result = mysqli_query($koneksi, $query);

    // cek apakah query berhasil atau tidak
    if ($result) {
        // redirect ke halaman index.php
        header('Location: index.php');
        exit();
    } else {
        echo "Data gagal diupdate";
    }
} else {
    // ambil id_mhs dari parameter GET
    $id_mhs = $_GET['id'];

    // query untuk mengambil data mahasiswa dengan id_mhs tertentu
    $query = "SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'";
    $result = mysqli_query($koneksi, $query);

    // cek apakah query berhasil atau tidak
    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data Mahasiswa</title>
</head>

<body>
    <h1>Update Data Mahasiswa</h1>

    <form method="post" action="">
        <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']; ?>">

        <label>NPM</label><br>
        <input type="text" name="npm" value="<?php echo $data['npm']; ?>"><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>

        <label>Jenis Kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="L" <?php if ($data['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
            <option value="P" <?php if ($data['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
        </select><br>

        <label>Program Studi</label><br>
        <select name="id_prodi">
            <option value="1" <?php if ($data['id_prodi'] == 1) echo 'selected'; ?>>Teknik Informatika</option>
            <option value="2" <?php if ($data['id_prodi'] == 2) echo 'selected'; ?>>Sistem Informasi</option>
            <option value="3" <?php if ($data['id_prodi'] == 3) echo 'selected'; ?>>Teknik Komputer</option>
        </select><br>

        <br>
        <input type="submit" name="submit" value="Update Data">
    </form>

</body>

</html>