<!DOCTYPE html>
<html lang="en">
<head>
<title>google signin</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="google-signin-client_id" content="149168237401-81r32bjk0cspgbi0la6423v9rkd3cm7i.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer>
</script>
<script
src="https://ajax.googleleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
<style>
.g-signin2{
	margin-left:500px;
	margin-top:2px;
}
.data{
	display:none;
}
</style>
</head>
<body>
<div class="g-signin2" data-onsuccess="onsignin"></div>
<div class="data">
<p>profile details</p>
<img id="pic" class="img-circle" width="100" height="100"/>
<p>Email address</p>
<p id="email" class="alert alert-danger"></p>
<button onclick="signout()" class="btn-btn-danger">signout</button>
</div>
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
    width: 60%;
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
    width: 40%;
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
STACK OVERFLOW<br>
WEBSTER
</header>

<section>
 <nav>
  </nav>
  
  <article>
    <div>
<br>

<h2>LOGIN WINDOW</h2>
</div>
<div>
<table>
<form action="validation.php" method="post">
<tr>
<td>username<input type="text" name="username"/></td>
</tr>
<tr>

<td>password<input type="password" name="password"/></td>
</tr>
<tr>


<td><input type="submit" value="login"/></td>
</form>
<form action="register.php" method="post">
<td><input type="submit" value="register"></td>
</form>
</tr>

</table>
</center>
</div>
  </article>
</section>

<footer>
  <p>@blackstreets_21</p>
</footer>

</body>
</html>
