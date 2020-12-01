<?php
	require('header.php');
	session_start();
	
	$img = "";
	if(isset($_SESSION['img'])){
		$img = $_SESSION['img'];
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>Profile page</h1>

	<img src="../image/<?=$myImage?>" width="100px" height="100px"/>
	<br>

	<form method="post" action="../php/image_check.php" enctype="multipart/form-data">
		<input type="file" name="myImage">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>