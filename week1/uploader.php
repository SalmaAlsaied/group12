<?php
// https://tools.learningcontainer.com/sample-json-file.json   
// http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz



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


include 'header.php';


?>





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