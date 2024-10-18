<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Membuat objek Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan header data penduduk
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Usia');
$sheet->setCellValue('C1', 'Alamat');
$sheet->setCellValue('D1', 'Pekerjaan');

// Tambahkan data penduduk
$dataPenduduk = [
    ['Andi', 30, 'Jl. Merdeka No. 10', 'Guru'],
    ['Budi', 25, 'Jl. Proklamasi No. 5', 'Programmer'],
    ['Citra', 28, 'Jl. Harmoni No. 3', 'Dokter'],
    ['Diana', 32, 'Jl. Maju No. 2', 'Pengusaha'],
    ['Edi', 40, 'Jl. Bunga No. 4', 'Pedagang'],
    ['Fajar', 27, 'Jl. Elok No. 12', 'Desainer'],
    ['Gina', 35, 'Jl. Cendana No. 7', 'Polisi'],
    ['Hendra', 29, 'Jl. Merapi No. 5', 'Penyanyi'],
    ['Ika', 22, 'Jl. Kemuning No. 8', 'Mahasiswa'],
    ['Joko', 31, 'Jl. Rimba No. 14', 'Arsitek'],
    ['Kiki', 36, 'Jl. Mawar No. 6', 'Koki'],
    ['Lina', 34, 'Jl. Kenanga No. 9', 'Perawat'],
    ['Maya', 28, 'Jl. Surya No. 15', 'Pramugari'],
    ['Nanda', 26, 'Jl. Damai No. 11', 'Akuntan'],
    ['Oki', 24, 'Jl. Anggrek No. 10', 'Fotografer'],
    ['Putri', 38, 'Jl. Pahlawan No. 18', 'Pengacara'],
    ['Rizki', 27, 'Jl. Menteng No. 21', 'Pemain Sepakbola'],
    ['Sinta', 29, 'Jl. Antariksa No. 19', 'Perancang Busana'],
    ['Tina', 32, 'Jl. Harmoni No. 20', 'Penulis'],
    ['Ujang', 37, 'Jl. Sawah No. 22', 'Petani'],
    ['Vera', 33, 'Jl. Sutra No. 23', 'Pengusaha'],
    ['Wawan', 30, 'Jl. Mekar No. 24', 'Sopir'],
    ['Xenia', 25, 'Jl. Pinus No. 25', 'Dokter Gigi'],
    ['Yudi', 28, 'Jl. Cempaka No. 26', 'Guru Olahraga'],
    ['Zara', 35, 'Jl. Alam No. 27', 'Wiraswasta']
];

$row = 2; // Mulai di baris ke-2
foreach ($dataPenduduk as $data) {
    $sheet->setCellValue('A' . $row, $data[0]);
    $sheet->setCellValue('B' . $row, $data[1]);
    $sheet->setCellValue('C' . $row, $data[2]);
    $sheet->setCellValue('D' . $row, $data[3]);
    $row++;
}

// Simpan sebagai CSV
$writerCsv = new Csv($spreadsheet);
$writerCsv->save('data_penduduk.csv');

// Simpan sebagai XLSX
$writerXlsx = new Xlsx($spreadsheet);
$writerXlsx->save('data_penduduk.xlsx');

echo "Data penduduk berhasil disimpan dalam format CSV dan XLSX.";

// Fitur pencarian
if (isset($_POST['search'])) {
    $searchName = $_POST['name'];
    $found = false;
    
    foreach ($dataPenduduk as $data) {
        if (strtolower($data[0]) === strtolower($searchName)) {
            echo "Nama: " . $data[0] . "<br>";
            echo "Usia: " . $data[1] . "<br>";
            echo "Alamat: " . $data[2] . "<br>";
            echo "Pekerjaan: " . $data[3] . "<br>";
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        echo "Data tidak ditemukan.";
    }
}

?>

<form method="post">
    <input type="text" name="name" placeholder="Cari Nama">
    <button type="submit" name="search">Cari</button>
</form>
