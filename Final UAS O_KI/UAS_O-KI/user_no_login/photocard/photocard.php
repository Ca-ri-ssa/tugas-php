<?php 
    require('../../config.php');

    $data = mysqli_query($conn, "SELECT * FROM photocard WHERE id_photocard = '".$_GET['idh']."' ");
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
  <link rel="stylesheet" href="../../style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Photocard</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
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
                    
            <li class="nav-item">
              <a class="nav-link" href="../../log_in.php" style="color: black;">Log In</a>
            </li>        
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="margin-top: 75px; margin-bottom: 50px;">
      <div class="main-body">
        <?php
            $id = $data2->id_photocard;
            $photocard = mysqli_query($conn, "SELECT image FROM photocard WHERE id_photocard = $id");
            $ambil = mysqli_fetch_assoc($photocard);
          ?>
        <nav class="navbar navbar-expand-lg navcolor" style="border-bottom: 2px solid #7C924E;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <form class="d-flex" role="search" style="margin-left: 160px;">
                        <input class="form-control me-2 formcolor" type="search" placeholder="Search" aria-label="Search" style="width: 750px;">
                        <button class="btn btncolor" type="submit">Search</button>
                    </form>
                    <!-- <h2 class="pb-2 border-bottom" style="font-weight: bold;"><a style="font-weight:bold; float: right; color: #7C924E; font-size: 18px; padding-top: 12px; text-decoration:none" href="tambahalbum.php">+album</a></h2> -->
                </div>
            </div>
        </nav>
        <div class="container container px-4 py-5">
          <div class="row" style=" float: center;">
              <img align="middle" style="width: 700px; height: 400px; border: 2px solid black; border-radius: 2%; background-color: white; display:block; margin: auto; padding-right: 0px; padding-left:0px" src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>">
          </div>

          <div class="row ">
              <h1 style="font-weight: bolder; font-size: 40px; padding-top:20px"><?php echo $data2->Title ?></h1>
              <h3 style="font-weight: bold; font-size: 30px;">Photocard</h3>
              <p style="font-weight: bold; color: grey; font-size: 30px;">Rp <?php echo $data2->harga ?></p>
              <hr color="#7C924E">
          </div>

          <div class="row" style="font-size: 20px;">
              <p>
                  <?php echo $data2->deskripsi ?>
              </p>

              <p>Are You Interested With This Product? If Yes, Then Get It Now!!!</p>
              <form action="payment.php" method= "GET">
                  <label for="TotalBought" class="form-label">Quantity:</label>
                  <input type="number" class="form-control" name="Quantity" id="Quantity"" placeholder="1" min="1" max="5" required>
                  <p style="font-size: 16px; color: grey;">p.s. Maximum quantity that can be bought are 5 (five) for each product!!!</p>
                  <?php
                      $photocard = mysqli_query($conn, "SELECT * FROM photocard ORDER BY id_photocard DESC");
                      $ambil = mysqli_fetch_array($photocard);
                  ?>
                  <button type="button" class="btn btn-sm" style="background-color:#7C924E; color:white; font-size:20px; width: 150px; height: 50px; margin-bottom: 30px" onclick="window.location.href='payment.php?idp=<?php echo $data2->id_photocard ?>&Quantity='+document.getElementById('Quantity').value;">Buy</button>
              </form>

              <hr color="#7C924E">
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center text-lg-start text-black" style="border-top: 2px solid #7C924E; background-color: #ffffff;">
    <!-- Grid container -->
    <div class="container p-4 pb-0" style="max-width: 2000px">
      <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                O-KI
                </h6>
                <p style="text-align: justify;">
                O-Ki is a company that gives a updated and trusted information about the K-POPworld. We also 
                provide you with ashop that sells licensed and offcial merchendise from various group.
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-1 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Pages</h6>
                <p>
                <a class="text-black" href="../news/all_news.php">News</a>
                <p>
                <a class="text-black" href="../merchandise/merchandise.php">Merchandise</a>
                </p>
                <p>
                <a class="text-black" href="../ticket/ticket.php">Ticket Concert</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-1 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                Shop
                </h6>
                <p>
                <a class="text-black">Photocard</a>
                </p>
                <p>
                <a class="text-black">Lightstick</a>
                </p>
                <p>
                <a class="text-black">Album</a>
                </p>
                <p>
                <a class="text-black">Concert Ticket</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-8 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p style="text-align: justify;"><i class="fas fa-home mr-3"></i> Lippo Plaza Medan, Lantai 5 - 7, Jl. Imam Bonjol No.6, Petisah Tengah, Medan Petisah, Medan City, North Sumatra 20112</p>
                <p><i class="fas fa-envelope mr-3"></i><a href="mailto:oki.kpopnews@gmail.com" style="text-decoration: none; color: black">oki.kpopnews@gmail.com</a></p>
                <p><i class="fas fa-phone mr-3"></i> +62 8123456789</p>
                <p><i>You can also contact us here: <a href="../contact_us/contact_us.php">Contact Us Here!</a></i></p>
            </div>
            <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-4 pt-0 row">
            <div class="d-flex justify-content-between">
            <a href="#"><img src="../../img/LOGO.png" style="width: 100px;"></a>
            <div class="text-center">
                <a class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30"><use xlink:href="#twitter"/></svg></a>
                <a class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30"><use xlink:href="#instagram"/></svg></a>
                <a class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30"><use xlink:href="#facebook"/></svg></a>
            </div>
            <p style="text-align: right; margin-bottom: 50px;">&copy; <script>document.write(new Date().getFullYear())</script> Copyright</p>
            </div>
        </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>