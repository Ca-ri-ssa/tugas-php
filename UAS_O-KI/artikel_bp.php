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
    <title>Article Blackpink</title>
    <link rel="icon" type="image/png" href="img/logo-bg.png">
</head>
<body>
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
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 250px; height: 1860px; margin-top: 60px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="img/LOGO.png" width="150px" height="60px" background-color="bg-white">
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">All</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">Debut/Comeback</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">Hot Scandal</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link active" aria-current="page">K-Group</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">Others</a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/Dango.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>Dango</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>
            </div> -->

            <main class="container" style="border: 2px solid lightgray; width: 70%;box-shadow: 2px 2px 5px #0011; margin: 80px 0 70px 200px; padding: 30px;">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
                    <h2 style="padding-left: 15px;">Blackpink Concert in Indonesia</h2>
                    <p style="font-size: 12px; padding-top: 10px;">Written by: O-KI</p>
                    <p style="font-size: 12px; padding-right: 15px; padding-top: 10px;">01 March 2023</p>
                </div>   
                <img src="img/blackpink.png" style="display:block; margin-left:auto; margin-right:auto; float:middle; width:650px;">
                <br>
                <p style="font-size: medium; padding: 0 15px; text-align: justify;">
                    Blackpink's concert in Gelora Bung Karno, Jakarta. People are excited about this upcoming concert that will be held on 11-12 March 2023. For you, that haven't got the ticket, let's go get it as they will only come once or twice in a year. Check out the venue on this picture down below:
                </p>
                <img src="img/blackpink venue.png" style="display:block; margin-left:auto; margin-right:auto; float:middle; width: 650px;">
                <br>
                <p style="font-size: medium; padding: 0 15px; text-align: justify;">
                    If you still curious whether you want to buy the ticket or not, you could just try to watch this video that will help answer your question regarding this week blackpink's concert:
                </p>
                <iframe width="650" height="350" src="https://www.youtube.com/embed/Qxs_DCLswYA?" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="display:block; margin-left:auto; margin-right:auto; float:middle;" allowfullscreen></iframe>
                <br>
                <p style="font-size: medium; padding: 0 15px; text-align: justify;">
                    How is it? It's the best right? that's why what do you waiting for grab the last slot of the remaining ticket of blackpink's concert that sold in your digital platform.
                </p>
            </main>
        </div>
        <script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    </div>
</body>
</html>