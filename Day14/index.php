<?php
session_start();

// Inisialisasi daftar buku jika belum ada dalam session
if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [
        "001" => "Belajar PHP",
        "002" => "Pemrograman Web Lanjutan",
        "003" => "Desain Database",
        "004" => "Pemrograman JavaScript",
        "005" => "Algoritma dan Struktur Data"
    ];
}

if (!isset($_SESSION['borrowedBooks'])) {
    $_SESSION['borrowedBooks'] = [];
}

// Fungsi untuk meminjam buku
function borrowBook($code) {
    if (isset($_SESSION['books'][$code])) {
        $_SESSION['borrowedBooks'][$code] = $_SESSION['books'][$code];
        unset($_SESSION['books'][$code]);
        return "Buku berhasil dipinjam.";
    } else {
        return "Kode buku tidak ditemukan atau sudah dipinjam.";
    }
}

// Fungsi untuk mengembalikan buku
function returnBook($code) {
    if (isset($_SESSION['borrowedBooks'][$code])) {
        $_SESSION['books'][$code] = $_SESSION['borrowedBooks'][$code];
        unset($_SESSION['borrowedBooks'][$code]);
        return "Buku berhasil dikembalikan.";
    } else {
        return "Kode buku tidak ditemukan di daftar pinjaman.";
    }
}

// Proses input dari form
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['borrow'])) {
        $message = borrowBook($_POST['bookCode']);
    } elseif (isset($_POST['return'])) {
        $message = returnBook($_POST['bookCode']);
    }
}

// Load template HTML
include 'index.html';
?>
