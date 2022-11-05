<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<style>
	h1 
	   {
         color: black;
         font-family: Times New Roman;
         margin: 20% 0;
         text-align: center;
}
body 
{
  background-color: lightblue;
}
</style>
</head>
<body>

<?php 

session_start();

if (isset($_SESSION['user_name']))
	{ 
		require 'Logged In Dashboard.php';
	}
else
{
	require 'top.php';
}

 ?>
<h1> Welcome to my Company!!</h1>  	
<?php require 'footer.php';?>
</body>
</html>