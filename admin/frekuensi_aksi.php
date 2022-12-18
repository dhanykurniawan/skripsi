<?php
// koneksi database
require("koneksi_db.php");

mysqli_query($koneksidb, "delete from tmp_frekwensi");


mysqli_query($koneksidb, "SELECT * FROM histori_pendapatan ORDER BY tahun, kode_bulan");

$data = mysqli_query($koneksidb, "SELECT * FROM histori_pendapatan ORDER BY tahun, kode_bulan");
$index = 0;
$pk = 0;
$akhir = 0;
$awal = 0;
$totalfrek = $_GET['totalfrek'];

while ($d = mysqli_fetch_array($data)) {
    $index++;
    $probabilitas = $d['jml_penjualan'] / $totalfrek;
    $pk += $probabilitas;
    $akhir = $pk * 100;
    
    mysqli_query($koneksidb, "insert into tmp_frekwensi (index_histori, index_frekwensi, jumlah_penjualan, probabilitas, probabilitas_kumulatif, interval_bilacak_awal, interval_bilacak_akhir, tahun, kode_bulan) values($d[idx],$index,$d[jml_penjualan], $probabilitas,$pk,$awal,$akhir,$d[tahun],$d[kode_bulan])");

    $awal = $akhir + 1;
}



header("location:frekuensi.php?totalfrek=$totalfrek");
