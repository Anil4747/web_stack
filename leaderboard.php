<!DOCKTYPE html>
<center><h1>STACK OVERFLOW<h1>
<h3>WEBSTER<h3><hr>
<html>
<head>
</head>
<h4>LEADERBOARD</h4>
<?php
session_start();
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'webster_database');
$q="select * from rating order by rating DESC";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
$i=1;
if($num>0)
{
while($row = $result->fetch_assoc()){
echo "$i"."   ". $row["username"] . "   :   " . $row["rating"]."<br>" ;
$i++;

}}
mysqli_close($conn);
?>