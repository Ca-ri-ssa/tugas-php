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
    <link rel="stylesheet" href="news.css">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="vertical-align: middle; color: #198754;">News</a>

                <ul class="dropdown-menu dropdwown-menu-light" aria-labelledby="navbarDropdownNews">
                <li><a class="dropdown-item" href="news.php" style="color: #198754;">News</a></li>
                <li><a class="dropdown-item" href="merchandise.html" style="color: black;">Merchandise</a></li>
                <li><a class="dropdown-item" href="ticket.html" style="color: black;">Ticket Concert</a></li>
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
                    window.location.href='log_in.php';
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
                <h1 class="display-2 fst-italic fw-normal">IU is in Relationship with Lee Jongsuk</h1>
                <p class="lead my-3">IU has been in relationship with Lee Jongsuk for 2 weeks. Many fans give positive responses for their dating news.</p>
                <p class="lead mb-0"><a href="#" class="text-white">Continue reading...</a></p>
            </div>
        </div>
        </div>

        <div class="container" style="margin-bottom: 100px;">
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
        </div>

        <div class="container">
            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-bottom: 55px;">Comeback News</h2>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/Frame 3.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Paceholder</title>
                        </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Nct Dream Comeback</h3>
                        <div class="mb-1 text-muted">Dec 20</div>
                        <p class="card-text mb-auto">Nct Dream remake Candy from H.O.T! It will be released at 16th December 2022.</p>
                        <a href="#" class="stretched-link">Continue reading...</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/Frame 2.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-danger">HOT</strong>
                    <h3 class="mb-0">Blackpink Comeback</h3>
                    <div class="mb-1 text-muted">Aug 20</div>
                    <p class="card-text mb-auto">Blackpink will release new album "Born Pink" at 16th September 2022.</p>
                    <a href="#" class="stretched-link">Continue reading...</a>
                    </div>
                </div>
                </div>
            </div>

            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-top: 100px; margin-bottom: 55px;">K-Drama</h2>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/Frame 5.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Cha Eunwoo as an Exorcist in Island</h3>
                        <div class="mb-1 text-muted">Dec 12</div>
                        <p class="card-text mb-auto">Island will be aired on TvN at 10th February 2023.</p>
                        <a href="#" class="stretched-link">Continue reading...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="img/Frame 4.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">HOT</strong>
                        <h3 class="mb-0">Song Joong Ki in Reborn Rich</h3>
                        <div class="mb-1 text-muted">Oct 10</div>
                        <p class="card-text mb-auto">Reborn Rich is an adapted web novel. It will be aired at 18th November 2022.</p>
                        <a href="#" class="stretched-link">Continue reading...</a>
                    </div>
                    </div>
                </div>
            </div>

            <h2 class="pb-2 border-bottom" style="font-weight: bold; margin-top: 100px; margin-bottom: 55px;">Today's News</h2>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/bp-home.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Blackpink Concert in Indonesia</h3>
                      <div class="mb-1 text-muted">MAR 01</div>
                      <p class="card-text mb-auto">Blackpink's concert will be held in Gelora Bung Karno, Jakarta.</p>
                      <a href="artikel_bp.php" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/siwon-news.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">Super Junior's Choi Siwon participate for Earth Hour campaign</h3>
                      <div class="mb-1 text-muted">MAR 25</div>
                      <p class="card-text mb-auto">Super Junior's Siwon, as a representative of his agency, SM Entertainment, participated in the world's largest conservation campaign, "Earth Hour" held on March 25</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
            <div class="col-12 fontart" style="margin-top: 15px;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col-auto d-none d-lg-block">
                      <img src="img/newjeans-news.png" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                      </div>
                  <div class="col p-5 d-flex flex-column position-static">
                      <h3 class="mb-0">New Jeans opened registration for Bunnies Club</h3>
                      <div class="mb-1 text-muted">MAR 27</div>
                      <p class="card-text mb-auto">New Jeans makes very shocking announcement about new fan club.</p>
                      <a href="" class="stretched-link">Continue reading...</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 100px; background-color: #DBE2CD;">
        <h2 style="margin: 20px 0px 10px 55px; font-weight: bold;">Reccomendation</h2>
        <h3 style="margin: 10px 0px 10px 55px;">Videos</h3>
        <div style="margin-left: 50px; margin-bottom: 10px;">
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/VKChUYk-krA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe class="p-2 g-col-6" width="650px" height="350px" src="https://www.youtube.com/embed/d-QmstniDC8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <h3 style="margin: 10px 0px 30px 55px;">Songs</h3>
        <div style="margin-left: 55px; margin-bottom: 50px;">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3ePLUHZ0wpewHpAg6P3wUE?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <iframe style="border-radius:12px; margin-left: 43px;" src="https://open.spotify.com/embed/track/27bIik73QCu8Xzt3xpG1bI?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <iframe style="border-radius:12px; margin-left: 43px;" src="https://open.spotify.com/embed/track/2pIUpMhHL6L9Z5lnKxJJr9?utm_source=generator" width="400" height="400" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>
</body>
</html>