<?php

include("connect.php");

//create query
$q = "CREATE TABLE studentTbl(
    fname VARCHAR(30),
    lname VARCHAR(40)
)";

//check query
if($dbconn->query($q) === true){
    echo "table creation was successful";
}else{
    echo "unsuccessful";
}

$dbconn->close();

?>