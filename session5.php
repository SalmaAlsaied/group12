
<?php
 include 'header.php';

?>
<body>

    <div class="container">
        <h2>Register (SESSION 5)</h2>

        <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>