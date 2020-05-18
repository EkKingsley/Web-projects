<?php $num = false; ?>
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

<title>GPA Calculator</title>
<style>
    body{
        text-align: center;
    }
    .d {
        margin-top: 150px;
    }
    
</style>
</head>
<body>
    <?php if(isset($_POST['submit'])){
        $num = $_POST['num_courses'];
    } 
    ?>
    <?php 
    include("functions/functions.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        if(isset($_POST['num_courses'])){
        switch ($num){
            case 7:
                redirect_to('form7.php');
                break;
            case 8:
                redirect_to('form8.php');
                break;
            case 9:
                redirect_to('form9.php');
                break;
            case 10:
                redirect_to('form10.php');
                break;
            default:
                redirect_to('form7.php');
                break;
        }
        }
           }
    
    
    ?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="d jumbotron">
            Welcome to GPA Calculator Page.<br><br><br>
            <form action="index.php" method="post">
            <div class="inline-form">
                How many courses? <select name="num_courses">
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <input type="submit" name="submit" value="Submit" class="btn btn-secondary btn-outline">
            </div>
    
        </form>
        </div>
        
    </div>
    <div class="col-md-4"></div>
</div>

    
<script src="styles/bootstrap.min.js"></script>
<script src="styles/text.js"></script>
<script src="styles/jquery-1.11.3.min.js"></script>
</body>
</html>