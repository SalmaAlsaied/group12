<?php

 require 'dbConnection.php';
 require 'checkLogin.php';

// $myId = $_SESSION['user']['id'];
$sql = "select * from users ";

$data = mysqli_query($con, $sql);




?>


<!DOCTYPE html>
<html>

<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>Read Users </h1>
            <br>
           <?php 
               # Welcome Message to Login User .... 
               
               echo 'Welcome , '.$_SESSION['user']['name'];
           
           ?>
            <br>

            <?php

            if (isset($_SESSION['Message'])) {

                # Display Message .... 
                echo '* ' . $_SESSION['Message'];

                # Remove session 
                unset($_SESSION['Message']);
            }


            ?>


        </div>

        <a href="Create.php">+ Account</a> || <a href="logOut.php">LogOut</a>

        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile Image</th>
                <th>action</th>
            </tr>



            <?php

            while ($raw = mysqli_fetch_assoc($data)) {

            ?>

                <tr>

                    <td><?php echo $raw['id']; ?></td>
                    <td><?php echo $raw['name']; ?></td>
                    <td><?php echo $raw['email']; ?></td>
                    <td> <img src="./uploads/<?php echo $raw['image']; ?>"  width="80" height="80"  >  </td>
                    <td>
                        
                   <?php 
                    
                    if($raw['id'] !== $_SESSION['user']['id']){
                      
                   ?>
                    <a href='delete.php?id=<?php echo $raw['id']; ?>' class='btn btn-danger m-r-1em'>Delete</a>
                   <?php }?>


                        <a href='edit.php?id=<?php echo $raw['id']; ?>' class='btn btn-primary m-r-1em'>Edit</a>
                    </td>

                </tr>
            <?php }



            mysqli_close($con);

            ?>

            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>