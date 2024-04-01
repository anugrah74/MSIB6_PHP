<?php 
include_once 'atas.php';

$produk_komik = array(
    "Solo Leveling" => 250000,
    "Beyond Myriad Peoples" => 120000,
    "Ellceed" => 150000
);

function hitungTotalHarga($judul_komik, $jumlah_komik) {
    global $produk_komik;
    if (array_key_exists($judul_komik, $produk_komik)) {
        return $produk_komik[$judul_komik] * $jumlah_komik;
    }
    return 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['beli'])) {
    $judul_komik = $_POST['komik'];
    $jumlah_komik = $_POST['jumlah'];
    if (!empty($judul_komik) && array_key_exists($judul_komik, $produk_komik)) {
        $total_harga = hitungTotalHarga($judul_komik, $jumlah_komik);
        echo "<h2>Total Harga untuk $jumlah_komik komik $judul_komik: Rp " . number_format($total_harga, 0, ',', '.') . "</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pemesanan Komik</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
    }

    ul {
      list-style-type: none;
      padding-left: 0;
    }

    li {
      margin-bottom: 20px;
      overflow: auto;
    }

    img {
      float: left;
      margin-right: 10px;
      width: 150px;
      height: auto;
    }
  </style>
</head>
<body>

<h1>Pemesanan Komik</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label for="komik">Pilih Judul Komik:</label>
    <select class="form-control" name="komik" id="komik">
      <option selected disabled>-- Pilih Judul Komik --</option>
      <?php foreach ($produk_komik as $judul => $harga) { ?>
        <option value="<?php echo $judul; ?>"><?php echo $judul; ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah Komik:</label>
    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
  </div>
  <br>
  <input type="submit" name="beli" value="Beli" class="btn btn-primary">
</form>

</body>
</html>

<?php 
include_once 'bawah.php';
?>
