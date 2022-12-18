<?php
require ("koneksi_db.php");

$kode_bahan = $_POST["bahan"];
$supplier = $_POST["supplier"];
$keterangan = $_POST["keterangan"];
$jml_tambah = $_POST["jml_tambah"];

// menginput data ke database
mysqli_query($koneksidb,"insert into masuk  ()values('',current_timestamp(),'$kode_bahan','$supplier','$jml_tambah','$keterangan')");
$stocks = mysqli_query($koneksidb, "SELECT stock FROM bahan WHERE kode='$kode_bahan'");
while($stock = mysqli_fetch_array($stocks)){
    $stock = $stock['stock'];
    $stock_update = $stock + $jml_tambah;
    mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_update' where kode='$kode_bahan'");
}

    



// mengalihkan halaman kembali ke index.php
header("location:bahan_masuk.php");
