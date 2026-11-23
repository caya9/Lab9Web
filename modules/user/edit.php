<?php
include_once __DIR__ . '/../../config/database.php';

if (!isset($_GET['id'])) {
    echo "ID barang tidak ditemukan!";
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM data_barang WHERE id_barang='$id'");
$data = mysqli_fetch_array($query);

if (!$data) {
    echo "Data barang tidak ditemukan!";
    exit;
}
?>

<section>
    <h2>Edit Data Barang</h2>

    <form method="POST">
        <label>Nama Barang</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>

        <label>Kategori</label><br>
        <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required><br><br>

        <label>Harga Beli</label><br>
        <input type="number" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required><br><br>

        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required><br><br>

        <button type="submit" name="submit">Simpan Perubahan</button>
        <a href="index.php?page=user/list">Kembali</a>
    </form>
</section>
