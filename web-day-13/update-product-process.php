<?php


$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$description = $_POST["description"];

$connection = new mysqli("127.0.0.1","root","417929","web_day_13",3306);
if($connection->connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

$q = "UPDATE `product` SET `name`='$name', `price`, `brand`='$brand',`model`='$model',`description`='$description',WHERE `id`='$id'";

$connection->query($q);

echo("success");

?>