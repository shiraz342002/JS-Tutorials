<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="process_form.php">
    <?php
    $conn=new mysqli('localhost','root','','kfuiet');
    if($conn->errno){
        die("Connection not established");
    }
    else{
        $q="SELECT Roll,Name FROM student";
        $records=$conn->query($q);
        echo "Select a Student: ";
        echo "<select name=dcountry>";
        while($row=$records->fetch_assoc()){
            $n=$row["Name"];
            $r=$row["Roll"];
            echo "<option value='$r'>$n</option>";
        }
        echo "</select>";
    }
    ?>
    <br>
      <input type="submit" value="Submit">
</form>
    
</body>
</html>