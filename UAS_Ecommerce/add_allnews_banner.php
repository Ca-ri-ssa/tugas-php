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
  <!-- ckeditor 4 -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
                <li><a class="dropdown-item" href="merchandise.php" style="color: green;">Merchandise</a></li>
                <li><a class="dropdown-item" href="ticket.php" style="color: black;">Ticket Concert</a></li>
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
        <h2 class="pb-2 border-bottom" style="margin-bottom: 50px; font-weight: bold;">Add News Banner</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div style="padding: 0 30px;">
                <div class="col-12">
                    <label for="title_allnewsbanner" class="form-label">Title Banner</label>
                    <input type="text" class="form-control" id="title_allnewsbanner" name="title_allnewsbanner" placeholder="" value="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="desc_allnewsbanner" class="form-label">Description</label>
                    <textarea class="form-control" id="descn_allnewsbanner" name="desc_allnewsbanner" placeholder="" value="" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="img_allnewsbanner" class="form-label">Image Banner</label>
                    <input type="file" class="form-control" id="img_allnewsbanner" name="img_allnewsbanner" placeholder="" value="" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="content_allnewsbanner" class="form-label">Content</label>
                    <textarea class="form-control" id="content_allnewsbanner" name="content_allnewsbanner" placeholder="" value="" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <p class="form-label">News Category</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_allnewsbanner" id="category_allnewsbanner" value="Debut" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Debut
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_allnewsbanner" id="category_allnewsbanner" value="Comeback" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Comeback
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_allnewsbanner" id="category_allnewsbanner" value="K-Drama" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Drama
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_allnewsbanner" id="category_allnewsbanner" value="Hot Scandals" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Hot Scandals
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category_allnewsbanner" id="category_allnewsbanner" value="K-Group" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Group
                      </label>
                    </div>
                </div>
                <input class="btn btn-success" style="float: right; margin: 50px 0;" name="add_allnewsbanner" type="submit" value="Save">
            </div>
        </form>
        <?php
        if (isset($_POST['add_allnewsbanner'])) {
          $title_allnewsbanner = $_POST['title_allnewsbanner'];
          $desc_allnewsbanner = $_POST['desc_allnewsbanner'];
          $content_allnewsbanner = $_POST['content_allnewsbanner'];
          $nameimg_allnewsbanner = $_FILES['img_allnewsbanner']['name'];
          $sizeimg_allnewsbanner = $_FILES['img_allnewsbanner']['size'];
          $tipeimg_allnewsbanner = $_FILES['img_allnewsbanner']['type'];
          $tmpimg_allnewsbanner = $_FILES['img_allnewsbanner']['tmp_name'];
          $date_allnewsbanner = date("M d Y");
          $category_allnewsbanner = $_POST['category_allnewsbanner'];

          $img_allnewsbanner = file_get_contents($tmpimg_allnewsbanner);
          $img_allnewsbanner = mysqli_real_escape_string($conn, $img_allnewsbanner);

          $sql = mysqli_query($conn, "INSERT INTO allnews_banner (title_allnewsbanner, desc_allnewsbanner, content_allnewsbanner, nameimg_allnewsbanner, img_allnewsbanner, date_allnewsbanner, category_allnewsbanner) VALUES ('$title_allnewsbanner', '$desc_allnewsbanner', '$content_allnewsbanner', '$nameimg_allnewsbanner', '$img_allnewsbanner', now(), '$category_allnewsbanner')");
          mysqli_close($conn);
        }
        ?>
    </div>
    <script>
  CKEDITOR.replace('content_allnewsbanner');
</script>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>