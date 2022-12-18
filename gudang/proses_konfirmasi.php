<?php
require ("koneksi_db.php");

$id_masuk = $_GET['id'];
$status = $_GET['status'];


if ($status==1) {
    $konfirmasi1 = mysqli_query($koneksidb, "SELECT * FROM masuk WHERE id_masuk='$id_masuk'");
    while($konf1 = mysqli_fetch_array($konfirmasi1)){
        $kode_bahan = $konf1['kode_bahan'];
        $jml_tambah = $konf1['jml_tambah'];
    }

    $konfirmasi2 = mysqli_query($koneksidb, "SELECT * FROM bahan WHERE kode='$kode_bahan'");
    while($konf2 = mysqli_fetch_array($konfirmasi2)){
        $stock = $konf2['stock'];
        // echo $konf2['stock']; die();
    }

    $stock_baru = $jml_tambah + $stock;

    $konfirmasi3 = mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_baru'  WHERE kode=$kode_bahan ");

    $konfirmasi4 = mysqli_query($koneksidb, "UPDATE masuk set status=1 WHERE id_masuk=$id_masuk");

    // mengalihkan halaman kembali ke index.php
    echo '<script type="text/javascript">'; 
    echo 'alert("DATA BERHASIL DITERIMA");'; 
    echo 'window.location.href = "konfirmasi.php";';
    echo '</script>';
    
}
 elseif ($status==2) {
    $konfirmasi5 = mysqli_query($koneksidb, "UPDATE masuk set status=2 WHERE id_masuk=$id_masuk");

    // mengalihkan halaman kembali ke index.php
    echo '<script type="text/javascript">'; 
    echo 'alert("DATA BERHASIL DITOLAK");'; 
    echo 'window.location.href = "konfirmasi.php";';
    echo '</script>';   
 }





?>