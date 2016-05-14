<? 
session_start(); 
?>
<html>
<style>
p {
	font-family:Helvetica;
   font-size:22px;
   font-style:normal;
   font-weight:normal;
}
</style>
<?php
include ('header.php');

if (empty($_POST['nme'])) {
 header("location: login.php");
}



 $id = $_POST['inno'];
 $anto = $_POST['nme'];
 $time2 = $_POST['time'];
 $answer = $_POST['answer'];
include ("connect.php");

$sql = "INSERT INTO `unapprovedanswers`(`answer`, `anto`, `time2`, `id`) VALUES ('$answer', '$anto', '$time2', '$id')";
$query = mysqli_query($db_con,$sql);
header("location: index.php");

	
?>
</html>