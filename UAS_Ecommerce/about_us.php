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
  <link rel="stylesheet" href="about_us.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet"><title>About Us</title>
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
                <a class="nav-link active"  aria-current="page" href="index.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">News</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="news.php" style="color: black;">News</a></li>
                <li><a class="dropdown-item" href="merchandise.html" style="color: black;">Merchandise</a></li>
                <li><a class="dropdown-item" href="ticket.html" style="color: black;">Ticket Concert</a></li>
                </ul>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="about_us.php" style="color: #198754;">About Us</a>
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

    <div class="container" style="border: 2px solid lightgray; width: 60%; float: middle; box-shadow: 2px 2px 5px #0011; padding: 10px; background-color: white; margin-top: 75px; margin-bottom: 50px;">
        <div class="row">
            <div class="col6 Word">
                <h1 style="font-size: 40px; font-weight: bold; padding-top: 20px; text-align: center;">About Us</h1>
            </div>
        </div>
        <hr>

        <div class="row row-cols-2" style= "font-family:sans-serif; margin-bottom: 75px;">
            <div class="col-5 photo" style="display: inline-block">
                <img src="img/LOGO.png" style="height: 150px; width: 300px; margin: 20px 0 0 40px;">
            </div>
            <div class="col-6 keterangan" style="margin-left: 40px; text-align: justify; font-family: sans-serif; display: inline-block;">
                <h2 style="font-size: 30px; text-align: center;">What is O-KI?</h2>
                <hr>
                <p>O-KI is a platform that share an updated news about k-pop life to the fans or people who would like to be updated about korean pop.</p>
                <p>O-KI's vision is to be the best website for people to read and understand the K-POP news without need to browse from sosial media.</p>
                <p>O-KI's mission is to be the number one website for sharing k-pop updated news</p>
            </div>
        </div>

        <div class="row" style="font-family:sans-serif;">
            <div class="col6 contact"  style="padding-left: 15px;">
                <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Contact Us Here!</h2>
                <hr style="margin-bottom: 20px">
                <ul>
                    <li style="font-size: medium">Email: <a href="">O-KI@gmail.com</a></li>
                    <li style="font-size: medium">Phone: <a href="">(+62) 853-1234-5678</a></li>
                    <li style="font-size: medium">Location: <a href="">Jl. Thamrin Plaza, No.46, Medan</a></li>
                </ul>
            </div>
        </div>

        <div class="row" style="font-family:sans-serif; margin-top: 75px; margin-bottom: 20px;">
            <div class="col9 note" style="padding-left: 15px;">
                <h2 style="font-size: 40px; font-weight: bold; text-align: center;">Notes</h2>
                <hr style="float: middle;">
                <p style="font-size: medium; text-align: center;">Keep Stay Tuned For Our New Updated News!, and Thank You for Using Our Website!</p>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>