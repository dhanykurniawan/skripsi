<?php
require ("koneksi_db.php");

$kode_bahan = $_POST["bahan"];
$keterangan = $_POST["keterangan"];
$jml_terpakai = $_POST["jml_terpakai"];

// menginput data ke database
mysqli_query($koneksidb,"insert into keluar  ()values('',current_timestamp(),'$kode_bahan','$jml_terpakai','$keterangan')");
$stocks = mysqli_query($koneksidb, "SELECT stock FROM bahan WHERE kode='$kode_bahan'");
while($stock = mysqli_fetch_array($stocks)){
    $stock = $stock['stock'];
    $stock_update = $stock - $jml_terpakai;
    mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_update' where kode='$kode_bahan'");
}
 
// mengalihkan halaman kembali ke index.php
header("location:bahan_keluar.php");
