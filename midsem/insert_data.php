
<!DOCTYPE html>
<html>
<head>

<title>Insert Data</title>

</head>
<body>
<?php include("connect.php"); ?>
    
<?php 
$index = $name = $age = $phone = false; 
    if(isset($_POST['insert'])){
        if(isset($_POST['index']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['name'])){
            $index = $_POST['index'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
        }else{
            echo "Please Fill fields and try again.";
        }
        
        $q = "INSERT INTO `student_detail`(`index Number`, `name`, `age`, `phone`) VALUES ('$index','$name',$age,$phone)";
        
        if($conn -> query($q) === true){
            echo "inserting data successful";
        }else {
            echo "error inserting data";
        }
        
    }
    
?>
<form action="#" method="post">
    <p>Index Number : <input type="text" name="index"></p>
    <p>Name : <input type="text" name="name"></p>
    <p>Age : <input type="number" name="age"></p>
    <p>phone : <input type="text" name="phone"></p>
    <p><input type="submit" name="insert" value="Insert"></p>
</form>

</body>
</html>