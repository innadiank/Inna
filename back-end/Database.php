<?php
$Database = mysqli_connect("localhost", "root", "", "database"); 
if (mysqli_connect_errno()) 
{
    echo "Failed!" . mysqli_connect_error();
}
