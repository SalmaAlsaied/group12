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


###########################################################################################



//    $data =   file_get_contents('http://shopping.marwaradwan.org/api/Products/1/1/0/10/atoz');


//     $output = json_decode($data,true);


//     foreach ($output['data'] as $key => $value) {
//         # code...

//         echo $value['products_id'].' || '. $value['products_name'].'<br>';

//     }


################################################################################################# 


/*
# USER [name , email , password ]
 

 
# USER TABLE ... 
id   Name    Email    Password        userName 
 1    x        x@x     123               
 2    y        y@y     456         
 3    z        z@z     789         

 6    q        q@a     test


 # ADMIN Table 
 id   Name    Email    Password  


# reset id to 1 
alter table users AUTO_INCREMENT = 1;

*/








?>