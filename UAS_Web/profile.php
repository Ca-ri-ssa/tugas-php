<?php require('config.php');
    if(is_logged_in()){
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
  <link rel="stylesheet" href="home.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Profile</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
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
              <a class="nav-link active"  aria-current="page" href="home.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="debut_comeback.php" style="color: black;">Debut/Comeback</a></li>
                <li><a class="dropdown-item" href="k-drama.php" style="color: black;">K-Drama</a></li>
                <li><a class="dropdown-item" href="hot_scandals.php" style="color: black;">Hot Scandals</a></li>
              </ul>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about_us.php" style="color: black;">About Us</a>
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
      <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 55px;">Profile</h1>
        <div class="row">
          <div class="col-5">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <!-- Icons -->
                  <!-- dengan php untuk mengambil data dari database user-->
                  <?php
                  $username = $_SESSION['username'];

                  $query = "SELECT * FROM user WHERE username ='$username'";
                  $result = mysqli_query($conn, $query);

                  // Memasukkan data yang diambil ke dalam variable
                  $row = mysqli_fetch_assoc($result);
                  ?>
                  <img src="<?php echo $row['profile_image']?>" class="img-thumbnail" alt="...">
                  <div class="data" style="margin-top: 30px; margin-bottom: 50px;">
                    <h4 value="" name=""><?php echo $row['username']?></h4>
                    <p class="text-secondary mb-1" style="font-size: 16px;"><?php echo $row['fandom']?></p>
                    <p class="text-muted font-size-sm" style="font-size: 16px;"><?php echo $row['address']?></p>
                    <div style="margin-top: 30px;">
                      <button class="btn btn-outline-success" onclick="location.href='profile_edit.php';" style="margin-right: 10px;" >Edit</button>
                      <!-- <button class="btn btn-success">Save</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col" style="margin-left: 30px;">
            <div class="card-body">
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $row['firstName'];?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $row['lastName'];?>
                </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php echo $row['email'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone Number</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $row['phone'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $row['address'];?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Fandom</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $row['fandom'];?>
              </div>
            </div>
            <hr>
            <!-- <div class="row d-flex">
              <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
                <button class="btn btn-success">Save</button>
                <button class="btn btn-outline-success" style="margin-right: 15px;">Edit</button>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>

<?php  } else {
    header('Location: index.php');
}