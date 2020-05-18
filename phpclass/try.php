
<?php
$num1 = $num2 = 0;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

function add($n, $m){
    return $n + $m;
}

$r = add($num1, $num2);
echo $r;


?>





