<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'webster_database');
$q="select * from users where username='$username' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num)
{
$_SESSION['username']=$username;
header('location:http://localhost:8080/llogin/home.php');
}
else
{
	
echo'<script type="text/javascript">alert("wrong credential")</script>';
header('location:http://localhost:8080/llogin/login.php?data="aaaa"');

}



?>