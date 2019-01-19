<?php
session_start();
$username=$_POST['username'];
$question=$_POST['question'];
$answer=$_POST['answer'];
//$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kunal');
$q="select * from putquestion ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
while($row = $result->fetch_assoc()){

echo  $row["username"] . "<br>" . $row["question"] ."</br>" .$row["answer"]. "<br><br>";
</}

}
else
{
echo "0 result";
}
?>