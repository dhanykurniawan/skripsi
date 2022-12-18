<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_bahan = $_POST['bahan'];
$supplier = $_POST['supplier'];
$keterangan = $_POST['keterangan'];
$jml_lama = $_POST["jml_lama"];
$jml_tambah = $_POST["jml_tambah"];
 

$stocks = mysqli_query($koneksidb, "SELECT stock FROM bahan WHERE kode='$kode_bahan'");
while($stock = mysqli_fetch_array($stocks)){
    $stock = $stock['stock'];
    $stock_update = $stock - $jml_lama + $jml_tambah;
    mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_update' where kode='$kode_bahan'");
}
// update data ke database
mysqli_query($koneksidb,"UPDATE masuk set kode_bahan='$kode_bahan', supplier='$supplier', jml_tambah='$jml_tambah', keterangan='$keterangan' where id_masuk='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script type="text/javascript">'; 
echo 'alert("DATA BERHASIL DI UPDATE");'; 
echo 'window.location.href = "edit_masuk.php";';
echo '</script>';
