<?php
session_start();
require_once "functions/db.php";

if (!isset($_SESSION['user_session'])) {
    header("Location: login_register_message.php");
    //require("includes/navbar_logged_in.php");
}

    

    $query =  "SELECT * FROM uploaded_tours WHERE user_email=:email";
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $_SESSION['user_email']);
    $statement->execute();
            
    //if row exists
    if ($row = $statement->fetch())
    {
        header("Location: already_uploaded.php");      
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("includes/bootstrap_req.php"); ?>
       
        <script  type="text/javascript" src="js/validation.min.js"></script>
       
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>
        
        <script type="text/javascript" src="js/file_upload.js"></script>
        <script type="text/javascript" src="js/upload_validation.js"></script>
        
        
        <title>Create a tour</title>
    </head>
    
    <body>
        <?php require("includes/header.php"); ?>
        <?php require("includes/navbar_logged_in.php"); ?>

        <!-- Page Content -->
        <div class="container">

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

            <!-- Content Row -->
            <div class="row">
                <!-- Contact Details Column -->
                <div class="col-lg-4 mb-4">
                    <h3>Upload</h3>
                    <div class="controls">
                        <label>Number of Scenes:</label>

                        <select class="images">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>

                    </div>
                </div>
            </div>
            
             <form name="upload-form" id="upload-form" method="post" action="upload.php" >
            
            <div class="upload_space div1" id="up1">
                <h5>Scene 1</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img1" id="form1" type="file" >
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message1" style="color: red"></div>

                            </div>
                      
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound1" id="form1_sound" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">Database Maintainer, Website back-end, Website front-end</h6>-->
                                <div id="upload_message1_sound" style="color: red"></div>
                            </div>
                      
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio1" id="form1_audio" type="file">          
                                 <div id="upload_message1_audio" style="color: red"></div>
                            </div>
             
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload_space div2" id="up2" style="display: none">
                <h5>Scene 2</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img2" id="form2" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message2" style="color: red"></div>

                            </div>
          
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound2" id="form2_sound" type="file">
                                 <div id="upload_message2_sound" style="color: red"></div>
                            </div>
              
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio2" id="form2_audio" type="file">          
                                <div id="upload_message2_audio" style="color: red"></div>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload_space div3" id="up3" style="display: none">
                <h5>Scene 3</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img3" id="form3" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message3" style="color: red"></div>

                            </div>
              
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound3" id="form3_sound" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">Database Maintainer, Website back-end, Website front-end</h6>-->
                                 <div id="upload_message3_sound" style="color: red"></div>
                            </div>
               
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio3" id="form3_audio" type="file">          
                                <div id="upload_message3_audio" style="color: red"></div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload_space div4" id="up4" style="display: none">
                <h5>Scene 4</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img4" id="form4" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message4" style="color: red"></div>

                            </div>
                      
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound4" id="form4_sound" type="file">
                                 <div id="upload_message4_sound" style="color: red"></div>
                            </div>
                     
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio4" id="form4_audio" type="file">         
                                <div id="upload_message4_audio" style="color: red"></div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload_space div5" id="up5" style="display: none">
                <h5>Scene 5</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img5" id="form5" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message5" style="color: red"></div>

                            </div>
                         
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound5" id="form5_sound" type="file">
                                 <div id="upload_message5_sound" style="color: red"></div>
                                <!--            <h6 class="card-subtitle mb-2 text-muted">Database Maintainer, Website back-end, Website front-end</h6>-->
                            </div>
                         
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio5" id="form5_audio" type="file">          
                                <div id="upload_message5_audio" style="color: red"></div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload_space div6" id="up6" style="display: none">
                <h5>Scene 6</h5>
                <div class="row">
                    <div class="col-lg-4 mb-4 img">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Image</h4>
                                <input  class="upload_form" name="upload_form_img6" id="form6" type="file">
                                <!--            <h6 class="card-subtitle mb-2 text-muted">VR developer, VR tester, Website designer,Usability analyst</h6>-->
                                <div id="upload_message6" style="color: red"></div>

                            </div>
                     
                        </div>
                    </div>
                    
                    <div class="col-lg-4 mb-4 bs">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Background sound</h4>
                                <input  class="upload_form_sound" name="upload_form_sound6" id="form6_sound" type="file">
                                 <div id="upload_message6_sound" style="color: red"></div>
                                <!--            <h6 class="card-subtitle mb-2 text-muted">Database Maintainer, Website back-end, Website front-end</h6>-->
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 ia">
                        <div class="card h-60 text-center">
                            <div class="card-body">
                                <h4 class="card-title">Information audio</h4>
                                <input  class="upload_form_audio" name="upload_form_audio6" id="form6_audio" type="file">          
                                <div id="upload_message6_audio" style="color: red"></div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <h3>Tour Details</h3>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Location Name:</label>
                            <input type="text" class="form-control" id="location_name" name="location_name">
<!--                            <p class="help-block"></p>-->
                        </div>
                    </div>
                    
                      <div class="control-group form-group">
                            <div class="controls">
                                <label>Extra Information (Optional):</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" name="message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>

                </div>
            </div>
                 
               <div class="row">
                <div class="col-lg-8 mb-4">
                    <h3>Contact Details</h3>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="contact_name" name="contact_name">
<!--                            <p class="help-block"></p>-->
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="text" class="form-control" id="phone" name="phone">
<!--                            <p class="help-block"></p>-->
                        </div>
                    </div>
                    
                      

                </div>
            </div>
 
            <input type="submit" class="btn btn-primary" value="Create tour" name="btn-send" id="btn-send">
            <br>
            <br>
        </form>
 
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php require("includes/footer.php"); ?>

        <!-- Bootstrap core JavaScript -->
      <!--  <script src="vendor/jquery/jquery.min.js"></script>-->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!--   Contact form JavaScript 
           Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>


    </body>

</html>
