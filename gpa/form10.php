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

<title>Calculator</title>
    <style>
        .c {
        margin: 20px;
        background: #95A5A6;
        padding: 20px;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }
    h5 {
        text-align: center;
        color: white;
        font-family: sans-serif;
    }
    .r {
        border: none;
        border-bottom: 2px solid white;
    }
    .message {
            color: red;
        }
        .d {
        display: none;
    }
    .w {
        margin-top: 70px;
    }
    .x:hover {
        background: #95A5A6;
        color: white;
        opacity: 3.0;
        transition-delay: 0.1s;
    }
    .y:hover {
        background: #95A5A6;
        color: white;
        opacity: 3.0;
        transition-delay: 0.1s;
    }
    </style>
</head>
    <body>
        <?php
        include("functions/functions.php");
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
        $marks = array();
        $cr = array();
        $gp = array();
        $g = array();
        $gc = array();
        $gct = 0;
        $crt = 0;
        $gpa = 0;
        $required_fields = array();
        if(isset($_POST['submit'])){
                //create required fields
                $required_fields = array('course1', 'course2', 'course3', 'course4', 'course5', 'course6', 'course7', 'course8', 'course9', 'course10', 'cr1', 'cr2', 'cr3', 'cr4', 'cr5', 'cr6', 'cr7','cr8', 'cr9', 'cr10');
                //initialize error array
                $errors = array();
                foreach($required_fields as $fieldname){
                    if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
                        $errors[] = $fieldname . " not set."; 
                    }else if(isset($_POST[$fieldname]) && !is_numeric($_POST[$fieldname])){
                        $errors[] = $fieldname . " should be integer.";
                    }
                }
            if(empty($errors)){
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
    for($x = 0; $x < 10; $x++){
        
        $gc[$x] = $gp[$x] * $cr[$x];
        $gct += $gc[$x];
        $crt += $cr[$x];
    }
    
    $gpa = $gct / $crt;
    
        }else{
            $message = "There were " . count($errors) . " errors in the form.";
        }
                
            }    
        
        ?>
        <div class="row">
    <div class="col-md-4"></div>
    <?php 
        if(isset($_POST['submit']) && empty($errors)){
            echo "<div class=\"col-md-4 w\">";
            echo "<table><thead><tr><th>Marks</th><th>Credit Hours</th><th>Grade</th><th>Grade Point</th></tr></thead>";
            echo "<tbody>";
            for($x = 0; $x < 10; $x++){
            echo "<tr class=\"x\"><td>" . $marks[$x] . "</td><td>" . $cr[$x] . "</td><td>" . $g[$x] . "</td><td>" . round($gp[$x],2) . "</td></tr>";
        }
            echo "<tr class=\"x\"><td colspan=\"2\">" . 'Total Credit: ' . array_sum($cr) . "</td>";
            echo "<tr class=\"x\"><td colspan=\"2\">" . 'Total GPts: ' . array_sum($gp) . "</td>";
            echo "</tbody><tfoot><tr class=\"y\"><td rowspan=\"2\" colspan=\"4\"><h3 class=\"y\">" . "GPA = " . round($gpa, 2) . "</h3></td></tr></tfoot></table>";
            echo "</div>";
        }    
    ?>
    <div class="col-md-4 c <?php if(isset($_POST['submit']) && empty($errors)) echo d ?>">
        <?php if(!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
        <?php if(!empty($errors)) { display_errors($errors); } ?>
        <form action="#" method="post">
        
            <div class="row r"><h5>Enter Course Marks and respective Credit hours</h5></div>
            <br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course1" placeholder="1st Course" value="<?php if(isset($_POST['course1'])) echo $_POST['course1']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr1" value="<?php if(isset($_POST['cr1'])) echo $_POST['cr1']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course2" placeholder="2nd Course"  value="<?php if(isset($_POST['course2'])) echo $_POST['course2']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr2" value="<?php if(isset($_POST['cr2'])) echo $_POST['cr2']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course3" placeholder="3rd Course"  value="<?php if(isset($_POST['course3'])) echo $_POST['course3']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr3" value="<?php if(isset($_POST['cr3'])) echo $_POST['cr3']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course4" placeholder="4th Course"  value="<?php if(isset($_POST['course4'])) echo $_POST['course4']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr4" value="<?php if(isset($_POST['cr4'])) echo $_POST['cr4']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course5" placeholder="5th Course"  value="<?php if(isset($_POST['course5'])) echo $_POST['course5']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr5" value="<?php if(isset($_POST['cr5'])) echo $_POST['cr5']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course6" placeholder="6th Course"  value="<?php if(isset($_POST['course6'])) echo $_POST['course6']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr6" value="<?php if(isset($_POST['cr6'])) echo $_POST['cr6']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course7" placeholder="7th Course"  value="<?php if(isset($_POST['course7'])) echo $_POST['course7']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr7" value="<?php if(isset($_POST['cr7'])) echo $_POST['cr7']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course8" placeholder="8th Course"  value="<?php if(isset($_POST['course8'])) echo $_POST['course8']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr8" value="<?php if(isset($_POST['cr8'])) echo $_POST['cr8']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course9" placeholder="9th Course"  value="<?php if(isset($_POST['course9'])) echo $_POST['course9']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr9" value="<?php if(isset($_POST['cr9'])) echo $_POST['cr9']; ?>">
        </div>
</div>
<br>
<div class="row">
        <div class="col">
            <input type="text" class="form-control" name="course10" placeholder="10th Course"  value="<?php if(isset($_POST['course10'])) echo $_POST['course10']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Credit Hours" name="cr10" value="<?php if(isset($_POST['cr10'])) echo $_POST['cr10']; ?>">
        </div>
</div>
<br>
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

