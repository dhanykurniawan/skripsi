<!DOCTYPE html>

<html lang="en">

<head meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../images/icon/home1.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <a href="../index.php" class="home-utama">HOME UTAMA</a>

    <?php
    // session_start();
    if (isset($_SESSION['status'])) {
        header("location:home.php");
    }
    ?>

    <center>
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert-merah'>Login gagal! username/password salah!</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert-hijau'>Anda berhasil LOGOUT</div>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<div class='alert-merah'>Anda harus LOGIN terlebih dahulu!</div>";
            }
        }
        ?>
    </center>

    <div class="login-content">
        <div class="login-logo">
            <figure>
                <img src="../images/icon/mato_aia.png" alt="Logo MATO AIA" title="Logo">
                <figcaption>Jalan Raya Padang Panjang - Bukittinggi KM. 4 Pasa Raba'a - Panyalaian <br> Telp. (0752) 82793</figcaption>
            </figure>
        </div>
        <div class="social-login-content">
            <form action="cek_login.php" method="post">

                <table>
                    <tr>
                        <td class="label">Username</td>
                        <td class="isian">: 
                            <input type="text" name="username" placeholder="Masukkan username" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Password</td>
                        <td class="isian">: 
                            <input type="password" name="password" class="isian-pass" placeholder="Masukkan password" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="checkbox" class="form-checkbox">Show Password
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textarea">
                            <input type="submit" class="button" value="L O G I N">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <p class="footer">Prediksi Penjualan Toko Produksi "Mato Aia" Perabot
            <br>Distributed by <a href="https://linkfly.to/dhnykrnwn" target="_blank">Dhany Kurniawan</a>
        </p>
    </div>

    <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.isian-pass').attr('type','text');
			}else{
				$('.isian-pass').attr('type','password');
			}
		});
	});
    </script>
</body>

</html>