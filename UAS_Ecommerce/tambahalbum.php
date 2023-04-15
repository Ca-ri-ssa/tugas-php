<?php 
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <!-- JS Bootstrap -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Tambah Album</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="border-bottom: 2px solid #7C924E; background-color: white;">
      <div class="container-fluid">
        <a href="#"><img src="img/LOGO.png" style="width: 100px;"></a>
        <button class="navbar-toggler btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #7C924E">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto my-2 my-lg-0" style="font-size: 16px; margin-left: 6px; color: black;">
            <li class="nav-item">
              <a class="nav-link"  aria-current="page" href="homepage.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                    <li><a class="dropdown-item" href="all_news.php" style="color: black;">News</a></li>
                    <li><a class="dropdown-item" href="merchandise.php" style="color: green;">Merchandise</a></li>
                    <li><a class="dropdown-item" href="ticket.php" style="color: black;">Ticket Concert</a></li>
              </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="purchase_history.php" style="color: black;">Purchase List</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about_us.php" style="color: black;">About Us</a>
            </li>
                    
            <li class="nav-item">
              <a class="nav-link" href="profile.php" style="color: black;">Profile</a>
            </li>
                    
            <li><hr class="dropdown-divider"></li>
                    
            <li class="nav-item pointer">        
              <button class="nav-link" onclick="myFunction()" style="color: black; border-style: none; background-color: white;">Log Out</button>
              <script>
                function myFunction() {
                  if (confirm("Are you sure to log out?")) {
                    window.location.href='log_out.php';
                  } else {
                    window.location.href='';
                  }
                }
              </script>
            </li>        
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top: 75px; margin-bottom: 50px;">
        <div class="main-body">
            <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 20px;">Tambah Album</h1>
            <div class="tambahanalbum">
                <form action="" method="POST" enctype="multipart/form-data">
                    Nama:  <input type="text" name="Title" placeholder="Nama Album"  value="" width= "600px" size="50" required><br/>
                    Gambar: <input type="file" name="image" placeholder="Gambar Album" value="Upload"  required><br/>
                    Harga: <input type="text" name="harga" placeholder="Harga Album"  value="" width= "600px" size="50" required><br/>
                    Keterangan: </br> <textarea name="deskripsi" placeholder="Deskripsi Album"  value="keterangan" required></textarea><br/>
                    <input type="submit" name="submit" placeholder="simpan" class="btn btn-lg btn-outline-success" value="submit" border="2px solid #7C924E" background-color="#7C924E" size="20" margin="20px">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $title = $_POST['Title'];
                        $harga = $_POST['harga'];
                        $deskripsi = $_POST['deskripsi'];
                        $nama_album = $_FILES['image']['name'];
                        $size_album = $_FILES['image']['size'];
                        $tipe_album = $_FILES['image']['type'];
                        $tmp_album = $_FILES['image']['tmp_name'];

                        $gambar = file_get_contents($tmp_album);
                        $gambar = mysqli_real_escape_string($conn, $gambar);

                        $simpan = "INSERT INTO Album VALUES (null, '".$title."', '".$nama_album."', '".$gambar."', '".$harga."', '".$deskripsi."')";
                        mysqli_query($conn, $simpan);
                        mysqli_close($conn);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<script>
  CKEDITOR.replace( 'deskripsi' );
</script>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>
