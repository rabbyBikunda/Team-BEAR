<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>

        <title>VR Cation</title>

    </head>

    <body>

        <?php require("includes/header.php"); ?>

        <?php require("includes/navbar.php"); ?>

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
                    <div class="carousel-item" style="background-image: url('img/dolmen.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Visit Ireland</h3>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/fields.jpg')">
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
                            <p class="card-text">Experience virtual tours of various location in Ireland. We provide immersive tours 
                            of popular Irish tourist attractions.</p>
                        </div>
                        <div class="card-footer">
                            <a href="vtours.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Tour Planner</h4>
                        <div class="card-body">
                            <p class="card-text">Assisting you with planning trips to these locations in Ireland, 
                                giving you useful and helpful information.</p>
                        </div>
                        <div class="card-footer">
                            <a href="activity_planner.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Your own tours</h4>
                        <div class="card-body">
                            <p class="card-text">Creating unique virtual experiences for you</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Section -->
            <h2>Virtual Tours</h2>

            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="vtours.php"><img class="card-img-top" src="img/wicklow_mountain.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Glendalough, Co. Wicklow</a>
                            </h4>
                            <p class="card-text">Visit Glendalough forest, Wicklow Mountains and Upper Lake, Glendalough Round Tower and Lough Tay in County Wicklow</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>Modern Business Features</h2>
                    <p>The Modern Business template by Start Bootstrap includes:</p>
                    <ul>
                        <li>
                            <strong>Bootstrap v4</strong>
                        </li>
                        <li>jQuery</li>
                        <li>Font Awesome</li>
                        <li>Working contact form with validation</li>
                        <li>Unstyled page elements for easy customization</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <?php require("includes/footer.php"); ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
            var search_form = $("#search_form");
            var search_bar = $("#search_bar");

            search_form.submit(function (e) {
                if (search_bar.val() === "")
                    e.preventDefault();
                else
                    search_form.submit();
            });
        </script>
    </body>

</html>
