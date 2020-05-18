<?php require_once("includes/conn.php");?>
<?php $title = "Create Subject"; ?>
<?php require_once("includes/functions.php");?>
<?php $errors = array();
//form validation

$require_fields = array('menu_name', 'position', 'validation');
foreach($require_fields as $fieldname){
    if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
        $errors[] = $fieldname;
    }
}

$fields_with_lengths = array('menu_name' => 30);
foreach($fields_with_lengths as $fieldname => $maxlength){
    if(strlen(trim(mysql_prep($_POST['$fieldname']))) > $maxlength){
        $errors[] = $fieldname;
    }
}

if(!empty($errors)){
    redirect_to("new_subject.php");
}
?>

<?php 
$menu_name = mysql_prep($_POST['menu_name']);
$position = mysql_prep($_POST['position']);
$visible = mysql_prep($_POST['visible']);
?>

<?php 
$q = "INSERT INTO subjects (
    menu_name, position, visible
) VALUES (
    '{$menu_name}', {$position}, {$visible}
)";
$result = mysql_query($q,$conn);
if($result){
    //success
    header("Location: content.php");
    exit;
} else {
    //display error message
    echo "<p>Subject Creation Failed!.</p>";
    echo "<p>" . mysql_error() . "</p>";
}

?>



<?php mysql_close($conn); ?>