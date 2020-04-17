<?php
session_start();
require_once "functions/db.php";  

if (isset($_SESSION['user_session'])) {
            header("Location: index.php");
            }
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        
        <script  type="text/javascript" src="js/validation.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>

        <title>Login</title>

    </head>

    <body>
        <?php require("includes/header.php"); ?>
        <?php require("includes/navbar.php"); ?>

        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Login
                <small>VR Cation</small>
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Login</li>
            </ol>
            
            <div id="error" style="color: red">
                        
                    </div>

            <div class="container-fluid">
                <form name="login-form" id="login-form" method="post" action="functions/login_process.php" class="col-sm-offset-2 col-sm-8"
                      style=" margin-right:auto; margin-left:auto; border:0.5px solid #D3D3D3; padding-bottom: 10px" >

                    <label for="email">Email: </label>
                    <input type="text" class="form-control" name="email" >
                  
                    <br>

                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" id="password">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Login" name="btn-login" id="btn-login">

                </form>
            </div>

            <br>
            <br>
        </div>

        <br>
        <br>
        <br>
        <br>
        <?php require("includes/footer.php"); ?>
         <!-- Bootstrap core JavaScript -->
<!--        <script src="vendor/jquery/jquery.min.js"></script>-->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
