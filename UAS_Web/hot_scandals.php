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
    <link rel="stylesheet" href="hot_scandals.css">
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
                <li><a class="dropdown-item" href="debut_comeback.php" style="color: black;">Debut/Comeback</a></li>
                <li><a class="dropdown-item" href="k-drama.php" style="color: black;">K-Drama</a></li>
                <li><a class="dropdown-item" href="hot_scandals.php" style="color: #198754;">Hot Scandals</a></li>
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
        <div class="p-4 p-md-5 mb-4 rounded text-bg img">
            <div class="col-md-7 px-0">
                <h1 class="display-2 fst-italic fw-normal" style="color: white;">IU is in Relationship with Lee Jongsuk</h1>
                <p class="lead my-3" style="color: white;">IU has been in relationship with Lee Jongsuk for 2 weeks. Many fans give positive responses for their dating news</p>
                <p class="lead mb-0"><a href="#" style="color: #414876;">Continue reading...</a></p>
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
            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-top: 50px; margin-bottom: 55px;">Hot Scandals</h2>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/scandals1.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Dispatch Reveals “The Glory” Stars Lim Ji Yeon And Lee Do Hyun Are Dating</h3>
                      <div class="mb-1 text-muted">Apr 01 2023</div>
                      <p class="card-text mb-auto">They got to know each other while filming “The Glory”</p>
                      <a href="artikel_bp.php" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/scandals2.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Kim Sae Ron faces fine of $15K for DUI & apologizes at first trial</h3>
                      <div class="mb-1 text-muted">Mar 06 2023</div>
                      <p class="card-text mb-auto">As previously reported, Kim Sae Ron attended the first trial for violating the Road Traffic Act (DUI) at the 4th division of the Seoul Central District Court</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/scandals3.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">'The Glory' director Ahn Gil Ho faces bullying allegations</h3>
                      <div class="mb-1 text-muted">Mar 05 2023</div>
                      <p class="card-text mb-auto">Director Ahn Gil Ho has been accused of being a school bully, the allegations have become a hot topic as 'The Glory' is a drama that follows a character who suffered severe bullying in high school</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/scandals4.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Pre-debut photos of 'Boys Planet' contestant Han Yujin spark dating rumors</h3>
                      <div class="mb-1 text-muted">Feb 28 2023</div>
                      <p class="card-text mb-auto">Recently, pre-debut photos of the 'Boys Planet' contestant Han Yujin surfaced via a group chatroom, sparking numerous rumors</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/scandals5.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Shinhan University investigation of actor Lee Bum Soo</h3>
                      <div class="mb-1 text-muted">Feb 23 2023</div>
                      <p class="card-text mb-auto">Big Punch Entertainment announced that the internal investigation by Shinhan University about accusations of power abuse raised against the actor have concluded</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 100px; background-color: #DBE2CD;">
        <h2 style="margin: 20px 0px 10px 55px; font-weight: bold;">Videos</h2>
        <div style="margin-left: 50px; margin-bottom: 20px;">
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/CyR1xJkLrl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/PkGcZrvbIeE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>