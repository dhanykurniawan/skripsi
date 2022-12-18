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

            // mengalihkan halaman kembali ke index.php
            echo '<script type="text/javascript">';
            echo 'alert("DATA BERHASIL DITAMBAHKAN");';
            echo 'window.location.href = "bahan_masuk.php";';
            echo '</script>';
        } else {
            var_dump('move_uploaded_file error');
            die;
            // Jika gambar gagal diupload, Lakukan :
            echo '<script type="text/javascript">';
            echo 'alert("Maaf, ada kesalahan saat mengupload bukti transaksi");';
            echo 'window.location.href = "bahan_masuk.php";';
            echo '</script>';
        }
    } else {
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo '<script type="text/javascript">';
        echo 'alert("Maaf, ukuran gambar tidak diizinkan melebihi 1mb");';
        echo 'window.location.href = "bahan_masuk.php";';
        echo '</script>';
    }
} else {
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo '<script type="text/javascript">';
    echo 'alert("Maaf, format gambar yang diizinkan hanya JPG/PNG");';
    echo 'window.location.href = "bahan_masuk.php";';
    echo '</script>';
}