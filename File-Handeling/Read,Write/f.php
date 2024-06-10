<?php
$f1 = fopen("3.txt", "r") or die("Unable to open file!");
// $content=fread($f1,filesize("3.txt"));
while(!feof($f1)){
    // $line=fgets($f1);
    // echo "$line<br>";
    $char=fgetc($f1);
    echo "$char";


}
?>