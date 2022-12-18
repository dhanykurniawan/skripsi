<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksidb,"delete from histori_pendapatan where idx='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tambahdata.php");
