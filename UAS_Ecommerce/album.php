<?php 
    require('config.php');

    $data = mysqli_query($conn, "SELECT * FROM Album WHERE id_album = '".$_GET['idh']."' ");
    $data2 = mysqli_fetch_object($data);
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
  <title>Album</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
  <style>
        input[type=submit]{
            height: 40%;
            width: 15%;
            background-color: #7C924E;
            border: 1px solid #7C924E;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
    </style>
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
        <?php
            $id = $data2->id_album;
            $album = mysqli_query($conn, "SELECT image FROM album WHERE id_album = $id");
            $ambil = mysqli_fetch_assoc($album);
          ?>
        <nav class="navbar navbar-expand-lg navcolor" style="border-bottom: 2px solid #7C924E;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <!-- <img src="img/LOGO.png" style="width: 100px; height: 50px;"> -->
                    <form class="d-flex" role="search" style="margin-left: 160px;">
                        <input class="form-control me-2 formcolor" type="search" placeholder="Search" aria-label="Search" style="width: 750px;">
                        <button class="btn btncolor" type="submit">Search</button>
                    </form>
                    <!-- <h2 class="pb-2 border-bottom" style="font-weight: bold;"><a style="font-weight:bold; float: right; color: #7C924E; font-size: 18px; padding-top: 12px; text-decoration:none" href="tambahalbum.php">+album</a></h2> -->
                    <button onclick="location.href='editalbum.php?id=<?php echo $data2->id_album ?>'" class="btn btn-primary" name="edit" style="display: inline; margin: 0 10px 0 20px;">Edit</button>
                    <button onclick="location.href='hapusalbum.php?idm=<?php echo $data2->id_album ?>'" class="btn btn-danger" name="delete" style="display: inline; margin: 0 20px 0 10px;">Delete</button>
                </div>
            </div>
        </nav>
        <div class="container container px-4 py-5">
          <div class="row" style=" float: center;">
              <img align="middle" style="width: 700px; height: 400px; border: 2px solid black; border-radius: 2%; background-color: white; display:block; margin: auto; padding-right: 0px; padding-left:0px" src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>">
          </div>

          <div class="row ">
              <h1 style="font-weight: bolder; font-size: 40px; padding-top:20px"><?php echo $data2->Title ?></h1>
              <h3 style="font-weight: bold; font-size: 30px;">Album</h3>
              <p style="font-weight: bold; color: grey; font-size: 30px;">Rp <?php echo $data2->harga ?></p>
              <hr color="#7C924E">
          </div>

          <div class="row" style="font-size: 20px;">
              <p>
                  <?php echo $data2->deskripsi ?>
              </p>

              <p>Are You Interested With This Product? If Yes, Then Get It Now!!!</p>
              <form action="payment.php" method= "GET">
                  <!-- <label for="TotalBought">Quantity:</label> -->
                  <label for="TotalBought" class="form-label">Quantity:</label>
                  <input type="number" class="form-control" name="Quantity" id="Quantity"" placeholder="1" min="1" max="5" required>
                  <!-- <select name="Quantity" id="Quantity" style="padding: 2px; form-radius: 2px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> -->
                  <p style="font-size: 16px; color: grey;">p.s. Maximum quantity that can be bought are 5 (five) for each product!!!</p>
                  <?php
                      $album = mysqli_query($conn, "SELECT * FROM Album ORDER BY id_album DESC");
                      //if(mysqli_num_rows($album) > 0){
                      $ambil = mysqli_fetch_array($album);
                  ?>
                  <button type="button" class="btn btn-sm" style="background-color:#7C924E; color:white; font-size:20px; width: 150px; height: 50px; margin-bottom: 30px" onclick="window.location.href='payment.php?idp=<?php echo $data2->id_album ?>&Quantity='+document.getElementById('Quantity').value;">Buy</button>
                  <!-- <input type="submit" value="Buy" style="padding-left: 5px; text-decoration: none; margin-bottom: 50px" href="payment.php"> -->
              </form>

              <hr color="#7C924E">

              <!-- <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green; size: 10; " href="editalbum.php?id=<?php echo $data2->id_album ?>">Edit</a></button>
                  <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="hapusalbum.php?idm=<?php echo $data2->id_album ?>">Delete</a></button>
              </div> -->
          </div>
        </div>
      </div>
    </div>
</body>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>