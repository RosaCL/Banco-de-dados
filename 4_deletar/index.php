<?php

$host="localhost";
$user="root";
$pass="";
$db="biblioteca";

$conn=new mysqli($host,$user,$pass,$db);

//deletar tabela
$q="DROP TABLE cliente";
$conn->query($q);
$conn->close();


?>