<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
</head>
<body>

<style>
.error {color: #FF0000;}
body{
  background-color: lightblue;
}
</style>

<?php 

session_start();
if (isset($_SESSION['user_name']))
  {
    header("location:Home.php");
  }
else
{
  require 'top.php';
}

$retrive_email="nishi123@gmail.com";
$emailErr = "";
$email = $msg ="";

if (isset($_POST['email'])) 
{
  if ($_POST['email']==$retrive_email) 
  {
    $msg ="<h1>Password retrived! An Email will be send to you.</h1>";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  }
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
    else if($_POST['email']!=$retrive_email)
    {
      $emailErr ="Invalid Email"; 
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
<div style="margin-left: 30%; margin-top: 15%;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset style="width: 500px">
  <legend style="font-size: 22px; color: purple;">Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="email" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </fieldset>
</form> 
<?php 
echo $msg;?>
</div>

<?php require 'footer.php';?>
</body>
</html>