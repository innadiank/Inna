<?php

session_start();
include('Database.php');
$username = $_SESSION['username'];

mysqli_query($koneksi, "update login set statusLogin='logout' where username='$username'");

session_destroy();
setcookie('username', '', 0, '/');

header("location:../front-end/index.html", true);
