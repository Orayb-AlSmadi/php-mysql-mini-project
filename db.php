<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "20092014As";
$dbname = "candy";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
//    echo  $_SESSION['name'];
    header('location: dashboard.php');
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;

?>