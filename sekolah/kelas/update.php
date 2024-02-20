<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    ;

    //query untuk memperbarui data
    $query = "UPDATE kelas SET nama_kelas='$nama_kelas' WHERE kd_kelas='$kd_kelas'";
    mysqli_query($conn, $query);

    // redirect setelahh berhasil memperbarui data
    header("location: index.php");
    exit();
}

// ambil data kelas berdasarkan kd_kelas
$kd_kelas = $_GET['kd_kelas'];
$query = "SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'";
$result = mysqli_query($conn, $query);
$kd_kelas = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Edit kd_kelas</tittle>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit kelas</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_kelas">kd_kelas:</label>
                <input type="number" class="form-control" id="kd_kelas" name="kd_kelas" value="<?php echo $tblsiswa['kd_kelas']; ?>" >
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama_kelas:</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"value="<?php echo $tblsiswa['nama_kelas']; ?>">
            </div>
            
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    </div>
</body>
</html>