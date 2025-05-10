<?php

$host="localhost";
$user="root";
$pass="";
$db="biblioteca";

$conn=new mysqli($host,$user,$pass,$db);

$table="autor";
$nome="Socorro Acioli";
$nacionalidade="Brasil";
$email="socorrotheacioli@uol.com";

$q="INSERT INTO $table(`nome`, `nacionalidade`, `email`) VALUES ('$nome', '$nacionalidade', '$email')";

$conn->query($q);
$conn->close();



?>