<!DOCTYPE html>
<html>
<head>


<title>about</title>
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
    <style>
        .d {
            display: none;
        }
    </style>
<body>
    <?php
    if(isset($_POST['submit'])){
        echo "<strong>This Department runs two degree programs and two diploma programs.</strong>";
    }
    ?>

<h3 class="<?php if(isset($_POST['submit'])) echo "d"; ?>">Welcome to the Department of Computer Science and Informatics.</h3>
    <form action="#" method="post">
        <input type="submit" name="submit" value="Change text">
    </form>

</body>
</html>