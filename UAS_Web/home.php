<?php require('config.php'); ?>

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
  <title>Home</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
</head>
<body style="overflow-x: hidden">
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
              <a class="nav-link active"  aria-current="page" href="home.php"><span style="color: #198754;">Home</span></a>
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

  <!-- banner -->
  <div class="banner" style="margin-top: 60px;">
      <div class="content" style="text-align: center;">
        <h1 style="margin-top: 50px;">Discover Whats Happen In Kpop</h1>
        <p>Comebacks, Debuts, Dating Rumors, Etc.</p>
        <a class="btn btn-success" href="debut_comeback.php" role="button">Discover Now</a>
      </div>
  </div>
  <!-- banner -->

    <!-- Featured -->
    <section class="News">
      <div class="container" id="product-cards">
        <div class="container px-4 py-5" id="custom-cards">
          <div class="pb-2 border-bottom">
            <h2 style="font-weight: bold; margin-top: 50px; margin-bottom: 55px; display: inline;">Today's News</h2>
            <button onclick="location.href='add_news.php'" class="btn btn-success" style="display: inline; float: right;">ADD</a>
          </div>
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <?php
            $query = "SELECT * FROM news ORDER BY id_news DESC";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            while($row = mysqli_fetch_array($result)){
          ?>
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/<?php echo $row['news_image'] ?>');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    <a href="read_news.php?id_news=<?php echo $row['id_news'] ?>" name="read" style="text-decoration: none; color: white"><?php echo $row['title'] ?></a>
                  </h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="img/logo-bg.png" alt="O-KI" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small><?php echo $row['date_news'] ?></small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>
            
            <!-- <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/kard-home.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    <a href="" style="text-decoration: none; color: white">KARD is preparing comeback this April</a>
                  </h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="img/logo-bg.png" alt="O-KI" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>2 minutes ago</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/nctdream-home.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    <a href="" style="text-decoration: none; color: white">The Dream Show 2 in Hongkong</a>
                  </h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="img/logo-bg.png" alt="O-KI" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>35 minutes ago</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/seulgi28-home.png');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    <a href="" style="text-decoration: none; color: white">Seulgi's 28 reasons achieved highest sales</a>
                  </h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <img src="img/logo-bg.png" alt="O-KI" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                      <small>5 hours ago</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom" style="font-weight: bold;">Top most searched articles</h2>
          <div class="col-11 fontart" style="margin: 55px 0 0 50px;">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col-auto d-none d-lg-block">
                  <img src="img/bp-home.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                  </div>
              <div class="col p-5 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success" style="font-size: 20px;">#1</strong>
                  <h3 class="mb-0">Blackpink Concert in Indonesia</h3>
                  <div class="mb-1 text-muted">MAR 01 2023</div>
                  <p class="card-text mb-auto">Blackpink's concert will be held in Gelora Bung Karno, Jakarta.</p>
                  <a href="artikel_bp.php" class="stretched-link">Continue reading</a>
              </div>
            </div>
          </div>
          <div class="col-11 fontart" style="margin: 10px 0 0 50px;">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col-auto d-none d-lg-block">
                  <img src="img/jimin-home.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                  </div>
              <div class="col p-5 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success" style="font-size: 20px;">#2</strong>
                  <h3 class="mb-0">Jimin released new solo album</h3>
                  <div class="mb-1 text-muted">Mar 24 2023</div>
                  <p class="card-text mb-auto">Fans were shocked with the news about Jimin solo debut.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
              </div>
            </div>
          </div>
          <div class="col-11 fontart" style="margin: 10px 0 0 50px;">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col-auto d-none d-lg-block">
                  <img src="img/kai-home.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                  </div>
              <div class="col p-5 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success" style="font-size: 20px;">#3</strong>
                  <h3 class="mb-0">Kai's Rover is banned during CSAT</h3>
                  <div class="mb-1 text-muted">Mar 20 2023</div>
                  <p class="card-text mb-auto">Kai's Rover has been stuck in many netizens' minds rent-free thanks to its fun melody and addictive chorus.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
              </div>
            </div>
          </div>
          <a href="" style="margin-left: 50px;">see more...</a>
        </div>

        <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom" style="font-weight: bold;">Kpop Merchandise</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/nct-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">NCT NeoBong Lightstick</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Rp 650.000</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/aespa-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">AESPA Lightstick</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Rp 635.000</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/bp-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">BLACKPINK Lightstick ver 2</h4>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Rp 510.000</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="">see more...</a>
        </div>
        </section>

        <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom" style="font-weight: bold;">Ticket Concert</h2>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/bp-ticket.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin-top: 20px;">Born Pink</h4>
                  <p style="text-align: center; margin-bottom: 30px;">World Tour</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Jakarta, Indonesia</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/nctdream-ticket.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin-top: 20px;">The Dream Show 2</h4>
                  <p style="text-align: center; margin-bottom: 30px;">Nct Dream Tour</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Jakarta, Indonesia</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/twice-ticket.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                  <h4 class="card-text" style="text-align: center; margin-top: 20px;">READY TO BE</h4>
                  <p style="text-align: center; margin-bottom: 30px;">Twice 5th World Tour</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-success">View</button>
                    </div>
                    <small class="text-muted">Seoul, South Korea</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a href="">see more...</a>
        </div>
      </div>


    <div div class="row" style="margin-top: 100px; background-color: #DBE2CD;">
      <h2 style="margin: 20px 0px 10px 55px; font-weight: bold;">Reccomendation</h2>
      <h3 style="margin: 10px 0px 10px 55px;">Videos</h3>
      <div style="margin-left: 50px; margin-bottom: 10px;">
          <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/VKChUYk-krA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/d-QmstniDC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <h3 style="margin: 10px 0px 30px 55px;">Songs</h3>
      <div style="margin-left: 55px; margin-bottom: 50px;">
          <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3ePLUHZ0wpewHpAg6P3wUE?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
          <iframe style="border-radius:12px; margin-left: 43px;" src="https://open.spotify.com/embed/track/27bIik73QCu8Xzt3xpG1bI?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
          <iframe style="border-radius:12px; margin-left: 43px;" src="https://open.spotify.com/embed/track/2pIUpMhHL6L9Z5lnKxJJr9?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </div>
    </div>
    <!-- End Featured -->

  <footer class="text-center text-lg-start text-black" style="border-top: 2px solid #7C924E; background-color: #ffffff;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              O-KI
            </h6>
            <p>
              O-Ki is a company that gives a updated and trusted information about the K-POPworld. We also 
              provide you with ashop that sells licensed and offcial merchendise from various group.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Pages</h6>
            <p>
              <a class="text-black">Scandal</a>
            </p>
            <p>
              <a class="text-black">Debut</a>
            </p>
            <p>
              <a class="text-black">Comeback</a>
            </p>
            <p>
              <a class="text-black">Shop</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
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
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Lippo Plaza Medan, Lantai 5 - 7, Jl. Imam Bonjol No.6, Petisah Tengah, Medan Petisah, Medan City, North Sumatra 20112</p>
            <p><i class="fas fa-envelope mr-3"></i> oki.kpopnews@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +62 8123456789</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              <p style="text-align: center; margin-bottom: 50px;">&copy; <script>document.write(new Date().getFullYear())</script> Copyright</p>
              <a class="text-black" href="https://mdbootstrap.com/"
                 >O-KI!</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
<!-- Footer -->
  </body>
  <script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>