<?php
session_start();
require_once "functions/db.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        <title>About</title>
    </head>

    <body>
        <?php require("includes/header.php"); ?>
       <?php if (isset($_SESSION['user_session'])) {
            //header("Location: student.php");
            require("includes/navbar_logged_in.php");
            }
            else{
            require("includes/navbar.php");
            } ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
      <small>VR Cation</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="img/official_logo.png" alt="">
      </div>
      <div class="col-lg-6">
<!--        <h2>About Modern Business</h2>-->
        <p>VR Cation is A Virtual Reality (VR) tour guide application that allows users to view various locations in Ireland and potentially around the world. VR Cation caters to all users from beginner to advanced. Beginners can just simply view a tour while advanced users can create a tour of their choosing via our file upload system.</p>
        <p>VR Cation is compatible with all headsets and it can also be used on a desktop/laptop. Our Activity Planner allows users to plan their trips to places they would like to visit by pinning a location to the map.</p>
        <p>VR Cation is committed to giving users the best possible immersive experience. While inside a tour each scene has audio information on a location including up to date weather.</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Our Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
            <h4 class="card-title">Bobbie Omobolabo Teriba</h4>
            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>
          </div>
          <div class="card-footer">
            <a href="#">LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
            <h4 class="card-title">Aaron Kinney</h4>
            <h6 class="card-subtitle mb-2 text-muted">Database Maintainer, Website back-end, Website front-end</h6>
          </div>
          <div class="card-footer">
            <a href="#">LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-60 text-center">
          <div class="card-body">
            <h4 class="card-title">Rabby Bikunda</h4>
            <h6 class="card-subtitle mb-2 text-muted">Team Lead, VR developer, Scrum Master, Audio Creator</h6>
          </div>
          <div class="card-footer">
            <a href="www.linkedin.com/in/rabby-bikunda">LinkedIn</a>
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
