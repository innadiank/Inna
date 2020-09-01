<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'Database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$x = mysqli_query($Database, "select * from login where username='$username' and password='$password'");

$jumlah = mysqli_num_rows($x);
// var_dump($x);

if ($jumlah > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    setcookie('username', $username, time() + (60 * 60 * 24 * 15), '/');
    $waktu = date("h:i:sa");
    mysqli_query($Database, "update login set time='$waktu', status='login' where username='$username'");
    header("location:../front-end/home.html");
} else {
    header("location:../front-end/index.html?message=failed");
}
