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
		<div class="header keluar">
			BAHAN BAKU (Keluar/Terpakai)
			<a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
			<a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
		</div>

        <div class="tambah">
            <h3>Form Bahan Baku (Keluar/Terpakai)</h3>
            <form action="bahan_keluar_aksi.php" method="post">
              <table class="tambahdata">
                <tr>
                  <td class="labeldata">Nama Bahan</td>
                  <td class="isiandata">
                    <select id="bahan" name="bahan">
                      <option value="1">Kayu Surian</option>
                      <option value="2">Kayu Bayur</option>
                      <option value="3">Kayu Borneo</option>
                      <option value="4">Kayu Timbalun</option>
                      <option value="5">Kayu Mahoni</option>
                      <option value="6">Multiplex 9mm</option>
                      <option value="7">Multiplex 12mm</option>
                      <option value="8">Multiplex 15mm</option>
                      <option value="9">HPL</option>
                      <option value="10">Tacosit</option>
                      <option value="11">Lem Fox</option>
                      <option value="12">Lem Prima D</option>
                      <option value="13">Lem 168</option>
                      <option value="14">Lem Fortebon</option>
                      <option value="15">Cat Impra</option>
                      <option value="16">Cat Boyo</option>
                      <option value="17">Cat Avian</option>
                      <option value="18">Cat Dulux</option>
                      <option value="19">Cat Laba-laba</option>
                      <option value="20">Paku Tembak F20</option>
                      <option value="21">Paku Tembak F25</option>
                      <option value="22">Paku Tembak F30</option>
                      <option value="23">Paku Biasa 1 inch</option>
                      <option value="24">Paku Biasa 2 inch</option>
                      <option value="25">Paku Biasa 3 inch</option>
                      <option value="26">Paku Biasa 4 inch</option>
                      <option value="27">Amplas Rol</option>
                      <option value="28">Amplas Bulat</option>
                      <option value="29">Amplas Tempel</option>
                        </select>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Keterangan</td>
                  <td class="isiandata">
                    <textarea rows="5" name="keterangan">
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Jumlah Stock Terpakai</td>
                  <td class="isiandata">
                    <input type="text" name="jml_terpakai" placeholder="Jumlah stock terpakai" required>
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
          <h3>History Bahan Baku Keluar/Terpakai</h3>
            <table class="history keluar">
              <tr class="baris1">
                <td class="kolomhistory1">Tanggal</td>
                <td class="kolomhistory2">Nama Bahan</td>
                <td class="kolomhistory3">Jumlah Stock Terpakai</td>
                <td class="kolomhistory4">Keterangan</td>
                <td class="kolomhistory5">#</td>
              </tr>

              <?php 
                $data = mysqli_query($koneksidb, "SELECT * FROM keluar");
                while($d = mysqli_fetch_array($data)){
                  $tanggal = $d['tanggal'];
                  $jml_terpakai = $d['jml_terpakai'];
                  $keterangan = $d['keterangan'];

                  switch ($d['kode_bahan']) {
                    case "1":
                      $bahan = "Kayu Surian";
                      break;
                    case "2":
                      $bahan = "Kayu Bayur";
                      break;
                    case "3":
                      $bahan = "Kayu Borneo";
                      break;
                    case "4":
                      $bahan = "Kayu Timbalun";
                      break;
                    case "5":
                      $bahan = "Kayu Mahoni";
                      break;
                    case "6":
                      $bahan = "Multiplex 9mm";
                      break;
                    case "7":
                      $bahan = "Multiplex 12mm";
                      break;
                    case "8":
                      $bahan = "Multiplex 15mm";
                      break;
                    case "9":
                      $bahan = "HPL";
                      break;
                    case "10":
                      $bahan = "Tacosit";
                      break;
                    case "11":
                      $bahan = "Lem Fox";
                      break;
                    case "12":
                      $bahan = "Lem Prima D";
                      break;
                    case "13":
                      $bahan = "Lem 168";
                      break;
                    case "14":
                      $bahan = "Lem Fortebon";
                      break;
                    case "15":
                      $bahan = "Cat Impra";
                      break;
                    case "16":
                      $bahan = "Cat Boyo";
                      break;
                    case "17":
                      $bahan = "Cat Avian";
                      break;
                    case "18":
                      $bahan = "Cat Dulux";
                      break;
                    case "19":
                      $bahan = "Cat Laba-laba";
                      break;
                    case "20":
                      $bahan = "Paku Tembak F20";
                      break;
                    case "21":
                      $bahan = "Paku Tembak F25";
                      break;
                    case "22":
                      $bahan = "Paku Tembak F30";
                      break;
                    case "23":
                      $bahan = "Paku Biasa 1 inch";
                      break;
                    case "24":
                      $bahan = "Paku Biasa 2 inch";
                      break;
                    case "25":
                      $bahan = "Paku Biasa 3 inch";
                      break;
                    case "26":
                      $bahan = "Paku Biasa 4 inch";
                      break;
                    case "27":
                      $bahan = "Amplas Rol";
                      break;
                    case "28":
                      $bahan = "Amplas Bulat";
                      break;
                    case "29":
                      $bahan = "Amplas Tempel";
                      break;
                    default:
                      echo " ";
                  }
              ?>

<tr class="data">
                <td class="kolomhistory1"><?= $tanggal; ?></td>
                <td class="kolomhistory2"><?= $bahan; ?></td>
                <td class="kolomhistory3"><?= $jml_terpakai; ?></td>
                <td class="kolomhistory4"><?= $keterangan; ?></td>
                <td class="kolomhistory5">
                  <a href="edit_keluar.php?id=<?= $d['id_keluar']; ?>" class="tombol editdata">EDIT</a>
                  <!-- <a href="hapuskeluar.php?id=<?= $d['id_keluar']; ?>" class="tombol hapusdata" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?')">HAPUS</a> -->
                </td>
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