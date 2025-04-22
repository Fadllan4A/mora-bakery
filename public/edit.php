<?php
include '../config/db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama    = $_POST['nama'];
    $produk  = $_POST['produk'];
    $jumlah  = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE pesanan SET 
            nama_pelanggan='$nama',
            produk='$produk',
            jumlah=$jumlah,
            tanggal_pesan='$tanggal' 
            WHERE id=$id";

    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2 class="mb-4">Edit Pesanan</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama" value="<?= $data['nama_pelanggan'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Produk</label>
            <input type="text" name="produk" value="<?= $data['produk'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Pesan</label>
            <input type="date" name="tanggal" value="<?= $data['tanggal_pesan'] ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
