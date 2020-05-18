<?php
include("functions/functions.php");
$num = false;
if(isset($_POST['num_courses'])){
    $num = $_POST['num_courses'];
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/animate.min.css">
<link rel="stylesheet" href="styles/style.css">

<title>GPA Calculator</title>
<style>
    .c {
        margin: 20px;
        background: #95A5A6;
        padding: 20px;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }
    h2 {
        text-align: center;
        color: white;
        font-family: sans-serif;
    }
    .r {
        border: none;
        border-bottom: 2px solid white;
    }
</style>
</head>

<body>
    <!-- start of php form validation -->
<?php

function gp($value){
    global $gp;
    global $g;
    if($value >= 80){
        $gp[] = 4.0;
        $g[] = 'A';
    }else if($value >= 75){
        $gp[] = 3.5;
        $g[] =  'B+';
    }else if($value >= 70){
        $gp[] = 3.0;
        $g[] = 'B';
    }else if($value >= 65){
        $gp[] = 2.5;
        $g[] = 'C+';
    }else if($value >= 60){
        $gp[] = 2.0;
        $g[] = 'C';
    }else if($value >= 55){
        $gp[] = 1.5;
        $g[] = 'D+';
    }else if($value >= 50){
        $gp[] = 1.0;
        $g[] = 'D';
    }else if($value >= 45){
        $gp[] = 0.5;
        $g[] = 'E';
    }else if($value < 45){
        $gp[] = 0.0;
        $g[] = 'F';
    }
}
if(isset($_POST['submit'])){
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

$marks = array();
$cr = array();
$gp = array();
$g = array();
$gc = array();
$gct = 0;
$crt = 0;
$gpa = 0;
$required_fields = array();
    if($num == 7){
        $required_fields = array('course1', 'course2', 'course3', 'course4', 'course5', 'course6', 'course7', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7');
    }elseif($num == 8){
        $required_fields = array('course1', 'course2', 'course3', 'course4', 'course5', 'course6', 'course7', 'course8', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7', 'cr8');
    }elseif($num == 9){
        $required_fields = array('course1', 'course2', 'course3', 'course4', 'course5', 'course6', 'course7', 'course8', 'course9', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7', 'cr8', 'cr9');
    }elseif($num == 10){
        $required_fields = array('course1', 'course2', 'course3', 'course4', 'course5', 'course6', 'course7', 'course8', 'course9', 'course10', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7', 'cr8', 'cr9', 'cr10');
    }
    $errors = array();
        // perform validations on the form data
        foreach($required_fields as $fieldname){
            if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
                $errors[] = $fieldname . " not set."; 
            }else if(isset($_POST[$fieldname]) && !is_numeric($_POST[$fieldname])){
                $errors[] = $fieldname . " should be integer.";
            }
        }  
     
     if(empty($errors)){
        if($num == 7){
    $marks[] = $_POST['course1'];
    gp($_POST['course1']);
    $marks[] = $_POST['course2'];
    gp($_POST['course2']);
    $marks[] = $_POST['course3'];
    gp($_POST['course3']);
    $marks[] = $_POST['course4'];
    gp($_POST['course4']);
    $marks[] = $_POST['course5'];
    gp($_POST['course5']);
    $marks[] = $_POST['course6'];
    gp($_POST['course6']);
    $marks[] = $_POST['course7'];
    gp($_POST['course7']);
    $cr[] = $_POST['cr1'];
    $cr[] = $_POST['cr2'];
    $cr[] = $_POST['cr3'];
    $cr[] = $_POST['cr4'];
    $cr[] = $_POST['cr5'];
    $cr[] = $_POST['cr6'];
    $cr[] = $_POST['cr7'];
    
    for($x = 0; $x < $num; $x++){
        
        $gc[$x] = $gp[$x] * $cr[$x];
        $gct += $gc[$x];
        $crt += $cr[$x];
    }
    
    $gpa = $gct / $crt;
    echo "<table><thead><tr><th>Marks</th><th>Credit Hours</th><th>Grade</th><th>Grade Point</th></tr></thead>";
    echo "<tbody>";
    for($x = 0; $x < $num; $x++){
        echo "<tr><td>" . $marks[$x] . "</td><td>" . $cr[$x] . "</td><td>" . $g[$x] . "</td><td>" . round($gp[$x],2) . "</td></tr>";
    }
    echo "</tbody><tfoot><tr><td rowspan=\"2\" colspan=\"4\"><h3>" . "GPA = " . round($gpa, 2) . "</h3></td></tr></tfoot></table>";
    
    
    
    
}else if($num == 8){
    $marks[] = $_POST['course1'];
    gp($_POST['course1']);
    $marks[] = $_POST['course2'];
    gp($_POST['course2']);
    $marks[] = $_POST['course3'];
    gp($_POST['course3']);
    $marks[] = $_POST['course4'];
    gp($_POST['course4']);
    $marks[] = $_POST['course5'];
    gp($_POST['course5']);
    $marks[] = $_POST['course6'];
    gp($_POST['course6']);
    $marks[] = $_POST['course7'];
    gp($_POST['course7']);
    $marks[] = $_POST['course8'];
    gp($_POST['course8']);
    $cr[] = $_POST['cr1'];
    $cr[] = $_POST['cr2'];
    $cr[] = $_POST['cr3'];
    $cr[] = $_POST['cr4'];
    $cr[] = $_POST['cr5'];
    $cr[] = $_POST['cr6'];
    $cr[] = $_POST['cr7'];
    $cr[] = $_POST['cr8'];
    
    for($x = 0; $x < $num; $x++){
        
        $gc[$x] = $gp[$x] * $cr[$x];
        $gct += $gc[$x];
        $crt += $cr[$x];
    }
    
    $gpa = $gct / $crt;
    echo "<table><thead><tr><th>Marks</th><th>Credit Hours</th><th>Grade</th><th>Grade Point</th></tr></thead>";
    echo "<tbody>";
    for($x = 0; $x < $num; $x++){
        echo "<tr><td>" . $marks[$x] . "</td><td>" . $cr[$x] . "</td><td>" . $g[$x] . "</td><td>" . round($gp[$x],2) . "</td></tr>";
    }
    echo "</tbody><tfoot><tr><td rowspan=\"2\" colspan=\"4\"><h3>" . "GPA = " . round($gpa, 2) . "</h3></td></tr></tfoot></table>";
    
}else if($num == 9){
    $marks[] = $_POST['course1'];
    gp($_POST['course1']);
    $marks[] = $_POST['course2'];
    gp($_POST['course2']);
    $marks[] = $_POST['course3'];
    gp($_POST['course3']);
    $marks[] = $_POST['course4'];
    gp($_POST['course4']);
    $marks[] = $_POST['course5'];
    gp($_POST['course5']);
    $marks[] = $_POST['course6'];
    gp($_POST['course6']);
    $marks[] = $_POST['course7'];
    gp($_POST['course7']);
    $marks[] = $_POST['course8'];
    gp($_POST['course8']);
    $marks[] = $_POST['course9'];
    gp($_POST['course9']);
    $cr[] = $_POST['cr1'];
    $cr[] = $_POST['cr2'];
    $cr[] = $_POST['cr3'];
    $cr[] = $_POST['cr4'];
    $cr[] = $_POST['cr5'];
    $cr[] = $_POST['cr6'];
    $cr[] = $_POST['cr7'];
    $cr[] = $_POST['cr8'];
    $cr[] = $_POST['cr9'];
    
    for($x = 0; $x < $num; $x++){
        
        $gc[$x] = $gp[$x] * $cr[$x];
        $gct += $gc[$x];
        $crt += $cr[$x];
    }
    
    $gpa = $gct / $crt;
    echo "<table><thead><tr><th>Marks</th><th>Credit Hours</th><th>Grade</th><th>Grade Point</th></tr></thead>";
    echo "<tbody>";
    for($x = 0; $x < $num; $x++){
        echo "<tr><td>" . $marks[$x] . "</td><td>" . $cr[$x] . "</td><td>" . $g[$x] . "</td><td>" . round($gp[$x],2) . "</td></tr>";
    }
    echo "</tbody><tfoot><tr><td rowspan=\"2\" colspan=\"4\"><h3>" . "GPA = " . round($gpa, 2) . "</h3></td></tr></tfoot></table>";
    
}else if($num == 10){
    $marks[] = $_POST['course1'];
    gp($_POST['course1']);
    $marks[] = $_POST['course2'];
    gp($_POST['course2']);
    $marks[] = $_POST['course3'];
    gp($_POST['course3']);
    $marks[] = $_POST['course4'];
    gp($_POST['course4']);
    $marks[] = $_POST['course5'];
    gp($_POST['course5']);
    $marks[] = $_POST['course6'];
    gp($_POST['course6']);
    $marks[] = $_POST['course7'];
    gp($_POST['course7']);
    $marks[] = $_POST['course8'];
    gp($_POST['course8']);
    $marks[] = $_POST['course9'];
    gp($_POST['course9']);
    $marks[] = $_POST['course10'];
    gp($_POST['course10']);
    $cr[] = $_POST['cr1'];
    $cr[] = $_POST['cr2'];
    $cr[] = $_POST['cr3'];
    $cr[] = $_POST['cr4'];
    $cr[] = $_POST['cr5'];
    $cr[] = $_POST['cr6'];
    $cr[] = $_POST['cr7'];
    $cr[] = $_POST['cr8'];
    $cr[] = $_POST['cr9'];
    $cr[] = $_POST['cr10'];
    
    for($x = 0; $x < $num; $x++){
        
        $gc[$x] = $gp[$x] * $cr[$x];
        $gct += $gc[$x];
        $crt += $cr[$x];
    }
    
    $gpa = $gct / $crt;
    echo "<table><thead><tr><th>Marks</th><th>Credit Hours</th><th>Grade</th><th>Grade Point</th></tr></thead>";
    echo "<tbody>";
    for($x = 0; $x < $num; $x++){
        echo "<tr><td>" . $marks[$x] . "</td><td>" . $cr[$x] . "</td><td>" . $g[$x] . "</td><td>" . round($gp[$x],2) . "</td></tr>";
    }
    echo "</tbody><tfoot><tr><td rowspan=\"2\" colspan=\"4\"><h3>" . "GPA = " . round($gpa, 2) . "</h3></td></tr></tfoot></table>";
    
}
    }else{
         $errors[] = "Please review the fields.";
    }
}
}
    
?>
    <!--end of form validation--> 
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 c">
        <form action="#" method="post">
        
            <div class="row r"><h2>Enter Course Marks and respective Credit hours</h2></div>
            <br>
            <?php if(isset($_POST['submit'])){ if(!empty($errors)){ display_errors($errors);}  } ?>
            <?php if(isset($num)){
                switch($num){
                    case 7:
                        include("includes/form7.php");
                        break;
                    case 8:
                        include("includes/form8.php");
                        break;
                    case 9:
                        include("includes/form9.php");
                        break;
                    case 10:
                        include("includes/form10.php");
                        break;
                    default:
                        include("includes/form7.php");
                }
        }   ?>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <input type="submit" name="submit" value="Calculate" class="btn btn-outline-light">
                </div>
            </div>
            
        </form>
    </div>
    <div class="col-md-4"></div>
    </div>
     

<script src="styles/bootstrap.min.js"></script>
<script src="styles/text.js"></script>
<script src="styles/jquery-1.11.3.min.js"></script>
</body>
</html>