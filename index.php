<?php
// Memulai session dan memasukkan file konfigurasi SLiMS
include 'sysconfig.inc.php';

// Header Perpustakaan
include "$sysconf[template][dir]/$sysconf[template][theme]/header.inc.php";
?>
<html>
<head>
    <title>Halaman Utama Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Konten utama -->
    <div id="mainContent">
        <?php
        // Konten yang dapat disesuaikan
        ?>
    </div>

    <!-- Footer Perpustakaan -->
    <?php
    include "$sysconf[template][dir]/$sysconf[template][theme]/footer.inc.php";
    ?>
</body>
</html>
