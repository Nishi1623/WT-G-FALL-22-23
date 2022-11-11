<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
</head>
<body>
<style>
img{
  border-radius: 50%;
  width: 100px;
}
.error {color: #FF0000;}
body{
  background-color: lightblue;
}
</style>

<div class="left">
<div>
  <a href="Home.php"><img src="logo.jpg" alt="logo"></a>
</div>  
</div>
<div style="margin-left: 35%; margin-top: 10%;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset style="width: 400px">
  <legend>Dashboard</legend>
  <a href="Home.php">Home</a><br>
  <a href="papplicant.php" target="_blank">Pending Applicants</a> <br>
  <a href="reports.php" target="_blank">Reports</a> <br>
  <a href="doctor's list.php" target="_blank">Doctor's list</a> <br>
  <a href="employee list.php" target="_blank">List of employees</a> <br>
  <a href="complainBox.php" target="_blank">Complain Box </a> <br>
  <a href="Logout.php">Logout</a>
  
  <br><br>


 </fieldset>
</form> 
</div>  


<?php require '../Controller/footer.php';
?>
</body>
</html>