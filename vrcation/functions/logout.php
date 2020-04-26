<?php
session_start();
   // require_once("session.php");
    //session_destroy();

unset($_SESSION['user_session']);
        session_unset();
        
        if(session_destroy())
	{
		header("Location: ../index.php");
	}
    
    //header("Location: ../index.php");
