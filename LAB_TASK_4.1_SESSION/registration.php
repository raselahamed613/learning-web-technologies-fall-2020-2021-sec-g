<?php
include_once('header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="">
        <fieldset>
            <legend><b>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" id="">
                    <hr>
                    </td>
                    
                </tr>
                <tr>

                    <td>Email: </td>
                    <td><input type="text" name="email">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name='user_name'>
                        <hr></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" id="">
                    <hr>
                    </td>
                </tr>
                <tr>
                    <td>Confirm password: </td>
                    <td><input type="password" name="con_pas" id=""><hr></td>

                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gen" id="" value="Male">Male
                            <input type="radio" name="gen" id="" value="Female">Female
                            <input type="radio" name="gen" id="" value="Other">Other
                        </fieldset>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="date" name="dob" id="">
                        </fieldset>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="">
                        <button type="reset">Reset</button>
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