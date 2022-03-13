<?php

$id = $_GET['id'];


$file = fopen('info.txt', "r") or die('unable to open file');

$finalText = '';
while (!feof($file)) {

  $line = fgets($file);

  $data =  explode('|', $line);



  if ($data[0] !== $id) {

    $finalText .= $line;
  }
}

fclose($file);


$file = fopen('info.txt', "w") or die('unable to open file');

  fwrite($file, $finalText);

fclose($file);

 header("location: index.php");


// CRUD

/*
 C   CREATE ... 
 R   READ   ... 
 U   UPDATE ... 
 D   DELETE ...
*/