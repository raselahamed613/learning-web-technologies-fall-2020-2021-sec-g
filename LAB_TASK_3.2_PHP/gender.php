<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <fieldset>
        <legend>Gender</legend>
        <form method="POST" >
            <input type="radio" name="gender"  value='Male'> Male 
			<input type="radio" name="gender" value='Female' > Female
            <input type="radio" name="gender" value='other' > other
            <br>
            <hr>
            <input type="submit" name="submit" id="" value="submit">
        </form>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        
        if(isset($_POST['gender']))
        {
           $gender =$_POST['gender'];
            echo $gender;
        }
        else
        {
            echo "!! please select your gender";
        }
    }
  
?>