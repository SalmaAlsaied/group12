<?php 

   /**
    *  $_POST
    *  $_GET 
    *  $_REQUEST
   */


//    print_r($_POST);   // count()


   if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name  = $_POST['name'];
   $email = $_REQUEST['email'];
   $password = $_REQUEST['password'];


   echo $name.' : '.$email.' : '.$password;  
   }

?>