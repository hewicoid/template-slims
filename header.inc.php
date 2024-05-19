<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Kami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo_perpustakaan.png" alt="Logo Perpustakaan">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="services.php">Layanan</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="search_result.php" method="get">
                <input type="text" name="search" placeholder="Cari buku, jurnal, artikel...">
                <button type="submit">Cari</button>
            </form>
        </div>
    </header>
