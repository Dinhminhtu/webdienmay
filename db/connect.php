<?php
$con = mysqli_connect("localhost:4306","root","","web_giakhang");

if (mysqli_connect_error())
{
    echo "Failed to connect to MYSQL:" .mysqli_connect_error();
}
?>