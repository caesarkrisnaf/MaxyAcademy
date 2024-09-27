<?php
// Fungsi untuk menghitung rata-rata nilai
function hitungRataRata($nilaiArray) {
    $total = 0;
    $jumlahNilai = count($nilaiArray);
    
    foreach ($nilaiArray as $nilai) {
        $total += $nilai;
    }
    
    return $total / $jumlahNilai;
}

// Fungsi untuk menentukan grade berdasarkan rata-rata
function tentukanGrade($rataRata) {
    if ($rataRata >= 85) {
        return "A";
    } elseif ($rataRata >= 70) {
        return "B";
    } elseif ($rataRata >= 55) {
        return "C";
    } elseif ($rataRata >= 40) {
        return "D";
    } else {
        return "E";
    }
}

// Mendapatkan data dari form
$nama = $_POST['nama'];
$nilai_1 = $_POST['nilai_1'];
$nilai_2 = $_POST['nilai_2'];
$nilai_3 = $_POST['nilai_3'];

// Menyimpan nilai ke dalam array
$nilaiArray = [$nilai_1, $nilai_2, $nilai_3];

// Menghitung rata-rata
$rataRata = hitungRataRata($nilaiArray);

// Menentukan grade
$grade = tentukanGrade($rataRata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian Siswa</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menambahkan file CSS eksternal -->
</head>
<body>
    <div class="container">
        <h1>Hasil Penilaian Siswa</h1>
        <p>Nama Siswa: <?php echo htmlspecialchars($nama); ?></p>
        <p>Nilai Rata-Rata: <?php echo number_format($rataRata, 2); ?></p>
        <p>Grade: <?php echo $grade; ?></p>

        <a href="index.html">Kembali</a>
    </div>
</body>
</html>
