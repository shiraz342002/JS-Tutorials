<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    $roll=$_GET["Roll"];
    $conn= new mysqli('localhost','root','','kfuiet');
    $q="SELECT * FROM student WHERE Roll=$roll";
    if($conn->connect_error){
        die('Connection failed '.$conn->connect_error);
    }
    else{
        $records=$conn->query($q);
        $row=$records->fetch_assoc();
        $n=$row["Name"];
        $rollno=$row["Roll"];
        $c=$row["City"];
    }


    ?>
<body>
    <form action="Update_Student.php" name="f1" method="post">
        <h2>You Can Edit Your Record Here</h2>
        <h3>Change Your Credentials and hit Update</h3>
        Name : <input type="text" name="t1" value="<?php echo $n;?>">
        <input type="hidden" name="t2" value="<?php echo $rollno;?>"><br>
        City : <input type="text" name="t3" value="<?php echo $c;?>"><br>
        <input type="submit" value="Update Record">
    </form>
</body>
</html>