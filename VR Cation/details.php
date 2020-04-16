<?php
session_start();
require_once "functions/db.php";

    $location_name = filter_input(INPUT_POST, 'location_name');
    $message = filter_input(INPUT_POST, 'message');
    $contact_name =filter_input(INPUT_POST, 'contact_name');
    $phone = filter_input(INPUT_POST, 'phone');

    try {
            $query = "SELECT email from users where id = :id"; 
            $statement  = $db->prepare($query);
            $statement->bindValue(":id", $_SESSION['user_session']);
            $statement->execute();            
            $row = $statement->fetch();                
            $email = $row['email'];
            
            $query2 = "INSERT INTO uploaded_tours (user_email, location_name, info, name, phone) VALUES (:email, :location_name, :message,:contact_name,:phone);";
            $statement2  = $db->prepare($query2);
            $statement2->bindValue(":email", $email);
            $statement2->bindValue(":location_name", $location_name);
            $statement2->bindValue(":message", $message);
            $statement2->bindValue(":contact_name", $contact_name);
            $statement2->bindValue(":phone", $phone);
            $statement2->execute();
            $statement2->closeCursor();
            
            echo "ok";   
            
        } catch (Exception $ex) {
            //echo "Email or username already exists, please try again";
            echo $e->getMessage();

        }
   
    
  
 
        
      