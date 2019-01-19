<?php
session_start();
//$username=$_POST['username'];
$username=$_SESSION['username'];
$question=$_POST['question'];
//$question=$_POST['answer'];
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'webster_database');
$q="INSERT INTO question(username1,question) VALUES ('$username','$question')";
mysqli_query($conn,$q);
echo'<script type="text/javascript">alert("question Submitted")</script>';
header('location:http://localhost:8080/llogin/home.php');
mysqli_close($conn);
?>