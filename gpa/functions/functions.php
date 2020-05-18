<?php
function display_errors($error_array){
    echo "<p class=\"message\">";
    echo "Please review the following fields: <br>";
    foreach($error_array as $error){
        echo " - " . $error . "<br>";
    }
    echo "</p>";
}

function redirect_to($location){
    if($location != null){
    header("Location: {$location}");
    exit;
    }
}



?>