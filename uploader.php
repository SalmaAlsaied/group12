<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // CODE ..... 

    if (!empty($_FILES['image']['name'])) {

        $imgName    = $_FILES['image']['name'];
        $imgTemName = $_FILES['image']['tmp_name'];
        $imgType    = $_FILES['image']['type'];
        $imgSize    = $_FILES['image']['size'];

        # Allowed Extensions 
        $allowedExtensions = ['jpg', 'png'];

        $imgArray = explode('/', $imgType);

        # Image Extension ...... 
        $imageExtension = end($imgArray);


        if (in_array($imageExtension, $allowedExtensions)) {

            # IMage New Name ...... 
            $FinalName = time() . rand() . '.' . $imageExtension;

            $disPath = 'uploads/' . $FinalName;


            if (move_uploaded_file($imgTemName, $disPath)) {
                echo 'Image Uploaded Succ ';
            } else {
                echo 'Error try Again';
            }
        } else {
            echo 'InValid Extension .... ';
        }
    } else {
        echo '* Image Required';
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>UPLOAD FILES ... </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Upload File</h2>

        <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleInputName">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">GO!!</button>
        </form>
    </div>