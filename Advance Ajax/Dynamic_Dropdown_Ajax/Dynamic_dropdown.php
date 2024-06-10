<?php
$c_id=$_GET["c_id"];
$conn = new mysqli('localhost', 'root', '', 'dynamic_country_dd');
$q="SELECT Cities FROM cities WHERE country_id='$c_id'";
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $records=$conn->query($q);
    echo "<br>Select Your City:";
    echo "<select name='city'>";
    while($row=$records->fetch_assoc()){
        $c=$row["Cities"];
        echo "<option value='$c'>$c</option>";
    }
    echo "</select>";
}


?>