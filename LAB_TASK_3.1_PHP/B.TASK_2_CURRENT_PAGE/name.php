<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		echo $name;

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="first_name"  >
			<hr/>
			<input type="submit" name="" value="submit">
		</fieldset>
	</form>
	
</body>
</html>