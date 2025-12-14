<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Absensi Mahasiswa</title>

    <!-- ✅ CONNECT CSS DI SINI -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>Form Absensi Mahasiswa</h2>

    <form method="POST" action="simpan.php">
        <input type="text" name="npm" placeholder="NPM" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="kelas" placeholder="Kelas" required>
        <input type="date" name="tanggal" required>

        <select name="status" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</div>

<div class="card">
    <h2>Data Absensi</h2>

    <table>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY tanggal DESC");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['npm'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['status'] ?></td>
            <td class="aksi">
                <a class="edit" href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                <a class="hapus" href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
