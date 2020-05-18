
<?php
$num = false;
$num = $_GET['num'];





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




?>