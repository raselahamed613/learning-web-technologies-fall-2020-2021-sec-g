<?php
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		echo $email;

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="nameCheck.php">
		<fieldset>
			<legend>Email</legend>
				<input type="email" name="email">
				<hr>
				<input type="submit" name="" value="submit">
		</fieldset>
	</form>
	
</body>
</html>