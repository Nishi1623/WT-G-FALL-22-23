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

	$nameErr = $Err= $emailErr= $dateErr= $genderErr= $degreeErr= $bloodgroupErr="";
	$name = $email= $date= $gender= $degree= $bloodgroup="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	  if (empty($_POST["name"])) 
	  {
	    $nameErr = "Name is required";
	  } 
	  else {
	    $name = test_input($_POST["name"]);
	   
	    if (!preg_match("/^[1-9a-zA-Z-' ]*$/",$name)) 
	    {
	      $nameErr = "Only numbers letters and white space allowed";
	    }
	  }
	  
	  if (empty($_POST["email"])) 
	  {
	    $emailErr = "Email is required";
	  } 
	  else {
	    $email = test_input($_POST["email"]);
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
    }
	  }

	  if (empty($_POST["date"])) 
	  {
	    $dateErr = "Select your date of birth";
	  } 
	  else {
	    $date = test_input($_POST["date"]);
	  }

	  if (empty($_POST["gender"])) 
	  {
	    $genderErr = "Select your gender";
	  } 
	  else {
	    $gender = test_input($_POST["gender"]);
	  }
	  
	  if (empty($_POST["degree"])) 
	  {
	    $degreeErr = "You must select two";
	  } 
	  else {
	    $degree = test_input($_POST["degree"]);
	  }


      if (empty($_POST["blood Group"])) 
      {
	    $bloodgroupErr = "You must select your blood group";
	  } 
	  else {
	    $bloodgroup = test_input($_POST["blood Group"]);
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


	 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	 <fieldset>
		 <legend style="font-size:19px" ><span class="tct">*Profile information:</span></legend>
	 <span class="tct" >
             <h2>Enter your Information</h2>
	 </span>
	 	
	 	 Name: <input type="text" name="name">
	 	<span class="err">*
	 		<?php echo $nameErr;?>
	 	</span><br><br>

	 	Email: <input type="text" name="email">
	 	<span class="err">*
	 		<?php echo $emailErr;?>
	 	</span><br><br>

	 	Date of Birth: <input type="date" name="date">
		<span class="err">*
	 		<?php echo $dateErr;?>
        </span>
		<br><br>

		 Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Khulna">Other

		<span class="err">*
	 		<?php echo $genderErr;?>
	 	</span>
		<br><br>

		Degree:
		<input type="checkbox" name="degree" value="SSc">SSC
		<input type="checkbox" name="degree" value="HSc">HSC
		<input type="checkbox" name="degree" value="BSc">BSc
		<input type="checkbox" name="degree" value="MSc">MSc

		<span class="err">*
	 		<?php echo $degreeErr;?>
	 	</span>
		<br><br>

		Blood Group:
		<select name="blood Group" placeholder= "select a blood group"/>
		<option value="">select a blood group</option>
                                <option value="">A+</option>
                                <option value="">B+</option>
                                <option value="">O+</option>
                                <option value="">AB+</option>
                                <option value="">AB-</option>
                                <option value="">B-</option>
                                <option value="">A-</option>
                                <option value="">O-</option>
                            </select>

		<span class="err">*
	 		<?php echo $bloodgroupErr;?>
	 	</span>
		<br><br>

		


	 	<input type="submit" value="Submit">
     </fieldset>
	 </form>

	 <?php 

	 	echo "<h1>Your input</h1>";
	 	echo $name . "<br>";
	 	echo $email . "<br>";
		echo $date . "<br>";
		echo $gender . "<br>";
        echo $degree . "<br>";
		echo $bloodgroup . "<br>";

	  ?>
</body>
</html>