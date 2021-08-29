<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="favico.ico">
	<title>Admin-Bag Upload</title>
	<link rel="stylesheet" href="css/load.css">
</head>

<body>
	<header>
		<a href="adminpanel.php">Back To Dashboard </a>
	</header>
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Add New Bag Product</legend>
			<!--name of the file-->
			<label>Name of Product :</label>
			<input type="text" name="name" class="field" required><br>
			<!--select image-->
			<label>Choose Image To upload :</label>
			<input type="file" name="file" class="upload-btn" required><br>
			<!--/select image-->
			<!--price-->
			<label for="price">Price of Product:</label>
			<input type="text" name="price" class="field"><br>
			<!--/price-->
			<!--Submit button-->
			<input type="submit" value="submit" class="submit-btn" name="submit">
			<!--/submit button-->
		</fieldset>
	</form>

</body>

</html>


<!--PHP SCRIPT TO show IMAGES from DATABASE-->

<?php
include 'dbconn.php';
include 'bagscript.php';
?>
<?php mysqli_close($conn); ?>
