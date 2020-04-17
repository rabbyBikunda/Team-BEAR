<?php
session_start();
$target_dir = "uploads/";
$response;

//if (empty($_FILES["file"])) {
//    $response = "Please upload a mp3,flac,wav or ogg sound file";
//} else {



    $target_file = $target_dir . basename($_FILES["file"]["name"]);
   // $uploadOk = 1;
 //   $soundFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    //$check = getimagesize($_FILES["file"]["tmp_name"]);

    //if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        //$uploadOk = 1;
        
//        if($soundFileType != "mp3" && $soundFileType != "flac" && $soundFileType != "wav" && $soundFileType != "ogg") {
//        $response =  "Please upload a mp3,flac,wav or ogg sound file";
//    $uploadOk = 0;
//}

//        // Check if file already exists
//        if (file_exists($target_file)) {
//            $response = "Sorry, file already exists.";
//            $uploadOk = 0;
//        }

//    // Check file size
//max is 15mb
        if ($_FILES["file"]["size"] > 15000000) {
            $response = "Sorry, your file is too large.";
            //$uploadOk = 0;
        }
//    } else {
//        $response = "Please upload a mp3,flac,wav or ogg sound file";
//        $uploadOk = 0;
//    }




// Check if $uploadOk is set to 0 by an error
//    if ($uploadOk == 0) {
//        //$response =  "Sorry, your file was not uploaded.";
//        // if everything is ok, try to upload file
//    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $response = "ok" ;//The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            $response = "Sorry, there was an error uploading your file.";
        }
   // }

echo $response;
