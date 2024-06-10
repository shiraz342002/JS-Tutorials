<?php
$u=$_GET["u"];
$conn = new mysqli('localhost', 'root', '', 'kfuiet');

$q="SELECT City FROM student WHERE Name='$u'";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$records=$conn->query($q);
if($records->num_rows>0){
    echo "$u  Exsists";
}
else{
    echo "$u is not Exist";
}

}
?>