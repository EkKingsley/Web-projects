<?php

//opening a file
$file = fopen('test.txt', 'r+');
$h = "hello how are yu! \n";
fwrite($file,$h);
fclose($file);

$f = 'test.txt';
$content = file_get_contents($f);
echo $content;

?>