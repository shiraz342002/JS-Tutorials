<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Delete_Emp.php" method="post">
    </form>
    <?php
    
    $r=$_GET["Roll"];
    $conn= new mysqli('localhost','root','','week_5');
    if($conn->connect_error){
        die('Connection failed '.$conn->connect_error);
    }
    else{
        $q="Delete FROM employee where Roll=$r";
        if($conn->query($q)){
            echo "Record Deleted Succesfully";
            
        }
        else{
            echo "Query didn't run try again";
        }
    }
    ?>
</body>
</html>