<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_bahan = $_POST['bahan'];
$keterangan = $_POST['keterangan'];
$jml_terpakai_lama = $_POST["jml_terpakai_lama"];
$jml_terpakai = $_POST["jml_terpakai"];

$stocks = mysqli_query($koneksidb, "SELECT stock FROM bahan WHERE kode='$kode_bahan'");
while($stock = mysqli_fetch_array($stocks)){
    $stock = $stock['stock'];
    $stock_update = $stock + $jml_terpakai_lama - $jml_terpakai;
    mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_update' where kode='$kode_bahan'");
}
 
// update data ke database
mysqli_query($koneksidb,"update keluar set kode_bahan='$kode_bahan', jml_terpakai='$jml_terpakai', keterangan='$keterangan' where id_keluar='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script type="text/javascript">'; 
echo 'alert("DATA BERHASIL DI UPDATE");'; 
echo 'window.location.href = "edit_keluar.php";';
echo '</script>';
