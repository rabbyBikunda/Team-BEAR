<?php
    session_start();
    
    if (!isset($_SESSION["id"])){
        $_SESSION["id"] = -1;
    }
    
    function set_session($user) {
        $_SESSION["id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
    }
    