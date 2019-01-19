<?php
session_start();
$user=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 50%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
	overflow: auto;
	
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 50%;
    background-color: #f1f1f1;
    height: 300px;
		overflow: auto;/* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>



<header>
  <center>STACK OVERFLOW<br>
WEBSTER
</center>
</header>

<section>
 <nav>
  <center><h3>Question Asked by You</h3></center>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'webster_database');
$q="select * from question_answer where username1='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
while($row = $result->fetch_assoc()){
echo  " question: ". $row["question"]."<br>" ;
echo "Answer by ".$row["username2"]. "  : " .$row["answer"]. "<br>";}} 

echo "<br><br>";
$qu="select * from question where username1='$user'";
$result2=mysqli_query($con,$qu);
$num2=mysqli_num_rows($result2);
if($num2>0)
{
while($row = $result2->fetch_assoc()){
echo   $row['question']."<br>" ;
}}
?>
</nav>
  
  <article>
  <center><h3>Answer Given by You</h3></center>
  <?PhP
    $q="select * from question_answer where username2='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
while($row = $result->fetch_assoc()){
echo   $row["username1"]."   Asked   ".$row["question"]."<br>" ;
echo   $row["answer"]."<br>" ;

}}
?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>