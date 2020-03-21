<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>

        <title>Virtual Tours</title>

    </head>

    <body>
        
        <?php require("includes/header.php"); ?>

        <?php require("includes/navbar.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Virtual Tours
      <small>Immersive Experiences</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Virtual Tours</li>
    </ol>

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="https://pixabay.com/get/54e2d7424e5aae14f6da8c7dda6d49214b6ac3e45659754e74277ddd9e/ireland-2221482_1280.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Glendalough, Co. Wicklow</h3>
        <p>Visit the peaceful Glendalough forest, Wicklow Mountains and Upper Lake, Glendalough Round Tower and Lough Tay in County Wicklow</p>
        <a class="btn btn-primary" href="#">View Project
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->
    
    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->

<?php require("includes/footer.php"); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
</body>

</html>
