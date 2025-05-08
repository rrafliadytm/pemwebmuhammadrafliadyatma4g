<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Percabangan PHP Muhammad Rafli Adyatma</title>
</head>
<body>
    <!-- Setting Form HTML Untuk Input Nilai -->
    <h1>Soal Percabangan PHP Muhammad Rafli Adyatma</h1>
    <h2>Input Nilai</h2>
    <form method="POST" action="">
        <label for="user">Masukkan Nilai Dulu Loh Ya:</label>
        <input type="text" id="nilai" name="nilai" required>
        <button type="submit">Cek Nilai Anda</button>
    </form>
    <?php
        // Memproses Input Nilai
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];
            if ($nilai >= 80) {
                echo "<p>Nilai Anda: $nilai, Nilai Anda adalah A</p>";
            } elseif ($nilai > 70 && $nilai < 79) {
                echo "<p>Nilai Anda: $nilai, Nilai Anda adalah B</p>";
            } elseif ($nilai > 60 && $nilai < 69) {
                echo "<p>Nilai Anda: $nilai, Nilai Anda adalah C</p>";
            } elseif ($nilai > 50 && $nilai < 59) {
                echo "<p>Nilai Anda: $nilai, Nilai Anda adalah D</p>";
            } else {
                echo "<p>Nilai Anda: $nilai, Anda Tidak Lulus</p>";
            }
        }
    ?>
</body>
</html>