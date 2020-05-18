<?php 

DEFINE ('HOST', 'localhost');
DEFINE ('USER', 'root');
DEFINE ('PASSWORD', 'EKKINORA');
DEFINE ('DBNAME', 'student');

//create connection variable
$conn = new MySQLi(HOST, USER, PASSWORD, DBNAME);

//check connection
if($conn ->connect_error){
    die("failed to connect" . $conn -> connect_error);
}



?>