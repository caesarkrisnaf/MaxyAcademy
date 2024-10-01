<?php
$host = "localhost"; // Ganti dengan detail web hosting jika diunggah
$user = "root"; 
$password = ""; 
$dbname = "day17"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
