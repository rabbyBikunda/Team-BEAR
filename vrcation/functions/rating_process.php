<?php
session_start();
    require_once("db.php");

        $rating = filter_input(INPUT_POST, 'rating');
        $location = filter_input(INPUT_POST, 'location');
        

        try{
                $query = "INSERT INTO tours (name, user_email, rating) VALUES (:name, :user_email, :rating);";
                $statement  = $db->prepare($query);
                $statement->bindValue(":name", $location);
                $statement->bindValue(":user_email", $_SESSION['user_email']);
                $statement->bindValue(":rating", $rating);
                $statement->execute();
                $statement->closeCursor();
            
        
            
           echo "You rated this ";
            
            
            
            
            
        } catch (Exception $e) {
            //echo "Email or username already exists, please try again";
            echo $e->getMessage();

        }
        
        
        
        //create_user($email, $username, $password);
        //echo "ok"; // log in
        //header("Location: ../index.php");
        
   

//    
//    $fields = array("email", "username", "password", "password_02");
//    
////    if (check_post_fields($fields)){
//        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
//        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//        $password_02 = filter_input(INPUT_POST, "password_02", FILTER_SANITIZE_STRING);
//        
//        //if ($password === $password_02 && valid_new_user_details($email, $username)){
//            $user = create_user($email, $username, $password);
//            
//            //set_session($user);
//       // }
//    //}
    
    
