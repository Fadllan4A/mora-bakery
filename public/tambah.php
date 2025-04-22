<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama    = $_POST['nama'];
    $produk  = $_POST['produk'];
    $jumlah  = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO pesanan (nama_pelanggan, produk, jumlah, tanggal_pesan)
            VALUES ('$nama', '$produk', $jumlah, '$tanggal')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2 class="mb-4">Tambah Pesanan</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Produk</label>
            <input type="text" name="produk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pesan</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
