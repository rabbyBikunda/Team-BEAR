<?php
session_start();
require_once "functions/db.php";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
        <script type="text/javascript" src="js/rating.js"></script>
        <title>Virtual Tours</title>

        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            .ratings { 
                border: none;
                float: left;
            }

            .ratings > input { display: none; } 
            .ratings > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .ratings > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .ratings > label { 
                color: #ddd; 
                float: right; 
            }

            /***** CSS Magic to Highlight Stars on Hover *****/

            .ratings > input:checked ~ label, /* show gold star when clicked */
            .ratings:not(:checked) > label:hover, /* hover current star */
            .ratings:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

            .ratings > input:checked + label:hover, /* hover current star when changing rating */
            .ratings > input:checked ~ label:hover,
            .ratings > label:hover ~ input:checked ~ label, /* lighten current selection */
            .ratings > input:checked ~ label:hover ~ label { color: #FFED85;  }

            .ratingtwo { 
                border: none;
                float: left;
            }

            .ratingtwo > input { display: none; } 
            .ratingtwo > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .ratingtwo > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .ratingtwo > label { 
                color: #ddd; 
                float: right; 
            }

            /***** CSS Magic to Highlight Stars on Hover *****/

            .ratingtwo > input:checked ~ label, /* show gold star when clicked */
            .ratingtwo:not(:checked) > label:hover, /* hover current star */
            .ratingtwo:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

            .ratingstwo > input:checked + label:hover, /* hover current star when changing rating */
            .ratingstwo > input:checked ~ label:hover,
            .ratingtwo > label:hover ~ input:checked ~ label, /* lighten current selection */
            .ratingtwo > input:checked ~ label:hover ~ label { color: #FFED85;  }

        </style>
    </head>

    <body>

        <?php require("includes/header.php"); ?>
        <?php
        if (isset($_SESSION['user_session'])) {
            //header("Location: student.php");
            require("includes/navbar_logged_in.php");
        } else {
            require("includes/navbar.php");
        }
        ?>
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
<!--                    <a href="https://apex-fire-safety-demo.s3.eu-west-1.amazonaws.com/Team-BEAR/3/index.html?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEEEaCXVzLWVhc3QtMSJGMEQCIF9NtbZof8gpPuvyYETYTmSrLUuFXB3jLAKKQOhFPO3LAiALX8xGNI08Fc3dx9HrENQ3KJ5yMNH505v9%2BQHgb4onhSr5AQg6EAEaDDAxMDc3NjI0MjAzNCIMC8yfHE55E%2BmxR2NtKtYB1p3qr47BGAGKHwdVuuj5cezTF4gwTcDO4ww%2BoXEHWifEzFt%2B8l%2FNExLng1RFqQ9ep5M%2BWETbs726Zlp8ejfbUZYkx%2FSvaygSENk0bL2DGtt8LktN9Dx5Y9gcUhO1alQd5A5W87ytJQJSuVKJSbH%2F14F495sn14b0XnYXGp%2BaVfzEMRTN00w5HvsVy0hn4KWD6BQW8WJjNsr%2F0Ps5Y9oFDTncjOHM3ZmJeuoblLNmWShzhCi1jcq5L%2FvYS0UNFM5Tn0l3vuispgXX5VQSQDR2Yomm9%2F0ZJjChj%2BDzBTr3AmoIj3Y6ElQNq8tFA4kk5qPlJOqYt38icjfck2sGbKjJifICoV8AA3VsVnbjJJlWEWpQu%2BbfVSAbyDDime%2FlnBFZlmXuNVXzoE8fd9%2Bo46hcLH2yevmB2YPtaOwnmbVOISr3m3WMIQWNo8a4DQ8jqXUNYMJp8SMZe2TiqsNBiqTSZZGATgHR%2BZYQNXTjdsP05C6qgMvJre9AqdZtsdhtNGG4atx8%2BpouwyuUIqJWopm0DPg0OnrucYCoEaNfmYyaVwqztjRdMcQpmWG4cyYhc9fSK%2FmZmfauy0JBzYbwkMD4bLUxYC42sNqsD2rCWxPqrK%2FL%2BdgPZ8kuvkMu50JbL3kZ1JWkjeqwBsbGTsRO0g1QQZZOmyQLTAB2mX0kJOj0ASfWLJzvzZhkke0oJAExGh8DNAcg1jU1QvKxH2IVetrQGPTEHdbu3w7m2ywu0q%2BmnRNigFIt6RFKHMURZzlLHy07XKavARJ4eg4OOfBPRa7otQ0K%2FNtr4A%3D%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200323T005033Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQFASQM5ZPPBTX4NT%2F20200323%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=e51506a7cbad44956ffcfca5c0144c63bd25c514a96d3c1665b9fe193b6b98e7s3">-->
                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/wicklow_mountain.jpg" alt="" style="width:600px;height:300px;">
                        <div id="map" style="width:600px;height:300px; position: absolute;top: 0; display: none"></div>

<!--                    </a>-->
                </div>
                <div class="col-md-5">
                    <h3>Glendalough, Co. Wicklow</h3>
                    <p>Visit the peaceful Glendalough forest, Wicklow Mountains and Upper Lake, Glendalough Round Tower and Lough Tay in County Wicklow.</p>
                    <a class="btn btn-primary" href="https://apex-fire-safety-demo.s3-eu-west-1.amazonaws.com/Team-BEAR/wicklow/index.html" target="_blank">View Tour
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    
                    <button class="btn btn-primary" id="map1_toggle">Show/Hide map
<!--                        <span class="glyphicon glyphicon-chevron-right"></span>-->
                    </button>
                    <br>
                    <br>
                    
                    <h5>Rate this virtual experience</h5>
                    <div id="rating_section"
                           <?php if (!isset($_SESSION['user_session'])) {
                            echo 'style="display: none"'; 
                        }  else {
                            
                            $query1 =  "SELECT * FROM tours WHERE user_email= :email AND name='Glendalough, Co. Wicklow'";
                            $statement1 = $db->prepare($query1);
                            $statement1->bindValue(':email', $_SESSION['user_email']);
                            $statement1->execute();
            
                            if ($row = $statement1->fetch())
                            {
                                echo 'style="display: none"'; 
                            }
                            
                        }               
                        ?>           
                         >
                   
                     <h6><div id="rating_message">

                            </div></h6>
                    
                    <fieldset class="ratings">
                        <input type="radio" id="star5" name="rating" value="5"/>
                        <label class="full" for="star5" title="5 stars"></label>

                        <input type="radio" id="star4.5" name="rating" value="4.5" />
                        <label class="half" for="star4.5" title="4 and a half stars"></label>

                        <input type="radio" id="star4" name="rating" value="4"/>
                        <label class="full" for="star4" title="4 stars"></label>

                        <input type="radio" id="star3.5" name="rating" value="3.5" />
                        <label class="half" for="star3.5" title="3 and a half stars"></label>

                        <input type="radio" id="star3" name="rating" value="3"/>
                        <label class="full" for="star3" title="3 stars"></label>

                        <input type="radio" id="star2.5" name="rating" value="2.5" />
                        <label class="half" for="star2.5" title="2 and a half stars"></label>

                        <input type="radio" id="star2" name="rating" value="2"/>
                        <label class="full" for="star2" title="2 stars"></label>

                        <input type="radio" id="star1.5" name="rating" value="1.5" />
                        <label class="half" for="star1.5" title="1 and a half stars"></label>

                        <input type="radio" id="star1" name="rating" value="1"/> 
                        <label class="full" for="star1" title="1 star"></label>

                        <input type="radio" id="star0.5" name="rating" value="0.5" />
                        <label class="half" for="star0.5" title="half a star"></label>
                    </fieldset>
                    </div>
                    
                     <div>
                        <?php
                             if (isset($_SESSION['user_session'])) {
                          
                            $query =  "SELECT rating FROM tours WHERE user_email= :email AND name = 'Glendalough, Co. Wicklow'";
                            $statement = $db->prepare($query);
                            $statement->bindValue(':email', $_SESSION['user_email']);
                            $statement->execute();
                           
                            if( $row = $statement->fetch())
                            {
                               echo '<h6>You rated this '.$row['rating'].' stars!</h6>';      
                            }
                          }
                        ?>
                    </div>
                    
                     <div>
                    <?php if (!isset($_SESSION['user_session'])) {
                        echo 'Please <a href="login.php" style=" text-decoration: none;">login</a> or <a href="register.php" style=" text-decoration: none;">register</a> to rate this tour
'; 
                        }?>                        
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Project Two -->
            <div class="row">
                <div class="col-md-7">
<!--                    <a href="#">-->
                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/aran.jpg" alt="" style="width:600px;height:300px;">
                        <div id="map2" style="width:600px;height:300px;  position: absolute;top: 0;display: none"></div>
<!--                    </a>-->
                </div>
                <div class="col-md-5">
                    <h3>Aran Islands, Co. Galway</h3>
                    <p>Visit the Aran Islands guarding the Galway Bay in Western Ireland. Aran Islands consist of medieval ruins and are well known for their ancient sites.</p>
                    
                    <a class="btn btn-primary" href="https://apex-fire-safety-demo.s3-eu-west-1.amazonaws.com/Team-BEAR/aran-island/index.html" target="_blank">View Tour
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                       <button class="btn btn-primary" id="map2_toggle">Show/Hide map
<!--                        <span class="glyphicon glyphicon-chevron-right"></span>-->
                    </button>
                    <br>
                    <br>
                     <h5>Rate this virtual experience</h5>
                    <div id="rating_section2"
                          <?php if (!isset($_SESSION['user_session'])) {
                            echo 'style="display: none"'; 
                        }  else {
                            
                            $query1 =  "SELECT * FROM tours WHERE user_email= :email AND name='Aran Islands, Co. Galway'";
                            $statement1 = $db->prepare($query1);
                            $statement1->bindValue(':email', $_SESSION['user_email']);
                            $statement1->execute();
            
                            if ($row = $statement1->fetch())
                            {
                                echo 'style="display: none"'; 
                            }
                            
                        }               
                        ?>          
                         
                         
                         >
                       

                        <h6><div id="rating_message2">

                            </div></h6>

                        <fieldset class="ratingtwo">

                            <input type="radio" id="star5-2" name="ratingtwo" value="5"/>
                            <label class="full" for="star5-2" title="5 stars"></label>

                            <input type="radio" id="star4.5-2" name="ratingtwo" value="4.5" />
                            <label class="half" for="star4.5-2" title="4 and a half stars"></label>

                            <input type="radio" id="star4-2" name="ratingtwo" value="4"/>
                            <label class="full" for="star4-2" title="4 stars"></label>

                            <input type="radio" id="star3.5-2" name="ratingtwo" value="3.5" />
                            <label class="half" for="star3.5-2" title="3 and a half stars"></label>

                            <input type="radio" id="star3-2" name="ratingtwo" value="3"/>
                            <label class="full" for="star3-2" title="3 stars"></label>

                            <input type="radio" id="star2.5-2" name="ratingtwo" value="2.5" />
                            <label class="half" for="star2.5-2" title="2 and a half stars"></label>

                            <input type="radio" id="star2-2" name="ratingtwo" value="2"/>
                            <label class="full" for="star2-2" title="2 stars"></label>

                            <input type="radio" id="star1.5-2" name="ratingtwo" value="1.5" />
                            <label class="half" for="star1.5-2" title="1 and a half stars"></label>

                            <input type="radio" id="star1-2" name="ratingtwo" value="1"/> 
                            <label class="full" for="star1-2" title="1 star"></label>

                            <input type="radio" id="star0.5-2" name="ratingtwo" value="0.5" />
                            <label class="half" for="star0.5-2" title="half a star"></label>

                        </fieldset>
                    </div>
                    
                      <div>
                        <?php
                             if (isset($_SESSION['user_session'])) {
                          
                            $query =  "SELECT rating FROM tours WHERE user_email= :email AND name = 'Aran Islands, Co. Galway'";
                            $statement = $db->prepare($query);
                            $statement->bindValue(':email', $_SESSION['user_email']);
                            $statement->execute();
                           
                            if( $row = $statement->fetch())
                            {
                               echo '<h6>You rated this '.$row['rating'].' stars!</h6>';      
                            }
                          }
                        ?>
                    </div>
                    
                      <div>
                    <?php if (!isset($_SESSION['user_session'])) {
                        echo 'Please <a href="login.php" style=" text-decoration: none;">login</a> or <a href="register.php" style=" text-decoration: none;">register</a> to rate this tour
'; 
                        }?>                        
                    </div>

                </div>
            </div>

            <!-- /.row -->

            <br>
            <br>
            <br>
            <br>
            <br>

        </div>

        <!-- /.container -->

        <?php require("includes/footer.php"); ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script>
             $('#map1_toggle').on("click", function () {
              
                 $("#map").fadeToggle(1000, function () 
                    {
                       
                    });                  
         } );
         
          $('#map2_toggle').on("click", function () {
              
                 $("#map2").fadeToggle(1000, function () 
                    {
                       
                    });                  
         } );
            
            
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
