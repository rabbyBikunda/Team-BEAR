<?php
session_start();
$target_dir = "uploads/";
$response;

//if (empty($_FILES["file"])) {
//    $response = "Please choose an image upload";
//} else {

//$filename = $_FILES['file']['name'];




    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    //$uploadOk = 1;
   // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    //$check = getimagesize($_FILES["file"]["tmp_name"]);

//    if ($check !== false) {
//        //echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//        
//        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "bmp"  && $imageFileType != "raw") {
//        $response = "Please upload a jpg,png,bmp or raw image";
//    $uploadOk = 0;
//}

        // Check if file already exists
//        if (file_exists($target_file)) {
//            $response = "Sorry, file already exists.";
//            $uploadOk = 0;
//        }

//    // Check file size 15 megabytes
        if ($_FILES["file"]["size"] > 15000000) {
            $response = "Sorry, your file is too large.";
            //$uploadOk = 0;
        }
//    } else {
//        $response = "Please upload a jpg,png,bmp or raw image";
//        $uploadOk = 0;
//    }




// Check if $uploadOk is set to 0 by an error
//    if ($uploadOk == 0) {
//        //$response =  "Sorry, your file was not uploaded.";
//        // if everything is ok, try to upload file
//    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//           
            $response = "ok";
            
        } else {
            $response = "Sorry, there was an error uploading your file.";
        }
   // }
echo $response;
