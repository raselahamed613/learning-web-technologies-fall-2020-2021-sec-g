<?php

    if(isset($_POST['login']))
    {

        if(!empty($_POST['u_id']) &&  !empty($_POST['user_pass']))
        {

            $u_id=$_POST['u_id'];
            $user_pass=$_POST['user_pass'];

            $myfile = fopen('file.txt', 'r');

           
            while($data = fgets($myfile)){
                $test = explode(" ",$data);
               
               if($_POST['u_id'] == $test[0] && $_POST['user_pass'] == $test[1] )
               {
                $_SESSION['id'] = $test[0];
                $_SESSION['pass'] = $test[1];
                $_SESSION['name'] = $test[2];
                $_SESSION['user'] = $test[3];
                
                if($_SESSION['user']=="User")
                {
                    header('location: ../view_users.html');
                }

                else {
                    header('location: ../admin_home.html');
                }

                
               }
               
            }
        }
        else 
        {
            echo "fill";
        }
    
    }

?>