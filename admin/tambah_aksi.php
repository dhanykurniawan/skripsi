<?php
require ("koneksi_db.php");

$tahun = $_POST["tahun"];
$bulan = $_POST["bulan"];
$penjualan = $_POST["penjualan"];

// menginput data ke database
mysqli_query($koneksidb,"insert into histori_pendapatan  ()values('','$tahun','$bulan','$penjualan')");
 
// mengalihkan halaman kembali ke index.php
header("location:tambahdata.php");
