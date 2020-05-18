
<!DOCTYPE html>
<html>
<body>    
<?php 
    $req = array('num1', 'num2');
    if(isset($_POST['Submit'])){
        $errors = array();
        foreach($req as $r){
            if(!isset($_POST[$r]) || empty($_POST[$r])){
                $errors[] = $r . " is empty. Please enter a value.";
            }elseif(isset($_POST[$r]) && !is_numeric($_POST[$r])){
                $errors[] = $r . " should numeric.";
        }
        }
    }else{
        $errors[] = "Please enter values in fields.";
    } 
?>
 <?php 
        if(isset($_POST['Submit'])){
            if(!empty($errors)){
        echo "Please review these fields.". "<br>";
        foreach($errors as $err){
        echo "-- " . $err . "<br>";
        }
    }
    }
    ?>
<?php 
    if(empty($errors)){
        echo "<form action=" . '"try.php"' . "method=" . '"post">';
    }elseif(!empty($errors)){
        echo "<form action=" . '"forms.php"' . "method=" . '"post">';
    }
?>
    <p><input type="text" name="num1" placeholder="Num 1"></p>
    <p></p>
    <p><input type="text" name="num2" placeholder="Num 2"></p>
    <p><input type="submit" name="Submit" value="Add"></p>
</form>

    

</body>
</html>
