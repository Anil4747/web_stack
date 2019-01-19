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
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
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
  <center><h1>STACK OVERFLOW<h1>
<h3>WEBSTER<h3>
</center>
</header>

<section>
  <nav>
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
}}?>
</nav>
  
  <article>
    
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
