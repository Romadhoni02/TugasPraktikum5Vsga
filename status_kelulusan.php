<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Status Kelulusan Mahasiswa</title>
</head>
<body>
    <h2>Status Kelulusan Mahasiswa</h2>
    <form method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Nilai Q1: <input type="number" name="nilai_q1"><br>
        Nilai Q2: <input type="number" name="nilai_q2"><br>
        Nilai UTS: <input type="number" name="nilai_uts"><br>
        Nilai UAS: <input type="number" name="nilai_uas"><br>
        Nilai Proyek: <input type="number" name="nilai_proyek"><br>
        <input type="submit" name="submit" value="Cek Status">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $nilai_q1 = $_POST['nilai_q1'];
        $nilai_q2 = $_POST['nilai_q2'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_proyek = $_POST['nilai_proyek'];

        $nilai_akhir = ($nilai_q1 * 0.10) + ($nilai_q2 * 0.10) + ($nilai_uts * 0.10) + ($nilai_uas * 0.20) + ($nilai_proyek * 0.50);
        $status_kelulusan = ($nilai_akhir > 60) ? "Lulus" : "Tidak Lulus";

        echo "<h3>Laporan Mahasiswa:</h3>";
        echo "NIM: $nim<br>";
        echo "Nama: $nama<br>";
        echo "Nilai Q1: $nilai_q1<br>";
        echo "Nilai Q2: $nilai_q2<br>";
        echo "Nilai UTS: $nilai_uts<br>";
        echo "Nilai UAS: $nilai_uas<br>";
        echo "Nilai Proyek: $nilai_proyek<br>";
        echo "Nilai Akhir: $nilai_akhir<br>";
        echo "Status: $status_kelulusan<br>";
    }
    ?>
</body>
</html>
