<?php 
    require('../../config.php');
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
  <link rel="stylesheet" href="../home/homepage.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Profile</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
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
              <a class="nav-link"  aria-current="page" href="../../index.php"><span style="color: black;">Home</span></a>
          </li>
                  
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
              <li><a class="dropdown-item" href="../news/all_news.php" style="color: black;">News</a></li>
              <li><a class="dropdown-item" href="../merchandise/merchandise.php" style="color: black;">Merchandise</a></li>
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
              <a class="nav-link" href="profile.php" style="color: green;">Profile</a>
          </li>
                  
          <li><hr class="dropdown-divider"></li>
                  
          <li class="nav-item">
            <a class="nav-link" href="../../log_in.php" style="color: black;">Log In</a>
          </li>        
          </ul>
      </div>
      </div>
  </nav>

  <div class="container" style="margin-top: 75px; margin-bottom: 50px;">
    <div class="main-body">
      <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 55px;">Profile</h1>
        <div class="row">
        <?php
          $username = $_SESSION['username'];

          $query = "SELECT * FROM user WHERE username ='$username'";
          $result = mysqli_query($conn, $query);

          // Memasukkan data yang diambil ke dalam variable
          $row = mysqli_fetch_assoc($result);
          ?>
          
          <h4 style="margin-left: 30px;">Welcome, <p style="color: #198754; display: inline;"><?php echo $row['username']?></p></h4>
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
                <h6 class="mb-0">Type</h6>
              </div>
              <div class="col-sm-9 text-secondary">
              <?php echo $row['type'];?>
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
            <div class="row d-flex">
              <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
                <button class="btn btn-outline-success" style="margin-right: 15px;" onclick="location.href= 'profile_edit.php';">Edit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>

<?php  } else {
    header('Location: ../../log_in.php');
}