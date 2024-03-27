<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://t4.ftcdn.net/jpg/05/71/83/47/360_F_571834789_ujYbUnH190iUokdDhZq7GXeTBRgqYVwa.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            color: white;
        }
        input[type="text"], select, input[type="number"] {
            width: calc(100% - 20px); /* 100% minus padding */
            padding: 8px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: calc(100% - 20px); /* 100% minus padding */
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Belanja</h2>
    <form action="" method="POST" id="belanjaForm">
        <label for="nama">Nama Pelanggan:</label>
        <input type="text" name="nama" id="nama" placeholder="Nama Pelanggan"><br>

        <label for="produk">Produk:</label>
        <select name="produk" id="produk" onchange="setHarga()">
            <option value="TV">TV</option>
            <option value="KULKAS">KULKAS</option>
            <option value="MESIN CUCI">MESIN CUCI</option>
            <option value="AC">AC</option>
        </select><br>

        <label for="jumlah_beli">Jumlah Beli:</label>
        <input type="number" name="jumlah_beli" id="jumlah_beli" min="1"><br>

        <input type="submit" name="submit" value="Hitung Total">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $produk = $_POST['produk'];
        $jumlah_beli = $_POST['jumlah_beli'];

        $harga_satuan = 0;

        if($produk == "TV"){
            echo $harga_satuan = 1250000;
        }else if ($produk == "KULKAS"){
            echo $harga_satuan = 2000000; 
        }else if ($produk == "MESIN CUCI"){
            echo $harga_satuan = 3000000;
        }else if ($produk == "AC"){
          echo $harga_satuan = 4000000;              
        }

        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.1 * $total_belanja;
        $ppn = 0.1 * ($total_belanja - $diskon);
        $harga_bersih = ($total_belanja - $diskon) + $ppn;

        echo "<br><h3>Detail Pembelian:</h3>";
        echo "Nama Pelanggan: " . $nama . "<br>";
        echo "Produk: " . $produk . "<br>";
        echo "Jumlah Beli: " . $jumlah_beli . "<br>";
        echo "Harga Satuan: " . $harga_satuan . "<br>";
        echo "Total Belanja: " . $total_belanja . "<br>";
        echo "Diskon (10%): " . $diskon . "<br>";
        echo "PPN (10%): " . $ppn . "<br>";
        echo "Harga Bersih: " . $harga_bersih . "<br>";
    }
    ?>
</div>

<script>
function setHarga() {
    var select = document.getElementById("produk");
    var hargaSatuanInput = document.getElementById("harga_satuan");

    if (select.value === "TV") {
        hargaSatuanInput.value = 1250000;
    } else if (select.value === "KULKAS") {
        hargaSatuanInput.value = 2000000;
    } else if (select.value === "MESIN CUCI") {
        hargaSatuanInput.value = 3000000;
    } else if (select.value === "AC") {
        hargaSatuanInput.value = 4000000;
    } else {
        hargaSatuanInput.value = 0;
    }
}
</script>
</body>
</html>
