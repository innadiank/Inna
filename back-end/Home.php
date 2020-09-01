<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include 'Database.php';

if (isset($_COOKIE['username'])) {
    $username    = ($_COOKIE['username']);
    $query    = mysqli_query($Database, "select time from login where username='$username'");

    while ($X = mysqli_fetch_array($query)) {
        $temp = "Hai $username, Waktu login anda " . $X['time'];
    }
   
} else {
    $temp = 0;
}
echo json_encode($temp);
