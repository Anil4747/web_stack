<?php
session_start();
$username=$_POST['username'];
//$username=$_SESSION['username'];

$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'webster_database');
$q="INSERT INTO users (username,password) VALUES ('$username','$password')";
mysqli_query($con,$q);
$rating=0;
$q="INSERT INTO rating (username,rating) VALUES ('$username','$rating')";
mysqli_query($con,$q);

header('location:http://localhost:8080/llogin/register.php');

mysqli_close($con);
?>