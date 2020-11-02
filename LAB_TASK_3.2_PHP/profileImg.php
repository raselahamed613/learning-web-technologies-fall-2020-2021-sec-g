<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Id</title>
</head>
<body>
    <fieldset>
        <legend>Profile Picture</legend>
        <form method="POST" action="profileImg.php">
            User ID : <input type="number" name='profileImg'> 
            <br><br>
            Picture <input type="file" name="file">
            <hr>
            <input type="submit" name="submit">
            
        </form>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $profileImg = $_POST['profileImg'];
        $file = $_POST['file'];
        if(!empty($profileImg) && !empty($file))
        {
            echo 'done';
        }
        else
            echo "please re-check your user Id & picture";
    }

?>