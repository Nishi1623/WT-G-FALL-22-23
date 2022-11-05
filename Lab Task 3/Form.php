<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	
</head>
<body>
<div class="container" style="width:500px;"> 
<fieldset style="width: 400px">
<legend>Profile Picture</legend>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select an profile image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
		<input type="submit" value="Upload your image" name="submit" class= "btn btn-info">
	</form>
</fieldset>
</body>
</html>