<?php 
    require('../../config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News O-KI</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="news.css">
    <link rel="icon" type="image/png" href="../../img/logo-rd.png">

    <style>
    .img{
        background-image: url(../../img/Frame9.png);
    }
    .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
    body{
        overflow-x: hidden;
    }
    .navcolor{
        background-color: white;
        border-bottom: 2px solid #7C924E;
    }
    .btncolor{
        background-color: #7C924E;
        color: white;
    }
    .btncolor:hover{
        background-color: white;
        color: black;
        border: 2px solid #7C924E;
    }
    /* navbar logout */
    .pointer{
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
                <a class="nav-link"  aria-current="page" href="../home/homepage.php"><span style="color: black;">Home</span></a>
                </li>
                        
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: green;">All</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                        <li><a class="dropdown-item" href="all_news.php" style="color: green;">News</a></li>
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

    <div class="container">
    <form class="d-flex" role="search" style="margin: 80px 0 30px;">
        <input class="form-control me-2" type="search" placeholder="Search news" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
        <?php
        $allnewsbanner = mysqli_query($conn, "SELECT * FROM allnews_banner ORDER BY id_allnewsbanner DESC");
        $allbanner = mysqli_fetch_assoc($allnewsbanner);
        ?>
        <div class="p-4 p-md-5 mb-4 rounded text-bg" style="background-image: url('data:image/png;base64,<?php echo base64_encode($allbanner['img_allnewsbanner']) ?>')">
            <div class="col-md-7 px-0">
                <a class="display-2 fst-italic fw-normal" style="color: white; text-decoration: none;" href="read_allnews_banner.php?id_allnewsbanner=<?php echo $allbanner['id_allnewsbanner'] ?>"><?php echo $allbanner['title_allnewsbanner'] ?></a>
                <p class="lead my-3" style="color: white;"><?php echo $allbanner['desc_allnewsbanner'] ?></p>
            </div>
            <div>
            </div>
            </div>
        </div>
        </div>

        <div class="container" style="margin-bottom: 100px;">
        <div class="pb-2 border-bottom">
            <h2 style="font-weight: bold; margin-top: 50px; margin-bottom: 55px; display: inline;">Today's News</h2>
            <button onclick="location.href='add_news.php'" class="btn btn-success" style="display: inline; float: right;">ADD</a>
          </div>
            <?php
                $today_news = "SELECT * FROM today_news ORDER BY id_news DESC";
                $result = mysqli_query($conn, $today_news);
                $row = mysqli_fetch_assoc($result);

                while($row = mysqli_fetch_array($result)){
                ?>
                <div class="col-12 fontart" style="margin-top: 15px;">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img src="data:image/png;base64,<?php echo base64_encode($row['imgnews']) ?>" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                        <div class="col p-5 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $row['category'] ?></strong>
                            <h3 class="mb-0"><?php echo $row['title'] ?></h3>
                            <div class="mb-1 text-muted"><?php echo $row['datenews'] ?></div>
                            <p class="card-text mb-auto"><?php echo $row['descnews'] ?></p>
                            <a href="read_news.php?id_news=<?php echo $row['id_news'] ?>" class="stretched-link" name="read" style="display: inline;">Continue reading...</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
</html>