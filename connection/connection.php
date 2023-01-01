<?php

$server   = "localhost";
$user    = "root";
$password      = "";
$bank      = "songs";

$conecta    = mysqli_connect($server,$user,$password,$bank);

if ( mysqli_connect_errno()) {
    die("No connection: " . mysqli_connect_errno() );
}


