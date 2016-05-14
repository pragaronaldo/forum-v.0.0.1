<?php
session_start();
 $_SESSION['name'];
$a = $_SESSION['name'];
include ("header.php");
echo "<p>welcome $a, ask questions after reading <a href='guidelines.php'>guidelines</a></p>";
?>
<html>

<body background="img1.png">
<style>
	p {
		font-family:Helvetica;
   font-size:22px;
   font-style:normal;
   font-weight:normal;

	}
</style>
<form action="question.php" method="POST">
<p>ask your question here:</p>
<textarea name="question" rows="8" cols="150" placeholder="hi type your question here!!"></textarea>
<br/>
<p>tags* (mandatory field)</p>:
<input type="text" name="tags">
<br/>
<br/>
</br>
<input type="submit" value="submit this question">


<?php


$timestamp = date('Y-m-d G:i:s');
$_SESSION['time'] = $timestamp;

$author = $_SESSION['name'];



$string = str_shuffle("abcdefghijklmnopqrstuvwzyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ");
$ky = substr($string,0,10);


include ("connect.php");

$sql = "SELECT * FROM broom WHERE broom == $ky";
$query = mysqli_query($db_con,$sql);
if ($query == 1) {
	header("location: questionform.php");
}

else
{
$sql = "INSERT INTO `keys`(`broom`) VALUES ('$ky')";
$query = mysqli_query($db_con,$sql);

$_SESSION['kd'] = $ky;
}
?>




 </h1>
 </form>
 </body>


</html>