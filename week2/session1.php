<?php 

// Date & time ..... 

//  date(format,timestamp);

/*
  d  01-31
  D  Sun 
  m  01-12 
  M  jan 
  F  
  y  22 
  Y  2022 

 h 01-12
 H 00 - 23 
 i 00-59
 s 00-59 
 a am/pm 
 A AM/PM 


*/


//    echo date('Y/m/d h:i s a');    // 2022/03/14 09:44 55 am

  // echo time();  // 1647161734

//   echo date('Y/m/d ',1647161734); 

  //  echo strtotime("2022/03/14  10:00:00 am");    // 1647248400

//   echo date('Y/m/d h:i s a',1647248400);    // 2022/03/14 10:00 00 am


// echo date('Y/m/d h:i s a');

//   echo date_default_timezone_get();
    //    date_default_timezone_set('africa/cairo');
    //    echo date('Y/m/d h:i s a');


##################################################################################################################### 
// JSON

//   $student =  '{
//                  "name" : "Root", 
//                  "age"  : 19 , 
//                  "level":3
//               }';
 


// $output =  json_decode($student,true);

// //    var_dump($output);

//    foreach ($output as $key => $value) {
//        # code...
//        echo $key.' : '.$value.'<br>';
//    }


// $output =  json_decode($student);

//     // echo $output->name;
//     echo $output->age;





//    $data =   file_get_contents('https://tools.learningcontainer.com/sample-json-file.json');


//     $output = json_decode($data,true);

//     echo $output['Name'].'||'.$output['Mobile'].'<br>';

//     foreach ($output['Pets'] as $key => $value) {
//         # code...
//         echo $key.' : '.$value.'<br>';

//     }

// echo '############################################################################<br>';

//     foreach ($output['Address'] as $key => $value) {
//         # code...
//         echo $key.' : '.$value.'<br>';

//     }




//    $students = ["Name" => "root", "age" => 20 , "level" => 3 ]; 

//      $jsonData =  json_encode($students);

//      echo $jsonData;


?>