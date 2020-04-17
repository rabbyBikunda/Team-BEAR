<?php
session_start();

require_once("db.php");
    
    if (isset($_POST['btn-login'])) {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        try{
            $query =  "SELECT * FROM users WHERE email=:email";
            $statement = $db->prepare($query);
            $statement->bindValue(':email', $email);
            $statement->execute();
            
            //if row exists
            if ($row = $statement->fetch())
            {
                //get hashed password 
                $hashed_password = $row['password'];
                
                //verify the password 
                if (password_verify($password, $hashed_password)) 
                {
                    echo "ok"; // log in
                    $_SESSION['user_session'] = $row['id'];
                     $_SESSION['user_email'] = $email;
                }
                else
                {
                    echo "Incorrect email and/or password"; // wrong details
                }
            }
            else
            {
                echo "Incorrect email and/or password"; // wrong details 
            }
            
        } catch (Exception $ex) {
            echo $e->getMessage();
        }
    }