<?php

$host="localhost";
$user="root";
$pass="";
$db="biblioteca";

$conn=new mysqli($host,$user,$pass,$db);

$q="CREATE TABLE cliente (nome VARCHAR(100), sobrenome VARCHAR(100) )";
$conn->query($q);
$conn->close();


?>