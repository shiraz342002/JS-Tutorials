<?php
$f1=fopen("3.txt","r") or die("File doesn't exists.");
$f2=fopen("4.txt","w")or die("File doesn't exists.");
while(!feof($f1)){
    $line=fgets($f1);
    fwrite($f2,$line);
}
fclose($f2);
$f3=fopen("4.txt","r");
while(!feof($f3)){
    $line=fgets($f3);
    echo $line."<br>";
}
fclose($f3);
fclose($f1);
?>