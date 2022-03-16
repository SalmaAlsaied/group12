<?php

require_once 'dbConnection.php';
require 'checkLogin.php';

# Fetch Id Data ...... 
$id = $_GET['id'];

$sql = "select * from users where id = $id"; 
$op  = mysqli_query($con,$sql); 
# Fetch Data 
$data = mysqli_fetch_assoc($op);






function Clean($input){
 
    return  stripslashes(strip_tags(trim($input)));
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);


    # Validate ...... 

    $errors = [];

    # validate name .... 
    if (empty($name)) {
        $errors['name'] = "Field Required";
    }


    # validate email 
    if (empty($email)) {
        $errors['email'] = "Field Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email']   = "Invalid Email";
    }



  # Validate Image ... 
  if (!empty($_FILES['image']['name'])) {

    # Validate extension ..... 
    $imgType    = $_FILES['image']['type'];
    # Allowed Extensions 
    $allowedExtensions = ['jpg', 'png','jpeg'];

    $imgArray = explode('/', $imgType);

    # Image Extension ...... 
     $imageExtension =  strtolower(end($imgArray));


    if (!in_array($imageExtension, $allowedExtensions)) {
        $errors['Image'] = "Invalid Extension";
    }
}



    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 

        foreach ($errors as $key => $value) {
            # code...

            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

       

        if (!empty($_FILES['image']['name'])) {


            $FinalName = time() . rand() . '.' . $imageExtension;

            $disPath = 'uploads/' . $FinalName;
    
            $imgTemName = $_FILES['image']['tmp_name'];
    
    
            if (move_uploaded_file($imgTemName, $disPath)) {

                unlink('uploads/'.$data['image']);
            }
        }else{
            $FinalName = $data['image'];
        }



       
       
        // code ...... 
        
        $sql = "update users set name = '$name' , email = '$email' , image = '$FinalName' where id = $id";


         $op =  mysqli_query($con,$sql);

       if($op){
           $message =  'Raw Updated';

        # SET SESSION ..... 
        $_SESSION['Message'] = $message;

        header("Location: index.php");

       }else{
           echo 'Error Try Again '.mysqli_error($con);
       }


       mysqli_close($con);

    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Update Account</h2>

        <form action="edit.php?id=<?php echo $data['id'];?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name" placeholder="Enter Name" value="<?php echo $data['name']?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="<?php echo $data['email']?>">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Image</label>
                <input type="file" name="image" >
            </div>
        
            <img src="uploads/<?php echo $data['image'];?>" alt="" height="90" width="90">
<br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>


</body>

</html>