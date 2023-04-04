<?php
    require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href='index.php'>Beranda</a></li>
            <?php if(sudah_login()){ ?>
                <li><a href='profil.php'>Profil</a></li>
                <li><a href='berita.php'>Berita</a></li>
                <li><a href='kontak.php'>Kontak</a></li>
                <li><a href='logout.php'>Logout</a></li>
            <?php } ?>
        </ul>
    </nav>
    <h1>Halaman Beranda</h1>
    
    <?php if(!sudah_login()){ ?>
    <section>
        <form action="login_check.php" method='post'>
            Username : <input type="text" name="username"><br>
            password : <input type="password" name="password"><br>
            <input type="submit" name="login" value="login"><br>
        </form>
    </section>
    <?php } ?>
</body>
</html>