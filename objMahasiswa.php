<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            background-image: url('https://png.pngtree.com/background/20230611/original/pngtree-flame-lighted-car-desktop-wallpaper-hd-1920x1080-picture-image_3124081.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
        }
        form {
            background-color: black;
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;
            max-width: 400px;
        }
        input[type="text"], input[type="submit"], select {
            width: calc(100% - 22px); 
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: black;
        }     
        table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                background-color: black;
        }
        table, th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }
        
    </style>
</head>
<body>
    <form action="" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Kuliah: 
        <select name="kuliah">
            <option value="">--Pilih Universitas--</option>
            <option value="Universitas Muria Kudus">Universitas Muria Kudus</option>
            <option value="Universitas Indonesia">Universitas Indonesia</option>
            <option value="Universitas Gajah Mada">Universitas Gajah Mada</option>
        </select><br>
        Mata Kuliah: 
        <select name="matkul">
            <option value="">Pilih Mata Kuliah</option>
            <option value="PHP">PHP</option>
            <option value="LARAVEL">LARAVEL</option>
            <option value="JAVASCRIPT">JAVASCRIPT</option>
            <option value="JURUS NINJA">JURUS NINJA</option>
        </select><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'Mahasiswa.php';

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kuliah = $_POST['kuliah'];
        $matkul = $_POST['matkul']; 
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);

        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>".$mahasiswa->nim."</td>";
        echo "<td>".$mahasiswa->nama."</td>";
        echo "<td>".$mahasiswa->kuliah."</td>";
        echo "<td>".$matkul."</td>"; 
        echo "<td>".$mahasiswa->nilai."</td>";
        echo "<td>".$mahasiswa->grade."</td>";
        echo "<td>".$mahasiswa->predikat."</td>";
        echo "<td>".$mahasiswa->status."</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
