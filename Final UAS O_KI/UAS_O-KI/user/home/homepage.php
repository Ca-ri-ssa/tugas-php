<?php 
  require('../../config.php'); 
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
  <link rel="stylesheet" href="homepage.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Home</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
</head>
<body style="overflow-x: hidden;">
  <!-- SOSMED -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="facebook" viewBox="0 0 16 16">
      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </symbol>
      
    <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </symbol>
      
    <symbol id="twitter" viewBox="0 0 16 16">
      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
    </symbol>
  </svg>

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
            <a class="nav-link active"  aria-current="page" href="homepage.php"><span style="color: #198754;">Home</span></a>
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

  <!-- banner -->
  <?php
    $homebanner = mysqli_query($conn, "SELECT * FROM home_banner ORDER BY id_banner DESC");
    $banner = mysqli_fetch_assoc($homebanner);
  ?>
  <div class="banner" style="margin-top: 60px; background-image: url('data:image/png;base64,<?php echo base64_encode($banner['imgnews_banner']) ?>');">
      <div class="content" style="text-align: center;">
        <h1 style="margin-top: 50px;"><?php echo $banner['title_banner'] ?></h1>
        <p><?php echo $banner['desc_banner'] ?></p>
        <a class="btn btn-success" href="" role="button">Discover Now</a>
      </div>
  </div>
  <!-- banner -->

  <!-- Featured -->
  <section class="News">
    <div class="container" id="product-cards">
      <div class="container px-4 py-5" id="custom-cards">
      <div class="pb-2 border-bottom">
        <h2 style="font-weight: bold; margin-top: 50px; margin-bottom: 55px; display: inline;">Today's News</h2>
      </div>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php
          $todaynews = "SELECT * FROM today_news ORDER BY id_news DESC LIMIT 3";
          $result = mysqli_query($conn, $todaynews);

          while($row = mysqli_fetch_array($result)){
        ?>
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('data:image/png;base64,<?php echo base64_encode($row['imgnews']) ?>');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                  <a href="../news/read_news.php?id_news=<?php echo $row['id_news'] ?>" name="read" style="text-decoration: none; color: white"><?php echo $row['title'] ?></a>
                </h3>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="../../img/logo-bg.png" alt="O-KI" width="32" height="32" class="rounded-circle border border-white">
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                    <small><?php echo $row['datenews'] ?></small>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <a href="../news/all_news.php">see more...</a>
    </div>


      <div class="container px-4 py-5" id="custom-cards">
        <div class="judul">
          <h2 style="font-weight: bold; margin-top: 50px; margin-bottom: 55px; display: inline;">Top most searched articles</h2>
        </div>
        <hr>
        <!-- <h2 class="pb-2 border-bottom" style="font-weight: bold;">Top most searched articles</h2> -->
        <div class="col-11 fontart" style="margin: 55px 0 0 53px;">
          <?php
              $topnews = mysqli_query($conn, "SELECT * FROM topnews ORDER BY id_top DESC");
              //if(mysqli_num_rows($album) > 0){
                  while($datatop = mysqli_fetch_array($topnews)){
          ?>
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-auto d-none d-lg-block">
                <img src="data:image/png;base64,<?php echo base64_encode($datatop['image']) ?>" class="bd-placeholder-img" width="230" height="285" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                </div>
            <div class="col p-5 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success" style="font-size: 20px;">#<?php echo $datatop['top'] ?></strong>
                <h3 class="mb-0"><?php echo $datatop['title'] ?></h3>
                <div class="mb-1 text-muted"><?php echo $datatop['date'] ?></div>
                <p class="card-text mb-auto"><?php echo $datatop['deskripsi'] ?></p>
                <br/>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>


      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" style="font-weight: bold;">Kpop Merchandise</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
          <?php
              $album = mysqli_query($conn, "SELECT * FROM Album ORDER BY id_album DESC LIMIT 3");
              //if(mysqli_num_rows($album) > 0){
                  while($ambil = mysqli_fetch_array($album)){
          ?>
          <div class="col">
              <div class="card shadow-sm">
                  <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <div class="card-body">
                    <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;"><?php echo $ambil['Title'] ?></h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../album/album.php?idh=<?php echo $ambil['id_album']?>">View</a></button>
                        </div>
                        <large class="text-muted">Rp <?php echo $ambil['harga'] ?></large>
                    </div>
                  </div>
              </div>
          </div>
          <?php }?>
        </div>
        <a href="../merchandise/merchandise.php">see more...</a>
      </div>

      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" style="font-weight: bold;">Kpop Ticket Concert</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
          <?php
              $ticket = mysqli_query($conn, "SELECT * FROM ticket ORDER BY id_ticket DESC LIMIT 3");
                  while($ambil = mysqli_fetch_array($ticket)){
          ?>
          <div class="col">
              <div class="card shadow-sm">
                  <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <div class="card-body">
                    <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;"><?php echo $ambil['Title'] ?></h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../ticket/concert.php?idh=<?php echo $ambil['id_album']?>">View</a></button>
                        </div>
                        <large class="text-muted">Rp <?php echo $ambil['harga'] ?></large>
                    </div>
                  </div>
              </div>
          </div>
          <?php }?>
        </div>
        <a href="../ticket/ticket.php">see more...</a>
      </div>
    
    
  <!-- End Featured -->
  <div div class="row" style="margin-top: 100px; background-color: #DBE2CD;">
      <h2 style="margin: 20px 0px 10px 55px; font-weight: bold; display: inline;">Recommendation</h2>
    <!-- <h2 style="margin: 20px 0px 10px 55px; font-weight: bold;">Reccomendation</h2> -->
    <?php
    $homerecom = mysqli_query($conn, "SELECT * FROM home_recom ORDER BY id_homerecom DESC");
    $recom = mysqli_fetch_assoc($homerecom);
    ?>
    <h3 style="margin: 10px 0px 10px 55px;">Videos</h3>
    <div style="margin-left: 50px; margin-bottom: 10px;">
        <iframe class="p-2 g-col-6" width="650px" height="350px" src="<?php echo $recom['vid_recom1'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="p-2 g-col-6" width="650px" height="350px" src="<?php echo $recom['vid_recom2'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <h3 style="margin: 10px 0px 30px 55px;">Songs</h3>
    <div style="margin-left: 55px; margin-bottom: 50px;">
        <iframe style="border-radius:12px" src="<?php echo $recom['song_recom1'] ?>" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <iframe style="border-radius:12px; margin-left: 43px;" src="<?php echo $recom['song_recom2'] ?>" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        <iframe style="border-radius:12px; margin-left: 43px;" src="<?php echo $recom['song_recom3'] ?>" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
  </div>
  <!-- End Featured -->

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
</html>