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
    <div class="header konfirmasi">
      <a href="home.php" class="aktif">Home Menu</a>
      DATA MASUK YANG BELUM DIPERIKSA
      <a href="ubah_password.php" class="ubah_pw">Ubah Password</a>
      <a href="logout.php" class="out" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
    </div>



    <div class="data">
      <h3>Data Masuk yang Belum Diperiksa</h3>
      <table class="history konfirmasi">
        <tr class="baris1">
          <td class="kolomhistory1">Tanggal</td>
          <td class="kolomhistory2">Nama Bahan</td>
          <td class="kolomhistory3">Supplier</td>
          <td class="kolomhistory4">Jumlah Tambah Stock</td>
          <td class="kolomhistory5">Keterangan</td>
          <td class="kolomhistory6">Bukti Transaksi</td>
          <td class="kolomhistory7">#</td>
          <td class="kolomhistory8">Status</td>
        </tr>

        <?php
        $data = mysqli_query($koneksidb, "SELECT * FROM masuk WHERE status=0 ORDER BY tanggal ASC ");
        while ($d = mysqli_fetch_array($data)) {
          $tanggal = $d['tanggal'];
          $supplier = $d['supplier'];
          $jml_tambah = $d['jml_tambah'];
          $keterangan = $d['keterangan'];
          $bukti_transaksi = $d['bukti_transaksi'];


          switch ($d['status']) {
            case "0":
              $status_cek = "Belum diperiksa";
              break;
            case "1":
              $status_cek = "Diterima";
              break;
            case "2":
              $status_cek = "Ditolak";
              break;
            default:
              $status_cek = "Status Error";
          }

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
            <td class="kolomhistory3"><?= $supplier; ?></td>
            <td class="kolomhistory4"><?= $jml_tambah; ?></td>
            <td class="kolomhistory5"><?= $keterangan; ?></td>
            <td class="kolomhistory6">
              <img src="../images/produk/<?= $bukti_transaksi; ?>" alt="" srcset="" style="width: 320px; margin-top: 1rem;">
            </td>
            <td class="kolomhistory7">
              <a href="proses_konfirmasi.php?id=<?= $d['id_masuk']; ?>&status=1" class="tombol terima" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENERIMA DATA INI?')">TERIMA</a>
              <a href="proses_konfirmasi.php?id=<?= $d['id_masuk']; ?>&status=2" class="tombol tolak" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENOLAK DATA INI?')">TOLAK</a>
            </td>
            <td class="kolomhistory8"><?= $status_cek; ?></td>
          </tr>

          <!-- <tr class="data">
            <td class="kolomhistory1">2022-07-09 19:45:09</td>
            <td class="kolomhistory2">Paku Biasa 4 inch</td>
            <td class="kolomhistory3">Andriko Bangunan</td>
            <td class="kolomhistory4">100</td>
            <td class="kolomhistory5">200x2x12=20 200x3x12=9999</td>
            <td class="kolomhistory6">
              <img src="../images/produk/<?= $bukti_transaksi; ?>" alt="" srcset="" style="width: 120px; margin-top: 1rem;">
            </td>
            <td class="kolomhistory7">
              <a href="" class="tombol terima" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENERIMA DATA INI?')">TERIMA</a>
              <a href="" class="tombol tolak" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENOLAK DATA INI?')">TOLAK</a>
            </td>
            <td class="kolomhistory8">Belum diperiksa</td>
          </tr> -->

        <?php } ?>
      </table>
    </div>

    <div class="footerdalam footermenu">
      <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
    </div>

  </div>

</body>

</html>