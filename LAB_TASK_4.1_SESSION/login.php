<?php
include_once('header.html');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-in page</title>
</head>
<body>
    <form action="">
       <hr>
       <br> 
       <fieldset>
            <legend><b>LOGIN</legend>
            <table align="center">
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" id=""></td>
                </tr>
                
                <tr>
                    
                    <td colspan="2"> <input type="checkbox" name="logche" id=""> Remember Me</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value='Submit'>
                        <a href="">Forget Password</a>

                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php

    include_once('footer.html');
?>