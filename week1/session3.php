<?php

// a b    b   c      z    a  

// function nexChar($char){

//     $nextChar = ++$char;
//     // z    >> aa 
//      if(strlen($nextChar) > 1){
//          $nextChar = $nextChar[0];
//      }

//       echo $nextChar;
// }
// nexChar('b');
//echo   ord('b');
// echo     chr(100);


########################################################################################################### 
// ARRAYS ...... 

//  $age = 20;    // int 
//  $name = "root"; // string       str >>> string  

// indexed array   =    numeric array 
// $students = array();

// $students = ["X","Y","Z","A"];

// echo  $students; 

// print_r($students);   
// Array ( [0] => X [1] => Y [2] => Z [3] => A )


// echo $students[1];

// foreach ($students as $key => $value) {
//     # code...

//      echo  $key.' :  '. $value . '<br>';

// }



// $student = ["id" => 2013,"name" => "Root Account","email" => "root@root.com","level" => 3];

// // print_r($student);

// // Array ( [id] => 2013 [name] => Root Account [email] => root@root.com [level] => 3 )


// //   echo $student["id"];


// foreach ($student as $key => $value) {
//     # code...
//     echo  $key.' :  '. $value . '<br>';
// }



//    $students = array(

//           ["id" => 2013,"name" => "Root Account","email" => "root@root.com"],
//           ["id" => 2014,"name" => "x Account","email" => "x@root.com"],
//           ["id" => 2015,"name" => "Y Account","email" => "Y@root.com"]

//    );

//  foreach ($students as $key => $value) {
//      # code...

//      foreach($value as $StudentKey => $StudentValue){

//            echo  $StudentKey.' : '. $StudentValue.'    ';
//      }

//      echo '<br>';

//  }


// $students = ["root","ahmed","z","x"];

// print_r($students);

// sort($students); // Array ( [0] => ahmed [1] => root [2] => x [3] => z )

//   rsort($students);  // Array ( [0] => z [1] => x [2] => root [3] => ahmed )

//   print_r($students);    


//   $ages = ["b" => 20 , "a" => 25 , "z" => 23];

//    //  asort($ages);   // Array ( [b] => 20 [z] => 23 [a] => 25 )

//   //   arsort($ages);  // Array ( [a] => 25 [z] => 23 [b] => 20 )

//    // ksort($ages);  // Array ( [a] => 25 [b] => 20 [z] => 23 )

//    krsort($ages);    // Array ( [z] => 23 [b] => 20 [a] => 25 )

//    print_r($ages);
################################################################################################################ 

// SUPERGLOBALS .....


// 1- $GLOBALS[]

// $age= 20; 
// $name = "root";



// //   print_r($GLOBALS);


// function Info(){

//     // global $age;

//     // echo $GLOBALS['age']; 

//     $GLOBALS['info'] =  $GLOBALS['age'].' || '. $GLOBALS['name'];
// }

// Info();
//  echo $GLOBALS['info'];

// 2-$_SERVER

//  ECHO  $_SERVER['PHP_SELF'];
//  ECHO $_SERVER['SERVER_NAME'];
// ECHO $_SERVER['SERVER_SOFTWARE'];
// ECHO $_SERVER['HTTP_HOST'];
// ECHO $_SERVER['SERVER_PORT'];
//  ECHO $_SERVER['SERVER_ADDR'];  // 127.0.0.1
//  ECHO $_SERVER['REMOTE_ADDR'];  // 127.0.0.1
//  Echo $_SERVER['QUERY_STRING'];
// Echo $_SERVER['REQUEST_METHOD'];


// if($_SERVER['REQUEST_METHOD'] == "POST"){

//     $name  = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
 
 
//     echo $name.' : '.$email.' : '.$password;  
//     }




//   //   root@yahoo.com      // 



############################################################################################# 
// Filters 
 


// filter_var($input,filter);

//    $email = "testyahoo.com"; 

//    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));


//   $age = "20t"; 

//       var_dump(filter_var($age,FILTER_VALIDATE_INT));

    // $url = "//localhost/group12/session3.php";

    // var_dump(filter_var($url,FILTER_VALIDATE_URL));

    // $ip = "127.0.0"; 

    // var_dump(filter_var($ip,FILTER_VALIDATE_IP));


    //   $price= "3tets"; 
      
    //   var_dump(filter_var($price,FILTER_VALIDATE_FLOAT));

      // FILTER_VALIDATE_BOOLEAN 

      // https://github.com/MrWeber94/HRApp/blob/main/.gitignore     == https://github.com 




    //   $age = "1***************2_____3test"; 
    //  ECHO  filter_var($age,FILTER_SANITIZE_NUMBER_INT);

    // $email = "root(FCIH)@yahoo.com"; 

    // // var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

    //  echo filter_var($email,FILTER_SANITIZE_EMAIL); // rootFCIH@yahoo.com

    //   $url = "https://www.w3schoo��ls.co�m";   https://www.google.com/   https://github.com/

//   //  var_dump(filter_var($url,FILTER_VALIDATE_URL));

//      ECHO  filter_var($url,FILTER_SANITIZE_URL);


 
    //   $name = '<h1>ROOT</h1>';

    // //   echo $name;

    // //  ECHO   filter_var($name,FILTER_SANITIZE_STRING);

    // echo strip_tags($name);


?>


<!-- <!DOCTYPE html>
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

        <form action="<?php //echo  $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""  name="name"  placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"  name="password"  placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> -->