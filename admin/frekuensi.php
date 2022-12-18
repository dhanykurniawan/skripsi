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
      <a href="tambahdata.php">Kelola Data</a>
      <a href="frekuensi_aksi.php?totalfrek=<?= $totalfrek; ?>" class="aktif">Frekuensi & Probabilitas</a>
      <a class="btn-hasil">Hasil Prediksi</a>
      <a href="logout.php"class="out-data" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
    </div>

    <div class="prediksi">
      <h3>Tabel Perhitungan</h3>
      <table class="perhitungan">
        <tr class="baris1">
          <td class="kolomfrekuensi1" rowspan="2">No</td>
          <td class="kolomfrekuensi2" rowspan="2">Tahun</td>
          <td class="kolomfrekuensi3" rowspan="2">Bulan</td>
          <td class="kolomfrekuensi4" rowspan="2">Jumlah Penjualan</td>
          <td class="kolomfrekuensi5" rowspan="2">Probabilitas</td>
          <td class="kolomfrekuensi6" rowspan="2">Probabilitas Kumulatif</td>
          <td class="kolomfrekuensi7" colspan="2">Interval Bilangan Acak</td>
        </tr>
        <tr class="baris1">
          <td class="kolomfrekuensi7">Awal</td>
          <td class="kolomfrekuensi8">Akhir</td>
        </tr>

        <?php
        $no = 0;
        $probabilitas_kumulatif = 0;
        $interval_bilacak_awal = 0;
        $interval_bilacak_akhir = 0;
        $data = mysqli_query($koneksidb, "select * from tmp_frekwensi");
        while ($d = mysqli_fetch_array($data)) {
          $no++;
          $frekwensi_terakhir = $d['tahun'] . "-" . $d['kode_bulan'] . "-01";

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
              echo "Terjadi kesalahan pada data bulan";
          }

          $probabilitas = round($d['jumlah_penjualan'] / $_GET['totalfrek'], 2);
          $probabilitas_kumulatif = round($probabilitas_kumulatif + $probabilitas , 5);

          $interval_bilacak_akhir = $probabilitas_kumulatif * 100;
        ?>


          <tr class="data">
            <td class="kolomfrekuensi1"><?php echo $no; ?> </td>
            <td class="kolomfrekuensi2"><?php echo $d['tahun']; ?></td>
            <td class="kolomfrekuensi3"><?php echo $bulan; ?></td>
            <td class="kolomfrekuensi4"><?php echo $d['jumlah_penjualan']; ?></td>
            <td class="kolomfrekuensi5"><?php echo $probabilitas; ?></td>
            <td class="kolomfrekuensi6"><?php echo $probabilitas_kumulatif; ?></td>
            <td class="kolomfrekuensi7"><?php echo $interval_bilacak_awal; ?></td>
            <td class="kolomfrekuensi8"><?php echo $interval_bilacak_akhir; ?></td>
          </tr>

        <?php 
        
        $interval_bilacak_awal = $interval_bilacak_akhir + 1;

      } ?>
      </table>
    </div>

    <form action="hasil.php" method="POST" style="text-align: center;">
			<input type="hidden" name="frekwensi_terakhir" class="jml_perkiraan" value="<?= $frekwensi_terakhir ?>">
			<input type="text" name="jml_perkiraan" class="jml_perkiraan" placeholder="Masukkan jumlah perkiraan yang ingin dicari" required>
			<input type="submit" class="tombolprediksi" value="N E X T">
		</form>

    <div class="footerdalam footermenu">
      <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
    </div>


  </div>

</body>

</html>