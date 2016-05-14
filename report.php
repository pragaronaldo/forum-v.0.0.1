<?php
session_start();
if(empty($_SESSION['name']))
{
	header("location: login.php");
}

include ("header.php");
include ("connect.php");
$a = $_SESSION['name'];
$id = $_POST['report'];
$sql = "INSERT INTO reports (id,reporter) VALUES ('$id','$a')";
$que = mysqli_query($db_con,$sql);
?>
