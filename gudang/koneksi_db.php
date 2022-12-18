<?php
#Koneksi ke Web Server Lokal
$myHost = "localhost";
$myUser = "root";
$myPass = "";
$myDbs  = "db_matoaia";

#Koneksi ke Web Server Lokal
$koneksidb = mysqli_connect($myHost, $myUser, $myPass, $myDbs);
if (mysqli_connect_errno()) {
	echo "Failed Connection" . mysqli_connect_error();
}


session_start();
if ($_SESSION['status'] != "login") {
	header("location:index.php?pesan=belum_login");
}
	
#Memilih database pada MySQL Server
#mysqli_select_db($myDbs) or die ("Database not Found");
