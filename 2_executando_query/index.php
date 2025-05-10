<?php

$host="localhost";
$user="root";
$pass="";
$db="biblioteca";

$conn=new mysqli($host,$user,$pass,$db);


$sql="SELECT * FROM autor";

$result=$conn->query($sql);

print_r($result);


?>