<?php
    require "config.php";

if(sudah_login()){

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
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
    <h1>Halaman Profil</h1>
    
   
</body>
</html>

<?php 
} else {
    header('location: index.php');
}

?>