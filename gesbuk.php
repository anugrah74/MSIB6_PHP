<?php
include_once 'atas.php';

// Fungsi untuk menghindari serangan XSS
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Jika formulir disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan bersihkan data yang dikirimkan dari formulir
    $nama = sanitize_input($_POST["nama"]);
    $email = sanitize_input($_POST["email"]);
    $web = sanitize_input($_POST["web"]);
    $pesan = sanitize_input($_POST["pesan"]);

    // Menampilkan hasil pengisian formulir
    echo "<div class='card'>";
    echo "<h2>Terima kasih telah mengisi!</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Website: $web</p>";
    echo "<p>Pesan: $pesan</p>";
    echo "</div>";

}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background-image: url('https://t4.ftcdn.net/jpg/05/71/83/47/360_F_571834789_ujYbUnH190iUokdDhZq7GXeTBRgqYVwa.jpg'); 
    }
    .card {
        width: 50%;
        margin: 100px auto;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        color: white;
    }
</style>

<div class="card">
    <h2 class="text-center mb-4">Guestbook DUMET School</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap:</label>
            <div class="col-sm-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email:</label>
            <div class="col-sm-8">
                <input id="email" name="email" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="web" class="col-sm-4 col-form-label">Website:</label>
            <div class="col-sm-8">
                <input id="web" name="web" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="pesan" class="col-sm-4 col-form-label">Pesan:</label>
            <div class="col-sm-8">
                <textarea name="pesan" id="pesan" cols="50" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-4 col-sm-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php

include_once 'bawah.php';
?>