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
    <link rel="stylesheet" href="about_us.css"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet"><title>About Us</title>
    <link rel="icon" type="image/png" href="../../img/logo-bg.png">
    <style>
        .body{
            background-color: white;
        }
    </style>
</head>
<body>
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
                <a class="nav-link" href="about_us.php" style="color: green;">About Us</a>
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

    <?php       
        $aboutus = mysqli_query($conn, "SELECT * FROM aboutus");
        $data = mysqli_fetch_assoc($aboutus);
    ?>

    <div class="container" style="width: 60%; float: middle; box-shadow: 2px 2px 5px #0011; padding: 10px; background-color: white;">
        <div class="row">
            <h style="font-size: 40px; font-weight: bold; padding-left: 40px; padding-top: 60px;">About-Us</h1>
            <button onclick="location.href='edit_aboutus.php'" class="btn btn-success" style="display: inline; float: right; width:80px; margin-top: 15px">Edit</a>
        </div>
        <hr>
        
        <div class="row" style="background-color: rgb(247, 247, 247); font-family:sans-serif; ">
            <div class="col5 keterangan">
                <h2 style="font-size: 30px; padding-top: 20px;">What is <img src="../../img/LOGO.png" style=" height: 40px; width:100px; vertical-align: middle; padding-top: 0px;">?</h2>
                <hr>
                <p><?php echo $data["deskripsi"] ?></p>
                <!-- <p>O-KI is a platform that share an updated news about k-pop life to the fans or people who would like to be updated about korean pop.</p>
                <p>O-KI's vision is to be the best website for people to read and understand the k-pop news without need to browse from sosial media.</p>
                <p>O-KI's mission is to be the number one website for sharing k-pop updated news</p> -->
 
            </div>
        </div>

        <div class="row" style="background-color: rgb(247, 247, 247); font-family:sans-serif;">
            <div class="col9 contact"  style="padding-left: 15px;">
                <h2 style="font-size: 30px; padding-top: 20px; ">Contact Us Here!</h2>
                <hr style="float: middle;">
                <p style="font-size: medium">- email    : <a href="mailto:oki.kpopnews@gmail.com" style="text-decoration: none; color: black"><?php echo $data["email"] ?></a></a></p>
                <p style="font-size: medium">- phone    : <a href="" style="text-decoration: none; color: black"><?php echo $data["phone"] ?></a></p>
                <p style="font-size: medium">- Location : <a href="" style="text-decoration: none; color: black"><?php echo $data["location"] ?></a></a></p>
            </div>
        </div>

        <div class="row" style="background-color: rgb(247, 247, 247); font-family:sans-serif;">
            <div class="col9 note" style="padding-left: 15px;">
                <h2 style="font-size: 30px; padding-top: 20px;">Notes</h2>
                <hr style="float: middle;">
                <p style="font-size: medium; text-align: center;"><?php echo $data["Notes"] ?></a></p>
            </div>
        </div>
    </div>
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>