<?php

$file = fopen('info.txt', "r") or die('unable to open file'); 


while (!feof($file)) {

     $line = fgets($file);

     $data =  explode('|', $line);

     if (count($data) > 0 && !empty($data[0])) {


          echo $line.'   <a href="remove.php?id='.$data[0].'">Remove</a>   <br>';
          
     }
}

fclose($file);
































// # TASK .
// Build a Blog Module  with following data  
// Title   =  [required , string]
// Content =  [required,length >50 ch]
// Image   =  [required, file]
// Then Store data into text file , display blog data ,  stored data can be deleted.



 
