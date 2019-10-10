<?php
session_start();
if(isset($_POST["log"])) {
//    $f = $_POST['fname'];
    $p = $_POST['password'];
    $em = $_POST['email'];
    $_SESSION["name"] = $f;
//    echo  $_SESSION['name'];
    $sqli = "SELECT * FROM Customers where email='$em' && password='$p'";
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
    <title>login</title>
</head>
<body>
<h1 class="w-25 mx-auto" style="color: #fc0398;"> Login </h1>
<form class="w-25 mx-auto">
    <div class="form-group ">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name=password' class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
      <button type="submit" name="log" class="btn btn-primary" style="background-color: #fc0398;">Login</button>
</form>

</body>
</html>