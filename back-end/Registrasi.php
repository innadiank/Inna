<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'Database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$passwordcek = $_POST['passwordcek'];


$x = mysqli_query($Database, "select * from login where username='$username'");
$jumlah = mysqli_num_rows($x);
if ($jumlah == 0) {
    if ($password == $passwordcek) {
        $x = mysqli_query($Database, "insert into login values('$username','$password','','')");
        header("location:../front-end/index.html");
    } else {
        header("location:../front-end/register.html");
    }
} else {
    header("location:../front-end/register.html");
}
