<?php

 
// $title = "<h1> test Message </h1>";

//     //   &lt;  h1   &gt; test Message &lt;   /h1    &gt;


//    echo    htmlspecialchars($title) ;//strip_tags($title);





   function Clean($input){
     
       $input = trim($input);
       $input = strip_tags($input);
       $input = stripslashes($input);

       return $input;

   //     return  stripslashes(strip_tags(trim($input)));
   
   
   }



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);
    $password = Clean($_POST['password']);

   
    # Errors Array ... 
    $errors = []; 
    
    # Validate Name ..... 
    if(empty($name)){
        $errors['Name'] = "Required Field ";
    }

    # Validate Email ... 
    if(empty($email)){
        $errors['Email']  = "Required Field"; 
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['Email']  = "Invalid Format"; 
    }

    # Validate Password .... 
    if(empty($password)){
        $errors['Password']  = "Required Field"; 
    }elseif(strlen($password) < 6){
        $errors['Password']  = "Length Must Be >= 6 Chars"; 
    }

   # Check Errors ...... 
   if(count($errors) > 0 ){
       foreach ($errors as $key => $value) {
           # code...
           echo '* '.$key.' : '.$value.'<br>';
       }
   }else{
       echo 'Name : '.$name.'<br>'.' Email : '.$email;
   }


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>