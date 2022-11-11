<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
	h1
	   {
         color: black;
         font-family: Times New Roman;
         font-size: 50px;
         margin: 6% 0;
         text-align: center;
}
h4{
	text-align: center;
	color: tomato;
	font-size: 22px;
}
body 
{
  background-color: lightblue;
  background-image: url("../View/Uploads/Home.jpg");
  background-size: 2000px;
  background-repeat: no-repeat;
  background-position: right-center;
}
</style>
</head>
<body>

<?php 

session_start();

if (isset($_SESSION['user_name']))
	{ 
		require 'Admin.php';
	}
else
{
	require '../Controller/top.php';
}

 ?>
<h1> Welcome to our Online Service!!</h1>
<h4>We are here to take care of your health. </h4>

<?php require '../Controller/footer.php';?>
</body>
</html>