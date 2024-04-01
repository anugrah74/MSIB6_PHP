<?php 
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Anugrah</title>
    <style>
        body {
            background-image: url('background_image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: blue;
        }

        .menu-container {
            text-align: center;
            background-color: yellow;
            padding: 50px;
        }

        .menu-container a {
            color: blue; 
            text-decoration: none; 
            margin: 0 10px; 
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <h1>Web Anugrah</h1>
        <?php 
            // Looping foreach dari web menu.php
            foreach ($menu_atas as $key => $value) {
                echo "<a href='$menu_bawah[$key]'>$value</a>";
            }
        ?>
    </div>
</body>
</html>
