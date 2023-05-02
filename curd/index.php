<?php
// menghubungkan ke database
include('koneksi.php');

// menampilkan data mahasiswa
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa
JOIN prodi ON prodi.id_prodi = mahasiswa.id_prodi
");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="create.php">Tambah Data</a><br><br>
    <table border="1">
        <thead>
            <tr>
                <th>ID Mahasiswa</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td> <?= $data['id_mhs']  ?></td>
                    <td> <?= $data['npm']  ?></td>
                    <td> <?= $data['nama']  ?></td>
                    <td> <?= $data['jenis_kelamin']  ?></td>
                    <td> <?= $data['nama_prodi']  ?></td>
                    <td>
                        <a href='edit.php?id=<?= $data['id_mhs'] ?>'>Edit</a> |
                        <a href='hapus.php?id=<?= $data['id_mhs'] ?>'>Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>