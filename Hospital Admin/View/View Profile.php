<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<style>
.grid-container 
{
  display: grid;
  grid-template-columns: auto auto;
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
  {require 'Admin.php';}
else
{
  header("location:Home.php");
} 
$name = $email = $user_name = $password = $confirm_password = $gender = $dob = '';
$nameErr = $emailErr = $user_nameErr = $passwordErr = $confirm_passwordErr = $genderErr = $dobErr = '';
$message = '';  
$error = '';
$flag=1;

$data = file_get_contents("../Data/Data.json");
$data = json_decode($data, true);
foreach($data as $row) 
{ 
  echo  
  $name=$row["name"];
  $email=$row["email"];
  $gender=$row["gender"];
  $dob=$row["dob"];
}
?> 
<div style="margin-left: 35%; margin-top: 10%;">
<fieldset class="grid-container," style="width: 500px">
<b> <legend style="font-size: 20px; color:purple;">PROFILE </legend> </b>

<div style="float: left">
  <p>Name        :   <?php echo $name ?></p>
  <p>Email        :   <?php echo $email ?></p>
  <p>Gender        :   <?php echo $gender ?></p>
  <p>Date of Birth    :   <?php echo $dob ?></p>
</div> 

<div style="float: right">
  <img style=" width: 85%" src="pic.png" alt="Profile Picture"> 
  <div style="text-align: center"> <a href="Change Profile Picture.php" >Change</a></div>


</div>

<br><br><br><br><br><br><br><hr>
<p><a href="Edit Profile.php">Edit Profile</a></p>
</fieldset> 


<?php require '../Controller/footer.php';?>
</body>  
</html> 