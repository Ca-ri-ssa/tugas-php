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
    <link rel="stylesheet" href="merchandise.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Merchandise</title>
    <link rel="icon" type="image/png" href="../../img/logo-rd.png">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: #198754;">All</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                    <li><a class="dropdown-item" href="../news/all_news.php" style="color: black;">News</a></li>
                    <li><a class="dropdown-item" href="merchandise.php" style="color: green;">Merchandise</a></li>
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

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 60px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 500px;">
          <div class="carousel-item active 1">
            <svg class="bd-placeholder-img-1" width="100%" height="100%"><rect width="100%" height="100%" fill="url(../../img/merchandise/header/lightstick.png)"/></svg>
              <div class="container">
                <div class="carousel-caption text-start" style="padding-left: 10px;">
                    <h1></h1>
                </div>
            </div>
          </div>

          <div class="carousel-item 2">
            <svg class="bd-placeholder-img-2" width="100%" height="100%"><rect width="100%" height="100%" fill="url(../../img/merchandise/header/album.png)"/></svg>
              <div class="container">
                <div class="carousel-caption text-start" style="padding-left: 10px;">
                    <h1></h1>
                </div>
              </div>
          </div>

          <div class="carousel-item 3">
            <svg class="bd-placeholder-img-3" width="100%" height="100%"><rect width="100%" height="100%" fill="url(../../img/merchandise/header/photocard.png)"/></svg> 
              <div class="container">
                <div class="carousel-caption text-start" style="padding-left: 10px;">
                  <h1></h1>
                </div>
              </div>
          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
                
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>

    <div class="container">
        <form class="d-flex" role="search" style="margin: 30px 0 10px;">
            <input class="form-control me-2" type="search" placeholder="Search merchandise" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Album <a style="font-weight:bold; float: right; color: #7C924E; font-size: 18px; padding-top: 12px; text-decoration:none" href="../album/tambahalbum.php">+album</a></h2>
            <div class="album-kategori">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                    <?php
                        $album = mysqli_query($conn, "SELECT * FROM Album ORDER BY id_album DESC");
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
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../album/album.php?idh=<?php echo $ambil['id_album']?>">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../album/editalbum.php?id=<?php echo $ambil['id_album']?>">Edit</a></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../hapus/hapusalbum.php?idm=<?php echo $ambil['id_album']?>">Delete</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>


        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Photocard <a style="font-weight:bold; float: right; color: #7C924E; font-size: 18px; padding-top: 12px; text-decoration:none" href="../photocard/tambahphotocard.php">+photocard</a></h2>
            <div class="photocard-kategori">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                    <?php
                        $photocard = mysqli_query($conn, "SELECT * FROM photocard ORDER BY id_photocard DESC");
                            while($ambil = mysqli_fetch_array($photocard)){
                    ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <div class="card-body">
                                <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;"><?php echo $ambil['Title'] ?></h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../photocard/photocard.php?idh=<?php echo $ambil['id_photocard']?>">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../photocard/editphotocard.php?id=<?php echo $ambil['id_photocard']?>">Edit</a></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../hapus/hapusalbum.php?idp=<?php echo $ambil['id_photocard']?>">Delete</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>


        <!-- <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Photocard</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="img/merchandise/photocard/pc-blackpink.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="card-body">
                        <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Blackpink Photocard</h4>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-success">View</button>
                        </div>
                        <small class="text-muted">Rp 50.000</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/photocard/pc-bts.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">BTS Photocard</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                            </div>
                            <small class="text-muted">Rp 60.000</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/photocard/pc-exo.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">EXO Photocard</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                            </div>
                            <small class="text-muted">Rp 60.000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="img/merchandise/photocard/pc-nctdream.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="card-body">
                        <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">NCT Dream Photocard</h4>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-success">View</button>
                        </div>
                        <small class="text-muted">Rp 50.000</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/photocard/pc-treasure.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Treasure Photocard</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                            </div>
                            <small class="text-muted">Rp 40.000</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/photocard/pc-twice.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Twice Photocard</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                            </div>
                            <small class="text-muted">Rp 50.000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Lightstick <a style="font-weight:bold; float: right; color: #7C924E; font-size: 18px; padding-top: 12px; text-decoration:none" href="../lightstick/tambahlightstick.php">+lightstick</a></h2>
            <div class="lightstick-kategori">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                    <?php
                        $lightstick = mysqli_query($conn, "SELECT * FROM lightstick ORDER BY id_lightstick DESC");
                            while($ambil = mysqli_fetch_array($lightstick)){
                    ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <div class="card-body">
                                <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;"><?php echo $ambil['Title'] ?></h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../lightstick/lightstick.php?idh=<?php echo $ambil['id_lightstick']?>">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../lightstick/editlightstick.php?id=<?php echo $ambil['id_lightstick']?>">Edit</a></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-success"><a style="text-decoration:none; color:green" href="../hapus/hapusalbum.php?idl=<?php echo $ambil['id_lightstick']?>">Delete</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <!-- <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Lightstick</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="img/merchandise/lightstick/nct-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="card-body">
                        <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">NCT NeoBong Lightstick</h4>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-success" ><a style="text-decoration:none; color: green" href="NeoBong.php">View</a></button>
                        </div>
                        <small class="text-muted">Rp 650.000</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/lightstick/aespa-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
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
                        <img src="img/merchandise/lightstick/bp-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
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

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 45px; margin-bottom: 20px;">
                <div class="col">
                    <div class="card shadow-sm">
                    <img src="img/merchandise/lightstick/treasure-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="card-body">
                        <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Treasure Teulight Lightstick</h4>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-success">View</button>
                        </div>
                        <small class="text-muted">Rp 850.000</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/merchandise/lightstick/exo-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Exo-L's Pharynx V3 Lightstick</h4>
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
                        <img src="img/merchandise/lightstick/twice-lightstick.png" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <div class="card-body">
                            <h4 class="card-text" style="text-align: center; margin: 20px 0 30px 0;">Twice Candybongz V2 Lightstick</h4>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-success">View</button>
                            </div>
                            <small class="text-muted">Rp 619.000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>

</html>