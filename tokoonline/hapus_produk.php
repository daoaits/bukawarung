<?php
include 'db.php';

// Pastikan parameter id_produk telah dikirimkan melalui URL
if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];

    // Query untuk menghapus data produk berdasarkan id_produk
    $sql = "DELETE FROM produk WHERE id = $id_produk";

    if ($koneksi->query($sql) === TRUE) {
        echo "Data produk berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID produk tidak ditemukan.";
}

// Tutup koneksi
$koneksi->close();
?>
