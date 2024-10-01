<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $penyakit = $_POST['penyakit'];
    $no_kamar = $_POST['no_kamar'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $tgl_keluar = $_POST['tgl_keluar'];

    $sql = "UPDATE pasien SET 
            nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', usia='$usia', penyakit='$penyakit', 
            no_kamar='$no_kamar', tgl_masuk='$tgl_masuk', tgl_keluar='$tgl_keluar' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
