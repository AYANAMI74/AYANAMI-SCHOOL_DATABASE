<?php
// koneksi ke database
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $kd_kelas = $_POST['kd_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    

    //Query untuk menyimpan data baru 
    $query = "INSERT INTO kelas (kd_kelas, nama_kelas) VALUES ('$kd_kelas', '$nama_kelas')";
    mysqli_query($conn, $query);
    
    //redirect setelah berhasil membuat data baru
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create kelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
         <h2> tambah kelas </h2>
         <form  method="POST">
            <div class="form group">
                <label for="kd_kelas">kd_kelas:</label>
                <input type="number" class="form-control" id="kd_kelas" name="kd_kelas">
            </div>
            <div class="form-group">
                <label for="nama_kelas">nama_kelas:</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
            </div>
            
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>
    </div>
</body>

</html>