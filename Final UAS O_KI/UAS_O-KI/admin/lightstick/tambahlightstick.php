<?php 
    include('../../config.php');
    ob_start();
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
  <link rel="stylesheet" href="../../style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Tambah Lightstick</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="border-bottom: 2px solid #7C924E; background-color: white;">
      <div class="container-fluid">
        <a href="#"><img src="../../img/LOGO.png" style="width: 100px;"></a>
        <button class="navbar-toggler btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #7C924E">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto my-2 my-lg-0" style="font-size: 16px; margin-left: 6px; color: black;">
            <li class="nav-item">
              <a class="nav-link"  aria-current="page" href="../home/homepage.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: green;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                    <li><a class="dropdown-item" href="../news/all_news.php" style="color: black;">News</a></li>
                    <li><a class="dropdown-item" href="../merchandise/merchandise.php" style="color: green;">Merchandise</a></li>
                    <li><a class="dropdown-item" href="../ticket/ticket.php" style="color: black;">Ticket Concert</a></li>
              </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../purchase/purchase_history.php" style="color: black;">Purchase List</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../about_us/about_us.php" style="color: black;">About Us</a>
            </li>
                    
            <li class="nav-item">
              <a class="nav-link" href="../profile/profile.php" style="color: black;">Profile</a>
            </li>
                    
            <li><hr class="dropdown-divider"></li>
                    
            <li class="nav-item pointer">        
              <button class="nav-link" onclick="myFunction()" style="color: black; border-style: none; background-color: white;">Log Out</button>
              <script>
                function myFunction() {
                  if (confirm("Are you sure to log out?")) {
                    window.location.href='../../log_out.php';
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
            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 20px;">Tambah Lightstick</h2>
            <div class="tambahanlightstick">
              <form action="" method="POST" enctype="multipart/form-data">
                <div style="padding: 0 30px;">
                  <div class="col-12">
                      <label for="Title" class="form-label">Lightstick Name</label>
                      <input type="text" class="form-control" id="Title" name="Title" placeholder="" value="" dprocessedid="l7js95">
                  </div>
                
                  <div class="col-12" style="margin-top: 30px;">
                      <label for="image" class="form-label" style="display: block;">Lightstick Picture</label>
                      <input type="file" class="form-control" id="image" name="image" placeholder="" value="Upload" dprocessedid="l7js95" style="margin-top: 10px;">
                  </div>

                  <div class="col-12" style="margin-top: 30px;">
                      <label for="harga" class="form-label">Lightstick Price</label>
                      <input type="text" class="form-control" id="harga" name="harga" placeholder="" value="" dprocessedid="l7js95">
                  </div>

                  <div class="col-12" style="margin-top: 30px;">
                      <label for="deskripsi" class="form-label">Lightstick Description</label>
                      <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="" dprocessedid="l7js95"></textarea>
                  </div>

                  <input class="btn btn-success" style="float: right; margin: 50px 0; padding: 6px 12px;" name="submit" type="submit" value="Save">
                </div>
              </form>
                <?php
                    if(isset($_POST['submit'])){
                        $title = $_POST['Title'];
                        $harga = $_POST['harga'];
                        $deskripsi = $_POST['deskripsi'];
                        $nama_lightstick = $_FILES['image']['name'];
                        $size_lightstick = $_FILES['image']['size'];
                        $tipe_lightstick = $_FILES['image']['type'];
                        $tmp_lightstick = $_FILES['image']['tmp_name'];

                        $gambar = file_get_contents($tmp_lightstick);
                        $gambar = mysqli_real_escape_string($conn, $gambar);

                        $simpan = "INSERT INTO lightstick VALUES (null, '".$title."', '".$nama_lightstick."', '".$gambar."', '".$harga."', '".$deskripsi."')";
                        // mysqli_query($conn, $simpan);

                        $bisa = mysqli_query($conn, $simpan);

                        if ($bisa) {
                          header("Location: ../merchandise/merchandise.php");
                          exit();
                        } else {
                          echo "Error: " . mysqli_error($conn);
                        }

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
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>