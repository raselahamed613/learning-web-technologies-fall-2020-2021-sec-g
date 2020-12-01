<?php
	include('header.php');
	require_once('../db/db.php');

	$conn = getConnection();
	$sql = 'select * from users';
	$result = mysqli_query($conn, $sql);
?>

<center>
<form method="POST" action="../php/upnotice.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h2><b>Upload Notice</h2></legend>
					
					<textarea id="" name="notice" rows="10" cols="30" required></textarea>
				    <br><br>
					<input type="submit" name="submit" value="Upload">
					
					<br>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>