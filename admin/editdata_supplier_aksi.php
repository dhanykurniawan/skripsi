<?php 
// koneksi database
require ("koneksi_db.php");
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_supplier = $_POST['nama_supplier'];
$username = $_POST['username'];
$alamat = $_POST["alamat"];
$password = MD5($_POST["password"]);
 
// update data ke database
mysqli_query($koneksidb,"update supplier set nama_supplier='$nama_supplier', username='$username', password='$password', alamat='$alamat' where id_user='$id'");
 
// mengalihkan halaman kembali ke index.php
echo '<script type="text/javascript">'; 
echo 'alert("DATA BERHASIL DI UPDATE");'; 
echo 'window.location.href = "edit_datasupplier.php";';
echo '</script>';
