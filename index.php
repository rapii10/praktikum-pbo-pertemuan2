<?php
// Data mahasiswa
$nama = "Rafy Adilaputra"; // String
$nim = "2530521060";       // String
$kelas = "Teknik Informatika"; // String
$nilai = 85;               // Integer
$kehadiran = 0.95;         // Float
$lulus = true;             // Boolean

// Function untuk menentukan predikat nilai
function tentukanPredikat($nilai)
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$predikat = tentukanPredikat($nilai);

// Percabangan untuk menentukan status
if ($nilai >= 65 && $kehadiran >= 0.75) {
    $status = "Lulus";
} else {
    $status = "Belum lulus";
}

// Data mata kuliah untuk ditampilkan dengan perulangan
$mataKuliah = ["Pemrograman Berorientasi Objek", "Sistem Operasi", "Matematika"];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            margin: 0;
            padding: 30px 16px;
            color: #222;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 3px 14px rgba(0,0,0,0.08);
        }
        h1 { color: #234e70; margin-top: 0; }
        .hasil {
            background: #eaf4ff;
            padding: 16px;
            border-radius: 8px;
            line-height: 1.8;
        }
        li { margin: 8px 0; }
    </style>
</head>
<body>
    <main class="container">
        <h1>Program Perhitungan Nilai Mahasiswa</h1>

        <div class="hasil">
            <strong>Identitas Mahasiswa</strong><br>
            Nama: <?= htmlspecialchars($nama) ?><br>
            NIM: <?= htmlspecialchars($nim) ?><br>
            Program Studi: <?= htmlspecialchars($kelas) ?><br>
            Nilai: <?= $nilai ?><br>
            Kehadiran: <?= ($kehadiran * 100) ?>%
        </div>

        <h2>Hasil Penilaian</h2>
        <p>Predikat: <strong><?= $predikat ?></strong></p>
        <p>Status: <strong><?= $status ?></strong></p>

        <h2>Contoh Perulangan: Mata Kuliah</h2>
        <ol>
            <?php for ($i = 0; $i < count($mataKuliah); $i++): ?>
                <li><?= htmlspecialchars($mataKuliah[$i]) ?></li>
            <?php endfor; ?>
        </ol>
    </main>
</body>
</html>
