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
    <link rel="stylesheet" href="home.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="bootstrap/bootstrap-5.2.3-examples/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Log In</title>
    <link rel="icon" type="image/png" href="img/logo-rd.png">
</head>
    <body class="text-center">
        <main class="form-signin w-25 m-auto">
          <form>
            <img class="mb-4" src="img/logo-bg.png" alt="" width="200" height="200">
            <h1 class="h3 mb-5 fw-bold fontsign">Please Log in</h1>
        
            <div class="form-floating" style="margin-bottom: 10px;">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating" style="margin-bottom: 30px;">
              <input type="password" class="form-control" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
        
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <p>Want to make another account? <a href="sign_up.php">Sign up</a></p>
            <button class="w-50 btn btn-success" type="submit">Log in</button>
          </form>
        </main>
    </body>
</html>