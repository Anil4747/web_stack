<?php
session_start();
$username1=$_GET['User'];
$username2=$_SESSION['username'];
$question=$_GET['Question'];
$answer=$_POST['answer'];
echo "$username2";
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'webster_database');
$q="INSERT INTO question_answer (username1,username2,question,answer) VALUES ('$username1','$username2','$question','$answer')";
if(mysqli_query($conn,$q))
$q="select * from rating where username='$username2'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
while($row = $result->fetch_assoc()){
$rating = $row["rating"];
$rating = $rating+1;
}}
$qu="delete from rating where username='$username2'";
$q="INSERT INTO rating (username,rating) VALUES ('$username2','$rating')";
mysqli_query($conn,$qu);
mysqli_query($conn,$q);

//$qu="delete from rating where username='$username2'";

header('location:http://localhost:8080/llogin/home.php');
mysqli_close($conn);
?>