<?php
session_start();
if (empty($_SESSION['name'])) {
 header("location: login.php");
}

 if (empty($_POST['question']) && empty($_POST['tags']) && empty($_POST['name'])) {
 	header("location: questionform.php");
 	break;

 }
 $i = 0;
 while ($i == 0) {

 	$i++;
 
  $question = $_POST['question'];
 $tags = $_POST['tags'];
 $author = $_SESSION['name'];
  $key = $_SESSION['kd'];
 $time = $_SESSION['time'];

 include ("connect.php");
 $sql = "INSERT INTO `unapprovedquestions`(`question`, `tags`, `author`, `time1`, `id`) VALUES ('$question', '$tags', '$author', '$time', '$key')";
 $query = mysqli_query($db_con,$sql);
 if ($query >= 1) {
 	header("location: index.php");
 	
 }
}

?>