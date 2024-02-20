<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    //query untuk memperbarui data
    $query = "UPDATE tblsiswa SET nama='$nama', ttl='$ttl', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE nis='$nis'";
    mysqli_query($conn, $query);

    // redirect setelahh berhasil memperbarui data
    header("location: index.php");
    exit();
}

// ambil data tblsiswa berdasarkan NIS
$nis = $_GET['nis'];
$query = "SELECT * FROM tblsiswa WHERE nis='$nis'";
$result = mysqli_query($conn, $query);
$tblsiswa = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Edit tblsiswa</tittle>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit siswa</h2>
        <form method="POST">
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="number" class="form-control" id="nis" name="nis" value="<?php echo $tblsiswa['nis']; ?>" >
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama"value="<?php echo $tblsiswa['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="ttl">ttl:</label>
                <input type="date" class="form-control" id="ttl" name="ttl"value="<?php echo $tblsiswa['ttl']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat"value="<?php echo $tblsiswa['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis_kelamin:</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="laki-laki"<?php if ($tblsiswa['jenis_kelamin'] == 'laki-laki') echo 'selected'; ?>>laki-laki</option>
                        <option value="perempuan"<?php if ($tblsiswa['jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>perempuan</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    </div>
</body>
</html>