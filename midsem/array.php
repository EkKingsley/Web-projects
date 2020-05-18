
 <?php
$letters = "redipotubena";
        $p = $repl = $nletters = false;
        if(isset($_POST['replace'])){
            $p = $_POST['pos'];
            $repl = $_POST['text'];
            $nletters = "redipotubena";
            $nletters[$p] = $repl;
            
        }
        
        ?>
<?php if(isset($letters)) echo "<p>Before :  " . $letters . "</p><br><br>";?>
            <?php if(isset($nletters)) echo "<p>After :  " . $nletters . "</p><br>";?>