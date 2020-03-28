<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>

        <title>Map</title>

    </head>

    <body>


        <?php require("includes/header.php"); ?>

        <?php require("includes/navbar.php"); ?>



        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Map
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Map</li>
            </ol>

            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <div id="map" style="width:500px;height:300px;"></div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title">Glendalough, Co. Wicklow</h2>
                            <p class="card-text">Marked here are the locations of the Glendalough virtual tours</p>
                            <a href="vtours.php" class="btn btn-primary">Enter virtual tour &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <div id="map2" style="width:500px;height:300px;"></div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title">Aran Islands, Co. Galway</h2>
                            <p class="card-text">Marked here are the locations of the Aran Islands virtual tours</p>
                            <a href="vtours.php" class="btn btn-primary">Enter virtual tour &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(51.5, -0.12),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.HYBRID
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions);


            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(51.5, -0.12),
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACDftqMunSPhLxNGvtpPg8Z_V58tNkYGo&callback=myMap"></script>

</body>

</html>
