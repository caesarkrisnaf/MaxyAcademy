<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $penyakit = $_POST['penyakit'];
    $no_kamar = $_POST['no_kamar'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $tgl_keluar = $_POST['tgl_keluar'];

    $sql = "INSERT INTO pasien (nama, tgl_lahir, jenis_kelamin, usia, penyakit, no_kamar, tgl_masuk, tgl_keluar) 
            VALUES ('$nama', '$tgl_lahir', '$jenis_kelamin', '$usia', '$penyakit', '$no_kamar', '$tgl_masuk', '$tgl_keluar')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
