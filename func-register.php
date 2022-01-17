<?php
require_once "connect.php";
var_dump($_POST);
if (isset($_POST["daftar"])){
    $nama= ($_POST["nama"]);
    $email= ($_POST["email"]);
    $password=($_POST["password"]);
    $password2=($_POST["password2"]);

    if($password!==$password2)
    {
        header("Location:register.php?alert=password-beda");
    }
    else
    {
        $query_email = mysqli_query($conn, "SELECT cust_email FROM customer_info WHERE cust_email='$email'");    
        $row_email   = mysqli_num_rows($query_email);
        var_dump($row_email);
        if($row_email > 0){
            header("Location:register.php?alert=email-ada");
        }
        else{
            // $password=password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO customer_info VALUES('', '$email', '$nama', '$password', '', '', '')";	    
            mysqli_query($conn, $query);
            header("Location:register.php?alert=login-success");
        }
    }
    
}
//header("Location:register.php?alert=GABISA-MASUK-IF");
?>