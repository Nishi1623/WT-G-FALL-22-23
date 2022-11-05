<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
	<style type="text/css">
      .tct{
		  color: slateblue;
	  }
	
	</style>
</head>

<body>


<?php

	$nameErr = $emailErr= $unameErr= $passErr= $genderErr= $dateErr="";
	$name= $email= $uname= $pass= $gender= $date="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  if (empty($_POST["name"])) 
	  {
	    $nameErr = "Name is required";
	  } 
	  else 
	  {
	    $name = test_input($_POST["name"]);
	   
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$name)) 
	    {
	      $nameErr = "Only numbers letters, numbers and white space allowed";
	    }
	  }

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
    }
	  }

	  if (empty($_POST["uname"])) 
	  {
	    $unameErr = "user name is required";
	  } 
	  else 
	  {
	    $uname = test_input($_POST["uname"]);
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$uname)) 
	    {
	      $unameErr = "Only numbers letters, numbers and white space allowed";
	    }
	  }

	  if (empty($_POST["password"])) 
  {
    $passErr = "Password is required";
  } 
  else 
  {
    $pass = test_input($_POST["password"]);
    if (strlen($pass) <= 8)
    {
      $passErr = "Must be atleast 8 characters";
      $pass="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$pass)) 
    {
      $passErr = "Password must contain at least one of the special character (@, #, $,%)";
      $pass ="";
    }
  }

  if (empty($_POST["gender"])) 
	  {
	    $genderErr = "Select your gender";
	  } 
	  else {
	    $gender = test_input($_POST["gender"]);
	  }
	  
  if (empty($_POST["date"])) 
	  {
	    $dateErr = "Select your date of birth";
	  } 
	  else {
	    $date = test_input($_POST["date"]);
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
    
    <div class="container" style="width:500px;"> 

	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 <fieldset>
		 <legend style="font-size:19px" ><span class="tct">Registration:</span></legend>
	 	
	 	Name: <input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span><br><br>

	 	Email: <input type="text" name="email">
	 	<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span><br><br>

	 	User Name: <input type="text" name="uname">
	 	<span class="err">*
	 		<?php echo $unameErr;?>
	 	</span><br><br>
        
        Password: <input type="text" name="password">
	 	<span class="err">*
	 		<?php echo $passErr;?>
	 	</span><br><br>

	 	Confirm Password: <input type="text" name=" Confirm password">
	 	<br> <br>

	 	 Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Khulna">Other

		<span class="err">*
	 		<?php echo $genderErr;?>
	 	</span>
		<br><br>
	 	
	    Date of Birth: <input type="date" name="date">
		<span class="err">*
	 		<?php echo $dateErr;?>
        </span>
		<br><br>
		
        <input type="submit" name="submit" value="Submit" class="btn btn-info"/> 
        <input type="submit" name="submit" value="Reset" class="btn btn-info"/><br><br>
        </fieldset>
	    </form>

	 
</body>
</html>