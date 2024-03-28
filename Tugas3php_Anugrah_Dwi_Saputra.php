<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
            color: white;
        }
        th {
            background-color: #4CAF50;
        }
        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.1);
        }
        tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }
        tfoot {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nilai_mahasiswa = [
                    ['nim' => '654563', 'nama' => 'Anugrah', 'nilai' => 90],
                    ['nim' => '565647', 'nama' => 'Nofa', 'nilai' => 57],
                    ['nim' => '987624', 'nama' => 'Ahmad Fahrudin', 'nilai' => 81],
                    ['nim' => '123548', 'nama' => 'Anjar HK', 'nilai' => 35],
                    ['nim' => '986415', 'nama' => 'Bayu Nero', 'nilai' => 50],
                    ['nim' => '545680', 'nama' => 'Calvin Prasetyo', 'nilai' => 85],
                    ['nim' => '789543', 'nama' => 'Zavira rayhana', 'nilai' => 70],
                    ['nim' => '326549', 'nama' => 'Dimas Q', 'nilai' => 68],
                    ['nim' => '121245', 'nama' => 'Rangga ku', 'nilai' => 45],
                    ['nim' => '123459', 'nama' => 'Ilham', 'nilai' => 40]
                ];

                function hitungGrade($nilai) {
                    if ($nilai >= 85) {
                        return 'A';
                    } elseif ($nilai >= 75) {
                        return 'B';
                    } elseif ($nilai >= 65) {
                        return 'C';
                    } elseif ($nilai >= 45) {
                        return 'D';
                    } else {
                        return 'E';
                    }
                }

                function hitungPredikat($grade) {
                    switch ($grade) {
                        case 'A':
                            return 'Memuaskan';
                            break;
                        case 'B':
                            return 'Bagus';
                            break;
                        case 'C':
                            return 'Cukup';
                            break;
                        case 'D':
                            return 'Kurang';
                            break;
                        case 'E':
                            return 'Buruk';
                            break;
                        default:
                            return 'Tidak Valid';
                    }
                }

                $nilai_tertinggi = max(array_column($nilai_mahasiswa, 'nilai'));
                $nilai_terendah = min(array_column($nilai_mahasiswa, 'nilai'));
                $total_nilai = array_sum(array_column($nilai_mahasiswa, 'nilai'));
                $jumlah_mahasiswa = count($nilai_mahasiswa);
                
                foreach ($nilai_mahasiswa as $mahasiswa) {
                    $nim = $mahasiswa['nim'];
                    $nama = $mahasiswa['nama'];
                    $nilai = $mahasiswa['nilai'];
                    $grade = hitungGrade($nilai);
                    $predikat = hitungPredikat($grade);
                    $keterangan = ($grade == 'E') ? 'Tidak Lulus' : 'Lulus';

                    echo "<tr><td>$nim</td><td>$nama</td><td>$nilai</td><td>$grade</td><td>$predikat</td><td>$keterangan</td></tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Nilai Tertinggi: <?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Terendah: <?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <td colspan="6">Nilai Rata-rata: <?php echo round($total_nilai / $jumlah_mahasiswa, 2); ?></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Mahasiswa: <?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <td colspan="6">Jumlah Keseluruhan Nilai: <?php echo $total_nilai; ?></td>
            </tr>
        </tfoot>
    </table>
</div>

</body>
</html>

