<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator PHP Muhammad Rafli Adyatma</title>
</head>
<body>
    <?php
        // Operator Aritmatika
        $a = 10;
        $b = 5;
        $c = $a + $b; // Penjumlahan
        $d = $a - $b; // Pengurangan
        $e = $a * $b; // Perkalian
        $f = $a / $b; // Pembagian
        $g = $a % $b; // Hasil Bagi

        // Operator Relasional
        $lebih_besar = $a > $b; // Lebih besar
        $lebih_kecil = $a < $b; // Lebih kecil
        $sama_dengan = $a == $b; // Sama dengan
        $tidak_sama = $a != $b; // Tidak sama
        $lebih_besar_sama_dengan = $a >= $b; // Lebih besar sama dengan
        $lebih_kecil_sama_dengan = $a <= $b; // Lebih kecil sama dengan

        // Operator Logika
        $benar = true;
        $salah = false;
        $and = $benar && $salah; // AND
        $or = $benar || $salah; // OR
        $not = !$benar; // NOT
        $xor = $benar xor $salah; // XOR

        // Menampilkan hasil
        echo "<h1>Nilai Awal</h1>";
        echo "<p>Nilai a adalah " . $a . "</p>";
        echo "<p>Nilai b adalah " . $b . "</p>";

        echo "<br> <br>";


        echo "<h1>Operator Aritmatika</h1>";
        echo "<p>a + b: " . $c . "</p>";
        echo "<p>a - b: " . $d . "</p>";
        echo "<p>a * b: " . $e . "</p>";
        echo "<p>a / b: " . $f . "</p>";
        echo "<p>a % b: " . $g . "</p>";

        echo "<br> <br>";

        echo "<h1>Operator Relasional</h1>";
        echo "<p>a > b: " . ($lebih_besar ? 'true' : 'false') . "</p>";
        echo "<p>b < a: " . ($lebih_kecil ? 'true' : 'false') . "</p>";
        echo "<p>a == b: " . ($sama_dengan ? 'true' : 'false') . "</p>";
        echo "<p>a != b: " . ($tidak_sama ? 'true' : 'false') . "</p>";
        echo "<p>a >= b: " . ($lebih_besar_sama_dengan ? 'true' : 'false') . "</p>";
        echo "<p>b <= a: " . ($lebih_kecil_sama_dengan ? 'true' : 'false') . "</p>";

        
        echo "<br> <br>";

        echo "<h1>Operator Logika</h1>";
        echo "<p>a AND b: " . ($and ? 'true' : 'false') . "</p>";
        echo "<p>a OR b: " . ($or ? 'true' : 'false') . "</p>";
        echo "<p>NOT a: " . ($not ? 'true' : 'false') . "</p>";
        echo "<p>a XOR b: " . ($xor ? 'true' : 'false') . "</p>";
    ?>

</body>
</html>