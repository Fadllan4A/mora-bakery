CREATE DATABASE IF NOT EXISTS mora_bakery;
USE mora_bakery;

CREATE TABLE IF NOT EXISTS pesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(100),
    produk VARCHAR(100),
    jumlah INT,
    tanggal_pesan DATE
);
