<?php
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOK = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOK = 1;
        } else {
            echo "File is not an image";
            $uploadOK = 0;
        }
    }

    if($uploadOK == 0) {
        echo "Sorry, your file was not uploaded";
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo '<img src="../' . $target_file . '" width="200"/>';
        } else {
            echo "Sorry, there was an error uploading your file";
        }
    }

?>