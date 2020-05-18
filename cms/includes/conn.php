<?php
require("constants.php");

//1. Create a DB connection
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if(!$conn){
    die("Database connection faile: " . mysql_error());
}

//2. Select a DB to use
$db_select = mysql_select_db(DB_NAME, $conn);
if(!$db_select){
    die("Database selection failed: " . mysql_error());
}
?>