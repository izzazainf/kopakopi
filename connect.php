<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "kopakopi";

// koneksi database
$conn = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if ($conn->connect_error) {
    die('Koneksi Database Gagal : '.$conn->connect_error);
}
?>