<?php
session_start();
require_once "functions/db.php";  

if (isset($_SESSION['user_session'])) {
            //header("Location: student.php");
            header("Location: index.php");
            }
 
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        
        <script  type="text/javascript" src="js/validation.min.js"></script>
        <script type="text/javascript" src="js/register.js"></script>

        <title>Create Account</title>

    </head>

    <body>
        <?php require("includes/header.php"); ?>
        <?php require("includes/navbar.php"); ?>

        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Register
                <small>VR Cation</small>
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Register</li>
            </ol>
            
            <div id="error" style="color: red">
                        
                    </div>

            <div class="container-fluid">
                <form name="register-form" id="register-form" method="post" action="functions/register_process.php" class="col-sm-offset-2 col-sm-8"
                      style=" margin-right:auto; margin-left:auto; border:0.5px solid #D3D3D3; padding-bottom: 10px" >

                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="email">
                    <br>

                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" >
                    <br>

                    <label for="password_01">Password: </label>
                    <input type="password" class="form-control" name="password" id="password">
                    <br>

                    <label for="password_02">Re-enter Password: </label>
                    <input type="password" class="form-control" name="password_02" id="password_02">
                    <br>

                    <input type="submit" class="btn btn-primary" value="Register" name="btn-register" id="btn-register">

                </form>
            </div>

            <br>
            <br>
        </div>

        <?php require("includes/footer.php"); ?>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
