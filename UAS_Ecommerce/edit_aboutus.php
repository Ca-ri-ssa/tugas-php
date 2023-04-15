<?php 
    require('config.php');

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
  <link rel="stylesheet" href="style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Album</title>
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
              <a class="nav-link" href="about_us.php" style="color: green;">About Us</a>
            </li>
                    
            <li class="nav-item">
              <a class="nav-link" href="profile.php" style="color: #198754;">Profile</a>
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
            <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 20px;">Edit Album</h1>
            <div class="editalbum">
                <?php       
                    $aboutus = mysqli_query($conn, "SELECT * FROM aboutus");
                    $data = mysqli_fetch_assoc($aboutus);
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    deskripsi Perusahaan: <br/> <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi perusahaan"> <?php echo $data["deskripsi"] ?></textarea><br/>
                    email: <input type="email" name="email" placeholder="email"  value="<?php echo $data["email"] ?>" width= "600px" size="50" ><br/>
                    phone: <input type="phone" name="phone" placeholder="no telp"  value="<?php echo $data["phone"] ?>" width= "600px" size="50" ><br/>
                    location:  <input type="address" name="location" placeholder="Lokasi"  value="<?php echo $data["location"] ?>" width= "600px" size="50" ><br/>
                    notes:  <input type="text" name="notes" placeholder="notes"  value="<?php echo $data["Notes"] ?>" width= "600px" size="50" ><br/>
                <input type="submit" name="submit" placeholder="simpan" class="btn btn-lg btn-outline-success" value="submit hasil edit" border="2px solid #7C924E" background-color="#7C924E" size="20" margin="20px">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                        $location = mysqli_real_escape_string($conn, $_POST['location']);
                        $notes = mysqli_real_escape_string($conn, $_POST['notes']);

                        $update = "UPDATE aboutus SET deskripsi='$deskripsi', email='$email', phone='$phone', location='$location', Notes='$notes'";
                        $bisa = mysqli_query($conn, $update);

                        if ($bisa) {
                            header("Location: about_us.php");
                            exit();
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<script>
  CKEDITOR.replace('deskripsi');
</script>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>