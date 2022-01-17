<?php
session_start();
require_once"connect.php";
if(isset($_SESSION["cust_email"])){
    $cust_email = $_SESSION["cust_email"];
    $user="SELECT * FROM customer_info WHERE cust_email= '$cust_email' ";
    $query=mysqli_query($conn, $user);
    $profile_info = mysqli_fetch_assoc($query);    

    $email      =   $profile_info["cust_email"];      
    $nama       =   $profile_info["cust_nama"];       
    $password   =   $profile_info["cust_password"];   
    $avatar     =   $profile_info["cust_avatar"];   
    $gender     =   $profile_info["cust_gender"];   
    $birthday   =   $profile_info["cust_birthday"];  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>MyProfile</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg  justify-content-end">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="">KOPAKOPI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav ">
            <ul class="navbar-nav justify-content-end " style="float: right;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Our Coffe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- NAVBAR -->


<!-- CONTENT -->
<div class="profile-tittle">PROFILE</div>
<div class="container profile-content">
    <div class="row">
        <div class="col-md-4 profile-kiri" >
            <img src="img/profile/user profile.jpeg" alt="" class="square">
            <p class="change-avatar">CHANGE YOUR AVATAR</p>
            <div class="mb-3 profile-upload">
                <input class="form-control" type="file" id="formFile">
              </div>

        </div>
        <div class="col-md-8 profile-kanan" >
            <form action="func-edit.php" method="POST">
                <label for="nama" style="margin-top: 0px;">Nama</label><br>
                <input type="text" id="nama" name="nama" value="<?php echo $nama ?>"  ><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="<?php echo $email ?>" disabled><br>
                <label for="gender">Gender</label>
                <select class="form-select" aria-label="Default select example" name="gender"  >
                    <option><?php echo $gender ?></option>
                    <option value="Laki-laki" >Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                <label for="birthday">Date of Birth:</label><br>
                <input type="date" id="birthday" name="birthday" value="<?php echo $birthday ?>"><br>
                <label for="password">PASSWORD</label><br>
                <input type="password" id="password" name="password" value="<?php echo $password ?>"><br>


                <button type="submit" name="edit" id="edit">SAVE CHANGE</button>
              </form>
        </div>
      </div>
</div>


<!-- END CONTENT -->




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