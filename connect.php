<?php
$servername = "mysql.hostinger.in";   //your host name
$username = "u371524279_nav";
$password = "naveen17";
$dbname = "u371524279_kill";

//you need to create database  in your mysqli server before entering the name

// Create connection

$db_con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$db_con) {

die("Connection failed: " . mysqli_connect_error());

}

?>