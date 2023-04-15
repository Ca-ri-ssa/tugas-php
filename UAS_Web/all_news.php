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
                <a class="nav-link active"  aria-current="page" href="home.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: #198754;">News</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="news.php" style="color: #198754;">News</a></li>
                <li><a class="dropdown-item" href="merchandise.html" style="color: black;">Merchandise</a></li>
                <li><a class="dropdown-item" href="ticket.html" style="color: black;">Ticket Concert</a></li>
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
                    window.location.href='log_in.php';
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
                <h1 class="display-2 fst-italic fw-normal" style="color: white;">'Hotel Del Luna' is The Highest Rate K-Drama</h1>
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
            $query = "SELECT * FROM news ORDER BY id_news DESC";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            while($row = mysqli_fetch_array($result)){
            ?>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/<?php echo $row['news_image'] ?>" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                    <div class="col p-5 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success"><?php echo $row['category'] ?></strong>
                        <h3 class="mb-0"><?php echo $row['title'] ?></h3>
                        <div class="mb-1 text-muted"><?php echo $row['date_news'] ?></div>
                        <p class="card-text mb-auto"><?php echo $row['desc_news'] ?></p>
                        <a href="read_news.php?id_news=<?php echo $row['id_news'] ?>" class="stretched-link" name="read" style="display: inline;">Continue reading...</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>