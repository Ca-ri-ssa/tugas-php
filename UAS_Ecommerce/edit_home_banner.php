<?php 
  require('config.php');

  ob_start();

  $data = mysqli_query($conn, "SELECT * FROM home_banner WHERE id_banner = '".$_GET['id_banner']."' ");
  $data2 = mysqli_fetch_object($data);
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
  <link rel="stylesheet" href="profile_edit.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Home Banner</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
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
              <a class="nav-link active"  aria-current="page" href="homepage.php"><span style="color: #198754;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="all_news.php" style="color: green;">News</a></li>
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


    <div class="container" style="margin-top: 80px;">
        <h3 class="pb-2 border-bottom" style="margin-bottom: 50px;">Edit Home Banner</h3>
        <?php
        $id_banner = $data2->id_banner;
        $image_banner = mysqli_query($conn, "SELECT imgnews_banner FROM home_banner WHERE id_news = $id_banner");
        $take = mysqli_fetch_assoc($image_banner);
        $oldimage_banner = $take['imgnews_banner'];
        ?>
        <form action="" method="post" enctype="multipart/form-data">
        <div style="padding: 0 30px;">
                <div class="col-12">
                    <label for="title_banner" class="form-label">Title Banner</label>
                    <input type="text" class="form-control" id="title_banner" name="newtitle_banner" placeholder="" value="<?php echo $data2->title_banner ?>" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="desc_banner" class="form-label">Description</label>
                    <textarea class="form-control" id="descnews" name="desc_banner" placeholder="" value="<?php echo $data2->desc_banner?>" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="imgnews" class="form-label" style="display: block;">Banner Image</label>
                    <img src="data:imgnews/png;base64,<?php echo base64_encode($oldimage_banner) ?>" width="400px" height="230px" border= "2px solid black" display="block"><br/>
                    <input type="file" class="form-control" id="imgnews_banner" name="newimgnews_banner" placeholder="" value="" dprocessedid="l7js95" style="margin-top: 10px;">
                </div>
                <input class="btn btn-success" style="float: right; margin: 50px 0;" name="edit_homebanner" type="submit" value="Save">
            </div>
        </form>
        <?php
        if(isset($_POST['edit_homebanner'])){
          $title_banner = $_POST['newtitle_banner'];
          $desc_banner = $_POST['desc_banner'];
          $nameimg_banner = $_FILES['newimgnews_banner']['name'];
          $sizeimg_banner = $_FILES['newimgnews_banner']['size'];
          $tipeimg_banner = $_FILES['newimgnews_banner']['type'];
          $tmpimg_banner = $_FILES['newimgnews_banner']['tmp_name'];

          // $gambar = file_get_contents($tmp_album);
          $pic_banner = addslashes(file_get_contents($tmpimg_banner));
          // $gambar = base64_encode($gambar);
          $update = "UPDATE home_banner SET title_banner='$title_banner', desc_banner='$desc_banner', nameimg_banner='$nameimg_banner', imgnews_banner='$pic_banner', WHERE id_banner=$id_banner";
          $sql = mysqli_query($conn, $update);

          if ($sql) {
            header("Location: homepage.php");
            exit();
          } else {
            echo "Error: " . mysqli_error($conn);
          }
        }
      ?>
    </div>
</body>
<script>
  CKEDITOR.replace('contentnews');
</script>
<script src="bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>