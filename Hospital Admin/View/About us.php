<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<style>
body 
{
  background-color: lightblue;
  background-image: url("../View/Uploads/Home.jpg");
  background-size: 2000px;
  background-repeat: no-repeat;
  background-position: right-center;
}
h1{
  text-align: right;
  color: purple;
}
h3{
 text-align: right; 
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
<h1>About Us</h1> <br>
<h3>We are online based treatment center developed in 2022.  </h3>
<h3>Our services include reserving appointments, online consultaion with doctors, emergency hotline, free health tips etc. </h3> 
<h3>The ensurance of trust comes from the efforts of our team.</h3>

<?php require '../Controller/footer.php';?>
</body>
</html>