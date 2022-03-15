<?php 
  
  require 'dbConnection.php';
  require 'checkLogin.php';

  $id = $_GET['id'];


  if($id !== $_SESSION['user']['id']){

# Fetch User Data .... 
 $sql = "select image from users where id = $id"; 
 $op = mysqli_query($con,$sql); 
 $data = mysqli_fetch_assoc($op); 


 

  $sql = "delete from users where id = $id "; 

  $op = mysqli_query($con,$sql); 

  if($op){
    
    unlink('uploads/'.$data['image']); 

      $message =  'Raw Removed';
  }else{
      $message =  'Error Try Again';
  }
  }else{
    
    $message = "Can't do This Operation";

  }

    # SET SESSION ..... 
    $_SESSION['Message'] = $message;

   header("Location: index.php");




?>