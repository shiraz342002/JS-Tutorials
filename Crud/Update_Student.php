<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $roll=$_POST['t2'];
    $new_name=$_POST['t1'];
    $new_city=$_POST['t3'];
    $conn= new mysqli('localhost','root','','kfuiet');
    if($conn->connect_error){
        die("Connection to database failed");
    }
    else{
        $q="UPDATE student SET Name='$new_name', City='$new_city' WHERE Roll='$roll'";
        if($conn->query($q)){
            echo "Records Updated Successfully";
        }
        else{ 
            echo "Query did not execute";
        }
    }
    


    ?>
</body>
</html>