<?php
session_start();
require_once "connect.php";
if (isset($_POST["edit"]))
{
    $cust_email=$_SESSION["cust_email"];
    // ambil data hasil submit dari form
    $nama           = ($_POST["nama"]);
    //$email          = ($_POST["email"]);
    $gender       = ($_POST["gender"]);
    $birthday      = ($_POST["birthday"]);
    $password      = ($_POST["password"]);
    $update="UPDATE customer_info SET
                cust_nama = '$nama',
                cust_password = '$password',
                cust_gender='$gender',
                cust_birthday='$birthday'
                WHERE
                cust_email = '$cust_email' ";
    $query=mysqli_query($conn, $update);
    echo"data sudah kesimpen bos";
    header("Location:profile.php");
}




?>