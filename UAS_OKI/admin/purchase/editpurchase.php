<?php 
    require('../../config.php');

    ob_start();

    $data = mysqli_query($conn, "SELECT * FROM purchaselist WHERE id_purchase = '".$_GET['id']."' ");
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
  <link rel="stylesheet" href="../../style.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Album</title>
  <link rel="icon" type="image/png" href="../../img/logo-bg.png">
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
                    <a class="nav-link active" href="../purchase/purchase_history.php" style="color: #198754;">Purchase List</a>
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

    <div class="container" style="margin-top: 75px; margin-bottom: 50px;">
        <div class="main-body">
            <h1 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 20px;">Edit Status Pembelian</h1>
            <div class="editpurchase">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" id="status">
                        <option value="Pembelian Barang Sedang di Proses" <?php if ($data2->status_barang == 'Pembelian Barang Sedang di Proses') echo 'selected' ?>>Pembelian Barang Sedang di Proses</option>
                        <option value="Barang Sedang Dikemas" <?php if ($data2->status_barang == 'Barang Sedang Dikemas') echo 'selected' ?>>Barang Sedang Dikemas</option>
                        <option value="Barang Sedang Berada di Perjalanan ke Lokasi Tujuan" <?php if ($data2->status_barang == 'Barang Sedang Berada di Perjalanan ke Lokasi Tujuan') echo 'selected' ?>>Barang Sedang Berada di Perjalanan ke Lokasi Tujuan</option>
                        <option value="Barang Sudah Sampai di Lokasi Tujuan Pengiriman" <?php if ($data2->status_barang == 'Barang Sudah Sampai di Lokasi Tujuan Pengiriman') echo 'selected' ?>>Barang Sudah Sampai di Lokasi Tujuan Pengiriman</option>
                        <option value="Barang Sudah Diterima" <?php if ($data2->status_barang == 'Barang Sudah Diterima') echo 'selected' ?>>Barang Sudah Diterima</option>
                    </select>
                    <br/>
                    <input type="submit" name="submit" placeholder="simpan" class="btn btn-lg btn-outline-success" value="submit hasil edit" border="2px solid #7C924E" background-color="#7C924E" size="20" margin="20px">
                </div>
              </form>
              <?php
                if(isset($_POST['submit'])){
                  $id= $data2->id_purchase;

                  $status = $_POST['status'];
                  $update = "UPDATE purchaselist SET status_barang='$status' WHERE id_purchase=$id";
                  $bisa = mysqli_query($conn, $update);

                  if ($bisa) {
                    header("Location: purchase_history.php");
                    exit();
                  } else {
                    echo "Error: " . mysqli_error($conn);
                  }
                }
              ?>
            </div>
        </div>
    </div>
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>