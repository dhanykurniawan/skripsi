<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <link rel="icon" href="../images/icon/home1.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


    <div class="container ubahpass">
        <center>
            <h1>Form Ubah Password</h1>

            <div class="login.content">
                <form action="ubah_password_aksi.php" method="POST">
                    <table class="ubahpassword">
                        <tr>
                            <td class="labeldata">Masukkan Password Lama</td>
                            <td class="isiandata">:
                                <input type="password" name="pass_lama" class="isian-pass" placeholder="Masukkan Password Lama" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="labeldata">Masukkan Password Baru</td>
                            <td class="isiandata">:
                                <input type="password" name="pass_baru1" class="isian-pass" placeholder="Masukkan Password Baru" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="labeldata">Ulangi Password Baru</td>
                            <td class="isiandata">:
                                <input type="password" name="pass_baru2" class="isian-pass" placeholder="Ulangi Password Baru" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="checkbox" class="form-checkbox">Show Password
                            </td>
                        </tr>
                    </table>
                    <input type="submit" class="simpanperubahan" onclick="return confirm('APAKAH ANDA YAKIN INGIN MENGUBAH PASSWORD?')" value="SIMPAN PERUBAHAN">
                </form>
            </div>
        </center>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.isian-pass').attr('type', 'text');
                } else {
                    $('.isian-pass').attr('type', 'password');
                }
            });
        });
    </script>

</body>

</html>