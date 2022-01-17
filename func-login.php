<?php
session_start();
include "connect.php";
    $email      =($_POST["email"]);
    $password   =($_POST["password"]);

  $cekuser="SELECT * FROM customer_info WHERE cust_email='$email'";
  $query=mysqli_query($conn, $cekuser);
  
  $hasil= mysqli_num_rows($query);

    if($hasil==1){
   $info=mysqli_fetch_assoc($query);
   if($password===$info["cust_password"])
   //if(password_verify($password, $info["user_password"]))
   {
    $_SESSION["cust_id"]         = $info["cust_id"];
    $_SESSION["cust_email"]      = $info["cust_email"];
    $_SESSION["cust_nama"]       = $info["cust_nama"];
    $_SESSION["cust_password"]   = $info["cust_password"];
    $_SESSION["cust_avatar"]   = $info["cust_avatar"];
    $_SESSION["cust_gender"]   = $info["cust_gender"];
    $_SESSION["cust_birthday"]   = $info["cust_birthday"];
    header("Location: home.php");
   }
   else{
       echo"password salah";
       echo' <a href="login.php">PASSWORD SALAH</a> ';
   }
  }
  else{
      echo"pastikan email anda benar";
      echo' <a href="login.php">EMAIL SALAH</a> ';  
  }
?>