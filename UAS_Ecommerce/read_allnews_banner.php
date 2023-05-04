<?php
  include("config.php");
  if (isset($_POST['read_allnewsbanner'])) {
    header("location:all_news.php");
  }
 ?>

<?php
    $query="SELECT * FROM allnews_banner WHERE id_allnewsbanner = '$_GET[id_allnewsbanner]'";
    $result = $conn->query($query);
    $hasil = mysqli_fetch_assoc($result);
    $id_allnewsbanner = $hasil['id_allnewsbanner'];
    $title_allnewsbanner = $hasil['title_allnewsbanner'];
    $content_allnewsbanner = $hasil['content_allnewsbanner'];
    $img_allnewsbanner = $hasil['img_allnewsbanner'];
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
    <link rel="stylesheet" href="artikel_bp.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Article Banner</title>
    <link rel="icon" type="image/png" href="img/logo-bg.png">

    <script>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /* navbar logout */
        .pointer{
            cursor: pointer;
        }
    </script>
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
            <a class="nav-link active"  aria-current="page" href="homepage.php"><span style="color: black;">Home</span></a>
          </li>
                  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

            <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
              <li><a class="dropdown-item" href="all_news.php" style="color: black;">News</a></li>
              <li><a class="dropdown-item" href="merchandise.php" style="color: black;">Merchandise</a></li>
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

  <main class="container" style="border: 2px solid lightgray; width: 70%;box-shadow: 2px 2px 5px #0011; margin: 80px 0 70px 200px; padding: 30px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
      <div style="text-align: right; margin-bottom: 20px;">
      <h2 style="text-align: center; margin-bottom: 20px;"><?php echo $hasil['title_allnewsbanner'] ?></h2>
        <p style="display: inline; margin-right: 20px;">Tag:</p>
        <button type="button" class="btn btn-outline-success" disabled style="display: inline;"><?php echo $hasil['category_allnewsbanner'] ?></button>
        <button onclick="location.href='edit_allnews_banner.php?id_allnewsbanner=<?php echo $hasil['id_allnewsbanner'] ?>'" class="btn btn-primary" name="edit_allnewsbanner" style="display: inline; margin: 0 20px 0 420px;">Edit</button>
        <button onclick="del()" class="btn btn-danger" name="delete" style="display: inline; margin: 0 20px 0 0;">Delete</button>
        <script>
          function del() {
                if (confirm("Are you sure to delete this article?")) {
                  window.location.href='delete_allnews_banner.php?id_allnewsbanner=<?php echo $hasil['id_allnewsbanner'] ?>';
                } else {
                  window.location.href='';
                }
              }
        </script>
        <p style="font-size: 12px; display: inline; margin-right: 20px;">Written by: O-KI</p>
        <p style="font-size: 12px; display: inline;"><?php echo $hasil['date_allnewsbanner'] ?></p>
      </div>
    </div>

    <!-- php output news -->
    <img src="data:image/png;base64,<?php echo base64_encode($hasil['img_allnewsbanner']) ?>" style="display:block; margin-left: auto; margin-right: auto; width:650px; margin-top: 30px;">
    <br>
    <div style="font-size: medium; padding: 0 15px; text-align: justify; margin: 50px 0;">
      <?php echo $hasil['content_allnewsbanner'] ?>
    </div>
  </main>

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
              <a class="text-black" href="all_news.php">News</a>
            <p>
              <a class="text-black" href="merchandise.php">Merchandise</a>
            </p>
            <p>
              <a class="text-black" href="ticket.php">Ticket Concert</a>
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
          <a href="#"><img src="img/LOGO.png" style="width: 100px;"></a>
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
  <script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>