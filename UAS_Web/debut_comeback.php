<?php
require ("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News O-KI</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="debut_comeback.css">
    <link rel="icon" type="image/png" href="img/logo-rd.png">
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

    <div class="container">
        <form class="d-flex" role="search" style="margin: 80px 0 30px;">
        <input class="form-control me-2" type="search" placeholder="Search news" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="p-4 p-md-5 mb-4 rounded text-bg" style="background-image: url(img/debutcomeback-headline.png)">
            <div class="col-md-7 px-0">
                <h1 class="display-2 fst-italic fw-normal" style="color: white;">JISOO's Debut with First Solo</h1>
                <p class="lead my-3" style="color: white;">According to YG Entertainment, on March 28, Jisoo's first single album 'ME' surpassed 1.24 million pre-order sales in just three weeks</p>
                <p class="lead mb-0"><a href="#" style="color: #FFB2AD">Continue reading...</a></p>
            </div>
        </div>
        </div>

        <!-- <div class="container" style="margin-bottom: 100px;">
            <h2 class="pb-2 border-bottom" style="font-weight: bold;">Top most searched</h2>
            <table class="table table-hover" style="text-align: center; outline: 2px solid black; margin-top: 55px;">
                <tr style="border-bottom: 2px solid black;">
                    <th>#</th>
                    <th>Group</th>
                    <th>Volume</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>BTS</td>
                    <td>10,000,513,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>EXO</td>
                    <td>9,400,522,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BLACKPINK</td>
                    <td>9,350,755,000</td>
                </tr>
            </table>
            <a href="">see more...</a>
        </div> -->

        <div class="container">
          <div class="pb-2 border-bottom">
            <h2 style="font-weight: bold; margin-top: 50px; margin-bottom: 55px; display: inline;">Debuts / Comebacks</h2>
            <a href="add_news.php" style="display: inline; float: right;">ADD</a>
          </div>
          <!-- php news -->
          <?php
            $query = "SELECT * FROM news ORDER BY id_news DESC";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
          ?>
          <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/<?php echo $row['news_image'] ?>" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <div>
                      <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;"><?php echo $row['category'] ?></strong>
                    </div>
                    <h3 class="mb-0"><?php echo $row['title'] ?></h3>
                    <div class="mb-1 text-muted"><?php echo $row['date_news'] ?></div>
                    <p class="card-text mb-auto"><?php echo $row['desc_news'] ?></p>
                    <a href="read_news.php?id_news=<?php echo $row['id_news'] ?>" class="stretched-link" name="read" style="display: inline;">Continue reading...</a>
                  </div>
                </div>
            </div>
          <!-- end php news -->
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/debutcomeback1.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;">Comeback</strong>
                    <h3 class="mb-0">Apink comeback with 'SELF' Mini-Album</h3>
                    <div class="mb-1 text-muted">Apr 01 2023</div>
                    <p class="card-text mb-auto">Apink will be making a comeback with its 10th mini-album "SELF" on April 5 with the title song "DND (Do not Disturb)."</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/debutcomeback2.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;">Comeback</strong>
                    <h3 class="mb-0">Dream Note releases concept photos for their upcoming song 'Blue'</h3>
                    <div class="mb-1 text-muted">Mar 27 2023</div>
                    <p class="card-text mb-auto">The group Dream Note has released concept photos for the pre-release song "BLUE" from their upcoming 5th single 'Secondary Page'</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/debutcomeback3.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;">Debut</strong>
                    <h3 class="mb-0">NCT's new unit "DoJaeJung"</h3>
                    <div class="mb-1 text-muted">Mar 25 2023</div>
                    <p class="card-text mb-auto">DoJaeJung of NCT will officially debut on April 17th. It was reported they filmed their debut MV in Thailand</p>
                    <a href="artikel_bp.php" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/debutcomeback4.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;">Comeback</strong>
                    <h3 class="mb-0">BOL4 reveals beautiful concept photos for 'Love.zip'</h3>
                    <div class="mb-1 text-muted">Mar 20 2023</div>
                    <p class="card-text mb-auto">The singer's 4th mini album 'Love.zip' is set to drop on April 16 KST</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                    <img src="img/debutcomeback5.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                  <div class="col p-5 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success" style="font-size: 16px;">Debut</strong>
                    <h3 class="mb-0">Modhaus releases coming soon teasers of ARTMS</h3>
                    <div class="mb-1 text-muted">Mar 18 2023</div>
                    <p class="card-text mb-auto">About two weeks ago, LOONA's Heejin, Kim Lip, Jinsoul, and Choerry signed exclusive contracts with Modhaus</p>
                    <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
    </div>
    <div class="row" style="margin-top: 100px; background-color: #DBE2CD;">
        <h2 style="margin: 20px 0px 10px 55px; font-weight: bold;">Videos</h2>
        <div style="margin-left: 50px; margin-bottom: 20px;">
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/rYyUpQ_veL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/pNDNk79haQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>