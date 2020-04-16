<?php
session_start();
require_once "functions/db.php";

if (!isset($_SESSION['user_session'])) {
    header("Location: login_register_message.php");
    //require("includes/navbar_logged_in.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        <title>Tour upload success</title>
    </head>

    <body>
        <?php require("includes/header.php"); ?>
        <?php require("includes/navbar_logged_in.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
     <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Create a tour
        <!--      <small>Subheading</small>-->
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Create a tour</li>
            </ol>
    
    <div class="row" style=" overflow: hidden;
        visibility: hidden;">

      <div class="col-lg-12 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
            <h4 class="card-title">Success!</h4>
            <h6 class="card-subtitle mb-2 text-muted">Your request for a tour has been sent. Please check you email.</h6>
          </div>
        </div>
      </div>
    
    </div>
    
           <div class="row">

      <div class="col-lg-12 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
              <h4 class="card-title">You have already uploaded a tour</h4>
            <h6 ><div>
                          
                        </div>
                <div class="card-footer" style=" overflow: hidden;
        visibility: hidden;">
                
                        </div>
            
            </h6>
          </div>
        </div>
      </div>
    
    </div>
      
    
  
       <div class="row" style=" overflow: hidden;
        visibility: hidden;">

      <div class="col-lg-12 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
            <h4 class="card-title">Success!</h4>
            <h6 class="card-subtitle mb-2 text-muted">Your request for a tour has been sent. Please check you email.</h6>
          </div>
        </div>
      </div>
    
    </div>
      

   
  </div>
  <!-- /.container -->

  <!-- Footer -->
  
          <?php require("includes/footer.php"); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
