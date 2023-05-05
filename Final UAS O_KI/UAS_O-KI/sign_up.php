<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up</title>
    <link rel="icon" type="image/png" href="img/logo-rd.png">
</head>
    <body class="text-center">
        <main class="form-signin w-25 m-auto">
          <form action="sign_up_proses.php" method="POST" enctype="multipart/form-data">
            <img class="mb-4" src="img/logo-bg.png" alt="" width="200" height="200">
            <h1 class="h3 mb-5 fw-bold fontsign">Please sign up</h1>

            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="firstName" class="form-control" id="firstName" name="firstName" placeholder=" ">
              <label for="firstName">First name</label>
            </div>
            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="lastName" class="form-control" id="lastName" name="lastName" placeholder=" ">
              <label for="lastName">Last name</label>
            </div>

            <!-- <p class="form-label">Type of user?</p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="user" value="user" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                I'm user
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="type" id="admin" value="admin" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                I'm admin
              </label>
            </div> -->

            <!-- <div class="form-floating" style="margin-bottom: 10px;">
              <input type="type" class="form-control" id="type" name="type" placeholder=" ">
              <label for="type">user or admin?</label>
            </div> -->
            
            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="username" class="form-control" id="username" name="username" placeholder=" ">
              <label for="username">Username</label>
            </div>
            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <div class="form-floating" style="margin-bottom: 30px;">
              <input type="password" class="form-control" id="password" name="confirm_password" placeholder="Password">
              <label for="password">Password Confirmation</label>
            </div>
            
            <p>Do you have an account? <a href="log_in.php">Login</a></p>
            <button class="w-50 btn btn-success" name="submit" type="submit" onclick="user/home/homepage.php" style="margin-bottom: 80px;">Sign Up</button>
          </form>
        </main>
    </body>
</html>