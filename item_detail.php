<?php
include 'sysconfig.inc.php';
// Memeriksa ID item yang valid
$itemID = intval($_GET['item_id']);
// Query untuk mendapatkan detail item
$query = $dbs->query("SELECT * FROM item WHERE item_id = '$itemID'");
$data = $query->fetch_assoc();
?>
<html>
<head>
    <title>Detail Item</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="itemDetail">
        <h1><?php echo $data['title']; ?></h1>
        <p><?php echo $data['description']; ?></p>
        <!-- Informasi lebih lanjut tentang item -->
    </div>
</body>
</html>
