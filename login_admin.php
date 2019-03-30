<?php

       include('server1.php');        
?> 

<html>
<head>
<title>Login</title>
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
<style>
body{
	margin: 0;
	padding: 0;
	font-family: Bodoni MT;
	background: #34495e;
}
.box{
	padding: 40px;
	background: #34495e;
	text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
	width: 280px;
	border-color: #2ecc71;
}
.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
.box input[type = "submit"]:hover{
	background: #2ecc71;
}
.footer {
   font-family:Bodoni MT;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #D7DBDD;
   color: black;
   text-align: center;
}
</style>
</head>
<body>
<?php include ('errors.php'); ?>

	   <form class="box" action="server1.php" method="post">
		<h1>ADMIN</h1>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password1" required>
            <input name="login_user"  class="btn btn-block btn-info" type="submit" value="Login"/><br></a>
            <a href="start.php" style="font-size:40px">BACK</a>
        </form>
		     



<div class="footer">
  <p>&copyAll Right Reserved 2019
	     <br>Republic of the Phlippines
		 <br>Oroquieta City, Misamis Occidental
  	 </p>


</div> 
</body>
</html>