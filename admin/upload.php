<?php
require_once('../config/connect.php');

if (isset($_FILES["image"])) {
    $errors= array();

    echo "<pre>";
    var_dump($_FILES["image"]);
    echo "</pre>";

    $file_name = $_FILES["image"] ["name"];
    $file_size = $_FILES["image"] ["size"];
    $file_tmp = $_FILES["image"] ["tmp_name"];
    $file_type = $_FILES["image"] ["type"];
    $file_ext = pathinfo($_FILES["image"] ["name"], PATHINFO_EXTENSION);

    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext,$extensions)=== false) {
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if(empty($errors) == true) {
        //upload the file.
        move_uploaded_file($file_tmp, $_SERVER["DOCUMENT_ROOT"]."/
        simple-image-upload-php/assets/upload".$file_name);

        //formuleer query
        $sql = "INSERT INTO 'fotoalbums' ('foto') VALUES ('{$file_name}')";
        //Poging om query uit te voeren
        if ($con->query($sql) === TRUE) {
            echo "New Profile Picture added to table. 'foto'.";
        } else {
            //uitvoeren van query mislukt
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        //stopt verbinding
        $conn->close();
    } else {
        print_r($errors);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop - Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctyoe="multipart/form-data">
    <input type="file" name="image" id="pfp">
    <input type="submit" value="Send">
    </form>
</body>
</html>