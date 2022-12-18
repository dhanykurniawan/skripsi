<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi_db.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksidb, "select * from supplier where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['username'] = $username;
	$_SESSION['id_user'] = $cek['id_user'];
	$_SESSION['status'] = "login";
	header("location:bahan_masuk.php");
} else {
	header("location:index.php?pesan=gagal");
}
