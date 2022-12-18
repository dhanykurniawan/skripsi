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
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
		<div class="header keluar">
      <a href="home.php" class="aktif">Home Menu</a>
			DATA SUPPLIER
			<a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
			<a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
		</div>

        <div class="tambah">
            <h3>Form Tambah Data Supplier</h3>
            <form action="data_supplier_aksi.php" method="post">
              <table class="tambahdata">
                <tr>
                  <td class="labeldata">Nama Supplier</td>
                  <td class="isiandata">
                    <input type="text" name="nama_supplier" placeholder="Nama Supplier" required>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Username akun</td>
                  <td class="isiandata">
                    <input type="text" name="username" placeholder="Username Akun" required>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Alamat</td>
                  <td class="isiandata">
                    <input type="text" name="alamat" placeholder="Alamat" required>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Password Default</td>
                  <td class="isiandata">
                    <input type="password" name="password" class="isian-pass" placeholder="Password Default" required>
                    <input type="checkbox" class="form-checkbox">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="textarea">
                    <input type="submit" name="tambah" class="button" value="S U B M I T">
                  </td>
                </tr>
            </form>
            </table>
            </form>
          </div>

          <div class="data">
            <h3>Data Supplier</h3>
            <table class="history data_supplier">
              <tr class="baris1">
                <td class="kolomhistory1">No</td>
                <td class="kolomhistory2">Nama Supplier</td>
                <td class="kolomhistory3">Username</td>
                <td class="kolomhistory4">Alamat</td>
                <td class="kolomhistory5">#</td>
              </tr>

              <?php 
                $data = mysqli_query($koneksidb, "SELECT * FROM supplier");
                $no = 1;
                while($d = mysqli_fetch_array($data)){
              ?>

              <tr class="data">
                <td class="kolomhistory1"><?= $no++; ?></td>
                <td class="kolomhistory2"><?= $d['nama_supplier']; ?></td>
                <td class="kolomhistory3"><?= $d['username']; ?></td>
                <td class="kolomhistory4"><?= $d['alamat']; ?></td>
                <td class="kolomhistory5">
                  <a href="edit_datasupplier.php?id=<?= $d['id_user']; ?>" class="tombol editdata">EDIT</a>
                  <a href="hapusdatasupplier.php?id=<?= $d['id_user']; ?>" class="tombol hapusdata" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA SUPPLIER INI?')">HAPUS</a></td>
              </tr>

              <?php } ?>
            </table>
          </div>

          <div class="footerdalam footermenu">
            <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
          </div>

    </div>

    <script type="text/javascript">
    $(document).ready(function(){		
      $('.form-checkbox').click(function(){
        if($(this).is(':checked')){
          $('.isian-pass').attr('type','text');
        }else{
          $('.isian-pass').attr('type','password');
        }
      });
    });
    </script>
    
</body>
</html>