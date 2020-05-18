<?php

DEFINE ('HOST', 'localhost');
DEFINE ('USER', 'root');
DEFINE ('PASSWORD', 'EKKINORA');

//create connection
$conn = new mysqli(HOST, USER, PASSWORD);

//check connection
if($conn ->connect_error){
    die("failed to connect" . $conn -> connect_error);
}

echo "Connection Successful";


//create DB
$q = "CREATE DATABASE schools";
if($conn -> query($q) === true){
    echo "Database creation successful!";
} else {
    echo "Error creating database";
}
$conn -> close();

?>