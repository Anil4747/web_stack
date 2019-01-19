<center><h1>STACK OVERFLOW<h1>
<h3>WEBSTER<h3><hr></center>
<?php
session_start();
?>
<!DOCKTYPE html>
<html>
<head>
</head>
<body>
	<h2>HELLO, <?php echo $_SESSION['username'];?></h2>
	<p align ="right"><a href="logout.php">Logout</a></p>
	<center>
<table>
<tr>
<form action="leaderboard.php" method="post">
<td><input type="submit" value="LEADERBOARD"></td>
</form>
<form action="profile.php" method="post">
<td><input type="submit" value="PROFILE"></td>
</form>
</tr>
</table>
</center>


<table>
<form action="question.php" method="post">
<tr>
<td>DO YOU WANT ASK A QUESTION</td>
<td><input type="text" name="question"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SUBMIT"/></td>
</tr>
</form>
</table>

<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'webster_database');
$q="select * from question";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num>0)
	
{
while($row = $result->fetch_assoc()){
echo  $row["username1"] . "   :   " . $row["question"]."<br>" ;
echo "<form action='answer.php?User=".$row['username1']."&Question=".$row['question']."' method='post'>";
echo "<input type='text' name='answer'/>";
echo "<input type='submit' value='submit_answer'>";

echo "<br>";
echo "</form>";
}
}
?>




	
</body>
</html> 