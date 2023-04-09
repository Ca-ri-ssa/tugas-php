<?php include('config.php') ?>

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
  <link rel="stylesheet" href="profile_edit.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Add News</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
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

    <div class="container" style="margin-top: 80px;">
        <h2 class="pb-2 border-bottom" style="margin-bottom: 50px; font-weight: bold;">Add News</h2>
        <form action="add_news_process.php" method="post" enctype="multipart/form-data">
            <div style="padding: 0 30px;">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="" fvalue="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="desc_news" class="form-label">Description</label>
                    <textarea class="form-control" id="desc_news" name="desc_news" placeholder="" fvalue="" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" placeholder="" fvalue="" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="news_image" class="form-label">News Image</label>
                    <input type="file" class="form-control" id="news_image" name="news_image" placeholder="" fvalue="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <p class="form-label">News Category</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="debut" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Debut
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="comeback" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Comeback
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="k-group" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Group
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="k-drama" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Drama
                      </label>
                    </div>
                </div>
                <input class="btn btn-success" style="float: right; margin: 50px 0;" name="add" type="submit" value="Save">
            </div>
        </form>
    </div>
</body>