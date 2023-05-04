<?php include('../../config.php') ?>

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
  <!-- <link rel="stylesheet" href="profile_edit.css" /> -->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Contact Us</title>
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

    <div class="container" style="margin-top: 80px; margin-bottom: 200px">
        <h2 class="pb-2 border-bottom" style="margin-bottom: 50px; font-weight: bold;">Contact Us!</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div style="padding: 0 30px;">
                <div class="col-12">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" fvalue="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" fvalue="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" id="message" name="message" placeholder="" fvalue="" dprocessedid="l7js95"></textarea>
                </div>
                <input class="btn btn-success" style="float: right; margin: 50px 0;" name="submit" type="submit" value="Save">
            </div>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $simpan = "INSERT INTO contact_us VALUES (null, '".$name."', '".$email."', '".$message."')";
                mysqli_query($conn, $simpan);
                mysqli_close($conn);
            }
        ?>
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
    <script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>