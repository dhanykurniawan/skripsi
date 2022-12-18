<?php
require("koneksi_db.php");

$kode_bahan = $_POST["bahan"];
$supplier = $_POST["supplier"];
$keterangan = $_POST["keterangan"];
$jml_tambah = $_POST["jml_tambah"];

$nama_file = $_FILES["bukti_transaksi"]['name'];
$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
$random = uniqid(rand(), true);
$ukuran_file = $_FILES["bukti_transaksi"]["size"];
$tipe_file = $_FILES["bukti_transaksi"]["type"];
$tmp_file = $_FILES["bukti_transaksi"]["tmp_name"];
$path = "../images/produk/" . $random . "." . $ext;
$pathdb = $random . "." . $ext;

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
    if ($ukuran_file <= 5000000) {
        if (move_uploaded_file($tmp_file, $path)) {

            // menginput data ke database
            mysqli_query($koneksidb, "INSERT into masuk () values('',current_timestamp(),'$kode_bahan','$supplier','$jml_tambah','$keterangan','$pathdb','0')");
            // $stocks = mysqli_query($koneksidb, "SELECT stock FROM bahan WHERE kode='$kode_bahan'");
            // while($stock = mysqli_fetch_array($stocks)){
            //     $stock = $stock['stock'];
            //     $stock_update = $stock + $jml_tambah;
            //     mysqli_query($koneksidb, "UPDATE bahan set stock='$stock_update' where kode='$kode_bahan'");
            // }

            // mengalihkan halaman kembali ke index.php
            header("location:bahan_masuk.php");
        } else {
            var_dump('move_uploaded_file error');
            die;
            // Jika gambar gagal diupload, Lakukan :
            echo "Sorry, there's a problem while uploading the file.";
            header("location:bahan_masuk.php");
        }
    } else {
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "Sorry, the file size is not allowed to more than 1mb";
        header("location:bahan_masuk.php");
    }
} else {
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Sorry, the image format should be JPG/PNG.";
    header("location:bahan_masuk.php");
}
