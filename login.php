<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="favico.ico">
	<title>Admin login</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>

	<form action="adminpanel.php" id="form">
		<fieldset>
			<legend>ADMIN LOGIN</legend>

			<label for="password">
				<input type="password" name="password" id="password" required>
			</label>

			<input type="submit" value="LOGIN" id="sub-btn">

		</fieldset>
	</form>

	<script src="login.js"></script>
</body>

</html>
