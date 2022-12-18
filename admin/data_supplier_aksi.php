<?php
require ("koneksi_db.php");

$nama_supplier = $_POST["nama_supplier"];
$username = $_POST["username"];
$alamat = $_POST["alamat"];
$password = MD5($_POST["password"]);

// menginput data ke database
mysqli_query($koneksidb,"insert into supplier  ()values('','$nama_supplier','$username','$password','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_supplier.php");
