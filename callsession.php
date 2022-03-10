<?php 
session_start();



  
//   if(isset($_SESSION['Student'])){
//     echo  $_SESSION['Student']['Name'].' || '.$_SESSION['Student']['age'].'<br>';
// }else{
//         echo 'No session with index (Student)<br>';
//     }

//   if(isset($_SESSION['id'])){
//   echo $_SESSION['id'];
//   }else{
//       echo 'No session with index (id)';
//   }


print_r($_SESSION['User']);