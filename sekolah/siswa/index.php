<?php
// koneksi ke database
include 'koneksi.php';

// Query untuk mengambil semua data user
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
         <h2> daftar siswa </h2>
         <a href="create.php" class="btn btn-primary mb-3">tambah siswa</a>
         <table class="table">
            <thead>
                <tr>
                    <th>nis</th>
                    <th>nama</th>
                    <th>ttl </th>
                    <th>alamat</th>
                    <th>jenis_kelamin</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row ['nis']; ?></td>
                        <td><?php echo $row ['nama']; ?></td>
                        <td><?php echo $row ['ttl']; ?></td>
                        <td><?php echo $row ['alamat']; ?></td>
                        <td><?php echo $row ['jenis_kelamin']; ?></td>
                        <td>
                            <a href="update.php?nis=<?php echo $row['nis']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?nis=<?php echo $row['nis']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
