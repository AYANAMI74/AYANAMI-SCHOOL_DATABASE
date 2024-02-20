<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sekolah";

// koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// periksa koneksi
if (!$conn)  {
    die("Connection failed: " . mysqli_connect_error());
}
?>