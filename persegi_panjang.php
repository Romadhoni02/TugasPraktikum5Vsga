<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Persegi Panjang</title>
</head>
<body>
    <h2>Perhitungan Persegi Panjang</h2>
    <form method="post">
        Panjang: <input type="number" name="panjang"><br>
        Lebar: <input type="number" name="lebar"><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
        $diagonal = sqrt($panjang**2 + $lebar**2);

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Luas: $luas cm²<br>";
        echo "Keliling: $keliling cm<br>";
        echo "Panjang Diagonal: $diagonal cm<br>";
    }
    ?>
</body>
</html>
