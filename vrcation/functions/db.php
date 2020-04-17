<?php
    $dsn = "mysql:host=localhost;dbname=vr_cation";
    $username = "root";
    $password = "";
//    $db;
    
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        error_reporting(E_ALL);
    } catch(PDOException $e) {
        $error_message = $e->getMessage();
        include("db_error.php");
        exit();
    }
