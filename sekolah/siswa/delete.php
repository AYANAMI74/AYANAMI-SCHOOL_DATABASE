<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$sql = "DELETE FROM tblsiswa WHERE nis='$nis'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('gagal menghapus data');</script>";
}
mysqli_close($conn);
?>
