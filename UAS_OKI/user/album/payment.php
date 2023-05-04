<?php
    require('../../config.php');
    // session_start();
    ob_start();

    $data = mysqli_query($conn, "SELECT * FROM album WHERE id_album = '".$_GET['idp']."' ");
    $data2 = mysqli_fetch_object($data);

    $username = $_SESSION['username'];
    $form = mysqli_query($conn, "SELECT * FROM user WHERE username ='".$username."' ");
    $formdata = mysqli_fetch_assoc($form);

    $pembelian = $_GET['Quantity'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="payment.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Payment</title>
  <link rel="icon" type="image/png" href="../../img/logo-rd.png">
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: black;">All</a>

              <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                    <li><a class="dropdown-item" href="../news/news.php" style="color: black;">All</a></li>
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

    <div class="container" style="margin-top: 70px;">
        <main>
          <div class="py-1 text-center">
            <h1 style="margin-bottom: 30px; margin-top: 10px; font-weight: bold">Payment</h1>
          </div>
              
          <div class="row g-5">
              <?php
                $id = $data2->id_album;
                $album = mysqli_query($conn, "SELECT image FROM album WHERE id_album = $id");
                $ambil = mysqli_fetch_assoc($album);
              ?>
            <div class="col-md-5 col-lg-4 order-md-last">
                <h2 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-pimary" style="font-weight: bolder;">Shop</span>
                </h2>
                <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" class="img-thumbnail">
                <h4 style="font-weight: bold; padding-top: 10px;"><?php echo $data2->Title ?></h4>
                <p style="text-align: justify;"> <?php echo $data2->deskripsi ?></p>
                <h5><b>Total Harga: Rp <?php echo $pembelian * $data2->harga ?></b></h5>
            </div>
        
            <div class="col-md-7 col-lg-8">
            <h2 class="mb-3" style="font-weight: bold;">Isi Data</h2>
            <form class="needs-validation" novalidate="" method="POST" action="">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $formdata['firstName']?>" required="" fdprocessedid="hpeba">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $formdata['lastName']?>" required="" fdprocessedid="gb2k3d">
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              
                <div class="col-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com" value="<?php echo $formdata['email']?>" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address for payment.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="tel" class="form-control" id="phone" placeholder="+62" value="<?php echo $formdata['phone']?>" required>
                  <div class="invalid-feedback">
                    Please enter a valid phone number for payment.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="payment" class="form-label">Address</label>
                  <input type="url" class="form-control" id="payment" placeholder="Masukkan link Google Maps" value="<?php echo $formdata['address']?>" required>
                  <div class="invalid-feedback">
                    Please enter a valid address for delivery.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="qty" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="qty" placeholder="0" value="<?php echo $pembelian?>" required>
                  <div class="invalid-feedback">
                    Please enter a valid address for delivery.
                  </div>
                </div>
    
                <hr class="my-3" style="color:#7C924E; margin-top: 20px;">
                <h2 class="mb-0" style="font-weight: bold;">Payment</h2>
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="payment" type="radio" class="form-check-input" checked="" required="">
                    <label class="form-check-label" for="credit">Credit card</label>
                  </div>
                  <div class="form-check">
                    <input id="debit" name="payment" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="debit">Debit card</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal" name="payment" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="paypal">PayPal</label>
                  </div>
                </div>

                <div class="row gy-2">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" fdprocessedid="ucwf8" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
        
                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" fdprocessedid="q4drls" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>

                <?php
                  $id = $data2->id_album;
                  $album = mysqli_query($conn, "SELECT image FROM album WHERE id_album = $id");
                  $ambil = mysqli_fetch_assoc($album);
                ?>

                <?php $status_data= "Pembelian Barang Sedang di Proses";?>
                <input type="hidden" style="display-none" name="image" placeholder="Gambar Album" value=""><br/>
                <input type="hidden" name="Title" placeholder="Nama"  value="<?php echo $data2->Title?>" width= "600px" size="50" required><br/>
                <input type="hidden" name="harga" placeholder="Total harga"  value="<?php echo $pembelian * $data2->harga?>" width= "600px" size="50" required><br/>
                <input type="hidden" name="kuantitas" placeholder="kuantitas"  value="<?php echo $_GET['Quantity']?>" width= "600px" size="50" required><br/>
                <input type="hidden" name="tanggal" placeholder="Tanggal"  value="<?php echo date('Y-m-d')?>" width= "600px" size="50" required><br/>
                <input type="hidden" name="status" placeholder="Nama Album"  value="<?php echo $status_data ?>" width= "600px" size="50" required><br/>

                <hr class="my-4">
                <input type="submit" name="submit" placeholder="simpan" class="btn btn-lg btn-primary center-block" fdprocessedid="te13ca" value="Done Payment" style="color: white; border:2px solid #7C924E; background-color:#7C924E; float:center; text-align:center; position:relative;">
                <!-- <button class="w-100 btn" type="submit" fdprocessedid="te13ca" style="background-color: #7C924E; color: white;">Done Payment</button> -->
              </div>
            </form>
            <?php
              if(isset($_POST['submit'])){
                $id = $data2->id_album;
                $album = mysqli_query($conn, "SELECT image FROM album WHERE id_album = $id");
                $ambil = mysqli_fetch_assoc($album);

                $image = base64_encode($ambil['image']);

                $username = $_SESSION['username'];
                $nama_barang = $_POST['Title'];
                $harga_barang = $_POST['harga'];
                $kuantitas_barang = $_POST['kuantitas'];
                $tanggal_purchase = $_POST['tanggal'];
                $status_barang = $_POST['status'];

                $simpan = "INSERT INTO purchaselist VALUES (null, '".$username."', '".$image."', '".$nama_barang."', '".$harga_barang."', '".$kuantitas_barang."', '".$tanggal_purchase."', '".$status_barang."')";
                // mysqli_query($conn, $simpan);

                $bisa = mysqli_query($conn, $simpan);

                if ($bisa) {
                  header("Location: donepurchase.php?id= $data2->id_album");
                  exit();
                } else {
                  echo "Error: " . mysqli_error($conn);
                }
                mysqli_close($conn);
              }
            ?>
          </div>
        </main>
      </div>
</body>
<script src="../../bootstrap/bootstrap-5.2.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</html>