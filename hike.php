<?php
session_start();
$a = $_POST['name'];
$_SESSION['name'] = $a;
header("location: index.php");

?>
