<?php
$f1 = fopen('4.txt', 'w') or die("Unable to open bro");
$x = "I am the string that is needed to be added lmao";
fwrite($f1, $x);
fclose($f1);
// Open the file in read mode
$f1 = fopen('4.txt', 'r') or die("Unable to open bro");
while (!feof($f1)) {
    $line = fgets($f1);
    echo $line;
}

fclose($f1);
?>
