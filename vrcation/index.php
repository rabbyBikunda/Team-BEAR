<?php
session_start();
require_once "functions/db.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>

        <title>VR Cation</title>

    </head>

    <body>
        <?php require("includes/header.php"); ?>
        <?php if (isset($_SESSION['user_session'])) {
            require("includes/navbar_logged_in.php");
            }
            else{
            require("includes/navbar.php");
            } ?>

        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('img/cliffs.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>VR Cation - Take a tour</h3>
                            <p>Immersive Virtual Experiences</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/forest.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Visit Ireland</h3>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/dolmen.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Popular Destinations</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container">

            <h1 class="my-4">Your Experience Matters</h1>

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Virtual Reality Tours</h4>
                        <div class="card-body">
                            <p class="card-text">Experience virtual tours of various locations in Ireland. We provide immersive tours 
                            of popular Irish tourist attractions.</p>
                        </div>
                        <div class="card-footer">
                            <a href="vtours.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Create a tour</h4>
                        <div class="card-body">
                            <p class="card-text">Creating unique virtual experiences for you via our file upload system.</p>
                        </div>
                        <div class="card-footer">
                            <a href="file_upload.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">About VR Cation</h4>
                        <div class="card-body">
                            <p class="card-text">What we're about and who is involved.</p>
                        </div>
                        <div class="card-footer">
                            <a href="about.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Section -->
            <h2>Virtual Tours</h2>

            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item"  style=" margin-right:auto; margin-left:auto;">
                    <div class="card h-100">
                        <a href="vtours.php"><img class="card-img-top" src="img/wicklow_mountain.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                
                                <a href="https://apex-fire-safety-demo.s3-eu-west-1.amazonaws.com/Team-BEAR/wicklow/index.html" target="_blank">Glendalough, Co. Wicklow</a>
                            </h4>
                            <p class="card-text">Visit Glendalough forest, Wicklow Mountains and Upper Lake, Glendalough Round Tower and Lough Tay in County Wicklow</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 portfolio-item" style=" margin-right:auto; margin-left:auto;">
                    <div class="card h-100">
                          
                        <a href="vtours.php"><img class="card-img-top" src="img/aran.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                               
                                <a href="https://apex-fire-safety-demo.s3-eu-west-1.amazonaws.com/Team-BEAR/aran-island/index.html" target="_blank">Aran Islands, Co. Galway</a>
                            </h4>
                            <p class="card-text">Visit Aran Islands, ancient ruins around Galway Way.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.container -->

        <?php require("includes/footer.php"); ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
