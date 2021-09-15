<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("unable to connect");
}