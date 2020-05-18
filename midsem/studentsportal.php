
<!DOCTYPE html>
<html>
<head>

<title>Insert Data</title>

</head>
<body>
    <?php
    $error = array();
    $num1 = $num2 = $num3 = $num4 = false;
    $sum = $mean = $d = false;
    if(isset($_POST['check'])){
         if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4'])){
             $num1 = $_POST['num1'];
             $num2 = $_POST['num2'];
             $num3 = $_POST['num3'];
             $num4 = $_POST['num4'];
             
                 $sum = $sum + $num1 + $num2;
                
            echo $sum;
                 if($sum % 2 == 1){
                     echo " sum is odd";
                 }else {
                     echo " sum is even";
                 }
             }
         }
        $mean = array_sum($_POST[]) / count($_POST[]);
        }
    
    ?>

<form action="#" method="post">
    <p>Number 1: <input type="text" name="num1"></p>
    <p>Number 2: <input type="text" name="num2"></p>
    <p>Number 3: <input type="text" name="num3"></p>
    <p>Number 4: <input type="text" name="num4"></p>
    <p><input type="submit" name="check" value="check"></p>
</form>

</body>
</html>