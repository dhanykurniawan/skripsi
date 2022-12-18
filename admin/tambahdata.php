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

  <?php
  $no = 0;
  // $totalindex = 0;
  $totalfrek = 0;
  $data = mysqli_query($koneksidb, "SELECT * from histori_pendapatan");
  while ($d = mysqli_fetch_array($data)) {
    $no++;
    // $totalindex += $no;
    $totalfrek = $totalfrek + $d['jml_penjualan'];
  }
  ?>

  <div class="container">
    <div class="header header1">
      <a href="home.php">Home Menu</a>
      <a href="tambahdata.php" class="aktif">Kelola Data</a>
      <a href="frekuensi_aksi.php?totalfrek=<?= $totalfrek; ?>">Frekuensi & Probabilitas</a>
      <a class="btn-hasil">Hasil Prediksi</a>
      <a href="logout.php" class="out-data" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
    </div>

    <div class="tambah">
      <h3>Form Tambah Data</h3>
      <form action="tambah_aksi.php" method="post">
        <table class="tambahdata">
          <tr>
            <td class="labeldata">Tahun</td>
            <td class="isiandata">:
              <input type="text" name="tahun" placeholder="Masukkan tahun">
            </td>
          </tr>
          <tr>
            <td class="labeldata">Bulan</td>
            <td class="isiandata">:
              <select id="bulan" name="bulan">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </td>
          </tr>
          <tr>
            <td class="labeldata">Jumlah Penjualan</td>
            <td class="isiandata">:
              <input type="text" name="penjualan" placeholder="Masukkan jumlah penjualan">
            </td>
          </tr>
          <tr>
            <td colspan="2" class="textarea">
              <input type="submit" name="tambah" class="button" value="+ ADD HISTORY">
            </td>
          </tr>
      </form>
      </table>
      </form>
    </div>

    <div class="data">
      <h3>History Penjualan</h3>
      <table class="history">
        <tr class="baris1">
          <td class="kolomhistory1">No</td>
          <td class="kolomhistory2">Tahun</td>
          <td class="kolomhistory3">Bulan</td>
          <td class="kolomhistory4">Jumlah Penjualan</td>
          <td class="kolomhistory5">#</td>
        </tr>

        <?php
        $no = 0;
        // $totalindex = 0;
        $totalfrek = 0;
        $data = mysqli_query($koneksidb, "select * from histori_pendapatan ORDER BY tahun ASC, kode_bulan ASC ");
        while ($d = mysqli_fetch_array($data)) {
          $no++;
          // $totalindex += $no;
          $totalfrek = $totalfrek + $d['jml_penjualan'];


          switch ($d['kode_bulan']) {
            case "01":
              $bulan = "Januari";
              break;
            case "02":
              $bulan = "Februari";
              break;
            case "03":
              $bulan = "Maret";
              break;
            case "04":
              $bulan = "April";
              break;
            case "05":
              $bulan = "Mei";
              break;
            case "06":
              $bulan = "Juni";
              break;
            case "07":
              $bulan = "Juli";
              break;
            case "08":
              $bulan = "Agustus";
              break;
            case "09":
              $bulan = "September";
              break;
            case "10":
              $bulan = "Oktober";
              break;
            case "11":
              $bulan = "November";
              break;
            case "12":
              $bulan = "Desember";
              break;

            default:
              echo " ";
          }
        ?>

        <tr class="data">
          <td class="kolomhistory1"><?php echo $no; ?> </td>
          <td class="kolomhistory2"><?php echo $d['tahun']; ?></td>
          <td class="kolomhistory3"><?php echo $bulan; ?></td>
          <td class="kolomhistory4"><?php echo $d['jml_penjualan']; ?></td>
          <td class="kolomhistory5">
            <a href="editdata.php?id=<?php echo $d['idx']; ?>" class="tombol editdata">EDIT</a>
            <a href="hapusdata.php?id=<?php echo $d['idx']; ?>" class="tombol hapusdata" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI?')">HAPUS</a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>

    <div class="buatperkiraan">
      <a href="frekuensi_aksi.php?totalfrek=<?= $totalfrek ?>" class="tombolbuatperkiraan">Buat Perkiraan (PREDIKSI)</a>
    </div>




    <div class="footerdalam footermenu">
      <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
    </div>
  </div>

</body>

</html>