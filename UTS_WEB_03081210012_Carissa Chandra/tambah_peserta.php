<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Seminar_Carissa Chandra</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Form Registrasi</h1>
    <p>Isilah data di bawah ini!</p>
    <hr>
    <form action="simpan_peserta.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="uname" required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="psw" required>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" required>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Pria">
                    <label for="pria">Pria</label>
                    <input type="radio" name="gender" value="Wanita">
                    <label for="wanita">wanita</label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" rows="4" cols="40"></textarea>
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                    <input type="file" name="foto" value="" id="foto">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Upload File" id="UploadFile">
                    <input type="reset">
                </td>
            </tr>  
        </table>
    </form>
</body>
</html>