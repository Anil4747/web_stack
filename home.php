<?php
session_start();
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
    font.-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
div
{
	
    background-color: #666;
    text-align: centre;
    font-size: 25px;
	padding-top: 0px; 
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
	overflow: auto;
	/* only for demonstration, should be removed */
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
<center><h1>STACK OVERFLOW<h1>
<h3>WEBSTER<h3><hr></center>
<table>
<tr>
<form action="leaderboard.php" method="post">
<td><input type="submit" value="LEADERBOARD"></td>
</form>
<form action="profile.php" method="post">
<td><input type="submit" value="PROFILE"></td>
</form>
<td></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

<form action="logout.php" method="post">
<td><input type="submit" value="LOGOUT"></td>
</form>
</tr>
</table>

<div>
<h4>HELLO, <?php echo $_SESSION['username'];?></h4>

<form action="question.php" method="post">
DO YOU WANT ASK A QUESTION
<input type="text" name="question" size="100px"/>
<input type="submit" value="SUBMIT"/>
<br>
<br>

</div>

<section>
  <nav>
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
  </nav>
  
  <article>
<?php
$user=$_SESSION['username'];
$q="select * from question_answer";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>0)
{
while($row = $result->fetch_assoc()){
echo  "Question asked by ".$row["username1"] . "  :  " . $row["question"]."<br>" ;
echo  "Answer Given by ".$row["username2"] . "  :  " . $row["answer"] ;
$connl=mysqli_connect('localhost','root');
mysqli_select_db($connl,'webster_database');
$qp="select * from rating where username='$user'";
$resultu=mysqli_query($connl,$qp);
$numw=mysqli_num_rows($resultu);
if($numw>0)
{
while($rowp = $resultu->fetch_assoc()){
$rating = $rowp["rating"];
}}
if($rating>5)
{?>
	<html>
	<head>
	</head>
	<body>
<form action="upvote.php" method="post">
<input type='submit' value='upvote'>
</body>
</html>
<?php
}
else
{ 
?>
<html>
<head>
</head>
<body>
<button type="button" disabled>upvote</button>
</body>
</html>
<?PHP
}

echo "<br><br>";

}
}

?>
  </article>
</section>

<footer>
blackstreets_21</footer>


</body>
</html>
