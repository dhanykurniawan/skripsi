<?php
// koneksi database
require("koneksi_db.php");

// menangkap data yang di kirim dari form
$pass_lama = md5($_POST['pass_lama']);
$pass_baru1 = md5($_POST['pass_baru1']);
$pass_baru2 = md5($_POST['pass_baru2']);

$ubah = mysqli_query($koneksidb, "SELECT * FROM karyawan");

$u = mysqli_fetch_array($ubah);

if ($u["password"] == $pass_lama) {
    if ($pass_baru1 == $pass_baru2) {
        mysqli_query($koneksidb, "update karyawan set password='$pass_baru1' where username='karyawan'");
        echo '<script type="text/javascript">';
        echo 'alert("PASSWORD BERHASIL DI UPDATE");';
        echo 'window.location.href = "bahan_keluar.php";';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("PASSWORD BARU TIDAK SAMA");';
        echo 'window.location.href = "bahan_keluar.php";';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">';
    echo 'alert("PASSWORD LAMA SALAH");';
    echo 'window.location.href = "bahan_keluar.php";';
    echo '</script>';
}
