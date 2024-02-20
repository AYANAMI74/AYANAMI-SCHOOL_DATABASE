<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_jurusan = $_POST['kd_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    

    //query untuk memperbarui data
    $query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE kd_jurusan='$kd_jurusan'";
    mysqli_query($conn, $query);

    // redirect setelahh berhasil memperbarui data
    header("location: index.php");
    exit();
}

// ambil data tblsiswa berdasarkan NIS
$kd_jurusan = $_GET['kd_jurusan'];
$query = "SELECT * FROM jurusan WHERE kd_jurusan='$kd_jurusan'";
$result = mysqli_query($conn, $query);
$jurusan = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Edit jurusan</tittle>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="kd_jurusan">kd_jurusan:</label>
                <input type="number" class="form-control" id="kd_jurusan" name="kd_jurusan" value="<?php echo $jurusan['kd_jurusan']; ?>" >
            </div>
            <div class="form-group">
                <label for="nama_jurusan">nama_jurusan:</label>
                <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan"value="<?php echo $jurusan['nama_jurusan']; ?>">
            </div>
            
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    </div>
</body>
</html>