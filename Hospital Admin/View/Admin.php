<!DOCTYPE html>
<html>
<head>
<style>
.grid-container 
{
  display: grid;
  grid-template-columns: auto auto;
}
.right
{
	float: right;
	margin-right: 50px;
}
.left
{
	float: left;
	margin-left: 50px;
}
img{
	border-radius: 50%;
	width: 100px;
}
</style>
</head>
<body>
<header class="grid-container," style="margin-top: 50px;">
<div class="left">
	<img src="logo.jpg" alt="logo">
</div>
<div class="right">
	<?php echo "Logged in as ".$_SESSION['user_name']."||"; ?>
	<a href="Home.php">Home |</a>
	<a href="Admin Management.php">Admin Management |</a>
	<a href="View Profile.php">View Profile|</a>
	<a href="Edit Profile.php">Edit Profile|</a>
	<a href="Change Profile Picture.php">Change Profile Picture|</a>
	<a href="Change Password.php">Change Password|</a>
	<a href="Logout.php">Logout|</a>
</div>
</header>

<br>
<br>
<hr>
</body>
</html>