<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$status = $_POST['status'];

mysqli_query($conn,
  "INSERT INTO absensi VALUES ('', '$npm', '$nama', '$kelas', '$status')"
);

header("location:index.php");
?>
