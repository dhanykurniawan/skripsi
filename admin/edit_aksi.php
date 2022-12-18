<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tahun = $_POST['tahun'];
$bulan = $_POST['bulan'];
$penjualan = $_POST['jml_penjualan'];
 
// update data ke database
mysqli_query($koneksidb,"update histori_pendapatan set tahun='$tahun', kode_bulan='$bulan', jml_penjualan='$penjualan' where idx='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script type="text/javascript">'; 
echo 'alert("DATA BERHASIL DI UPDATE");'; 
echo 'window.location.href = "editdata.php";';
echo '</script>';
