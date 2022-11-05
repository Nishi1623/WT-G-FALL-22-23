<!DOCTYPE html>
<html >
  <head>
    <title>Change Password Page</title>

  </head>
  <body>
  
  <?php
   $changepass=$newpass=$retypenewpass="";
   $changepassErr=$newpassErr=$retypenewpassErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["changepass"]))
	 {
       $changepassErr = "Current Password required";
     }
     else
		 {
      $changepass = test_input($_POST["changepass"]);

        if (strcmp($changepass,"1234"))
	    {
          $changepassErr = "Incorrent Password";
        }      
	   }
        if (empty($_POST["newpass"])) 
		{
          $newpassErr = "New Password required";
        }
        else 
		{
         $newpass = test_input($_POST["newpass"]);

          if (!strcmp($newpass,"5678"))
       	  {
             $newpassErr = "Current and New Password have to be different";
           }
         }
           if (empty($_POST["retypenewpass"]))
		   {
             $retypenewpassErr = "Retype new Password required";
           }
           else 
		   {
            $retypenewpass = test_input($_POST["retypenewpass"]);

             if (strcmp($newpass,$retypenewpass)) 
			 {
                $retypenewpassErr = "Retype password and New Password have to be same";
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
     

    <div class="container" style="width:500px;"> 
	 
    <fieldset style="width: 500px" align="left">
      <legend><b>CHANGE PASSWORD</b></legend>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <label>Current Password:</label> 
		  <input type="password" name="changepass" value="<?php echo $changepass;?>">        
          <br>
          <label style="color:green">New Password:</label>
          <input type="password" name="newpass" value="<?php echo $newpass;?>">         
          <br>
          <label style="color:Red">Retype New Password:</label>
          <input type="passsword" name="retypenewpass" value="<?php echo $retypenewpass;?>">        
          <br><br>
          <input type="submit" name="submit" value="Confirm" class="btn btn-info"/> <br>
          <br>
      </form>
    </fieldset>
  </body>
</html>