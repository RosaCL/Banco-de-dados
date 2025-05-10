<?php

$host="localhost";
$user="root";
$pass="";
$db="biblioteca";

$conn=new mysqli($host,$user,$pass,$db);

$table="livro";
$titulo="A Cabeça do Santo";
$ano_publicacao="2014";
$genero="Romance";
$autor="Socorro Acioli";

$q="INSERT INTO $table(`titulo`, `ano_publicacao`, `genero`, `autor`) VALUES ('$titulo', '$ano_publicacao', '$genero', '$autor')";

$conn->query($q);
$conn->close();



?>