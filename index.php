<?php

session_start();
if (empty($_SESSION['name'])) {
 header("location: login.php");
}
?>

<style>

	b {
font-family:Helvetica;
   font-size:30px;
   font-style:normal;
   font-weight:normal;


	}
	p {
		font-family:Helvetica;
   font-size:22px;
   font-style:normal;
   font-weight:normal;
	}
	h1 {
		font-family:Helvetica;
   font-size:22px;
   font-style:normal;
   font-weight:normal;
	}
	h3 {
		font-family:Helvetica;
   font-size:15px;
   font-style:normal;
   font-weight:normal;
	}
	h2 {
		color: gray;
		font-family:Helvetica;
   font-size:20px;
   font-style:normal;
   font-weight:normal;
	}
</style>


<?php
include ('header.php');
echo "<p>we have fetched latest questions for you ", $_SESSION['name'], '....';

/*if (empty($_SESSION['name'])) {
	header("location: login.php")
}*/
include ("connect.php");



$sql = "SELECT * FROM `unapprovedquestions` ORDER BY time1";
$query = mysqli_query($db_con,$sql);
$id = 0;
while ($row = mysqli_fetch_assoc($query)) {

	
	$a = $row['question'];
    echo '<br><b></br>', $a,'</br></b>';
	$timestamp = date('Y-m-d');
	$i = $row['id'];
	$ai = $row['author'];
	echo "<h3>on:", $row['time1'];
    echo " questioned by ", $ai;
    echo "      tags :", $row['tags'], '</h3>';
    echo "<form action='report.php' method='POST'><input type='hidden' name='report' value='$i'><input type='submit' value='report this question'></form>";
    

 

include ("connect.php");
$sq = "SELECT * FROM unapprovedanswers WHERE id='$i'";
$qu = mysqli_query($db_con,$sq);
$k = 0;
echo "<p>best answers:</p>";
while ($ro = mysqli_fetch_assoc($qu)) {
	
	echo "<p>", $ro['answer'], '</p><h3>answered by ', $ro['anto'], ' at ', $ro['time2'], '</h3><hr/>';

	

$k++;
}
$ses = $_SESSION['name'];
echo "<h2>help ", $ai, " by answering this question</h2>";

echo "<hr/>";


   
echo "<form action='unappans.php' method='POST'><input type='hidden' name='nme' value='$ses'><input type='hidden' name='inno' value='$i'><input type='hidden' name='time' value='$timestamp'><input type='hidden' name='time' value='$timestamp'><textarea name='answer' rows='8' cols='150' placeholder='write answer for this question'></textarea><br/><input type='submit' value='submit answer for this question'></form><br/></h1><hr/>";

    $id++;




}


?>
<html>
<body background="img1.png">
</body>
</html>