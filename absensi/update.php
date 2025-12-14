<?php
include 'koneksi.php';

$id      = $_POST['id'];
$npm     = $_POST['npm'];
$nama    = $_POST['nama'];
$kelas   = $_POST['kelas'];
$tanggal = $_POST['tanggal'];
$status  = $_POST['status'];

$query = mysqli_query($koneksi, "
    UPDATE absensi SET
        npm = '$npm',
        nama = '$nama',
        kelas = '$kelas',
        tanggal = '$tanggal',
        status = '$status'
    WHERE id = '$id'
");

if ($query) {
    echo "<script>
            alert('Data berhasil diupdate');
            window.location='index.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal update data');
            window.location='index.php';
          </script>";
}
?>
