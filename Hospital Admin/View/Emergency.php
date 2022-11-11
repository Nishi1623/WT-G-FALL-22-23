<!DOCTYPE html>
<html>
<head>
<title>Emergency</title>
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
  text-align: center;
  color: purple;
  font-size: 60px;
}
h4{
 text-align: center; 
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
<h1>Emergency</h1> <br>
<h4>Address : 58/G-2, Dhanmondi, Dhaka-1205.</h4>
<h4>Email : <a href="mailto:onlinemergency@btb.com">emergencymo@btb.com</a></h4> 
<h4>Hotline-1 : <a href=" +8801345678989">+88 01345678989</a> <h4>
<h4>Hotline-2 : <a href=" +8801345678989">+88 01436587898</a> </h4>  

<?php require '../Controller/footer.php';?>
</body>
</html>