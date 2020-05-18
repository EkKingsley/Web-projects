<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'EKKINORA');
DEFINE ('DB_NAME', 'schools');
//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//check connection
if($conn ->connect_error){
    die("failed to connect" . $conn -> connect_error);
}

echo "Connection Successful";

//create table
$q = "CREATE TABLE studentTbl(
    fname VARCHAR(30),
    lname VARCHAR(40)
)";

if($conn -> query($q) === true){
    echo "Table Creation successful!";
}else {
    echo "error creating table!";
}

$conn -> close();

?>