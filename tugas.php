<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>

<?php
// Fungsi untuk menghitung umur berdasarkan tanggal lahir
function hitungUmur($tanggal_lahir) {
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime();
    $perbedaan = $sekarang->diff($tanggal_lahir);
    return $perbedaan->y;
}

// Daftar pekerjaan beserta gajinya
$daftar_pekerjaan = array(
    "Programmer" => 5000000,
    "Desainer" => 4500000,
    "Pengajar" => 6000000
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $pekerjaan = $_POST["pekerjaan"];
    
    // Hitung umur
    $umur = hitungUmur($tanggal_lahir);
    
    // Tampilkan hasil
    echo "<h2>Hasil Input</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
    echo "<p>Umur: $umur tahun</p>";
    echo "<p>Pekerjaan: $pekerjaan</p>";
    
    // Tampilkan gaji sesuai pekerjaan
    echo "<h2>Gaji</h2>";
    if (array_key_exists($pekerjaan, $daftar_pekerjaan)) {
        echo "<p>Gaji: Rp " . number_format($daftar_pekerjaan[$pekerjaan], 0, ",", ".") . "</p>";
    } else {
        echo "<p>Pekerjaan tidak valid</p>";
    }
}
?>

<h2>Form Input</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="nama"><br><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br><br>
    Pekerjaan:
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Pengajar">Pengajar</option>
    </select><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
