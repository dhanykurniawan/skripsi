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
  $totalindex = 0;
  $data = mysqli_query($koneksidb, "SELECT * from histori_pendapatan");
  while ($d = mysqli_fetch_array($data)) {
    $no++;
    $totalindex += $no;
  }
  ?>

  <div class="container">
    <div class="header header1">
      <a href="home.php">Home Menu</a>
      <a href="tambahdata.php" class="aktif">Kelola Data</a>
      <a href="frekuensi_aksi.php?totalindex=<?= $totalindex; ?>">Frekuensi & Probabilitas</a>
      <a class="btn-hasil" href="hasil.php">Hasil Prediksi</a>
      <a href="logout.php" class="out-data">LOGOUT</a>
    </div>

    <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      header("location:tambahdata.php");
    };
    $data = mysqli_query($koneksidb, "select * from histori_pendapatan where idx='$id'");
    while ($d = mysqli_fetch_array($data)) {

    ?>

      <div class="edit">
        <h3>Form Ubah Data</h3>
        <form action="edit_aksi.php?id=<?= $id; ?>" method="POST">
          <table class="editdata">
            <tr>
              <td class="labeldata">Tahun</td>
              <td class="isiandata">:
                <input type="hidden" name="id" value="<?= $d['idx']; ?>">
                <input type="text" name="tahun" value="<?= $d['tahun']; ?>"">
              </td>
            </tr>
            <tr>
              <td class=" labeldata">Bulan</td>
              <td class="isiandata">:
                <select id="bulan" name="bulan">
                  <option value="01" <?= $d['kode_bulan'] == '01' ? "selected" : ""; ?>>Januari</option>
                  <option value="02" <?= $d['kode_bulan'] == '02' ? "selected" : ""; ?>>Februari</option>
                  <option value="03" <?= $d['kode_bulan'] == '03' ? "selected" : ""; ?>>Maret</option>
                  <option value="04" <?= $d['kode_bulan'] == '04' ? "selected" : ""; ?>>April</option>
                  <option value="05" <?= $d['kode_bulan'] == '05' ? "selected" : ""; ?>>Mei</option>
                  <option value="06" <?= $d['kode_bulan'] == '06' ? "selected" : ""; ?>>Juni</option>
                  <option value="07" <?= $d['kode_bulan'] == '07' ? "selected" : ""; ?>>Juli</option>
                  <option value="08" <?= $d['kode_bulan'] == '08' ? "selected" : ""; ?>>Agustus</option>
                  <option value="09" <?= $d['kode_bulan'] == '09' ? "selected" : ""; ?>>September</option>
                  <option value="10" <?= $d['kode_bulan'] == '10' ? "selected" : ""; ?>>Oktober</option>
                  <option value="11" <?= $d['kode_bulan'] == '11' ? "selected" : ""; ?>>November</option>
                  <option value="12" <?= $d['kode_bulan'] == '12' ? "selected" : ""; ?>>Desember</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="labeldata">Jumlah Penjualan</td>
              <td class="isiandata">:
                <input type="text" name="jml_penjualan" value="<?= $d['jml_penjualan']; ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan=" 2" class="textarea">
                <input type="submit" name="login" class="button" value="SIMPAN PERUBAHAN">
              </td>
            </tr>
          </table>
        </form>
        </form>
      </div>

    <?php } ?>

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
        $totalindex = 0;
        $data = mysqli_query($koneksidb, "select * from histori_pendapatan");
        while ($d = mysqli_fetch_array($data)) {
          $no++;
          $totalindex += $no;

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

          <tr>
            <td class="kolomhistory1"><?php echo $no; ?> </td>
            <td class="kolomhistory2"><?php echo $d['tahun']; ?></td>
            <td class="kolomhistory3"><?php echo $bulan; ?></td>
            <td class="kolomhistory4"><?php echo $d['jml_penjualan']; ?></td>
            <td class="kolomhistory5">
              <a href="editdata.php?id=<?php echo $d['idx']; ?>" class="tombol editdata">EDIT</a>
              <a href="hapusdata.php?id=<?php echo $d['idx']; ?>" class="tombol hapusdata">HAPUS</a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>

    <div class="buatperkiraan">
      <a href="frekuensi_aksi.php?totalindex=<?= $totalindex ?>" class="tombolbuatperkiraan">Buat Perkiraan (PREDIKSI)</a>
    </div>

    <div class="footerdalam footermenu">
      <p class="copy">Copyright 2022 &copy; dhanykurniawan</p>
    </div>
  </div>

</body>

</html>