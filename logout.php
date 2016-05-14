<?php
session_start();
session_unset();

if (empty($_SESSION['name'])) {
	

header("location: login.php");
}

?>
