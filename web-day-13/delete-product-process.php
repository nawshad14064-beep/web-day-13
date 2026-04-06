<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$id = $_POST["id"];

$connection = new mysqli("127.0.0.1","root","417929","web_day_13",3306);
if($connection->connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

$q ="DELETE FROM `product` WHERE `id`='$id'";
$connection->query($q);

echo("Success");






?>