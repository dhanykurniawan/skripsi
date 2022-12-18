<?php
require("koneksi_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Perabot MATO AIA</title>
    <link rel="icon" href="../images/icon/home1.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../admin/style.css">
</head>

<body>

    <div class="container">
		<div class="header stock">
      <a href="home.php" class="aktif">Home Menu</a>
			STOCK BAHAN BAKU
			<a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
			<a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
		</div>

        <div class="data">
            <h3>Data Stock Bahan Baku</h3>
            <table class="history stock">
              <tr class="baris1">
                <td class="kolomhistory1">No</td>
                <td class="kolomhistory2">Nama Bahan</td>
                <td class="kolomhistory3">Jumlah Stock</td>
              </tr>

              <?php 
                $data = mysqli_query($koneksidb, "SELECT * FROM bahan");
                $no = 1;
                while($d = mysqli_fetch_array($data)){
              ?>

              <tr class="data">
                <td class="kolomhistory1"><?= $no++; ?></td>
                <td class="kolomhistory2"><?= $d['nama_bahan']; ?></td>
                <td class="kolomhistory3"><?= $d['stock']; ?></td>
              </tr>

              <?php } ?>
            </table>
        </div>

        <div class="footerdalam footermenu">
            <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
        </div>

    </div>
    
</body>
</html>