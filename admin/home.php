<?php
require("koneksi_db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toko Perabot MATO AIA</title>
    <link rel="icon" href="../images/icon/home1.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php
	// session_start();
	if ($_SESSION['status'] != "login") {
		header("location:index.php?pesan=belum_login");
	}
	?>

	<?php
	$no = 0;
	$totalindex = 0;
	$data = mysqli_query($koneksidb, "SELECT * from histori_pendapatan");
	while ($d = mysqli_fetch_array($data)) {
		$no++;
		$totalindex += $no;
	}
	?>

	<div class="container">
		<div class="header">
			<a href="home.php" class="aktif">Home Menu</a>
			<a href="stock.php">Stock Bahan Baku</a>
			<a href="bahan_masuk.php">Bahan Masuk</a>
			<a href="bahan_keluar.php">Bahan Terpakai</a>
			<a href="tambahdata.php">Lakukan Prediksi</a>
			<a href="data_supplier.php">Data Supplier</a>
			<!-- <a class="btn-hasil">Hasil Prediksi</a> -->
			<a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
			<a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
		</div>

		<div class="menu">
			<a href="stock.php" class="stock">Stock Bahan Baku</a>
			<a href="bahan_masuk.php" class="masuk">Bahan Masuk</a>
			<a href="bahan_keluar.php" class="keluar">Bahan Terpakai</a>
			<a href="tambahdata.php" class="prediksi">Lakukan Prediksi</a>
			<a href="data_supplier.php" class="data-supplier">Data Supplier</a>
			<!-- <a href="frekuensi_aksi.php?totalindex=<?= $totalindex; ?>" class="prediksi">Lakukan Prediksi</a> -->
		</div>

		<div class="footerdalam footermenu">
			<p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
		</div>
	</div>
</body>

</html