<!DOCTYPE html>
<html>
<style>
	body{
  background-color: lightblue;
}
img{
	display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%; 
}
</style>
<body>
 <?php 

session_start();

if (isset($_SESSION['user_name']))
	{ require 'Admin.php';}
else
  header("location:Login.php");
 ?>
<div style="margin-left: 40%; margin-top: 5%;">
<fieldset style="width: 100px">
<legend style="color:purple; font-size: 20px;">PROFILE PICTURE</legend>
<form action="Picture_Upload.php" method="post" enctype="multipart/form-data">
  <img src="pic.png" alt="Profile Picture">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div> 
<?php require '../Controller/footer.php';?>
</body>
</html>