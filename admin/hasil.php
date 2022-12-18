<?php
// koneksi database
require("koneksi_db.php");
?>

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
      <a href="frekuensi_aksi.php?totalfrek=<?= $totalfrek; ?>">Frekuensi & Probabilitas</a>
      <a class="aktif aktif-hasil">Hasil Prediksi</a>
      <a href="logout.php" class="out out-data" onclick="return confirm('APAKAH ANDA YAKIN INGIN KELUAR DARI SISTEM?')">LOGOUT</a>
    </div>

    <div class="hasil">
      <h3>Hasil Prediksi</h3>
      <table class="simulasi">
        <tr class="baris1">
          <td class="kolomhasil1">No</td>
          <td class="kolomhasil2">Tahun</td>
          <td class="kolomhasil3">Bulan</td>
          <td class="kolomhasil4">Bilangan Acak</td>
          <td class="kolomhasil5">Jumlah Perkiraan</td>
        </tr>

        <?php
        $frekwensi_terakhir = $_POST['frekwensi_terakhir'];
        $jml_perkiraan = $_POST['jml_perkiraan'];
        $no = 0;
        // $a = 2;
        // $acak = 2;
        // $c = 7;
        // $m = 100;

        if (!empty($jml_perkiraan) && !empty($frekwensi_terakhir)) {
          for ($i = 0; $i < $jml_perkiraan; $i++) {
            $frekwensi_terakhir = date('Y-m-d', strtotime("+1 months", strtotime($frekwensi_terakhir)));
            $exp_periode = explode('-', $frekwensi_terakhir);
            // $acak = ($a * $acak + $c) % $m;
            $acak = rand(0, 100);

            $data = mysqli_query($koneksidb, "SELECT jumlah_penjualan FROM tmp_frekwensi WHERE interval_bilacak_awal<= $acak AND interval_bilacak_akhir>=$acak");
            $d = mysqli_fetch_array($data);
            $no++;

            // $res[]=array(
            //     'tahun'=>$exp_periode[0],
            //     'kode_bulan'=>$exp_periode[1],
            //     'bilangan_acak'=>$acak,
            //     'jml_perkiraan'=>$d['jumlah_penjualan']
            // );

            switch ($exp_periode[1]) {
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
        ?>

            <tr class="data">
              <td class="kolomhasil1"><?= $no; ?></td>
              <td class="kolomhasil2"><?= $exp_periode[0]; ?></td>
              <td class="kolomhasil3"><?= $bulan; ?></td>
              <td class="kolomhasil4"><?= $acak; ?></td>
              <td class="kolomhasil5"><?= $d['jumlah_penjualan']; ?></td>
            </tr>

        <?php
          }
        } else {
          echo "salah";
        }
        ?>
      </table>
    </div>

    <div class="footerdalam footermenu">
      <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
    </div>
  </div>
</body>

</html>