<?php
require_once "connect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login-regis.css">
    <title>KopaKopiLogin</title>
  </head>
  <body>

    <div class="image-wrap">
        <div class="img-content">
            <img src="img/banner.jpg" alt="">
        </div>
        <div class="overlay"></div>
    </div>
    <div class="banner-content">
        <img src="img/logo.png" alt="">
        <h1>KOPAKOPI</h1>
        <div class="login-container">    
            <div class="login-form" >
                <form action="func-login.php" method="POST">
                    <label for="email">EMAIL</label><br>
                    <input type="email" id="email" name="email" Required><br>
                    <label for="password">PASSWORD</label><br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <button type="submit" name="masuk">LOGIN</button>
                  </form>
            
            </div>
            <p class="ask">
              <span>You don't have any account?</span>
              <a href="">Sign Up</a>
            </p>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>