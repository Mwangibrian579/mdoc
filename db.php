<?php

$servername = "localhost";
$surname= "root";
$password="";
$dbname ="mdoc";

$conn = mysqli_connect($servername, $surname, $password,$dbname); 
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
    }

    ?>