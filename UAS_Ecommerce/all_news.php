<?php require('config.php'); ?>

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
    <link rel="icon" type="image/png" href="img/logo-rd.png">

    <style>
    .img{
        background-image: url(img/Frame9.png);
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: #198754;">News</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="all_news.php" style="color: #198754;">News</a></li>
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

    <div class="container">
    <form class="d-flex" role="search" style="margin: 80px 0 30px;">
        <input class="form-control me-2" type="search" placeholder="Search news" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="p-4 p-md-5 mb-4 rounded text-bg" style="background-image: url(img/kdrama-headline.png)">
            <div class="col-md-7 px-0">
                <h1 class="display-2 fst-italic fw-normal" style="color: white;">'Hotel Del Luna' is the highest rate k-drama</h1>
                <p class="lead my-3" style="color: white;">'Hotel De Luna' made a mark on tvN's broadcast history and drew lots of attention and popularity with the production of the drama</p>
                <p class="lead mb-0"><a href="#" style="color: #F3B6FF;">Continue reading...</a></p>
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

            <!-- <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/bp-home.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                    <div class="col p-5 d-flex flex-column position-static">
                        <h3 class="mb-0">Blackpink Concert in Indonesia</h3>
                        <div class="mb-1 text-muted">MAR 01</div>
                        <p class="card-text mb-auto">Blackpink's concert will be held in Gelora Bung Karno, Jakarta.</p>
                        <a href="artikel_bp.php" class="stretched-link">Continue reading...</a>
                    </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin: 15px 0 0;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="img/siwon-news.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                <div class="col p-5 d-flex flex-column position-static">
                    <h3 class="mb-0">Super Junior's Choi Siwon participate for Earth Hour campaign</h3>
                    <div class="mb-1 text-muted">MAR 25</div>
                    <p class="card-text mb-auto">Super Junior's Siwon, as a representative of his agency, SM Entertainment, participated in the world's largest conservation campaign, "Earth Hour" held on March 25</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                </div>
            </div>

            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <img src="img/newjeans-news.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                <div class="col p-5 d-flex flex-column position-static">
                    <h3 class="mb-0">New Jeans opened registration for Bunnies Club</h3>
                    <div class="mb-1 text-muted">MAR 27</div>
                    <p class="card-text mb-auto">New Jeans makes very shocking announcement about new fan club.</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                </div>
            </div> -->

            <div style="margin: 100px 0 50px 0;">
                <h2 class="pb-2 border-bottom" style="font-weight: bold;">Top most searched</h2>
                <table class="table table-hover" style="text-align: center; outline: 2px solid black; margin-top: 55px;">
                    <tr style="border-bottom: 2px solid black;">
                        <th>#</th>
                        <th>Group</th>
                        <th>Volume</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTS</td>
                        <td>10,000,513,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>EXO</td>
                        <td>9,400,522,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>BLACKPINK</td>
                        <td>9,350,755,000</td>
                    </tr>
                </table>
                <a href="">see more...</a>
            </div>

            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 55px;">Comeback News</h2>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/Frame 3.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Paceholder</title>
                        </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Nct Dream Comeback</h3>
                        <div class="mb-1 text-muted">Dec 20</div>
                        <p class="card-text mb-auto">Nct Dream remake Candy from H.O.T! It will be released at 16th December 2022.</p>
                        <a href="#" class="stretched-link">Continue reading...</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/Frame 2.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-danger">HOT</strong>
                    <h3 class="mb-0">Blackpink Comeback</h3>
                    <div class="mb-1 text-muted">Aug 20</div>
                    <p class="card-text mb-auto">Blackpink will release new album "Born Pink" at 16th September 2022.</p>
                    <a href="#" class="stretched-link">Continue reading...</a>
                    </div>
                </div>
            </div>

            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-top: 100px; margin-bottom: 55px;">K-Drama</h2>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/Frame 5.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">New</strong>
                            <h3 class="mb-0">Cha Eunwoo as an Exorcist in Island</h3>
                            <div class="mb-1 text-muted">Dec 12</div>
                                <p class="card-text mb-auto">Island will be aired on TvN at 10th February 2023.</p>
                                <a href="#" class="stretched-link">Continue reading...</a>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/Frame 4.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-danger">HOT</strong>
                            <h3 class="mb-0">Song Joong Ki in Reborn Rich</h3>
                            <div class="mb-1 text-muted">Oct 10</div>
                            <p class="card-text mb-auto">Reborn Rich is an adapted web novel. It will be aired at 18th November 2022.</p>
                            <a href="#" class="stretched-link">Continue reading...</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>