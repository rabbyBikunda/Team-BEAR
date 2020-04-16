<?php
session_start(); 
    require_once("db.php");
    if (isset($_POST['btn-register'])) {
        
        $email = filter_input(INPUT_POST, 'email');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        
       
        
        try{
            
            $query1 =  "SELECT * FROM users WHERE email= :email OR username = :username";
            $statement1 = $db->prepare($query1);
            $statement1->bindValue(':email', $email);
            $statement1->bindValue(':username', $username);
            $statement1->execute();
            
            if ($row = $statement1->fetch())
            {
                echo "Email or username already exists, please try again";
            }
            else
            {
                $query = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password);";
                $statement  = $db->prepare($query);
                $statement->bindValue(":email", $email);
                $statement->bindValue(":username", $username);
                $statement->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
                $statement->execute();
                $statement->closeCursor();
                echo "ok"; 
                
                $query2 =  "SELECT * FROM users WHERE email= :email";
                $statement2 = $db->prepare($query2);
                $statement2->bindValue(':email', $email);
                $statement2->execute();
                $row2 = $statement2->fetch();
                
                $_SESSION['user_session'] = $row2['id'];
                $_SESSION['user_email'] = $email;
                  
            }
             
        } catch (Exception $ex) {
            //echo "Email or username already exists, please try again";
            echo $e->getMessage();

        }
             
   }