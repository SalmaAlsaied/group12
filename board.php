<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <table  width="300px" >
     
     <?php 
       
     for ($rows=1; $rows <= 8 ; $rows++) { 
         
       echo '<tr>'; 

     for ($cols=1; $cols <= 8 ; $cols++) { 
         # code...

       if((($rows + $cols) % 2) == 0){

           echo '<td  height=35 width=35 bgcolor=#FFFFFF ></td>';
       }else{
          echo '<td  height=35 width=35 bgcolor=#000000 ></td>';
       }


         
     }  

       echo '</tr>'; 

     }


     ?>
 

   </table>


</body>
</html>