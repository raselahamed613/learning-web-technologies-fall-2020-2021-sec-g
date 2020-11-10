<?php
    session_start();

    if(isset($_POST['submit']))
    {

        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
        }
        else
        {
            $id ='';
        }
        if(!empty($_POST['password'] && !empty($_POST['password'])))
        {
            if($_POST['password'] == $_POST['password'] )
            {
                $pas = $_POST['password'];
            }
            else
            {
                $pas ='';
            }
        }

        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else
        {
            $name='';
        }

        if(!empty($_POST['user_t']))
        {
            $user = $_POST['user_t'];
        }
        else
        {
            $user='';
        }

        if($id != '' && $pas !='' && $name!='' && $user !='' )
        {
            $_SESSION['id'] = $id;
            $_SESSION['pas'] = $pas;
            $_SESSION['name'] = $name;
            $_SESSION['user'] =$user;
        }
        else
        {

        }

    }
    
    $file = 'file.txt';
    $current = file_get_contents($file);
    $current .= "bob";
    file_put_contents($file, $current);
?>