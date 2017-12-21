<?php

    function redirect($location) {
        header("Location: {$location}");
    }

    //upload image for company
    function imageUpload($image, $user_id) {
        $target_dir = "../../assets/images/";
        // get image extension
        $info = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $extension = image_type_to_extension($info[2]);
        // make unique image name
        $str = '123Asfe';
        $shuffled = str_shuffle($str);
        $file_names = 'muza-'. $shuffled . $extension;
        // file save dir and file name
        $target_file = $target_dir . $file_names;

        $uploadOk = 1;

        if($info !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($extension != ".jpg" && $extension != ".png" && $extension != ".jpeg"
        && $extension != ".gif" ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                 return $file_names;
            } else {
                echo "image was not uploaded";
            }
        }
    }



?>