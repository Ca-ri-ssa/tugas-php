<?php
  include("config.php");
  if (isset($_POST['read'])) {
    header("location:debut_comeback.php");
  }
 ?>

<?php
    $query="SELECT * FROM news WHERE id_news = '$_GET[id_news]'";
    $result = $conn->query($query);
    $row = mysqli_fetch_assoc($result);
    $id_news = $row['id_news'];
    $title = $row['title'];
    $content = $row['content'];
    $content2 = $row['content2'];
    $content3 = $row['content3'];
    $news_image = $row['news_image'];
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
    <title>Article</title>
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
            <a class="nav-link active"  aria-current="page" href="home.php"><span style="color: black;">Home</span></a>
          </li>
                  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: #198754;">All</a>

            <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
              <li><a class="dropdown-item" href="debut_comeback.php" style="color: #198754;">Debut/Comeback</a></li>
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

  <!-- content news -->
  <main class="container" style="border: 2px solid lightgray; width: 70%;box-shadow: 2px 2px 5px #0011; margin: 80px 0 70px 200px; padding: 30px;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
      <div style="text-align: right; margin-bottom: 20px;">
      <h2 style="text-align: center; margin-bottom: 20px;"><?php echo $row['title'] ?></h2>
        <p style="display: inline; margin-right: 20px;">Tag:</p>
        <button type="button" class="btn btn-outline-success" disabled style="display: inline;"><?php echo $row['category'] ?></button>
        <button onclick="location.href='edit_news.php?id_news=<?php echo $row['id_news'] ?>'" class="btn btn-primary" name="edit" style="display: inline; margin: 0 20px 0 420px;">Edit</button>
        <button onclick="del()" class="btn btn-danger" name="delete" style="display: inline; margin: 0 20px 0 0;">Delete</button>
        <script>
          function del() {
                if (confirm("Are you sure to delete this article?")) {
                  window.location.href='delete_news.php?id_news=<?php echo $row['id_news'] ?>';
                } else {
                  window.location.href='';
                }
              }
        </script>
        <p style="font-size: 12px; display: inline; margin-right: 20px;">Written by: O-KI</p>
        <p style="font-size: 12px; display: inline;"><?php echo $row['date_news'] ?></p>
      </div>
    </div>

  <!-- php output news -->
    <img src="img/<?php echo $row['news_image'] ?>" style="display:block; margin-left: auto; margin-right: auto; width:650px; margin-top: 30px; margin-bottom: 30px;">
    <br>
    <p style="font-size: medium; padding: 0 15px; text-align: justify;">
    <?php echo $row['content'] ?>
    </p>
    <br>
    <p style="font-size: medium; padding: 0 15px; text-align: justify;">
    <?php echo $row['content2'] ?>
    </p>
    <br>
    <p style="font-size: medium; padding: 0 15px; text-align: justify; margin-bottom: 100px;">
    <?php echo $row['content3'] ?>
    </p>
  </div>

  </body>
  <script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>