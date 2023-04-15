<?php
    require('config.php');
    // session_start();
    $data = mysqli_query($conn, "SELECT * FROM Album WHERE id_album = '".$_GET['id']."' ");
    $data2 = mysqli_fetch_object($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="donepurchase.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
  <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet"><title>Home</title>
  <link rel="icon" type="image/png" href="img/logo-bg.png">
</head>
<body>
    <!-- Navbar -->
        <h1 style="margin-top:6%; display: flex; justify-content: center;">Thank You for Shopping!</h1>
        <h3 style="margin-top:10px; display: flex; justify-content: center;">Hope You Will Always Prioritize Our Platform As a Place To Buy K-Pop Merchandise and ConcertTicket!</h3>

        <div class="container px-4 py-5" id="custom-cards" style="width: fit-content;">
            <?php
                $id = $data2->id_album;
                $album = mysqli_query($conn, "SELECT image FROM album WHERE id_album = $id");
                $ambil = mysqli_fetch_assoc($album);
            ?>
            <img src="data:image/png;base64,<?php echo base64_encode($ambil['image']) ?>" style="width: 80%; height: 60%; margin-left: 70px">
            <h3 style="margin-top:3%; display: flex; justify-content: center;"><?php echo $data2->Title ?></h3>
            <p style="text-align: center">If you have any question you can contact us here: <a href="mailto:oki.kpopnews@gmail.com" style="text-decoration: none; color: black">oki.kpopnews@gmail.com</a></p>
            <p style="text-align: center">You can also contact us here: <a href="contact_us.php">Contact Us Here!</a></p>
            <!-- <h6 class="text-muted" style="margin-top:1%; display: flex; justify-content: center;">Rp 650.000</h6> -->
            
            <div style="margin:3%; display: flex; justify-content: center;">
            <a class="btn btn-success" href="homepage.php" role="button" style="padding-left: 30%; padding-right:30% ;">Done</a>
        </div>
        
        </div>
        
</body>
</html>