<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Inventaris</title>
</head>
<body>
    <h2>Laporan Inventaris</h2>
    <form method="post">
        Nama Produk: <input type="text" name="nama_produk"><br>
        Jumlah Produk: <input type="number" name="jumlah_produk"><br>
        Harga per Produk: <input type="number" name="harga_per_produk"><br>
        Status Ketersediaan: <input type="text" name="status_ketersediaan"><br>
        <input type="submit" name="submit" value="Buat Laporan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_produk = $_POST['nama_produk'];
        $jumlah_produk = $_POST['jumlah_produk'];
        $harga_per_produk = $_POST['harga_per_produk'];
        $status_ketersediaan = $_POST['status_ketersediaan'];

        $total_nilai_inventaris = $jumlah_produk * $harga_per_produk;

        echo "<h3>Laporan Produk:</h3>";
        echo "Nama Produk: $nama_produk<br>";
        echo "Jumlah: $jumlah_produk<br>";
        echo "Harga per Produk: Rp " . number_format($harga_per_produk, 2, ',', '.') . "<br>";
        echo "Total Nilai Inventaris: Rp " . number_format($total_nilai_inventaris, 2, ',', '.') . "<br>";
        echo "Status Ketersediaan: $status_ketersediaan<br>";
    }
    ?>
</body>
</html>
