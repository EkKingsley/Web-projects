
<!DOCTYPE html>
<html>
<head>

<title>Delete Data</title>

</head>
<body>
<?php include("connect.php");?>
    
<?php 
$index = $name = $age = $phone = false; 
    if(isset($_POST['show'])){
        
    $query = "SELECT * FROM student_detail";
    $result = $conn -> query($query);
    if($result -> num_rows > 0){
        //output data
        echo "<table><thead><tr><th>Index NUMBER</th><th>Name</th><th>Age</th><th>Phone</th></tr></thead>";
        while($row = $result -> fetch_assoc()){
            echo "<tbody>";
            echo "<tr><td>" . $row['index Number'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>" . $row['phone'] . "</td></tr>";
        }
    }else { echo "0 results"; }
    
        
    }
    
?>
<form action="#" method="post">
    <p><input type="submit" name="show" value="Show"></p>
</form>

</body>
</html>