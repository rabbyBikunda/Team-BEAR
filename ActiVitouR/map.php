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
                center: new google.maps.LatLng(53.00187218745121, -6.34911060333252),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.HYBRID
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var infowindow = new google.maps.InfoWindow({
                content: '1. Glendalough Forest',
                maxWidth: 200
            });
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(53.00187218745121, -6.34911060333252)
            });
            marker.setMap(map);
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });


            var infowindow2 = new google.maps.InfoWindow({
                content: '2. Wicklow Mountain',
                maxWidth: 200
            });
            var marker2 = new google.maps.Marker({
                position: new google.maps.LatLng(53.0102551318615, -6.327551007270814)
            });
            marker2.setMap(map);
            marker2.addListener('click', function () {
                infowindow2.open(map, marker2);
            });


            var infowindow3 = new google.maps.InfoWindow({
                content: '3. Glendalough Round Tower',
                maxWidth: 200
            });
            var marker3 = new google.maps.Marker({
                position: new google.maps.LatLng(53.01090065113311, -6.327717304229736)
            });
            marker3.setMap(map);
            marker3.addListener('click', function () {
                infowindow3.open(map, marker3);
            });
            
            
            var infowindow4 = new google.maps.InfoWindow({
                content: '4. Lough Tay',
                maxWidth: 200
            });
            var marker4 = new google.maps.Marker({
                position: new google.maps.LatLng(53.10587605, -6.2672966858168415)
            });
            marker4.setMap(map);
            marker4.addListener('click', function () {
                infowindow4.open(map, marker4);
            });
            
            
            
            
            
            var mapOptions2 = {
                center: new google.maps.LatLng(53.11185376709616, -9.714059829711916),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.HYBRID
            };
            var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions2);
            
            var infowindows = new google.maps.InfoWindow({
                content: '1. Inishmore',
                maxWidth: 200
            });
            var markers = new google.maps.Marker({
                position: new google.maps.LatLng(53.11185376709616, -9.714059829711916)
            });
            markers.setMap(map2);
            markers.addListener('click', function () {
                infowindows.open(map2, markers);
            });


            var infowindows2 = new google.maps.InfoWindow({
                content: '2. Inishmaan',
                maxWidth: 200
            });
            var markers2 = new google.maps.Marker({
                position: new google.maps.LatLng(53.06191452568029, -9.519224166870119)
            });
            markers2.setMap(map2);
            markers2.addListener('click', function () {
                infowindows2.open(map2, markers2);
            });


            var infowindows3 = new google.maps.InfoWindow({
                content: '3. Inisheer',
                maxWidth: 200
            });
            var markers3 = new google.maps.Marker({
                position: new google.maps.LatLng(53.058143, -9.5291498)
            });
            markers3.setMap(map2);
            markers3.addListener('click', function () {
                infowindows3.open(map2, markers3);
            });
            
            
            var infowindows4 = new google.maps.InfoWindow({
                content: '4. Inisheer',
                maxWidth: 200
            });
            var markers4 = new google.maps.Marker({
                position: new google.maps.LatLng(53.05821349493244, -9.53039288520813)
            });
            markers4.setMap(map2);
            markers4.addListener('click', function () {
                infowindows4.open(map2, markers4);
            });

        }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACDftqMunSPhLxNGvtpPg8Z_V58tNkYGo&callback=myMap"></script>

</body>

</html>
