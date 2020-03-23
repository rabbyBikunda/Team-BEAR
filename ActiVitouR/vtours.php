<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>

        <title>Virtual Tours</title>

    </head>

    <body>

        <?php require("includes/header.php"); ?>

        <?php require("includes/navbar.php"); ?>

        <style>

            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            /****** Style Star Rating Widget *****/

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            /***** CSS Magic to Highlight Stars on Hover *****/

            .rating > input:checked ~ label, /* show gold star when clicked */
            .rating:not(:checked) > label:hover, /* hover current star */
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

            .rating > input:checked + label:hover, /* hover current star when changing rating */
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
        </style>

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
                    <a href="https://apex-fire-safety-demo.s3.eu-west-1.amazonaws.com/Team-BEAR/3/index.html?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEEEaCXVzLWVhc3QtMSJGMEQCIF9NtbZof8gpPuvyYETYTmSrLUuFXB3jLAKKQOhFPO3LAiALX8xGNI08Fc3dx9HrENQ3KJ5yMNH505v9%2BQHgb4onhSr5AQg6EAEaDDAxMDc3NjI0MjAzNCIMC8yfHE55E%2BmxR2NtKtYB1p3qr47BGAGKHwdVuuj5cezTF4gwTcDO4ww%2BoXEHWifEzFt%2B8l%2FNExLng1RFqQ9ep5M%2BWETbs726Zlp8ejfbUZYkx%2FSvaygSENk0bL2DGtt8LktN9Dx5Y9gcUhO1alQd5A5W87ytJQJSuVKJSbH%2F14F495sn14b0XnYXGp%2BaVfzEMRTN00w5HvsVy0hn4KWD6BQW8WJjNsr%2F0Ps5Y9oFDTncjOHM3ZmJeuoblLNmWShzhCi1jcq5L%2FvYS0UNFM5Tn0l3vuispgXX5VQSQDR2Yomm9%2F0ZJjChj%2BDzBTr3AmoIj3Y6ElQNq8tFA4kk5qPlJOqYt38icjfck2sGbKjJifICoV8AA3VsVnbjJJlWEWpQu%2BbfVSAbyDDime%2FlnBFZlmXuNVXzoE8fd9%2Bo46hcLH2yevmB2YPtaOwnmbVOISr3m3WMIQWNo8a4DQ8jqXUNYMJp8SMZe2TiqsNBiqTSZZGATgHR%2BZYQNXTjdsP05C6qgMvJre9AqdZtsdhtNGG4atx8%2BpouwyuUIqJWopm0DPg0OnrucYCoEaNfmYyaVwqztjRdMcQpmWG4cyYhc9fSK%2FmZmfauy0JBzYbwkMD4bLUxYC42sNqsD2rCWxPqrK%2FL%2BdgPZ8kuvkMu50JbL3kZ1JWkjeqwBsbGTsRO0g1QQZZOmyQLTAB2mX0kJOj0ASfWLJzvzZhkke0oJAExGh8DNAcg1jU1QvKxH2IVetrQGPTEHdbu3w7m2ywu0q%2BmnRNigFIt6RFKHMURZzlLHy07XKavARJ4eg4OOfBPRa7otQ0K%2FNtr4A%3D%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200323T005033Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQFASQM5ZPPBTX4NT%2F20200323%2Feu-west-1%2Fs3%2Faws4_request&X-Amz-Signature=e51506a7cbad44956ffcfca5c0144c63bd25c514a96d3c1665b9fe193b6b98e7s3">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/wicklow_mountain.jpg" alt="" style="width:650px;height:250px;">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Glendalough, Co. Wicklow</h3>
                    <p>Visit the peaceful Glendalough forest, Wicklow Mountains and Upper Lake, Glendalough Round Tower and Lough Tay in County Wicklow.</p>
                    <a class="btn btn-primary" href="#">View Project
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <br>
                    <br>
                    <h5>Rate this virtual experience</h5>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Project Two -->
            <div class="row">
                <div class="col-md-7">
                    <a href="#">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/aran.jpg" alt="" style="width:650px;height:250px;">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Aran Islands, Co. Galway</h3>
                    <p>Visit the Aran Islands guarding the Galway Bay in Western Ireland. Aran Islands consist of medieval ruins and are well known for their ancient sites.</p>
                    <a class="btn btn-primary" href="#">View Project
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <br>
                    <br>
                    <h5>Rate this virtual experience</h5>
                    <fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
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
