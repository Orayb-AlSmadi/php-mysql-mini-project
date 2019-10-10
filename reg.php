

<?php
session_start();
if(isset($_POST["submit"])) {
    $f = $_POST['fname'];
    $l = $_POST['lname'];
    $u = $_POST['uname'];
    $p = $_POST['password'];
    $em = $_POST['email'];
    $_SESSION["name"] = $f;
//    echo  $_SESSION['name'];
    $sql = "INSERT INTO customers (firstname, lastname, username, password, email) VALUES ('$f', '$l', '$u', '$p','$em')";
    include('db.php');
}
   ?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>

<h1 class="w-25 mx-auto"  style="color: #fc0398;"> Sign Up </h1>
<form class="w-25 mx-auto align-middle" action="reg.php" method="POST" >
    <div class="form-group ">
        <label for="firstname">First name</label>
        <input type="text" class="form-control" name="fname" id="firstname" aria-describedby="emailHelp" placeholder="Enter first name" required>
    </div>
    <div class="form-group ">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control" name="lname" id="lastname" aria-describedby="emailHelp" placeholder="Enter last name" required>
    </div>
    <div class="form-group ">
        <label for="username">User name</label>
        <input type="text" class="form-control" name="uname" id="username" aria-describedby="emailHelp" placeholder="Enter user name" required>
    </div>
    <div class="form-group ">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #fc0398;">SignUp</button>
</form>

</body>
</html>