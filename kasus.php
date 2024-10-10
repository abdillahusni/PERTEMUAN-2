<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
</head>
<body>
    <h2>Form Penilaian Mahasiswa</h2>
    <form method="POST">
        <label for="mata_kuliah1">Mata Kuliah 1:</label>
        <input type="number" name="mata_kuliah1" required><br><br>
        
        <label for="mata_kuliah2">Mata Kuliah 2:</label>
        <input type="number" name="mata_kuliah2" required><br><br>
        
        <label for="mata_kuliah3">Mata Kuliah 3:</label>
        <input type="number" name="mata_kuliah3" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['mata_kuliah1'];
        $nilai2 = $_POST['mata_kuliah2'];
        $nilai3 = $_POST['mata_kuliah3'];

        // Hitung rata-rata
        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        // Tentukan status kelulusan
        $status = ($rata_rata >= 60) ? "Lulus" : "Tidak Lulus";

        // Tampilkan hasil
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status Kelulusan: " . $status;
    }
    ?>
</body>
</html>