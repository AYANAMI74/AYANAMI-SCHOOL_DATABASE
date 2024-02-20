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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>database</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <style>
    /* CSS kustom untuk efek hover dan penempatan di tengah */
    .navbar-nav {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .navbar-nav a {
      color: #000CED1;
      text-decoration: none;
      position: relative;
      margin: 0 15px; /* Tambahkan margin untuk memberi ruang antar elemen */
      transition: color 0.3s;
    }

    .navbar-nav a:hover {
      color: #0000FF;
      border-bottom: 2px solid #00CED1;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SMKN 3 Jepara</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="siswa">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jurusan">Jurusan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">ALIL HIKARI</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>