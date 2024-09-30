<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Buku di Perpustakaan</h1>
        <div class="book-list">
            <?php
            // Menyertakan file
            include 'book.php';

            // Looping untuk menampilkan daftar buku
            foreach ($daftarBuku as $buku) {
                echo "<div class='book-item'>";
                echo $buku->getDetailBuku();
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
