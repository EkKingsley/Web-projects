<?php
include("connect.php");

//query
$q = "CREATE DATABASE class";

if($dbconn->query($q) === true){
    echo "database creation was successful";
}else{
    echo "error creating database";
}

$dbconn->close();

?>