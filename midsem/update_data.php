
<!DOCTYPE html>
<html>
<head>

<title>Update Data</title>

</head>
<body>
<?php include("connect.php"); 
    $dbi = $dbn = $dba = $dbp = false;
    
?>
    
<?php 
$index = $name = $age = $phone = false; 
    if(isset($_POST['update'])){
        
        $query = "SELECT * FROM student_detail";
    $result = $conn -> query($query);
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $dbi = $row['index Number'];
            $dbn = $row['name'];
            $dba = $row['age'];
            $dbp = $row['phone'];
        }
    }    
        
        if(isset($_POST['index'])){
            $index = $_POST['index'];
        }else if(empty($_POST['index'])){
            $index = $dbi;
        }
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }else if(empty($_POST['name'])){
            $name = $dba;
        }
        if(isset($_POST['age'])){
            $age = $_POST['age'];
        }else if(empty($_POST['age'])){
            $age = $dba;
        }
        if(isset($_POST['phone'])){
            $phone = $_POST['phone'];
        }else if(empty($_POST['phone'])){
            $phone = $dbp;
        }
        
    
        
        $q = "UPDATE `student_detail` SET `index Number`= '$index',`name`= '$name',`age`=$age,`phone`=$phone";
        
        if($conn -> query($q) === true){
            echo "updating data successful";
        }else {
            echo "error updatting data";
        }
        
    }
    
?>
<form action="#" method="post">
    <p>Index Number : <input type="text" name="index"></p>
    <p>Name : <input type="text" name="name"></p>
    <p>Age : <input type="number" name="age"></p>
    <p>phone : <input type="text" name="phone"></p>
    <p><input type="submit" name="update" value="Update"></p>
</form>

</body>
</html>