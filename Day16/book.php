<?php
// Kelas Buku
class Buku {
    private $judul;
    private $pengarang;
    private $tahunTerbit;
    private $genre;

    public function __construct($judul, $pengarang, $tahunTerbit, $genre) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
        $this->genre = $genre;
    }

    public function getDetailBuku() {
        return "<strong>Judul:</strong> {$this->judul} <br> 
                <strong>Pengarang:</strong> {$this->pengarang} <br>
                <strong>Tahun Terbit:</strong> {$this->tahunTerbit} <br> 
                <strong>Genre:</strong> {$this->genre}";
    }
}

// Kelas Perpustakaan
class Perpustakaan {
    private $lokasi;
    private $daftarBuku = [];

    public function __construct($lokasi) {
        $this->lokasi = $lokasi;
    }

    public function tambahBuku($buku) {
        $this->daftarBuku[] = $buku;
    }

    public function getDaftarBuku() {
        return $this->daftarBuku;
    }
}

// Membuat beberapa objek Buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005, "Fiksi");
$buku2 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980, "Sejarah");
$buku3 = new Buku("Perahu Kertas", "Dewi Lestari", 2009, "Romantis");

// Membuat objek Perpustakaan dan menambahkan buku-buku ke dalamnya
$perpustakaan = new Perpustakaan("Jakarta");
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

// Mengambil daftar buku
$daftarBuku = $perpustakaan->getDaftarBuku();
?>
