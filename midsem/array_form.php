<!DOCTYPE html>
<html>
<head>


<title>Array Form</title>

</head>
<body>

<form action="array.php" method="post">
            <p>Position: <input type="number" name="pos" value="<?php if(isset($_POST['pos'])) echo $_POST['pos'] ;?>"></p>
            <p>Replace With: <input type="text" name="text" value="<?php if(isset($_POST['text'])) echo $_POST['text'] ;?>"></p>
            <p><input type="submit" name="replace" value="replace"></p>
        </form>

</body>
</html>