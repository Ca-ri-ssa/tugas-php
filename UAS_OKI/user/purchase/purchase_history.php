<?php
    require('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History</title>
    <link rel="stylesheet" href="purchase_history.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet"><title>Home</title>
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
        
    <div class="container px-4 py-5" id="custom-cards">  
        <div class="col-11 fontart" style="margin: 55px 0 0 50px;">
        <h1>Your Purchase History</h1>
        <hr>
        <br>
        <div class="col-11 fontart" style="margin: 10px 0 0 0px;">
            <?php
                $purchase = mysqli_query($conn, "SELECT * FROM purchaselist ORDER BY id_purchase DESC");
                while($datapurchase = mysqli_fetch_array($purchase)){
                    if($datapurchase['username'] == $_SESSION['username']){
            ?>
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img src="data:image/png;base64,<?php echo $datapurchase['image'] ?>" class="bd-placeholder-img" width="400" height="310" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                        <div class="col p-5 d-flex flex-column position-static">
                            <h3 class="mb-0" style="font-weight: bolder;"><?php echo $datapurchase['nama_barang'] ?></h3>
                            <h4 class="mb-0" style="padding-top: 5px"><?php echo $datapurchase['harga_barang'] ?></h4>
                            <p class="card-text mb-auto">Total Purchase: <?php echo $datapurchase['kuantitas_barang'] ?> item</p>
                            <div class="mb-1 text-muted"><?php echo $datapurchase['tanggal_purchase'] ?></div>
                            <p class="card-text mb-auto">Status Barang: <?php echo $datapurchase['status_barang'] ?></p>
                            <br/>
                        </div>
                        </div>
                    <?php } 
                } ?>
        </div>

        
        </div>          
    </div>
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>