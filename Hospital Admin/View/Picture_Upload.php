<!DOCTYPE html>
<html>
<head>
    <title>Uploded Profile Picture</title>
</head>
<body>

<?php
$target_dir = "../View/Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($_FILES["fileToUpload"]["size"] == 0)
{
  echo "Please Select File";
}
else
{

if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".<br>";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.<br>";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) 
{
  echo "Sorry, file already exists.<br>";
  $uploadOk = 0;
}


if ($_FILES["fileToUpload"]["size"] > 5000000) 
{
  echo "Sorry, your file is too large.<br>";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) 
{
  echo "Only JPG, JPEG, PNG & GIF files are allowed.<br>";
  $uploadOk = 0;
}


if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.<br>";

} 
else 
{
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
  {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
  } 
  else 
  {
    echo "Sorry, there was an error uploading your file.<br>";
  }
}
}
?>
<fieldset style="width: 400px">
<legend style="font-size: 22px; color: purple;">PROFILE PICTURE</legend>
<br><br>
<img src="Uploads/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture">
</fieldset>

</body>

</html>