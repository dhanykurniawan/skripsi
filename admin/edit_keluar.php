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
</head>

<body>

    <div class="container">
		<div class="header keluar">
      <a href="home.php" class="aktif">Home Menu</a>
			BAHAN BAKU (Keluar/Terpakai)
			<a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
			<a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
		</div>

    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      header("location:bahan_keluar.php");
    };
    $data = mysqli_query($koneksidb, "select * from keluar where id_keluar='$id'");
    while ($d = mysqli_fetch_array($data)) {

    ?>

        <div class="tambah">
            <h3>Form Ubah Bahan Baku (Keluar/Terpakai)</h3>
            <form action="edit_keluar_aksi.php?id<?= $id; ?>" method="post">
              <table class="tambahdata">
                <tr>
                  <td class="labeldata">Nama Bahan</td>
                  <td class="isiandata">
                    <input type="hidden" name="id" value="<?= $d['id_keluar']; ?>" >
                    <select id="bahan" name="bahan">
                      <option value="1" <?= $d['kode_bahan'] == '1' ? "selected" : ""; ?>>Kayu Surian</option>
                      <option value="2" <?= $d['kode_bahan'] == '2' ? "selected" : ""; ?>>Kayu Bayur</option>
                      <option value="3" <?= $d['kode_bahan'] == '3' ? "selected" : ""; ?>>Kayu Borneo</option>
                      <option value="4" <?= $d['kode_bahan'] == '4' ? "selected" : ""; ?>>Kayu Timbalun</option>
                      <option value="5" <?= $d['kode_bahan'] == '5' ? "selected" : ""; ?>>Kayu Mahoni</option>
                      <option value="6" <?= $d['kode_bahan'] == '6' ? "selected" : ""; ?>>Multiplex 9mm</option>
                      <option value="7" <?= $d['kode_bahan'] == '7' ? "selected" : ""; ?>>Multiplex 12mm</option>
                      <option value="8" <?= $d['kode_bahan'] == '8' ? "selected" : ""; ?>>Multiplex 15mm</option>
                      <option value="9" <?= $d['kode_bahan'] == '9' ? "selected" : ""; ?>>HPL</option>
                      <option value="10" <?= $d['kode_bahan'] == '10' ? "selected" : ""; ?>>Tacosit</option>
                      <option value="11" <?= $d['kode_bahan'] == '11' ? "selected" : ""; ?>>Lem Fox</option>
                      <option value="12" <?= $d['kode_bahan'] == '12' ? "selected" : ""; ?>>Lem Prima D</option>
                      <option value="13" <?= $d['kode_bahan'] == '13' ? "selected" : ""; ?>> Lem 168</option>
                      <option value="14" <?= $d['kode_bahan'] == '14' ? "selected" : ""; ?>>Lem Fortebon</option>
                      <option value="15" <?= $d['kode_bahan'] == '15' ? "selected" : ""; ?>>Cat Impra</option>
                      <option value="16" <?= $d['kode_bahan'] == '16' ? "selected" : ""; ?>>Cat Boyo</option>
                      <option value="17" <?= $d['kode_bahan'] == '17' ? "selected" : ""; ?>>Cat Avian</option>
                      <option value="18" <?= $d['kode_bahan'] == '18' ? "selected" : ""; ?>>Cat Dulux</option>
                      <option value="19" <?= $d['kode_bahan'] == '19' ? "selected" : ""; ?>>Cat Laba-laba</option>
                      <option value="20" <?= $d['kode_bahan'] == '20' ? "selected" : ""; ?>>Paku Tembak F20</option>
                      <option value="21" <?= $d['kode_bahan'] == '21' ? "selected" : ""; ?>>Paku Tembak F25</option>
                      <option value="22" <?= $d['kode_bahan'] == '22' ? "selected" : ""; ?>>Paku Tembak F30</option>
                      <option value="23" <?= $d['kode_bahan'] == '23' ? "selected" : ""; ?>>Paku Biasa 1 inch</option>
                      <option value="24" <?= $d['kode_bahan'] == '24' ? "selected" : ""; ?>>Paku Biasa 2 inch</option>
                      <option value="25" <?= $d['kode_bahan'] == '25' ? "selected" : ""; ?>>Paku Biasa 3 inch</option>
                      <option value="26" <?= $d['kode_bahan'] == '26' ? "selected" : ""; ?>>Paku Biasa 4 inch</option>
                      <option value="27" <?= $d['kode_bahan'] == '27' ? "selected" : ""; ?>>Amplas Rol</option>
                      <option value="28" <?= $d['kode_bahan'] == '28' ? "selected" : ""; ?>>Amplas Bulat</option>
                      <option value="29" <?= $d['kode_bahan'] == '29' ? "selected" : ""; ?>>Amplas Tempel</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Keterangan</td>
                  <td class="isiandata">
                    <textarea rows="5" name="keterangan" value="<?= $d['keterangan']; ?>">
                    </textarea>
                  </td>
                </tr>
                <tr>
                  <td class="labeldata">Jumlah Stock Terpakai</td>
                  <td class="isiandata">
                    <input type="hidden" name="jml_terpakai_lama" value="<?= $d['jml_terpakai']; ?>">
                    <input type="text" name="jml_terpakai" value="<?= $d['jml_terpakai']; ?>">
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

          <?php } ?>

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
                      $bahan = "Lem Primade";
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
                  <a href="hapuskeluar.php?id=<?= $d['id_keluar']; ?>" class="tombol hapusdata" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?')">HAPUS</a></td>
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