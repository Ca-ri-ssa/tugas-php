<?php 
  require('../../config.php');

  ob_start();

  $data = mysqli_query($conn, "SELECT * FROM today_news WHERE id_news = '".$_GET['id_news']."' ");
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
  <link rel="stylesheet" href="../profile/profile_edit.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit News</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
              <a class="nav-link active"  aria-current="page" href="../home/homepage.php"><span style="color: black;">Home</span></a>
            </li>
                    
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: green;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="all_news.php" style="color: green;">News</a></li>
                <li><a class="dropdown-item" href="../merchandise/merchandise.php" style="color: black;">Merchandise</a></li>
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


    <div class="container" style="margin-top: 80px;">
        <h3 class="pb-2 border-bottom" style="margin-bottom: 50px;">Edit News</h3>
        <?php
        $id_news = $data2->id_news;
        $image = mysqli_query($conn, "SELECT imgnews FROM today_news WHERE id_news = $id_news");
        $take = mysqli_fetch_assoc($image);
        $oldimage = $take['imgnews'];
        ?>
        <form action="" method="post" enctype="multipart/form-data">
        <div style="padding: 0 30px;">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="newtitle" placeholder="" value="<?php echo $data2->title ?>" dprocessedid="l7js95">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="descnews" class="form-label">Description</label>
                    <textarea class="form-control" id="descnews" name="descnews" placeholder="" value="<?php echo $data2->descnews ?>" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="imgnews" class="form-label" style="display: block;">News Image</label>
                    <img src="data:imgnews/png;base64,<?php echo base64_encode($oldimage) ?>" width="400px" height="410px" border= "2px solid black" display="block"><br/>
                    <input type="file" class="form-control" id="imgnews" name="newimgnews" placeholder="" value="" dprocessedid="l7js95" style="margin-top: 10px;">
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <label for="contentnews" class="form-label">Content</label>
                    <textarea class="form-control" id="contentnews" name="contentnews" placeholder="" value="<?php echo $data2->contentnews?>" dprocessedid="l7js95"></textarea>
                </div>
                <div class="col-12" style="margin-top: 30px;">
                    <p class="form-label">News Category</p>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="Debut" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Debut
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="Comeback" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Comeback
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="K-Drama" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Drama
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="Hot Scandals" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Hot Scandals
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="category" id="category" value="K-Group" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        K-Group
                      </label>
                    </div>
                </div>
                <input class="btn btn-success" style="float: right; margin: 50px 0;" name="edit" type="submit" value="Save">
            </div>
        </form>
        <?php
        if(isset($_POST['edit'])){
          $title = $_POST['newtitle'];
          $descnews = $_POST['descnews'];
          $contentnews = $_POST['contentnews'];
          $nameimg = $_FILES['newimgnews']['name'];
          var_dump('newimgnews');
          $sizeimg = $_FILES['newimgnews']['size'];
          $tipeimg = $_FILES['newimgnews']['type'];
          $tmpimg = $_FILES['newimgnews']['tmp_name'];
          $datenews = date("M d Y");
          $category = $_POST['category'];

          // $gambar = file_get_contents($tmp_album);
          $pic = addslashes(file_get_contents($tmpimg));
          // $gambar = base64_encode($gambar);
          $update = "UPDATE today_news SET title='$title', descnews='$descnews', contentnews='$contentnews', nameimg='$nameimg', imgnews='$pic', datenews=now(), category='$category' WHERE id_news=$id_news";
          $sql = mysqli_query($conn, $update);

          if ($sql) {
            header("Location: ../home/homepage.php");
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
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>