<?php 
    require('../../config.php');

    ob_start();

    $datatop = mysqli_query($conn, "SELECT * FROM topnews WHERE id_top = '".$_GET['id']."' ");
    $datatop2 = mysqli_fetch_object($datatop);
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
  <link rel="stylesheet" href="../../style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Top News</title>
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
              <a class="nav-link active"  aria-current="page" href="homepage.php"><span style="color: black;">Home</span></a>
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
              <a class="nav-link" href="../about_us/about_us.php" style="color: black;">About Us</a>
            </li>
                    
            <li class="nav-item">
              <a class="nav-link" href="../profile/profile.php" style="color: #198754;">Profile</a>
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

    <div class="container" style="margin-top: 75px; margin-bottom: 50px;">
        <div class="main-body">
            <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 20px;">Edit Top News</h1>
            <div class="edittopnews">
              <?php
                $id = $datatop2->id_top;
                $topnews = mysqli_query($conn, "SELECT image FROM topnews WHERE id_top = $id");
                $ambiltopnews = mysqli_fetch_assoc($topnews);
                $oldimage = $ambiltopnews['image'];
              ?>
              <form action="" method="POST" enctype="multipart/form-data">
                    Nama:  <input type="text" name="NewTitle" placeholder="Nama Top News"  value="<?php echo $datatop2->title?>" width= "600px" size="50" ><br/>
                    Gambar: <img src="data:image/png;base64,<?php echo base64_encode($oldimage)?>" width="400px" height="230px" border="2px solid black"><br/>
                    <input type="file" name="Newimage" placeholder="Gambar Top News"><br/>
                    Tanggal:  <input type="date" name="NewDate" placeholder="Tanggal"  value="<?php echo $datatop2->date?>" width= "600px" size="50" ><br/>
                    Deskripsi:  <input type="text" name="NewDeskripsi" placeholder="Deskripsi"  value="<?php echo $datatop2->deskripsi?>" width= "600px" size="50" ><br/>
                  <input type="submit" name="submit" placeholder="simpan" class="btn btn-lg btn-outline-success" value="submit hasil edit" border="2px solid #7C924E" background-color="#7C924E" size="20" margin="20px">
              </form>
              <?php
                if(isset($_POST['submit'])){
                    $title = mysqli_real_escape_string($conn, $_POST['NewTitle']);
                    $date = mysqli_real_escape_string($conn, $_POST['NewDate']);
                    $deskripsi = mysqli_real_escape_string($conn, $_POST['NewDeskripsi']);
                    $nama_topnews = $_FILES['Newimage']['name'];
                    $size_topnews = $_FILES['Newimage']['size'];
                    $tipe_topnews = $_FILES['Newimage']['type'];
                    $tmp_topnews = $_FILES['Newimage']['tmp_name'];

                //   $gambar = file_get_contents($tmp_topnews);
                    $gambar = addslashes(file_get_contents($tmp_topnews));
                  // $gambar = base64_encode($gambar);
                    $update = "UPDATE topnews SET title='$title', image='$gambar', date='$date', deskripsi='$deskripsi' WHERE id_top=$id ";
                    $bisa = mysqli_query($conn, $update);

                    if ($bisa){
                        header('location:homepage.php');
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                }
              ?>
            </div>
        </div>
    </div>
</body>
<script>
  CKEDITOR.replace('deskripsi');
</script>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>