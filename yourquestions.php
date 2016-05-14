<?php
session_start(); 
$author = $_SESSION['name']; //better :P

include ("header.php");
include ("connect.php");
/*if (empty($_SESSION['name'])) {
 header("location: login.php");
}
else {*/


$sql = "SELECT * FROM unapprovedquestions WHERE author='$author'";
$que = mysqli_query($db_con, $sql);

 
$id = 0;
 
while ($row = mysqli_fetch_assoc($que)) {
 
  
    $a = $row['question'];
    echo "posted on <br>", $row['time1'], '</br>';
    echo "tags:<br>", $row['tags'], '</br>';
    echo $a,'</br>';

    echo "status: approved </br><hr/>";


    $id++;
 
 
}
 
 
 //}
 
 
 
?>