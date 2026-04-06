<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$name = $_POST["name"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$description = $_POST["description"];

// echo("$name-$price-$brand-$model-$description");

$connection=new mysqli("127.0.0.1","root","417929","web_day_13",3306);
if($connection->connect_error) {
die("connection Failed:".$connection->connect_error);

}

$Q= "INSERT INTO`product`(`name`,`brand`,`model`,`price`,`discription`) VALUES ('$name','$brand','$model','$price','$description')";

$connection->query($q);

// header("Location: index.php");

?>

