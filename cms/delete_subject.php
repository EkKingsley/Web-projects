<?php require_once("includes/conn.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
if(intval($_GET['subj']) == 0){
    redirect_to("content.php");
}

$id = mysql_prep($_GET['subj']);

if($subject = get_subject_by_id($id)){
    $q = "DELETE FROM subjects WHERE id = {$id} LIMIT 1";
    $result = mysql_query($q, $conn);
    if(mysql_affected_rows() == 1){
        redirect_to("content.php");
    } else {
        //deletion failed
        echo "<p>Subject deletion failed.</p>";
        echo "<p>" . mysql_error() . "</p>";
        echo "<a href=\"content.php\">Return to Main Page</a>";
    }
} else {
    //subject didn't exist in database
    redirect_to("content.php");
}
?>

<?php mysql_close($conn); ?>