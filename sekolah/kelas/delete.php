<?php
include 'koneksi.php';
$kd_kelas = $_GET['kd_kelas'];
$sql = "DELETE FROM kelas WHERE kd_kelas='$kd_kelas'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('gagal menghapus data');</script>";
}
mysqli_close($conn);
?>