<?php 
  
  include('config.php');
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
  <link rel="stylesheet" href="profile_edit.css" />
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
            <div class="row" style="padding: 0 100px;">
              <div class="col" style="margin-left: 30px;">
                <div class="card-body">
                  <div class="row">
                    <?php
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM user WHERE username='$username'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <form action="profile_update.php" method="POST" enctype="multipart/form-data">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">First name</label>
                          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="<?php echo $row['firstName'] ?>" required="" fdprocessedid="yflgl">
                          <div class="invalid-feedback">
                            Valid first name is required.
                          </div>
                        </div>
            
                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="<?php echo $row['lastName'] ?>" required="" fdprocessedid="khla5h">
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="phone" class="form-label">Phone</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text">+62</span>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $row['phone'] ?>" required="" fdprocessedid="3eviec">
                            <div class="invalid-feedback"> 
                              Your phone number is required.
                            </div>
                          </div>
                        </div>
            
                        <div class="col-12">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" fvalue="<?php echo $row['email'] ?>" dprocessedid="l7js95">
                          <div class="invalid-feedback">
                            Please enter a valid email address.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Jl Imam Bonjol" value="<?php echo $row['address'] ?>" required="" fdprocessedid="ugyswp">
                          <div class="invalid-feedback">
                            Please enter your address.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="fandom" class="form-label">Your fandom</label>
                          <input type="text" class="form-control" id="fandom" name="fandom" placeholder="Fandom name" value="<?php echo $row['fandom'] ?>" required="" fdprocessedid="khla5h">
                          <div class="invalid-feedback">
                            Valid fandom is required.
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="profile_image" class="form-label">Profile Picture</label>
                          <input type="file" class="form-control" id="profile_image" name="profile_image" placeholder="" value="<?php echo $row['profile_image'] ?>" required="" fdprocessedid="khla5h">
                          <div class="invalid-feedback">
                            Valid fandom is required.
                          </div>
                        </div>
                    </form>
                  <hr style="margin-top: 30px;">
                  <button class="w-100 btn btn-success btn-lg" type="submit" fdprocessedid="imw7n">Save</button>
                </div>
              </div>
            </div>
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
