<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name=$_POST["name"];
    $roll=$_POST["roll"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];
    $skills=$_POST["skills"];
    $java = 0;
    $python = 0;
    $php = 0;
    foreach ($skills as $skill) {
        if ($skill == 'java') {
            $java = 1;
        } elseif ($skill == 'python') {
            $python = 1;
        } elseif ($skill == 'php') {
            $php = 1;
        }
    }
    $conn= new mysqli('localhost','root','','week_5');
    if($conn->connect_error){
        die("Connection to database failed");
    }
    else{
        $q="UPDATE employee SET Name='$name', Roll='$roll',Country='$country',Gender='$gender',Java='$java',Python='$python',PHP='$php' WHERE Roll='$roll'";
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