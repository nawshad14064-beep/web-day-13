<?php
$connection = new mysqli("127.0.0.1","root","417929","web_day_13",3306);
if($connection->connect_error){
    die("Connection Failed: " . $connection->connect_error);
}


$q= "SELECT * FROM `Product`";

$rs = $connection->query($q);

// echo($rs->num_rows);
// echo("<br/>")

//  =$rs->fetch_assoc();
// $row2 

// ?>