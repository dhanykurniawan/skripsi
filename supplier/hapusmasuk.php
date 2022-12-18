<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksidb,"delete from masuk where id_masuk='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:bahan_masuk.php");
