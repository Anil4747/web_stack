<?php
session_start();
$user=$_SESSION['username'];
?>
<!DOCKTYPE html>
<center><h1>STACK OVERFLOW<h1>
<h3>WEBSTER<h3><hr>
</center>

<html>
<head>
</head>
<h2><?php echo $_SESSION['username']." ";?>Profile</h2>

<body>

<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'webster_database');
$q="select * from question where username1='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num>0)
{
	echo "Question by you<br><br>";
while($row = $result->fetch_assoc()){
echo   $row["question"]."<br>" ;
}}
$q="select * from question_answer where username2='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num>0)
{
	echo "answer by you<br><br>";
while($row = $result->fetch_assoc()){
echo   $row["username1"]."   Asked   ".$row["question"]."<br>" ;
echo   $row["answer"]."<br>" ;

}}
?>
</body>
</html>